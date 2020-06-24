<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Mass assign
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug'
    ];

    /**
     * DB RELATIONSHIPS
     */

    //Con User
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Con Comment
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
