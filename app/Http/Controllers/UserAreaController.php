<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Profile;
use App\Discussion;
use App\Channel;
use App\Status;
use App\Role;
use Session;

class UserAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {

        $id = Auth::user()->id;
        $index = 'index';
        $page_name = 'Welcome ' .  Auth::user()->name;
        $element = User::find($id);

        return view('userarea.users.show', compact('page_name', 'index', 'element'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $all_roles = Role::pluck('title', 'id')->all();
        $all_st = Status::pluck('status', 'id')->all();
        $element = Profile::where('slug', $slug)->first();
        $page_name = 'profiles';
        $index = 'edit'; 
        $all_ = Profile::all();

          return view('userarea.user.edit', compact('element', 'page_name', 'all_roles', 'all_st', 'all_', 'index'));
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
