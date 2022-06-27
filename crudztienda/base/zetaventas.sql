/* 
bdname=zetaventas1


*/


--Tabla administrador

CREATE TABLE `zetaventas`.`administrador` ( `id_admin` INT(10) NOT NULL , `nom_admin` VARCHAR(100) NOT NULL , `email_admin` VARCHAR(100) NOT NULL , `contrasena` VARCHAR(100) NOT NULL , `activo` BOOLEAN NOT NULL , PRIMARY KEY (`id_admin`)) ENGINE = InnoDB;


--Tabla productos
CREATE TABLE `zetaventas1`.`productos` ( `id_producto` INT(10) NOT NULL , `nom_pro` VARCHAR(100) NOT NULL , `referencia` VARCHAR(100) NOT NULL , `stock` INT NOT NULL , `valor_compra` DOUBLE NOT NULL , `valor_venta` DOUBLE NOT NULL , `activo` BOOLEAN NOT NULL , `id_administrador1` INT(10) NOT NULL ,PRIMARY KEY (`id_producto`)) ENGINE = InnoDB;
ALTER TABLE `productos` ADD `foto` VARCHAR(100) NOT NULL AFTER `activo`;
--Tabla Clientes
CREATE TABLE `zetaventas1`.`clientes` ( `id_cliente` INT(10) NOT NULL , `nom_cliente` VARCHAR(100) NOT NULL , `telefono` BIGINT(13) NOT NULL , `email_cliente` VARCHAR(100) NOT NULL , `direccion` VARCHAR(100) NOT NULL , `activo` BOOLEAN NOT NULL ) ENGINE = InnoDB;


---Tabla clientes-productos
CREATE TABLE `zetaventas1`.`clientes` ( `id_cliente` INT(10) NOT NULL , `nom_cliente` VARCHAR(100) NOT NULL , `telefono` BIGINT(13) NOT NULL , `email_cliente` VARCHAR(100) NOT NULL , `direccion` VARCHAR(100) NOT NULL , `activo` BOOLEAN NOT NULL,PRIMARY KEY (`id_cliente`))  ENGINE = InnoDB;


---Tabla ventas
CREATE TABLE `zetaventas1`.`ventas` ( `id_ventas` INT(10) NOT NULL , `nom_cliente` VARCHAR(100) NOT NULL , `cantidad_prod` INT(10) NOT NULL , `valor_total_productos` DOUBLE NOT NULL , `id_cliente2` INT(10) NOT NULL , PRIMARY KEY (`id_ventas`)) ENGINE = InnoDB;



