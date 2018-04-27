<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Role::create ([
            'title'  =>  'Super admin',
            'slug'  =>  'super_admin',
        ]);

        App\Role::create ([
            'title'  =>  'Admin',
            'slug'  =>  'admin',
        ]);   
                
         App\Role::create ([
            'title'  =>  'Author',
            'slug'  =>  'author',
        ]);   
                
		 App\Role::create ([
            'title'  =>  'Subscriber',
        	'slug'  => 	'subscriber',
        ]);   
         
    }
}
