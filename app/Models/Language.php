<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function mangas()
    {
        return $this->belongsToMany(Manga::class);
    }
}
