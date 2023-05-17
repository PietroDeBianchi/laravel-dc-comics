@extends('layout.app')

@section('page-title', 'Modify Comics')

@section('contents')

<div class="container">
    <h3>Edit-OR</h3>
    <div class="row">
        <form method="POST" action="{{route('comics.update', ['comic'=> $comic->id])}}">

            {{-- adding a security command --}}
            @csrf
            {{-- Add the method PUT to POST --}}
            @method('PUT')

            <div class="mb-3">
                <label for="thumb" class="form-label">Link Immagine:</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" step=".01" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series:</label>
                <input type="text" class="form-control" id="series" name="series"  value="{{$comic->series}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Release Dte:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"  value="{{$comic->sale_date}}">
            </div>

            <button type="submit" class="btn btn-primary">Save new Comic</button>

    </form>
</div>
</div>

@endsection