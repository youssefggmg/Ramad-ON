<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $table = 'Recipe';
    protected $fillable = ["title","description","image"];
}
