<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "post";
    protected $fillable = ["image","content"];
    public static function allPost(){
        return post::all();
    }
}
