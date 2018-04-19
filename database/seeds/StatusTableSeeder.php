<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//Categories
        App\Status::create ([
            'statusable_id'     =>  1,
            'statusable_type'   =>  'categories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  2,
            'statusable_type'   =>  'categories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  3,
            'statusable_type'   =>  'categories',
            'status'            =>  'active',
        ]); 

//Subcategories
        App\Status::create ([
            'statusable_id'     =>  1,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  2,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  3,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  4,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  5,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'inactive',
        ]); 

//Channels
        App\Status::create ([
            'statusable_id'     =>  1,
            'statusable_type'   =>  'channels',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  2,
            'statusable_type'   =>  'channels',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  3,
            'statusable_type'   =>  'channels',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  4,
            'statusable_type'   =>  'channels',
            'status'            =>  'on_hold',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  5,
            'statusable_type'   =>  'channels',
            'status'            =>  'banned',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  6,
            'statusable_type'   =>  'channels',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  7,
            'statusable_type'   =>  'channels',
            'status'            =>  'inactive',
        ]); 

//profiless
        App\Status::create ([
            'statusable_id'     =>  1,
            'statusable_type'   =>  'profiles',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  2,
            'statusable_type'   =>  'profiles',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  3,
            'statusable_type'   =>  'profiles',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  4,
            'statusable_type'   =>  'profiles',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  5,
            'statusable_type'   =>  'profiles',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  6,
            'statusable_type'   =>  'profiles',
            'status'            =>  'on_hold',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  7,
            'statusable_type'   =>  'profiles',
            'status'            =>  'banned',
        ]); 

//discussionss

        App\Status::create ([
            'statusable_id'     =>  1,
            'statusable_type'   =>  'discussions',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  2,
            'statusable_type'   =>  'discussions',
            'status'            =>  'inactive',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  3,
            'statusable_type'   =>  'discussions',
            'status'            =>  'on_hols',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  4,
            'statusable_type'   =>  'discussions',
            'status'            =>  'banned',
        ]); 

    }
}
