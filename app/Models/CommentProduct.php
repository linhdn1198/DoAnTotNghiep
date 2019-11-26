<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentProduct extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'content',
    ];
}
