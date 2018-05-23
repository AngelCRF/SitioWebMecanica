-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 05:16 AM
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
-- Table structure for table `material_apoyo`
--

CREATE TABLE `material_apoyo` (
  `id_material` int(4) NOT NULL,
  `seccion` varchar(15) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_apoyo`
--

INSERT INTO `material_apoyo` (`id_material`, `seccion`, `nombre`, `ruta`) VALUES
(2, 'Documentos', 'Prueba Documentos', 'material/vpn.docx'),
(3, 'Materias', 'Documentos de materias', 'material/vpn.docx'),
(4, 'Materias', 'Documento 2', 'material/vpn.docx'),
(5, 'Triptico', 'Interior', 'material/vpn.docx'),
(6, 'Normativos', 'Hola', 'material/AFLaesUII.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `material_apoyo`
--
ALTER TABLE `material_apoyo`
  ADD PRIMARY KEY (`id_material`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `material_apoyo`
--
ALTER TABLE `material_apoyo`
  MODIFY `id_material` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
