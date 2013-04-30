SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `MercadoLibro` ;
CREATE SCHEMA IF NOT EXISTS `MercadoLibro` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `MercadoLibro` ;

-- -----------------------------------------------------
-- Table `MercadoLibro`.`clientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `MercadoLibro`.`clientes` (
  `cedula` BIGINT NOT NULL ,
  `nombre` VARCHAR(30) NULL ,
  `apellido` VARCHAR(30) NULL ,
  `direccion` VARCHAR(45) NULL ,
  `telefono` BIGINT NULL ,
  PRIMARY KEY (`cedula`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MercadoLibro`.`libros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `MercadoLibro`.`libros` (
  `codigo` VARCHAR(10) NOT NULL ,
  `nombre` VARCHAR(50) NULL ,
  `categoria` VARCHAR(30) NULL ,
  `autor` VARCHAR(45) NULL ,
  `editorial` VARCHAR(30) NULL ,
  `edicion` INT NULL ,
  `año` YEAR NULL ,
  PRIMARY KEY (`codigo`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MercadoLibro`.`cliente_ibro`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `MercadoLibro`.`cliente_ibro` (
  `clientes_cedula` BIGINT NOT NULL ,
  `libros_codigo` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`clientes_cedula`, `libros_codigo`) ,
  CONSTRAINT `fk_clientes_has_libros_clientes`
    FOREIGN KEY (`clientes_cedula` )
    REFERENCES `MercadoLibro`.`clientes` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clientes_has_libros_libros1`
    FOREIGN KEY (`libros_codigo` )
    REFERENCES `MercadoLibro`.`libros` (`codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_clientes_has_libros_libros1_idx` ON `MercadoLibro`.`cliente_ibro` (`libros_codigo` ASC) ;

CREATE INDEX `fk_clientes_has_libros_clientes_idx` ON `MercadoLibro`.`cliente_ibro` (`clientes_cedula` ASC) ;


-- -----------------------------------------------------
-- Table `MercadoLibro`.`administrador`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `MercadoLibro`.`administrador` (
  `usuario` VARCHAR(20) NOT NULL ,
  `pass` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`usuario`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
