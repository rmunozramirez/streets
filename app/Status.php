<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    //'posts'
    'profile'      => 'App\Profile',
    'channel'      => 'App\Channel',
    'subcategory' => 'App\Subcategory',
    'category'    => 'App\Category',
    'discussion'   => 'App\Discussion',
]);

class Status extends Model
{

   protected $fillable = [

        'name',
		'slug',
        'statusable_type',
        'statusable_id',

    ];

    // public function profiles()
    // {
    //     return $this->hasMany('App\Profile');
    // }

    // public function channels()
    // {
    //     return $this->hasMany('App\Channel');
    // }

    // public function subcategories()
    // {
    //     return $this->hasMany('App\Subcategory');
    // }

    // public function categories()
    // {
    //     return $this->hasMany('App\Category');
    // }

    // public function discussions()
    // {
    //     return $this->hasMany('App\Discussion');
    // }

    public function statusable()
    {
        return $this->morphTo();
    }
}
