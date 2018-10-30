
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

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
INSERT INTO `script_tesina`.`Contactos` (`Contactos_Id`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Clave`) VALUES (1, 'Pablo', 'Vázquez', 'pablo@gmail.com', '02944 343434', '1234');
INSERT INTO `script_tesina`.`Contactos` (`Contactos_Id`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Clave`) VALUES (2, 'Fernando', 'Patirri', 'fernando@yahoo.com', '02333 676767', 'hola');
INSERT INTO `script_tesina`.`Contactos` (`Contactos_Id`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Clave`) VALUES (3, 'Julian', 'Gómez', 'juli@mail.com', '02944 3455787', '1234');

COMMIT;


-- -----------------------------------------------------
-- Data for table `script_tesina`.`Salas`
-- -----------------------------------------------------
START TRANSACTION;
USE `script_tesina`;
INSERT INTO `script_tesina`.`Salas` (`Salas_Id`, `Descripcion`, `Capacidad`, `Provincia`, `CP`, `Ciudad`, `Calle`, `AlturaCalle`, `Contactos_Id`) VALUES (1, 'Bolichón', 200, 'Río Negro', '8400', 'San Carlos de Bariloche', 'Mitre 540', 500, 1);
INSERT INTO `script_tesina`.`Salas` (`Salas_Id`, `Descripcion`, `Capacidad`, `Provincia`, `CP`, `Ciudad`, `Calle`, `AlturaCalle`, `Contactos_Id`) VALUES (2, 'La pulpería', 150, 'Río Negro', '8500', 'Viedma', 'Onelli ', 700, 2);

COMMIT;


-- -----------------------------------------------------
-- Data for table `script_tesina`.`Eventos`
-- -----------------------------------------------------
START TRANSACTION;
USE `script_tesina`;
INSERT INTO `script_tesina`.`Eventos` (`Eventos_Id`, `Nombre`, `Descripcion`, `Costo`, `Fecha`, `Hora`, `Administradores_Id`, `Salas_Id`) VALUES (1, 'Almafuerte', 'Recital de Almafuerte, con sus éxitos de ahora y siempre.  Metal puro y nacional.', 450, '2018-12-25', '23:00', 1, 1);
INSERT INTO `script_tesina`.`Eventos` (`Eventos_Id`, `Nombre`, `Descripcion`, `Costo`, `Fecha`, `Hora`, `Administradores_Id`, `Salas_Id`) VALUES (2, 'Catupecu Machu', 'Recital de la banda mas loca del mundo, con toda la potencia y garra', 500, '2018-11-30', '23:30', 2, 2);

COMMIT;
