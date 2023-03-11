@extends('master.index')
@section('title')
    نتایج جستجوی {{$search}} در باماخبر
@endsection
@section('content')
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9" id="categoryNews">
        <div class="card">
            <a href="">نتایج جستجوی "{{$search}}"</a>
            <div class="header_news col-12"></div>
            <div class="row">
                <div class="col-12">
                    <div id="pos-article-display-13736"></div>
                </div>
                @foreach($news as $item)
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="card h-100">
                            <img src="{{$item->img_thumbnail}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/news/{{$item->shortlink}}">
                                    <h5 class="card-title">
                                        <b>{{$item->title}}</b>
                                    </h5>
                                </a>
                                @auth
                                    @if(Auth::user()->is_admin==1)
                                        <form method="POST" action="{{ route('admin.newsSpecial-store',$item->shortlink) }}">
                                            {{csrf_field()}}
                                            @if($item->special==1)
                                                <input type="hidden" value="0" name="special" />
                                                <button type="submit" class="btn">
                                                    <i class="bi bi-bookmark-fill"></i>
                                                </button>
                                            @else
                                                <input type="hidden" value="1" name="special" />
                                                <button type="submit" class="btn">
                                                    <i class="bi bi-bookmark"></i>
                                                </button>
                                            @endif
                                        </form>
                                    @endif
                                @endauth

                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{$item->diff()}} قبل</small>
                                <a href="/newsagency/{{$item->source->newsAgancy->newsagency}}">  <small class="text-muted">{{$item->source->newsAgancy->newsagency}}  </small> </a>
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
