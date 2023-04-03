<?php

namespace App\Http\Controllers;

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
//        $feed =\Feeds::make('https://jamejamonline.ir/fa/rss/17',true);
//        $feed =\Feeds::make('https://www.farsnews.ir/rss/social',true);
        $feed =\Feeds::make('https://www.mehrnews.com/rss/tp/6',true);
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );
        foreach ($data['items'] as $datum) {

            $news=news::where('title','=',$datum->get_title())
                            ->get();

            if($news->count()==0)
            {
                news::create([
                    'title'         =>$datum->get_title(),
                    'shortlink'     =>$datum->get_title(),
                    'link_source'   =>$datum->get_permalink(),
                    'img_thumbnail' =>$datum->get_enclosures()[0]->link,
                    'description'   =>$datum->get_description(),
                ]);
            }

        }
//        dd($data['items'][0]->get_enclosures()[0]->link);
//        dd($feed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        news::create([
            'title'         =>verta()->formatJalaliDate(),
            'shortlink'     =>verta(),
            'category_id'   =>1,
            'source_id'     =>1,
        ]);
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
        $news->views++;
        $news->save();
        return view('single')
                ->with('news',$news);
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

    public function search(Request $request)
    {
        $this->validate($request,[
            'q' =>'required|string',
        ]);
       $news=news::orwhere('title','like',"%$request->q%")
                ->orwhere('content','like',"%$request->q%")
                ->orderby('id','desc')
                ->paginate(16);

       $news->appends(['q' => $request['q']]);
       return view('search')
                    ->with('news',$news)
                    ->with('search',$request->q);
    }

    public function repair_shortlink()
    {
        $news=news::where('shortlink','like',"%/%")
                ->get();
        foreach ($news as $item)
        {
            $item->shortlink=str_replace('/','-',$item->shortlink);
            $item->save();
        }
        alert()->success($news->count()." LINK OK")->persistent('بستن');
        return back();
    }

    public function test_link()
    {
        $feed =\Feeds::make("https://www.alef.ir/rss/latest/politics.xml",true);
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );
        foreach ($data['items'] as $datum)
        {

            $news=news::where('title','=',$datum->get_title())
                ->get();
            dd(mb_substr("محمدی گلپایگانی: غم و غصه برای مردم، آقا را پیر کرده / فرزندان ایشان همگی مستاجرند / تنها دارایی ایشان یک خانه در پایین شهر است / ایشان از وجوه شرعی و امکانات نهادهایی مثل بنیاد مستضعفان و ستاد اجرایی مطلقاً در زندگی خود‌ و خانواده‌شان استفاده نمی‌کنند / هزینه زندگی‌شان از محل هدایا و نذوراتی که مقلدین و علاقه‌مندان به شخص ایشان تقدیم می‌کنند، تامین می‌شود",0,200)  );
            if($datum->get_enclosures()[0]->link)
            {
                $file=$datum->get_enclosures()[0]->link;
                $personal_image="personal-".time().".".$datum->get_enclosures()[0]->link->extension();
                $path=public_path('/documents/users/');
                $files=$request->file('personal_image')->move($path, $personal_image);
                $request->personal_image=$personal_image;
            }
            dd($datum->get_date());

            if($news->count()==0)
            {
//                news::create([
//                    'title'         =>$datum->get_title(),
//                    'shortlink'     =>$datum->get_title(),
//                    'link_source'   =>$datum->get_permalink(),
//                    'img_thumbnail' =>$datum->get_enclosures()[0]->link,
//                    'description'   =>$datum->get_description(),
//                    'category_id'   =>$source->category_id,
//                    'source_id'     =>$source->id,
//                    'date_fa'       =>verta()->formatJalaliDate(),
//                    'time_fa'       =>verta()->formatTime(),
//                ]);
            }

        }

    }
}
