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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trash_cat = Category::onlyTrashed()->get();
        $all_cat = Category::all();
        $page_name = 'Categories';

       return view('dashboard.categories.index', compact('all_cat', 'page_name', 'trash_cat'));
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
        $all_cat = Category::all();
        $page_name =  'Create a new Category';

        return view('dashboard.categories.create', compact('all_cat', 'page_name', 'all_roles', 'all_st'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::withCount('subcategories')->where('slug', $slug)->first();
        $page_name = $category->title;

        return view('dashboard.categories.show', compact('category', 'page_name'));
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
