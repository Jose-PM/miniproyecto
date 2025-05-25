-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql211.infinityfree.com
-- Tiempo de generación: 25-05-2025 a las 15:25:27
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_39000880_miniweb_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Catalogo_Peliculas`
--

CREATE TABLE `Catalogo_Peliculas` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `categorias` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '-Violenta  -Descarnada  -Thriller',
  `descripcion` text NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `edad` text NOT NULL,
  `temporadas` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `Catalogo_Peliculas`
--

INSERT INTO `Catalogo_Peliculas` (`id`, `imagen`, `categorias`, `descripcion`, `titulo`, `edad`, `temporadas`) VALUES
(1, 'https://whatsondisneyplus.b-cdn.net/wp-content/uploads/2022/03/prison-break-1024x576.jpg', '-Suspense -Accion -Carcel', 'Un ingeniero brillante se deja encarcelar intencionalmente para salvar a su hermano, condenado a muerte por un crimen que no cometio. Una serie cargada de accion, giros inesperados y un elaborado plan de fuga que desafia todos los limites.', 'Prison Break', '16+', '5 '),
(2, 'https://es.web.img3.acsta.net/pictures/18/04/04/22/52/3191575.jpg', '-Violenta -Descarnada -Thriller', 'Un profesor de quimica diagnosticado con cancer terminal se convierte en fabricante de metanfetamina para asegurar el futuro economico de su familia. La transformacion moral mas intensa de la television, entre crimen, ambicion y consecuencias.', 'Breaking Bad', '16+', '5 '),
(3, 'https://pics.filmaffinity.com/Peaky_Blinders_Serie_de_TV-713495787-large.jpg', '-Violenta -Epoca -Banda Sonora Famosa', 'En el Birmingham de la posguerra, una familia de gánsteres liderada por el ambicioso y calculador Tommy Shelby asciende al poder enfrentando a policias, mafias rivales y su propio pasado. Una mezcla perfecta de drama, violencia y estetica impecable.', 'Peaky Blinders', '18+', '6 '),
(6, 'https://es.web.img3.acsta.net/pictures/22/05/14/13/26/5638861.jpg', '-Ciencia Ficcion -Terror -Aventura', ' Un grupo de jovenes en un enano pueblo descubren fenomenos sobrenaturales y un mundo paralelo llamado \"Upside Down\".', 'Stranger Things', '16+', '4 '),
(7, 'https://estaticos-cdn.prensaiberica.es/clip/092396bf-0774-4357-9aa4-0ac38c43de03_source-aspect-ratio_default_0.jpg', '-Comedia -Sitcom', 'Las divertidas y surrealistas situaciones que viven los vecinos de un edificio en una comunidad de vecinos ficticia en Madrid.', 'Aqui no hay quien viva', '12+', '6 '),
(8, 'https://album.mediaset.es/cimg/807030/2019/11/04/fd2b23d77558dc42c044deff1a02d0f4_4fd3.jpg', '-Comedia -Sitcom', 'Las locas aventuras y problemas cotidianos de los vecinos de un peculiar bloque de pisos en Madrid.', 'La que se avecina', '13+', '13 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Catalogo_Peliculas`
--
ALTER TABLE `Catalogo_Peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Catalogo_Peliculas`
--
ALTER TABLE `Catalogo_Peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
