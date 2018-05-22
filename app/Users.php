<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //fillable fields
    protected $fillable = ['email'];
    protected $fillable2 = ['password'];

    //custom timestamps name
    const CREATED_AT = 'created_at';

}
