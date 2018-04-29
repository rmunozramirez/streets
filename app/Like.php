<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'replies'    => 'App\Reply',
    'discussions'   => 'App\Discussion',
    'posts'   => 'App\Post',
    'comments'   => 'App\Comment',
    'commentreplies'   => 'App\CommentReply',
]);

class Like extends Model
{
	protected $fillable = [
	
        'likeable_id',
        'likeable_type',
        'like',
        'profile_id', 
    
	];

    public function reply()
    {
        return $this->belongsTo('App\Reply');
    }

    public function likeable()
    {
        return $this->morphTo();
    }
}
