@extends('layouts.mangas')

@section('title', 'Backoffice Manga')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Lista Manga</h2>
            <a class="btn btn-success" href="{{ route('mangas.create') }}">
                <i class="bi bi-plus-lg"></i> Aggiungi Manga
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Autore</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mangas as $manga)
                            <tr>
                                <td>{{ $manga->title }}</td>
                                <td>{{ $manga->author }}</td>
                                <td>
                                    <a href="{{ route('mangas.show', $manga) }}">
                                        Visualizza
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted">Nessun manga disponibile</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
