<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CommentReply extends Model
{
	protected $fillable = [

        'profile_id',
        'comment_id',		    
	    'body',	    

	];	

    
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function comment()
    {
        return $this->belongsTo('App\Comment');
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
