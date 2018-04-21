<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Subcategory;
use App\Status;
use App\Role;
use Session;

class DashboardSubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_sub = Subcategory::all();
        $trash_sub = Subcategory::onlyTrashed()->get();
        $page_name = 'Subcategories';

       return view('dashboard.subcategories.index', compact('page_name', 'all_sub', 'trash_sub'));
    }

    public function create()
    {
        $all_roles = Role::pluck('name', 'id')->all();
        $all_st = Status::pluck('name', 'id')->all();
        $all_sub = Subcategory::all();
        $page_name =  'Create a new Subcategory';

        return view('dashboard.subcategories.create', compact('all_sub', 'page_name', 'all_roles', 'all_st'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoriesRequest $request)
    {
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $subcategory = Subcategory::create([
    
            'category_id'       => $request->category_id,
            'title'             => $request->title,
            'subtitle'          => $request->subtitle,
            'slug'              => str_slug($request->title, '-'),
            'about'             => $request->about_subcategory, 
            'image'             => $name,
            'status_id'         => $request->status_id,
       ]);   

        $subcategory->save();

        Session::flash('success', 'Subcategory successfully created!');
     
        return redirect()->route('subcategories.show', $subcategory->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $subcategory = Subcategory::withCount('channels')->where('slug', $slug)->first();
        $page_name = $subcategory->title;

        return view('dashboard.subcategories.show', compact('subcategory', 'page_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $subcategory = Subcategory::where('slug', $slug)->first(); 
        $page_name = 'Edit: ' . $subcategory->title;
        $categories = Category::orderBy('title', 'asc')->pluck('title', 'id')->all();

          return view('dashboard.subcategories.edit', compact('subcategory', 'categories', 'page_name'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoriesRequest $request, $slug)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if ( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }

        $subcategory = Subcategory::where('slug', $slug)->first();
        $subcategory->fill($input)->save();
        $page_name = $subcategory->title;

        Session::flash('success', 'Subcategory successfully updated!');
     
        return redirect()->route('admin-subcategories.show', $subcategory->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $subcategory = Subcategory::where('slug', $slug)->first();

        if(count($subcategory->chanels) == 0 ) {

            $subcategory->delete();
            Session::flash('success', 'Subcategory '  . $subcategory->title . ' successfully deleted!');

            return redirect()->route('subcategories.index');

        } else {

            Session::flash('error', $subcategory->title . ' is not empty and can\'t be deleted!');

            return redirect()->route('subcategories.show', $subcategory->slug);
        }

        
    }     

    public function trashed()
    {
        $subcategories = Subcategory::onlyTrashed()->get();
        $page_name = 'Trashed Subcategories';

        return view('dashboard.subcategories.trashed', compact('subcategories', 'page_name'));
    }

    public function restore($slug)
    {
        $subcategory = Subcategory::withTrashed()->where('slug', $slug)->first();
        $subcategory->restore();

        Session::flash('success', 'Subcategory successfully restored!');
        return redirect()->route('subcategories.trashed');
    }

    public function kill($slug)
    {
        $subcategory = Subcategory::withTrashed()->where('slug', $slug)->first();
        $subcategory->forceDelete();

        Session::flash('success', 'Subcategory pemanently deleted!');
        return redirect()->route('subcategories.trashed');
    }
}
