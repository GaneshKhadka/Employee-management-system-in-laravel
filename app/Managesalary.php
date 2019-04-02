<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Managesalary extends Model
{
    public function usersss()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }
}
