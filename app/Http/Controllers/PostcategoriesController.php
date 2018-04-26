<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostcategoriesRequest;
use App\Profile;
use App\Postcategory;
use App\Category;
use App\Status;
use App\Role;
use Session;

class PostcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_ = Postcategory::withCount('posts')->get();
        $trash_postcat = Postcategory::onlyTrashed()->get();
        $page_name = 'postcategories';

       return view('dashboard.postcategories.index', compact('page_name','trash_postcat', 'all_'));
    }

    public function create()
    {
        $all_postcat = Category::pluck('title', 'id')->all();
        $all_st = Status::pluck('status', 'id')->all();
        $all_ = Postcategory::all();
        $page_name =  'postcategories';

        return view('dashboard.postcategories.create', compact('all_', 'page_name', 'all_postcat', 'all_st'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostcategoriesRequest $request)
    {
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $postcat = Postcategory::create([
    
            'category_id'       => $request->category_id,
            'title'             => $request->title,
            'subtitle'          => $request->subtitle,
            'slug'              => str_slug($request->title, '-'),
            'about'             => $request->about, 
            'image'             => $name,
       ]);   

        $postcat->save();
        $type =  'postcategories';
        $id = $postcat->id;
        Status::create_status($id, $type);
        
        Session::flash('success', 'Subcategory successfully created!');
        return redirect()->route('postcategories.show', $postcat->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $postcat = Postcategory::withCount('posts')->where('slug', $slug)->first();
        $page_name = 'postcategories';
        $all_ = Postcategory::all();

        return view('dashboard.postcategories.show', compact('postcat', 'page_name', 'all_'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $postcat = Postcategory::where('slug', $slug)->first(); 
        $page_name = 'postcategories';
        $all_ = Postcategory::all();

          return view('dashboard.postcategories.edit', compact('postcat', 'page_name', 'all_'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostcategoriesRequest $request, $slug)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }

        $postcat = Postcategory::where('slug', $slug)->first();
        $postcat->fill($input)->save();
        $page_name = $postcat->title;

        Session::flash('success', 'Subcategory successfully updated!');
     
        return redirect()->route('postcategories.show', $postcat->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $postcat = Postcategory::where('slug', $slug)->first();

        if(count($postcat->posts) == 0 ) {

            $postcat->delete();
            Session::flash('success', 'Subcategory '  . $postcat->title . ' successfully deleted!');

            return redirect()->route('postcategories.index');

        } else {

            Session::flash('error', $postcat->title . ' is not empty and can\'t be deleted!');

            return redirect()->route('postcategories.show', $postcat->slug);
        }
        
    }     

    public function trashed()
    {
        $trash_postcat = Postcategory::onlyTrashed()->get();
        $page_name = 'postcategories';
        $all_ = Postcategory::all();

        return view('dashboard.postcategories.trashed', compact('trash_postcat', 'page_name', 'all_'));
    }

    public function restore($slug)
    {
        $postcat = Postcategory::withTrashed()->where('slug', $slug)->first();
        $postcat->restore();

        Session::flash('success', 'Subcategory successfully restored!');
        return redirect()->route('postcategories.trashed');
    }

    public function kill($slug)
    {
        $postcat = Postcategory::withTrashed()->where('slug', $slug)->first();
        $postcat->forceDelete();

        Session::flash('success', 'Subcategory pemanently deleted!');
        return redirect()->route('postcategories.trashed');
    }
}
