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
        $subcategories = Subcategory::orderBy('created_at', 'asc')->paginate(4);
        $all_sub = Subcategory::all();
        $active_sub = Subcategory::where('status_id', 1)->paginate(4);
        $bann_sub = Subcategory::where('status_id', 2)->paginate(4);
        $trash_sub = Subcategory::where('status_id', 3)->paginate(4);
        $page_name = 'Categories';

       return view('dashboard.subcategories.index', compact('subcategories', 'page_name', 'all_sub', 'active_sub', 'bann_sub', 'trash_sub'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $subcategory = Subcategory::where('slug', $slug)->first();
        $page_name = $subcategory->title;

        return view('dashboard.subcategories.show', compact('subcategory', 'page_name'));
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
