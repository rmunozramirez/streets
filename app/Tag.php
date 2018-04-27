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

class Tag extends Model
{

	protected $fillable = [	
		    'title',
	];

    /**
     * Get all of the pages that are assigned this tag.
     */
    public function pages()
    {
        return $this->morphedByMany('App\Page', 'taggable');
    }

    /**
     * Get all of the profiles that are assigned this tag.
     */
    public function profiles()
    {
        return $this->morphedByMany('App\Profile', 'taggable');
    }
    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'taggable');
    }

    /**
     * Get all of the channels that are assigned this tag.
     */
    public function channels()
    {
        return $this->morphedByMany('App\Channel', 'taggable');
    }
    /**
     * Get all of the channels that are assigned this tag.
     */
    public function discussions()
    {
        return $this->morphedByMany('App\Discussion', 'taggable');
    }
}
