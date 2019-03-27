<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }
}
