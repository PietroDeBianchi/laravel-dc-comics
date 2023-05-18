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
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb') ? old('thumb') : $comic->thumb}}">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ? old('title') : $comic->title}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{old('description') ? old('description') : $comic->description}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" step=".01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price') ? old('price') : $comic->price}}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series:</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"  value="{{old('series') ? old('series') : $comic->series}}">
                @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type') ? old('type') : $comic->type}}">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Release Dte:</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"  value="{{old('sale_date') ? old('sale_date') : $comic->sale_date}}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save new Comic</button>

    </form>
</div>
</div>

@endsection