<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Channel extends Model
{
	protected $fillable = [
			
			'subcategory_id',
			'profile_id',
			'status_id',
		    'title',
            'slug',
            'subtitle',
            'image',
            'likes',

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

    // public function status()
    // {
    //     return $this->belongsTo('App\Status');
    // }    

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }
}
