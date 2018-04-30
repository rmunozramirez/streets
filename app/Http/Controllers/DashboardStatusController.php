<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatusRequest;
use App\Tag;
use App\Status;
use App\Taggable;
use Session;

class DashboardStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_ = Status::orderBy('statusable_type', 'asc')->get();
        $page_name = 'status';
        $index = 'yes';

       return view('dashboard.status.index', compact('all_', 'page_name', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_ = Status::all();
        $page_name =  'status';
        $index = 'create';

        return view('dashboard.status.create', compact('all_', 'page_name', 'index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusRequest $request)
    {

        $status = Status::create([

            'title'         =>  $request->title,
            'slug'          =>  str_slug($request->title, '-'),

       ]);

        $status->save();

        Session::flash('success', 'Tag successfully created!');
        return redirect()->route('tags.show', $status->slug);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $statuses= Status::where('status', $slug);
        $page_name = 'Status: ' . $slug;

        return view('dashboard.status.show', compact('statuses', 'page_name'));
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
    public function update(StatusRequest $request, $id)
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
