<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'price',
        'slug',
        'status',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Models\ProductCategory');
    }

    public function images(){
        return $this->hasMany('App\Models\ProductImage');
    }
}
