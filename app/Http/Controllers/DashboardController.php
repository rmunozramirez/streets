<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $page_name = 'dashboard';
        $all_ = 'dashboard';
        return view('dashboard.index', compact('page_name', 'all_'));
    }
}
