<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable=[
        'total',
        'payment_type',
        'customer_id',
        'status'
    ];

    public function customer(){
        return $this->belongsTo('App\Models\CustomerDetail');
    }
}
