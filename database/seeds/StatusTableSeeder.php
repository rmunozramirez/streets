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
//categories
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

//channelss
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
            'status'            =>  'inactive',
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

//profilesss
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
            'status'            =>  'inactive',
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
            'status'            =>  'inactive',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  4,
            'statusable_type'   =>  'discussions',
            'status'            =>  'banned',
        ]); 

    }
}
