<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
	protected $fillable = [	
		    'title',
            'slug',
            'subtitle',
            'body',
            'image',
	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

}
