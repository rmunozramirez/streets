<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	protected $fillable = [	
			'postcategory_id',
		    'title',
            'slug',
            'subtitle',
            'body',
            'image',
	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function postcategory()
    {
        return $this->belongsTo('App\Postcategory');
    }

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

}