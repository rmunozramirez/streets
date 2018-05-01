<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Discussion;
use App\Channel;
use App\Status;
use App\Role;
use Session;

class UserProfileController extends Controller
{
    public function index()
    {

        $profiles = Profile::orderBy('created_at', 'asc')->paginate(4);
        $all_ = Profile::with('statuses')->get();
        $trashed_pr = Profile::onlyTrashed()->get();
        $page_name = 'profiles';
        $index = 'yes';

       return view('dashboard.profile.index', compact('all_roles', 'profiles', 'page_name', 'all_', 'trashed_pr', 'status', 'index'));
    }

    public function create()
    {
        $all_roles = Role::pluck('title', 'id')->all();
        $all_st = Status::pluck('status', 'id')->all();
        $all_ = Profile::all();
        $page_name =  'profiles';
        $index = 'create';

        return view('dashboard.profiles.create', compact('all_', 'page_name', 'all_roles', 'all_st', 'index'));
    }

    public function store(ProfileRequest $request)
    {

        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $user = Auth::user();

        $profile = Profile::create([

            'user_id'     => $request->user->id, 
            'role_id'       => $request->role_id,
            'title'       => $request->title,
            'birthday'      => $request->birthday,
            'slug'          => str_slug($request->title, '-'),      
            'about'         => $request->about,
            'image'         => $name,
            'web'           => $request->web,
            'facebook'      =>  $request->facebook,
            'googleplus'    =>  $request->googleplus,
            'twitter'       =>  $request->twitter,
            'linkedin'      =>  $request->linkedin,
            'youtube'       =>  $request->youtube,

       ]);   

        $profile->save();

        $type =  'profiles';
        $id = $profile->id;
        Status::create_status($id, $type);

        Session::flash('success', 'Profile successfully created!');
     
        return redirect()->route('profiles.show', $profile->slug);
    }

    public function show($slug)
    {

        $slug = Auth::user()->profile->slug;
        $element = Profile::where('slug', $slug)->first();        
        $index = 'index';
        $page_name = 'Welcome ' .  Auth::user()->name;


        return view('user.profile.show', compact('page_name', 'index', 'element'));
    }


    public function edit($slug)
    {

        $element = Profile::where('slug', $slug)->first();
        $page_name = 'profiles';
        $index = 'edit'; 

          return view('user.profile.edit', compact('element', 'page_name', 'index'));
    }

    public function update(ProfileRequest $request, $slug)
    {

        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if ( $file = $request->file('image')) {
            $name = $file->getClientOriginalName()  . '_' . time();
            $file->move('images', $name);
            $input['image'] = $name;
        }
        $profile = Profile::where('slug', $slug)->first();
        $profile->fill($input)->save();
        $page_name = $profile;

        Session::flash('success', 'Profile successfully updated!');
     
        return redirect()->route('profile', $profile->slug);
    }

    public function destroy($slug)
    {
        
        $profile = Profile::where('slug', $slug)->first();
        if ($profile->channel) {

            Session::flash('info', 'Profile has a channel. Please deleted channel first!');
            return redirect()->route('profiles.show', $profile->slug);

        } elseif ($profile->discussions) {

            Session::flash('info', 'Profile has a channel. Please deleted channel first!');
            return redirect()->route('profiles.show', $profile->slug);

        } else {

            $profile->forceDelete();

        }
        
        Session::flash('success', 'Profile successfully deleted!');
        return redirect()->route('profiles.index');
    }


}
