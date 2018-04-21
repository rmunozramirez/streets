<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Discussion;
use App\Status;
use App\Role;
use Session;

class DashboardDiscussionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $discussions = Discussion::orderBy('created_at', 'asc')->paginate(4);
        $all_disc = Discussion::all();
        $page_name = 'Discussion';

       return view('dashboard.discussions.index', compact('discussions', 'page_name', 'all_disc'));
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
        $all_disc = Discussion::all();
        $page_name =  'Create a new Discussion';

        return view('dashboard.discussions.create', compact('all_disc', 'page_name', 'all_roles', 'all_st'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscussionRequest $request)
    {

        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();

        $discussion = Discussion::create([
    
            'profile_id'    => $profile->id,
            'status_id'         => $request->status_id,
            'title'         => $request->title,
            'slug'          => str_slug($request->title, '-'),      
            'about'          => $request->body,            
            'image'         => $name,
  
       ]);   

        $discussion->save();
        $slug = $user->slug;
        $slug_d = $discussion->slug;
        $page_name = $discussion->title;

        Session::flash('success', 'Discussion successfully created!');
     
        return redirect()->route('dashboard.discussions.show', compact( 'page_name', 'slug', 'slug_d'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $discussion = Discussion::where('slug', $slug)->first();
        $page_name = $discussion->title;

        return view('dashboard.discussions.show', compact('discussion', 'page_name'));
    }

    public function edit($slug)
    {
        $discussion = Discussion::where('slug', $slug)->first();
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $all_user_discussions = Discussion::where('profile_id', $profile->id)->count();
        $page_name = 'Edit: ' . $discussion->title;

        return view('dashboard.discussions.edit', compact('discussion', 'page_name', 'user', 'all_user_discussions'));

    }

    public function update(DiscussionRequest $request, $slug)
    {

        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if ( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }

        $discussion = Discussion::where('slug', $slug_d)->first();
        $discussion->fill($input)->save();
        $page_name = $discussion->title;
        $slug = Auth::user()->slug;
        $slug_d = $discussion->slug;

        Session::flash('success', 'Discussion successfully updated!');
     
        return redirect()->route('dashboard.discussions.show', compact('slug', 'slug_d'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $discussion = Discussion::where('slug', $slug_d)->first();
        $user = Auth::user();
        $discussion->delete();

        Session::flash('success', 'Discussion successfully deleted!');

        return redirect()->route('dashboard.discussions.index', $user->slug);
    }

    public function trashed($slug)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $discussions = Discussion::where('profile_id', $profile->id)->onlyTrashed()->paginate(4);
        $all_user_discussions = Discussion::where('profile_id', $profile->id)->count();
        $page_name = 'Trashed discussion';

        return view('dashboard.discussions.trashed', compact('discussions', 'user', 'slug', 'all_user_discussions','page_name'));
    }

    public function restore($slug)
    {
        $discussion = Discussion::withTrashed()->where('slug', $slug_d)->first();
        $discussion->restore();

        Session::flash('success', 'Discussion successfully restored!');
        return redirect()->route('dashboard.discussions.trashed', $slug);
    }

    public function kill($slug)
    {
        $discussion = Discussion::withTrashed()->where('slug', $slug_d)->first();
        if ($discussion != null) {
            $discussion->forceDelete();
        } else {
            $user = Auth::user();
            Session::flash('info', 'Discussion does not exist!');
            return redirect()->route('dashboard.discussions.index', compact('user'));
        }

        Session::flash('success', 'Discussion pemanently deleted!');
        return redirect()->route('dashboard.discussions.trashed', $slug);
    }

    public static  function all_likes($id) {

        $user = User::find($id);
        $profile = Profile::where('user_id', $user->id);
        $discussions = Discussion::where('profile_id', $profile->id)->get();
        $replies = array();
        $all_likes = "";
        foreach ($discussions as $discussion) {
            foreach ($discussion->replies as $reply) {
                $all_likes = $all_likes + count($reply->likes);
            }
        }

        return $all_likes;
    } 

}
