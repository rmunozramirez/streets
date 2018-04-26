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

class DashboardChannelsController extends Controller
{

    public function index()
    {

        $channels = Channel::orderBy('created_at', 'asc')->paginate(4);
        $all_ = Channel::with('statuses')->get();
        $page_name = 'channels';
        $trash_ch = Channel::onlyTrashed()->get();


       return view('dashboard.channels.index', compact('channels', 'page_name', 'all_', 'trash_ch'));
    }

    public function create()
    {

        $all_st = Status::pluck('status', 'id')->all();
        $all_sub = Subcategory::pluck('title', 'id')->all();
        $all_ = Channel::all();
        $page_name =  'channels';

        return view('dashboard.channels.create', compact('all_', 'page_name', 'all_st', 'all_sub'));
    }

    public function store(ChannelRequest $request)
    {
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();

        $channel = Channel::create([

            'subcategory_id' => $request->subcategory_id,
            'profile_id'    =>  $profile->id, 
            'title'         =>  $request->title,
            'slug'          =>  str_slug($request->title, '-'),      
            'subtitle'      =>  $request->subtitle,                
            'about'         =>  $request->about,            
            'image'         =>  $name,

       ]);

        $channel->save();

        $type =  'channels';
        $id = $channel->id;
        $status = (new Status)->create_status($id, $type);

        Session::flash('success', 'Channel successfully created!');
        return redirect()->route('channels.show', $channel->slug);
    }

    public function show($slug)
    {
        $channel = Channel::where('slug', $slug)->first();
        $page_name = 'channels';
        $all_ = Channel::with('statuses')->get();

        return view('dashboard.channels.show', compact('channel', 'page_name', 'all_'));
    }

    public function edit($slug)
    {

        $all_ = Channel::with('statuses')->get();
        $channel = Channel::where('slug', $slug)->first(); 
        $page_name = 'channels';
        $all_sub = Subcategory::orderBy('title', 'asc')->pluck('title', 'id')->all();

        return view('dashboard.channels.edit', compact('channel', 'subcategories', 'page_name', 'all_', 'all_sub'));
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
     
        return redirect()->route('channels.show', $channel->slug); 
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
        $all_ = Channel::all();
        $page_name = 'channels';

        return view('dashboard.channels.trashed', compact('trash_ch', 'page_name', 'all_'));
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
