<?php

namespace App\Http\Controllers;

use App\Page;
use App\Section;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Page::create($request->all());
        $sections = $request['sections'];
        return redirect("/sections/new?s=$sections");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($page = 0)
    {
      if (isset($_SERVER['HTTP_HOST'])) {
        $sub = explode('.', $_SERVER['HTTP_HOST']);
        $sub = $sub[0];
      }
      else {
        $sub = "www";
      }
      if($sub == "web") {
        if ($page == 0) {
          $hero = true;
        }
        else {
          $hero = false;
        }
        $hero_content = Section::find(1);
        $sections = Section::where('page_id', $page)->get();
        $page = Page::find($page);
        return view('crm.edit-admin', compact('page', 'sections', 'hero', 'hero_content'));
      }
      if($sub == "www") {
        if ($page == 0) {
          $hero = true;
        }
        else {
          $hero = false;
        }
        $page = Page::where('slug', $page)->get();
        $sections = Section::where('page_id', $page[0]->id)->get();
        $page = Page::find($page);
        return view('crm.show', compact('page', 'sections', 'hero'));
      }
      else {
        if ($page == 0) {
          $hero = true;
        }
        else {
          $hero = false;
        }
        $page = Page::where('slug', $page)->get();
        $sections = Section::where('page_id', $page[0]->id)->get();
        $page = Page::find($page);
        return view('crm.show', compact('page', 'sections', 'hero'));
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
    public function list(){
      $pages = Page::all();
      if (isset($_SERVER['HTTP_HOST'])) {
        $sub = explode('.', $_SERVER['HTTP_HOST']);
        $sub = $sub[0];
      }
      else {
        $sub = "www";
      }
      if($sub == "web") {
          return view('crm.admin-list', compact('pages'));
      }
      if($sub == "www") {
          return view('crm.index', compact('pages'));
      }
    }
}
