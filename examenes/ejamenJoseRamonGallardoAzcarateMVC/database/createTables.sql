-- MySQL Workbench Forward Engineering
   /*Sql de creacion de la bdd*/
SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE =
        'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8;
USE `mydb`;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
drop table if exists usuario;
CREATE TABLE IF NOT EXISTS `mydb`.`usuario`
(
    `idusuario`  INT         NOT NULL AUTO_INCREMENT,
    `nombre`     VARCHAR(45) NULL,
    `apellido`   VARCHAR(45) NULL,
    `sexo`       VARCHAR(1)  NULL,
    `edad`       INT         NULL,
    `complexion` VARCHAR(45) NULL,
    `telefono`   VARCHAR(45) NULL,
    PRIMARY KEY (`idusuario`)
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`lugar`
-- -----------------------------------------------------
drop table if exists lugar;
CREATE TABLE IF NOT EXISTS `mydb`.`lugar`
(
    `idlugar`     INT         NOT NULL AUTO_INCREMENT,
    `nombre`      VARCHAR(45) NULL,
    `descripcion` VARCHAR(45) NULL,
    `tipo`        INT         NULL,
    `provincia`   VARCHAR(45) NULL,
    `localidad`   VARCHAR(45) NULL,
    `direccion`   VARCHAR(45) NULL,
    PRIMARY KEY (`idlugar`)
)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`review`
-- -----------------------------------------------------
drop table if exists review;
CREATE TABLE IF NOT EXISTS `mydb`.`review`
(
    `idreview`          INT         NOT NULL AUTO_INCREMENT,
    `Descripcion`       VARCHAR(45) NULL,
    `puntuacion`        INT         NULL,
    `usuario_idusuario` INT         NOT NULL,
    PRIMARY KEY (`idreview`),
    CONSTRAINT `fk_review_usuario1`
        FOREIGN KEY (`usuario_idusuario`)
            REFERENCES `mydb`.`usuario` (`idusuario`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
)
    ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`cita`
-- -----------------------------------------------------
drop table if exists cita;
CREATE TABLE IF NOT EXISTS `mydb`.`cita`
(
    `idcita`                 INT         NOT NULL AUTO_INCREMENT,
    `usuario_propone`        INT         NOT NULL,
    `usuario_acepta`         INT         NOT NULL,
    `fecha`                  DATE        NULL,
    `descripcion`            VARCHAR(45) NULL,
    `lugar_idlugar`          INT         NOT NULL,
    `review_idreviewpropone` INT         NOT NULL,
    `review_idreview`        INT         NOT NULL,

    PRIMARY KEY (`idcita`),
    CONSTRAINT `fk_usuario_has_usuario_usuario`
        FOREIGN KEY (`usuario_propone`)
            REFERENCES `mydb`.`usuario` (`idusuario`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION,
    CONSTRAINT `fk_usuario_has_usuario_usuario1`
        FOREIGN KEY (`usuario_acepta`)
            REFERENCES `mydb`.`usuario` (`idusuario`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION,
    CONSTRAINT `fk_cita_lugar1`
        FOREIGN KEY (`lugar_idlugar`)
            REFERENCES `mydb`.`lugar` (`idlugar`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION,
    CONSTRAINT `fk_cita_review2`
        FOREIGN KEY (`review_idreview`)
            REFERENCES `mydb`.`review` (`idreview`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
)
    ENGINE = InnoDB;


SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;
