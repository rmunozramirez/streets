<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
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

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
