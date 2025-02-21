<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class catigorie extends Model
{
    protected $table = "Catigorie";
    public $timestamps = false ;

    public function Recipeis(){
        return $this->hasMany(Recipe::class, 'fk_carigorei_id', );
    }
}
