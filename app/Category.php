<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

	protected $fillable = [

		    'title',
            'slug',
            'subtitle',
            'about',

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

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }

}
