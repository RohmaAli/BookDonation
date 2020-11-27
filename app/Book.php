<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['uuid', 'title', 'cover'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function customers()
    {
        return $this->belongsToMany('App\Customer')->withTimestamps();
    }
}
