-- -----------------------------------------------------
-- Data for table `script_tesina`.`Administradores`
-- -----------------------------------------------------
START TRANSACTION;
USE `script_tesina`;
INSERT INTO `script_tesina`.`Administradores` (`Administradores_Id`, `Nombre`, `Apellido`, `Clave`, `Email`, `Telefono`) VALUES (1, 'Juan', 'Gómez', '1234', 'juangomez@gmail.com', '02944 123455');
INSERT INTO `script_tesina`.`Administradores` (`Administradores_Id`, `Nombre`, `Apellido`, `Clave`, `Email`, `Telefono`) VALUES (2, 'Julian', 'Fernández', '4321', 'julian@gmail.com', '02944 345643');

COMMIT;


-- -----------------------------------------------------
-- Data for table `script_tesina`.`Contactos`
-- -----------------------------------------------------
START TRANSACTION;
USE `script_tesina`;
INSERT INTO `script_tesina`.`Contactos` (`Contactos_id`, `Nombre`, `Apellido`, `Email`, `Telefono`) VALUES (1, 'Pablo', 'Vázquez', 'pablo@gmail.com', '02944 343434');
INSERT INTO `script_tesina`.`Contactos` (`Contactos_id`, `Nombre`, `Apellido`, `Email`, `Telefono`) VALUES (2, 'Fernando', 'Patirri', 'fernando@yahoo.com', '02333 676767');

COMMIT;


-- -----------------------------------------------------
-- Data for table `script_tesina`.`Salas`
-- -----------------------------------------------------
START TRANSACTION;
USE `script_tesina`;
INSERT INTO `script_tesina`.`Salas` (`Salas_Id`, `Descripcion`, `Capacidad`, `Provincia`, `CP`, `Ciudad`, `Calle`, `AlturaCalle`, `Contactos_id`) VALUES (1, 'Bolichón', 200, 'Río Negro', '8400', 'San Carlos de Bariloche', 'Mitre 540', 500, 1);
INSERT INTO `script_tesina`.`Salas` (`Salas_Id`, `Descripcion`, `Capacidad`, `Provincia`, `CP`, `Ciudad`, `Calle`, `AlturaCalle`, `Contactos_id`) VALUES (2, 'La pulpería', 150, 'Río Negro', '8500', 'Viedma', 'Onelli ', 700, 2);

COMMIT;


-- -----------------------------------------------------
-- Data for table `script_tesina`.`Eventos`
-- -----------------------------------------------------
START TRANSACTION;
USE `script_tesina`;
INSERT INTO `script_tesina`.`Eventos` (`Eventos_Id`, `Nombre`, `Descripcion`, `Costo`, `Fecha`, `Hora`, `Administradores_Id`, `Salas_Id`) VALUES (1, 'Almafuerte', 'Recital de Almafuerte, con sus éxitos de ahora y siempre.  Metal puro y nacional.', 450, '2018-12-22', '23:00', 1, 2);
INSERT INTO `script_tesina`.`Eventos` (`Eventos_Id`, `Nombre`, `Descripcion`, `Costo`, `Fecha`, `Hora`, `Administradores_Id`, `Salas_Id`) VALUES (2, 'Catupecu Machu', 'Recital de la banda mas loca del mundo, con toda la potencia y garra', 500, '2018-11-25', '23:30', 2, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `script tesina`.`Entradas`
-- -----------------------------------------------------
INSERT INTO `script_tesina`.`Entradas` (Entradas_id,Eventos_id,Estado)
VALUES
(1,1,'Libre'),
(2,1,'Libre'),
(3,1,'Libre'),
(4,1,'Libre'),
(5,1,'Libre'),
(6,1,'Libre'),
(7,1,'Libre'),
(8,1,'Libre'),
(9,1,'Libre'),
(10,1,'Libre'),
(11,1,'Libre'),
(12,1,'Libre'),
(13,1,'Libre'),
(14,1,'Libre'),
(15,1,'Libre'),
(16,1,'Libre'),
(17,1,'Libre'),
(18,1,'Libre'),
(19,1,'Libre'),
(20,1,'Libre'),
(21,1,'Libre'),
(22,1,'Libre'),
(23,1,'Libre'),
(24,1,'Libre'),
(25,1,'Libre'),
(26,1,'Libre'),
(27,1,'Libre'),
(28,1,'Libre'),
(29,1,'Libre'),
(30,1,'Libre'),
(31,1,'Libre'),
(32,1,'Libre'),
(33,1,'Libre'),
(34,1,'Libre'),
(35,1,'Libre'),
(36,1,'Libre'),
(37,1,'Libre'),
(38,1,'Libre'),
(39,1,'Libre'),
(40,1,'Libre'),
(41,1,'Libre'),
(42,1,'Libre'),
(43,1,'Libre'),
(44,1,'Libre'),
(45,1,'Libre'),
(46,1,'Libre'),
(47,1,'Libre'),
(48,1,'Libre'),
(49,1,'Libre'),
(50,1,'Libre'),
(51,1,'Libre'),
(52,1,'Libre'),
(53,1,'Libre'),
(54,1,'Libre'),
(55,1,'Libre'),
(56,1,'Libre'),
(57,1,'Libre'),
(58,1,'Libre'),
(59,1,'Libre'),
(60,1,'Libre'),
(61,1,'Libre'),
(62,1,'Libre'),
(63,1,'Libre'),
(64,1,'Libre'),
(65,1,'Libre'),
(66,1,'Libre'),
(67,1,'Libre'),
(68,1,'Libre'),
(69,1,'Libre'),
(70,1,'Libre'),
(71,1,'Libre'),
(72,1,'Libre'),
(73,1,'Libre'),
(74,1,'Libre'),
(75,1,'Libre'),
(76,1,'Libre'),
(77,1,'Libre'),
(78,1,'Libre'),
(79,1,'Libre'),
(80,1,'Libre'),
(81,1,'Libre'),
(82,1,'Libre'),
(83,1,'Libre'),
(84,1,'Libre'),
(85,1,'Libre'),
(86,1,'Libre'),
(87,1,'Libre'),
(88,1,'Libre'),
(89,1,'Libre'),
(90,1,'Libre'),
(91,1,'Libre'),
(92,1,'Libre'),
(93,1,'Libre'),
(94,1,'Libre'),
(95,1,'Libre'),
(96,1,'Libre'),
(97,1,'Libre'),
(98,1,'Libre'),
(99,1,'Libre'),
(100,1,'Libre'),
(101,1,'Libre'),
(102,1,'Libre'),
(103,1,'Libre'),
(104,1,'Libre'),
(105,1,'Libre'),
(106,1,'Libre'),
(107,1,'Libre'),
(108,1,'Libre'),
(109,1,'Libre'),
(110,1,'Libre'),
(111,1,'Libre'),
(112,1,'Libre'),
(113,1,'Libre'),
(114,1,'Libre'),
(115,1,'Libre'),
(116,1,'Libre'),
(117,1,'Libre'),
(118,1,'Libre'),
(119,1,'Libre'),
(120,1,'Libre'),
(121,1,'Libre'),
(122,1,'Libre'),
(123,1,'Libre'),
(124,1,'Libre'),
(125,1,'Libre'),
(126,1,'Libre'),
(127,1,'Libre'),
(128,1,'Libre'),
(129,1,'Libre'),
(130,1,'Libre'),
(131,1,'Libre'),
(132,1,'Libre'),
(133,1,'Libre'),
(134,1,'Libre'),
(135,1,'Libre'),
(136,1,'Libre'),
(137,1,'Libre'),
(138,1,'Libre'),
(139,1,'Libre'),
(140,1,'Libre'),
(141,1,'Libre'),
(142,1,'Libre'),
(143,1,'Libre'),
(144,1,'Libre'),
(145,1,'Libre'),
(146,1,'Libre'),
(147,1,'Libre'),
(148,1,'Libre'),
(149,1,'Libre'),
(150,1,'Libre'),
(151,1,'Libre'),
(152,1,'Libre'),
(153,1,'Libre'),
(154,1,'Libre'),
(155,1,'Libre'),
(156,1,'Libre'),
(157,1,'Libre'),
(158,1,'Libre'),
(159,1,'Libre'),
(160,1,'Libre'),
(161,1,'Libre'),
(162,1,'Libre'),
(163,1,'Libre'),
(164,1,'Libre'),
(165,1,'Libre'),
(166,1,'Libre'),
(167,1,'Libre'),
(168,1,'Libre'),
(169,1,'Libre'),
(170,1,'Libre'),
(171,1,'Libre'),
(172,1,'Libre'),
(173,1,'Libre'),
(174,1,'Libre'),
(175,1,'Libre'),
(176,1,'Libre'),
(177,1,'Libre'),
(178,1,'Libre'),
(179,1,'Libre'),
(180,1,'Libre'),
(181,1,'Libre'),
(182,1,'Libre'),
(183,1,'Libre'),
(184,1,'Libre'),
(185,1,'Libre'),
(186,1,'Libre'),
(187,1,'Libre'),
(188,1,'Libre'),
(189,1,'Libre'),
(190,1,'Libre'),
(191,1,'Libre'),
(192,1,'Libre'),
(193,1,'Libre'),
(194,1,'Libre'),
(195,1,'Libre'),
(196,1,'Libre'),
(197,1,'Libre'),
(198,1,'Libre'),
(199,1,'Libre'),
(200,1,'Libre'),
(201,2,'Libre'),
(202,2,'Libre'),
(203,2,'Libre'),
(204,2,'Libre'),
(205,2,'Libre'),
(206,2,'Libre'),
(207,2,'Libre'),
(208,2,'Libre'),
(209,2,'Libre'),
(210,2,'Libre'),
(211,2,'Libre'),
(212,2,'Libre'),
(213,2,'Libre'),
(214,2,'Libre'),
(215,2,'Libre'),
(216,2,'Libre'),
(217,2,'Libre'),
(218,2,'Libre'),
(219,2,'Libre'),
(220,2,'Libre'),
(221,2,'Libre'),
(222,2,'Libre'),
(223,2,'Libre'),
(224,2,'Libre'),
(225,2,'Libre'),
(226,2,'Libre'),
(227,2,'Libre'),
(228,2,'Libre'),
(229,2,'Libre'),
(230,2,'Libre'),
(231,2,'Libre'),
(232,2,'Libre'),
(233,2,'Libre'),
(234,2,'Libre'),
(235,2,'Libre'),
(236,2,'Libre'),
(237,2,'Libre'),
(238,2,'Libre'),
(239,2,'Libre'),
(240,2,'Libre'),
(241,2,'Libre'),
(242,2,'Libre'),
(243,2,'Libre'),
(244,2,'Libre'),
(245,2,'Libre'),
(246,2,'Libre'),
(247,2,'Libre'),
(248,2,'Libre'),
(249,2,'Libre'),
(250,2,'Libre'),
(251,2,'Libre'),
(252,2,'Libre'),
(253,2,'Libre'),
(254,2,'Libre'),
(255,2,'Libre'),
(256,2,'Libre'),
(257,2,'Libre'),
(258,2,'Libre'),
(259,2,'Libre'),
(260,2,'Libre'),
(261,2,'Libre'),
(262,2,'Libre'),
(263,2,'Libre'),
(264,2,'Libre'),
(265,2,'Libre'),
(266,2,'Libre'),
(267,2,'Libre'),
(268,2,'Libre'),
(269,2,'Libre'),
(270,2,'Libre'),
(271,2,'Libre'),
(272,2,'Libre'),
(273,2,'Libre'),
(274,2,'Libre'),
(275,2,'Libre'),
(276,2,'Libre'),
(277,2,'Libre'),
(278,2,'Libre'),
(279,2,'Libre'),
(280,2,'Libre'),
(281,2,'Libre'),
(282,2,'Libre'),
(283,2,'Libre'),
(284,2,'Libre'),
(285,2,'Libre'),
(286,2,'Libre'),
(287,2,'Libre'),
(288,2,'Libre'),
(289,2,'Libre'),
(290,2,'Libre'),
(291,2,'Libre'),
(292,2,'Libre'),
(293,2,'Libre'),
(294,2,'Libre'),
(295,2,'Libre'),
(296,2,'Libre'),
(297,2,'Libre'),
(298,2,'Libre'),
(299,2,'Libre'),
(300,2,'Libre'),
(301,2,'Libre'),
(302,2,'Libre'),
(303,2,'Libre'),
(304,2,'Libre'),
(305,2,'Libre'),
(306,2,'Libre'),
(307,2,'Libre'),
(308,2,'Libre'),
(309,2,'Libre'),
(310,2,'Libre'),
(311,2,'Libre'),
(312,2,'Libre'),
(313,2,'Libre'),
(314,2,'Libre'),
(315,2,'Libre'),
(316,2,'Libre'),
(317,2,'Libre'),
(318,2,'Libre'),
(319,2,'Libre'),
(320,2,'Libre'),
(321,2,'Libre'),
(322,2,'Libre'),
(323,2,'Libre'),
(324,2,'Libre'),
(325,2,'Libre'),
(326,2,'Libre'),
(327,2,'Libre'),
(328,2,'Libre'),
(329,2,'Libre'),
(330,2,'Libre'),
(331,2,'Libre'),
(332,2,'Libre'),
(333,2,'Libre'),
(334,2,'Libre'),
(335,2,'Libre'),
(336,2,'Libre'),
(337,2,'Libre'),
(338,2,'Libre'),
(339,2,'Libre'),
(340,2,'Libre'),
(341,2,'Libre'),
(342,2,'Libre'),
(343,2,'Libre'),
(344,2,'Libre'),
(345,2,'Libre'),
(346,2,'Libre'),
(347,2,'Libre'),
(348,2,'Libre'),
(349,2,'Libre'),
(350,2,'Libre');