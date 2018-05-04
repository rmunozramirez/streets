<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	protected $fillable = [	
			'postcategory_id',
            'profile_id',
		    'title',
            'slug',
            'subtitle',
            'body',
            'image',
	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function postcategory()
    {
        return $this->belongsTo('App\Postcategory');
    }

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function commentreplies()
    {
        return $this->hasManyThrough('App\Reply', 'App\Comment');
    }
}
