-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2018 a las 18:26:06
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
-- Estructura para la vista `requests_detail_view`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requests_detail_view`  AS  select `c`.`calle` AS `calle`,`c`.`numero_calle` AS `numero_calle`,`r`.`id_request` AS `id_request`,`s`.`id` AS `id_sweet`,`st`.`state` AS `str_state`,`r`.`state` AS `state`,`r`.`id_client` AS `id_client`,`r`.`date` AS `date`,`c`.`name` AS `client_name`,`c`.`last_name` AS `last_name`,`c`.`rut` AS `rut`,`c`.`iscommercial` AS `iscommercial`,`c`.`commercial_name` AS `commercial_name`,`c`.`address` AS `address`,`c`.`email` AS `email`,`c`.`phone` AS `phone`,`s`.`name` AS `name`,`s`.`price` AS `price`,`sr`.`quantity` AS `quantity`,(`sr`.`quantity` * `s`.`price`) AS `total` from ((((`requests` `r` join `sweets_request` `sr` on((`r`.`id_request` = `sr`.`id_request`))) join `clients` `c` on((`r`.`id_client` = `c`.`id`))) join `sweets` `s` on((`sr`.`id_sweet` = `s`.`id`))) join `states` `st` on((`st`.`id` = `r`.`state`))) ;

--
-- VIEW  `requests_detail_view`
-- Datos: Ninguna
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
