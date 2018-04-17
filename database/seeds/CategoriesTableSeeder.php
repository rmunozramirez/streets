<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create ([
        'status_id'			=>	1,
        'title'  			=>	'Architecture',
        'slug'  			=>	'architecture',
        'subtitle' 			=>	'From architect to software developer',
        'image'				=>	'parthenon.jpg',

        ]);


        App\Category::create ([
        'status_id'			=>	2,
        'title'  			=>	'Dance',
        'slug'  			=>	'dance',
        'subtitle' 			=>	'The world in movement',
        'image'				=>	'dance.jpg',

        ]);


        App\Category::create ([
        'status_id'			=>	3,
        'title'  			=>	'Music',
        'slug'  			=>	'music',
        'subtitle' 			=>	'The sound of the bests',
        'image'				=>	'music.jpg',

        ]);


    }
}
