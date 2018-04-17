<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   protected $fillable = [

        'name',
		'slug',

    ];

    public function profiles()
    {
        return $this->hasMany('App\Profile');
    }
}
