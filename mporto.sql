-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_mporto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_mporto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_mporto` DEFAULT CHARACTER SET utf8 ;
USE `db_mporto` ;

-- -----------------------------------------------------
-- Table `db_mporto`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_mporto`.`usuarios` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `perfil` TINYINT(1) NOT NULL,
  `ativo` TINYINT(11) NOT NULL DEFAULT '1',
  `created` DATETIME NULL,
  `modified` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_mporto`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_mporto`.`categorias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(255) NULL,
  `usuario_id` INT UNSIGNED NOT NULL,
  `ativo` TINYINT NOT NULL DEFAULT 1,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usecat_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_usecat`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `db_mporto`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_mporto`.`eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_mporto`.`eventos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(10) UNSIGNED NOT NULL,
  `titulo` VARCHAR(255) NOT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `dataEvento` DATE NULL DEFAULT NULL,
  `categoria_id` INT UNSIGNED NOT NULL,
  `ativo` TINYINT NULL DEFAULT 1,
  `created` DATETIME NULL DEFAULT NULL,
  `modified` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_useeve` (`usuario_id` ASC),
  INDEX `fk_cateve_idx` (`categoria_id` ASC),
  CONSTRAINT `fk_useeve`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `db_mporto`.`usuarios` (`id`),
  CONSTRAINT `fk_cateve`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `db_mporto`.`categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_mporto`.`arquivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_mporto`.`arquivos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(10) UNSIGNED NOT NULL,
  `evento_id` INT(10) UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `titulo` VARCHAR(50) NULL,
  `size` INT(11) NOT NULL,
  `type` VARCHAR(5) NOT NULL,
  `dir` VARCHAR(255) NOT NULL,
  `ativo` TINYINT NULL DEFAULT 1,
  `created` DATETIME NULL DEFAULT NULL,
  `modified` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usefil` (`usuario_id` ASC),
  INDEX `fk_evefil` (`evento_id` ASC),
  CONSTRAINT `fk_evefil`
    FOREIGN KEY (`evento_id`)
    REFERENCES `db_mporto`.`eventos` (`id`),
  CONSTRAINT `fk_usefil`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `db_mporto`.`usuarios` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
