@extends('layouts.mangas')

@section('title', $manga->title)

@section('content')
    <h2>
        {{ $manga->author }}
    </h2>
    <p>
        {{ $manga->type->name }} - {{ $manga->type->description }}
    </p>
    {{-- <p>
        @if (count($manga->technologies) > 0)
            @foreach ($manga->technologies as $technology)
                <span class="badge" style="background-color: {{ $technology->color }}">{{ $technology->name }}</span>
            @endforeach
        @endif


    </p> --}}
    <p>
        {{ $manga->description }}
    </p>

    <div class="d-flex gap-3">
        <a class="btn btn-secondary" href="{{ route('mangas.edit', $manga) }}">Modifica</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
        </button>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare questo progetto?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    L'azione è irreversibile
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('mangas.destroy', $manga) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
