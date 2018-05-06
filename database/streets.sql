-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 06. Mai 2018 um 15:35
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `subtitle`, `about`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Architecture', 'architecture', 'architecture', '<p>Your bones don not break, mine do. That is clear. Your cells react to bacteria and viruses differently than mine. You do not get sick, I do. That is also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We are on the same curve, just on opposite ends.<br></p>', NULL, '2018-05-06 04:33:19', '2018-05-06 04:44:34'),
(2, 'Sculpture', 'sculpture', 'The world in movement', '<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that is what you see at a toy store. And you must think you are in a toy store, because you are here shopping for an infant named Jeb.<br></p>', NULL, '2018-05-06 05:04:07', '2018-05-06 11:21:22');

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `channels`
--

INSERT INTO `channels` (`id`, `subcategory_id`, `profile_id`, `title`, `slug`, `subtitle`, `about`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 4, 1, 'The new Chanel mio', 'the-new-chanel-mio', 'Es war ein Mal in einen weit fern Dorf edited', '<h4 class=\"headline\">The exotic and ornamental</h4>\r\n                                            <p>Schwetzingen Palace \r\nGardens are a cultural heritage site of European  significance: more \r\nthan 100 sculptures are scattered throughout this  wonderful, and at \r\ntimes surprising, landscape. An assortment of  whimsical buildings lend \r\nan exotic touch. The Apollotempel (temple of  Apollo), a small, round \r\nbuilding, houses a statue of the ancient Greek  god of light and the \r\narts, playing the lyre. The Badehaus (bath house)  is a summerhouse with\r\n its own garden, modelled on an Italian villa. And,  most spectacularly,\r\n in the Türkischer Garten (Turkish gardens), there  is a mosque designed\r\n by Nicolas de Pigage – the largest structure of its  kind in a German \r\ngarden. Ornamented with oriental details, the  late-Baroque building was\r\n purely decorative and served no religious  purpose.</p>', NULL, '2018-05-06 11:48:19', '2018-05-06 12:19:51');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `images`
--

INSERT INTO `images` (`id`, `imageable_id`, `imageable_type`, `profile_id`, `name`, `slug`, `alt`, `about`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 'categories', 1, '1523655752-adaptationjpg', '1525590145-1523655752-adaptationjpg', NULL, NULL, '2018-05-06 05:02:25', '2018-05-06 05:02:25', NULL),
(7, 1, 'profiles', 1, 'rafaeljpg', '1525598319-rafaeljpg', NULL, NULL, '2018-05-06 07:18:39', '2018-05-06 07:18:39', NULL),
(8, 2, 'profiles', 2, 'kikejpg', '1525598431-kikejpg', NULL, NULL, '2018-05-06 07:20:31', '2018-05-06 07:20:31', NULL),
(9, 4, 'subcategories', 1, '1523659658-airjpg', '1525612833-1523659658-airjpg', NULL, NULL, '2018-05-06 11:20:33', '2018-05-06 11:20:33', NULL),
(11, 2, 'categories', 1, 'sculpturejpg', '1525612896-sculpturejpg', NULL, NULL, '2018-05-06 11:21:36', '2018-05-06 11:21:36', NULL),
(12, 5, 'subcategories', 1, 'plasticajpg', '1525613277-plasticajpg', NULL, NULL, '2018-05-06 11:27:57', '2018-05-06 11:27:57', NULL),
(15, 3, 'channels', 1, '1523655112-1474378125jpg', '1525616493-1523655112-1474378125jpg', NULL, NULL, '2018-05-06 12:21:33', '2018-05-06 12:21:33', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `likeable_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `likeable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(836, '2014_10_12_000000_create_users_table', 1),
(837, '2014_10_12_100000_create_password_resets_table', 1),
(838, '2018_04_17_095234_create_profiles_table', 1),
(839, '2018_04_17_100844_create_statuses_table', 1),
(840, '2018_04_17_101242_create_roles_table', 1),
(841, '2018_04_17_122518_create_channels_table', 1),
(842, '2018_04_17_131033_create_subcategories_table', 1),
(843, '2018_04_17_131237_create_categories_table', 1),
(844, '2018_04_17_150649_create_discussions_table', 1),
(845, '2018_04_22_143544_create_replies_table', 1),
(846, '2018_04_22_144220_create_likes_table', 1),
(847, '2018_04_25_135530_create_posts_table', 1),
(848, '2018_04_25_145809_create_pages_table', 1),
(849, '2018_04_26_210257_create_postcategories_table', 1),
(850, '2018_04_27_122239_create_tags_table', 1),
(851, '2018_04_27_122325_create_taggables_table', 1),
(852, '2018_04_28_054905_create_comments_table', 1),
(853, '2018_04_28_054923_create_comment_replies_table', 1),
(854, '2018_04_28_082458_create_watchers_table', 1),
(855, '2018_05_03_145800_create_images_table', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Tabellenstruktur für Tabelle `postcategories`
--

CREATE TABLE `postcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `postcategory_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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

INSERT INTO `profiles` (`id`, `user_id`, `title`, `role_id`, `slug`, `birthday`, `about`, `web`, `facebook`, `googleplus`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Yo soy Severus', 1, 'yo-soy-severus', '1966-05-19', 'Lucio Septimio Severo1​ (Leptis Magna, África, 11 de abril de 146-Eboracum, Britania, 4 de febrero de 211) fue emperador del Imperio romano de 193 a 211, con el nombre oficial de Lucius Septimius Severus Pius Pertinax Augustus. Fue el primer emperador romano de origen norteafricano en alcanzar el trono y el fundador de la dinastía de los Severos. Tras su muerte fue proclamado Divus por el Senado.\r\n\r\nDe ascendencia itálica (por su madre), y púnica-bereber (por su padre), Severo logró hacerse sitio en la sociedad romana e incluso tener una próspera carrera política en la que llegó a ser gobernador de Panonia. Ya que su padre no pertenecía al orden senatorial, ni realizó servicios al Estado, no debió ser ajeno a su promoción el hecho de que dos primos de su padre habían sido cónsules durante el reinado de Antonino Pío. Tras la muerte del emperador Pertinax, los pretorianos vendieron el trono del Imperio a Didio Juliano, un rico e influyente senador. Sin embargo, desde el inicio de su reinado Juliano tuvo que enfrentarse a una férrea oposición procedente del pueblo y del ejército.', 'http://severus.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-05-06 04:33:13', '2018-05-06 04:33:13', NULL),
(2, 2, 'Enrique (Kike) Muñoz Botschka', 2, 'enrique-kike-munoz-botschka', '2007-08-23', '<h2>Mock your back-end API and start coding your UI today.</h2><p>It\'s hard to put together a meaningful UI prototype without making real requests to an API. \r\nBy making real requests, you\'ll uncover problems with application flow, timing, and API design\r\nearly, improving the quality of both the user experience and API. With Mockaroo, you can \r\n<a href=\"https://mockaroo.com/mock_apis\">design your own mock APIs</a>, You control the URLs, responses, and error \r\nconditions. Paralellize UI and API development and start delivering better applications faster today!</p>', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-06 06:48:48', '2018-05-06 07:18:16', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `best_answer` tinyint(1) NOT NULL DEFAULT '0',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `roles`
--

INSERT INTO `roles` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'super_admin', '2018-05-06 04:33:13', '2018-05-06 04:33:13'),
(2, 'Admin', 'admin', '2018-05-06 04:33:13', '2018-05-06 04:33:13'),
(3, 'Author', 'author', '2018-05-06 04:33:13', '2018-05-06 04:33:13'),
(4, 'Subscriber', 'subscriber', '2018-05-06 04:33:13', '2018-05-06 04:33:13');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `statusable_id` int(11) NOT NULL,
  `statusable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `statuses`
--

INSERT INTO `statuses` (`id`, `statusable_id`, `statusable_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'profiles', 'active', '2018-05-06 04:33:13', '2018-05-06 04:33:13'),
(2, 1, 'categories', 'active', '2018-05-06 04:33:19', '2018-05-06 04:33:19'),
(3, 2, 'categories', 'active', '2018-05-06 05:04:07', '2018-05-06 05:04:07'),
(4, 4, 'subcategories', 'active', '2018-05-06 05:16:47', '2018-05-06 05:16:47'),
(5, 2, 'profiles', 'active', '2018-05-06 06:48:48', '2018-05-06 06:48:48'),
(6, 5, 'subcategories', 'active', '2018-05-06 11:27:57', '2018-05-06 11:27:57'),
(7, 3, 'channels', 'active', '2018-05-06 11:48:19', '2018-05-06 11:48:19');

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `title`, `slug`, `subtitle`, `about`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 1, 'The Greek Classic Architecture', 'the-greek-classic-architecture', 'From the begoinnning to the end of Greek Empire', '<p>Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.<br></p>', NULL, '2018-05-06 05:16:47', '2018-05-06 11:26:07'),
(5, 1, 'Gardens', 'gardens', 'The art of the gardens in Europa', '<p>The\r\n origins of Schwetzingen Palace (Schloss Schwetzingen) date back to  \r\n1350, when a small moated castle occupied the site. After an eventful  \r\nhistory, Schwetzingen flourished under the Palatine Prince Elector Carl \r\n Theodor (1724–1799). The palace owes its current form to the Prince  \r\nElector Johann Wilhelm, who commissioned alterations in 1697. The  \r\naddition of two wings significantly increased its size.</p>\r\n                                        \r\n                                    \r\n                                \r\n                            \r\n                        \r\n                                    \r\n                \r\n                    \r\n                    \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                            \r\n                            \r\n                            \r\n                            \r\n                            \r\n                            \r\n                            \r\n                                \r\n                                                        \r\n                            \r\n                                \r\n                                                        \r\n                            \r\n                                \r\n                            \r\n                            \r\n                            <div class=\"image-text image-left\">\r\n                               <div class=\"row\"><br><div class=\"text-wrap small-12  medium-8  column\">\r\n                                        <div class=\"text\">\r\n                                            <h4 class=\"headline\">A work of genius</h4>\r\n                                            <p>Schwetzingen Palace \r\nreached the height of splendour under the Prince  Elector Carl Theodor. \r\nHe instructed the leading landscape architects of  the age to design the\r\n gardens, including Nicolas de Pigage and later  Friedrich Ludwig von \r\nSckell, with assistance from many renowned artists.  From 1749 onwards, \r\nthey created a masterpiece of rare beauty and rich  variety. The central\r\n part of the gardens, including the Zirkelbauten  (wings of the main \r\nbuilding, which form a semi-circle), leafy avenues  and a circular \r\nparterre, is laid out geometrically, with a focus on  symmetry and \r\norder. In the late 18th century, an English-style landscape  park was \r\nadded to the Baroque garden – the Arborium Theodoricum, as it  is \r\ncalled, is one of the earliest of its kind in Germany.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                            </div>', NULL, '2018-05-06 11:27:57', '2018-05-06 11:28:47');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `taggables`
--

CREATE TABLE `taggables` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(11) NOT NULL,
  `taggable_id` int(11) NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafael Muñoz', 'rafael-munoz', 'rafaelmunoznl@yahoo.com', '$2y$10$OnQciJaI3bA8H2dJlATm..PrjLBRO594Q7JsD0LSGTffmtgvwvULi', '3OBHJIrYWlWTtbH6EoP3J97SHbhG0g9Yf6zMmlOPwdri6oECH8iBvp1rCggv', '2018-05-06 04:33:13', '2018-05-06 04:33:13'),
(2, 'Enrique (Kike) Muñoz Botschka', 'enrique-kike-munoz-botschka', 'kike901@gmail.com', '$2y$10$fXxAj84hmIHEVT0BhGnMa.NtJ2xN47f1kXN/jYgX.v2X941gU.hYe', 'UQdF5Vrl1STaXts3fN6w7s25B5mtuBOPuVS20kKnh5l2KTZ7TaWiABZYR60D', '2018-05-06 06:48:48', '2018-05-06 06:48:48');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `watchers`
--

CREATE TABLE `watchers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indizes für die Tabelle `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_title_unique` (`title`),
  ADD UNIQUE KEY `channels_slug_unique` (`slug`),
  ADD KEY `channels_subcategory_id_index` (`subcategory_id`),
  ADD KEY `channels_profile_id_index` (`profile_id`);

--
-- Indizes für die Tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_profile_id_index` (`profile_id`),
  ADD KEY `comments_post_id_index` (`post_id`);

--
-- Indizes für die Tabelle `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_replies_profile_id_index` (`profile_id`),
  ADD KEY `comment_replies_comment_id_index` (`comment_id`);

--
-- Indizes für die Tabelle `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discussions_title_unique` (`title`),
  ADD UNIQUE KEY `discussions_slug_unique` (`slug`),
  ADD KEY `discussions_profile_id_index` (`profile_id`);

--
-- Indizes für die Tabelle `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `images_slug_unique` (`slug`),
  ADD KEY `images_profile_id_index` (`profile_id`);

--
-- Indizes für die Tabelle `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_title_unique` (`title`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indizes für die Tabelle `postcategories`
--
ALTER TABLE `postcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `postcategories_title_unique` (`title`),
  ADD UNIQUE KEY `postcategories_slug_unique` (`slug`);

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_profile_id_index` (`profile_id`),
  ADD KEY `posts_postcategory_id_index` (`postcategory_id`);

--
-- Indizes für die Tabelle `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`),
  ADD KEY `profiles_role_id_index` (`role_id`);

--
-- Indizes für die Tabelle `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_profile_id_index` (`profile_id`),
  ADD KEY `replies_discussion_id_index` (`discussion_id`);

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
  ADD KEY `subcategories_category_id_index` (`category_id`);

--
-- Indizes für die Tabelle `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indizes für die Tabelle `watchers`
--
ALTER TABLE `watchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watchers_user_id_index` (`user_id`),
  ADD KEY `watchers_discussion_id_index` (`discussion_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT für Tabelle `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=856;

--
-- AUTO_INCREMENT für Tabelle `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `postcategories`
--
ALTER TABLE `postcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `watchers`
--
ALTER TABLE `watchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
