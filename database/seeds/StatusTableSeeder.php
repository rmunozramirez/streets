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
         App\Status::create ([
            'name'  =>  'Active',
            'slug'  =>  'active',
        ]); 

         App\Status::create ([
            'name'  =>  'Inactive',
            'slug'  =>  'inactive',
        ]); 

         App\Status::create ([
            'name'  =>  'On Hold',
            'slug'  =>  'on_hold',
        ]); 

         App\Status::create ([
            'name'  =>  'Banned',
            'slug'  =>  'banned',
        ]); 

         App\Status::create ([
            'name'  =>  'Featured',
            'slug'  =>  'featured',
        ]); 

    }
}
