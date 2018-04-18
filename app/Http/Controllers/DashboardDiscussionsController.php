<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Discussion;
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
        $all_disc = Discussion::all();
        $active_disc = Discussion::where('status_id', 1)->paginate(4);
        $bann_disc = Discussion::where('status_id', 2)->paginate(4);
        $trash_disc = Discussion::where('status_id', 3)->paginate(4);
        $page_name = 'Discussion';

       return view('dashboard.discussions.index', compact('discussions', 'page_name', 'all_disc', 'active_disc', 'bann_disc', 'trash_disc'));
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
        $all_disc = Discussion::all();
        $page_name =  'Create a new Discussion';

        return view('dashboard.discussions.create', compact('all_disc', 'page_name', 'all_roles', 'all_st'));
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
        $discussion = Discussion::where('slug', $slug)->first();
        $page_name = $discussion->title;

        return view('dashboard.profiles.show', compact('discussion', 'page_name'));
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
