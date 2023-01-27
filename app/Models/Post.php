<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'Posts';

    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];

    public function category(){
        //una categoria per ogni post
        return $this->belongsTo('App\Models\Category');
    }
}
