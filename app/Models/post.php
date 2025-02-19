<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $table = "post";
    protected $fillable = ["image", "content"];
    public $timestamps = false ;
    /**
     * A post can have multiple comments.
     */
    public function post_comment(): HasMany
    {
        return $this->hasMany(post_comment::class, 'post_id');
    }
}
