<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Mass assign
    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];

    /**
     * DB RELATIONSHIPS
     */

    //Con User
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}