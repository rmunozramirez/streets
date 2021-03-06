<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

	protected $fillable = [

			'status_id',
		    'title',
            'slug',
            'subtitle',
            'about',
            'image',

	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    function channels()
    {
        return $this->hasManyThrough('App\Channel', 'App\Subcategory', 'category_id', 'subcategory_id');
    }

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }
}
