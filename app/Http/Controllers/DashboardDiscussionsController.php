<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReplyRequest;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Discussion;
use App\Like;
use App\Reply;
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
        $all_ = Discussion::all();
        $page_name = 'discussions';

       return view('dashboard.discussions.index', compact('discussions', 'page_name', 'all_'));
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
        $all_ = Discussion::all();
        $page_name =  'Create a new Discussion';

        return view('dashboard.discussions.create', compact('all_', 'page_name', 'all_roles', 'all_st'));
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
        $page_name = 'discussions';

        Session::flash('success', 'Discussion successfully created!');
     
        return redirect()->route('discussions.show', compact( 'page_name', 'slug'));
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
        $page_name = 'discussions';
        $all_ = Discussion::all(); 

        return view('dashboard.discussions.show', compact('discussion', 'page_name', 'all_'));
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

        $discussion = Discussion::where('slug', $slug)->first();
        $discussion->fill($input)->save();
        $page_name = 'discussions';
        $slug = Auth::user()->slug;
        $slug = $discussion->slug;

        Session::flash('success', 'Discussion successfully updated!');
     
        return redirect()->route('discussions.show', compact('slug', 'slug'));
    }

    public function destroy($slug)
    {

        $discussion = Discussion::where('slug', $slug)->first();
        $user = Auth::user();
        $discussion->delete();

        Session::flash('success', 'Discussion successfully deleted!');

        return redirect()->route('discussions.index', $user->slug);
    }

    public function trashed($slug)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $discussions = Discussion::where('profile_id', $profile->id)->onlyTrashed()->paginate(4);
        $all_user_discussions = Discussion::where('profile_id', $profile->id)->count();
        $page_name = 'Trashed discussion';
        $all_ = Discussion::all();

        return view('dashboard.discussions.trashed', compact('discussions', 'user', 'slug', 'all_user_discussions','page_name', 'all_'));
    }

    public function restore($slug)
    {
        $discussion = Discussion::withTrashed()->where('slug', $slug)->first();
        $discussion->restore();

        Session::flash('success', 'Discussion successfully restored!');
        return redirect()->route('discussions.trashed', $slug);
    }

    public function kill($slug)
    {
        $discussion = Discussion::withTrashed()->where('slug', $slug)->first();
        if ($discussion != null) {
            $discussion->forceDelete();
        } else {
            $user = Auth::user();
            Session::flash('info', 'Discussion does not exist!');
            return redirect()->route('discussions.index', compact('user'));
        }

        Session::flash('success', 'Discussion pemanently deleted!');
        return redirect()->route('dashboard.discussions.trashed', $slug);
    }

    public static  function all_likes() {

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


    public function reply(ReplyRequest $request, $slug)
    {

        $discussion = Discussion::where('slug', $slug)->first();
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $all_user_discussions = Discussion::where('profile_id', $profile->id)->count();
        $page_name = 'discussions';
        $all_ = Discussion::all();

        $reply = Reply::create([

            'profile_id'    => $user->profile->id,
            'discussion_id' => $discussion->id,
            'body'          =>   $request->body,

        ]);

        Session::flash('success', 'Answer successfully created!');
        return view('dashboard.discussions.show', compact('discussion', 'user',  'page_name', 'all_user_discussions', 'slug', 'all_'));
    }


    public function r_destroy($id)
    {

        $reply = Reply::find($id);
        $reply->delete();

        Session::flash('success', 'Reply successfully deleted!');

        return redirect()->back();
    }

    public function like($id)
    {
        $reply = Reply::find($id);
        $profile_id = Auth::user()->profile->id;

        Like::create([
            'reply_id'      => $id,
            'profile_id'    => $profile_id,
        ]);

        Session::flash('success', 'Reply Liked!');
        return redirect()->back();
    }

    public function unlike($id)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $like = Like::where('reply_id', $id)->where('profile_id', $profile->id)->first();

        $like->delete();

        Session::flash('success', 'Reply Unliked!');
        return redirect()->back();
    }

}
