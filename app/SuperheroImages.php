<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperheroImages extends Model
{
    protected $fillable = ['name'];
    protected $table    = 'superhero_images';

    function superheros() {
        return $this->belongsTo('App\Superheros');
    }
}
