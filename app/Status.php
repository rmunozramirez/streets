<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

   protected $fillable = [

        'name',
		'slug',

    ];

    public function profiles()
    {
        return $this->hasMany('App\Profile');
    }

    public function channels()
    {
        return $this->hasMany('App\Channel');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }

    public function categories()
    {
        return $this->hasMany('App\Category');
    }

    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }
}
