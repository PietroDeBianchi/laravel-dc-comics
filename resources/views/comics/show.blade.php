@extends('layout.app')

@section('page-title')
    Comic: {{$comic->title}}
@endsection

@section('contents')

<div class="w-25">
    <div>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h4>{{$comic->title}}</h4>
        <h6>{{$comic->series}}</h6>
        <span>Price: ${{$comic->price}}</span> / <span>Date: {{$comic->sale_date}}</span>
    </div>
    <div class="pt-2 ps-5">
        <a class="btn btn-secondary" href="{{route('comics.index')}}">Go Back</a>
    </div>
</div>

@endsection