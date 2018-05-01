<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Discussion;
use App\Channel;
use App\Status;
use App\Role;
use App\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::orderBy('created_at', 'asc')->get();
        $all_ = User::all();
        $page_name = 'users';
        $index = 'yes';

       return view('dashboard.users.index', compact('users', 'page_name', 'index', 'all_'));
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

        $page_name = 'users';
        $all_ = User::all();
        $index = 'show';
        $element = User::where('slug', $slug)->first();

        return view('dashboard.users.show', compact('page_name', 'all_', 'index', 'element'));
    }
 

    public function edit($slug)
    {
        $element = User::where('slug', $slug)->first();
        $page_name = 'Users';
        $index = 'edit'; 
        $all_ = User::all();

          return view('dashboard.users.edit', compact('element', 'page_name', 'all_', 'index'));
    }

    public function update(Request $request, $slug)
    {

        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if ( $file = $request->file('image')) {
            $name = $file->getClientOriginalName()  . '_' . time();
            $file->move('images', $name);
            $input['image'] = $name;
        }
        $user = User::where('slug', $slug)->first();
        $user->fill($input)->save();
        $page_name = $user;

        Session::flash('success', 'User successfully updated!');
     
        return redirect()->route('users.show', $user->slug);
    }

    public function destroy($slug)
    {
        
        $user = User::where('slug', $slug)->first();
        if ($user->profile) {

            Session::flash('info', 'User has a channel. Please deleted channel first!');
            return redirect()->route('users.show', $user->slug);

        } else {

            $user->delete();

        }
        
        Session::flash('success', 'User successfully deleted!');
        return redirect()->route('users.index');
    }


    public function trashed()
    {
        $element = User::onlyTrashed()->get();
        $all_ = User::all();
        $page_name = 'Users';
        $index = 'trash';

        return view('dashboard.users.trashed', compact('element', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();

        Session::flash('success', 'User successfully restored!');
        return redirect()->route('users.index');
    }

    public function kill($slug)
    {
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->forceDelete();
        Session::flash('success', 'User pemanently deleted!');

        return redirect()->route('users.index');
    }


}
