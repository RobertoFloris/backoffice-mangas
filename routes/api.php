<?php

use App\Http\Controllers\Api\MangaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("mangas", [MangaController::class, 'index']);

Route::get("mangas/{manga}", [MangaController::class, 'show']);
