<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [

        'profile_id',
        'comment_id',		    
	    'body',	    

	];

    public function post()
    {
        return $this->belongsTo('App\Post');
    } 

    public function commentreplies()
    {
        return $this->hasMany('App\CommentReply');
    }
}
