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
        'status_id'			=>	1,
        'title'  			=>	'This is my place',
        'slug'  			=>	'this-is-my-place',
        'subtitle' 			=>	'And of course here I do what I want',
        'image'				=>	'auto-clasico.jpg',
        'likes'				=>	2356,

        ]);

        App\Channel::create ([
        'subcategory_id' 	=>	2,
        'profile_id'		=>	2,
        'status_id'			=>	1,
        'title'  			=>	'The Super Kike in action',
        'slug'  			=>	'the-super-kike-in-action',
        'subtitle' 			=>	'Hier is all about swimmmingt',
        'image'				=>	'kite.jpg',
        'likes'				=>	2336,

        ]);
		
        App\Channel::create ([
        'subcategory_id' 	=>	2,
        'profile_id'		=>	3,
        'status_id'			=>	1,
        'title'  			=>	'My paintings World',
        'slug'  			=>	'my-paintings-world',
        'subtitle' 			=>	'This is the work from my entire life',
        'image'				=>	'urban-dance.jpg',
        'likes'				=>	276,

        ]);

        App\Channel::create ([
        'subcategory_id' 	=>	3,
        'profile_id'		=>	4,
        'status_id'			=>	1,
        'title'  			=>	'This is another Channel from Pamela',
        'slug'  			=>	'this-is-another-channel-from-pamela',
        'subtitle' 			=>	'Pamela is a very good singer',
        'image'				=>	'bolliwood.jpg',
        'likes'				=>	136,

        ]);
		
        App\Channel::create ([
        'subcategory_id' 	=>	4,
        'profile_id'		=>	5,
        'status_id'			=>	1,
        'title'  			=>	'The Good Hamberger',
        'slug'  			=>	'the-good-hamberger',
        'subtitle' 			=>	'I like a lot the birds meet and the Hamberger',
        'image'				=>	'gorrion.jpg',
        'likes'				=>	896,

        ]);

        App\Channel::create ([
        'subcategory_id' 	=>	4,
        'profile_id'		=>	6,
        'status_id'			=>	1,
        'title'  			=>	'I have not idea',
        'slug'  			=>	'i-have-not-idea',
        'subtitle' 			=>	'And of course here I do what I want',
        'image'				=>	'guitarra.jpg',
        'likes'				=>	26,

        ]);

        App\Channel::create ([
        'subcategory_id' 	=>	4,
        'profile_id'		=>	7,
        'status_id'			=>	1,
        'title'  			=>	'This is not ba channel',
        'slug'  			=>	'this-is-not-a-channel',
        'subtitle' 			=>	'And of course here I do what I want',
        'image'				=>	'no-channel.jpg',
        'likes'				=>	400,

        ]);

    }
}
