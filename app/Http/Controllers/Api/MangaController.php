<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index(Request $request)
    {
        $query = Manga::with('type');

        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        if ($request->filled('type_id')) {
            $query->where('type_id', $request->type_id);
        }

        if ($request->filled('order')) {
            switch ($request->order) {
                case 'alphabetical':
                    $query->orderBy('title', 'asc');
                    break;
                case 'newest':
                    $query->orderBy('year_of_publication', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('year_of_publication', 'asc');
                    break;
                case 'latest_added':
                    $query->orderBy('id', 'asc');
                    break;
            }
        } else {
            $query->orderBy('title', 'asc');
        }

        $mangas = $query->get();

        return response()->json([
            "success" => "true",
            "data" => $mangas
        ]);
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
