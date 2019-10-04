-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 06:29 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_ejemplo`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url_img` varchar(50) NOT NULL,
  `usersid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `titulo`, `description`, `url_img`, `usersid`) VALUES
(16, 'tipos de datos de presentacion', 'es el fondo de algun lado', 'assets/imgFONDO.jpg', 5),
(22, 'lobo siberiano historia', 'Su fama y econocimiento aumentó en 1925,durante una epidemia de difteria que afectó a la ciudad de Nome, punto de partida y llegada de la famosa carrera. Debido a las condiciones climatológicas era imposible acceder al ciudad para llevar medicamentos. Un ', 'assets/img/imgfs.jpg', 7),
(23, 'tipos de datos', 'es el fondo de algun lado', 'assets/imgc0acc1ec3858006ecb2aa34d423433cf.jpg', 7),
(26, 'sddfsdfs', 'sdfsdf', 'assets/imgCaptura de pantalla (6).png', 7),
(27, 'sddfsdfs', 'sdfsdf', 'assets/imgmathematics-1622448_1920.jpg', 7),
(28, 'sddfsdfs', 'sdfsdf', 'assets/imgCaptura de pantalla (5).png', 7),
(31, 'sddfsdfs', 'asdasdasdasdasdasdasd', 'assets/img/imgc0acc1ec3858006ecb2aa34d423433cf.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `des_rol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`rol_id`, `des_rol`) VALUES
(1, 'Administrador'),
(2, 'Docente'),
(3, 'Alumno'),
(4, 'Obrero');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `foto`, `name`, `email`, `password`, `rol_id`) VALUES
(5, 'assets/imguser.png', 'David Mateus', 'Mateus525@hdsag.com', '$2y$10$639vR7uooDQnhbI.D06fdOvXG0UD0dosQjLbhswpE9FUZC7qE33QK', 3),
(6, 'assets/imguser.png', 'David  master', 'Mateus@hdsag.com', '$2y$10$H8lSEU.pJzawL843Va71lu8USEk2fexVJy6pth9dDwTd0RGK3BmCy', 2),
(7, 'assets/imguser.png', 'Oscar Perez', 'davidmateus54321@gmail.com', '$2y$10$l/XLq.A1VP8u/04DxLjsceKAm5Fq4LvuYWBnpLMOYVuDB8h74Olri', 1),
(8, 'imguser.png', 'Yesid Uribe', 'yesid@gmail.com', '321', 2),
(9, 'imguser.png', 'Daniel Ospina', 'daniel@gmail.com', '321', 4),
(10, 'assets/img/', 'mario', 'megamariossj21@gmail.com', '$2y$10$hsUiS8rJ5jEQblVcupO1SeWRnJ1kt68JVhe.SUMYf4IBNbK14uuVu', 3),
(11, 'assets/img/', 'mario Alberto', 'bros@gmail.com', '$2y$10$VAAOW26f9njfMjV5zfNeY.Iqd1JCdGx3YYeXSoha/pcHQwlxB.Hoe', 4),
(12, 'assets/img/', 'Esneyder', 'papai@gmail.com', '$2y$10$nbXsYCczgjykGjt44fs7CewnAWmdrKI43s7WXSDTYbXzhorv2nqte', 4),
(13, 'assets/img/', 'Esneyder', 'parpai@gmail.com', '$2y$10$1FeV/gYQRVLKg17bxkezYeT.behpWt4OkiFmzFf/JcBjc2xniJ24K', 4),
(14, 'assets/img/', 'Mario', 'papai@gmail', '$2y$10$DkfTgUDY91.CH99yXYnC4uJ1oCpYYepXBtI5D/Y/4mIrD0EZIPVL.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `usersid` (`usersid`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`password`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `rol_id_2` (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`usersid`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
