<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
