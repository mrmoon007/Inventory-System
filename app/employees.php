<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'phone', 'experience' ,'nid', 'image' , 'salary' , 'vacation', 'city',
    ];
}
