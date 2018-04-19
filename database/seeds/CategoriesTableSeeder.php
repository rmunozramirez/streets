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
        'title'  			=>	'Architecture',
        'slug'  			=>	'architecture',
        'subtitle' 			=>	'From architect to software developer',
        'image'				=>	'parthenon.jpg',

        ]);


        App\Category::create ([
        'title'  			=>	'Dance',
        'slug'  			=>	'dance',
        'subtitle' 			=>	'The world in movement',
        'image'				=>	'dance.jpg',

        ]);


        App\Category::create ([
        'title'  			=>	'Music',
        'slug'  			=>	'music',
        'subtitle' 			=>	'The sound of the bests',
        'image'				=>	'music.jpg',

        ]);


    }
}
