SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `mercadolibro` ;
CREATE SCHEMA IF NOT EXISTS `mercadolibro` DEFAULT CHARACTER SET latin1 ;
USE `mercadolibro` ;

-- -----------------------------------------------------
-- Table `mercadolibro`.`cliente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mercadolibro`.`cliente` (
  `cedula` VARCHAR(15) NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(45) NOT NULL ,
  `telefono` VARCHAR(12) NOT NULL ,
  `contrasena` VARCHAR(50) NOT NULL ,
  `correo` VARCHAR(45) NOT NULL ,
  `cuenta` VARCHAR(45) NOT NULL ,
  `fondos` DOUBLE NULL DEFAULT '0' ,
  PRIMARY KEY (`cedula`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE UNIQUE INDEX `cuenta_UNIQUE` ON `mercadolibro`.`cliente` (`cuenta` ASC) ;


-- -----------------------------------------------------
-- Table `mercadolibro`.`libro`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mercadolibro`.`libro` (
  `codigo` VARCHAR(10) NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `portada` LONGBLOB NOT NULL ,
  `valor` INT(11) NOT NULL ,
  `autor` VARCHAR(45) NOT NULL ,
  `categoria` VARCHAR(45) NOT NULL ,
  `editorial` VARCHAR(45) NOT NULL ,
  `anio` DATE NOT NULL ,
  `edicion` VARCHAR(45) NOT NULL ,
  `descripcion` VARCHAR(45) NOT NULL ,
  `cantidad` INT(11) NOT NULL ,
  PRIMARY KEY (`codigo`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mercadolibro`.`super_factura`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mercadolibro`.`super_factura` (
  `n_factura` VARCHAR(4) NOT NULL ,
  `cod_cliente` VARCHAR(45) NOT NULL ,
  `valor_total` INT(11) NOT NULL ,
  `fecha_pago` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
  PRIMARY KEY (`n_factura`) ,
  CONSTRAINT `emp_cliente`
    FOREIGN KEY (`cod_cliente` )
    REFERENCES `mercadolibro`.`cliente` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `emp_cliente_idx` ON `mercadolibro`.`super_factura` (`cod_cliente` ASC) ;


-- -----------------------------------------------------
-- Table `mercadolibro`.`factura`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mercadolibro`.`factura` (
  `idfac` VARCHAR(4) NOT NULL ,
  `cod_libro` VARCHAR(45) NOT NULL ,
  `valor` INT(11) NOT NULL ,
  `cantidad` INT(11) NOT NULL DEFAULT '1' ,
  `valor_total` INT(11) NOT NULL ,
  PRIMARY KEY (`idfac`, `cod_libro`) ,
  CONSTRAINT `foranea_libro`
    FOREIGN KEY (`cod_libro` )
    REFERENCES `mercadolibro`.`libro` (`codigo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `v`
    FOREIGN KEY (`idfac` )
    REFERENCES `mercadolibro`.`super_factura` (`n_factura` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `emplibro_idx` ON `mercadolibro`.`factura` (`cod_libro` ASC) ;

CREATE INDEX `v_idx` ON `mercadolibro`.`factura` (`idfac` ASC) ;

USE `mercadolibro` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
