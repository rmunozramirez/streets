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

        App\Status::create ([
            'statusable_id'     =>  4,
            'statusable_type'   =>  'categories',
            'status'            =>  'inactive',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  5,
            'statusable_type'   =>  'categories',
            'status'            =>  'inactive',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  6,
            'statusable_type'   =>  'categories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  7,
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

        App\Status::create ([
            'statusable_id'     =>  6,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  7,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  8,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'inactive',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  9,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'inactive',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  10,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'inactive',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  11,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  12,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  13,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'inactive',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  14,
            'statusable_type'   =>  'subcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  15,
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
            'status'            =>  'active',
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
            'status'            =>  'active',
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
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  5,
            'statusable_type'   =>  'discussions',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  6,
            'statusable_type'   =>  'discussions',
            'status'            =>  'active',
        ]); 
//pages

        App\Status::create ([
            'statusable_id'     =>  1,
            'statusable_type'   =>  'pages',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  2,
            'statusable_type'   =>  'pages',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  3,
            'statusable_type'   =>  'pages',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  4,
            'statusable_type'   =>  'pages',
            'status'            =>  'active',
        ]); 

//postcategories

        App\Status::create ([
            'statusable_id'     =>  1,
            'statusable_type'   =>  'postcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  2,
            'statusable_type'   =>  'postcategories',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  3,
            'statusable_type'   =>  'postcategories',
            'status'            =>  'active',
        ]); 

//posts

        App\Status::create ([
            'statusable_id'     =>  1,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  2,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  3,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]);       

        App\Status::create ([
            'statusable_id'     =>  4,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  5,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  6,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]);       

        App\Status::create ([
            'statusable_id'     =>  7,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  8,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  9,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]);       

        App\Status::create ([
            'statusable_id'     =>  10,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]); 

        App\Status::create ([
            'statusable_id'     =>  11,
            'statusable_type'   =>  'posts',
            'status'            =>  'active',
        ]); 
      

    }
}
