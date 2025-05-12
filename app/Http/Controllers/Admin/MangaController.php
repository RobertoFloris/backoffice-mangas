<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Manga;
use App\Models\Type;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mangas = Manga::all();
        return view("mangas.index", compact("mangas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        $languages = Language::all();

        return view("mangas.create", compact("types", "languages"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newManga = new Manga();

        $newManga->title = $data['title'];
        $newManga->author = $data['author'];
        $newManga->year_of_publication = $data['year_of_publication'];
        $newManga->type_id = $data['type_id'];
        $newManga->description = $data['description'];

        $newManga->save();

        $newManga->languages()->attach($data['languages']);

        return redirect()->route("mangas.show", $newManga);
    }

    /**
     * Display the specified resource.
     */
    public function show(Manga $manga)
    {
        return view("mangas.show", compact("manga"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manga $manga)
    {
        $types = Type::all();
        $languages = Language::all();
        return view("mangas.edit", compact('manga', 'types', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manga $manga)
    {
        $data = $request->all();

        $manga->title = $data['title'];
        $manga->author = $data['author'];
        $manga->year_of_publication = $data['year_of_publication'];
        $manga->type_id = $data['type_id'];
        $manga->description = $data['description'];

        $manga->update();

        if ($request->has('languages')) {
            $manga->languages()->sync($data['languages']);
        } else {
            $manga->languages()->detach();
        }

        return redirect()->route("mangas.show", $manga);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manga $manga)
    {
        $manga->languages()->detach();
        $manga->delete();
        return redirect()->route("mangas.index");
    }
}
