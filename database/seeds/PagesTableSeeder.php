<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Page::create ([
        'title'  			=>	'Impressum',
        'slug'  			=>	'impresumm',
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
        App\Page::create ([
        'title'  			=>	'AGB',
        'slug'  			=>	'hamburg',
        'subtitle' 			=>	'And of course this is hamburg',
        'image'				=>	'hamburg.jpg',
        'published_at'		=>	'2018-03-06 03:24:25',
        'body'				=>	'
        						The city is a forum for and has specialists in world economics and international law with such consular and diplomatic missions as the International Tribunal for the Law of the Sea, the EU-LAC Foundation, and the UNESCO Institute for Lifelong Learning. In recent years, the city has played host to multipartite international political conferences and summits such as Europe and China and the G20. Former German Chancellor Helmut Schmidt, who governed Germany for eight years, came from Hamburg.

								The city is a major international and domestic tourist destination. It ranked 18th in the world for livability in 2016.[6] The Speicherstadt and Kontorhausviertel were declared World Heritage sites by UNESCO in 2015.[7]',
    ]);
        App\Page::create ([
        'title'  			=>	'Contact us',
        'slug'  			=>	'contact-us',
        'subtitle' 			=>	'And of course this is gorrion',
        'image'				=>	'gorrion.jpg',
        'published_at'		=>	'2017-12-06 03:24:25',
        'body'				=>	'
        						Mustaine, who went on to found Megadeth, has expressed his dislike for Hammett in interviews, saying Hammett "stole" his job.[20] Mustaine was "pissed off" because he believes Hammett became popular by playing guitar leads that Mustaine himself had written.[21] In a 1985 interview with Metal Forces, Mustaine said, "its real funny how Kirk Hammett ripped off every lead break Id played on that No Life til Leather tape and got voted No. 1 guitarist in your magazine.[22] On Megadeths debut album Killing Is My Business... and Business Is Good! (1985), Mustaine included the song Mechanix, which Metallica had previously reworked and retitled The Four Horsemen on Kill Em All. Mustaine said he did this to straighten Metallica up because Metallica referred to Mustaine as a drunk and said he could not play guitar.[22] Metallicas first live performance with Hammett was on April 16, 1983, at a nightclub in Dover, New Jersey called The Showplace;[16] the support act was Anthraxs original line-up, which included Dan Lilker and Neil Turbin.[23] This was the first time the two bands performed live together.[16]',
    ]);
        App\Page::create ([
        'title'  			=>	'Datenschutzerklärung',
        'slug'  			=>	'datenschutzerklaerung',
        'subtitle' 			=>	'And of course this is the subtitlet',
        'image'				=>	'metallica.jpg',
        'published_at'		=>	'2018-01-05 03:24:25',
        'body'				=>	'
        						Formation and early years (1981–1982)
									The classic Metallica logo, used on most of their releases. Designed by James Hetfield[8][9]

									Metallica was formed in Los Angeles, California, in late 1981 when Danish-born drummer Lars Ulrich placed an advertisement in a Los Angeles newspaper, The Recycler, which read, "Drummer looking for other metal musicians to jam with Tygers of Pan Tang, Diamond Head and Iron Maiden."[10] Guitarists James Hetfield and Hugh Tanner of Leather Charm answered the advertisement. Although he had not formed a band, Ulrich asked Metal Blade Records founder Brian Slagel if he could record a song for the labels upcoming compilation album, Metal Massacre. Slagel accepted, and Ulrich recruited Hetfield to sing and play rhythm guitar.[10] The band was officially formed on October 28, 1981, five months after Ulrich and Hetfield first met.

									Ulrich talked to his friend Ron Quintana, who was brainstorming names for a fanzine. Quintana had proposed the names MetalMania and Metallica. Ulrich named his band Metallica. A second advertisement was placed in The Recycler for a position as lead guitarist. Dave Mustaine answered; Ulrich and Hetfield recruited him after seeing his expensive guitar equipment. In early 1982, Metallica recorded its first original song, "Hit the Lights", for the Metal Massacre I compilation. Hetfield played bass on the song, and Lloyd Grant was credited with a guitar solo.[10] Metal Massacre I was released on June 14, 1982; early pressings listed the band incorrectly as "Mettallica".[13] Although angered by the error, Metallica created enough "buzz" with the song, and the band played its first live performance on March 14, 1982, at Radio City in Anaheim, California, with newly recruited bassist Ron McGovney.[14] The bands first taste of live success came early; they were chosen to open for British heavy metal band Saxon at one gig of their 1982 US tour. This was Metallicas second gig. Metallica recorded its first demo, Power Metal, whose name was inspired by Quintanas early business cards in early 1982.',
    ]);
    }
}

