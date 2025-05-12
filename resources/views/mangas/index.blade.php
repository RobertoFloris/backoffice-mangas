@extends('layouts.mangas')

@section('title', 'Mangas')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mangas as $manga)
                <tr>
                    <th scope="row">{{ $manga->title }}</th>
                    <td>{{ $manga->author }}</td>
                    <td>
                        <a href="{{ route('mangas.show', $manga) }}">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex gap-3">
        <a class="btn btn-primary" href="{{ route('mangas.create') }}">Aggiungi Manga</a>

    </div>
@endsection
