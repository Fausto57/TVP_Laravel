-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 21:03:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tvp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Celular` bigint(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `Nombre`, `Ciudad`, `Correo`, `Celular`, `created_at`, `updated_at`) VALUES
(1, 'Fausto', 'guasave', 'fausto@correo', 2147483647, NULL, NULL),
(2, 'Fausto', 'culiacan', 'faustomzp@gmail.com', 1793429, '2023-06-11 08:03:44', '2023-06-11 08:03:44'),
(3, 'sas', 'Culiacan', 'pacheco@correo.com', 687123, '2023-06-11 15:03:35', '2023-06-11 15:03:35'),
(4, 'sas', 'Culiacan', 'pacheco@correo.com', 687123, '2023-06-11 15:04:10', '2023-06-11 15:04:10'),
(5, 'Ismael', 'guasaa', 'Faustomzp@gmail.com', 687123, '2023-06-11 15:05:19', '2023-06-11 15:05:19'),
(6, 'Ismael', 'guasaa', 'Faustomzp@gmail.com', 687123, '2023-06-11 15:09:08', '2023-06-11 15:09:08'),
(7, 'Fausto', 'asa', 'Faustomzp@gmail.com', 687123, '2023-06-11 15:09:26', '2023-06-11 15:09:26'),
(8, 'Fausto', 'asa', 'Faustomzp@gmail.com', 687123, '2023-06-11 15:09:29', '2023-06-11 15:09:29'),
(9, 'Fausto', 'asa', 'Faustomzp@gmail.com', 687123, '2023-06-11 15:09:30', '2023-06-11 15:09:30'),
(10, 'Fausto', 'asa', 'Faustomzp@gmail.com', 687123, '2023-06-11 15:09:42', '2023-06-11 15:09:42'),
(11, 'Fausto', 'asa', 'Faustomzp@gmail.com', 687123, '2023-06-11 15:10:42', '2023-06-11 15:10:42'),
(12, 'Fausto', 'morales', 'pacheco@correo.com', 1793429, '2023-06-11 15:11:44', '2023-06-11 15:11:44'),
(13, 'Fausto', 'morales', 'pacheco@correo.com', 6871793429, '2023-06-11 15:12:51', '2023-06-11 15:12:51'),
(14, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 6871793429, '2023-06-12 14:29:33', '2023-06-12 14:29:33'),
(15, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 687179342, '2023-06-12 14:30:39', '2023-06-12 14:30:39'),
(16, 'sas', 'morales', 'Faustomzp@gmail.com', 687123, '2023-06-12 14:33:48', '2023-06-12 14:33:48'),
(17, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 687123, '2023-06-12 14:38:14', '2023-06-12 14:38:14'),
(18, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 687123, '2023-06-12 14:39:19', '2023-06-12 14:39:19'),
(19, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 687123, '2023-06-12 14:40:13', '2023-06-12 14:40:13'),
(20, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 687123, '2023-06-12 14:42:12', '2023-06-12 14:42:12'),
(21, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 687123, '2023-06-12 14:43:08', '2023-06-12 14:43:08'),
(22, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 6871793429, '2023-06-12 14:43:23', '2023-06-12 14:43:23'),
(23, 'Fausto', 'Culiacan', 'Faustomzp@gmail.com', 687123, '2023-06-12 14:46:07', '2023-06-12 14:46:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_06_10_210003_contacto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
