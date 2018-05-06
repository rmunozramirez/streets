<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Image;

Relation::morphMap([
    'pages'         => 'App\Page',
    'posts'         => 'App\Post',
    'postcategories'=> 'App\Postcategory',
    'profiles'      => 'App\Profile',
    'channels'      => 'App\Channel',
    'subcategories' => 'App\Subcategory',
    'categories'    => 'App\Category',
    'discussions'   => 'App\Discussion',
]);


class Image extends Model
{
   protected $fillable = [
        'profile_id',
        'name',
        'slug',
        'alt',
        'about',
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public static function create_image($profile_id, $file, $type, $imageable_id)
    {

        $name = str_slug($file->getClientOriginalName());
        $slug = time() . '-' . $name;        
        $file->move('images', $slug);

        $image = new Image;
        $image->profile_id =  $profile_id;
        $image->slug =  $slug; 
        $image->name =  $name;
        $image->imageable_type = $type;
        $image->imageable_id = $imageable_id;

        $image->save();
        return $image;
    }
}


