<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Image extends Model
{
   protected $fillable = [
        'profile_id',
        'title',
        'slug',
        'alt',
        'about',
    ];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
