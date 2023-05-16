@extends('layout.app')

@section('page-title')
    Comic: {{$comic->title}}
@endsection

@section('contents')

<div>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <h4>{{$comic->title}}</h4>
    <h6>{{$comic->series}}</h6>
    <span>Price: ${{$comic->price}}</span> / <span>Date: {{$comic->sale_date}}</span>
</div>

@endsection