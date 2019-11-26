<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillbale = [
        'name',
        'slug',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
