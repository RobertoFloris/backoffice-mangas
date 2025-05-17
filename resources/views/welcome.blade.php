@extends('layouts.app')

@section('content')
    <div class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="min-height: calc(100vh - 200px);">
                        <div class="card shadow-lg border-0 rounded-4 w-100">
                            <div class="card-body p-5">
                                <h1 class="display-5 fw-bold text-center mb-4">
                                    Benvenuto nell'area di amministrazione di BooleAnime!
                                </h1>

                                <p class="fs-5 text-center text-secondary mb-4">
                                    Accedi o registrati per ottenere i diritti da amministratore e gestire il catalogo
                                    manga: aggiungi, modifica o elimina i contenuti disponibili.
                                </p>

                                <div class="text-center">
                                    <a href="http://localhost:5174" class="btn btn-primary btn-lg px-4" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="bi bi-box-arrow-up-right me-2"></i>
                                        Vai all'app per gli utenti
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
