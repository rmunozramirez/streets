<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Category;
use App\Status;
use App\Role;
use Session;

class DashboardCategoriesController extends Controller
{
    // public function __construct()
    // {
    //     $all_ = Category::all();

    //     return $all_;
    // }

    public function index()
    {
        $trash_cat = Category::onlyTrashed()->get();
        $all_ = Category::with('statuses')->get();

        $page_name = 'categories';

       return view('dashboard.categories.index', compact('all_cat', 'page_name', 'trash_cat', 'all_'));
    }

    public function create()
    {
        $all_roles = Role::pluck('name', 'id')->all();
        $all_st = Status::pluck('status', 'id')->all();
        $all_ = Category::all();
        $page_name =  'categories';

        return view('dashboard.categories.create', compact('all_', 'page_name', 'all_roles', 'all_st'));
    }

    public function store(CategoriesRequest $request)
    {
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $category = Category::create([

            'title'             => $request->title,
            'status_id'         => $request->status_id,
            'subtitle'          => $request->subtitle,
            'slug'              => str_slug($request->title, '-'),
            'about'             => $request->about_category, 
            'image'             => $name,      

       ]);   

        $category->save();

        Session::flash('success', 'Category successfully created!');
     
        return redirect()->route('categories.show', $category->slug);
    }

    public function show($slug)
    {
        $category = Category::withCount('subcategories')->where('slug', $slug)->first();
        $all_ = Category::all();
        $page_name = 'categories';

        return view('dashboard.categories.show', compact('category', 'all_', 'page_name'));
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first(); 
        $page_name = 'categories';
        $all_ = Category::all();

          return view('dashboard.categories.edit', compact('category', 'page_name', 'all_'));
    }

    public function update(CategoriesRequest $request, $slug)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if ( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }

        $category = Category::where('slug', $slug)->first();
        $category->fill($input)->save();
        $page_name = $category->title;

        Session::flash('success', 'Category successfully updated!');
     
        return redirect()->route('categories.show', $category->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if(count($category->subcategories) == 0 ) {

            $category->delete();
            Session::flash('success', $category->title . ' successfully deleted!');

            return redirect()->route('categories.index');

        } else {

            Session::flash('error', $category->title . ' is not empty and can\'t be deleted!');

            return redirect()->route('categories.show', $category->slug);
        }
    }     

    public function trashed()
    {
        $trash_cat = Category::onlyTrashed()->get();
        $all_ = Category::all();
        $page_name = 'categories';

        return view('dashboard.categories.trashed', compact('trash_cat', 'page_name', 'all_'));
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();

        Session::flash('success', 'Category successfully restored!');
        return redirect()->route('categories.trashed');
    }

    public function kill($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->forceDelete();

        Session::flash('success', 'Category pemanently deleted!');
        return redirect()->route('categories.trashed');
    }
}