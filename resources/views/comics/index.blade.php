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
                    <a href="{{route('comics.edit', ['comic'=> $comic->id])}}" class="btn btn-warning mx-2">Edit</a>
                    <form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa-solid fa-trash-can"></i></button>
                        {{-- <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Destroy!</button> --}
                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div>
    <a class="btn btn-secondary" href="{{route('comics.create')}}">Add new Comic!</a>
</div>

@endsection