<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superheros extends Model
{
    protected $fillable = ['nickname', 'real_name', 'origin_description', 'superpowers', 'catch_phrase'];
    protected $table    = 'superheros';

    public function superheroImages()
    {
        return $this->hasMany('App\SuperheroImages');
    }
}
