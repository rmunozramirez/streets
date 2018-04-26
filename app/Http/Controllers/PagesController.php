<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Profile;
use App\Page;
use App\Status;
use Session;
use Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pages = Page::orderBy('created_at', 'asc')->paginate(4);
        $all_ = Page::with('statuses')->get();
        $page_name = 'pages';

       return view('dashboard.pages.index', compact('pages', 'page_name', 'all_'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_ = Page::all();
        $page_name =  'pages';

        return view('dashboard.pages.create', compact('all_', 'page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $file = $request->file('image');
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move('images', $name);

        $page = Page::create([

            'title'         =>  $request->title,
            'slug'          =>  str_slug($request->title, '-'),      
            'subtitle'      =>  $request->subtitle,                
            'body'          =>  $request->body,            
            'image'         =>  $name,

       ]);

        $page->save();

        $type =  'pages';
        $id = $page->id;
        $status = (new Status)->create_status($id, $type);

        Session::flash('success', 'Page successfully created!');
        return redirect()->route('pages.show', $page->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $page_name = 'pages';
        $all_ = Page::with('statuses')->get();

        return view('dashboard.pages.show', compact('page', 'page_name', 'all_'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $all_ = Page::with('statuses')->get();
        $page = Page::where('slug', $slug)->first(); 
        $page_name = 'pages';

        return view('dashboard.pages.edit', compact('page', 'Pagecategories', 'page_name', 'all_'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $input = $request->all();
        $input['slug'] = str_slug($request->title, '-');

        if( $file = $request->file('image')) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }

        $page = Page::where('slug', $slug)->first();
        $page->fill($input)->save();

        Session::flash('success', 'Page successfully updated!');
     
        return redirect()->route('pages.show', $page->slug); 
    }

    public function destroy($slug)
    {
        
        $page = Page::where('slug', $slug)->first();
        $page->delete();

        Session::flash('success', 'Page successfully deleted!');
        return redirect()->route('pages.index');
    }


    public function trashed()
    {
        $trash_page = Page::onlyTrashed()->get();
        $all_ = Page::all();
        $page_name = 'pages';

        return view('dashboard.pages.trashed', compact('trash_page', 'page_name', 'all_'));
    }

    public function restore($slug)
    {
        $page = Page::withTrashed()->where('slug', $slug)->first();
        $page->statuses->status = 'inactive';
        $page->restore();

        Session::flash('success', 'Page successfully restored!');
        return redirect()->route('pages.index');
    }

    public function kill($slug)
    {
        $page = Page::withTrashed()->where('slug', $slug)->first();
        $page->forceDelete();

        Session::flash('success', 'Page pemanently deleted!');
        return redirect()->route('pages.index');
    }
}
