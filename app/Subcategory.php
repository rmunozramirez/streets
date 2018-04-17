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
            'image',

	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function status()
    {
        return $this->belongsTo('App\Status');
    } 


    public function category()
    {
        return $this->belongsTo('App\Category');
    } 
}