<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe_comment extends Model
{
    protected $table = 'recipe_comment';
    protected $fillable = ['recipe_id','content'];
    protected $timestamps = false;
    public function recipe(){
        return $this->belongsTo(recipe::class,'id');
    }
}
