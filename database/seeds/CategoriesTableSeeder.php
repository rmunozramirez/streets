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
        'image'             =>  'parthenon.jpg',
        'about'				=>	'Your bones don not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.',

        ]);


        App\Category::create ([
        'title'  			=>	'Dance',
        'slug'  			=>	'dance',
        'subtitle' 			=>	'The world in movement',
        'image'				=>	'dance.jpg',
        'about'             =>  'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that is what you see at a toy store. And you must think you are in a toy store, because you are here shopping for an infant named Jeb.',

        ]);


        App\Category::create ([
        'title'  			=>	'Music',
        'slug'  			=>	'music',
        'subtitle' 			=>	'The sound of the bests',
        'image'				=>	'music.jpg',
        'about'             =>  'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.',

        ]);


    }
}
