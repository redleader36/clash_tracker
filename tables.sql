SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `clash` ;
USE `clash` ;

-- -----------------------------------------------------
-- Table `clash`.`clans`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clash`.`clans` (
  `idclans` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `home` BINARY NULL DEFAULT false ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`idclans`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clash`.`players`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clash`.`players` (
  `idplayers` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `thlevel` INT NULL ,
  `playlevel` INT NULL ,
  `trophies` INT NULL ,
  `clan` INT NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`idplayers`, `clan`) ,
  INDEX `fk_player_clan_idx` (`clan` ASC) ,
  CONSTRAINT `fk_player_clan`
    FOREIGN KEY (`clan` )
    REFERENCES `clash`.`clans` (`idclans` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clash`.`wars`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clash`.`wars` (
  `idwar` INT NOT NULL AUTO_INCREMENT ,
  `startTime` DATETIME NULL ,
  `prepareTime` DATETIME NULL ,
  `warTime` VARCHAR(45) NULL ,
  `endTime` VARCHAR(45) NULL ,
  `awayClan` INT NOT NULL ,
  `homeClan` INT NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`idwar`, `awayClan`, `homeClan`) ,
  INDEX `fk_war_clan1_idx` (`awayClan` ASC) ,
  INDEX `fk_war_clan2_idx` (`homeClan` ASC) ,
  CONSTRAINT `fk_war_clan1`
    FOREIGN KEY (`awayClan` )
    REFERENCES `clash`.`clans` (`idclans` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_war_clan2`
    FOREIGN KEY (`homeClan` )
    REFERENCES `clash`.`clans` (`idclans` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clash`.`attacks`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clash`.`attacks` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `stars` INT NULL ,
  `attacker` INT NOT NULL ,
  `defender` INT NOT NULL ,
  `attackscol` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`, `attacker`, `defender`) ,
  INDEX `fk_attack_player1_idx` (`attacker` ASC) ,
  INDEX `fk_attack_player2_idx` (`defender` ASC) ,
  CONSTRAINT `fk_attack_player1`
    FOREIGN KEY (`attacker` )
    REFERENCES `clash`.`players` (`idplayers` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_attack_player2`
    FOREIGN KEY (`defender` )
    REFERENCES `clash`.`players` (`idplayers` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
