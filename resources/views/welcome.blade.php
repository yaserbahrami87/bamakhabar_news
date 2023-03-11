@extends('master.index')

@section('title')    باماخبر موتور جستجوگر اخبار اینترنتی@endsection

@section('description')   باماخبر سایت هوشمند خبری است که دارای موتور جستجوگر اینترنتی هوشمند است و میتوانید آخرین اخبار جمع آوری شده از سایت های خبری را در آن ببینید@endsection

@section('content')
    <div class="col-12">
        <div class="card" >
            <div id="pos-article-display-13739"></div>
        </div>
    </div>
    @foreach($categories as $category)
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card">
            <a href="/category/{{$category->category}}">{{$category->category}}</a>
            <div class="header_news col-12"></div>

            @foreach ($category->news->take(12) as $item)

                <article class="col-12 p-0">
                    <div class="media">
                        <a href="/news/{{$item->shortlink}}"  title="{{$item->title}}">
                            @if(is_null($item->img_thumbnail))
                                <img src="{{asset('/images/news/noImage.jpg')}}"  class="align-self-top mr-3" title="{{$item->title}}" alt="{{$item->title}}" width="130px" height="65px" />
                            @else
                                <img src="{{$item->img_thumbnail}}"  class="align-self-top mr-3" title="{{$item->title}}" alt="{{$item->title}}" width="130px" height="65px" />
                            @endif
                        </a>
                        <div class="media-body ">
                            <h2 class="mt-0">
                                <a href="/news/{{$item->shortlink}}" title="{{$item->title}}" >
                                    <b>{{$item->title}}</b>
                                </a>
                            </h2>
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
                            <div class="row">

                                <div class="col-6 col-sm-4 col-md-8 col-lg-4 col-xl-4">
                                    <p class="d-inline"> {{$item->diff()}} قبل</p>
                                    <li class="fas fa-clock"></li>
                                </div>
                                <div class="col-6  col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <p class="d-inline"> {{$item->views}}</p>
                                    <li class="fa fa-eye"></li>
                                </div>
                                <div class="col-12  col-sm-4 col-md-12 col-lg-4 col-xl-4">
                                    <a href="/newsagency/{{$item->source->newsAgancy->newsagency}}">{{$item->source->newsAgancy->newsagency}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
            <a class="btn btn-primary btn-lg btn-block" href="/category/{{$category->category}}" role="button">آرشیو اخبار {{$category->category}}</a>
        </div>



    </div>

    @endforeach


@endsection
