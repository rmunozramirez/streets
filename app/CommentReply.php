<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
	protected $fillable = [

        'profile_id',
        'post_id',		    
	    'body',	    

	];	
    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }  
}
