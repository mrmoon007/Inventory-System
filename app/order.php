<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'customer_id',
        'oder_date', 
        'oder_status', 
        'total_products',
        'sub_total' ,
        'vat' ,
        'total' ,
        'payment_status' ,
        'pay' ,
        'due' ,
       
    ];
}
