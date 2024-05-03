-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2024 a las 17:19:55
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
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Descripció` varchar(200) NOT NULL,
  `Stock` int(30) NOT NULL,
  `Mides` varchar(40) NOT NULL,
  `Preu` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `Nom`, `Descripció`, `Stock`, `Mides`, `Preu`) VALUES
(1, 'Intel Core i5-11400F 2.6 GHz', 'Processador intel', 20, '200cm', 120),
(2, 'Benq EL2870UE 28\" LED UltraHD 4K FreeSync', 'pantallabenq', 10, '150 cm de llarg', 200),
(3, 'Apple iPhone 12 Pro Max 128GB Azul Pacífico Lliure', 'telefon apple', 8, '15cm', 949),
(4, 'Amazfit GTS 2 Mini SmartWatch Meteor Black', 'rellotge amazon', 2, '49mm', 86),
(5, 'AMD Ryzen 5 5600X 3.7GHz', 'processador ryzen', 5, '3cm', 250),
(6, 'HP Omen Spacer TKL Teclado Mecánico Gaming', 'pantalla hp omen', 6, '50 cm', 140),
(7, 'asfd', 'asdf', 23, '', 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
