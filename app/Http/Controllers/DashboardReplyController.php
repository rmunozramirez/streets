<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReplyRequest;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Discussion;
use App\Like;
use App\Reply;;
use App\Role;
use Session;

class DashboardReplyController extends Controller
{
 
    public function like($id)
    {
        $reply = Reply::find($id);
        $profile_id = Auth::user()->profile->id;

        Like::create([
            'likeable_id'   => $id,
            'profile_id'    => $profile_id,
            'likeable_type' => 'replies',
            'like'          => 1,
        ]);

        Session::flash('success', 'Reply Liked!');
        return redirect()->back();
    }

    public function unlike($id)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $like = Like::where('likeable_id', $id)->where('profile_id', $profile->id)->where('likeable_type', 'replies')->first();

        $like->delete();

        Session::flash('success', 'Reply Unliked!');
        return redirect()->back();
    }

    public function best_answer($id) 
    {
        $reply = Reply::find($id);
        $reply->best_answer = 1;

        $reply->save();
        Session::flash('success', 'Reply has been marked as best answer!');
        return redirect()->back();        
    }

}
