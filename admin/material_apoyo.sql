-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 07:34 AM
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
  `ruta` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_apoyo`
--

INSERT INTO `material_apoyo` (`id_material`, `seccion`, `nombre`, `ruta`) VALUES
(1, 'Documentos', 'Reporte Avance 2016', 'material/Reporte_Avance_2016.docx'),
(2, 'Documentos', 'Investigaciones', 'material/Investigaciones.pdf'),
(3, 'Normativos', 'Ley del ISSTE', 'material/Ley_del_ISSSTE.pdf'),
(4, 'Normativos', 'Ley Federal de los trabajadores al Servicio del Estado', 'material/LEY_FEDERAL_DE_LOS_TRABAJADORES_AL_SERVICIO_DEL_ESTADO.pdf'),
(5, 'Normativos', 'Ley Federal del Trabajo', 'material/LEY_FEDERAL_DEL_TRABAJO.pdf'),
(6, 'Normativos', 'Manual de Lineamientos TecNM 2016', 'material/Manual_de_Lineamientos_TecNM2016.pdf'),
(7, 'Normativos', 'Marco de Referencia CACEI 2014', 'material/Marco_de_Referencia_CACEI_2014.pdf'),
(8, 'Normativos', 'PolÃ­tica de Equidad de GÃ©nero', 'material/POLITICA_EQUIDAD_DE_GENERO.pdf'),
(9, 'Normativos', 'Reglamento de AfiliaciÃ³n Vigencia de Derechos y Cobranza del ISSTE', 'material/REGLAMENTO_DE_AFILIACION_VIGENCIA_DE_DERECHOS_Y_COBRANZA_ DEL ISSSTE.pdf'),
(10, 'Normativos', 'Reglamento de las Condiciones Generales del Personal de la SEP', 'material/REGLAMENTO_DE_LAS_CONDICIONES_GENERALES_DEL_PERSONAL_DE_LA_SEP.pdf'),
(11, 'Normativos', 'Reglamento de las Condiciones Generales de Trabajo de los Trabajadores de la SEP', 'material/Reglamento_de_las_condiciones_generales_de_trabajo_de_los_trabajadores_de_la_sep.pdf'),
(12, 'Normativos', 'Reglamento del personal Docente', 'material/Reglamento_del_Personal_Docente.pdf'),
(13, 'Normativos', 'Reglamento de Prestaciones EconÃ³micas y Vivienda del ISSTE', 'material/REGLAMENTO_DE_PRESTACIONES_ECONOMICAS_Y_VIVIENDA_DEL_ISSSTE.pdf'),
(14, 'Normativos', 'DiagnÃ³stico Oferta Educativa 2014', 'material/Diagnostico_ITMorelia[2014].pdf'),
(15, 'Normativos', 'CÃ³digo de Ã‰tica', 'material/CODIGO DE ETICA.pdf'),
(16, 'Reglamento', 'Reglamento para Alumnos del Sistema Nacional de Institutos TecnolÃ³gicos', 'material/Reglamento_de_los_Alumnos_del_Sistema_Nacional_de_Institutos_Tecnologicos.pdf'),
(17, 'Reglamento', 'Residencias Profesionales ENE-JUN 2017', 'material/RESIDENCIAS PROFESIONALES ENERO-JUNIO 2017.xlsx'),
(18, 'Reglamento', 'Residencias Profesionales AGO-DIC 2017', 'material/RESIDENCIAS PROFESIONALES AGOSTO- DICIEMBRE 2017.xlsx'),
(19, 'Reglamento', 'Titulaciones ENE-JUN 2017', 'material/listado titulacion ENE-JUN2017.xlsx'),
(20, 'Reglamento', 'Titulaciones AGO-DIC 2017', 'material/listado titulacion AGOSTO-DIC 2017.xlsx'),
(21, 'Materias', '5Â° Congreso ContadurÃ­a - JesÃºs Mancera Macedo', 'material/Reglamento_de_los_Alumnos_del_Sistema_Nacional_de_Institutos_Tecnologicos.pdf'),
(22, 'Materias', 'IntroducciÃ³n al MV - JesÃºs Mancera Macedo', 'material/Investigaciones.pdf'),
(23, 'Ceneval', 'GuÃ­a EXANI-II', 'material/Investigaciones.pdf'),
(26, 'Triptico', 'Exterior', 'material/Investigaciones.pdf'),
(27, 'Triptico', 'Interior', 'material/Investigaciones.pdf');

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
  MODIFY `id_material` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
