<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    
    protected $fillable = ['title', 'subtitle', 'description', 'image', 'category_id'];

    public function category() {

        return $this->belongsTo('App\Models\Category');
    }

    public function tags() {

        return $this->belongsToMany('App\Models\Tag', 'post_tag', 'post_id', 'tag_id');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
