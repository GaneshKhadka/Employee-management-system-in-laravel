<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Managesalary extends Model
{
    public function usersss()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }

    public function advanceSum()
    {
        return $this->hasMany('App\Advancepayment')
            ->selectRaw('SUM(amount) as total')
            ->groupBy('employee_id');
    }
}
