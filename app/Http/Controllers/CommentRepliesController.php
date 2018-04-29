<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentreplyRequest;
use Illuminate\Support\Facades\Auth;
use App\CommentReply;
use App\Profile;
use App\Comment;
use App\Like;
use Session;

class CommentRepliesController extends Controller
{
    public function tocomment(CommentreplyRequest $request, $id)
    {
        if($request->body) {
            $user = Auth::user();
            $profile = Profile::where('user_id', $user->id)->first();
            $comment = Comment::where('id', $id)->first();

            $commentreply = CommentReply::create([
        
                'profile_id'    => Auth::user()->id,
                'comment_id' 	=> $comment->id,     
                'body'          => $request->body,            
      
           ]);   

            $page_name = 'comments';

            Session::flash('success', 'Reply to comment successfully created!');
            return redirect()->back();


        } else {
            Session::flash('info', 'Your reply is empty, please try again.');
            return redirect()->back();
        }
    }


    public function like($id)
    {
        $commentreply = CommentReply::find($id);
        $profile_id = Auth::user()->profile->id;

        Like::create([
            'likeable_id'   => $id,
            'profile_id'    => $profile_id,
            'likeable_type' => 'commentreplies',
            'like'          => 1,
        ]);

        Session::flash('success', 'Commenr reply Liked!');
        return redirect()->back();
    }

    public function unlike($id)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $like = Like::where('likeable_id', $id)->where('profile_id', $profile->id)->where('likeable_type', 'commentreplies')->first();

        $like->delete();

        Session::flash('success', 'Reply Unliked!');
        return redirect()->back();
    }

}
