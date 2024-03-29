<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = 'movies';
    public $guarded = [];

    public function genre(){
        return $this->belongsTo('App\Genre');
    }

}
