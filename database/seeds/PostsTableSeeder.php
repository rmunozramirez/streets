<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Post::create ([
        'postcategory_id' 	=>	1,
        'profile_id'		=>	1,
        'title'  			=>	'This is the dyingt post',
        'slug'  			=>	'this-is-the-dying-post',
        'subtitle' 			=>	'And of course this is the dying',
        'image'				=>	'dying.jpg',
        'published_at'		=>	'2018-04-26 03:24:25',
        'body'				=>	'
        						<p>When we were working on <a href="https://www.ait-themes.club/wordpress-themes/expedition/" target="_blank">Expedition Theme</a> development, we made a research of the current offer of templates specialized on travelling, travelers and travel guides. The research showed that the WordPress travel themes available on the market are all very similar and most of them work as a travel blog only. Travelers can use such a template for recording their travel experiences in the form of blog posts.</p>
								<ul>
								<li>Travel guide template</li>
								<li>Mountain guide theme</li>
								<li>Website for road trip and driving tours planning</li>
								<li>City tours theme</li>
								<li>Travel agency theme</li>
								<li>Theme for travelers / travel blog</li>
								</ul>
								<p>This template has a wide range of use in travelling and tourist guidance. It can be used for a presentation of a tourist guide, travel or entertainment agency. But it can be used also as a presentation of traveler. It is suitable for use wherever it is practical to show a map with different places linked by continuous route.</p>
								<h3>Oriented on Maps</h3>
								<p>What’s the best and fastest way to attract tourist and reader’s attention? By previewing what is waiting for them directly on the map. We’ve incorporated maps and advanced functionalities for their use to the travel WordPress theme. Maps are definitely the key to tourist interest.</p>',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	1,
        'profile_id'		=>	2,
        'title'  			=>	'Hamburg',
        'slug'  			=>	'hamburg',
        'subtitle' 			=>	'And of course this is hamburg',
        'image'				=>	'hamburg.jpg',
        'published_at'		=>	'2018-03-06 03:24:25',
        'body'				=>	'
        						The city is a forum for and has specialists in world economics and international law with such consular and diplomatic missions as the International Tribunal for the Law of the Sea, the EU-LAC Foundation, and the UNESCO Institute for Lifelong Learning. In recent years, the city has played host to multipartite international political conferences and summits such as Europe and China and the G20. Former German Chancellor Helmut Schmidt, who governed Germany for eight years, came from Hamburg.

								The city is a major international and domestic tourist destination. It ranked 18th in the world for livability in 2016.[6] The Speicherstadt and Kontorhausviertel were declared World Heritage sites by UNESCO in 2015.[7]',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	1,
        'profile_id'		=>	3,
        'title'  			=>	'gorrion',
        'slug'  			=>	'gorrion',
        'subtitle' 			=>	'And of course this is gorrion',
        'image'				=>	'gorrion.jpg',
        'published_at'		=>	'2017-12-06 03:24:25',
        'body'				=>	'
        						Mustaine, who went on to found Megadeth, has expressed his dislike for Hammett in interviews, saying Hammett "stole" his job.[20] Mustaine was "pissed off" because he believes Hammett became popular by playing guitar leads that Mustaine himself had written.[21] In a 1985 interview with Metal Forces, Mustaine said, "its real funny how Kirk Hammett ripped off every lead break Id played on that No Life til Leather tape and got voted No. 1 guitarist in your magazine.[22] On Megadeths debut album Killing Is My Business... and Business Is Good! (1985), Mustaine included the song Mechanix, which Metallica had previously reworked and retitled The Four Horsemen on Kill Em All. Mustaine said he did this to straighten Metallica up because Metallica referred to Mustaine as a drunk and said he could not play guitar.[22] Metallicas first live performance with Hammett was on April 16, 1983, at a nightclub in Dover, New Jersey called The Showplace;[16] the support act was Anthraxs original line-up, which included Dan Lilker and Neil Turbin.[23] This was the first time the two bands performed live together.[16]',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	2,
        'profile_id'		=>	1,
        'title'  			=>	'Metallica',
        'slug'  			=>	'metallica',
        'subtitle' 			=>	'And of course this is the subtitlet',
        'image'				=>	'metallica.jpg',
        'published_at'		=>	'2018-01-05 03:24:25',
        'body'				=>	'
        						Formation and early years (1981–1982)
									The classic Metallica logo, used on most of their releases. Designed by James Hetfield[8][9]

									Metallica was formed in Los Angeles, California, in late 1981 when Danish-born drummer Lars Ulrich placed an advertisement in a Los Angeles newspaper, The Recycler, which read, "Drummer looking for other metal musicians to jam with Tygers of Pan Tang, Diamond Head and Iron Maiden."[10] Guitarists James Hetfield and Hugh Tanner of Leather Charm answered the advertisement. Although he had not formed a band, Ulrich asked Metal Blade Records founder Brian Slagel if he could record a song for the labels upcoming compilation album, Metal Massacre. Slagel accepted, and Ulrich recruited Hetfield to sing and play rhythm guitar.[10] The band was officially formed on October 28, 1981, five months after Ulrich and Hetfield first met.

									Ulrich talked to his friend Ron Quintana, who was brainstorming names for a fanzine. Quintana had proposed the names MetalMania and Metallica. Ulrich named his band Metallica. A second advertisement was placed in The Recycler for a position as lead guitarist. Dave Mustaine answered; Ulrich and Hetfield recruited him after seeing his expensive guitar equipment. In early 1982, Metallica recorded its first original song, "Hit the Lights", for the Metal Massacre I compilation. Hetfield played bass on the song, and Lloyd Grant was credited with a guitar solo.[10] Metal Massacre I was released on June 14, 1982; early pressings listed the band incorrectly as "Mettallica".[13] Although angered by the error, Metallica created enough "buzz" with the song, and the band played its first live performance on March 14, 1982, at Radio City in Anaheim, California, with newly recruited bassist Ron McGovney.[14] The bands first taste of live success came early; they were chosen to open for British heavy metal band Saxon at one gig of their 1982 US tour. This was Metallicas second gig. Metallica recorded its first demo, Power Metal, whose name was inspired by Quintanas early business cards in early 1982.',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	2,
        'profile_id'		=>	2,
        'title'  			=>	'Concussion',
        'slug'  			=>	'concussion',
        'subtitle' 			=>	'And of course this is the subtitlet',
        'image'				=>	'1524650039-1521753687-concussion.jpg',
        'published_at'		=>	'2018-01-09 03:24:25',
        'body'				=>	'
								<h2>How We Can Help</h2>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.<span class="Apple-converted-space"> <br></span></p>

								<ul class="ait-sc-lists  style4 layout-half">
								<li>Nemo enim ipsam voluptatem quia</li>
								<li>Voluptas sit aspernatur aut<span class="Apple-converted-space"><br></span></li>
								<li>Facilis est et expedita distinctio</li>
								<li>Duis aute irure dolor in reprehenderit<span class="Apple-converted-space"> <br></span></li>
								<li>Perspiciatis unde omnis iste natus<span class="Apple-converted-space"> <br></span></li>
								<li>Tempora incidunt ut labore</li>
								<li>Assumenda est omnis<span class="Apple-converted-space"> <br></span></li>
								<li>Excepteur sint occaecat cupidatat</li>
								<li>Sequi nesciunt neque porro<span class="Apple-converted-space"> <br></span></li>
								<li>Maiores alias consequatur aut<span class="Apple-converted-space"> <br></span></li>
								</ul>',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	2,
        'profile_id'		=>	3,
        'title'  			=>	'Pirate club',
        'slug'  			=>	'pirate-club',
        'subtitle' 			=>	'And of course this is the subtitlet',
        'image'				=>	'1524587215-1521788317-pirates-of-the-caribbean',
        'published_at'		=>	'2018-02-21 03:24:25',
        'body'				=>	'
        						<h2>New York, New York</h2>
        						<ul>
								<li>May the joy this season brings never leave your heart and even more I pray that your smile masks no tears and your tears reflect your happiness. Merry Christmas.</li>
								<li>I can’t seem to find the perfect gift for you or the perfect words to convey my gratitude but more than anything I wish you a perfect Christmas.</li>
								<li>Past the lights and pretty gifts, past the trees and joyful charm, past the feasts and merry songs, you are the reason my Christmas is perfect. Merry Christmas my love and friend.</li>
								<li>In the manger He lay, the hope we cling to, the reason we celebrate and the secret to our Joy. Wishing you a Merry Christmas.</li>
								<li>I pray that this season reminds you that love is all we need and may it bring you peace and courage to begin a new chapter. Merry Christmas and a happy new year.</li>
								<li>May this season open your eyes to the goodness in the world that we sometimes forget and inspire you to love even more boldly than before. Wishing you a Merry Christmas and a happy new year.</li>
								<li>Christmas is the season of love, joy and laughter, all the things I pray will be with you forever. Merry Christmas.</li>
								</ul>',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	3,
        'profile_id'		=>	4,
        'title'  			=>	'Let me tell you something',
        'slug'  			=>	'let-me-tell-you-something',
        'subtitle' 			=>	'And of course this is the subtitlet',
        'image'				=>	'1524564807-1521790195-pixels.jpg',
        'published_at'		=>	'2018-04-02 03:24:25',
        'body'				=>	'
        						<h3>Everything important about Tours in one place</h3>
								<p>Further tailor-made features arose from the need to offer visitors the most detailed information on each of the available tours. That’s why Tours work as a Custom Post Type where you can add new and edit the existing Tours. It is a unique feature that can be found only in this template.</p>
								<p>1st part contains basic <strong>Tour Options</strong>. Apart from defining the header layout (either Image only or Image+small map or Fullsize map), you can enter here the locality and individual checkpoints on the route.</p>
								<p><span style="color: #ff0000;"><a href="https://www.ait-themes.club/wp-content/uploads/2017/10/tour-options.jpg" rel="prettyPhoto[contentGallery]"><img class="aligncenter size-large wp-image-68678 load-finished" src="https://www.ait-themes.club/wp-content/uploads/2017/10/tour-options-1024x512.jpg" alt="Tour Options" width="1024" height="512"></a></span></p>
								<p>2nd part consists of <strong>Additional information</strong>, where in addition to the tour dates (date range from – to), you can find several unique input fields for adding detailed tour description.</p>',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	3,
        'profile_id'		=>	4,
        'title'  			=>	'Auto clásico en La Habana',
        'slug'  			=>	'auto-clasico-en-la-habana',
        'subtitle' 			=>	'And of course this is the subtitlet',
        'image'				=>	'auto-clasico.jpg',
        'published_at'		=>	'2018-01-28 03:24:25',
        'body'				=>	'
        						<h4>Key checkpoints on the map</h4>
								<p>A specific feature, tailor made for our WordPress travel theme Expedition, is the <strong>possibility to add pins to the map</strong>. Pins show the interesting stops that are on the planned route.</p>
								<p><span style="color: #ff0000;"><a href="https://www.ait-themes.club/wp-content/uploads/2017/10/map_pin.jpg" rel="prettyPhoto[contentGallery]"><img class="aligncenter wp-image-68676 size-large load-finished" src="https://www.ait-themes.club/wp-content/uploads/2017/10/map_pin-1024x512.jpg" alt="Pins on the map" width="1024" height="512"></a></span></p>
								<p>Custom icons are available to be set for pins individually therefore you can choose the icon that best reflects the type of place. You can also add a name and a description of the place for each checkpoint.</p>
								<p><span style="color: #ff0000;"><a href="https://www.ait-themes.club/wp-content/uploads/2017/10/map_pin_description.jpg" rel="prettyPhoto[contentGallery]"><img class="aligncenter size-large wp-image-68677 load-finished" src="https://www.ait-themes.club/wp-content/uploads/2017/10/map_pin_description-1024x512.jpg" alt="Pins with description" width="1024" height="512"></a></span></p>
								<p>Manipulation with pins is also very practical. They can be moved around the map via drag &amp; drop functionality.</p>
								<p>The best advantage of this feature is that it can provide tourists with an immediate display of entire route with the various types of places where they will certainly make a stop during their trip. Whether it is a camping break, refreshment or a visit of a specific city, historical monument or museum.</p>
								<p><span style="color: #ff0000;"></span></p><div class="ait-sc-notification info">
									<a href="#" class="close" title="Close notification">close</a>
									<div class="notify-wrap">
		 						<p> Since it is easy to <strong>highlight all the planned stops</strong> in the sightseeing tours via pins, the Expedition Theme is often used as a travel guide template or&nbsp;tourists guide WordPress theme. Thanks to the checkpoints tourists can better decide which trip to choose. <span style="color: #ff0000;"></span></p>	</div>',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	2,
        'profile_id'		=>	2,
        'title'  			=>	'Berlin ist in Deutschland',
        'slug'  			=>	'berlin-ist-in-deutschland',
        'subtitle' 			=>	'And of course this is the subtitlet',
        'image'				=>	'berlin.jpg',
        'published_at'		=>	'2018-01-28 13:24:23',
        'body'				=>	'
        						<p>Expedition Theme shows what’s the most important. <strong>Points, routes and tours on the map</strong>. This theme is popular among guides regardless if it is the climbing guide, hiking tours or city sightseeing tours. What matters the most is the possibility to prepare any route by entering the start and destination address or GPS coordinates.</p>
								<blockquote><p>Thanks to GPS coordinates, the route can cross the cities, mountains or rivers.</p></blockquote>
								<h4>First contact with the map via Tour Slider</h4>
								<p>Tour Slider is a special element developed only for this travel theme that works as a Header on the web page. You can turn it on or off individually. It’s purpose is to attract the user’s attention. It’s a great demonstration of a particular tour right on the map. Whether it is the most favourite trip or the one closest to you.</p>
								<p><a href="https://www.ait-themes.club/doc/tours-slider/" target="_blank">Admin can set up the Tour Slider</a> according to his needs – there is a space for insertion of the presentation image, the start date of the tour, the short description and of course the map with the marked out route is displayed too.</p>
								<p>This is absolutely the best way how to attract tourists right on the homepage!</p>',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	2,
        'profile_id'		=>	3,
        'title'  			=>	'Merry Christmass',
        'slug'  			=>	'merry-christmass',
        'subtitle' 			=>	'This is with my best wishes',
        'image'				=>	'merry-christmas.jpg',
        'published_at'		=>	'2017-12-23 03:24:25',
        'body'				=>	'
								<h2>Top Merry Christmas Wishes Text</h2>
								<p>In this category, you can choose good Christmas wishes greetings text that you can send to your family or friends. Some of these Christmas wishes are inspirational, cute and religious. Select the ones perfect for your needs.</p>
								<ul>
								<li>If Santa truly granted wishes, I would make only one wish for Christmas that your Smile never fades. Merry Christmas.</li>
								<li>I pray this season brings you unending bliss, Peace that transcends your soul and laughter for all your days. Merry Christmas.</li>
								<li>I hoped for a miracle to make believe in love, then I met you. Now I pray you never leave, this is my Christmas prayer. Merry Christmas my darling.</li>
								<li>Just like the uniqueness of every snowflake remains a mystery, you are just as special and magical to me. Merry Christmas and a happy new year.</li>
								<li>Christmas won’t be special without you, we miss you and wish you a perfect Christmas and a happy New Year wherever you are.</li>
								<li>I have but one wish my dearest that you make this season perfect by sharing it with me!<br>
								Merry Christmas with all my heart.</li>
								<li>My darling, my love, you will always be my Christmas miracle. I love you more than words can express and I wish a merry Christmas.</li>
								<li>I pray this season brings to you the courage to brave new storms, Joy that numbs all pain and a love that envelops you forever. Best wishes and a very Merry Christmas to you.</li>
								</ul>',
    ]);
        App\Post::create ([
        'postcategory_id' 	=>	3,
        'profile_id'		=>	1,
        'title'  			=>	'Happy new Year',
        'slug'  			=>	'happy-new-year',
        'subtitle' 			=>	'And of course this is the subtitlet',
        'image'				=>	'merry-christmas-text-images.jpg',
        'published_at'		=>	'2017-12-30 03:24:25',
        'body'				=>	'
        						<p><h2>Top Merry Christmas Wishes Text</h2>
								<p>In this category, you can choose good Christmas wishes greetings text that you can send to your family or friends. Some of these Christmas wishes are inspirational, cute and religious. Select the ones perfect for your needs.</p>
								<ul>
								<li>If Santa truly granted wishes, I would make only one wish for Christmas that your Smile never fades. Merry Christmas.</li>
								<li>I pray this season brings you unending bliss, Peace that transcends your soul and laughter for all your days. Merry Christmas.</li>
								<li>I hoped for a miracle to make believe in love, then I met you. Now I pray you never leave, this is my Christmas prayer. Merry Christmas my darling.</li>',
    ]);
        
    }
}
