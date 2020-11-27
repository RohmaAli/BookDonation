<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function books()
    {
        return $this->belongsToMany('App\Book')->withPivot('hasPermission')->withTimestamps();
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
