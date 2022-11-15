-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 04:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kafeterija`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `kategorijaID` int(11) NOT NULL,
  `nazivKategorije` varchar(155) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`kategorijaID`, `nazivKategorije`) VALUES
(1, 'KAFA'),
(2, 'ČAJEVI'),
(3, 'SVEŽE CEĐENI SOKOVI'),
(4, 'SMOOTHIE'),
(5, 'VODA');

-- --------------------------------------------------------

--
-- Table structure for table `napitak`
--

CREATE TABLE `napitak` (
  `napitakID` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cena` double NOT NULL,
  `vrstaID` int(11) NOT NULL,
  `kategorijaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `napitak`
--

INSERT INTO `napitak` (`napitakID`, `naziv`, `cena`, `vrstaID`, `kategorijaID`) VALUES
(13, 'SINGLE ORIGIN ESPRESSO', 210, 3, 1),
(14, 'SINGLE ORIGIN CAPPUCCINO', 230, 2, 1),
(15, 'TROPIC THUNDER', 360, 1, 4),
(16, 'ICE TEA - breskva', 250, 1, 2),
(18, 'LIMUNADA', 190, 1, 3),
(20, 'CEĐENA POMORANDŽA', 265, 1, 3),
(21, 'MILFORD CAJ - jagoda, limun, šumsko voće', 220, 1, 2),
(22, 'AQUA VIVA 0.75', 240, 1, 5),
(23, 'KNJAZ MILOŠ 0.25', 160, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `vrsta`
--

CREATE TABLE `vrsta` (
  `vrstaID` int(11) NOT NULL,
  `nazivVrste` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vrsta`
--

INSERT INTO `vrsta` (`vrstaID`, `nazivVrste`) VALUES
(1, '/'),
(2, 'BLEND'),
(3, 'NIGHT BLEND'),
(4, 'CUBA'),
(5, 'ETHIOPIA'),
(6, 'CHEMEX');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`kategorijaID`);

--
-- Indexes for table `napitak`
--
ALTER TABLE `napitak`
  ADD PRIMARY KEY (`napitakID`),
  ADD KEY `vrstaID` (`vrstaID`),
  ADD KEY `kategorijaID` (`kategorijaID`);

--
-- Indexes for table `vrsta`
--
ALTER TABLE `vrsta`
  ADD PRIMARY KEY (`vrstaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `kategorijaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `napitak`
--
ALTER TABLE `napitak`
  MODIFY `napitakID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vrsta`
--
ALTER TABLE `vrsta`
  MODIFY `vrstaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `napitak`
--
ALTER TABLE `napitak`
  ADD CONSTRAINT `napitak_ibfk_1` FOREIGN KEY (`vrstaID`) REFERENCES `vrsta` (`vrstaID`),
  ADD CONSTRAINT `napitak_ibfk_2` FOREIGN KEY (`kategorijaID`) REFERENCES `kategorija` (`kategorijaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
