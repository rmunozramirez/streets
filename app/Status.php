<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    //'posts'
    'profiles'      => 'App\Profile',
    'channels'      => 'App\Channel',
    'subcategories' => 'App\Subcategory',
    'categories'    => 'App\Category',
    'discussions'   => 'App\Discussion',
]);

class Status extends Model
{

   protected $fillable = [

        'name',
		'slug',
        'statusable_type',
        'statusable_id',

    ];

    public function statusable()
    {
        return $this->morphTo();
    }
}
