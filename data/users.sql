-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2019 a las 21:19:54
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `lastname`, `email`, `country`, `avatar`, `password`) VALUES
(1, 'Usuario_OOP', 'User_OOP_Nombre', 'User_OOP_Apellido', 'user_oop@gmail.com', 'uy', 'img_5d1ae13d2bb8f.png', '$2y$10$lfFcf5AmAms29VY9H5IWR.95/yVQ3F5r./UVYufSR7WhWGlez5UMa'),
(2, 'SOLEDAD_OOP', 'SOLEDAD_OOP_NOMBRE', 'SOLEDAD_OOP_APELLIDO', 'soledad_oop@gmail.com', 've', 'img_5d1b973329bda.png', '$2y$10$egqD4Gfyv1ntaMYCu3sTg.NyKIe6Om0D97IrOWN4xIXmDe2rad/K6'),
(3, 'SOLCIS', 'SOL_OOP_N', 'SOL_OOP_A', 'solcis_90@live.com', 'ar', 'img_5d1bd6b3476cc.jpg', '$2y$10$nJXD5iIvbW63MUCArfjCP.9NPsZHJyWPg69moH21oyDUcshDiUhim'),
(4, 'SOLEDAD_OOP_BD', 'SOL', 'QUIÃ‘ONES', 'soledad_oop_bd@gmail.com', 'pe', 'img_5d1cf392e7363.jpg', '$2y$10$.kNxWOHSNNjn83LqEPyKKeoVsoaOnSJ3qvLzmtuNAncEhScbzIVKC'),
(5, 'tamara', 'Tamara', 'QuiÃ±ones', 'tamara90@hotmail.com', 'cl', 'img_5d1cf8482b97b.jpg', '$2y$10$qcxN09vfWR.j/x67bNRD8OHz78J4XKOuKlQ1I8bB3XsrpwsqWwbEW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
