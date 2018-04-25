<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Status;

Relation::morphMap([
    'pages'         => 'App\Page',
    'posts'         => 'App\Post',
    'postcategories'=> 'App\PostCategory',
    'profiles'      => 'App\Profile',
    'channels'      => 'App\Channel',
    'subcategories' => 'App\Subcategory',
    'categories'    => 'App\Category',
    'discussions'   => 'App\Discussion',
]);

class Status extends Model
{

   protected $fillable = [

        'status',
        'statusable_type',
        'statusable_id',

    ];

    public function statusable()
    {
        return $this->morphTo();
    }

    public static function create_status($id, $type)
    {
        $status = new Status;
        $status->statusable_id =  $id;
        $status->statusable_type =  $type;
        $status->status =  'active';

        $status->save();
        return $status;
    }

}
