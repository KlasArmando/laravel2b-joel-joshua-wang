<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'title', 'length',
    ];

    public function admin(){
        return $this->belongsTo('App\Admin');
    }
 //vastbinden aan een admin
    //contact hoofdpagina
}
