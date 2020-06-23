<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Mass assign
    protected $fillable = [
        'post_id',
        'nickname',
        'body'
    ];

    /**
     * DB RELATIONSHIPS
     */

    //With Post
    public function post() {
        return $this->belongsTo('App\Post');
    }
}
