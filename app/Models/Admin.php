<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'Admins';
    protected $fillable = [
        'email',
        'password',
        'status'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'status' => 'integer'
    ];
}
