<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    //
    protected $fillable = [
        'employee_id', 'month', 'year', 'status' , 'advanced_salary' ,
    ];
}
