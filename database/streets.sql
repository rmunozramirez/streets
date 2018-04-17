-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-04-2018 a las 13:37:12
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
  `status_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `status_id`, `title`, `slug`, `subtitle`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Architecture', 'architecture', 'From architect to software developer', 'parthenon.jpg', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(2, 2, 'Dance', 'dance', 'The world in movement', 'dance.jpg', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(3, 3, 'Music', 'music', 'The sound of the bests', 'music.jpg', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
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
-- Volcado de datos para la tabla `channels`
--

INSERT INTO `channels` (`id`, `subcategory_id`, `profile_id`, `status_id`, `title`, `slug`, `subtitle`, `image`, `likes`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'This is my place', 'this-is-my-place', 'And of course here I do what I want', 'auto-clasico.jpg', 2356, NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(2, 2, 2, 1, 'The Super Kike in action', 'the-super-kike-in-action', 'Hier is all about swimmmingt', 'kite.jpg', 2336, NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(3, 2, 3, 1, 'My paintings World', 'my-paintings-world', 'This is the work from my entire life', 'urban-dance.jpg', 276, NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(4, 3, 4, 1, 'This is another Channel from Pamela', 'this-is-another-channel-from-pamela', 'Pamela is a very good singer', 'bolliwood.jpg', 136, NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(5, 4, 5, 1, 'The Good Hamberger', 'the-good-hamberger', 'I like a lot the birds meet and the Hamberger', 'gorrion.jpg', 896, NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(6, 4, 6, 1, 'I have not idea', 'i-have-not-idea', 'And of course here I do what I want', 'guitarra.jpg', 26, NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(7, 4, 7, 1, 'This is not ba channel', 'this-is-not-a-channel', 'And of course here I do what I want', 'no-channel.jpg', 400, NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39');

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
(40, '2014_10_12_000000_create_users_table', 1),
(41, '2014_10_12_100000_create_password_resets_table', 1),
(42, '2018_04_17_095234_create_profiles_table', 1),
(43, '2018_04_17_100844_create_statuses_table', 1),
(44, '2018_04_17_101242_create_roles_table', 1),
(45, '2018_04_17_122518_create_channels_table', 1),
(46, '2018_04_17_131033_create_subcategories_table', 1),
(47, '2018_04_17_131237_create_categories_table', 1);

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
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `profiles` (`id`, `user_id`, `user_name`, `status_id`, `role_id`, `slug`, `birthday`, `about`, `image`, `web`, `facebook`, `googleplus`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Yo soy Severus', 1, 1, 'yo-soy-severus', '1966-05-19', 'Lucio Septimio Severo1​ (Leptis Magna, África, 11 de abril de 146-Eboracum, Britania, 4 de febrero de 211) fue emperador del Imperio romano de 193 a 211, con el nombre oficial de Lucius Septimius Severus Pius Pertinax Augustus. Fue el primer emperador romano de origen norteafricano en alcanzar el trono y el fundador de la dinastía de los Severos. Tras su muerte fue proclamado Divus por el Senado.\n\nDe ascendencia itálica (por su madre), y púnica-bereber (por su padre), Severo logró hacerse sitio en la sociedad romana e incluso tener una próspera carrera política en la que llegó a ser gobernador de Panonia. Ya que su padre no pertenecía al orden senatorial, ni realizó servicios al Estado, no debió ser ajeno a su promoción el hecho de que dos primos de su padre habían sido cónsules durante el reinado de Antonino Pío. Tras la muerte del emperador Pertinax, los pretorianos vendieron el trono del Imperio a Didio Juliano, un rico e influyente senador. Sin embargo, desde el inicio de su reinado Juliano tuvo que enfrentarse a una férrea oposición procedente del pueblo y del ejército.', 'rafael.png', 'http://severus.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-17 11:36:39', '2018-04-17 11:36:39', NULL),
(2, 2, 'Superkike', 1, 2, 'superkike', '2007-08-23', 'La natación es el movimiento y el desplazamiento a través del agua mediante el uso de las extremidades corporales y por lo general sin utilizar ningún instrumento o apoyo para avanzar, generalmente la natación se hace para recreación, deporte, ejercicio o supervivencia. Los seres humanos pueden contener la respiración bajo el agua y realizar natación locomotora rudimentaria, esto se puede hacer semanas después del nacimiento como una respuesta evolutiva.', 'kike.png', 'http://superkike.es', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-17 11:36:39', '2018-04-17 11:36:39', NULL),
(3, 3, 'Amelies Paintings', 1, 2, 'amelies-peinting', '2005-09-29', 'Salvador Felipe Jacinto Dalí i Domènech,1​ marqués de Dalí de Púbol (Figueras, 11 de mayo de 1904-ibídem, 23 de enero de 1989), fue un pintor, escultor, grabador, escenógrafo y escritor español del siglo XX. Se le considera uno de los máximos representantes del surrealismo.', 'amelie.png', 'http://malanga.blue', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-17 11:36:39', '2018-04-17 11:36:39', NULL),
(4, 4, 'Pamelas Welt', 1, 3, 'pamelas-welt', '1965-06-10', 'Pamela Denise Anderson (* 1. Juli 1967 in Ladysmith, British Columbia, Kanada) ist eine kanadisch-US-amerikanische Schauspielerin und ein Pin-up-Girl. In ihrer Rolle als Rettungsschwimmerin in der Erfolgsserie Baywatch wurde sie international zum Star. Sie gilt als das Sexsymbol der 1990er Jahre und war jahrelang die meistgeklickte Frau im Internet.', 'pamela.png', 'http://pamela-welt.de', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-17 11:36:39', '2018-04-17 11:36:39', NULL),
(5, 5, 'Los Aldeano', 1, 3, 'los-aldeano', '1977-01-11', 'Los Aldeanos, aunque tiene cierto parecido con el nombre de Aldo, no es este realmente la inspiración del nombre del grupo. \"Somos personas humildes que vivimos en un país pequeño, en una ciudad pequeña, el barrio es pequeño; vivimos en una aldea\", de ahí es donde viene el nombre Los Aldeanos. Y entienden por aldea un lugar donde viven las personas y estas cooperan entre todas y todas tienen el mismo objetivo y aunque son caracteres diferentes y formas de hacer distinta, todo el mundo sabe que hay que halar en la misma dirección.', 'aldeano.png', 'http://el-aldeano.cu', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-17 11:36:39', '2018-04-17 11:36:39', NULL),
(6, 6, 'Die Ostalgie', 1, 4, 'die-ostalgie', '1982-11-25', 'Para tú para tú bananaaaa potatoooo bappleees aaaaaah pepete hana dul sae poulet tikka masala ti aamoo! Uuuhhh aaaaaah gelatooo uuuhhh jiji hana dul sae daa aaaaaah hahaha. Ti aamoo! baboiii baboiii poopayee. Po kass potatoooo bee do bee do bee do hahaha hahaha poopayee daa pepete. Bee do bee do bee do me want bananaaa! Uuuhhh baboiii underweaaar me want bananaaa!', 'ostalgie.png', 'http://ostalgie.de', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-17 11:36:39', '2018-04-17 11:36:39', NULL),
(7, 7, 'Die Gesunde Way of Dying', 1, 4, 'die-gesunde-way-of-dying', '1978-03-05', 'Well, the way they make shows is, they make one show. That shows called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they are going to make more shows. Some pilots get picked and become television programs. Some do not, become nothing. She starred in one of the ones that became nothing.', 'dying.png', 'http://death-or-alive.com', 'https://facebook.com', 'https://googleplus.com', 'https://twitter.com', 'https://linkedin.com', 'https://youtube.com', '2018-04-17 11:36:39', '2018-04-17 11:36:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'super_admin', '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(2, 'Admin', 'admin', '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(3, 'Author', 'author', '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(4, 'Subscriber', 'subscriber', '2018-04-17 11:36:39', '2018-04-17 11:36:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Active', 'active', '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(2, 'Inactive', 'inactive', '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(3, 'On Hold', 'on_hold', '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(4, 'Banned', 'banned', '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(5, 'Featured', 'featured', '2018-04-17 11:36:39', '2018-04-17 11:36:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `status_id`, `title`, `slug`, `subtitle`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'The world of PHP', 'the-world-of-php', 'Hier is all about programming', 'santorini.jpg', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(2, 2, 1, 'Pupular dance', 'popular-dance', 'And of course here I do what I want', 'flamenco.jpg', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(3, 2, 1, 'Ballet', 'Ballet', 'And of course here I do what I want', 'ballet.jpg', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(4, 3, 1, 'Popular music', 'popular-music', 'Beat, Hip, Hop', 'salsa.jpg', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(5, 3, 1, 'Classical Music', 'classical-music', 'Opera and Co.', 'opera singer.jpg', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39');

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
(1, 'Rafael Muñoz', 'rafaelmunoznl@yahoo.com', '$2y$10$Ka09HxwINayStQtzE6hdWuBf.l6wbA/kK6cZXVuiiLjFX0mE6wrUy', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(2, 'Enrique (Kike) Muñoz Botschka', 'kike901@gmail.com', '$2y$10$sHqpfSH5Qm7F3p4chdoj7eXcIXmvR25UY6F8ujhxMwFbRc1fQW1xW', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(3, 'Amelie Muñoz Botschka', 'amelie@yahoo.com', '$2y$10$CQMJ.I4eFKANV4dULA09BefOBTL51amTuHXVviUGRH0GA1wTItnCO', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(4, 'Pamela Rodriguez', 'prdguez@yahoo.com', '$2y$10$p9rYEIuE1zFa4t2koeie7OrdsAzL64RWkY/gfxsjI9Hw.omdw3wWG', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(5, 'Arnaldo Schmidth', 'a.schmidth@smidth-and-sons.com', '$2y$10$IOEsnPwuDELNTApUNd.beObZmCH05kWWeetnrDnwS.lKZYWL1Uu8.', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(6, 'Miguel Strogov', 'mstrogov@stroganov.ru', '$2y$10$r5VAOF/xYZXEub8yLQRJV.KlZH4rN2GN46ioRQu6FghZyohdd9kZa', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39'),
(7, 'Tomas Mann', 't.lee@lee.cn', '$2y$10$RzC2c0u3hW2BFa4sFiZiveY8c4cwFmSVYFQHpyJqbCLXQp6x5Cd6y', NULL, '2018-04-17 11:36:39', '2018-04-17 11:36:39');

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
  ADD UNIQUE KEY `categories_image_unique` (`image`),
  ADD KEY `categories_status_id_index` (`status_id`);

--
-- Indices de la tabla `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_title_unique` (`title`),
  ADD UNIQUE KEY `channels_slug_unique` (`slug`),
  ADD UNIQUE KEY `channels_image_unique` (`image`),
  ADD KEY `channels_subcategory_id_index` (`subcategory_id`),
  ADD KEY `channels_profile_id_index` (`profile_id`),
  ADD KEY `channels_status_id_index` (`status_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`),
  ADD KEY `profiles_status_id_index` (`status_id`),
  ADD KEY `profiles_role_id_index` (`role_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_slug_unique` (`slug`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_title_unique` (`title`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD UNIQUE KEY `subcategories_image_unique` (`image`),
  ADD KEY `subcategories_category_id_index` (`category_id`),
  ADD KEY `subcategories_status_id_index` (`status_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
