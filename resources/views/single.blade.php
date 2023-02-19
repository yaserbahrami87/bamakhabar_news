@extends('master.index')
@section('content')
    <div class="col-12" id="single_advertising">
    </div>
    <iframe class="col-12" src="{{$news->link_source}}" height="1000px"></iframe>
@endsection
