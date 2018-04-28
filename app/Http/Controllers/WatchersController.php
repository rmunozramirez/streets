<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Post;
use App\Watcher;
use App\Discussion;
use Auth;
use Session;

class WatchersController extends Controller
{

    public function watch($id)
    {
        Watcher::create([
            'discussion_id' => $id,
            'profile_id'    => Auth::id(),

        ]);

       Session::flash('success', 'You are watching this discussion!');
        return redirect()->back();

    }  

    public function unwatch($id)
    {
        $watcher = Watcher::where('discussion_id', $id)->where('profile_id', Auth::id());
        $watcher->delete();


       Session::flash('success', 'You are no longer watching this discussion!');
        return redirect()->back();

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
}
