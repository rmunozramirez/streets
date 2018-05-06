<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
	protected $fillable = [
			
			'category_id',
			'status_id',
		    'title',
            'slug',
            'subtitle',
            'about',

	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function channels()
    {
        return $this->hasMany('App\Channel');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    } 
}
