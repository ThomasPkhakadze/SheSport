<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'desc', 'body', 'img',
        'video', 'sport_type', 'category',
        'tag', 'author', 'is_published'
    ];

    public function tag()
    {
        $this->belongsToMany('App\Tag');
    }

    public function sport()
    {
        $this->belongsToMany('App\Sport');
    }

    public function category()
    {
        $this->belongsToMany('App\Category');
    }

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin', 'author_id');
    }
}
