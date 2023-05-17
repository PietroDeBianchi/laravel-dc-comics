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
                <td class="d-flex">
                    <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">See Details</a>
                    <a href="{{route('comics.edit', ['comic'=> $comic->id])}}" class="btn btn-warning mx-2">Up Date!</a>
                    <form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Destroy!</button>                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div>
    <a href="{{route('comics.create')}}">Add new Comic!</a>
</div>

@endsection