-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema RPG_CheatSheet
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema RPG_CheatSheet
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `RPG_CheatSheet` DEFAULT CHARACTER SET utf8 ;
USE `RPG_CheatSheet` ;

-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Users` (
  `idUsers` INT NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(20) NOT NULL,
  `UserPassword` VARCHAR(64) NOT NULL,
  `UserLevel` INT NOT NULL,
  PRIMARY KEY (`idUsers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Deities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Deities` (
  `idDeities` INT NOT NULL,
  `DeityName` VARCHAR(20) NOT NULL,
  `DeityDomains` VARCHAR(50) NOT NULL,
  `DeityPersonality` VARCHAR(70) NOT NULL,
  `DeityLore` VARCHAR(400) NOT NULL,
  `DeityEnemies` VARCHAR(45) NOT NULL,
  `DeityAllies` VARCHAR(45) NOT NULL,
  `DeityHTML` VARCHAR(1000) NULL,
  PRIMARY KEY (`idDeities`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Races`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Races` (
  `idRaces` INT NOT NULL AUTO_INCREMENT,
  `RaceName` VARCHAR(15) NOT NULL,
  `RaceSize` VARCHAR(12) NOT NULL,
  `RaceAbilityScores` VARCHAR(200) NOT NULL,
  `RaceAgeRange` VARCHAR(12) NOT NULL,
  `RaceWeightRange` VARCHAR(15) NOT NULL,
  `RaceHeightRange` VARCHAR(20) NOT NULL,
  `RaceNameList` VARCHAR(200) NOT NULL,
  `RaceFeatures` VARCHAR(500) NOT NULL,
  `RaceLanguages` VARCHAR(100) NOT NULL,
  `RaceHTML` VARCHAR(3000) NULL,
  PRIMARY KEY (`idRaces`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Characters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Characters` (
  `idCharacters` INT NOT NULL AUTO_INCREMENT,
  `CharacterName` VARCHAR(25) NOT NULL,
  `CharacterGender` VARCHAR(6) NULL,
  `CharacterXp` INT NOT NULL,
  `CharacterSTR` INT NOT NULL,
  `CharacterDEX` INT NOT NULL,
  `CharacterCON` INT NOT NULL,
  `CharacterWIS` INT NOT NULL,
  `CharacterINT` INT NOT NULL,
  `CharacterSkills` VARCHAR(50) NOT NULL,
  `CharacterSkillFocus` INT NULL,
  `CharacterInspiration` INT NOT NULL DEFAULT 0,
  `CharacterHP` INT NOT NULL,
  `CharacterPortrait` BLOB NULL,
  `CharacterAlignment` VARCHAR(15) NOT NULL,
  `CharacterDeity` VARCHAR(45) NULL,
  `CharacterPersonalGoal` VARCHAR(45) NULL,
  `CharacterDescription` VARCHAR(100) NULL,
  `CharacterBackstory` VARCHAR(700) NULL,
  `Deities_idDeities` INT NOT NULL,
  `Races_idRaces` INT NOT NULL,
  PRIMARY KEY (`idCharacters`, `Deities_idDeities`, `Races_idRaces`),
  INDEX `fk_Characters_Deities1_idx` (`Deities_idDeities` ASC),
  INDEX `fk_Characters_Races1_idx` (`Races_idRaces` ASC),
  CONSTRAINT `fk_Characters_Deities1`
    FOREIGN KEY (`Deities_idDeities`)
    REFERENCES `RPG_CheatSheet`.`Deities` (`idDeities`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Characters_Races1`
    FOREIGN KEY (`Races_idRaces`)
    REFERENCES `RPG_CheatSheet`.`Races` (`idRaces`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Creatures`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Creatures` (
  `idCreatures` INT NOT NULL AUTO_INCREMENT,
  `CreatureName` VARCHAR(45) NOT NULL,
  `CreatureCR` FLOAT NOT NULL,
  `CreatureAC` INT NOT NULL,
  `CreatureHP` INT NOT NULL,
  `CreatureDesc` VARCHAR(45) NULL,
  `CreatureHTML` VARCHAR(500) NULL,
  `CreatureType` VARCHAR(10) NOT NULL,
  `CreatureToHitMelee` INT NOT NULL,
  `CreatureToHitRanged` INT NOT NULL,
  `CreatureDMGOne` VARCHAR(7) NOT NULL,
  `CreatureGMDTwo` VARCHAR(7) NOT NULL,
  PRIMARY KEY (`idCreatures`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Spells`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Spells` (
  `idSpells` INT NOT NULL AUTO_INCREMENT,
  `SpellName` VARCHAR(45) NOT NULL,
  `SpellType` VARCHAR(45) NOT NULL,
  `SpellSchool` VARCHAR(15) NOT NULL,
  `SpellDescription` VARCHAR(300) NOT NULL,
  `SpellConcentration` VARCHAR(5) NOT NULL,
  `SpellComponents` VARCHAR(8) NOT NULL,
  `SpellMaterialComponents` VARCHAR(50) NULL,
  `SpellDMG` VARCHAR(10) NOT NULL,
  `SpellHTML` VARCHAR(1000) NOT NULL,
  `SpellLevel` INT NOT NULL,
  `SpellCost` VARCHAR(8) NOT NULL,
  PRIMARY KEY (`idSpells`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Classes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Classes` (
  `idClasses` INT NOT NULL AUTO_INCREMENT,
  `ClassName` VARCHAR(12) NOT NULL,
  `ClassSummary` VARCHAR(45) NOT NULL,
  `ClassLevelBenefits` VARCHAR(2000) NOT NULL,
  `ClassHTML` VARCHAR(2000) NULL,
  `ClassHitDie` VARCHAR(45) NOT NULL,
  `ClassBaseAC` INT NOT NULL,
  `ClassSavingThrows` VARCHAR(40) NOT NULL,
  `ClassWeaponProficiencies` VARCHAR(50) NOT NULL,
  `ClassToolProficiencies` VARCHAR(50) NOT NULL,
  `ClassArmorProficiencies` VARCHAR(50) NOT NULL,
  `ClassSkills` VARCHAR(50) NOT NULL,
  `ClassStartingEquipment` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idClasses`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Campaign`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Campaign` (
  `idCampaign` INT NOT NULL,
  `CampaignName` VARCHAR(30) NOT NULL,
  `CampaignLevel` INT NOT NULL,
  `CampaignDescription` VARCHAR(450) NOT NULL,
  `Users_idUsers` INT NOT NULL,
  PRIMARY KEY (`idCampaign`, `Users_idUsers`),
  INDEX `fk_Campaign_Users1_idx` (`Users_idUsers` ASC),
  CONSTRAINT `fk_Campaign_Users1`
    FOREIGN KEY (`Users_idUsers`)
    REFERENCES `RPG_CheatSheet`.`Users` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Items` (
  `idItems` INT NOT NULL,
  `ItemType` VARCHAR(10) NOT NULL,
  `ItemName` VARCHAR(45) NOT NULL,
  `ItemDMG` VARCHAR(10) NULL,
  `ItemRange` VARCHAR(15) NULL,
  `ItemArmorBonus` INT NULL,
  `ItemDescription` VARCHAR(400) NOT NULL,
  `ItemEnhancementBonus` INT NOT NULL,
  `ItemHTML` VARCHAR(1000) NULL,
  PRIMARY KEY (`idItems`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Campaign_Cards`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Campaign_Cards` (
  `idCampaign_Cards` INT NOT NULL,
  `CampCardsDescription` VARCHAR(45) NULL,
  `Campaign_idCampaign` INT NOT NULL,
  `Creatures_idCreatures` INT NOT NULL,
  `Items_idItems` INT NOT NULL,
  PRIMARY KEY (`idCampaign_Cards`, `Campaign_idCampaign`, `Creatures_idCreatures`, `Items_idItems`),
  INDEX `fk_Campaign_Cards_Campaign1_idx` (`Campaign_idCampaign` ASC),
  INDEX `fk_Campaign_Cards_Creatures1_idx` (`Creatures_idCreatures` ASC),
  INDEX `fk_Campaign_Cards_Items1_idx` (`Items_idItems` ASC),
  CONSTRAINT `fk_Campaign_Cards_Campaign1`
    FOREIGN KEY (`Campaign_idCampaign`)
    REFERENCES `RPG_CheatSheet`.`Campaign` (`idCampaign`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Campaign_Cards_Creatures1`
    FOREIGN KEY (`Creatures_idCreatures`)
    REFERENCES `RPG_CheatSheet`.`Creatures` (`idCreatures`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Campaign_Cards_Items1`
    FOREIGN KEY (`Items_idItems`)
    REFERENCES `RPG_CheatSheet`.`Items` (`idItems`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Rule_Cards`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Rule_Cards` (
  `idRuleCards` INT NOT NULL,
  `RuleTitle` VARCHAR(20) NOT NULL,
  `RuleSubject` VARCHAR(45) NOT NULL,
  `RuleContents` VARCHAR(500) NOT NULL,
  `RuleHTML` VARCHAR(45) NULL,
  PRIMARY KEY (`idRuleCards`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Feats`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Feats` (
  `idFeats` INT NOT NULL,
  `FeatName` VARCHAR(20) NOT NULL,
  `FeatAttributeBonus` VARCHAR(100) NOT NULL,
  `FeatSkillBonus` VARCHAR(100) NOT NULL,
  `FeatDescription` VARCHAR(500) NOT NULL,
  `FeatPrerequisutes` VARCHAR(50) NOT NULL,
  `FeatHTML` VARCHAR(1000) NULL,
  PRIMARY KEY (`idFeats`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Classes_has_Spells`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Classes_has_Spells` (
  `Classes_idClasses` INT NOT NULL,
  `Spells_idSpells` INT NOT NULL,
  PRIMARY KEY (`Classes_idClasses`, `Spells_idSpells`),
  INDEX `fk_Classes_has_Spells_Spells1_idx` (`Spells_idSpells` ASC),
  INDEX `fk_Classes_has_Spells_Classes_idx` (`Classes_idClasses` ASC),
  CONSTRAINT `fk_Classes_has_Spells_Classes`
    FOREIGN KEY (`Classes_idClasses`)
    REFERENCES `RPG_CheatSheet`.`Classes` (`idClasses`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Classes_has_Spells_Spells1`
    FOREIGN KEY (`Spells_idSpells`)
    REFERENCES `RPG_CheatSheet`.`Spells` (`idSpells`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Users_has_Characters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Users_has_Characters` (
  `Users_idUsers` INT NOT NULL,
  `Characters_idCharacters` INT NOT NULL,
  PRIMARY KEY (`Users_idUsers`, `Characters_idCharacters`),
  INDEX `fk_Users_has_Characters_Characters1_idx` (`Characters_idCharacters` ASC),
  INDEX `fk_Users_has_Characters_Users1_idx` (`Users_idUsers` ASC),
  CONSTRAINT `fk_Users_has_Characters_Users1`
    FOREIGN KEY (`Users_idUsers`)
    REFERENCES `RPG_CheatSheet`.`Users` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_has_Characters_Characters1`
    FOREIGN KEY (`Characters_idCharacters`)
    REFERENCES `RPG_CheatSheet`.`Characters` (`idCharacters`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Characters_has_Spells`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Characters_has_Spells` (
  `Characters_idCharacters` INT NOT NULL,
  `Spells_idSpells` INT NOT NULL,
  PRIMARY KEY (`Characters_idCharacters`, `Spells_idSpells`),
  INDEX `fk_Characters_has_Spells_Spells1_idx` (`Spells_idSpells` ASC),
  INDEX `fk_Characters_has_Spells_Characters1_idx` (`Characters_idCharacters` ASC),
  CONSTRAINT `fk_Characters_has_Spells_Characters1`
    FOREIGN KEY (`Characters_idCharacters`)
    REFERENCES `RPG_CheatSheet`.`Characters` (`idCharacters`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Characters_has_Spells_Spells1`
    FOREIGN KEY (`Spells_idSpells`)
    REFERENCES `RPG_CheatSheet`.`Spells` (`idSpells`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Characters_has_Items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Characters_has_Items` (
  `Characters_idCharacters` INT NOT NULL,
  `Items_idItems` INT NOT NULL,
  PRIMARY KEY (`Characters_idCharacters`, `Items_idItems`),
  INDEX `fk_Characters_has_Items_Items1_idx` (`Items_idItems` ASC),
  INDEX `fk_Characters_has_Items_Characters1_idx` (`Characters_idCharacters` ASC),
  CONSTRAINT `fk_Characters_has_Items_Characters1`
    FOREIGN KEY (`Characters_idCharacters`)
    REFERENCES `RPG_CheatSheet`.`Characters` (`idCharacters`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Characters_has_Items_Items1`
    FOREIGN KEY (`Items_idItems`)
    REFERENCES `RPG_CheatSheet`.`Items` (`idItems`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Character_Notes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Character_Notes` (
  `idCharacter_Notes` INT NOT NULL AUTO_INCREMENT,
  `CharacterNotes` VARCHAR(200) NOT NULL,
  `Characters_idCharacters` INT NOT NULL,
  PRIMARY KEY (`idCharacter_Notes`, `Characters_idCharacters`),
  INDEX `fk_Character_Notes_Characters1_idx` (`Characters_idCharacters` ASC),
  CONSTRAINT `fk_Character_Notes_Characters1`
    FOREIGN KEY (`Characters_idCharacters`)
    REFERENCES `RPG_CheatSheet`.`Characters` (`idCharacters`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Campaign_has_Characters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Campaign_has_Characters` (
  `Campaign_idCampaign` INT NOT NULL,
  `Characters_idCharacters` INT NOT NULL,
  PRIMARY KEY (`Campaign_idCampaign`, `Characters_idCharacters`),
  INDEX `fk_Campaign_has_Characters_Characters1_idx` (`Characters_idCharacters` ASC),
  INDEX `fk_Campaign_has_Characters_Campaign1_idx` (`Campaign_idCampaign` ASC),
  CONSTRAINT `fk_Campaign_has_Characters_Campaign1`
    FOREIGN KEY (`Campaign_idCampaign`)
    REFERENCES `RPG_CheatSheet`.`Campaign` (`idCampaign`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Campaign_has_Characters_Characters1`
    FOREIGN KEY (`Characters_idCharacters`)
    REFERENCES `RPG_CheatSheet`.`Characters` (`idCharacters`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RPG_CheatSheet`.`Characters_has_Feats`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RPG_CheatSheet`.`Characters_has_Feats` (
  `Characters_idCharacters` INT NOT NULL,
  `Feats_idFeats` INT NOT NULL,
  PRIMARY KEY (`Characters_idCharacters`, `Feats_idFeats`),
  INDEX `fk_Characters_has_Feats_Feats1_idx` (`Feats_idFeats` ASC),
  INDEX `fk_Characters_has_Feats_Characters1_idx` (`Characters_idCharacters` ASC),
  CONSTRAINT `fk_Characters_has_Feats_Characters1`
    FOREIGN KEY (`Characters_idCharacters`)
    REFERENCES `RPG_CheatSheet`.`Characters` (`idCharacters`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Characters_has_Feats_Feats1`
    FOREIGN KEY (`Feats_idFeats`)
    REFERENCES `RPG_CheatSheet`.`Feats` (`idFeats`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
