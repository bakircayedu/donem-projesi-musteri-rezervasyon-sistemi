-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 11:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran rezarvasyon sistemi`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sahibineGoreRestoranGetir` (IN `rest_id` INT(3))  BEGIN

SELECT * from restoranlar INNER JOIN restoranadres on restoranlar.Restoran_Adres_id = restoranadres.Restoran_Adres_id WHERE Restoran_Sahibi_id = rest_id;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `detaylirestoranlar`
-- (See below for the actual view)
--
CREATE TABLE `detaylirestoranlar` (
`Restoran_id` int(11)
,`Restoran_Sahibi_id` int(3)
,`Restoran_Kapasite` int(6)
,`Restoran_VergiNo` int(15)
,`Restoran_Sef` varchar(44)
,`Restoran_img` text
,`Restoran_tür` varchar(255)
,`Restoran_isim` varchar(255)
,`Restoran_il` varchar(255)
,`Restoran_ilçe` varchar(255)
,`Restoran_mahalle` varchar(255)
,`Restoran_acikadres` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `musteriadres`
--

CREATE TABLE `musteriadres` (
  `Musteri_Adres_id` int(11) NOT NULL,
  `Musteri_il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Musteri_ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Musteri_mahalle` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `musteriler`
--

CREATE TABLE `musteriler` (
  `Musteri_id` int(31) NOT NULL,
  `Musteri_Adres_id` int(3) NOT NULL,
  `Ad` varchar(33) COLLATE utf8_turkish_ci NOT NULL,
  `Soyad` varchar(33) COLLATE utf8_turkish_ci NOT NULL,
  `Telefon` int(14) NOT NULL,
  `Musteri_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Musteri_sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restoranadres`
--

CREATE TABLE `restoranadres` (
  `Restoran_Adres_id` int(3) NOT NULL,
  `Restoran_il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Restoran_ilçe` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Restoran_mahalle` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Restoran_acikadres` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restoranlar`
--

CREATE TABLE `restoranlar` (
  `Restoran_id` int(11) NOT NULL,
  `Restoran_Sahibi_id` int(3) NOT NULL,
  `Restoran_Adres_id` int(3) NOT NULL,
  `Restoran_Kapasite` int(6) NOT NULL,
  `Restoran_VergiNo` int(15) NOT NULL,
  `Restoran_Sef` varchar(44) COLLATE utf8_turkish_ci NOT NULL,
  `Restoran_img` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `Restoran_tür` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Restoran_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restoransahibi`
--

CREATE TABLE `restoransahibi` (
  `Restoran_Sahibi_id` int(31) NOT NULL,
  `Ad` varchar(44) COLLATE utf8_turkish_ci NOT NULL,
  `Soyad` varchar(44) COLLATE utf8_turkish_ci NOT NULL,
  `Telefon` int(14) NOT NULL,
  `Restoran_Sahibi_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Restoran_Sahibi_sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rezervasyonlar`
--

CREATE TABLE `rezervasyonlar` (
  `rezervasyon_id` int(3) NOT NULL,
  `Restoran_id` int(3) NOT NULL,
  `time_sheet_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_sheet`
--

CREATE TABLE `time_sheet` (
  `time_sheet_id` int(11) NOT NULL,
  `saatler` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `time_sheet`
--

INSERT INTO `time_sheet` (`time_sheet_id`, `saatler`) VALUES
(1, '17-18'),
(2, '18-19'),
(3, '19-20'),
(4, '20-21'),
(5, '21-22'),
(6, '22-23');

-- --------------------------------------------------------

--
-- Structure for view `detaylirestoranlar`
--
DROP TABLE IF EXISTS `detaylirestoranlar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detaylirestoranlar`  AS SELECT `restoranlar`.`Restoran_id` AS `Restoran_id`, `restoranlar`.`Restoran_Sahibi_id` AS `Restoran_Sahibi_id`, `restoranlar`.`Restoran_Kapasite` AS `Restoran_Kapasite`, `restoranlar`.`Restoran_VergiNo` AS `Restoran_VergiNo`, `restoranlar`.`Restoran_Sef` AS `Restoran_Sef`, `restoranlar`.`Restoran_img` AS `Restoran_img`, `restoranlar`.`Restoran_tür` AS `Restoran_tür`, `restoranlar`.`Restoran_isim` AS `Restoran_isim`, `restoranadres`.`Restoran_il` AS `Restoran_il`, `restoranadres`.`Restoran_ilçe` AS `Restoran_ilçe`, `restoranadres`.`Restoran_mahalle` AS `Restoran_mahalle`, `restoranadres`.`Restoran_acikadres` AS `Restoran_acikadres` FROM (`restoranlar` join `restoranadres` on(`restoranlar`.`Restoran_Adres_id` = `restoranadres`.`Restoran_Adres_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musteriadres`
--
ALTER TABLE `musteriadres`
  ADD PRIMARY KEY (`Musteri_Adres_id`);

--
-- Indexes for table `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`Musteri_id`),
  ADD KEY `Musteri_Adres_id` (`Musteri_Adres_id`);

--
-- Indexes for table `restoranadres`
--
ALTER TABLE `restoranadres`
  ADD PRIMARY KEY (`Restoran_Adres_id`);

--
-- Indexes for table `restoranlar`
--
ALTER TABLE `restoranlar`
  ADD PRIMARY KEY (`Restoran_id`),
  ADD KEY `Restoran_Adres_id` (`Restoran_Adres_id`) USING BTREE,
  ADD KEY `Restoran_Sahibi_id` (`Restoran_Sahibi_id`);

--
-- Indexes for table `restoransahibi`
--
ALTER TABLE `restoransahibi`
  ADD PRIMARY KEY (`Restoran_Sahibi_id`);

--
-- Indexes for table `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  ADD PRIMARY KEY (`rezervasyon_id`),
  ADD KEY `Restoran_id` (`Restoran_id`),
  ADD KEY `time_sheet_id` (`time_sheet_id`);

--
-- Indexes for table `time_sheet`
--
ALTER TABLE `time_sheet`
  ADD PRIMARY KEY (`time_sheet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musteriadres`
--
ALTER TABLE `musteriadres`
  MODIFY `Musteri_Adres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `Musteri_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restoranadres`
--
ALTER TABLE `restoranadres`
  MODIFY `Restoran_Adres_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `restoranlar`
--
ALTER TABLE `restoranlar`
  MODIFY `Restoran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `restoransahibi`
--
ALTER TABLE `restoransahibi`
  MODIFY `Restoran_Sahibi_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  MODIFY `rezervasyon_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `time_sheet`
--
ALTER TABLE `time_sheet`
  MODIFY `time_sheet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `musteriler`
--
ALTER TABLE `musteriler`
  ADD CONSTRAINT `adrees` FOREIGN KEY (`Musteri_Adres_id`) REFERENCES `musteriadres` (`Musteri_Adres_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restoranlar`
--
ALTER TABLE `restoranlar`
  ADD CONSTRAINT `adres` FOREIGN KEY (`Restoran_Adres_id`) REFERENCES `restoranadres` (`Restoran_Adres_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `restoransaibi` FOREIGN KEY (`Restoran_Sahibi_id`) REFERENCES `restoransahibi` (`Restoran_Sahibi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  ADD CONSTRAINT `rezervasyonlar_ibfk_1` FOREIGN KEY (`Restoran_id`) REFERENCES `restoranlar` (`Restoran_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rezervasyonlar_ibfk_2` FOREIGN KEY (`time_sheet_id`) REFERENCES `time_sheet` (`time_sheet_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
