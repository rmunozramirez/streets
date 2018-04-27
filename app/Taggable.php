<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([

    'pages'         => 'App\Page',
    'profiles'      => 'App\Profile',
    'channels'      => 'App\Channel',
    'discussions'   => 'App\Discussion',
    'posts'         => 'App\Post',
    
]);

class Taggable extends Model
{

	protected $fillable = [	
            'tag_id',
            'taggable_id',
            'taggable_type',
	];
}
