<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable #extends Model
{
    //
    protected $table = 'Users';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password'];
    public $timestamps = false;
    // set created_at and updated_at default

}
