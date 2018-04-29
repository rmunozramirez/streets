<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ReplyRequest;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Comment;
use App\Post;
use App\Like;
use Session;

class PostCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tocomment(CommentRequest $request, $slug)
    {
        if($request->body) {
            $user = Auth::user();
            $profile = Profile::where('user_id', $user->id)->first();
            $post = Post::where('slug', $slug)->first();
            $comment = Comment::create([
        
                'profile_id'    => Auth::user()->id,
                'post_id'       => $post->id,     
                'body'          => $request->body,            
      
           ]);   

            $page_name = 'comments';

            Session::flash('success', 'Comment successfully created!');
            return redirect()->back();


        } else {
            Session::flash('info', 'Your answer is empty, please try again.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $comment = Comment::find($id);
        $comment->delete();

        Session::flash('success', 'Comment successfully deleted!');
        return redirect()->back();
    }


    public function like($id)
    {
        $comment = Comment::find($id);
        $profile_id = Auth::user()->profile->id;

        Like::create([
            'likeable_id'   => $id,
            'profile_id'    => $profile_id,
            'likeable_type' => 'comments',
            'like'          => 1,
        ]);

        Session::flash('success', 'Comment Liked!');
        return redirect()->back();
    }

    public function unlike($id)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $like = Like::where('likeable_id', $id)->where('profile_id', $profile->id)->where('likeable_type', 'comments')->first();

        $like->delete();

        Session::flash('success', 'Comment Unliked!');
        return redirect()->back();
    }

}
