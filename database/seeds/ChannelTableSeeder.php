<?php

use Illuminate\Database\Seeder;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		
        App\Channel::create ([
        'subcategory_id' 	=>	1,
        'profile_id'		=>	1,
        'title'  			=>	'This is my place',
        'slug'  			=>	'this-is-my-place',
        'subtitle' 			=>	'And of course here I do what I want',
        'image'				=>	'auto-clasico.jpg',
        'about'				=>	'Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I am in a transitional period so I do not wanna kill you, I wanna help you. But I ca not give you this case, it do not belong to me. Besides, I have already been through too much shit this morning over this case to hand it over to your dumb ass.',

        ]);

        App\Channel::create ([
        'subcategory_id' 	=>	2,
        'profile_id'		=>	2,
        'title'  			=>	'The Super Kike in action',
        'slug'  			=>	'the-super-kike-in-action',
        'subtitle' 			=>	'Hier is all about swimmmingt',
        'image'				=>	'kite.jpg',
        'about'             =>  'Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they are actually proud of that shit.',

        ]);
		
        App\Channel::create ([
        'subcategory_id' 	=>	2,
        'profile_id'		=>	3,
        'title'  			=>	'My paintings World',
        'slug'  			=>	'my-paintings-world',
        'subtitle' 			=>	'This is the work from my entire life',
        'image'				=>	'urban-dance.jpg',
        'about'             =>  'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?',

        ]);

        App\Channel::create ([
        'subcategory_id' 	=>	3,
        'profile_id'		=>	4,
        'title'  			=>	'This is another Channel from Pamela',
        'slug'  			=>	'this-is-another-channel-from-pamela',
        'subtitle' 			=>	'Pamela is a very good singer',
        'image'				=>	'bolliwood.jpg',
        'about'             =>  'Now that we know who you are, I know who I am. I am not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain is going to be? He is the exact opposite of the hero. And most times they are friends, like you and me! I should have known way back when... You know why, David? Because of the kids. They called me Mr Glass',

        ]);
		
        App\Channel::create ([
        'subcategory_id' 	=>	4,
        'profile_id'		=>	5,
        'title'  			=>	'The Good Hamberger',
        'slug'  			=>	'the-good-hamberger',
        'subtitle' 			=>	'I like a lot the birds meet and the Hamberger',
        'image'				=>	'gorrion.jpg',
        'about'             =>  'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?',

        ]);

        App\Channel::create ([
        'subcategory_id' 	=>	4,
        'profile_id'		=>	6,
        'title'  			=>	'I have not idea',
        'slug'  			=>	'i-have-not-idea',
        'subtitle' 			=>	'And of course here I do what I want',
        'image'				=>	'guitarra.jpg',
        'about'             =>  'Now that we know who you are, I know who I am. I am not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villains going to be? He is the exact opposite of the hero. And most times they are friends, like you and me! I should have known way back when... You know why, David? Because of the kids. They called me Mr Glass.',

        ]);

        App\Channel::create ([
        'subcategory_id' 	=>	4,
        'profile_id'		=>	7,
        'title'  			=>	'This is not ba channel',
        'slug'  			=>	'this-is-not-a-channel',
        'subtitle' 			=>	'And of course here I do what I want',
        'image'				=>	'no-channel.jpg',
        'about'             =>  'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You donot get sick, I do. That iss also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.',

        ]);

    }
}
