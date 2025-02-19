<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo ;

class post_comment extends Model
{
    //
    protected $table = 'post_comment';
    protected $fillable = ['post_id','comment'];
    public function post():BelongsTo
    {
        return $this->belongsTo(Post::class, 'id'); 
    }

}
