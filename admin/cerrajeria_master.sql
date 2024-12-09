-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 01:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cerrajeria_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellidos`, `email`) VALUES
(1, 'Juan', 'Hernández García', 'juan.hernandez@example.com'),
(2, 'Ana', 'Martínez Rodríguez', 'ana.martinez@example.com'),
(3, 'Carlos', 'González López', 'carlos.gonzalez@example.com'),
(4, 'María', 'Pérez Sánchez', 'maria.perez@example.com'),
(5, 'Javier', 'Torres Jiménez', 'javier.torres@example.com'),
(6, 'Laura', 'Díaz Ruiz', 'laura.diaz@example.com'),
(7, 'Francisco', 'Sánchez Gutiérrez', 'francisco.sanchez@example.com'),
(8, 'Sofía', 'Ramírez Castro', 'sofia.ramirez@example.com'),
(9, 'Alejandro', 'Ruiz Herrera', 'alejandro.ruiz@example.com'),
(10, 'Adriana', 'López Vargas', 'adriana.lopez@example.com'),
(11, 'Gabriel', 'Gómez Flores', 'gabriel.gomez@example.com'),
(12, 'Valeria', 'Mendoza Medina', 'valeria.mendoza@example.com'),
(13, 'Luis', 'Castillo Aguilar', 'luis.castillo@example.com'),
(14, 'Paola', 'Ortega Torres', 'paola.ortega@example.com'),
(15, 'Ricardo', 'García Navarro', 'ricardo.garcia@example.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
