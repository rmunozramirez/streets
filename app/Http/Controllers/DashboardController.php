<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        $page_name = 'dashboard';
        $all_ = 'dashboard';
        return view('dashboard.index', compact('page_name', 'all_'));
    }

    public function create(){}

    public function store(Request $request){}

    public function show($slug){}

    public function edit($slug){}

    public function update(Request $request, $slug){}

    public function destroy($slug){}



}
