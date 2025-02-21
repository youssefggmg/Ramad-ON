<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe_comment extends Model
{
    protected $table = 'recipe_comment';
    protected $fillable = ['recipe_id','content'];
    public $timestamps = false;
    public function recipe(){
        return $this->belongsTo(recipe::class,'id');
    }
}
