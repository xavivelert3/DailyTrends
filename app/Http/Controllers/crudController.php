<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feed;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeds = Feed::all(); 
       return view("feeds.lista",compact("feeds",$feeds));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feeds.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feed = new Feed;
        $feed->titulo = $request->titulo;
        $feed->body = $request->body;
        $feed->image = $request->image;
        $feed->source = $request->source;
        $feed->publisher = $request->publisher;

        $feed->save();
        return redirect("/");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feeds = Feed::findOrFail($id); 
        return view('feeds.update', compact("feeds",$feeds));

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
        $feed = Feed::findOrFail($id); 
        $feed ->update($request->all());
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $feed = Feed::findOrFail($id);
       $feed ->delete();

        return redirect("/");
    }
}
