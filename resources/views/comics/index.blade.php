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
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection