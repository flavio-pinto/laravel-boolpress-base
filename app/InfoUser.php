<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    //Mass assign
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'avatar'
    ];

    //Per ignorare i timestamps
    public $timestamps = false; 

    /**
     * DB RELATIONSHIPS
     */

    //Con Users (one to one)
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
