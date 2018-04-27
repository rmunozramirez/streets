<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    public function run()
    {

        App\Tag::create ([
            'title'   	=>  'Software',
            'slug'   	=>  'software',
        ]); 
        
        App\Tag::create ([
            'title'   	=>  'Culture',
            'slug'   	=>  'culture',
        ]); 

        App\Tag::create ([
            'title'   	=>  'Music',
            'slug'   	=>  'music',
        ]); 
        
        App\Tag::create ([
            'title'   	=>  'Holidays',
            'slug'   	=>  'holidays',
        ]); 

        App\Tag::create ([
            'title'   	=>  'Cinema',
            'slug'   	=>  'cinema',
        ]); 
        
        App\Tag::create ([
            'title'   	=>  'National Geographic',
            'slug'   	=>  'national-geographic',
        ]); 

        App\Tag::create ([
            'title'   	=>  'Interesting',
            'slug'   	=>  'Interesting',
        ]); 
        
        App\Tag::create ([
            'title'   	=>  'People of the World',
            'slug'   	=>  'people-of-the-world',
        ]); 

        App\Tag::create ([
            'title'   	=>  'Gamers',
            'slug'   	=>  'gamers',
        ]); 

        App\Tag::create ([
            'title'   	=>  'Society',
            'slug'   	=>  'society',
        ]); 

// Pages

        App\Taggable::create ([
            'tag_id'		=>	1,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'pages',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'pages',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	1,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'pages',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'pages',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	1,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'pages',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'pages',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	1,
            'taggable_id'	=>	4,
            'taggable_type'	=>	'pages',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	4,
            'taggable_type'	=>	'pages',
        ]); 

// profiles


        App\Taggable::create ([
            'tag_id'		=>	1,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	2,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	3,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	4,
            'taggable_id'	=>	4,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	5,
            'taggable_id'	=>	6,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	6,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	7,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	8,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	9,
            'taggable_id'	=>	4,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	10,
            'taggable_id'	=>	5,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	11,
            'taggable_id'	=>	6,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	9,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	10,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	11,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	1,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	4,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	6,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	3,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'profiles',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	9,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'profiles',
        ]); 

// channels

        App\Taggable::create ([
            'tag_id'		=>	1,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	2,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	3,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	4,
            'taggable_id'	=>	4,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	5,
            'taggable_id'	=>	6,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	6,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	7,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	8,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	9,
            'taggable_id'	=>	4,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	10,
            'taggable_id'	=>	5,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	11,
            'taggable_id'	=>	6,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	9,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	10,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	11,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'channels',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	7,
            'taggable_type'	=>	'channels',
        ]); 


//discussions

        App\Taggable::create ([
            'tag_id'		=>	1,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	2,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	3,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	4,
            'taggable_id'	=>	4,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	5,
            'taggable_id'	=>	6,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	6,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	7,
            'taggable_id'	=>	2,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	8,
            'taggable_id'	=>	3,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	9,
            'taggable_id'	=>	4,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	10,
            'taggable_id'	=>	5,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	11,
            'taggable_id'	=>	6,
            'taggable_type'	=>	'discussions',
        ]); 
        App\Taggable::create ([
            'tag_id'		=>	12,
            'taggable_id'	=>	1,
            'taggable_type'	=>	'discussions',
        ]); 


    }
}
