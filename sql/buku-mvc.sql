-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 09:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku-mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `asd`
--

CREATE TABLE `asd` (
  `Kode` int(11) NOT NULL,
  `Nameuser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `KodeProduk` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Penerbit` varchar(100) DEFAULT NULL,
  `Pengarang` varchar(100) DEFAULT NULL,
  `Halaman` varchar(5) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`KodeProduk`, `Judul`, `Tahun`, `Penerbit`, `Pengarang`, `Halaman`, `Harga`) VALUES
(1, 'The Silent In Blue Vol 1', 2003, 'Alexa Compitudo', 'Zun', '203', 12000),
(2, 'The Silent Sinner In Blue Vol 2', 2004, 'Alexa Compitudo', 'Zun & Eida', '212', 12000),
(3, 'The Silent Sinner In Blue Vol 3', 2004, 'Alexa Compitudo', 'Zun & Eida', '193', 12000),
(4, 'Grimoire Marisa', 2012, 'Shanghyai Alice', 'Zun / Oakeri', '345', 140000),
(10, 'Probbiden Scrollery Vol 1', 1122, 'Suzunaan Kosuzu', 'Suzunaan', '1', 1000000),
(11, 'Probbiden Scrollery Vol 2', 1123, 'Suzunaan Kosuzu', 'Suzunaan', '1', 1000100),
(12, 'Probbiden Scrollery Vol 3', 1124, 'Suzunaan Kosuzu', 'Kosuzu, Patchouli, Alice', '1', 1000200),
(13, 'Kosuzu\'s Diary', 2019, 'Suzunaan Kosuzu', 'Kosuzu', '532', 1399999);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `KodeRole` int(11) NOT NULL,
  `NamaRole` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`KodeRole`, `NamaRole`) VALUES
(1, 'Admin'),
(2, 'Staff'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `KodeUser` int(11) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `KodeRole` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`KodeUser`, `Username`, `Password`, `KodeRole`) VALUES
(25, 'adm0n', 'adm0n', 1),
(38, 'muhamed', 'muhamed', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asd`
--
ALTER TABLE `asd`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`KodeProduk`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`KodeRole`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`KodeUser`),
  ADD KEY `KodeRole` (`KodeRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asd`
--
ALTER TABLE `asd`
  MODIFY `Kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `KodeProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `KodeRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `KodeUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tamu`
--
ALTER TABLE `tamu`
  ADD CONSTRAINT `tamu_ibfk_1` FOREIGN KEY (`KodeRole`) REFERENCES `role` (`KodeRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
