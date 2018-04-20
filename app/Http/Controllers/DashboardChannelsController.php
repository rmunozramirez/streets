<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Channel;
use App\Status;
use App\Role;
use Session;

class DashboardChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $channels = Channel::orderBy('created_at', 'asc')->paginate(4);
        $all_ch = Channel::with('statuses')->get();
        $page_name = 'channels';
        $trash_ch = Channel::onlyTrashed()->get();

       return view('dashboard.channels.index', compact('channels', 'page_name', 'all_ch', 'trash_ch'));
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
        $all_ch = Channel::all();
        $page_name =  'Create a new Channel';

        return view('dashboard.channels.create', compact('all_ch', 'page_name', 'all_roles', 'all_st'));
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
    public function show($slug)
    {
        $channel = Channel::where('slug', $slug)->first();
        $page_name = $channel->title;

        return view('dashboard.channels.show', compact('channel', 'page_name'));
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


    public function destroy($slug)
    {
        
        $channel = Channel::where('slug', $slug)->first();
        $channel->delete();

        Session::flash('success', 'Channel successfully deleted!');
        return redirect()->route('channels.index');
    }


    public function trashed()
    {
        $trash_ch = Channel::onlyTrashed()->get();
        $all_ch = Channel::all();
        $page_name = 'Trashed Channels';

        return view('dashboard.channels.trashed', compact('trash_ch', 'page_name', 'all_ch'));
    }

    public function restore($slug)
    {
        $channel = Channel::withTrashed()->where('slug', $slug)->first();
        $channel->statuses->status = 'inactive';
        $channel->restore();

        Session::flash('success', 'Channel successfully restored!');
        return redirect()->route('channels.index');
    }

    public function kill($slug)
    {
        $channel = Channel::withTrashed()->where('slug', $slug)->first();
        $channel->forceDelete();

        Session::flash('success', 'Channel pemanently deleted!');
        return redirect()->route('channels.index');
    }

}
