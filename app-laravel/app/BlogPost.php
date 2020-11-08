<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    // protected $table = 'blogposts';
    // It helps you to protect those field for unhandle or unauthorized requests
    protected $fillable = ['title', 'content'];

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
