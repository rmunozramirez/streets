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

class DashboardProfileController extends Controller
{

    public function index()
    {

        $all_roles = Role::pluck('name', 'id')->all();
        $profiles = Profile::orderBy('created_at', 'asc')->paginate(4);
        $all_ = Profile::with('statuses')->get();
        $trashed_pr = Profile::onlyTrashed()->get();
        $page_name = 'profiles';
        $index = 'yes';

       return view('dashboard.profiles.index', compact('all_roles', 'profiles', 'page_name', 'all_', 'trashed_pr', 'status', 'index'));
    }

    public function create()
    {
        $all_roles = Role::pluck('name', 'id')->all();
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

        $page_name = 'profiles';
        $all_ = Profile::all();
        $index = 'show';
        $element = Profile::where('slug', $slug)->first();

        return view('dashboard.profiles.show', compact('page_name', 'all_', 'index', 'element'));
    }

    public function edit($slug)
    {
        $all_roles = Role::pluck('name', 'id')->all();
        $all_st = Status::pluck('status', 'id')->all();
        $element = Profile::where('slug', $slug)->first();
        $page_name = 'profiles';
        $index = 'edit'; 
        $all_ = Profile::all();

          return view('dashboard.profiles.edit', compact('element', 'page_name', 'all_roles', 'all_st', 'all_', 'index'));
    }

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

            $profile->delete();

        }
        
        Session::flash('success', 'Profile successfully deleted!');
        return redirect()->route('profiles.index');
    }


    public function trashed()
    {
        $element = Profile::onlyTrashed()->get();
        $all_ = Profile::all();
        $page_name = 'profiles';
        $index = 'trash';

        return view('dashboard.profiles.trashed', compact('element', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $profile = Profile::withTrashed()->where('slug', $slug)->first();
        $profile->statuses->status = 'inactive';
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


    public function ban($id)
    {

// Ban Profile
        $status = Status::where('statusable_id', $id)->where('statusable_type', 'profiles')->first();
        $status->status =  'banned';
        $status->save();

        $profile = Profile::where('id', $id)->first();
// Look for Profiles'channel and ban them
        $channel_id = $profile->channel->id;
        $status = Status::where('statusable_id', $channel_id)->where('statusable_type', 'channels')->first();
        $status->status =  'banned';
        $status->save();

// Look for Profile's discussions, and ban them
        $discussions = $profile->discussions;
        foreach ($discussions as $discussion) {
            $status = Status::where('statusable_id', $discussion->id)->where('statusable_type', 'discussions')->first();
            $status->status =  'banned';
            $status->save();
        }
        
        Session::flash('success', 'User banned!');
        return redirect()->back();
    }

    public function allow($id)
    {
// Remove ban from profile
        $status = Status::where('statusable_id', $id)->where('statusable_type', 'profiles')->first();
        $status->status =  'active';
        $status->save();

// Look for Profile's channel, remove the ban by setting it "inactive"
        $profile = Profile::where('id', $id)->first();
        $channel_id = $profile->channel->id;
        $status = Status::where('statusable_id', $channel_id)->where('statusable_type', 'channels')->first();
        $status->status =  'inactive';
        $status->save();

// Look for Profile's discussions, remove the ban by setting it "inactive"
       $discussions = $profile->discussions;
        foreach ($discussions as $discussion) {
            $status = Status::where('statusable_id', $discussion->id)->where('statusable_type', 'discussions')->first();
            $status->status =  'inactive';
            $status->save();
        }


        Session::flash('success', 'User banned!');
        return redirect()->back();
    }

}
