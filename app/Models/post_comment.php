<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post_comment extends Model
{
    //
    protected $table = 'post_comment';
    protected $fillable = ['post_id','comment'];

}
