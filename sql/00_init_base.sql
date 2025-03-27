USE Info411_brawl;

CREATE TABLE IF NOT EXISTS `brawlers` (
    `Nom` VARCHAR(100) NOT NULL,
    `Pouvoir_star` VARCHAR(100) NOT NULL,
    `Niveau` INT(11) NOT NULL,
    `Trophees` INT(11) NOT NULL,
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY
);