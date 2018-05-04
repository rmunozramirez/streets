<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postcategory extends Model
{
	protected $fillable = [
	    'title',
        'slug',
        'about',
        'image',
	];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
        
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
