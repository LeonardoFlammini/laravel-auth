<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Technology extends Model
{
    use HasFactory;
    public static function generateSlug($reference){
        $slug = Str::slug($reference, "-");
        return $slug;
    }
}
