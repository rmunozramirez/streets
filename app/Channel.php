<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Status;

class Channel extends Model
{
	protected $fillable = [
			
			'subcategory_id',
			'profile_id',
		    'title',
            'slug',
            'subtitle',
            'about',

	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }  

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    } 

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }    

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
