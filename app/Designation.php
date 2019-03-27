<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public function userss()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }
}
