<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // blog_post_id
    // The other parameters in belongsTo can rename the pattern above
    public function blogPost() {
        // return $this->belongsTo('App\BlogPost', 'post_id', 'blog_post_id);
        return $this->belongsTo('App\BlogPost');
    }
}
