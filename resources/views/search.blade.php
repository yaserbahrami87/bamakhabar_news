@extends('master.index')
@section('content')
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9" id="categoryNews">
        <div class="card">
            <a href="">نتایج جستجوی "{{$search}}"</a>
            <div class="header_news col-12"></div>
            <div class="row">
                @foreach($news as $item)

                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="card h-100">
                            <img src="{{$item->img_thumbnail}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/news/{{$item->shortlink}}">
                                    <h5 class="card-title">{{$item->title}}</h5>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{$item->date}} پیش</small>
                                <a href="/agencies/{{$item->source->newsAgancy->newsagency}}">  <small class="text-muted">{{$item->source->newsAgancy->newsagency}}  </small> </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{$news->links()}}
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <div class="col-12" id="mostViewsCat">
            <div class="card">
                <a href="">اخبار تصادفی</a>
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