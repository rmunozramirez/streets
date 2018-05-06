<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//user 1
        App\User::create ([
            'name'      =>  'Rafael Muñoz',
            'slug'      =>  'rafael-munoz',
            'email'     =>  'rafaelmunoznl@yahoo.com',
            'password'  =>  bcrypt('Password'),
        ]);

        App\Profile::create ([
            'user_id'   =>  1,
            'title'	=>  'Yo soy Severus',
            'role_id'   =>  1,
            'slug'		=> 'yo-soy-severus',
            'birthday' 	=>  '1966-05-19',
            'web'    	=>   'http://severus.es',
            'facebook' 	=>   'https://facebook.com',
            'googleplus'	=>   'https://googleplus.com',
            'twitter' 	=>   'https://twitter.com',
            'linkedin' 	=>   'https://linkedin.com',
            'youtube'  	=>   'https://youtube.com',            
            'about'   	=>  'Lucio Septimio Severo1​ (Leptis Magna, África, 11 de abril de 146-Eboracum, Britania, 4 de febrero de 211) fue emperador del Imperio romano de 193 a 211, con el nombre oficial de Lucius Septimius Severus Pius Pertinax Augustus. Fue el primer emperador romano de origen norteafricano en alcanzar el trono y el fundador de la dinastía de los Severos. Tras su muerte fue proclamado Divus por el Senado.

De ascendencia itálica (por su madre), y púnica-bereber (por su padre), Severo logró hacerse sitio en la sociedad romana e incluso tener una próspera carrera política en la que llegó a ser gobernador de Panonia. Ya que su padre no pertenecía al orden senatorial, ni realizó servicios al Estado, no debió ser ajeno a su promoción el hecho de que dos primos de su padre habían sido cónsules durante el reinado de Antonino Pío. Tras la muerte del emperador Pertinax, los pretorianos vendieron el trono del Imperio a Didio Juliano, un rico e influyente senador. Sin embargo, desde el inicio de su reinado Juliano tuvo que enfrentarse a una férrea oposición procedente del pueblo y del ejército.',            
        ]);

         App\Image::create ([
            'imageable_id'      =>  '1',
            'imageable_type'    =>  'profiles',
            'profile_id'        =>  '1',            
            'slug'              =>  'rafael.jpg',
            'name'              =>  'rafael',
        ]);
       

// //user 2
//         App\User::create ([
//             'name'      =>  'Enrique (Kike) Muñoz Botschka',
//             'slug'      =>  'enrique-kike-munoz-botschka',
//             'email'     =>  'kike901@gmail.com',
//             'password'  =>  bcrypt('Password'),
//         ]);

//         App\Profile::create ([
//             'user_id'   =>  2,
//             'title'	=>  'Superkike',
//             'role_id'   =>  2,
//             'slug'		=> 'superkike',
//             'birthday' 	=>  '2007-08-23',
//             'image'    	=>  'kike.jpg',
//             'web'    	=>  'http://superkike.es',
//             'facebook' 	=>   'https://facebook.com',
//             'googleplus'	=>   'https://googleplus.com',
//             'twitter' 	=>   'https://twitter.com',
//             'linkedin' 	=>   'https://linkedin.com',
//             'youtube'  	=>   'https://youtube.com',    
//             'about'   =>  'La natación es el movimiento y el desplazamiento a través del agua mediante el uso de las extremidades corporales y por lo general sin utilizar ningún instrumento o apoyo para avanzar, generalmente la natación se hace para recreación, deporte, ejercicio o supervivencia. Los seres humanos pueden contener la respiración bajo el agua y realizar natación locomotora rudimentaria, esto se puede hacer semanas después del nacimiento como una respuesta evolutiva.',
//         ]);

// //user 3
//         App\User::create ([
//             'name'      =>  'Amelie Muñoz Botschka',
//             'slug'      =>  'amelie-munoz-botschka',
//             'email'     =>  'amelie@yahoo.com',
//             'password'  =>  bcrypt('Password'),
//         ]);

//         App\Profile::create ([
//             'user_id'   =>   3,
//             'title'	=>  'Amelies Paintings',
//             'role_id'   =>  2,
//             'slug'		=> 'amelies-painting',
//             'birthday' 	=>  '2005-09-29',
//             'image'    	=>  'amelie.jpg',
//             'web'    	=>  'http://malanga.blue',
//             'facebook' 	=>   'https://facebook.com',
//             'googleplus'	=>   'https://googleplus.com',
//             'twitter' 	=>   'https://twitter.com',
//             'linkedin' 	=>   'https://linkedin.com',
//             'youtube'  	=>   'https://youtube.com',
//             'about'   =>  'Salvador Felipe Jacinto Dalí i Domènech,1​ marqués de Dalí de Púbol (Figueras, 11 de mayo de 1904-ibídem, 23 de enero de 1989), fue un pintor, escultor, grabador, escenógrafo y escritor español del siglo XX. Se le considera uno de los máximos representantes del surrealismo.',
//         ]);

// //user 4
//         App\User::create ([
//             'name'      =>  'Pamela Rodriguez',
//             'slug'      =>  'pamela-rodriguez',
//             'email'     =>  'prdguez@yahoo.com',
//             'password'  =>  bcrypt('Password'),

//         ]);

//         App\Profile::create ([
//             'user_id'   =>   4,
//             'title'	=>  'Pamelas Welt',
//             'role_id'   =>  3,
//             'slug'		=> 'pamelas-welt',
//             'image'    	=>  'pamela.jpg',
//             'web'    	=>  'http://pamela-welt.de',
//             'facebook' 	=>   'https://facebook.com',
//             'googleplus'	=>   'https://googleplus.com',
//             'twitter' 	=>   'https://twitter.com',
//             'linkedin' 	=>   'https://linkedin.com',
//             'youtube'  	=>   'https://youtube.com',
//             'birthday'    =>   '1965-06-10',
//             'about'   =>  'Pamela Denise Anderson (* 1. Juli 1967 in Ladysmith, British Columbia, Kanada) ist eine kanadisch-US-amerikanische Schauspielerin und ein Pin-up-Girl. In ihrer Rolle als Rettungsschwimmerin in der Erfolgsserie Baywatch wurde sie international zum Star. Sie gilt als das Sexsymbol der 1990er Jahre und war jahrelang die meistgeklickte Frau im Internet.',
//         ]);

// //user 5 
//         App\User::create ([
//             'name'      =>  'Arnaldo Schmidth',
//             'slug'      =>  'arnaldo-schmidth',
//             'email'     =>  'a.schmidth@smidth-and-sons.com',
//             'password'  =>  bcrypt('Password'),

//         ]);

//         App\Profile::create ([
//             'user_id'   =>   5,
//             'title'	=>  'Los Aldeano',
//             'role_id'   =>  3,
//             'slug'		=> 'los-aldeano',
//             'image'    	=>  'aldeano.jpg',
//             'web'    	=>  'http://el-aldeano.cu',
//             'facebook' 	=>   'https://facebook.com',
//             'googleplus'	=>   'https://googleplus.com',
//             'twitter' 	=>   'https://twitter.com',
//             'linkedin' 	=>   'https://linkedin.com',
//             'youtube'  	=>   'https://youtube.com',
//             'birthday'    =>   '1977-01-11',
//             'about'   =>  'Los Aldeanos, aunque tiene cierto parecido con el nombre de Aldo, no es este realmente la inspiración del nombre del grupo. "Somos personas humildes que vivimos en un país pequeño, en una ciudad pequeña, el barrio es pequeño; vivimos en una aldea", de ahí es donde viene el nombre Los Aldeanos. Y entienden por aldea un lugar donde viven las personas y estas cooperan entre todas y todas tienen el mismo objetivo y aunque son caracteres diferentes y formas de hacer distinta, todo el mundo sabe que hay que halar en la misma dirección.',
//         ]);

// //user 6   
//         App\User::create ([
//             'name'      =>  'Miguel Strogov',
//             'slug'      =>  'miguel-strogov',
//             'email'     =>  'mstrogov@stroganov.ru',
//             'password'  =>  bcrypt('Password'),

//         ]);

//         App\Profile::create ([
//             'user_id'   =>   6,
//             'title'	=>  'Die Ostalgie',
//             'role_id'   =>  4,
//             'slug'		=> 'die-ostalgie',
//             'image'    	=>  'ostalgie.jpg',
//             'web'    	=>  'http://ostalgie.de',
//             'facebook' 	=>   'https://facebook.com',
//             'googleplus'	=>   'https://googleplus.com',
//             'twitter' 	=>   'https://twitter.com',
//             'linkedin' 	=>   'https://linkedin.com',
//             'youtube'  	=>   'https://youtube.com',
//             'birthday'    =>   '1982-11-25',
//             'about'   =>  'Para tú para tú bananaaaa potatoooo bappleees aaaaaah pepete hana dul sae poulet tikka masala ti aamoo! Uuuhhh aaaaaah gelatooo uuuhhh jiji hana dul sae daa aaaaaah hahaha. Ti aamoo! baboiii baboiii poopayee. Po kass potatoooo bee do bee do bee do hahaha hahaha poopayee daa pepete. Bee do bee do bee do me want bananaaa! Uuuhhh baboiii underweaaar me want bananaaa!',
//         ]);

// //user 7
//         App\User::create ([
//             'name'      =>  'Tomas Mann',
//             'slug'      =>  'tomas-mann',
//             'email'     =>  't.lee@lee.cn',
//             'password'  =>  bcrypt('Password'),
//         ]);

//         App\Profile::create ([
//         	'user_id'      => 	7,
//             'title'	=>  'Die Gesunde Way of Dying',
//             'role_id'   =>  4,
//             'slug'		=> 'die-gesunde-way-of-dying',
//             'image'    	=>  'dying.jpg',
//             'web'    	=>  'http://death-or-alive.com',
//             'facebook' 	=>   'https://facebook.com',
//             'googleplus'	=>   'https://googleplus.com',
//             'twitter' 	=>   'https://twitter.com',
//             'linkedin' 	=>   'https://linkedin.com',
//             'youtube'  	=>   'https://youtube.com',
//             'birthday'      =>   '1978-03-05',
//             'about'   =>  'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.',
//         ]);
        
    }
}
