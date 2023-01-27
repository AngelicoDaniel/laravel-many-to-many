<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post(){
        //la category ha molti post associati;
        //tanti post per ogni categoria
        return $this->hasMany('App\Models\Post');
    }
}
