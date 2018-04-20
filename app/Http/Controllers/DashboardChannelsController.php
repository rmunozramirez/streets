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
