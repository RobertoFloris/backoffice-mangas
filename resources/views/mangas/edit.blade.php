@extends('layouts.mangas')

@section('title', 'Modifica manga')

@section('content')
    <form action="{{ route('mangas.update', $manga) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $manga->title }}">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $manga->author }}">

            <div class="mb-3">
                <label for="type" class="form-label">Genere</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $manga->type }}">
            </div>

            <div class="mb-3">
                <label for="year_of_publication" class="form-label">Anno di pubblicazione</label>
                <input type="number" class="form-control" id="year_of_publication" name="year_of_publication"
                    value="{{ $manga->year_of_publication }}">
            </div>

            {{-- <div class="mb-3">
            <label for="type_id" class="form-label">Categoria</label>
            <select class="form-control" id="type_id" name="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div> --}}

            {{-- <div class="form-control mb-3 d-flex flex-wrap">
            @foreach ($technologies as $technology)
                <div class="tag me-2">
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                        id="technology-{{ $technology->id }}">
                    <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div> --}}

            <div class="mb-3">
                <label for="description" class="form-label">descrizione</label>
                <textarea class="form-control" id="description" name="description">{{ $manga->description }}></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection
