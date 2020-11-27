<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = ['name'];

    public function post()
    {
        $this->belongsToMany('App\Post');
    }
}
