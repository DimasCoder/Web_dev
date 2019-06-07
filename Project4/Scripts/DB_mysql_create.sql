CREATE TABLE `Seller` (
	`idSeller` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL AUTO_INCREMENT,
	`secondName` varchar(255) NOT NULL AUTO_INCREMENT,
	`age` INT NOT NULL AUTO_INCREMENT,
	`salary` INT NOT NULL AUTO_INCREMENT,
	`phoneNumber` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idSeller`)
);

CREATE TABLE `Provider` (
	`idProvider` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL AUTO_INCREMENT,
	`adress` varchar(255) NOT NULL AUTO_INCREMENT,
	`phoneNumber` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idProvider`)
);

CREATE TABLE `Client` (
	`idClient` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL AUTO_INCREMENT,
	`secondName` varchar(255) NOT NULL AUTO_INCREMENT,
	`phoneNumber` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idClient`)
);

CREATE TABLE `Goods` (
	`idGoods` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL AUTO_INCREMENT,
	`type` varchar(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idGoods`)
);

CREATE TABLE `Realization` (
	`idRealization` INT NOT NULL AUTO_INCREMENT,
	`date` INT NOT NULL AUTO_INCREMENT,
	`idSeller` INT NOT NULL AUTO_INCREMENT,
	`idClient` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idRealization`)
);

CREATE TABLE `RealizationGoods` (
	`idRG` INT NOT NULL AUTO_INCREMENT,
	`idRealization` INT NOT NULL AUTO_INCREMENT,
	`idPG` INT NOT NULL AUTO_INCREMENT,
	`count` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idRG`)
);

CREATE TABLE `ProviderGoods` (
	`idPG` INT NOT NULL,
	`count` INT NOT NULL,
	`price` INT NOT NULL,
	`percentProfit` INT NOT NULL,
	`idGoods` INT NOT NULL,
	`idProvider` INT NOT NULL,
	PRIMARY KEY (`idPG`)
);

ALTER TABLE `Realization` ADD CONSTRAINT `Realization_fk0` FOREIGN KEY (`idSeller`) REFERENCES `Seller`(`idSeller`);

ALTER TABLE `Realization` ADD CONSTRAINT `Realization_fk1` FOREIGN KEY (`idClient`) REFERENCES `Client`(`idClient`);

ALTER TABLE `RealizationGoods` ADD CONSTRAINT `RealizationGoods_fk0` FOREIGN KEY (`idRealization`) REFERENCES `Realization`(`idRealization`);

ALTER TABLE `RealizationGoods` ADD CONSTRAINT `RealizationGoods_fk1` FOREIGN KEY (`idPG`) REFERENCES `Realization`(`idRealization`);

ALTER TABLE `ProviderGoods` ADD CONSTRAINT `ProviderGoods_fk0` FOREIGN KEY (`idGoods`) REFERENCES `Goods`(`idGoods`);

ALTER TABLE `ProviderGoods` ADD CONSTRAINT `ProviderGoods_fk1` FOREIGN KEY (`idProvider`) REFERENCES `Provider`(`idProvider`);

