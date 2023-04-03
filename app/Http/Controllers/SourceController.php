<?php

namespace App\Http\Controllers;

use App\news;
use App\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
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
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Source $source)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        //
    }

    public function store_auto()
    {

//        $feed =\Feeds::make('https://jamejamonline.ir/fa/rss/17',true);
//        $feed =\Feeds::make('https://www.farsnews.ir/rss/social',true);
        $sources=Source::where('status','=',1)
                ->get();
        foreach ($sources as $source)
        {
            $feed =\Feeds::make($source->link,true);
            $data = array(
                'title'     => $feed->get_title(),
                'permalink' => $feed->get_permalink(),
                'items'     => $feed->get_items(),
            );
            foreach ($data['items'] as $datum)
            {

                $news=news::where('title','=',$datum->get_title())
                    ->get();

                if($news->count()==0)
                {
                    news::create([
                        'title'         =>$datum->get_title(),
                        'shortlink'     =>mb_substr($datum->get_title(),0,200),
                        'link_source'   =>$datum->get_permalink(),
                        'img_thumbnail' =>$datum->get_enclosures()[0]->link,
                        'description'   =>$datum->get_description(),
                        'date_source'   =>$datum->get_date(),
                        'category_id'   =>$source->category_id,
                        'source_id'     =>$source->id,
                        'date_fa'       =>verta()->formatJalaliDate(),
                        'time_fa'       =>verta()->formatTime(),
                    ]);
                }

            }
        }
//        dd($data['items'][0]->get_enclosures()[0]->link);
//        dd($feed);
    }


}
