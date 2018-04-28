<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Discussion extends Model
{
	protected $fillable = [
			
			'profile_id',
            'title',
            'slug',
            'body',
            'image',

	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function watchers()
    {
        return $this->hasMany('App\Watcher');
    } 
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function likes()
    {
        return $this->morphMany('App\Like', 'likeable');
    }

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }
    
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function is_like_by_auth_user(){
        $id = Auth::id();
        $likers = array();

        foreach ($this->likes as $like) {
            array_push($likers, $like->profile_id);
        }

        if (in_array($id, $likers)) {
            return true;
        } else {
            return false;
        }
    }

    public function is_being_watched_by_auth_user()
    {
        $id = Auth::id();
        $watchers_id = array();

        foreach ($this->watchers as $w) {
            array_push($watchers_id, $w->profile_id);
        }

        if (in_array($id, $watchers_id)) {
            return true;
        } else {
            return false;
        }
    }

}
