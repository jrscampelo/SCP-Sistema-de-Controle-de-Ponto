-- MySQL Script generated by MySQL Workbench
-- 10/28/15 16:03:44
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Local_Trabalho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Local_Trabalho` (
  `idLocal_Trabalho` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`idLocal_Trabalho`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Tutor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Tutor` (
  `idTutor` INT(11) NOT NULL AUTO_INCREMENT,
  `siap` VARCHAR(15) NULL,
  `nome` VARCHAR(200) NULL,
  `username` VARCHAR(200) NULL,
  `password` VARCHAR(200) NULL,
  `idLocal_Trabalho_Tutor` INT(11) NULL,
  `auth_key` VARCHAR(45) NULL,
  `acess_token` VARCHAR(45) NULL,
  `password_reset_token` VARCHAR(45) NULL,
  PRIMARY KEY (`idTutor`),
  INDEX `idLocal_Trabalho_idx` (`idLocal_Trabalho_Tutor` ASC),
  CONSTRAINT `idLocal_Trabalho`
    FOREIGN KEY (`idLocal_Trabalho_Tutor`)
    REFERENCES `mydb`.`Local_Trabalho` (`idLocal_Trabalho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Bolsista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Bolsista` (
  `idBolsista` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL,
  `turno` VARCHAR(45) NULL,
  `matricula` VARCHAR(45) NULL,
  `horas_trabalhadas` INT(11) NULL,
  `idTutor` INT(11) NULL,
  `idLocal_Trabalho` INT(11) NULL,
  `username` VARCHAR(200) NULL,
  `password` VARCHAR(200) NULL,
  `auth_key` VARCHAR(45) NULL,
  `acess_token` VARCHAR(45) NULL,
  `password_reset_token` VARCHAR(45) NULL,
  PRIMARY KEY (`idBolsista`),
  INDEX `idTutor_idx` (`idTutor` ASC),
  INDEX `idLocalTrabalho_idx` (`idLocal_Trabalho` ASC),
  CONSTRAINT `idTutor`
    FOREIGN KEY (`idTutor`)
    REFERENCES `mydb`.`Tutor` (`idTutor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idLocalTrabalho`
    FOREIGN KEY (`idLocal_Trabalho`)
    REFERENCES `mydb`.`Local_Trabalho` (`idLocal_Trabalho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ponto_Eletronico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Ponto_Eletronico` (
  `idPonto_Eletronico` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATE NULL,
  `hora_Chegada` DATETIME NULL,
  `hora_saida` DATETIME NULL,
  `tipoFrequencia` VARCHAR(45) NULL,
  `idBolsista` INT(11) NULL,
  PRIMARY KEY (`idPonto_Eletronico`),
  INDEX `idBolsista_idx` (`idBolsista` ASC),
  CONSTRAINT `idBolsista`
    FOREIGN KEY (`idBolsista`)
    REFERENCES `mydb`.`Bolsista` (`idBolsista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
