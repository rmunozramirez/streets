<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Profile;
use App\Post;
use App\PostCategory;
use App\Status;
use App\Role;
use Session;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('created_at', 'asc')->paginate(4);
        $all_ = Post::with('statuses')->get();
        $page_name = 'posts';

       return view('dashboard.posts.index', compact('posts', 'page_name', 'all_'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_postcat = PostCategory::pluck('title', 'id')->all();
        $all_ = Post::all();
        $page_name =  'posts';

        return view('dashboard.posts.create', compact('all_', 'page_name', 'all_postcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();

        $post = Post::create([

            'postcategory_id' => $request->postcategory_id,
            'profile_id'    =>  $profile->id, 
            'title'         =>  $request->title,
            'slug'          =>  str_slug($request->title, '-'),      
            'subtitle'      =>  $request->subtitle,                
            'body'          =>  $request->body,            
            'image'         =>  $name,

       ]);

        $post->save();

        $type =  'posts';
        $id = $post->id;
        $status = (new Status)->create_status($id, $type);

        Session::flash('success', 'Post successfully created!');
        return redirect()->route('posts.show', $post->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $page_name = 'posts';
        $all_ = Post::with('statuses')->get();

        return view('dashboard.posts.show', compact('post', 'page_name', 'all_'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $all_ = Post::with('statuses')->get();
        $post = Post::where('slug', $slug)->first(); 
        $page_name = 'posts';
        $all_postcat = PostCategory::orderBy('title', 'asc')->pluck('title', 'id')->all();

        return view('dashboard.posts.edit', compact('post', 'postcategories', 'page_name', 'all_', 'all_postcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }

        $post = Post::where('slug', $slug)->first();
        $post->fill($input)->save();

        Session::flash('success', 'Post successfully updated!');
     
        return redirect()->route('posts.show', $post->slug); 
    }

    public function destroy($slug)
    {
        
        $post = Post::where('slug', $slug)->first();
        $post->delete();

        Session::flash('success', 'Post successfully deleted!');
        return redirect()->route('posts.index');
    }


    public function trashed()
    {
        $trash_post = Post::onlyTrashed()->get();
        $all_ = Post::all();
        $page_name = 'posts';

        return view('dashboard.posts.trashed', compact('trash_post', 'page_name', 'all_'));
    }

    public function restore($slug)
    {
        $post = Post::withTrashed()->where('slug', $slug)->first();
        $post->statuses->status = 'inactive';
        $post->restore();

        Session::flash('success', 'Post successfully restored!');
        return redirect()->route('posts.index');
    }

    public function kill($slug)
    {
        $post = Post::withTrashed()->where('slug', $slug)->first();
        $post->forceDelete();

        Session::flash('success', 'Post pemanently deleted!');
        return redirect()->route('posts.index');
    }
}
