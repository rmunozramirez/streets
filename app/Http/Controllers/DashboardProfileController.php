<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Profile;
use App\Discussion;
use App\Status;
use App\Role;
use Session;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_roles = Role::pluck('name', 'id')->all();
        $profiles = Profile::orderBy('created_at', 'asc')->paginate(4);
        $all_profiles = Profile::get();
        $active_pr  = Status::where('status', 'active')->where('statusable_type' ,'profiles')->get();
        $inactive_pr  = Status::where('status', 'inactive')->where('statusable_type' ,'profiles')->get();
        $bann_pr  = Status::where('status', 'banned')->where('statusable_type' ,'profiles')->get();
        $trashed_pr = Profile::onlyTrashed()->get();
        $page_name = 'Profile';

       return view('dashboard.profiles.index', compact('all_roles', 'profiles', 'page_name', 'all_profiles', 'trashed_pr', 'status', 'active_pr', 'inactive_pr', 'bann_pr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_roles = Role::pluck('name', 'id')->all();
        $all_st = Status::pluck('name', 'id')->all();
        $all_profiles = Profile::all();
        $page_name =  'Create a new User';

        return view('dashboard.profiles.create', compact('all_profiles', 'page_name', 'all_roles', 'all_st'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
dd($request);
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $user_name = User::

        $profile = Profile::create([

            'user_name'     => $request->user_name, 
            'status_id'     => $request->status_id,
            'role_id'       => $request->role_id,
            'birthday'      => $request->birthday,
            'slug'          => str_slug($request->title, '-'),      
            'about'         => $request->about_user,
            'image'         => $name,
            'web'           => $request->web,
            'facebook'      =>  $request->facebook,
            'googleplus'    =>  $request->googleplus,
            'twitter'       =>  $request->twitter,
            'linkedin'      =>  $request->linkedin,
            'youtube'       =>  $request->youtube,

       ]);   

        $profile->save();

        Session::flash('success', 'Profile successfully created!');
     
        return redirect()->route('profiles.show', $profile->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $profile = Profile::where('slug', $slug)->first();
        $page_name = 'Profile from: ' . $profile->user_name;

        return view('dashboard.profiles.show', compact('profile', 'page_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $all_roles = Role::pluck('name', 'id')->all();
        $all_st = Status::pluck('name', 'id')->all();
        $profile = Profile::where('slug', $slug)->first(); 
        $page_name = 'Edit: ' . $profile->user_name;

          return view('dashboard.profiles.edit', compact('profile', 'page_name', 'all_roles', 'all_st'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $slug)
    {
        $input = $request->all();
        if ($request->name) { 
            $input['slug'] = str_slug($request->name, '-');
        }
        if ( $file = $request->file('image')) {
            $name = $file->getClientOriginalName()  . '_' . time();
            $file->move('images', $name);
            $input['image'] = $name;
        }
        $profile = Profile::where('slug', $slug)->first();
        $profile->fill($input)->save();
        $page_name = $profile;

        Session::flash('success', 'Profile successfully updated!');
     
        return redirect()->route('profiles.show', $profile->slug);
    }

    public function bann($slug)
    {
        $profile = Profile::where('slug', $slug)->first();
        $profile->status_id = 4;

        $profile->save();

        Session::flash('success', 'Profile successfully banned!');
        return redirect()->route('profiles.index');
    }

    public function allow($slug)
    {
        $profile = Profile::where('slug', $slug)->first();
        $profile->status_id = 1;

        $profile->save();

        Session::flash('success', 'Profile successfully allowed!');
        return redirect()->route('profiles.index');
    }

    public function destroy($slug)
    {
        
        $profile = Profile::where('slug', $slug)->first();
        $profile->delete();

        Session::flash('success', 'Profile successfully deleted!');
        return redirect()->route('profiles.index');
    }


    public function trashed()
    {
        $trashed_pr = Profile::onlyTrashed()->get();
        $page_name = 'Trashed Profiles';

        return view('dashboard.profiles.trashed', compact('trashed_pr', 'page_name'));
    }

    public function restore($slug)
    {
        $profile = Profile::withTrashed()->where('slug', $slug)->first();
        $profile->restore();

        Session::flash('success', 'Profile successfully restored!');
        return redirect()->route('profiles.index');
    }

    public function kill($slug)
    {
        $profile = Profile::withTrashed()->where('slug', $slug)->first();
        $profile->forceDelete();

        Session::flash('success', 'Profile pemanently deleted!');
        return redirect()->route('profiles.index');
    }

}
