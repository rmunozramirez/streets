<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'replies'    => 'App\Reply',
    'discussions'   => 'App\Discussion',
]);

class Like extends Model
{
	protected $fillable = [
	
        'likeable_id',
        'likeable_type',
        'like',	    
    
	];


    public function reply()
    {
        return $this->belongsTo('App\Reply');
    }

    // public function profile()
    // {
    //     return $this->belongsTo('App\Profile');
    // }


    public function likeable()
    {
        return $this->morphTo();
    }
}
