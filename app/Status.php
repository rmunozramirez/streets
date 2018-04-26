<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Status;

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


    public static function ban($id, $type)
    {

        $status = Status::where('statusable_id', $id)->where('statusable_type', 'profiles')->first();
        $status->status =  'banned';
        $status->save();

        Session::flash('success', 'User banned!');
        return redirect()->back();
    }

    public static function allow($id, $type)
    {

        $status = Status::where('statusable_id', $id)->where('statusable_type', 'profiles')->first();
        $status->status =  'active';
        $status->save();

        Session::flash('success', 'User banned!');
        return redirect()->back();
    }

    public static function activate($id, $type)
    {

        $status = Status::where('statusable_id', $id)->where('statusable_type', 'profiles')->first();
        $status->status =  'active';
        $status->save();

        Session::flash('success', 'User banned!');
        return redirect()->back();
    }

}
