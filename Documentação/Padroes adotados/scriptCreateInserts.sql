-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `calitech` DEFAULT CHARACTER SET utf8 ;
USE `calitech` ;

-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE Usuario (
  `idUser` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nomeUser` VARCHAR(45) NULL,
  `nascimento` DATE NULL,
  `email` VARCHAR(60) NULL,
  `login` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Aviao`
-- -----------------------------------------------------
CREATE TABLE Aviao (
  `prefixoAviao` VARCHAR(15) NOT NULL,
  `modelo` VARCHAR(45) NULL,
  `fabricante` VARCHAR(45) NULL,
  `qtdAssentos` INT NULL,
  PRIMARY KEY (`prefixoAviao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Voo`
-- -----------------------------------------------------
CREATE TABLE Voo (
  `idVoo` INT NOT NULL,
  `origem` VARCHAR(45) NULL,
  `destino` VARCHAR(45) NULL,
  `dataEmbarque` DATE NULL,
  `dataDesembarque` DATE NULL,
  `prefixoAviao` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idVoo`),
  CONSTRAINT `fk_Voo_Aviao1`
    FOREIGN KEY (`prefixoAviao`)
    REFERENCES Aviao (`prefixoAviao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Passagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `calitech`.`Passagem` (
  `idPassagem` INT NOT NULL,
  `idUser` INT NOT NULL,
  `idVoo` INT NOT NULL,
  `numAssento` INT NULL,
  PRIMARY KEY (`idPassagem`),
  CONSTRAINT `fk_Passagem_Voo1`
    FOREIGN KEY (`idVoo`)
    REFERENCES `calitech`.`Voo` (`idVoo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Passagem_Usuario1`
    FOREIGN KEY (`idUser`)
    REFERENCES `calitech`.`Usuario` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `calitech`.`Admin` (
  `idUser` INT NOT NULL,
  `cargo` VARCHAR(45) NULL,
  PRIMARY KEY (`idUser`),
  CONSTRAINT `fk_Admin_Usuario1`
    FOREIGN KEY (`idUser`)
    REFERENCES `calitech`.`Usuario` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


INSERT INTO Usuario(nomeUser, nascimento, email, login, senha) VALUES ('Joao', '1990-01-01', 'joao@seumail.com', 'joao', '1234');
INSERT INTO Usuario(nomeUser, nascimento, email, login, senha) VALUES ('Jose', '1991-01-01', 'jose@seumail.com', 'jose', '12345');
INSERT INTO Usuario(nomeUser, nascimento, email, login, senha) VALUES ('Roberto', '1992-01-01', 'roberto@seumail.com', 'roberto', '123456');
INSERT INTO Usuario(nomeUser, nascimento, email, login, senha) VALUES ('Ana', '1993-01-01', 'ana@seumail.com', 'ana', '123');
INSERT INTO Usuario(nomeUser, nascimento, email, login, senha) VALUES ('Maria', '1994-01-01', 'maria@seumail.com', 'maria', '234');

Select * from usuario;

INSERT INTO Aviao (prefixoAviao, modelo, fabricante, qtdAssentos) VALUES('QER2345', 'A320', 'AIRBUS', 150);
INSERT INTO Aviao (prefixoAviao, modelo, fabricante, qtdAssentos) VALUES('JKL765', 'A318', 'AIRBUS', 100);
INSERT INTO Aviao (prefixoAviao, modelo, fabricante, qtdAssentos) VALUES('VBN563', '737', 'BOEING', 180);
INSERT INTO Aviao (prefixoAviao, modelo, fabricante, qtdAssentos) VALUES('GHU2341', 'CS172', 'CESSNA', 150);

Select * from Aviao;

INSERT INTO Voo (idVoo, origem, destino, dataEmbarque, dataDesembarque, prefixoAviao) VALUES (100, 'LAX', 'CGH', '2019-12-05','2019-12-06','QER2345');
INSERT INTO Voo (idVoo, origem, destino, dataEmbarque, dataDesembarque, prefixoAviao) VALUES (101, 'CGH', 'SSA', '2019-12-06','2019-12-06','VBN563');
INSERT INTO Voo (idVoo, origem, destino, dataEmbarque, dataDesembarque, prefixoAviao) VALUES (102, 'FLN', 'GIG', '2019-12-03','2019-12-03','JKL765');
INSERT INTO Voo (idVoo, origem, destino, dataEmbarque, dataDesembarque, prefixoAviao) VALUES (103, 'GIG', 'FLN', '2019-12-05','2019-12-05','GHU2341');
INSERT INTO Voo (idVoo, origem, destino, dataEmbarque, dataDesembarque, prefixoAviao) VALUES (104, 'SSA', 'LAX', '2019-12-08','2019-12-09','JKL765');

select * from voo;

INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) VALUES (2001, 2, 100, 23);
INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) VALUES (2002, 3, 100, 34);
INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) VALUES (2003, 3, 102, 14);
INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) VALUES (2004, 4, 102, 56);
INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) VALUES (2005, 4, 104, 32);
INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) VALUES (2006, 3, 103, 64);
INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) VALUES (2007, 5, 104, 11);

select * from Passagem;

INSERT INTO Admin (idUser, cargo) Values (1, 'Atendente');

Select * from admin;

Select U.nomeUser, P.idPassagem, P.numAssento, V.idVoo, V.dataEmbarque, V.origem, V.Destino
from Usuario U, Passagem P, Voo V
Where U.idUser = P.idUser AND P.idVoo = V.idVoo;





SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
