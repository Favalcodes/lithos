<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_name',
        'status',
        'slug',
    ];

    public function product(){
        return $this->hasMany('App\Models\Product');
    }
}
