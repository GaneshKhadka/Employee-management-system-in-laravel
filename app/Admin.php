<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'username', 'image', 'first_name','last_name', 'email', 'status',
    ];

}
