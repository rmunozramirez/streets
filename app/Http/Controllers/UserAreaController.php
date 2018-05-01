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

        return view('user.users.show', compact('page_name', 'index', 'element'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $element = User::where('slug', $slug)->first();
        $page_name = $element->name;
        $index = 'edit'; 

          return view('user.users.edit', compact('element', 'page_name', 'index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $slug)
    {

        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');
        if ( $password = $request->file('password')) {
            $input['password'] = Hash::make($request['password']);
        }
        $user = User::where('slug', $slug)->first();
        $user->fill($input)->save();
        $page_name = $user->name;

        Session::flash('success', 'User successfully updated!');
        return redirect()->route('user', $user->slug);
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
