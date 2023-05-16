@extends('layout.app')

@section('page-title', 'Comics Temple')

@section('contents')
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Series</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td><a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">See Details</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div>
    <a href="{{route('comics.create')}}">Add new Comic!</a>
</div>

@endsection