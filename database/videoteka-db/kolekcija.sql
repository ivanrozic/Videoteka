-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kolekcija
CREATE DATABASE IF NOT EXISTS `kolekcija` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `kolekcija`;

-- Dumping structure for table kolekcija.filmovi
CREATE TABLE IF NOT EXISTS `filmovi` (
  `filmovi_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `naslov` varchar(150) NOT NULL,
  `zanr_id` tinyint(3) unsigned NOT NULL,
  `godina` year(4) NOT NULL,
  `trajanje` smallint(5) unsigned NOT NULL,
  `slika` blob DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`filmovi_id`) USING BTREE,
  KEY `idx_naslov` (`naslov`),
  KEY `idx_zanr` (`zanr_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kolekcija.filmovi: ~11 rows (approximately)
/*!40000 ALTER TABLE `filmovi` DISABLE KEYS */;
INSERT INTO `filmovi` (`filmovi_id`, `naslov`, `zanr_id`, `godina`, `trajanje`, `slika`, `last_update`) VALUES
	(1, 'ANTITRUST', 1, '2001', 144, _binary 0x4E554C4C, '2020-06-29 18:26:25'),
	(2, 'FIREWALL', 1, '2006', 133, _binary 0x4E554C4C, '2020-06-15 16:20:05'),
	(3, 'HACKERS', 9, '1995', 105, _binary 0x4E554C4C, '2020-06-15 16:20:05'),
	(4, 'SWORD FISH', 13, '2001', 99, _binary 0x4E554C4C, '2020-06-15 16:20:05'),
	(5, 'TRACK DOWN', 10, '2000', 92, _binary 0x4E554C4C, '2020-06-15 16:20:05'),
	(6, 'PIRATES of SILICON VALLEY', 5, '1999', 95, _binary 0x4E554C4C, '2020-06-15 16:20:05'),
	(7, 'THE SOCIAL NETWORK', 5, '2010', 151, _binary 0x4E554C4C, '2020-06-15 16:20:05'),
	(8, 'TRON', 14, '1982', 92, _binary 0x4E554C4C, '2020-06-15 16:20:05'),
	(9, 'TRON LEGACY', 14, '2010', 125, _binary 0x4E554C4C, '2020-06-15 16:20:05'),
	(10, 'WARGAMES', 1, '1983', 114, _binary 0x4E554C4C, '2020-06-15 16:20:05');
/*!40000 ALTER TABLE `filmovi` ENABLE KEYS */;

-- Dumping structure for table kolekcija.zanr
CREATE TABLE IF NOT EXISTS `zanr` (
  `zanr_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`zanr_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kolekcija.zanr: ~14 rows (approximately)
/*!40000 ALTER TABLE `zanr` DISABLE KEYS */;
INSERT INTO `zanr` (`zanr_id`, `naziv`, `last_update`) VALUES
	(1, 'Akcija, avantura', '2020-06-15 15:10:05'),
	(2, 'Animirani', '2020-06-15 15:10:05'),
	(3, 'Dječji', '2020-06-15 15:10:05'),
	(4, 'Dokumentarni', '2020-06-15 15:10:05'),
	(5, 'Drama', '2020-06-15 15:10:05'),
	(6, 'Glazbeni', '2020-06-15 15:10:05'),
	(7, 'Horor', '2020-06-15 15:10:05'),
	(8, 'Klasici', '2020-06-15 15:10:05'),
	(9, 'Komedija', '2020-06-15 15:10:05'),
	(10, 'Kriminalistički', '2020-06-15 15:10:05'),
	(11, 'Novi', '2020-06-15 15:10:05'),
	(12, 'Obiteljski', '2020-06-15 15:10:05'),
	(13, 'Triler', '2020-06-15 15:10:05'),
	(14, 'Znanstveno-fantastični', '2020-06-15 15:10:05');
/*!40000 ALTER TABLE `zanr` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
