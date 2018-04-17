<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussion extends Model
{
	protected $fillable = [
			
			'status_id',
            'title',
            'slug',
            'body',
            'image',
            'likes', 

	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

}
