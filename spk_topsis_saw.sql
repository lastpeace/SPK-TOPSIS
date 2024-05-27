-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for spk_topsis_saw
CREATE DATABASE IF NOT EXISTS `spk_topsis_saw` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `spk_topsis_saw`;

-- Dumping structure for table spk_topsis_saw.alternatives
CREATE TABLE IF NOT EXISTS `alternatives` (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaPeserta` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `penghasilan` int NOT NULL,
  `kepemilikanRumah` int NOT NULL DEFAULT '0',
  `tanggungan` int NOT NULL,
  `ipk` float NOT NULL,
  `kendaraan` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table spk_topsis_saw.alternatives: ~3 rows (approximately)
REPLACE INTO `alternatives` (`id`, `namaPeserta`, `alamat`, `penghasilan`, `kepemilikanRumah`, `tanggungan`, `ipk`, `kendaraan`) VALUES
	(6, 'Amalia', 'majalengka', 3, 4, 3, 3.8, 6),
	(7, 'Amalia', 'majalengka', 3, 4, 3, 3.8, 6),
	(8, 'Raihan Caesario', 'Jl.Swatantra V no 10 09/03 Jatirasa Jatiasih Kota Bekasi', 4, 4, 4, 4, 6);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
