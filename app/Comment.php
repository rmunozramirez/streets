<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
	protected $fillable = [

        'profile_id',
        'post_id',		    
	    'body',	    

	];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function commentreplies()
    {
        return $this->hasMany('App\CommentReply');
    }

    public function likes()
    {
        return $this->morphMany('App\Like', 'likeable');
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

}
