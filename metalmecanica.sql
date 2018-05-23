-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 03:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `metalmecanica`
--
-- --------------------------------------------------------
--
-- Table structure for table `materias`
--
CREATE TABLE `materias` (
  `id_materia` int(4) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `creditos` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `semestre` int(11) NOT NULL,
  `programa` varchar(200) NOT NULL,
  `carrera` varchar(11) NOT NULL,
  `abreviacion` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Table structure for table `noticias`
--
CREATE TABLE `noticias` (
  `id_noticia` int(4) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Table structure for table `profesor`
--
CREATE TABLE `profesor` (
  `id_profesor` int(4) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Tipo` varchar(25) NOT NULL,
  `Carrera` varchar(11) NOT NULL,
  `CV` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Table structure for table `usuarios`
--
CREATE TABLE `usuarios` (
  `id_usuario` int(4) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Table structure for table `especialidad`
--

CREATE TABLE `especialidad` (
  `id_esp` int(4) NOT NULL,
  `Nombre` varchar(60) NOT NULL, 
  `Carrera` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `especialidad`
--

CREATE TABLE `especialidad` (
  `id_esp` int(4) NOT NULL,
  `Nombre` varchar(60) NOT NULL, 
  `Carrera` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
-- Table structure for table `indices`
--
CREATE TABLE `indices` (
  `id_indice` int(4) NOT NULL,
  `carrera` varchar(11) NOT NULL,
  `periodo` varchar(7) NOT NULL,
  `fecha` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);
--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);
--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);
--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);
--
-- Indexes for table `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_esp`);

--
-- Indexes for table `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_esp`);

--
-- AUTO_INCREMENT for dumped tables
-- Indexes for table `indices`
--
ALTER TABLE `indices`
  ADD PRIMARY KEY (`id_indice`);

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `especialidd`
--
ALTER TABLE `especialidad`
  MODIFY `id_esp` int(4) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `indices`
--
ALTER TABLE `indices`
  MODIFY `id_indice` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
