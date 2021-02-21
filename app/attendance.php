<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $fillable = [
        'user_id', 'att_date', 'att_year', 'attendance' , 'edit_data'
    ];

    public function employee()
    {
        return $this->hasOne(employees::class,'id','user_id');
    }
}
