@extends('master.index')
@section('title')اخبار {{$newsagency->newsagency}} در باماخبر@endsection

@section('description')اخبار{{$newsagency->newsagency}} در باماخبر که سایت هوشمند خبری است دارای موتور جستجوگر اینترنتی هوشمند@endsection


@section('content')
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9" id="categoryNews">
        <div class="card">
            <a href="/category/{{$newsagency->newsagency}}">{{$newsagency->newsagency}}</a>
            <div class="header_news col-12"></div>
            <div class="row">
                @foreach($newsagency->source as $item)
                    @foreach($item->news()->paginate(12) as $news_item)
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mb-3">
                            <div class="card h-100">
                                @if(is_null($news_item->img_thumbnail))
                                    <img src="{{asset('/images/news/noImage.jpg')}}" class="card-img-top" alt="...">
                                @else
                                    <img src="{{$news_item->img_thumbnail}}" class="card-img-top" alt="{{$news_item->title}}">
                                @endif
                                <div class="card-body">
                                    <a href="/news/{{$news_item->shortlink}}">
                                        <h5 class="card-title">{{$news_item->title}}</h5>
                                    </a>
                                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{$news_item->diff()}} قبل</small>
                                    <a href="/newsagency/{{$news_item->source->newsAgancy->newsagency}}">  <small class="text-muted">{{$news_item->source->newsAgancy->newsagency}}  </small> </a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id='mediaad-BrUF'></div>
            </div>
            <div class="col-12">
                <!-- Pagination -->

            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <div class="col-12" id="mostViewsCat">
            <div class="card">
                <a href="/newsagency/{{$newsagency->newsagency}}">پربازدیدهای  {{$newsagency->newsagency}}</a>
                <div class="header_news col-12"></div>
                {{--                @foreach ($dataViews as $item)--}}
                {{--                    <?php--}}
                {{--                    $images=explode(",",$item->images);--}}
                {{--                    ?>--}}
                {{--                    <article class="col-12 p-0">--}}
                {{--                        <div class="media">--}}
                {{--                            <img src="{{asset('/images/news/'.$images[1])}}"  class="align-self-top mr-3" alt="..." width="130px" height="65px" />--}}
                {{--                            <div class="media-body ">--}}
                {{--                                <h2 class="mt-0">--}}
                {{--                                    <a href="/news/{{$item->shortlink}}" title="{{$item->title}}" >{{$item->title}}</a>--}}
                {{--                                </h2>--}}
                {{--                                <div class="row">--}}
                {{--                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">--}}
                {{--                                        <p class="d-inline">{{$item->date}}قبل</p>--}}
                {{--                                        <li class="fas fa-clock"></li>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">--}}
                {{--                                        <p class="d-inline"> {{$item->views}}</p>--}}
                {{--                                        <li class="fa fa-eye"></li>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </article>--}}
                {{--                @endforeach--}}
            </div>
        </div>

    </div>
@endsection
