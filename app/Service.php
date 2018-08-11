<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'email',
        'phone_number',
        'house_code',
        'payment_id'
    ];
    
    
}
