<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe_catigorie extends Model
{
    protected $table = 'recipe_catigorie';
    protected $fillable = ["recipe_id","carigorie_id"];
}
