<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public $table = 'contact';
    public $fillable = ['name','email','message'];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
