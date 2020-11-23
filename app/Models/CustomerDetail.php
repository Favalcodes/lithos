<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'company_name',
        'phone',
        'email',
        'country',
        'str_address',
        'town',
        'post_code',
    ];
    
    public function payments(){
        return $this->hasMany('App\models\Payment');
    }
}
