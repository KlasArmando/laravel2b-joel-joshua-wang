<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receipts extends Model
{
    //fillable fields
    protected $fillable = ['receipt'];
    protected $fillable2 = ['ingredients'];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


}
