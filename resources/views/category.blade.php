@extends('master.index')
@section('title')اخبار{{$category->category}} باماخبر@endsection


@section('description')اخبار{{$category->category}} باماخبر که سایت هوشمند خبری است که دارای موتور جستجوگر اخبار اینترنتی هوشمند است و میتوانید آخرین اخبار جمع آوری شده از سایت های خبری را در آن ببینید@endsection


@section('content')
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9" id="categoryNews">
        <div class="card">
            <a href="/category/{{$category->category}}">{{$category->category}}</a>
            <div class="header_news col-12"></div>
            <div class="row">
                <div class="col-12">
                    <div id="pos-article-display-13736"></div>
                </div>
                @foreach($category->news()->paginate(12) as $item)

                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mb-3">
                        <div class="card h-100">
                            @if(is_null($item->img_thumbnail))
                                <img src="{{asset('/images/news/noImage.jpg')}}" class="card-img-top" alt="...">
                            @else
                                <img src="{{$item->img_thumbnail}}" class="card-img-top" alt="{{$item->title}}">
                            @endif
                            <div class="card-body">
                                <a href="/news/{{$item->shortlink}}">
                                    <h5 class="card-title">{{$item->title}}</h5>
                                </a>
                                @auth
                                    @if(Auth::user()->is_admin==1)
                                        <form method="POST" action="{{ route('admin.newsSpecial-store',$item->shortlink) }}" class="form-inline">
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
                                <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
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
                <div id='mediaad-BrUF'></div>
            </div>
            <div class="col-12">
                <!-- Pagination -->
                {{$category->news()->paginate(12)->links()}}
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <div class="col-12" id="mostViewsCat">
            <div class="card">
                <a href="/category/{{$category->category}}">پربازدیدهای  {{$category->category}}</a>
                <div class="header_news col-12"></div>
                @foreach ($category->news()->orderby('views','desc')->take(12) as $item)
                    <article class="col-12 p-0">
                        <div class="media">
                            <img src="{{$item->img_thumbnail}}"  class="align-self-top mr-3" alt="..." width="130px" height="65px" />
                            <div class="media-body ">
                                <h2 class="mt-0">
                                    <a href="/news/{{$item->shortlink}}" title="{{$item->title}}" >{{$item->title}}</a>
                                </h2>
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <p class="d-inline">{{$item->diff()}} قبل</p>
                                        <li class="fas fa-clock"></li>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <p class="d-inline"> {{$item->views}}</p>
                                        <li class="fa fa-eye"></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        <div id="pos-article-display-card-81164"></div>

    </div>
@endsection
