<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        $mangas = Manga::with('type')->get();

        return response()->json(
            [
                "success" => "true",
                "data" => $mangas
            ]
        );
    }

    public function show(Manga $manga)
    {
        $manga->load('type', 'languages');

        return response()->json(
            [
                "success" => "true",
                "data" => $manga
            ]
        );
    }
}
