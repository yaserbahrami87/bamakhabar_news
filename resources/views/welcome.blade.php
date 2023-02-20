@extends('master.index')
@section('content')
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <a href="/category/سیاسی">سیاسی</a>
            <div class="header_news col-12"></div>

            @foreach ($news as $item)
                <article class="col-12 p-0">
                    <div class="media">
                        <a href="/news/{{$item->shortlink}}"  title="{{$item->title}}">
                            @if(is_null($item->image))
                                <img src="{{asset('/images/news/noImage.jpg')}}"  class="align-self-top mr-3" title="{{$item->title}}" alt="{{$item->title}}" width="130px" height="65px" />
                            @else
                                <img src="{{$item->img_thumbnail}}"  class="align-self-top mr-3" title="{{$item->title}}" alt="{{$item->title}}" width="130px" height="65px" />
                            @endif
                        </a>
                        <div class="media-body ">
                            <h2 class="mt-0">
                                <a href="/news/{{$item->shortlink}}" title="{{$item->title}}" >{{$item->title}}</a>
                            </h2>
                            <div class="row">
                                <div class="col-6 col-sm-4 col-md-8 col-lg-4 col-xl-4">
                                    <p class="d-inline"> نمدونم قبل</p>
                                    <li class="fas fa-clock"></li>
                                </div>
                                <div class="col-6  col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <p class="d-inline"> {{$item->views}}</p>
                                    <li class="fa fa-eye"></li>
                                </div>
                                <div class="col-12  col-sm-4 col-md-12 col-lg-4 col-xl-4">
                                    <a href="/agencies/{{$item->source_id}}">{{$item->source_id}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
            <a class="btn btn-primary btn-lg btn-block" href="/category/سیاسی" role="button">آرشیو اخبار سیاسی</a>
        </div>
        <div class="card" >
            <div id='mediaad-qpMn'></div>
        </div>
    </div>

@endsection
