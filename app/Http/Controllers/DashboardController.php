<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use App\Subcategory;
use App\Category;
use App\Profile;
use App\Role;

class DashboardController extends Controller
{

   public function __construct() {
        $this->middleware(['auth', 'admin']);
    }
    
    public function index(){
        $page_name = 'dashboard';
        $all_ = 'dashboard';
        $all_ch = Channel::all();
        $all_sub = Subcategory::pluck('title', 'id')->all();
        $all_cat = Category::orderBy('title', 'asc')->pluck('title', 'id')->all();
        $all_pr = Profile::all();
        $all_roles = Role::pluck('name', 'id')->all();
        return view('dashboard.index', compact('page_name', 'all_', 'all_ch', 'all_sub', 'all_cat', 'all_pr', 'all_roles'));

    }

    public function create(){}
    public function trashed(){}

    public function store(Request $request){}

    public function show($slug){}

    public function edit($slug){}

    public function update(Request $request, $slug){}

    public function destroy($slug){}



}
