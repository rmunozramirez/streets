-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-04-2018 a las 18:58:04
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `streets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
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
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `subtitle`, `about`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Architecture', 'architecture', 'From architect to software developer', 'Your bones don not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'parthenon.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 'Sculpture', 'sculpture', 'The world in movement', 'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that is what you see at a toy store. And you must think you are in a toy store, because you are here shopping for an infant named Jeb.', 'sculpture.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 'Music', 'music', 'The sound of the bests', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'music.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(4, 'Painting', 'painting', 'From architect to software developer', 'Your bones don not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'painting.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(5, 'Poetry', 'poetry', 'The world in movement', 'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that is what you see at a toy store. And you must think you are in a toy store, because you are here shopping for an infant named Jeb.', 'poetry.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(6, 'Dance', 'dance', 'The sound of the bests', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'dance.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(7, 'Performing', 'performing', 'The sound of the bests', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'performing.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channels`
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `channels`
--

INSERT INTO `channels` (`id`, `subcategory_id`, `profile_id`, `title`, `slug`, `subtitle`, `about`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'This is my place', 'this-is-my-place', 'And of course here I do what I want', 'Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I am in a transitional period so I do not wanna kill you, I wanna help you. But I ca not give you this case, it do not belong to me. Besides, I have already been through too much shit this morning over this case to hand it over to your dumb ass.', 'auto-clasico.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 2, 2, 'The Super Kike in action', 'the-super-kike-in-action', 'Hier is all about swimmmingt', 'Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they are actually proud of that shit.', 'kite.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 2, 3, 'My paintings World', 'my-paintings-world', 'This is the work from my entire life', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'urban-dance.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(4, 3, 4, 'This is another Channel from Pamela', 'this-is-another-channel-from-pamela', 'Pamela is a very good singer', 'Now that we know who you are, I know who I am. I am not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain is going to be? He is the exact opposite of the hero. And most times they are friends, like you and me! I should have known way back when... You know why, David? Because of the kids. They called me Mr Glass', 'bolliwood.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(5, 4, 5, 'The Good Hamberger', 'the-good-hamberger', 'I like a lot the birds meet and the Hamberger', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'gorrion.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(6, 4, 6, 'I have not idea', 'i-have-not-idea', 'And of course here I do what I want', 'Now that we know who you are, I know who I am. I am not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villains going to be? He is the exact opposite of the hero. And most times they are friends, like you and me! I should have known way back when... You know why, David? Because of the kids. They called me Mr Glass.', 'guitarra.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(7, 4, 7, 'This is not ba channel', 'this-is-not-a-channel', 'And of course here I do what I want', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You donot get sick, I do. That iss also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'no-channel.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discussions`
--

CREATE TABLE `discussions` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `discussions`
--

INSERT INTO `discussions` (`id`, `profile_id`, `title`, `slug`, `body`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'First discussion', 'first-discussion', '<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No?</p><p>Well, thats what you see at a toy store. And you must think youre in a toy store, because you are here shopping for an infant named Jeb.</p>', 'ballet-revolution.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 3, 'Berlin ist in Deutschland', 'berlin-ist-in-deutschland', '<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. </p><p>Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they are actually proud of that shit./p>', 'berlin.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 3, 'Samuel L Jackson', 'samuel-l-jackson', '<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.</p><p>Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.</p>', 'auto-clasico.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(4, 4, 'The antidüring', 'the-antiduering', '<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brothers keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', 'bad-wimpfen.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(5, 3, 'De hoy para mañana', 'de-hoy-para-manana', '<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.</p><p>Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.</p>', 'concierto.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(6, 4, 'Aqui cualquiera tiene', 'aqui-cualquiera-tiene', '<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brothers keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', 'concert.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `likeable_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `likeable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(574, '2014_10_12_000000_create_users_table', 1),
(575, '2014_10_12_100000_create_password_resets_table', 1),
(576, '2018_04_17_095234_create_profiles_table', 1),
(577, '2018_04_17_100844_create_statuses_table', 1),
(578, '2018_04_17_101242_create_roles_table', 1),
(579, '2018_04_17_122518_create_channels_table', 1),
(580, '2018_04_17_131033_create_subcategories_table', 1),
(581, '2018_04_17_131237_create_categories_table', 1),
(582, '2018_04_17_150649_create_discussions_table', 1),
(583, '2018_04_22_143544_create_replies_table', 1),
(584, '2018_04_22_144220_create_likes_table', 1),
(585, '2018_04_25_135530_create_posts_table', 1),
(586, '2018_04_25_145809_create_pages_table', 1),
(587, '2018_04_26_210257_create_postcategories_table', 1),
(588, '2018_04_27_122239_create_tags_table', 1),
(589, '2018_04_27_122325_create_taggables_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `subtitle`, `body`, `image`, `deleted_at`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Impressum', 'impresumm', 'And of course this is the dying', '\n        						<p>When we were working on <a href=\"https://www.ait-themes.club/wordpress-themes/expedition/\" target=\"_blank\">Expedition Theme</a> development, we made a research of the current offer of templates specialized on travelling, travelers and travel guides. The research showed that the WordPress travel themes available on the market are all very similar and most of them work as a travel blog only. Travelers can use such a template for recording their travel experiences in the form of blog posts.</p>\n								<ul>\n								<li>Travel guide template</li>\n								<li>Mountain guide theme</li>\n								<li>Website for road trip and driving tours planning</li>\n								<li>City tours theme</li>\n								<li>Travel agency theme</li>\n								<li>Theme for travelers / travel blog</li>\n								</ul>\n								<p>This template has a wide range of use in travelling and tourist guidance. It can be used for a presentation of a tourist guide, travel or entertainment agency. But it can be used also as a presentation of traveler. It is suitable for use wherever it is practical to show a map with different places linked by continuous route.</p>\n								<h3>Oriented on Maps</h3>\n								<p>What’s the best and fastest way to attract tourist and reader’s attention? By previewing what is waiting for them directly on the map. We’ve incorporated maps and advanced functionalities for their use to the travel WordPress theme. Maps are definitely the key to tourist interest.</p>', 'dying.jpg', NULL, '2018-04-26 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 'AGB', 'hamburg', 'And of course this is hamburg', '\n        						The city is a forum for and has specialists in world economics and international law with such consular and diplomatic missions as the International Tribunal for the Law of the Sea, the EU-LAC Foundation, and the UNESCO Institute for Lifelong Learning. In recent years, the city has played host to multipartite international political conferences and summits such as Europe and China and the G20. Former German Chancellor Helmut Schmidt, who governed Germany for eight years, came from Hamburg.\n\n								The city is a major international and domestic tourist destination. It ranked 18th in the world for livability in 2016.[6] The Speicherstadt and Kontorhausviertel were declared World Heritage sites by UNESCO in 2015.[7]', 'hamburg.jpg', NULL, '2018-03-06 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 'Contact us', 'contact-us', 'And of course this is gorrion', '\n        						Mustaine, who went on to found Megadeth, has expressed his dislike for Hammett in interviews, saying Hammett \"stole\" his job.[20] Mustaine was \"pissed off\" because he believes Hammett became popular by playing guitar leads that Mustaine himself had written.[21] In a 1985 interview with Metal Forces, Mustaine said, \"its real funny how Kirk Hammett ripped off every lead break Id played on that No Life til Leather tape and got voted No. 1 guitarist in your magazine.[22] On Megadeths debut album Killing Is My Business... and Business Is Good! (1985), Mustaine included the song Mechanix, which Metallica had previously reworked and retitled The Four Horsemen on Kill Em All. Mustaine said he did this to straighten Metallica up because Metallica referred to Mustaine as a drunk and said he could not play guitar.[22] Metallicas first live performance with Hammett was on April 16, 1983, at a nightclub in Dover, New Jersey called The Showplace;[16] the support act was Anthraxs original line-up, which included Dan Lilker and Neil Turbin.[23] This was the first time the two bands performed live together.[16]', 'gorrion.jpg', NULL, '2017-12-06 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(4, 'Datenschutzerklärung', 'datenschutzerklaerung', 'And of course this is the subtitlet', '\n        						Formation and early years (1981–1982)\n									The classic Metallica logo, used on most of their releases. Designed by James Hetfield[8][9]\n\n									Metallica was formed in Los Angeles, California, in late 1981 when Danish-born drummer Lars Ulrich placed an advertisement in a Los Angeles newspaper, The Recycler, which read, \"Drummer looking for other metal musicians to jam with Tygers of Pan Tang, Diamond Head and Iron Maiden.\"[10] Guitarists James Hetfield and Hugh Tanner of Leather Charm answered the advertisement. Although he had not formed a band, Ulrich asked Metal Blade Records founder Brian Slagel if he could record a song for the labels upcoming compilation album, Metal Massacre. Slagel accepted, and Ulrich recruited Hetfield to sing and play rhythm guitar.[10] The band was officially formed on October 28, 1981, five months after Ulrich and Hetfield first met.\n\n									Ulrich talked to his friend Ron Quintana, who was brainstorming names for a fanzine. Quintana had proposed the names MetalMania and Metallica. Ulrich named his band Metallica. A second advertisement was placed in The Recycler for a position as lead guitarist. Dave Mustaine answered; Ulrich and Hetfield recruited him after seeing his expensive guitar equipment. In early 1982, Metallica recorded its first original song, \"Hit the Lights\", for the Metal Massacre I compilation. Hetfield played bass on the song, and Lloyd Grant was credited with a guitar solo.[10] Metal Massacre I was released on June 14, 1982; early pressings listed the band incorrectly as \"Mettallica\".[13] Although angered by the error, Metallica created enough \"buzz\" with the song, and the band played its first live performance on March 14, 1982, at Radio City in Anaheim, California, with newly recruited bassist Ron McGovney.[14] The bands first taste of live success came early; they were chosen to open for British heavy metal band Saxon at one gig of their 1982 US tour. This was Metallicas second gig. Metallica recorded its first demo, Power Metal, whose name was inspired by Quintanas early business cards in early 1982.', 'metallica.jpg', NULL, '2018-01-05 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postcategories`
--

CREATE TABLE `postcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postcategories`
--

INSERT INTO `postcategories` (`id`, `title`, `slug`, `about`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Architecture', 'architecture', 'Your bones don not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'parthenon.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 'Sculpture', 'sculpture', 'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that is what you see at a toy store. And you must think you are in a toy store, because you are here shopping for an infant named Jeb.', 'sculpture.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 'Music', 'music', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'music.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `postcategory_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `profile_id`, `postcategory_id`, `title`, `slug`, `subtitle`, `body`, `image`, `deleted_at`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'This is the dyingt post', 'this-is-the-dying-post', 'And of course this is the dying', '\n        						<p>When we were working on <a href=\"https://www.ait-themes.club/wordpress-themes/expedition/\" target=\"_blank\">Expedition Theme</a> development, we made a research of the current offer of templates specialized on travelling, travelers and travel guides. The research showed that the WordPress travel themes available on the market are all very similar and most of them work as a travel blog only. Travelers can use such a template for recording their travel experiences in the form of blog posts.</p>\n								<ul>\n								<li>Travel guide template</li>\n								<li>Mountain guide theme</li>\n								<li>Website for road trip and driving tours planning</li>\n								<li>City tours theme</li>\n								<li>Travel agency theme</li>\n								<li>Theme for travelers / travel blog</li>\n								</ul>\n								<p>This template has a wide range of use in travelling and tourist guidance. It can be used for a presentation of a tourist guide, travel or entertainment agency. But it can be used also as a presentation of traveler. It is suitable for use wherever it is practical to show a map with different places linked by continuous route.</p>\n								<h3>Oriented on Maps</h3>\n								<p>What’s the best and fastest way to attract tourist and reader’s attention? By previewing what is waiting for them directly on the map. We’ve incorporated maps and advanced functionalities for their use to the travel WordPress theme. Maps are definitely the key to tourist interest.</p>', 'dying.jpg', NULL, '2018-04-26 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 2, 1, 'Hamburg', 'hamburg', 'And of course this is hamburg', '\n        						The city is a forum for and has specialists in world economics and international law with such consular and diplomatic missions as the International Tribunal for the Law of the Sea, the EU-LAC Foundation, and the UNESCO Institute for Lifelong Learning. In recent years, the city has played host to multipartite international political conferences and summits such as Europe and China and the G20. Former German Chancellor Helmut Schmidt, who governed Germany for eight years, came from Hamburg.\n\n								The city is a major international and domestic tourist destination. It ranked 18th in the world for livability in 2016.[6] The Speicherstadt and Kontorhausviertel were declared World Heritage sites by UNESCO in 2015.[7]', 'hamburg.jpg', NULL, '2018-03-06 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 3, 1, 'gorrion', 'gorrion', 'And of course this is gorrion', '\n        						Mustaine, who went on to found Megadeth, has expressed his dislike for Hammett in interviews, saying Hammett \"stole\" his job.[20] Mustaine was \"pissed off\" because he believes Hammett became popular by playing guitar leads that Mustaine himself had written.[21] In a 1985 interview with Metal Forces, Mustaine said, \"its real funny how Kirk Hammett ripped off every lead break Id played on that No Life til Leather tape and got voted No. 1 guitarist in your magazine.[22] On Megadeths debut album Killing Is My Business... and Business Is Good! (1985), Mustaine included the song Mechanix, which Metallica had previously reworked and retitled The Four Horsemen on Kill Em All. Mustaine said he did this to straighten Metallica up because Metallica referred to Mustaine as a drunk and said he could not play guitar.[22] Metallicas first live performance with Hammett was on April 16, 1983, at a nightclub in Dover, New Jersey called The Showplace;[16] the support act was Anthraxs original line-up, which included Dan Lilker and Neil Turbin.[23] This was the first time the two bands performed live together.[16]', 'gorrion.jpg', NULL, '2017-12-06 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(4, 1, 2, 'Metallica', 'metallica', 'And of course this is the subtitlet', '\n        						Formation and early years (1981–1982)\n									The classic Metallica logo, used on most of their releases. Designed by James Hetfield[8][9]\n\n									Metallica was formed in Los Angeles, California, in late 1981 when Danish-born drummer Lars Ulrich placed an advertisement in a Los Angeles newspaper, The Recycler, which read, \"Drummer looking for other metal musicians to jam with Tygers of Pan Tang, Diamond Head and Iron Maiden.\"[10] Guitarists James Hetfield and Hugh Tanner of Leather Charm answered the advertisement. Although he had not formed a band, Ulrich asked Metal Blade Records founder Brian Slagel if he could record a song for the labels upcoming compilation album, Metal Massacre. Slagel accepted, and Ulrich recruited Hetfield to sing and play rhythm guitar.[10] The band was officially formed on October 28, 1981, five months after Ulrich and Hetfield first met.\n\n									Ulrich talked to his friend Ron Quintana, who was brainstorming names for a fanzine. Quintana had proposed the names MetalMania and Metallica. Ulrich named his band Metallica. A second advertisement was placed in The Recycler for a position as lead guitarist. Dave Mustaine answered; Ulrich and Hetfield recruited him after seeing his expensive guitar equipment. In early 1982, Metallica recorded its first original song, \"Hit the Lights\", for the Metal Massacre I compilation. Hetfield played bass on the song, and Lloyd Grant was credited with a guitar solo.[10] Metal Massacre I was released on June 14, 1982; early pressings listed the band incorrectly as \"Mettallica\".[13] Although angered by the error, Metallica created enough \"buzz\" with the song, and the band played its first live performance on March 14, 1982, at Radio City in Anaheim, California, with newly recruited bassist Ron McGovney.[14] The bands first taste of live success came early; they were chosen to open for British heavy metal band Saxon at one gig of their 1982 US tour. This was Metallicas second gig. Metallica recorded its first demo, Power Metal, whose name was inspired by Quintanas early business cards in early 1982.', 'metallica.jpg', NULL, '2018-01-05 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(5, 2, 2, 'Concussion', 'concussion', 'And of course this is the subtitlet', '\n								<h2>How We Can Help</h2>\n								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.<span class=\"Apple-converted-space\"> <br></span></p>\n\n								<ul class=\"ait-sc-lists  style4 layout-half\">\n								<li>Nemo enim ipsam voluptatem quia</li>\n								<li>Voluptas sit aspernatur aut<span class=\"Apple-converted-space\"><br></span></li>\n								<li>Facilis est et expedita distinctio</li>\n								<li>Duis aute irure dolor in reprehenderit<span class=\"Apple-converted-space\"> <br></span></li>\n								<li>Perspiciatis unde omnis iste natus<span class=\"Apple-converted-space\"> <br></span></li>\n								<li>Tempora incidunt ut labore</li>\n								<li>Assumenda est omnis<span class=\"Apple-converted-space\"> <br></span></li>\n								<li>Excepteur sint occaecat cupidatat</li>\n								<li>Sequi nesciunt neque porro<span class=\"Apple-converted-space\"> <br></span></li>\n								<li>Maiores alias consequatur aut<span class=\"Apple-converted-space\"> <br></span></li>\n								</ul>', '1524650039-1521753687-concussion.jpg', NULL, '2018-01-09 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(6, 3, 2, 'Pirate club', 'pirate-club', 'And of course this is the subtitlet', '\n        						<h2>New York, New York</h2>\n        						<ul>\n								<li>May the joy this season brings never leave your heart and even more I pray that your smile masks no tears and your tears reflect your happiness. Merry Christmas.</li>\n								<li>I can’t seem to find the perfect gift for you or the perfect words to convey my gratitude but more than anything I wish you a perfect Christmas.</li>\n								<li>Past the lights and pretty gifts, past the trees and joyful charm, past the feasts and merry songs, you are the reason my Christmas is perfect. Merry Christmas my love and friend.</li>\n								<li>In the manger He lay, the hope we cling to, the reason we celebrate and the secret to our Joy. Wishing you a Merry Christmas.</li>\n								<li>I pray that this season reminds you that love is all we need and may it bring you peace and courage to begin a new chapter. Merry Christmas and a happy new year.</li>\n								<li>May this season open your eyes to the goodness in the world that we sometimes forget and inspire you to love even more boldly than before. Wishing you a Merry Christmas and a happy new year.</li>\n								<li>Christmas is the season of love, joy and laughter, all the things I pray will be with you forever. Merry Christmas.</li>\n								</ul>', '1524587215-1521788317-pirates-of-the-caribbean', NULL, '2018-02-21 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(7, 4, 3, 'Let me tell you something', 'let-me-tell-you-something', 'And of course this is the subtitlet', '\n        						<h3>Everything important about Tours in one place</h3>\n								<p>Further tailor-made features arose from the need to offer visitors the most detailed information on each of the available tours. That’s why Tours work as a Custom Post Type where you can add new and edit the existing Tours. It is a unique feature that can be found only in this template.</p>\n								<p>1st part contains basic <strong>Tour Options</strong>. Apart from defining the header layout (either Image only or Image+small map or Fullsize map), you can enter here the locality and individual checkpoints on the route.</p>\n								<p><span style=\"color: #ff0000;\"><a href=\"https://www.ait-themes.club/wp-content/uploads/2017/10/tour-options.jpg\" rel=\"prettyPhoto[contentGallery]\"><img class=\"aligncenter size-large wp-image-68678 load-finished\" src=\"https://www.ait-themes.club/wp-content/uploads/2017/10/tour-options-1024x512.jpg\" alt=\"Tour Options\" width=\"1024\" height=\"512\"></a></span></p>\n								<p>2nd part consists of <strong>Additional information</strong>, where in addition to the tour dates (date range from – to), you can find several unique input fields for adding detailed tour description.</p>', '1524564807-1521790195-pixels.jpg', NULL, '2018-04-02 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(8, 4, 3, 'Auto clásico en La Habana', 'auto-clasico-en-la-habana', 'And of course this is the subtitlet', '\n        						<h4>Key checkpoints on the map</h4>\n								<p>A specific feature, tailor made for our WordPress travel theme Expedition, is the <strong>possibility to add pins to the map</strong>. Pins show the interesting stops that are on the planned route.</p>\n								<p><span style=\"color: #ff0000;\"><a href=\"https://www.ait-themes.club/wp-content/uploads/2017/10/map_pin.jpg\" rel=\"prettyPhoto[contentGallery]\"><img class=\"aligncenter wp-image-68676 size-large load-finished\" src=\"https://www.ait-themes.club/wp-content/uploads/2017/10/map_pin-1024x512.jpg\" alt=\"Pins on the map\" width=\"1024\" height=\"512\"></a></span></p>\n								<p>Custom icons are available to be set for pins individually therefore you can choose the icon that best reflects the type of place. You can also add a name and a description of the place for each checkpoint.</p>\n								<p><span style=\"color: #ff0000;\"><a href=\"https://www.ait-themes.club/wp-content/uploads/2017/10/map_pin_description.jpg\" rel=\"prettyPhoto[contentGallery]\"><img class=\"aligncenter size-large wp-image-68677 load-finished\" src=\"https://www.ait-themes.club/wp-content/uploads/2017/10/map_pin_description-1024x512.jpg\" alt=\"Pins with description\" width=\"1024\" height=\"512\"></a></span></p>\n								<p>Manipulation with pins is also very practical. They can be moved around the map via drag &amp; drop functionality.</p>\n								<p>The best advantage of this feature is that it can provide tourists with an immediate display of entire route with the various types of places where they will certainly make a stop during their trip. Whether it is a camping break, refreshment or a visit of a specific city, historical monument or museum.</p>\n								<p><span style=\"color: #ff0000;\"></span></p><div class=\"ait-sc-notification info\">\n									<a href=\"#\" class=\"close\" title=\"Close notification\">close</a>\n									<div class=\"notify-wrap\">\n		 						<p> Since it is easy to <strong>highlight all the planned stops</strong> in the sightseeing tours via pins, the Expedition Theme is often used as a travel guide template or&nbsp;tourists guide WordPress theme. Thanks to the checkpoints tourists can better decide which trip to choose. <span style=\"color: #ff0000;\"></span></p>	</div>', 'auto-clasico.jpg', NULL, '2018-01-28 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(9, 2, 2, 'Berlin ist in Deutschland', 'berlin-ist-in-deutschland', 'And of course this is the subtitlet', '\n        						<p>Expedition Theme shows what’s the most important. <strong>Points, routes and tours on the map</strong>. This theme is popular among guides regardless if it is the climbing guide, hiking tours or city sightseeing tours. What matters the most is the possibility to prepare any route by entering the start and destination address or GPS coordinates.</p>\n								<blockquote><p>Thanks to GPS coordinates, the route can cross the cities, mountains or rivers.</p></blockquote>\n								<h4>First contact with the map via Tour Slider</h4>\n								<p>Tour Slider is a special element developed only for this travel theme that works as a Header on the web page. You can turn it on or off individually. It’s purpose is to attract the user’s attention. It’s a great demonstration of a particular tour right on the map. Whether it is the most favourite trip or the one closest to you.</p>\n								<p><a href=\"https://www.ait-themes.club/doc/tours-slider/\" target=\"_blank\">Admin can set up the Tour Slider</a> according to his needs – there is a space for insertion of the presentation image, the start date of the tour, the short description and of course the map with the marked out route is displayed too.</p>\n								<p>This is absolutely the best way how to attract tourists right on the homepage!</p>', 'berlin.jpg', NULL, '2018-01-28 13:24:23', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(10, 3, 2, 'Merry Christmass', 'merry-christmass', 'This is with my best wishes', '\n								<h2>Top Merry Christmas Wishes Text</h2>\n								<p>In this category, you can choose good Christmas wishes greetings text that you can send to your family or friends. Some of these Christmas wishes are inspirational, cute and religious. Select the ones perfect for your needs.</p>\n								<ul>\n								<li>If Santa truly granted wishes, I would make only one wish for Christmas that your Smile never fades. Merry Christmas.</li>\n								<li>I pray this season brings you unending bliss, Peace that transcends your soul and laughter for all your days. Merry Christmas.</li>\n								<li>I hoped for a miracle to make believe in love, then I met you. Now I pray you never leave, this is my Christmas prayer. Merry Christmas my darling.</li>\n								<li>Just like the uniqueness of every snowflake remains a mystery, you are just as special and magical to me. Merry Christmas and a happy new year.</li>\n								<li>Christmas won’t be special without you, we miss you and wish you a perfect Christmas and a happy New Year wherever you are.</li>\n								<li>I have but one wish my dearest that you make this season perfect by sharing it with me!<br>\n								Merry Christmas with all my heart.</li>\n								<li>My darling, my love, you will always be my Christmas miracle. I love you more than words can express and I wish a merry Christmas.</li>\n								<li>I pray this season brings to you the courage to brave new storms, Joy that numbs all pain and a love that envelops you forever. Best wishes and a very Merry Christmas to you.</li>\n								</ul>', 'merry-christmas.jpg', NULL, '2017-12-23 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(11, 1, 3, 'Happy new Year', 'happy-new-year', 'And of course this is the subtitlet', '\n        						<p><h2>Top Merry Christmas Wishes Text</h2>\n								<p>In this category, you can choose good Christmas wishes greetings text that you can send to your family or friends. Some of these Christmas wishes are inspirational, cute and religious. Select the ones perfect for your needs.</p>\n								<ul>\n								<li>If Santa truly granted wishes, I would make only one wish for Christmas that your Smile never fades. Merry Christmas.</li>\n								<li>I pray this season brings you unending bliss, Peace that transcends your soul and laughter for all your days. Merry Christmas.</li>\n								<li>I hoped for a miracle to make believe in love, then I met you. Now I pray you never leave, this is my Christmas prayer. Merry Christmas my darling.</li>', 'merry-christmas-text-images.jpg', NULL, '2017-12-30 03:24:25', '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
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
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `title`, `role_id`, `slug`, `birthday`, `about`, `image`, `web`, `facebook`, `googleplus`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Yo soy Severus', 1, 'yo-soy-severus', '1966-05-19', 'Lucio Septimio Severo1​ (Leptis Magna, África, 11 de abril de 146-Eboracum, Britania, 4 de febrero de 211) fue emperador del Imperio romano de 193 a 211, con el nombre oficial de Lucius Septimius Severus Pius Pertinax Augustus. Fue el primer emperador romano de origen norteafricano en alcanzar el trono y el fundador de la dinastía de los Severos. Tras su muerte fue proclamado Divus por el Senado.\n\nDe ascendencia itálica (por su madre), y púnica-bereber (por su padre), Severo logró hacerse sitio en la sociedad romana e incluso tener una próspera carrera política en la que llegó a ser gobernador de Panonia. Ya que su padre no pertenecía al orden senatorial, ni realizó servicios al Estado, no debió ser ajeno a su promoción el hecho de que dos primos de su padre habían sido cónsules durante el reinado de Antonino Pío. Tras la muerte del emperador Pertinax, los pretorianos vendieron el trono del Imperio a Didio Juliano, un rico e influyente senador. Sin embargo, desde el inicio de su reinado Juliano tuvo que enfrentarse a una férrea oposición procedente del pueblo y del ejército.', 'rafael.png', 'http://severus.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-27 13:05:29', '2018-04-27 13:05:29', NULL),
(2, 2, 'Superkike', 2, 'superkike', '2007-08-23', 'La natación es el movimiento y el desplazamiento a través del agua mediante el uso de las extremidades corporales y por lo general sin utilizar ningún instrumento o apoyo para avanzar, generalmente la natación se hace para recreación, deporte, ejercicio o supervivencia. Los seres humanos pueden contener la respiración bajo el agua y realizar natación locomotora rudimentaria, esto se puede hacer semanas después del nacimiento como una respuesta evolutiva.', 'kike.jpg', 'http://superkike.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-27 13:05:29', '2018-04-27 13:05:29', NULL),
(3, 3, 'Amelies Paintings', 2, 'amelies-painting', '2005-09-29', 'Salvador Felipe Jacinto Dalí i Domènech,1​ marqués de Dalí de Púbol (Figueras, 11 de mayo de 1904-ibídem, 23 de enero de 1989), fue un pintor, escultor, grabador, escenógrafo y escritor español del siglo XX. Se le considera uno de los máximos representantes del surrealismo.', 'amelie.jpg', 'http://malanga.blue', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-27 13:05:29', '2018-04-27 13:05:29', NULL),
(4, 4, 'Pamelas Welt', 3, 'pamelas-welt', '1965-06-10', 'Pamela Denise Anderson (* 1. Juli 1967 in Ladysmith, British Columbia, Kanada) ist eine kanadisch-US-amerikanische Schauspielerin und ein Pin-up-Girl. In ihrer Rolle als Rettungsschwimmerin in der Erfolgsserie Baywatch wurde sie international zum Star. Sie gilt als das Sexsymbol der 1990er Jahre und war jahrelang die meistgeklickte Frau im Internet.', 'pamela.jpg', 'http://pamela-welt.de', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-27 13:05:29', '2018-04-27 13:05:29', NULL),
(5, 5, 'Los Aldeano', 3, 'los-aldeano', '1977-01-11', 'Los Aldeanos, aunque tiene cierto parecido con el nombre de Aldo, no es este realmente la inspiración del nombre del grupo. \"Somos personas humildes que vivimos en un país pequeño, en una ciudad pequeña, el barrio es pequeño; vivimos en una aldea\", de ahí es donde viene el nombre Los Aldeanos. Y entienden por aldea un lugar donde viven las personas y estas cooperan entre todas y todas tienen el mismo objetivo y aunque son caracteres diferentes y formas de hacer distinta, todo el mundo sabe que hay que halar en la misma dirección.', 'aldeano.jpg', 'http://el-aldeano.cu', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-27 13:05:29', '2018-04-27 13:05:29', NULL),
(6, 6, 'Die Ostalgie', 4, 'die-ostalgie', '1982-11-25', 'Para tú para tú bananaaaa potatoooo bappleees aaaaaah pepete hana dul sae poulet tikka masala ti aamoo! Uuuhhh aaaaaah gelatooo uuuhhh jiji hana dul sae daa aaaaaah hahaha. Ti aamoo! baboiii baboiii poopayee. Po kass potatoooo bee do bee do bee do hahaha hahaha poopayee daa pepete. Bee do bee do bee do me want bananaaa! Uuuhhh baboiii underweaaar me want bananaaa!', 'ostalgie.jpg', 'http://ostalgie.de', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-27 13:05:29', '2018-04-27 13:05:29', NULL),
(7, 7, 'Die Gesunde Way of Dying', 4, 'die-gesunde-way-of-dying', '1978-03-05', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'dying.jpg', 'http://death-or-alive.com', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-27 13:05:29', '2018-04-27 13:05:29', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'super_admin', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(2, 'Admin', 'admin', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(3, 'Author', 'author', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(4, 'Subscriber', 'subscriber', '2018-04-27 13:05:29', '2018-04-27 13:05:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statuses`
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
-- Volcado de datos para la tabla `statuses`
--

INSERT INTO `statuses` (`id`, `statusable_id`, `statusable_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'categories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(2, 2, 'categories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(3, 3, 'categories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(4, 4, 'categories', 'inactive', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(5, 5, 'categories', 'inactive', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(6, 6, 'categories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(7, 7, 'categories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(8, 1, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(9, 2, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(10, 3, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(11, 4, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(12, 5, 'subcategories', 'inactive', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(13, 6, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(14, 7, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(15, 8, 'subcategories', 'inactive', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(16, 9, 'subcategories', 'inactive', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(17, 10, 'subcategories', 'inactive', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(18, 11, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(19, 12, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(20, 13, 'subcategories', 'inactive', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(21, 14, 'subcategories', 'active', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(22, 15, 'subcategories', 'inactive', '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(23, 1, 'channels', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(24, 2, 'channels', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(25, 3, 'channels', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(26, 4, 'channels', 'inactive', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(27, 5, 'channels', 'banned', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(28, 6, 'channels', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(29, 7, 'channels', 'inactive', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(30, 1, 'profiles', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(31, 2, 'profiles', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(32, 3, 'profiles', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(33, 4, 'profiles', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(34, 5, 'profiles', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(35, 6, 'profiles', 'inactive', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(36, 7, 'profiles', 'banned', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(37, 1, 'discussions', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(38, 2, 'discussions', 'inactive', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(39, 3, 'discussions', 'inactive', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(40, 4, 'discussions', 'banned', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(41, 5, 'discussions', 'banned', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(42, 6, 'discussions', 'banned', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(43, 1, 'pages', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(44, 2, 'pages', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(45, 3, 'pages', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(46, 4, 'pages', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(47, 1, 'postcategories', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(48, 2, 'postcategories', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(49, 3, 'postcategories', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(50, 1, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(51, 2, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(52, 3, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(53, 4, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(54, 5, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(55, 6, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(56, 7, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(57, 8, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(58, 9, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(59, 10, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(60, 11, 'posts', 'active', '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
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
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `title`, `slug`, `subtitle`, `about`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'The world of PHP', 'the-world-of-php', 'Hier is all about programming', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'santorini.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 2, 'Popular dance', 'popular-dance', 'And of course here I do what I want', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'flamenco.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 2, 'Ballet', 'Ballet', 'And of course here I do what I want', 'My money is in that office, right? If she start giving me some bullshit about it aint there, and we got to go someplace else and get it, I am gonna shoot you in the head then and there. Then I am gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I am talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', 'ballet.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(4, 3, 'Popular music', 'popular-music', 'Beat, Hip, Hop', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'salsa.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(5, 3, 'Classical Music', 'classical-music', 'Opera and Co.', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'opera-singer.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(6, 6, 'Samba festival', 'samba-festival', 'Hier is all about programming', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'samba.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(7, 5, 'Popular poetry', 'popular-poetry', 'And of course here I do what I want', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'poesia.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(8, 6, 'Afrocuban dance', 'afrocuban-dance', 'And of course here I do what I want', 'My money is in that office, right? If she start giving me some bullshit about it aint there, and we got to go someplace else and get it, I am gonna shoot you in the head then and there. Then I am gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I am talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', 'afrocuban-dance.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(9, 7, 'Teatro bufo', 'teatro-bufo', 'La mezcla de culturas', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'teatro.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(10, 2, 'Middle Age Sculpture ', 'middle-age-sculpture', 'Schwetzingen pakast and the garden', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'plastica.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(11, 1, 'The arab architecture', 'the-arab-architecture', 'Hier is all about arab architecture', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'arab.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(12, 6, 'Indian dance', 'indian-dance', 'And of course here I do what I want', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'bolliwood.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(13, 1, 'St Bastien Church', 'A huge church somewhere in Germany', 'And of course here I do what I want', 'My money is in that office, right? If she start giving me some bullshit about it aint there, and we got to go someplace else and get it, I am gonna shoot you in the head then and there. Then I am gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I am talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', 'stbastien.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(14, 2, 'Flight of the Bumblebee', 'flight-of-the-bumblebee', 'Beat, Hip, Hop', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'abejorro.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(15, 2, 'Arena', 'classical-arena', 'Opera and Co.', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'arena.jpg', NULL, '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taggables`
--

CREATE TABLE `taggables` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(11) NOT NULL,
  `taggable_id` int(11) NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `taggables`
--

INSERT INTO `taggables` (`id`, `tag_id`, `taggable_id`, `taggable_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'pages', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 12, 1, 'pages', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 1, 2, 'pages', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(4, 12, 2, 'pages', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(5, 1, 3, 'pages', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(6, 12, 3, 'pages', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(7, 1, 4, 'pages', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(8, 12, 4, 'pages', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(9, 1, 1, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(10, 2, 2, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(11, 3, 3, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(12, 4, 4, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(13, 5, 5, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(14, 6, 6, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(15, 7, 7, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(16, 8, 8, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(17, 9, 9, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(18, 10, 10, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(19, 11, 11, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(20, 12, 1, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(21, 9, 7, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(22, 10, 7, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(23, 11, 3, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(24, 12, 4, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(25, 1, 5, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(26, 4, 7, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(27, 6, 6, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(28, 3, 7, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(29, 9, 1, 'posts', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(30, 1, 1, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(31, 2, 2, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(32, 3, 3, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(33, 4, 4, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(34, 5, 6, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(35, 6, 1, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(36, 7, 2, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(37, 8, 3, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(38, 9, 4, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(39, 10, 5, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(40, 11, 6, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(41, 12, 1, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(42, 9, 7, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(43, 10, 7, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(44, 11, 7, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(45, 12, 7, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(46, 1, 1, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(47, 4, 7, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(48, 6, 3, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(49, 3, 2, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(50, 9, 1, 'profiles', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(51, 1, 1, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(52, 2, 2, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(53, 3, 3, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(54, 4, 4, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(55, 5, 6, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(56, 6, 1, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(57, 7, 2, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(58, 8, 3, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(59, 9, 4, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(60, 10, 5, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(61, 11, 6, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(62, 12, 1, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(63, 9, 7, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(64, 10, 7, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(65, 11, 7, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(66, 12, 7, 'channels', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(67, 1, 1, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(68, 2, 2, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(69, 3, 3, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(70, 4, 4, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(71, 5, 6, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(72, 6, 1, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(73, 7, 2, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(74, 8, 3, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(75, 9, 4, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(76, 10, 5, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(77, 11, 6, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(78, 12, 1, 'discussions', '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Software', 'software', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(2, 'Culture', 'culture', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(3, 'Music', 'music', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(4, 'Holidays', 'holidays', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(5, 'Cinema', 'cinema', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(6, 'National Geographic', 'national-geographic', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(7, 'Interesting', 'Interesting', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(8, 'People of the World', 'people-of-the-world', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(9, 'Gamers', 'gamers', '2018-04-27 13:05:30', '2018-04-27 13:05:30'),
(10, 'Society', 'society', '2018-04-27 13:05:30', '2018-04-27 13:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafael Muñoz', 'rafaelmunoznl@yahoo.com', '$2y$10$/2.qmRw2qHYb898RqGdwR.8UJszHiBOXEgLpgPsvICeIkowTl78kC', NULL, '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(2, 'Enrique (Kike) Muñoz Botschka', 'kike901@gmail.com', '$2y$10$CjuY2Y.UGPyephzfeMZF.eB7XvEYyMQJ.no5odySABHK5/QvWvnwS', NULL, '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(3, 'Amelie Muñoz Botschka', 'amelie@yahoo.com', '$2y$10$goh1.mOJanPxDVSdthOJMeaamxxlBm.T6f7MJyZ7FIKoPHxrSvls2', NULL, '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(4, 'Pamela Rodriguez', 'prdguez@yahoo.com', '$2y$10$Y4O8Su.xlwQrV.UXCajZ1uFAoUCyD.gaKMGIHslWofCZQ0ybd4idu', NULL, '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(5, 'Arnaldo Schmidth', 'a.schmidth@smidth-and-sons.com', '$2y$10$gDc0W1SVgekVxLdIIofhDOSjE7CLED6ryEUgmvDoZWp6XoLjt6sJC', NULL, '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(6, 'Miguel Strogov', 'mstrogov@stroganov.ru', '$2y$10$w5AcJpmllIHvCDTd2AGxReRV6Zw3We6XGH0R8n038d85cPe9KA1Ba', NULL, '2018-04-27 13:05:29', '2018-04-27 13:05:29'),
(7, 'Tomas Mann', 't.lee@lee.cn', '$2y$10$8mnqY2dTFpWIFM9oseGoAedNvG9dxDFg.vhM/jgix3JXSVixWIpG.', NULL, '2018-04-27 13:05:29', '2018-04-27 13:05:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD UNIQUE KEY `categories_image_unique` (`image`);

--
-- Indices de la tabla `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_title_unique` (`title`),
  ADD UNIQUE KEY `channels_slug_unique` (`slug`),
  ADD UNIQUE KEY `channels_image_unique` (`image`),
  ADD KEY `channels_subcategory_id_index` (`subcategory_id`),
  ADD KEY `channels_profile_id_index` (`profile_id`);

--
-- Indices de la tabla `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discussions_title_unique` (`title`),
  ADD UNIQUE KEY `discussions_slug_unique` (`slug`),
  ADD UNIQUE KEY `discussions_image_unique` (`image`),
  ADD KEY `discussions_profile_id_index` (`profile_id`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_title_unique` (`title`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `postcategories`
--
ALTER TABLE `postcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `postcategories_title_unique` (`title`),
  ADD UNIQUE KEY `postcategories_slug_unique` (`slug`),
  ADD UNIQUE KEY `postcategories_image_unique` (`image`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_profile_id_index` (`profile_id`),
  ADD KEY `posts_postcategory_id_index` (`postcategory_id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`),
  ADD KEY `profiles_role_id_index` (`role_id`);

--
-- Indices de la tabla `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_profile_id_index` (`profile_id`),
  ADD KEY `replies_discussion_id_index` (`discussion_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_title_unique` (`title`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD UNIQUE KEY `subcategories_image_unique` (`image`),
  ADD KEY `subcategories_category_id_index` (`category_id`);

--
-- Indices de la tabla `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=590;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `postcategories`
--
ALTER TABLE `postcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
