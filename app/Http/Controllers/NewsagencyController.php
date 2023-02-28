<?php

namespace App\Http\Controllers;

use App\newsagency;
use Illuminate\Http\Request;

class NewsagencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\newsagency  $newsagency
     * @return \Illuminate\Http\Response
     */
    public function show(newsagency $newsagency)
    {
        return view('newsagency')
                ->with('newsagency',$newsagency);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newsagency  $newsagency
     * @return \Illuminate\Http\Response
     */
    public function edit(newsagency $newsagency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newsagency  $newsagency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsagency $newsagency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newsagency  $newsagency
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsagency $newsagency)
    {
        //
    }
}
