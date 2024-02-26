-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2024 a las 22:53:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo_verde`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `nombre`, `descripcion`, `ubicacion`, `imagen`) VALUES
(1, 'Oasis de Huacachina', 'En el destino puedes disfrutar de muchas actividades, como un paseo en buggy por el desierto y el sandboarding en sus dunas. También vale la pena ver la puesta de sol sobre el oasis.\r\n\r\nEn los alrededores del oasis hay otras atracciones que puedes disfrutar, como islas, área de reserva, bodegas, museos, cañones y mucho más. Como los días allá siempre son soleados, puedes visitar el destino en cualquier época del año.', 'Se encuentra a unos 5 kilómetros de la ciudad de Ica, en medio del desierto costero. ', 'https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-4.jpg'),
(2, 'Arequipa\r\n', 'Encontrarás hermosas vistas de montañas, lagunas turquesas y mucho más.\r\nEl Valle Sagrado de los Incas está compuesto por 14 ciudades y pueblos, pero los recorridos suelen consistir en Pisac, Ollantaytambo y Chinchero. Puedes disfrutar de caminatas en la laguna de Piuray, conocer la historia antropológica en el Museo Inkari y aprender sobre las tradiciones del lugar en las diversas comunidades de Lamay.', 'El Valle Sagrado está situado al noreste de Cusco, a una altitud de 2.000 a 2.800 metros sobre el nivel del mar, entre las poblaciones de Pisac y Ollantaytambo.', 'https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-8.jpg'),
(3, 'Lago Titicaca', 'Otra experiencia imperdible que puedes tener en el destino es mirar el cielo nocturno, lleno de estrellas fugaces. Además, en varias islas del lago Titicaca es posible encontrar ruinas arqueológicas precolombinas de las culturas Inca y Tiwanaku.', 'Situado cerca de la ciudad de Puno, puedes ir al lago Titicaca tomando un barco desde el puerto y visitar las islas de Uros y Taquile.', 'https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-2.jpg'),
(4, 'Arequipa', 'Conocida como la ciudad blanca, Arequipa es uno de los lugares más hermosos de Perú, con sus casas de piedra volcánica blanca, que junto al casco histórico fueron declarados Patrimonio de la Humanidad por la UNESCO.\r\n\r\nPuedes conocer la Plaza de Armas, la Catedral de Arequipa, la más grande e importante de la ciudad, la iglesia de La Compañía, el Monasterio de Santa Catalina entre otros.', 'Está cerca de Cusco, así como la ruta para quienes cruzan la frontera con Chile.', 'https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-5.jpg'),
(5, 'Valle Sagrado', 'Está compuesto por 14 ciudades y pueblos, pero los recorridos suelen consistir en Pisac, Ollantaytambo y Chinchero. Puedes disfrutar de caminatas en la laguna de Piuray, conocer la historia antropológica en el Museo Inkari y aprender sobre las tradiciones del lugar en las diversas comunidades de Lamay.', 'Está situado al noreste de Cusco, a una altitud de 2.000 a 2.800 metros sobre el nivel del mar, entre las poblaciones de Pisac y Ollantaytambo.', 'https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-6.jpg'),
(6, 'Lima', 'Para completar la lista de lugares turísticos que debes conocer en Perú, Lima, la capital del país, no podía faltar. Además de las diferentes atracciones que puedes conocer, la ciudad es uno de los mejores destinos culinarios del mundo. Así podrás probar muchos platos típicos, como el Ceviche, Lomo Saltado, Pachamanca entre otros.', 'Está ubicada en la costa central del país, a orillas del océano Pacífico, integrando una extensa y poblada área urbana, flanqueada por el desierto costero.', 'https://www.westernunion.com/blog/wp-content/uploads/2023/11/Agosto-Peru-7-lugares-turisticos-que-debes-conocer-en-Peru-8.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
