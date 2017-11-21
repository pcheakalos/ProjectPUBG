SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pubg
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pubg` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `pubg` ;

-- -----------------------------------------------------
-- Table `pubg`.`Info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pubg`.`Info` (
  `playerid` INT NOT NULL,
  `player_name` VARCHAR(45) NULL,
  `match` VARCHAR(45) NULL,
  `lastUpdated` DATETIME NULL,
  `roundsPlayed` INT NULL,
  `wins` INT NULL,
  `losses` INT NULL,
  `rates` INT NULL,
  `kills` INT NULL,
  `assists` INT NULL,
  `suicides` INT NULL,
  `teamkills` INT NULL,
  `headshotkills` INT NULL,
  `roadkills` INT NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
