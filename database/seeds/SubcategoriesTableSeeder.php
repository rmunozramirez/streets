<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        App\Subcategory::create ([
        'category_id' 	=>	1,
        'title'  			=>	'The world of PHP',
        'slug'  			=>	'the-world-of-php',
        'subtitle' 			=>	'Hier is all about programming',
        'image'				=>	'santorini.jpg',
        ]);

        		
        App\Subcategory::create ([
        'category_id' 		=>	2,
        'title'  			=>	'Popular dance',
        'slug'  			=>	'popular-dance',
        'subtitle' 			=>	'And of course here I do what I want',
        'image'				=>	'flamenco.jpg',
        ]);

        		
        App\Subcategory::create ([
        'category_id' 		=>	2,
        'title'  			=>	'Ballet',
        'slug'  			=>	'Ballet',
        'subtitle' 			=>	'And of course here I do what I want',
        'image'				=>	'ballet.jpg',
        ]);

        		
        App\Subcategory::create ([
        'category_id' 		=>	3,
        'title'  			=>	'Popular music',
        'slug'  			=>	'popular-music',
        'subtitle' 			=>	'Beat, Hip, Hop',
        'image'				=>	'salsa.jpg',
        ]);

        		
        App\Subcategory::create ([
        'category_id' 		=>	3,
        'title'  			=>	'Classical Music',
        'slug'  			=>	'classical-music',
        'subtitle' 			=>	'Opera and Co.',
        'image'				=>	'opera singer.jpg',
        ]);

    }
}
