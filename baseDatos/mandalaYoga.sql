-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 11-02-2024 a las 19:56:29
-- Versión del servidor: 5.7.39
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mandalaYoga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosUsuario`
--

CREATE TABLE `datosUsuario` (
  `idDni` varchar(9) NOT NULL,
  `nombre` int(11) NOT NULL,
  `apellidos` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexo` enum('m','h','o') DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `direc1` varchar(50) DEFAULT NULL,
  `direc2` varchar(50) DEFAULT NULL,
  `direc3` varchar(50) DEFAULT NULL,
  `codigoPostal` int(5) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `titularTarjeta` varchar(50) DEFAULT NULL,
  `numTarjeta` int(16) DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL,
  `mesCaducidad` int(2) DEFAULT NULL,
  `yearCaducidad` int(5) DEFAULT NULL,
  `tipoTarjeta` enum('v','mc','ae') DEFAULT NULL,
  `notificación` tinyint(1) NOT NULL,
  `newsletter` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `idOpcionTipoUsuario` int(11) NOT NULL,
  `nombreOpcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `imgUrl` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `categoria`, `precio`, `imgUrl`, `descripcion`) VALUES
(1, 'Manta de Yoga', 'producYoga', 10.8, 'img/mantas_yoga_azul.png', 'Utiliza una manta de yoga en tus clases y sácale el máximo partido a su versatilidad. La manta de yoga protege tus huesos y articulaciones y aporta firmeza y estabilidad en muchas asanas, sobre todo en Iyengar Yoga. Enróllala, dóblala y úsala como necesites: como un bloque, como un bolster o como un cómodo soporte para tu espalda u hombros.\r\nMaterial: 80% acrílico regenerado de algodón, 20% otras fibras (lana y poliéster) \r\nMedidas: aprox. 140 x 200 cm*\r\nPeso: 1,1 kg'),
(2, 'Bloque de Yoga de Corcho', 'producYoga', 9.5, 'img/yoga_bloque_corcho.png', 'Los bloques de yoga de corcho te ofrecen un apoyo 100% natural para tu práctica de yoga y te ayudan a extender la flexibilidad en numerosas posturas. \r\nTamaño: 23 x 12 x 7,5 cm \r\nPeso: 550 gr'),
(3, 'Cinturón de Yoga', 'producYoga', 9.5, 'img/cinturon_yoga_negro.png', 'El cinturón de yoga es un accesorio para yoga adecuado para todos los niveles de practicantes y que puede resultar muy útil durante la sesión de asanas (posturas de yoga). Este accesorio para yoga ha sido cuidadosamente probado para asegurar su resistencia, así como una buena sujección. \r\nTamaño: 2,5 m x 38 mm \r\nPeso: 170 g \r\nMaterial: 100% algodón \r\nNuevo cierre para mayor seguridad con hebilla rectangular de metal.'),
(4, 'Bolsa para Esterilla de Yoga Asana Bag', 'esterillas', 22.9, 'img/bolsa_para_esterilla_yoga_azul.png', 'Una práctica bolsa para llevar tu esterilla de yoga allá donde necesites. La Bolsa para Esterilla de Yoga Asana Bag tiene dos bolsillos exteriores, una banda ajustable para el hombro. Es impermeable y apta para todas las esterillas de yoga con un grosor máximo de 5 mm y 60 cm de ancho (La esterilla Ganges y Phoenix no caben). \r\nMedidas: 67 cm x 16 cm \r\nMaterial: 100% poliéster lavable'),
(5, 'Arnes de Velcro', 'esterillas', 3.5, 'img/arnesVelcroEsterillaYoga.png', 'Estos dos prácticos arneses de velcro mantienen tu esterilla de yoga enrollada. Con la ayuda del arnés de velcro puedes guardar fácilmente tu esterilla de yoga cuando no la necesites y tenerla lista para cuando vayas al estudio de yoga. Gracias a un generoso cierre de velcro se adapta a todas las esterillas de yoga de nuestra gama.'),
(6, 'Silla de Yoga', 'producYoga', 59.9, 'img/sillaYogaIyengarMetalica.png', 'Silla de yoga para la práctica de Iyengar yoga. \r\n\r\nPeso aproximado: 4 kilogramos \r\nCapacidad de carga máxima: 90 kg\r\nMedidas: L 40 cm, W 40 cm, H 79 cm\r\nAltura del asiento: 42 cm (trasero) - 45 cm (delantero)\r\nColor: gris plateado.\r\nPuede contener alguna imperfección pequeña en pintura de fabrica.'),
(7, 'Espray Desodorizante \"LimpiaMat\" - 50 ml', 'producYoga', 5.9, 'img/yogaMatRefreshEsprayDesodorizante50Ml.png', 'Espray Desodorizante \"LimpiaMat\" para limpiar y dar frescor a tu esterilla de yoga. \r\nEl Espray Desodorizante \"LimpiaMat\" contiene eucalipto, romero, menta y hamamelis. También lo puedes usar para dar frescor a tu cuerpo o refrescar el aire de una habitación. \r\n50 ml'),
(8, 'Almohadilla de Ojos', 'producYoga', 13.9, 'img/almohadillaAlgodonYogaOjosColores.png', 'Calma y relaja el cuerpo y la mente con la almohadilla de aromaterapia específica para ojos. Esta almohadilla es perfecta para relajarse durante Savasana. \r\nTela exterior de la almohadilla: 100% algodón satinado\r\nRelleno de la almohadilla: semillas de lino y lavanda\r\nTamaño: 23 x 11 cm\r\nPeso: 230 g'),
(9, 'Esterilla de Yoga Corcho - Luna', 'esterillas', 79.9, 'img/esterillaYogaCorcho-eco-Luna.png', 'La esterilla de yoga de corcho es ideal para prácticas intensas. Su lado superior de corcho natural proporciona una textura suave y cálida y además es antibacterial gracias a su estructura celular cerrada. El lado inferior es de caucho natural por lo que no se moverá del suelo ni un centímetro. \r\nMaterial: Corcho y caucho 100% naturales \r\nTamaño: 185 x 66 cm \r\nGrosor: 4 mm \r\nPeso: 2,2 kg\r\n'),
(10, 'Esterilla para Yoga y Pilates Ganges - 6mm', 'esterillas', 29.9, 'img/gangesEsterilla.png', 'Si buscas proteger tus articulaciones durante la práctica de yoga, esta esterilla gruesa es ideal para ti. Sus 6 mm de grosor permiten a tus rodillas, caderas, hombros o cuello recibir mayor amortiguación. \r\nTamaño: 186 cm x 60 cm \r\nEspesor: 6 mm \r\nPeso: 1,6 kg'),
(11, 'Esterilla Jada Voyager Ultra Ligera - 1,6mm', 'esterillas', 52.9, 'img/jadeVoyagerViajeOlva.png', 'La Esterilla de Viaje Jade Voyager Ultra Ligera puede enrollarse o doblarse y guardarse fácilmente en bolsos, mochilas o maletas. Nuestra esterilla de viaje ultra ligera está fabricada en caucho natural y ofrece la mayor adherencia del mercado con el menor peso. Utiliza otra esterilla de yoga debajo para lograr una buena amortiguación. \r\nGrosor: 1,6 mm \r\nMedidas: 61 cm x 173 cm \r\nPeso: 0,68 kg'),
(12, 'Taller de Yoga en Silla', 'talleres', 30, 'img/tallerYogaSilla.png', 'Este taller es apto para todos los perfiles y está especialmente destinado a personas que no tienen experiencia con el yoga, que no tienen mucho tiempo y que les complica el tener que cambiarse de ropa o de espacio etc….\r\nEl TALLER YOGA EN SILLA es perfecto para poder dedicar un tiempo diario, en tu puesto de trabajo o teletrabajando.'),
(13, 'Taller de Yoga para Embarazadas', 'talleres', 25, 'img/tallerYogaEmbarazadas.png', 'Una practica de asanas para embarazadas. Creando harmonía y un vínculo más profundo a través de una practica adaptada, cuidada y divertida.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pswd`
--

CREATE TABLE `pswd` (
  `idMailUsuarioPswd` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `idStockProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoUsuario`
--

CREATE TABLE `tipoUsuario` (
  `idTipo` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `cantidad` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoUsuario`
--

INSERT INTO `tipoUsuario` (`idTipo`, `tipo`, `cantidad`) VALUES
(1, 'Administrador', NULL),
(2, 'Cliente', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `idTipoUsuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosUsuario`
--
ALTER TABLE `datosUsuario`
  ADD PRIMARY KEY (`idDni`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD KEY `idOpcionTipoUsuario` (`idOpcionTipoUsuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `pswd`
--
ALTER TABLE `pswd`
  ADD UNIQUE KEY `idUsuarioPswd` (`idMailUsuarioPswd`),
  ADD UNIQUE KEY `idMailUsuarioPswd` (`idMailUsuarioPswd`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD UNIQUE KEY `idStockProducto` (`idStockProducto`);

--
-- Indices de la tabla `tipoUsuario`
--
ALTER TABLE `tipoUsuario`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `idUsuario` (`idUsuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idTipoUsuario` (`idTipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipoUsuario`
--
ALTER TABLE `tipoUsuario`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opciones_ibfk_1` FOREIGN KEY (`idOpcionTipoUsuario`) REFERENCES `tipoUsuario` (`idTipo`);

--
-- Filtros para la tabla `pswd`
--
ALTER TABLE `pswd`
  ADD CONSTRAINT `pswd_ibfk_1` FOREIGN KEY (`idMailUsuarioPswd`) REFERENCES `usuario` (`email`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`idStockProducto`) REFERENCES `productos` (`idProducto`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `datosUsuario` (`idDni`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipoUsuario` (`idTipo`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`email`) REFERENCES `datosUsuario` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
