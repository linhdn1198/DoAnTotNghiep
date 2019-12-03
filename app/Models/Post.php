<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_category_id',
        'user_id',
        'title',
        'slug',
        'content',
        'image',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postCategories()
    {
        return $this->belongsTo(PostCategory::class);
    }
}
