<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['image', 'user_id', 'title'];

    public function likes()
    {
        return $this->hasMany('App\Model\Like');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}