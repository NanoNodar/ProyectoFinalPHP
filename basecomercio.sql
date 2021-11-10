-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2021 a las 13:08:16
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basecomercio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_categoria` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detalle` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recomendado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `id_categoria`, `nombre`, `precio`, `stock`, `url`, `detalle`, `recomendado`) VALUES
(1, 1, '\r\nSMART TV BGH 32 HD B3219H5\r\n', 66000, 10, 'https://http2.mlstatic.com/D_NQ_NP_839733-MLA44230684413_122020-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', 1),
(2, 1, 'SMART TV SAMSUNG 32 PULGADAS UN32T4300AGCZB', 32000, 5, 'https://http2.mlstatic.com/D_NQ_NP_934496-MLA45625835121_042021-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', 1),
(3, 2, 'TABLET VIEWSONIC VIEWPAD M10 10.1\' 32 GB NEGRO', 26000, 10, 'https://http2.mlstatic.com/D_NQ_NP_783793-MLA45064540694_032021-O.webp', 'Tablet de 10.1\" IPS. Procesador Mediatek MTK8167B Quad Core. Capacidad 32Gb / RAM 2Gb. Velocidad del procesador 1,3GHz. USB 2.0 para transferencia de datos y carga. Cama Web delantera 0,3M + trasera 2,0M. Bluetooth 4.1. Lector de tarjetas Micro SD ha', 0),
(4, 2, 'TABLET LENOVO TB104 HD 16 GB NEGRO', 25999, 15, 'https://http2.mlstatic.com/D_NQ_NP_762720-MLA44937366524_022021-O.webp', 'Tab E10 (10.1\", Android)', 1),
(5, 3, 'CELULAR MOTOROLA G9 PLAY XT2083-1 ROSA', 28000, 5, 'https://coppelar.vtexassets.com/arquivos/ids/1568418-1200-auto?v=637631654852600000&width=1200&height=auto&aspect=true', 'Ficha Técnica, EAN  7790894899592, Alto  16.52, Ancho  7.57, Color  ROSA, Garantia  12, Modelo  XT2083-1, Origen  ARGENTINA, Peso  200, Profundidad  0.91, Memoria RAM  4 GB, Bluetooth  5, Camara principal  48 MP + 2MP + 2MP, Camara frontal  8 MP, Con', 0),
(6, 3, 'CELULAR SAMSUNG GALAXY Z FLIP DORADO', 139000, 15, 'https://samsungar.vtexassets.com/arquivos/ids/175479-1200-auto?width=1200&height=auto&aspect=true', 'Celular Galaxy Z Flip. Procesador-Nucleos Octa Core. Tecnologia Dynamic Amoled. Tipo de pantalla FHD+ (1080 x 2636). Tamano de pantalla 6.7\". Camara posterior 12 + 12 Mp. Camara frontal 10 Mp. Grabacion de video UHD 4k (3840 x 2160). Reproduccion de ', 0),
(7, 4, 'Cable USB alarge 2.0', 150, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGFlczmkbyX_7ehVLW3zphd4NSAmIi-j3bfQ&usqp=CAU', 'Cable USB 2.0', 0),
(8, 5, 'Destornillador Plano 200mm Plano 10 Mota', 801, 20, 'https://http2.mlstatic.com/D_NQ_NP_2X_835931-MLA44858363635_022021-F.webp', NULL, 1),
(9, 1, '\r\nSMART TV BGH 32 HD B3219H5\r\n', 66000, 10, 'https://http2.mlstatic.com/D_NQ_NP_839733-MLA44230684413_122020-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', 0),
(10, 1, 'SMART TV SAMSUNG 32 PULGADAS UN32T4300AGCZB', 32000, 5, 'https://http2.mlstatic.com/D_NQ_NP_934496-MLA45625835121_042021-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', 0),
(11, 2, 'TABLET VIEWSONIC VIEWPAD M10 10.1\' 32 GB NEGRO', 26000, 10, 'https://http2.mlstatic.com/D_NQ_NP_783793-MLA45064540694_032021-O.webp', 'Tablet de 10.1\" IPS. Procesador Mediatek MTK8167B Quad Core. Capacidad 32Gb / RAM 2Gb. Velocidad del procesador 1,3GHz. USB 2.0 para transferencia de datos y carga. Cama Web delantera 0,3M + trasera 2,0M. Bluetooth 4.1. Lector de tarjetas Micro SD ha', 0),
(12, 2, 'TABLET LENOVO TB104 HD 16 GB NEGRO', 25999, 15, 'https://http2.mlstatic.com/D_NQ_NP_762720-MLA44937366524_022021-O.webp', 'Tab E10 (10.1\", Android)', 1),
(13, 3, 'CELULAR MOTOROLA G9 PLAY XT2083-1 ROSA', 28000, 5, 'https://coppelar.vtexassets.com/arquivos/ids/1568418-1200-auto?v=637631654852600000&width=1200&height=auto&aspect=true', 'Ficha Técnica, EAN  7790894899592, Alto  16.52, Ancho  7.57, Color  ROSA, Garantia  12, Modelo  XT2083-1, Origen  ARGENTINA, Peso  200, Profundidad  0.91, Memoria RAM  4 GB, Bluetooth  5, Camara principal  48 MP + 2MP + 2MP, Camara frontal  8 MP, Con', 0),
(14, 3, 'CELULAR SAMSUNG GALAXY Z FLIP DORADO', 139000, 15, 'https://samsungar.vtexassets.com/arquivos/ids/175479-1200-auto?width=1200&height=auto&aspect=true', 'Celular Galaxy Z Flip. Procesador-Nucleos Octa Core. Tecnologia Dynamic Amoled. Tipo de pantalla FHD+ (1080 x 2636). Tamano de pantalla 6.7\". Camara posterior 12 + 12 Mp. Camara frontal 10 Mp. Grabacion de video UHD 4k (3840 x 2160). Reproduccion de ', 0),
(15, 4, 'Cable USB alarge 2.0', 150, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGFlczmkbyX_7ehVLW3zphd4NSAmIi-j3bfQ&usqp=CAU', 'Cable USB 2.0', 0),
(16, 5, 'Destornillador Plano 200mm Plano 10 Mota', 801, 20, 'https://http2.mlstatic.com/D_NQ_NP_2X_835931-MLA44858363635_022021-F.webp', NULL, 0),
(17, 1, '\r\nSMART TV BGH 32 HD B3219H5\r\n', 66000, 10, 'https://http2.mlstatic.com/D_NQ_NP_839733-MLA44230684413_122020-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', 1),
(18, 1, 'SMART TV SAMSUNG 32 PULGADAS UN32T4300AGCZB', 32000, 5, 'https://http2.mlstatic.com/D_NQ_NP_934496-MLA45625835121_042021-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', 0),
(19, 2, 'TABLET VIEWSONIC VIEWPAD M10 10.1\' 32 GB NEGRO', 26000, 10, 'https://http2.mlstatic.com/D_NQ_NP_783793-MLA45064540694_032021-O.webp', 'Tablet de 10.1\" IPS. Procesador Mediatek MTK8167B Quad Core. Capacidad 32Gb / RAM 2Gb. Velocidad del procesador 1,3GHz. USB 2.0 para transferencia de datos y carga. Cama Web delantera 0,3M + trasera 2,0M. Bluetooth 4.1. Lector de tarjetas Micro SD ha', 0),
(20, 2, 'TABLET LENOVO TB104 HD 16 GB NEGRO', 25999, 15, 'https://http2.mlstatic.com/D_NQ_NP_762720-MLA44937366524_022021-O.webp', 'Tab E10 (10.1\", Android)', 0),
(21, 3, 'CELULAR MOTOROLA G9 PLAY XT2083-1 ROSA', 28000, 5, 'https://coppelar.vtexassets.com/arquivos/ids/1568418-1200-auto?v=637631654852600000&width=1200&height=auto&aspect=true', 'Ficha Técnica, EAN  7790894899592, Alto  16.52, Ancho  7.57, Color  ROSA, Garantia  12, Modelo  XT2083-1, Origen  ARGENTINA, Peso  200, Profundidad  0.91, Memoria RAM  4 GB, Bluetooth  5, Camara principal  48 MP + 2MP + 2MP, Camara frontal  8 MP, Con', 1),
(22, 3, 'CELULAR SAMSUNG GALAXY Z FLIP DORADO', 139000, 15, 'https://samsungar.vtexassets.com/arquivos/ids/175479-1200-auto?width=1200&height=auto&aspect=true', 'Celular Galaxy Z Flip. Procesador-Nucleos Octa Core. Tecnologia Dynamic Amoled. Tipo de pantalla FHD+ (1080 x 2636). Tamano de pantalla 6.7\". Camara posterior 12 + 12 Mp. Camara frontal 10 Mp. Grabacion de video UHD 4k (3840 x 2160). Reproduccion de ', 0),
(23, 4, 'Cable USB alarge 2.0', 150, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGFlczmkbyX_7ehVLW3zphd4NSAmIi-j3bfQ&usqp=CAU', 'Cable USB 2.0', 1),
(24, 5, 'Destornillador Plano 200mm Plano 10 Mota', 801, 20, 'https://http2.mlstatic.com/D_NQ_NP_2X_835931-MLA44858363635_022021-F.webp', NULL, 0),
(25, 1, '\r\nSMART TV BGH 32 HD B3219H5\r\n', 66000, 10, 'https://http2.mlstatic.com/D_NQ_NP_839733-MLA44230684413_122020-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', 0),
(26, 1, 'SMART TV SAMSUNG 32 PULGADAS UN32T4300AGCZB', 32000, 5, 'https://http2.mlstatic.com/D_NQ_NP_934496-MLA45625835121_042021-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', NULL),
(27, 2, 'TABLET VIEWSONIC VIEWPAD M10 10.1\' 32 GB NEGRO', 26000, 10, 'https://http2.mlstatic.com/D_NQ_NP_783793-MLA45064540694_032021-O.webp', 'Tablet de 10.1\" IPS. Procesador Mediatek MTK8167B Quad Core. Capacidad 32Gb / RAM 2Gb. Velocidad del procesador 1,3GHz. USB 2.0 para transferencia de datos y carga. Cama Web delantera 0,3M + trasera 2,0M. Bluetooth 4.1. Lector de tarjetas Micro SD ha', NULL),
(28, 2, 'TABLET LENOVO TB104 HD 16 GB NEGRO', 25999, 15, 'https://http2.mlstatic.com/D_NQ_NP_762720-MLA44937366524_022021-O.webp', 'Tab E10 (10.1\", Android)', NULL),
(30, 3, 'CELULAR SAMSUNG GALAXY Z FLIP DORADO', 139000, 15, 'https://samsungar.vtexassets.com/arquivos/ids/175479-1200-auto?width=1200&height=auto&aspect=true', 'Celular Galaxy Z Flip. Procesador-Nucleos Octa Core. Tecnologia Dynamic Amoled. Tipo de pantalla FHD+ (1080 x 2636). Tamano de pantalla 6.7\". Camara posterior 12 + 12 Mp. Camara frontal 10 Mp. Grabacion de video UHD 4k (3840 x 2160). Reproduccion de ', NULL),
(31, 4, 'Cable USB alarge 2.0', 150, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGFlczmkbyX_7ehVLW3zphd4NSAmIi-j3bfQ&usqp=CAU', 'Cable USB 2.0', NULL),
(32, 5, 'Destornillador Plano 200mm Plano 10 Mota', 801, 20, 'https://http2.mlstatic.com/D_NQ_NP_2X_835931-MLA44858363635_022021-F.webp', NULL, NULL),
(33, 1, '\r\nSMART TV BGH 32 HD B3219H5\r\n', 66000, 10, 'https://http2.mlstatic.com/D_NQ_NP_839733-MLA44230684413_122020-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', NULL),
(34, 1, 'SMART TV SAMSUNG 32 PULGADAS UN32T4300AGCZB', 32000, 5, 'https://http2.mlstatic.com/D_NQ_NP_934496-MLA45625835121_042021-O.webp', 'Con el Smart TV B3219H5 vas a acceder a las aplicaciones en las que se encuentran tus contenidos favoritos. Además podés navegar por Internet interactuar en redes sociales y divertirte con videojue gos. Sumergite en la pantalla Su resolución HD prese', NULL),
(35, 2, 'TABLET VIEWSONIC VIEWPAD M10 10.1\' 32 GB NEGRO', 26000, 10, 'https://http2.mlstatic.com/D_NQ_NP_783793-MLA45064540694_032021-O.webp', 'Tablet de 10.1\" IPS. Procesador Mediatek MTK8167B Quad Core. Capacidad 32Gb / RAM 2Gb. Velocidad del procesador 1,3GHz. USB 2.0 para transferencia de datos y carga. Cama Web delantera 0,3M + trasera 2,0M. Bluetooth 4.1. Lector de tarjetas Micro SD ha', NULL),
(36, 2, 'TABLET LENOVO TB104 HD 16 GB NEGRO', 25999, 15, 'https://http2.mlstatic.com/D_NQ_NP_762720-MLA44937366524_022021-O.webp', 'Tab E10 (10.1\", Android)', NULL),
(37, 3, 'CELULAR MOTOROLA G9 PLAY XT2083-1 ROSA', 28000, 5, 'https://coppelar.vtexassets.com/arquivos/ids/1568418-1200-auto?v=637631654852600000&width=1200&height=auto&aspect=true', 'Ficha Técnica, EAN  7790894899592, Alto  16.52, Ancho  7.57, Color  ROSA, Garantia  12, Modelo  XT2083-1, Origen  ARGENTINA, Peso  200, Profundidad  0.91, Memoria RAM  4 GB, Bluetooth  5, Camara principal  48 MP + 2MP + 2MP, Camara frontal  8 MP, Con', NULL),
(38, 3, 'CELULAR SAMSUNG GALAXY Z FLIP DORADO', 139000, 15, 'https://samsungar.vtexassets.com/arquivos/ids/175479-1200-auto?width=1200&height=auto&aspect=true', 'Celular Galaxy Z Flip. Procesador-Nucleos Octa Core. Tecnologia Dynamic Amoled. Tipo de pantalla FHD+ (1080 x 2636). Tamano de pantalla 6.7\". Camara posterior 12 + 12 Mp. Camara frontal 10 Mp. Grabacion de video UHD 4k (3840 x 2160). Reproduccion de ', NULL),
(39, 4, 'Cable USB alarge 2.0 ', 1502, 21, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGFlczmkbyX_7ehVLW3zphd4NSAmIi-j3bfQ&usqp=CAU1', 'Cable USB 2.02', NULL),
(40, 5, 'Destornillador Plano 200mm Plano 10 Mota', 801, 20, 'https://http2.mlstatic.com/D_NQ_NP_2X_835931-MLA44858363635_022021-F.webp', NULL, NULL),
(44, 1, 'TV portátil Philips 5500 Series LED HD 24\" 110V/24', 21.999, 300, 'https://http2.mlstatic.com/D_NQ_NP_959513-MLA46540927020_062021-O.webp', 'ráctico y de tan solo 24 \", te va a permitir disfrutar de tus contenidos favoritos en donde sea que estés. Llevalo en un viaje, a tus vacaciones, cuando vayas de campamento y se juegue la final de la copa, ¡todo es posible!', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Tv'),
(2, 'Tablets'),
(3, 'Celulares'),
(4, 'Cables'),
(5, 'Herramientas'),
(6, 'PC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condicion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaIng` datetime NOT NULL DEFAULT current_timestamp(),
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `nombre`, `apellido`, `dni`, `condicion`, `password`, `fechaIng`, `activo`) VALUES
(1, 'mauri', 'Mauricio', 'West', '20022002', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-18 00:55:09', 1),
(2, 'joa', 'Joaquin', 'Sabina', '23008923', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-23 01:12:11', 1),
(3, 'pabs', 'Pablo', 'Sanardi', '234567675', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-23 00:50:09', 1),
(6, 'Mart', 'Martin', 'Perez', '20123123', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-12 19:32:58', 1),
(9, 'jose', 'Jose Pablo', 'Perez', '225983944', 'ususario', '123456', '2021-05-26 00:28:03', 1),
(12, 'pepe', 'pepe', '123232', '', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 18:25:13', 0),
(13, 'pepe', 'pepe', 'lopez', '123232', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 18:25:52', 1),
(14, 'pepe', 'pepe', 'lopez', '123232', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 18:28:15', 1),
(15, 'pepe', 'pepe', 'lopez', '123232', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 18:28:59', 1),
(16, 'pedro', 'pedro', 'west', '123321', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 18:29:24', 1),
(17, 'pepe', 'pepe', 'perez', '2133213', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 18:34:36', 1),
(18, 'pepe', 'pepe', 'perez', '2133213', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 18:39:05', 1),
(19, 'admin', 'administrador', 'admin', '123123', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 19:01:43', 1),
(20, 'admin', 'administrador', 'admin', '123123', 'cliente', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-26 19:05:46', 1),
(22, 'pepe', 'Pedro', 'Sanchez', '23023443', 'cliente', '123456', '2021-07-21 19:30:26', 1),
(23, 'pepe', 'Pedro', 'Sanchez', '23023443', 'cliente', '123456', '2021-07-21 19:31:42', 1),
(24, 'pepe', 'Pedro', 'Sanchez', '23023443', 'cliente', '123456', '2021-07-21 19:31:53', 1),
(25, 'pepe', 'Pedro', 'Sanchez', '23023443', 'cliente', '123456', '2021-07-21 19:32:43', 1),
(27, 'pepe', 'Pedro', 'Sanchez', '23023443', 'cliente', '123456', '2021-07-21 19:33:04', 1),
(28, 'pepe', 'Pedro', 'Sanchez', '23023443', 'cliente', '123456', '2021-07-21 19:33:26', 1),
(34, 'Nano', 'Lucas', 'Asin', 'lucas', 'admin', '12345', '2021-11-04 07:03:56', 1),
(36, 'prueba', 'prueba', 'prueba', 'prueba', 'cliente', '1234', '2021-11-07 15:09:01', 1),
(37, 'jose', 'Jose Pablo', 'Perez', '225983944', 'ususario', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-11-08 09:04:33', 1),
(38, 'prueba', 'prueba', 'prueba', 'prueba', 'cliente', '1234', '2021-11-09 09:00:21', 1),
(39, 'probando definitivo', 'probando definitivo', 'probando definitivo', 'probando definitivo', 'cliente', '1234', '2021-11-10 08:42:34', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_articulos_categoria` (`id_categoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `FK_articulos_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
