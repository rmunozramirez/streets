<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Channel;
use App\Subcategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        $home_categories = Category::all();
        $all_ch = Channel::all();
        $all_sub = Subcategory::pluck('title', 'id')->all();
        $all_cat = Category::orderBy('title', 'asc')->pluck('title', 'id')->all();
        $page_name = 'Home page';

        return view('welcome', compact('page_name', 'home_categories', 'all_cat', 'all_sub', 'all_ch'));
    }

}
