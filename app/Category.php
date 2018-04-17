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
            'image',

	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }
}
