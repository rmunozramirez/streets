<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use App\Profile;
use App\Category;
use App\Status;
use App\Role;
use App\Image;
use Session;

class DashboardCategoriesController extends Controller
{

    public function index()
    {

        $all_ = Category::with('statuses')->get();
        $page_name = 'categories';
        $index = 'yes';

       return view('dashboard.categories.index', compact('all_cat', 'page_name', 'all_', 'index'));
    }

    public function create()
    {
        $all_st = Status::pluck('status', 'id')->all();
        $all_ = Category::all();
        $page_name =  'categories';
        $index = 'create';

        return view('dashboard.categories.create', compact('all_', 'page_name', 'all_st', 'index'));
    }

    public function store(CategoriesRequest $request)
    {
        $file = $request->file('image');
        $category = Category::create([

            'title'             => $request->title,
            'subtitle'          => $request->subtitle,
            'slug'              => str_slug($request->title, '-'),
            'about'             => $request->about, 

       ]);   

        $category->save();

        $type =  'categories';
        $imageable_id = $id = $category->id;
        $profile_id = 1;

        if ( $file = $request->file('image')) {
            $image = Image::where('imageable_type', 'categories')->where('imageable_id', $category->id)->first();
            if ($image) {
                $image->forceDelete();
            }
            Image::create_image($profile_id, $file, $type, $imageable_id);
        }
        Status::create_status($id, $type);

        Session::flash('success', 'Category successfully created!');
     
        return redirect()->route('categories.show', $category->slug);
    }

    public function show($slug)
    {
        $element = Category::withCount('subcategories')->with('images')->where('slug', $slug)->first();
        $all_ = Category::all();
        $page_name = 'categories';
        $index = 'show';

        return view('dashboard.categories.show', compact('element', 'all_', 'page_name',  'index'));
    }

    public function edit($slug)
    {
        $element = Category::where('slug', $slug)->first(); 
        $page_name = 'categories';
        $all_ = Category::all();
        $index = 'edit'; 

          return view('dashboard.categories.edit', compact('element', 'page_name', 'all_', 'index'));
    }

    public function update(CategoriesRequest $request, $slug)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');
        $type =  'categories';
        $category = Category::where('slug', $slug)->first();
        $category->fill($input)->save();
        $profile_id = 1;
        $imageable_id = $category->id;

        if ( $file = $request->file('image')) {
            $image = Image::where('imageable_type', $type)->where('imageable_id', $category->id)->first();
            if ($image) {
                $image->forceDelete();
            }
            Image::create_image($profile_id, $file, $type, $imageable_id);
        }


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
        $element = Category::onlyTrashed()->get();
        $all_ = Category::all();
        $page_name = 'categories';
        $index = 'trash';

        return view('dashboard.categories.trashed', compact('element', 'page_name', 'all_', 'index'));
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