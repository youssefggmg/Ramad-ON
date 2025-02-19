<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $table = 'Recipe';
    protected $fillable = ["title","description","image"];
    public function catigorie()  {
        return $this->belongsTo(catigorie::class,"id");
    }
    public function comments(){
        return $this->hasMany(recipe_comment::class,"recipe_id");
    } 
}
