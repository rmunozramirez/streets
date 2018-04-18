<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Discussion;
use App\Status;
use App\Role;
use Session;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_roles = Role::pluck('name', 'id')->all();
        $all_statuses = Status::pluck('name', 'id')->all();
        $profiles = Profile::orderBy('created_at', 'asc')->paginate(4);
        $all_profiles = Profile::all();
        $active_pr = Profile::where('status_id', 1)->get();
        $bann_pr = Profile::where('status_id', 2)->get();
        $trash_pr = Profile::where('status_id', 3)->get();
        $page_name = 'Profile';

       return view('dashboard.profiles.index', compact('profiles', 'page_name', 'all_profiles', 'all_statuses', 'all_roles', 'active_pr', 'bann_pr', 'trash_pr'));
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
        $all_profiles = Profile::all();
        $page_name =  'Create a new User';

        return view('dashboard.profiles.create', compact('all_profiles', 'page_name', 'all_roles', 'all_st'));
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

        $profile = Profile::where('slug', $slug)->first();
        $page_name = 'Profile from: ' . $profile->user->name;

        return view('dashboard.profiles.show', compact('profile', 'page_name'));
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
