-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2018 at 11:44 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streets`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
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
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `subtitle`, `about`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Architecture', 'architecture', 'From architect to software developer', 'Your bones don not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'parthenon.jpg', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(2, 'Dance', 'dance', 'The world in movement', 'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that is what you see at a toy store. And you must think you are in a toy store, because you are here shopping for an infant named Jeb.', 'dance.jpg', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(3, 'Music', 'music', 'The sound of the bests', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'music.jpg', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `subcategory_id`, `profile_id`, `title`, `slug`, `subtitle`, `image`, `likes`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'This is my place', 'this-is-my-place', 'And of course here I do what I want', 'auto-clasico.jpg', 2356, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(2, 2, 2, 'The Super Kike in action', 'the-super-kike-in-action', 'Hier is all about swimmmingt', 'kite.jpg', 2336, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(3, 2, 3, 'My paintings World', 'my-paintings-world', 'This is the work from my entire life', 'urban-dance.jpg', 276, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(4, 3, 4, 'This is another Channel from Pamela', 'this-is-another-channel-from-pamela', 'Pamela is a very good singer', 'bolliwood.jpg', 136, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(5, 4, 5, 'The Good Hamberger', 'the-good-hamberger', 'I like a lot the birds meet and the Hamberger', 'gorrion.jpg', 896, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(6, 4, 6, 'I have not idea', 'i-have-not-idea', 'And of course here I do what I want', 'guitarra.jpg', 26, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(7, 4, 7, 'This is not ba channel', 'this-is-not-a-channel', 'And of course here I do what I want', 'no-channel.jpg', 400, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
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
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `profile_id`, `title`, `slug`, `body`, `image`, `likes`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'First discussion', 'first-discussion', '<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No?</p><p>Well, thats what you see at a toy store. And you must think youre in a toy store, because you are here shopping for an infant named Jeb.</p>', 'ballet-revolution.jpg', 69, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(2, 3, 'Berlin ist in Deutschland', 'berlin-ist-in-deutschland', '<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. </p><p>Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they are actually proud of that shit./p>', 'berlin.jpg', 356, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(3, 3, 'Samuel L Jackson', 'samuel-l-jackson', '<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.</p><p>Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.</p>', 'auto-clasico.jpg', 2356, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(4, 4, 'The antidüring', 'the-antiduering', '<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brothers keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.\n', 'bad-wimpfen.jpg', 2356, NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(146, '2014_10_12_000000_create_users_table', 1),
(147, '2014_10_12_100000_create_password_resets_table', 1),
(148, '2018_04_17_095234_create_profiles_table', 1),
(149, '2018_04_17_100844_create_statuses_table', 1),
(150, '2018_04_17_101242_create_roles_table', 1),
(151, '2018_04_17_122518_create_channels_table', 1),
(152, '2018_04_17_131033_create_subcategories_table', 1),
(153, '2018_04_17_131237_create_categories_table', 1),
(154, '2018_04_17_150649_create_discussions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
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
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `title`, `role_id`, `slug`, `birthday`, `about`, `image`, `web`, `facebook`, `googleplus`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Yo soy Severus', 1, 'yo-soy-severus', '1966-05-19', 'Lucio Septimio Severo1​ (Leptis Magna, África, 11 de abril de 146-Eboracum, Britania, 4 de febrero de 211) fue emperador del Imperio romano de 193 a 211, con el nombre oficial de Lucius Septimius Severus Pius Pertinax Augustus. Fue el primer emperador romano de origen norteafricano en alcanzar el trono y el fundador de la dinastía de los Severos. Tras su muerte fue proclamado Divus por el Senado.\n\nDe ascendencia itálica (por su madre), y púnica-bereber (por su padre), Severo logró hacerse sitio en la sociedad romana e incluso tener una próspera carrera política en la que llegó a ser gobernador de Panonia. Ya que su padre no pertenecía al orden senatorial, ni realizó servicios al Estado, no debió ser ajeno a su promoción el hecho de que dos primos de su padre habían sido cónsules durante el reinado de Antonino Pío. Tras la muerte del emperador Pertinax, los pretorianos vendieron el trono del Imperio a Didio Juliano, un rico e influyente senador. Sin embargo, desde el inicio de su reinado Juliano tuvo que enfrentarse a una férrea oposición procedente del pueblo y del ejército.', 'rafael.png', 'http://severus.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-20 09:43:52', '2018-04-20 09:43:52', NULL),
(2, 2, 'Superkike', 2, 'superkike', '2007-08-23', 'La natación es el movimiento y el desplazamiento a través del agua mediante el uso de las extremidades corporales y por lo general sin utilizar ningún instrumento o apoyo para avanzar, generalmente la natación se hace para recreación, deporte, ejercicio o supervivencia. Los seres humanos pueden contener la respiración bajo el agua y realizar natación locomotora rudimentaria, esto se puede hacer semanas después del nacimiento como una respuesta evolutiva.', 'kike.jpg', 'http://superkike.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-20 09:43:52', '2018-04-20 09:43:52', NULL),
(3, 3, 'Amelies Paintings', 2, 'amelies-painting', '2005-09-29', 'Salvador Felipe Jacinto Dalí i Domènech,1​ marqués de Dalí de Púbol (Figueras, 11 de mayo de 1904-ibídem, 23 de enero de 1989), fue un pintor, escultor, grabador, escenógrafo y escritor español del siglo XX. Se le considera uno de los máximos representantes del surrealismo.', 'amelie.jpg', 'http://malanga.blue', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-20 09:43:52', '2018-04-20 09:43:52', NULL),
(4, 4, 'Pamelas Welt', 3, 'pamelas-welt', '1965-06-10', 'Pamela Denise Anderson (* 1. Juli 1967 in Ladysmith, British Columbia, Kanada) ist eine kanadisch-US-amerikanische Schauspielerin und ein Pin-up-Girl. In ihrer Rolle als Rettungsschwimmerin in der Erfolgsserie Baywatch wurde sie international zum Star. Sie gilt als das Sexsymbol der 1990er Jahre und war jahrelang die meistgeklickte Frau im Internet.', 'pamela.jpg', 'http://pamela-welt.de', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-20 09:43:53', '2018-04-20 09:43:53', NULL),
(5, 5, 'Los Aldeano', 3, 'los-aldeano', '1977-01-11', 'Los Aldeanos, aunque tiene cierto parecido con el nombre de Aldo, no es este realmente la inspiración del nombre del grupo. \"Somos personas humildes que vivimos en un país pequeño, en una ciudad pequeña, el barrio es pequeño; vivimos en una aldea\", de ahí es donde viene el nombre Los Aldeanos. Y entienden por aldea un lugar donde viven las personas y estas cooperan entre todas y todas tienen el mismo objetivo y aunque son caracteres diferentes y formas de hacer distinta, todo el mundo sabe que hay que halar en la misma dirección.', 'aldeano.jpg', 'http://el-aldeano.cu', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-20 09:43:53', '2018-04-20 09:43:53', NULL),
(6, 6, 'Die Ostalgie', 4, 'die-ostalgie', '1982-11-25', 'Para tú para tú bananaaaa potatoooo bappleees aaaaaah pepete hana dul sae poulet tikka masala ti aamoo! Uuuhhh aaaaaah gelatooo uuuhhh jiji hana dul sae daa aaaaaah hahaha. Ti aamoo! baboiii baboiii poopayee. Po kass potatoooo bee do bee do bee do hahaha hahaha poopayee daa pepete. Bee do bee do bee do me want bananaaa! Uuuhhh baboiii underweaaar me want bananaaa!', 'ostalgie.jpg', 'http://ostalgie.de', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-20 09:43:53', '2018-04-20 09:43:53', NULL),
(7, 7, 'Die Gesunde Way of Dying', 4, 'die-gesunde-way-of-dying', '1978-03-05', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'dying.jpg', 'http://death-or-alive.com', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-20 09:43:53', '2018-04-20 09:43:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'super_admin', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(2, 'Admin', 'admin', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(3, 'Author', 'author', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(4, 'Subscriber', 'subscriber', '2018-04-20 09:43:53', '2018-04-20 09:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
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
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `statusable_id`, `statusable_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'categories', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(2, 2, 'categories', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(3, 3, 'categories', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(4, 1, 'subcategories', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(5, 2, 'subcategories', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(6, 3, 'subcategories', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(7, 4, 'subcategories', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(8, 5, 'subcategories', 'inactive', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(9, 1, 'channels', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(10, 2, 'channels', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(11, 3, 'channels', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(12, 4, 'channels', 'inactive', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(13, 5, 'channels', 'banned', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(14, 6, 'channels', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(15, 7, 'channels', 'inactive', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(16, 1, 'profiles', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(17, 2, 'profiles', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(18, 3, 'profiles', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(19, 4, 'profiles', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(20, 5, 'profiles', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(21, 6, 'profiles', 'inactive', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(22, 7, 'profiles', 'banned', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(23, 1, 'discussions', 'active', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(24, 2, 'discussions', 'inactive', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(25, 3, 'discussions', 'inactive', '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(26, 4, 'discussions', 'banned', '2018-04-20 09:43:53', '2018-04-20 09:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
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
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `title`, `slug`, `subtitle`, `about`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'The world of PHP', 'the-world-of-php', 'Hier is all about programming', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'santorini.jpg', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(2, 2, 'Popular dance', 'popular-dance', 'And of course here I do what I want', 'Look, just because I do not be givin no man a foot massage do not make it right for Marsellus to throw Antwone into a glass motherfuckin house, fuckin up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, because I will kill the motherfucker, know what I am sayin?', 'flamenco.jpg', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(3, 2, 'Ballet', 'Ballet', 'And of course here I do what I want', 'My money is in that office, right? If she start giving me some bullshit about it aint there, and we got to go someplace else and get it, I am gonna shoot you in the head then and there. Then I am gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I am talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', 'ballet.jpg', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(4, 3, 'Popular music', 'popular-music', 'Beat, Hip, Hop', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I do not know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I am breaking now. We said we would say it was the snow that killed the other two, but it was not. Nature is lethal but it does not hold a candle to man.', 'salsa.jpg', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(5, 3, 'Classical Music', 'classical-music', 'Opera and Co.', 'Your bones do not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.', 'opera singer.jpg', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafael Muñoz', 'rafaelmunoznl@yahoo.com', '$2y$10$Kv7B3ErHGrqHNuybo3eQzOFozNgWBdD99FiZibluIRDu26ATH05nm', NULL, '2018-04-20 09:43:52', '2018-04-20 09:43:52'),
(2, 'Enrique (Kike) Muñoz Botschka', 'kike901@gmail.com', '$2y$10$B9MrYP.GTDlEdIFclRcQgeu2uPP4MPue4sHmBMliAAg27P1jRrkR.', NULL, '2018-04-20 09:43:52', '2018-04-20 09:43:52'),
(3, 'Amelie Muñoz Botschka', 'amelie@yahoo.com', '$2y$10$Tcofwx5WbUxzCtISMbVIYOxtOwcpNiTPrAY14hf9YA34s28ehQfj6', NULL, '2018-04-20 09:43:52', '2018-04-20 09:43:52'),
(4, 'Pamela Rodriguez', 'prdguez@yahoo.com', '$2y$10$zoe3gpPvR.XasPAtGt9N1.0V06C35uHgYzVQ3DVumPw3ToBfYjpB6', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(5, 'Arnaldo Schmidth', 'a.schmidth@smidth-and-sons.com', '$2y$10$M.tGyXxSM357rOUau6mGguR.3R4.wQAmhBBrk.1kJtqSZ.PAEU/xS', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(6, 'Miguel Strogov', 'mstrogov@stroganov.ru', '$2y$10$aEVL8XEdoLv0L33C3R29yu6EHMK8wu8UEPbRR6fNilrBoWjTN331u', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53'),
(7, 'Tomas Mann', 't.lee@lee.cn', '$2y$10$wQNkmEJ4gGPCNWiAFsB2vuOTVDrGC/xHWRYnCVP6pnFkpknOZdIky', NULL, '2018-04-20 09:43:53', '2018-04-20 09:43:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD UNIQUE KEY `categories_image_unique` (`image`);

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_title_unique` (`title`),
  ADD UNIQUE KEY `channels_slug_unique` (`slug`),
  ADD UNIQUE KEY `channels_image_unique` (`image`),
  ADD KEY `channels_subcategory_id_index` (`subcategory_id`),
  ADD KEY `channels_profile_id_index` (`profile_id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discussions_title_unique` (`title`),
  ADD UNIQUE KEY `discussions_slug_unique` (`slug`),
  ADD UNIQUE KEY `discussions_image_unique` (`image`),
  ADD KEY `discussions_profile_id_index` (`profile_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`),
  ADD KEY `profiles_role_id_index` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_title_unique` (`title`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD UNIQUE KEY `subcategories_image_unique` (`image`),
  ADD KEY `subcategories_category_id_index` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
