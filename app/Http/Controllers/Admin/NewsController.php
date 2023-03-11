<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=news::orderby('id','desc')
                    ->get();

        return view('admin.news.all_news')
                            ->with('news',$news);
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
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
    }

    public function specialNews()
    {
        $news=news::where('special','=',1)
                        ->orderby('id','desc')
                        ->get();

        return view('admin.news.all_news')
            ->with('news',$news);

    }

    public function specialNews_store(Request $request,news $news)
    {
        $this->validate($request,[
            'special'   =>'required|boolean',
        ]);

        $status=$news->update($request->all());
        if($status)
        {
            alert()->success('اعمال انجام شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا')->persistent('بستن');
        }

        return back();

    }
}
