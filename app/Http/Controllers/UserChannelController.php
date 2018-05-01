<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChannelRequest;
use App\Profile;
use App\Channel;
use App\Subcategory;
use App\Status;
use App\Role;
use Session;
use Auth;

class UserChannelController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    public function show($slug)
    {

        $slug = Auth::user()->profile->channel->slug;
        $element = Channel::where('slug', $slug)->first();
        $page_name = 'channels';
        $index = 'show';

        return view('user.channel.show', compact('element', 'page_name', 'index'));
    }

    public function edit($slug)
    {

        $all_sub = Subcategory::orderBy('title', 'asc')->pluck('title', 'id')->all();
        $element = Channel::where('slug', $slug)->first();
        $page_name = 'channel';
        $index = 'edit'; 

          return view('user.channel.edit', compact('element', 'all_sub', 'page_name', 'index'));
    }

    public function update(ChannelRequest $request, $slug)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }

        $channel = Channel::where('slug', $slug)->first();
        $channel->fill($input)->save();
        $page_name = $channel->title;

        Session::flash('success', 'Channel successfully updated!');
     
        return redirect()->route('channel', $channel->slug); 
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
