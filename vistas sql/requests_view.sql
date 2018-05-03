-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2018 a las 18:27:02
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sweet_store`
--

-- --------------------------------------------------------

--
-- Estructura para la vista `requests_view`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requests_view`  AS  select `requests_detail_view`.`id_request` AS `id_request`,`requests_detail_view`.`state` AS `state`,`requests_detail_view`.`id_client` AS `id_client`,`requests_detail_view`.`str_state` AS `str_state`,`requests_detail_view`.`date` AS `date`,concat(`requests_detail_view`.`client_name`,' ',`requests_detail_view`.`last_name`) AS `nombre_cliente`,`requests_detail_view`.`rut` AS `rut`,`requests_detail_view`.`iscommercial` AS `iscommercial`,`requests_detail_view`.`commercial_name` AS `commercial_name`,`requests_detail_view`.`address` AS `address`,`requests_detail_view`.`email` AS `email`,`requests_detail_view`.`phone` AS `phone`,`requests_detail_view`.`calle` AS `calle`,`requests_detail_view`.`numero_calle` AS `numero_calle`,sum(`requests_detail_view`.`total`) AS `total_pedido` from `requests_detail_view` group by `requests_detail_view`.`id_request` ;

--
-- VIEW  `requests_view`
-- Datos: Ninguna
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
