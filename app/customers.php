<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'phone', 'address' , 'shopname' ,'account_holder', 'account_number' , 'bank_name' , 'bank_branch' , 'city' , 'image' ,
    ];
}
