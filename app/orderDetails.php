<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderDetails extends Model
{
    protected $fillable = [
        'oder_id',
        'product_id', 
        'qty', 
        'unit_cost',
        'total' ,
       
    ];

}
