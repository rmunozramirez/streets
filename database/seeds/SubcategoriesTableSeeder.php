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
        'subtitle'          =>  'Hier is all about programming',
        'image'             =>  'santorini.jpg',        
        'about' 			=>	'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.',

        ]);

        		
        App\Subcategory::create ([
        'category_id' 		=>	2,
        'title'  			=>	'Popular dance',
        'slug'  			=>	'popular-dance',
        'subtitle'          =>  'And of course here I do what I want',
        'image'             =>  'flamenco.jpg',        
        'about' 			=>	'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?',

        ]);

        		
        App\Subcategory::create ([
        'category_id' 		=>	2,
        'title'  			=>	'Ballet',
        'slug'  			=>	'Ballet',
        'subtitle'          =>  'And of course here I do what I want',
        'image'             =>  'ballet.jpg',        
        'about' 			=>	'My money is in that office, right? If she start giving me some bullshit about it aint there, and we got to go someplace else and get it, I am gonna shoot you in the head then and there. Then I am gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I am talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?',

        ]);

        		
        App\Subcategory::create ([
        'category_id' 		=>	3,
        'title'  			=>	'Popular music',
        'slug'  			=>	'popular-music',
        'subtitle'          =>  'Beat, Hip, Hop',
        'image'             =>  'salsa.jpg',        
        'about' 			=>	'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.',

        ]);

        		
        App\Subcategory::create ([
        'category_id' 		=>	3,
        'title'  			=>	'Classical Music',
        'slug'  			=>	'classical-music',
        'subtitle'          =>  'Opera and Co.',
        'image'             =>  'opera singer.jpg',        
        'about' 			=>	'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.',

        ]);

    }
}
