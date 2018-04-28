<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_ = Tag::all();
        $page_name = 'tags';
        $index = 'yes';

       return view('dashboard.tags.index', compact('all_', 'page_name', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_ = Tag::all();
        $page_name =  'tags';
        $index = 'create';

        return view('dashboard.tags.create', compact('all_', 'page_name', 'index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {

        $tag = Tag::create([

            'title'         =>  $request->title,
            'slug'          =>  str_slug($request->title, '-'),

       ]);

        $tag->save();

        Session::flash('success', 'Tag successfully created!');
        return redirect()->route('tags.show', $tag->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $element = Tag::where('slug', $slug)->first();
        $page_name = 'tags';
        $index = 'show';
        $all_ = Tag::all();

        return view('dashboard.tags.show', compact('element', 'all_', 'page_name', 'index'));
    }


    public function edit($slug)
    {

        $all_ = Tag::all();
        $element = Tag::where('slug', $slug)->first(); 
        $page_name = 'tags';
        $index = 'edit'; 

        return view('dashboard.tags.edit', compact('element', 'page_name', 'all_', 'index'));
    }

    public function update(TagRequest $request, $slug)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        $tag = Tag::where('slug', $slug)->first();
        $tag->fill($input)->save();
        $page_name = $tag->title;

        Session::flash('success', 'Tag successfully updated!');
     
        return redirect()->route('tags.show', $tag->slug); 
    }


    public function destroy($slug)
    {
        
        $tag = Tag::where('slug', $slug)->first();
        $tag->delete();

        Session::flash('success', 'Tag successfully deleted!');
        return redirect()->route('tags.index');
    }


    public function trashed()
    {
        $element = Tag::onlyTrashed()->get();
        $all_ = Tag::all();
        $page_name = 'tags';
        $index = 'trash';

        return view('dashboard.tags.trashed', compact('element', 'page_name', 'all_', 'index'));
    }

    public function restore($slug)
    {
        $tag = Tag::withTrashed()->where('slug', $slug)->first();
        $tag->restore();

        Session::flash('success', 'Tag successfully restored!');
        return redirect()->route('tags.index');
    }

    public function kill($slug)
    {
        $tag = Tag::withTrashed()->where('slug', $slug)->first();
        $tag->forceDelete();

        Session::flash('success', 'Tag pemanently deleted!');
        return redirect()->route('tags.index');
    }

}
