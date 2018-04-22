<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{

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
    public function store(Request $request)
    {
        //
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
        //
    }

    public function reply(ReplyRequest $request, $slug)
    {
        
        $discussion = Discussion::where('slug', $slug)->first();
        $page_name = $discussion->title;
        $user = Auth::user();       
        if ($user != null) {
            $profile = Profile::where('user_id', $user->id)->first();
            $all_user_discussions = Discussion::where('profile_id', $profile->id)->count();

             $reply = Reply::create([

                'profile_id'    => $user->profile->id,
                'discussion_id' => $discussion->id,
                'body'          =>   $request->body,

            ]);
          } else {
            Session::flash('success', 'You have to be registered to reply in forum!');
            return view('forum.show', compact('discussion', 'page_name'));
          }


        Session::flash('success', 'Answer successfully created!');
        return view('forum.show', compact('discussion', 'user',  'page_name', 'all_user_discussions', 'slug'));
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
