-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 26-09-2019 a las 18:50:41
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `municipioReyes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticiasMun`
--

CREATE TABLE `noticiasMun` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(255) NOT NULL,
  `cuerpoNoticia` varchar(2000) NOT NULL,
  `fechaNoticia` date NOT NULL,
  `imgNoticia` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticiasMun`
--

INSERT INTO `noticiasMun` (`idNoticia`, `tituloNoticia`, `cuerpoNoticia`, `fechaNoticia`, `imgNoticia`) VALUES
(1, 'ENTREGA DEL NOMBRAMIENTO DE LOS PUEBLOS Y BARRIOS ORIGINARIOS DE LA ZONA ORIENTE DEL ESTADO DE MÉXICO, A LA LIC. OLGA MEDINA SERRANO.', 'El día de hoy la Presidenta Municipal de La Paz', '2019-06-21', 'entrega.jpg'),
(7, 'El IMCUFIDE de La Paz, realiza con éxito la 2da Carrera por La Paz y La Salud.', 'El Instituto Municipal de Cultura Física y Deporte de La Paz, llevo a cabo la Segunda Carrera por La Paz y la Salud, donde participaron más de 400 personas. Entre los participantes se encontraban niños, jóvenes, adultos y personas de la tercera edad, quienes fueron los encargados de llenar de alegría y entusiasmo nuestro magno evento. La Presidenta Municipal de La Paz, Lic. Olga Medina Serrano, tuvo el privilegio de dar el banderazo de salida a todos los participantes de la carrera. Durante la previa al inicio de dicho evento, la Presidenta Municipal exhorto a los padres de familia presentes, a incentivar en sus hijos desde una temprana edad, el amor por el deporte, pues menciono que será una parte fundamental para el pleno desarrollo tanto físico, emocional y psicológico, que les permitirá ser disciplinados y puedan lograr todo lo que se propongan. Finalmente, a todos los participantes se les otorgo una medalla reconociendo su esfuerzo y a la gran mayoría se les regalaron gorras y playeras como recuerdo de este gran acontecimiento.', '2019-09-04', 'imcufide.jpg'),
(8, 'La Presidenta Municipal de La Paz, Lic. Olga Medina Serrano, hizo entrega de patrullas,Armamento, Municiones y Equipamiento Policial, para fortalecer la Seguridad Pública de La Paz.', '', '2019-07-05', 'patrulla.jpg'),
(9, 'El Gobierno Municipal de La Paz, Administración 2019-2021, compra una retroexcavadora para brindar servicios de calidad a los habitantes de La Paz.', '', '2019-09-06', 'tractor.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticiasMun`
--
ALTER TABLE `noticiasMun`
  ADD PRIMARY KEY (`idNoticia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticiasMun`
--
ALTER TABLE `noticiasMun`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;