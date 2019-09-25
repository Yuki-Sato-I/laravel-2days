<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'public.user';

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }

    public function likes()
    {
        return $this->hasMany('App\Model\Like');
    }
}