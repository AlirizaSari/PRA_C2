-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Structuur van  tabel codecamp.boeken wordt geschreven
CREATE TABLE IF NOT EXISTS `boeken` (
  `titel` varchar(50) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `jaartal` int(11) NOT NULL DEFAULT '0',
  `pagina` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp.boeken: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `boeken` DISABLE KEYS */;
INSERT INTO `boeken` (`titel`, `auteur`, `jaartal`, `pagina`) VALUES
	('De dag van de doden', 'Nicci French', 2018, 365),
	('Invictus Library - Je bent zoals je denkt', 'Michael Pilarczyk', 2021, 176),
	('It Ends With Us', 'Colleen Hoover', 2016, 384);
/*!40000 ALTER TABLE `boeken` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
