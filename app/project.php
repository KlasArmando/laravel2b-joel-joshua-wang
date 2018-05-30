<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public $table = 'contact';

    public $fillable = ['name','email','message'];

    //custom timestamps name
    const CREATED_AT = 'created_at';

//
}
