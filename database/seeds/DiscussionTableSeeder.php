<?php

use Illuminate\Database\Seeder;

class DiscussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        App\Discussion::create ([

	        'profile_id'		=>	1,
	        'status_id'		=>	1,
	        'title'  		=>	'First discussion',
	        'slug'  		=>	'first-discussion',
	        'image'			=>	'ballet-revolution.jpg',
	        'likes'			=>	69,	        
	        'body' 			=>	'<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No?</p><p>Well, thats what you see at a toy store. And you must think youre in a toy store, because you are here shopping for an infant named Jeb.</p>',

        ]);	

        App\Discussion::create ([

	        'profile_id'	=>	3,
	        'status_id'		=>	1,
	        'title'  		=>	'Berlin ist in Deutschland',
	        'slug'  		=>	'berlin-ist-in-deutschland',
	        'image'			=>	'berlin.jpg',
	        'likes'			=>	356,	        
	        'body' 			=>	'<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. </p><p>Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they are actually proud of that shit./p>',

        ]);

        App\Discussion::create ([

	        'profile_id'	=>	3,
	        'status_id'		=>	1,
	        'title'  		=>	'Samuel L Jackson',
	        'slug'  		=>	'samuel-l-jackson',
	        'image'			=>	'auto-clasico.jpg',
	        'likes'			=>	2356,	        
	        'body' 			=>	'<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.</p><p>Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.</p>',
        ]);

        App\Discussion::create ([

	        'profile_id'	=>	4,
	        'status_id'		=>	1,
	        'title'  		=>	'The antidüring',
	        'slug'  		=>	'the-antiduering',
	        'image'			=>	'bad-wimpfen.jpg',
	        'likes'			=>	2356,	        
	        'body' 			=>	'<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brothers keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.
',
        ]);


    }
}
