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
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titel` varchar(50) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `jaartal` int(11) NOT NULL DEFAULT '0',
  `pagina` int(11) NOT NULL DEFAULT '0',
  `prijs` decimal(8,2) NOT NULL,
  `beschrijving` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel codecamp.boeken: ~4 rows (ongeveer)
/*!40000 ALTER TABLE `boeken` DISABLE KEYS */;
INSERT INTO `boeken` (`id`, `titel`, `auteur`, `jaartal`, `pagina`, `prijs`, `beschrijving`) VALUES
	(1, 'De dag van de doden', 'Nicci French', 2018, 365, 9.99, 'De dag van de doden van Nicci French is het achtste en laatste deel in de Frieda Klein-reeks. Frieda gaat voor het laatst de confrontatie aan met Dean Reeve, de man die haar al 8 jaar achtervolgt.'),
	(2, 'Invictus Library - Je bent zoals je denkt', 'Michael Pilarczyk', 2021, 176, 17.95, 'Je Bent Zoals Je Denkt legt uit hoe je gedachten je dagelijkse realiteit creÃ«ren. Zoals je denkt, zo zal je zijn en zo zal je leven zich vormen. Door je eigen denkwijze beter te begrijpen, zal je in staat zijn meer te leven zoals jij dat graag wilt.'),
	(3, 'It Ends With Us', 'Colleen Hoover', 2016, 384, 9.99, 'SOMETIMES the ONE WHO LOVES YOU IS the ONE WHO HURTS YOU the MOST. Lily hasnt always had it easy, but thats never stopped her from working hard for the life she wants.'),
	(4, 'De jongen, de mol, de vos en het paard', 'Charlie Mackesy, Arthur Japin', 2020, 128, 19.99, 'De jongen, de mol, de vos en het paard\', vertaald door Arthur Japin, is een prachtig verhaal van Charlie Mackesy over vriendschap, liefde en jezelf zijn.'),
	(5, 'Wanneer je lichaam nee zegt', 'Gabor Mate', 2020, 320, 14.99, '\'Wanneer je lichaam nee zegt\' van Gabor MatÃ© is een wereldwijd bekend standaardwerk over de onlosmakelijke koppeling tussen lichaam en geest. Nu eindelijk in het Nederlands vertaald!');
/*!40000 ALTER TABLE `boeken` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
