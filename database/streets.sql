-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 21. Apr 2018 um 23:50
-- Server-Version: 5.7.19
-- PHP-Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `streets`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `subtitle`, `about`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Architecture', 'architecture', 'From architect to software developer', 'Your bones don not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'parthenon.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(2, 'Sculpture', 'sculpture', 'The world in movement', 'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that is what you see at a toy store. And you must think you are in a toy store, because you are here shopping for an infant named Jeb.', 'sculpture.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(3, 'Music', 'music', 'The sound of the bests', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'music.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(4, 'Painting', 'painting', 'From architect to software developer', 'Your bones don not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'painting.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(5, 'Poetry', 'poetry', 'The world in movement', 'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that is what you see at a toy store. And you must think you are in a toy store, because you are here shopping for an infant named Jeb.', 'poetry.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(6, 'Dance', 'dance', 'The sound of the bests', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'dance.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(7, 'Performing', 'performing', 'The sound of the bests', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'performing.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `channels`
--

INSERT INTO `channels` (`id`, `subcategory_id`, `profile_id`, `title`, `slug`, `subtitle`, `about`, `image`, `likes`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'This is my place', 'this-is-my-place', 'And of course here I do what I want', 'Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I am in a transitional period so I do not wanna kill you, I wanna help you. But I ca not give you this case, it do not belong to me. Besides, I have already been through too much shit this morning over this case to hand it over to your dumb ass.\r\n', 'auto-clasico.jpg', 2356, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(2, 2, 2, 'The Super Kike in action', 'the-super-kike-in-action', 'Hier is all about swimmmingt', 'Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they are actually proud of that shit.', 'kite.jpg', 2336, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(3, 2, 3, 'My paintings World', 'my-paintings-world', 'This is the work from my entire life', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?\r\n', 'urban-dance.jpg', 276, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(4, 3, 4, 'This is another Channel from Pamela', 'this-is-another-channel-from-pamela', 'Pamela is a very good singer', 'Now that we know who you are, I know who I am. I am not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain is going to be? He is the exact opposite of the hero. And most times they are friends, like you and me! I should have known way back when... You know why, David? Because of the kids. They called me Mr Glass', 'bolliwood.jpg', 136, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(5, 4, 5, 'The Good Hamberger', 'the-good-hamberger', 'I like a lot the birds meet and the Hamberger', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'gorrion.jpg', 896, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(6, 4, 6, 'I have not idea', 'i-have-not-idea', 'And of course here I do what I want', 'Now that we know who you are, I know who I am. I am not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villains going to be? He is the exact opposite of the hero. And most times they are friends, like you and me! I should have known way back when... You know why, David? Because of the kids. They called me Mr Glass.\r\n', 'guitarra.jpg', 26, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(7, 4, 7, 'This is not ba channel', 'this-is-not-a-channel', 'And of course here I do what I want', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You donot get sick, I do. That iss also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'no-channel.jpg', 400, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `discussions`
--

CREATE TABLE `discussions` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `discussions`
--

INSERT INTO `discussions` (`id`, `profile_id`, `title`, `slug`, `body`, `image`, `likes`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'First discussion', 'first-discussion', '<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No?</p><p>Well, thats what you see at a toy store. And you must think youre in a toy store, because you are here shopping for an infant named Jeb.</p>', 'ballet-revolution.jpg', 69, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(2, 3, 'Berlin ist in Deutschland', 'berlin-ist-in-deutschland', '<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. </p><p>Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they are actually proud of that shit./p>', 'berlin.jpg', 356, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(3, 3, 'Samuel L Jackson', 'samuel-l-jackson', '<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.</p><p>Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.</p>', 'auto-clasico.jpg', 2356, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(4, 4, 'The antidüring', 'the-antiduering', '<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brothers keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.\r\n', 'bad-wimpfen.jpg', 2356, NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(191, '2014_10_12_000000_create_users_table', 1),
(192, '2014_10_12_100000_create_password_resets_table', 1),
(193, '2018_04_17_095234_create_profiles_table', 1),
(194, '2018_04_17_100844_create_statuses_table', 1),
(195, '2018_04_17_101242_create_roles_table', 1),
(196, '2018_04_17_122518_create_channels_table', 1),
(197, '2018_04_17_131033_create_subcategories_table', 1),
(198, '2018_04_17_131237_create_categories_table', 1),
(199, '2018_04_17_150649_create_discussions_table', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `title`, `role_id`, `slug`, `birthday`, `about`, `image`, `web`, `facebook`, `googleplus`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Yo soy Severus', 1, 'yo-soy-severus', '1966-05-19', 'Lucio Septimio Severo1​ (Leptis Magna, África, 11 de abril de 146-Eboracum, Britania, 4 de febrero de 211) fue emperador del Imperio romano de 193 a 211, con el nombre oficial de Lucius Septimius Severus Pius Pertinax Augustus. Fue el primer emperador romano de origen norteafricano en alcanzar el trono y el fundador de la dinastía de los Severos. Tras su muerte fue proclamado Divus por el Senado.\r\n\r\nDe ascendencia itálica (por su madre), y púnica-bereber (por su padre), Severo logró hacerse sitio en la sociedad romana e incluso tener una próspera carrera política en la que llegó a ser gobernador de Panonia. Ya que su padre no pertenecía al orden senatorial, ni realizó servicios al Estado, no debió ser ajeno a su promoción el hecho de que dos primos de su padre habían sido cónsules durante el reinado de Antonino Pío. Tras la muerte del emperador Pertinax, los pretorianos vendieron el trono del Imperio a Didio Juliano, un rico e influyente senador. Sin embargo, desde el inicio de su reinado Juliano tuvo que enfrentarse a una férrea oposición procedente del pueblo y del ejército.', 'rafael.png', 'http://severus.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-21 20:48:31', '2018-04-21 20:48:31', NULL),
(2, 2, 'Superkike', 2, 'superkike', '2007-08-23', 'La natación es el movimiento y el desplazamiento a través del agua mediante el uso de las extremidades corporales y por lo general sin utilizar ningún instrumento o apoyo para avanzar, generalmente la natación se hace para recreación, deporte, ejercicio o supervivencia. Los seres humanos pueden contener la respiración bajo el agua y realizar natación locomotora rudimentaria, esto se puede hacer semanas después del nacimiento como una respuesta evolutiva.', 'kike.jpg', 'http://superkike.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-21 20:48:31', '2018-04-21 20:48:31', NULL),
(3, 3, 'Amelies Paintings', 2, 'amelies-painting', '2005-09-29', 'Salvador Felipe Jacinto Dalí i Domènech,1​ marqués de Dalí de Púbol (Figueras, 11 de mayo de 1904-ibídem, 23 de enero de 1989), fue un pintor, escultor, grabador, escenógrafo y escritor español del siglo XX. Se le considera uno de los máximos representantes del surrealismo.', 'amelie.jpg', 'http://malanga.blue', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-21 20:48:31', '2018-04-21 20:48:31', NULL),
(4, 4, 'Pamelas Welt', 3, 'pamelas-welt', '1965-06-10', 'Pamela Denise Anderson (* 1. Juli 1967 in Ladysmith, British Columbia, Kanada) ist eine kanadisch-US-amerikanische Schauspielerin und ein Pin-up-Girl. In ihrer Rolle als Rettungsschwimmerin in der Erfolgsserie Baywatch wurde sie international zum Star. Sie gilt als das Sexsymbol der 1990er Jahre und war jahrelang die meistgeklickte Frau im Internet.', 'pamela.jpg', 'http://pamela-welt.de', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-21 20:48:31', '2018-04-21 20:48:31', NULL),
(5, 5, 'Los Aldeano', 3, 'los-aldeano', '1977-01-11', 'Los Aldeanos, aunque tiene cierto parecido con el nombre de Aldo, no es este realmente la inspiración del nombre del grupo. \"Somos personas humildes que vivimos en un país pequeño, en una ciudad pequeña, el barrio es pequeño; vivimos en una aldea\", de ahí es donde viene el nombre Los Aldeanos. Y entienden por aldea un lugar donde viven las personas y estas cooperan entre todas y todas tienen el mismo objetivo y aunque son caracteres diferentes y formas de hacer distinta, todo el mundo sabe que hay que halar en la misma dirección.', 'aldeano.jpg', 'http://el-aldeano.cu', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-21 20:48:31', '2018-04-21 20:48:31', NULL),
(6, 6, 'Die Ostalgie', 4, 'die-ostalgie', '1982-11-25', 'Para tú para tú bananaaaa potatoooo bappleees aaaaaah pepete hana dul sae poulet tikka masala ti aamoo! Uuuhhh aaaaaah gelatooo uuuhhh jiji hana dul sae daa aaaaaah hahaha. Ti aamoo! baboiii baboiii poopayee. Po kass potatoooo bee do bee do bee do hahaha hahaha poopayee daa pepete. Bee do bee do bee do me want bananaaa! Uuuhhh baboiii underweaaar me want bananaaa!', 'ostalgie.jpg', 'http://ostalgie.de', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-21 20:48:31', '2018-04-21 20:48:31', NULL),
(7, 7, 'Die Gesunde Way of Dying', 4, 'die-gesunde-way-of-dying', '1978-03-05', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'dying.jpg', 'http://death-or-alive.com', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-21 20:48:31', '2018-04-21 20:48:31', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'super_admin', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(2, 'Admin', 'admin', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(3, 'Author', 'author', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(4, 'Subscriber', 'subscriber', '2018-04-21 20:48:31', '2018-04-21 20:48:31');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `statusable_id` int(11) NOT NULL,
  `statusable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `statuses`
--

INSERT INTO `statuses` (`id`, `statusable_id`, `statusable_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'categories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(2, 2, 'categories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(3, 3, 'categories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(4, 4, 'categories', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(5, 5, 'categories', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(6, 6, 'categories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(7, 7, 'categories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(8, 1, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(9, 2, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(10, 3, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(11, 4, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(12, 5, 'subcategories', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(13, 6, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(14, 7, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(15, 8, 'subcategories', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(16, 9, 'subcategories', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(17, 10, 'subcategories', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(18, 11, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(19, 12, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(20, 13, 'subcategories', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(21, 14, 'subcategories', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(22, 15, 'subcategories', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(23, 1, 'channels', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(24, 2, 'channels', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(25, 3, 'channels', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(26, 4, 'channels', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(27, 5, 'channels', 'banned', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(28, 6, 'channels', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(29, 7, 'channels', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(30, 1, 'profiles', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(31, 2, 'profiles', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(32, 3, 'profiles', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(33, 4, 'profiles', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(34, 5, 'profiles', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(35, 6, 'profiles', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(36, 7, 'profiles', 'banned', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(37, 1, 'discussions', 'active', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(38, 2, 'discussions', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(39, 3, 'discussions', 'inactive', '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(40, 4, 'discussions', 'banned', '2018-04-21 20:48:31', '2018-04-21 20:48:31');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `title`, `slug`, `subtitle`, `about`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'The world of PHP', 'the-world-of-php', 'Hier is all about programming', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'santorini.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(2, 2, 'Popular dance', 'popular-dance', 'And of course here I do what I want', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'flamenco.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(3, 2, 'Ballet', 'Ballet', 'And of course here I do what I want', 'My money is in that office, right? If she start giving me some bullshit about it aint there, and we got to go someplace else and get it, I am gonna shoot you in the head then and there. Then I am gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I am talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', 'ballet.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(4, 3, 'Popular music', 'popular-music', 'Beat, Hip, Hop', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'salsa.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(5, 3, 'Classical Music', 'classical-music', 'Opera and Co.', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'opera-singer.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(6, 6, 'Samba festival', 'samba-festival', 'Hier is all about programming', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'samba.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(7, 5, 'Popular poetry', 'popular-poetry', 'And of course here I do what I want', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'poesia.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(8, 6, 'Afrocuban dance', 'afrocuban-dance', 'And of course here I do what I want', 'My money is in that office, right? If she start giving me some bullshit about it aint there, and we got to go someplace else and get it, I am gonna shoot you in the head then and there. Then I am gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I am talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', 'afrocuban-dance.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(9, 7, 'Teatro bufo', 'teatro-bufo', 'La mezcla de culturas', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'teatro.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(10, 2, 'Middle Age Sculpture ', 'middle-age-sculpture', 'Schwetzingen pakast and the garden', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'plastica.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(11, 1, 'The arab architecture', 'the-arab-architecture', 'Hier is all about arab architecture', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'arab.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(12, 6, 'Indian dance', 'indian-dance', 'And of course here I do what I want', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'bolliwood.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(13, 1, 'St Bastien Church', 'A huge church somewhere in Germany', 'And of course here I do what I want', 'My money is in that office, right? If she start giving me some bullshit about it aint there, and we got to go someplace else and get it, I am gonna shoot you in the head then and there. Then I am gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I am talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', 'stbastien.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(14, 2, 'Flight of the Bumblebee', 'flight-of-the-bumblebee', 'Beat, Hip, Hop', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'abejorro.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(15, 2, 'Arena', 'classical-arena', 'Opera and Co.', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'arena.jpg', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafael Muñoz', 'rafaelmunoznl@yahoo.com', '$2y$10$I92VhPK3AP3KkbUYGV5TjuyUDD3atHNqt0SKA1iInDysxmiIplEyu', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(2, 'Enrique (Kike) Muñoz Botschka', 'kike901@gmail.com', '$2y$10$bd8x/bpuwpNK65wvQ4UcueOnTid1kIisBPr98xMwMXVweVn2GnkBa', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(3, 'Amelie Muñoz Botschka', 'amelie@yahoo.com', '$2y$10$7RHUl5Heqd7Gps7Am1slAuIlGn2Mo6mPEbKN976dVVoNQZKBR9z4e', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(4, 'Pamela Rodriguez', 'prdguez@yahoo.com', '$2y$10$DomDSugNREPop.8ibWw1MeMnhUDUH1raZn0wtD9OlusdEj76TnYRe', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(5, 'Arnaldo Schmidth', 'a.schmidth@smidth-and-sons.com', '$2y$10$6XGM6YVLTl.TmZenl.JGw.xiII8e/PaKu1vk1OsdRMGlcsjX6PRP2', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(6, 'Miguel Strogov', 'mstrogov@stroganov.ru', '$2y$10$7ybOLhpX4Ci9X4v7rE8XYeonPjGkRIvC5ehcOC3klB4mvKEwkoMQK', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31'),
(7, 'Tomas Mann', 't.lee@lee.cn', '$2y$10$O88bb5/WJOdXhUzvhvFCwej0aFBYD7uuyKXJ/oABeDdfycEwDsoz.', NULL, '2018-04-21 20:48:31', '2018-04-21 20:48:31');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD UNIQUE KEY `categories_image_unique` (`image`);

--
-- Indizes für die Tabelle `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_title_unique` (`title`),
  ADD UNIQUE KEY `channels_slug_unique` (`slug`),
  ADD UNIQUE KEY `channels_image_unique` (`image`),
  ADD KEY `channels_subcategory_id_index` (`subcategory_id`),
  ADD KEY `channels_profile_id_index` (`profile_id`);

--
-- Indizes für die Tabelle `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discussions_title_unique` (`title`),
  ADD UNIQUE KEY `discussions_slug_unique` (`slug`),
  ADD UNIQUE KEY `discussions_image_unique` (`image`),
  ADD KEY `discussions_profile_id_index` (`profile_id`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indizes für die Tabelle `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`),
  ADD KEY `profiles_role_id_index` (`role_id`);

--
-- Indizes für die Tabelle `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indizes für die Tabelle `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_title_unique` (`title`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD UNIQUE KEY `subcategories_image_unique` (`image`),
  ADD KEY `subcategories_category_id_index` (`category_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT für Tabelle `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT für Tabelle `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
