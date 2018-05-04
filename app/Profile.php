<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
   protected $fillable = [
        'user_id',
        'title',
        'status_id',
        'role_id',
		'slug',
        'birthday', 
        'about',
        'likes',            
		'web',
		'facebook',
		'googleplus',
		'twitter',
		'linkedin',
		'youtube',
    ];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }
    
    public function channel()
    {
        return $this->hasOne('App\Channel');
    }
//images
    public function images()
    {
        return $this->hasMany('App\Image');
    }
//blog
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function comments()
    {
        return $this->hasMany('App\Discussion');
    }
    public function commentreplies()
    {
        return $this->hasMany('App\Reply');
    }
//forum
    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }



    public function is_banned($id)
    {
        $profile = Profile::find($id);
        $status = $profile->statuses[0]->status;

        if ($status != 'banned') {
            return false;
        } else {
            return true;
        }

    }

}
