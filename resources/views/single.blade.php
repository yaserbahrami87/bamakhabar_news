@extends('master.index')
@section('title'){{$news->title}}@endsection

@section('description'){{$news->description}}@endsection

@section('content')
    <div class="col-12">
        <div id="pos-article-display-13736"></div>
    </div>
    <div class="col-12" id="single_advertising">
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="media">


                    <div class="media-body">
                        @if(is_null($news->img_thumbnail))
                            <img src="{{asset('/images/news/noImage.jpg')}}"  class="mr-3 mb-3" title="{{$news->title}}" alt="{{$news->title}}" width="130px" />
                        @else
                            <img src="{{$news->img_thumbnail}}"  class="mr-3 mb-3" title="{{$news->title}}" alt="{{$news->title}}" width="130px" />
                        @endif
                        <h1 class="mt-0">{{$news->title}}</h1>
                        <strong>{{$news->description}}</strong>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <iframe class="col-12" src="{{$news->link_source}}" height="1000px"></iframe>
    <div id="pos-article-display-card-81164"></div>
@endsection
