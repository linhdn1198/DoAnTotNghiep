<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_category_id',
        'name',
        'slug',
        'description',
        'price',
        'image',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details');
    }

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'comment_products');
    }
}