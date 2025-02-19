<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class catigorie extends Model
{
    protected $table = "catigorie";
    protected $fillable = ['name'];

    public function Recipeis(){
        return $this->hasMany(Recipe::class, 'fk_carigorei_id', );
    }
}
