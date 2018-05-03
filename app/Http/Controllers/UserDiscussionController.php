<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiscussionRequest;
use App\Http\Requests\ReplyRequest;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;
use App\Discussion;
use App\Like;
use App\Reply;
use App\Status;
use App\Role;
use Session;
use Notification;

class UserDiscussionController extends Controller
{    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_ = Discussion::with('likes')->get();
        $page_name = 'discussions';
        $index = 'yes';

       return view('user.forum.index', compact( 'page_name', 'all_', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_st = Status::pluck('status', 'id')->all();
        $all_ = Discussion::all();
        $page_name =  'discussions';
        $index = 'create';

        return view('user.forum.create', compact('all_', 'page_name', 'all_st', 'index'));
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
    
            'profile_id'    => Auth::user()->id,
            'title'         => $request->title,
            'slug'          => str_slug($request->title, '-'),      
            'body'          => $request->body,            
            'image'         => $name,
  
       ]);   

        $discussion->save();
        $type =  'discussions';
        $id = $discussion->id;
        Status::create_status($id, $type);
        $page_name = 'discussions';

        Session::flash('success', 'Discussion successfully created!');
     
        return redirect()->route('forum.show', $discussion->slug);
    }

    public function show($slug)
    {
        $element = Discussion::where('slug', $slug)->first();
        $page_name = 'discussions';
        $all_ = Discussion::all();
        $index = 'show';
        $best_answer = $element->replies()->where('best_answer', 1)->first();

        return view('user.forum.show', compact('element', 'page_name', 'all_', 'index', 'best_answer'));
    }

    public function edit($slug)
    {
        $all_ = Discussion::with('statuses')->get();
        $element = Discussion::where('slug', $slug)->first();
        $page_name = 'discussions';
        $index = 'edit'; 

        return view('user.forum.edit', compact('element', 'page_name', 'all_', 'index'));

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
     
        return redirect()->route('forum.show', compact('slug', 'slug'));
    }

    public function destroy($slug)
    {

        $discussion = Discussion::where('slug', $slug)->first();
        $discussion->delete();

        Session::flash('success', 'Discussion successfully deleted!');

        return redirect()->back();
    }

    public function trashed()
    {

        $element = Discussion::onlyTrashed()->get();
        $page_name = 'discussions';
        $all_ = Discussion::all();
        $index = 'trash';

        return view('user.forum.trashed', compact('element', 'slug', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $discussion = Discussion::withTrashed()->where('slug', $slug)->first();
        $discussion->restore();

        Session::flash('success', 'Discussion successfully restored!');
        return redirect()->route('forum.trashed', $slug);
    }

    public function kill($slug)
    {
        $discussion = Discussion::withTrashed()->where('slug', $slug)->first();
        if ($discussion != null) {
            $discussion->forceDelete();
        } else {
            $user = Auth::user();
            Session::flash('info', 'Discussion does not exist!');
            return redirect()->route('forum.index', compact('user'));
        }

        Session::flash('success', 'Discussion pemanently deleted!');
        return redirect()->route('forum.trashed', $slug);
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
        if($request->body) {
            $element = Discussion::where('slug', $slug)->first();
            $user = Auth::user();
            $profile = Profile::where('user_id', $user->id)->first();
            $all_user_discussions = Discussion::where('profile_id', $profile->id)->count();
            $page_name = 'discussions';
            $all_ = Discussion::all();
            $index = 'show';
            $best_answer = $element->replies()->where('best_answer', 1)->first();

            $reply = Reply::create([

                'profile_id'    => $user->profile->id,
                'discussion_id' => $element->id,
                'body'          =>   $request->body,

            ]);

            $watchers = array();

            foreach ($element->watchers as $watcher) {
                 array_push($watchers, User::find($watcher->user_id));
            }

            Notification::send($watchers, new \App\Notifications\NewReplyAdded($element));
           

            Session::flash('success', 'Answer successfully created!');
            
            return view('user.forum.show', compact('element', 'index', 'user',  'page_name', 'all_user_discussions', 'slug', 'all_', 'best_answer'));

        } else {
            Session::flash('info', 'Your answer is empty, please try again.');
            return redirect()->back();
        }
    }


    public function r_destroy($id)
    {

        $reply = Reply::find($id);
        $reply->delete();

        Session::flash('success', 'Reply successfully deleted!');

        return redirect()->back();
    }

}
