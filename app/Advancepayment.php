<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advancepayment extends Model
{
    public function employees()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }
}
