-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2022 a las 20:02:57
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(14, 'Mr.', 'Ra', 'Ul', 'Superior Room', 'Double', 1, '2022-05-10', '2022-05-12', 300.00, 426.00, 120.00, 'Breakfast', 6.00, 2),
(16, 'Mr.', 'Pedro', 'Menendez', 'Deluxe Room', 'Double', 1, '2022-05-12', '2022-05-13', 500.00, 910.00, 400.00, 'Full Board', 10.00, 1),
(17, 'Mr.', 'ra', 'Heredia', 'Guest House', 'Single', 2, '2022-05-17', '2022-05-18', 240.00, 265.20, 24.00, 'Breakfast', 1.20, 1),
(39, 'Mr.', 'Marc', 'Carbonell', 'Single Room', 'Single', 1, '2022-05-18', '2022-05-19', 80.00, 80.80, 0.00, 'Room only', 0.80, 1),
(38, 'Mr.', 'Adrian', 'Menendez', 'Guest House', 'Single', 1, '2022-05-17', '2022-05-18', 120.00, 145.20, 24.00, 'Breakfast', 1.20, 1),
(41, 'Mr.', 'daniel', 'collados', 'Superior Room', 'Quad', 2, '2022-05-22', '2022-05-31', 2700.00, 4374.00, 1620.00, 'Half Board', 54.00, 9),
(40, 'Mrs.', 'Judit', 'Barrajon', 'Superior Room', 'Single', 1, '2022-05-18', '2022-05-19', 150.00, 151.50, 0.00, 'Room only', 1.50, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'NotFree', 40),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Superior Room', 'Quad', 'Free', 0),
(5, 'Single Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', 0),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', 0),
(10, 'Guest House', 'Single', 'Free', 0),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'NotFree', 39),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', 0),
(45, 'Superior Room', 'Double', 'Free', 0),
(46, 'Superior Room', 'Single', 'NotFree', 40),
(47, 'Superior Room', 'Single', 'NotFree', 40),
(48, 'Superior Room', 'Single', 'NotFree', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(39, 'Mr.', 'Marc', 'Carbonell', '15585369.clot@fje.edu', 'Español', 'Spain', '622322111', 'Single Room', 'Single', '1', 'Room only', '2022-05-18', '2022-05-19', 'Conform', 1),
(40, 'Mrs.', 'Judit', 'Barrajon', '15586278.clot@fje.edu', 'Español', 'Spain', '644332211', 'Superior Room', 'Single', '1', 'Room only', '2022-05-18', '2022-05-19', 'Conform', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
