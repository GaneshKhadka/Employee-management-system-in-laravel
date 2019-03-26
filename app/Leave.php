<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }
}
