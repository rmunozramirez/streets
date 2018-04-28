<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
   protected $fillable = [
        'user_id',
        'user_name',
        'status_id',
        'role_id',
		'slug',
        'birthday', 
        'about',
        'image',
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
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }
    public function watchers()
    {
        return $this->hasMany('App\Watcher');
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
