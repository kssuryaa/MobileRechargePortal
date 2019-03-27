-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2019 at 01:01 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrecharge`
--

-- --------------------------------------------------------

--
-- Table structure for table `offrs`
--

DROP TABLE IF EXISTS `offrs`;
CREATE TABLE IF NOT EXISTS `offrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rchamt` int(11) NOT NULL,
  `tlktime` int(11) NOT NULL,
  `valadity` varchar(50) NOT NULL,
  `operator` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offrs`
--

INSERT INTO `offrs` (`id`, `rchamt`, `tlktime`, `valadity`, `operator`) VALUES
(2, 100, 100, 'lifetime', 'Airtel');

-- --------------------------------------------------------

--
-- Table structure for table `tbcard`
--

DROP TABLE IF EXISTS `tbcard`;
CREATE TABLE IF NOT EXISTS `tbcard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `ccnum` int(11) NOT NULL,
  `expdate` varchar(7) NOT NULL,
  `cvv` int(11) NOT NULL,
  `txnpass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcard`
--

INSERT INTO `tbcard` (`id`, `name`, `ccnum`, `expdate`, `cvv`, `txnpass`) VALUES
(6, '', 12568974, '03/2017', 963, 'amit123'),
(7, 'anjaan', 56984563, '03/2017', 653, 'amit123'),
(11, 'amit1', 20312563, '02/2017', 563, 'amit125');

-- --------------------------------------------------------

--
-- Table structure for table `tboprtr`
--

DROP TABLE IF EXISTS `tboprtr`;
CREATE TABLE IF NOT EXISTS `tboprtr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opratornam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tboprtr`
--

INSERT INTO `tboprtr` (`id`, `opratornam`) VALUES
(1, 'Airtel'),
(2, 'idea'),
(3, 'Tata Docomo'),
(4, 'Jio'),
(5, 'singtel'),
(6, 'Uninor'),
(7, 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `tbrc`
--

DROP TABLE IF EXISTS `tbrc`;
CREATE TABLE IF NOT EXISTS `tbrc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txnnum` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mnum` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `oprtr` varchar(50) NOT NULL,
  `amt` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbrc`
--

INSERT INTO `tbrc` (`id`, `txnnum`, `name`, `mnum`, `type`, `oprtr`, `amt`, `status`) VALUES
(43, 54675292, 'anjaan', '8699556744', 'PREPAID', 'Airtel', 20, 'success'),
(44, 24127197, 'anjaan', '8699559744', 'PREPAID', 'Tata Docomo', 20, 'success'),
(45, 41552734, 'anjaan', '8699559744', 'PREPAID', 'Tata Docomo', 20, 'success'),
(46, 49722290, 'anjaan', '9023372305', 'PREPAID', 'idea', 200, 'success'),
(47, 11212158, 'amit1', '9023372305', 'PREPAID', 'Airtel', 100, 'success'),
(48, 55609130, 'anjaan', '5689458698', 'PREPAID', 'Airtel', 200, 'success'),
(49, 52078247, 'anjaan', '9023372305', 'PREPAID', 'Tata Docomo', 20, 'success'),
(50, 22973632, 'anjaan', '9023372305', 'PREPAID', 'Airtel', 200, 'success'),
(51, 79299926, 'amit1', '9023372305', 'PREPAID', 'Airtel', 300, ''),
(52, 12640380, 'anjaan', '9023372305', 'PREPAID', 'idea', 20, ''),
(53, 58886718, 'amit1', '9023372305', 'PREPAID', 'idea', 20, ''),
(54, 18600463, 'amit1', '9023372305', 'PREPAID', 'Airtel', 200, 'success'),
(55, 6326293, 'anjaan', '9023372305', 'PREPAID', 'Airtel', 20, 'success'),
(56, 77227783, 'anjaan', '9023372305', 'PREPAID', 'Airtel', 20, 'success'),
(57, 79187011, 'amit1', '9023372305', 'PREPAID', 'Airtel', 20, 'success'),
(58, 39877319, 'amit1', '9023372305', 'PREPAID', 'idea', 300, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tbsimdetail`
--

DROP TABLE IF EXISTS `tbsimdetail`;
CREATE TABLE IF NOT EXISTS `tbsimdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nam` varchar(50) NOT NULL,
  `mnum` varchar(10) NOT NULL,
  `usrreg` varchar(50) NOT NULL,
  `mopratr` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbusr`
--

DROP TABLE IF EXISTS `tbusr`;
CREATE TABLE IF NOT EXISTS `tbusr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `usernam` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `usrrol` char(1) NOT NULL,
  `cntnum` varchar(10) NOT NULL,
  `act` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbusr`
--

INSERT INTO `tbusr` (`id`, `name`, `usernam`, `password`, `usrrol`, `cntnum`, `act`, `email`) VALUES
(1, 'Admin', 'admin', 'admin123', 'A', '2345698752', 1, 'akashmrk@gmail.com'),
(4, 'Krishnan', 'krishnan', 'krishnan', 'S', '8754744312', 1, 'radhakrishnan.m2016@vitstudent.ac.in'),
(8, 'radhakrishnan', 'rk16', 'krishnan', 'S', '9876543210', 1, 'akashmrk@gmail.com'),
(9, 'av', 'avudai', 'avudai', 'S', '8754469434', 1, 'm.avudai@gmail.com'),
(10, 'abcd', 'qwerty', 'qwerty', 'S', '8754744312', 1, 'akashmrk@gmail.com'),
(11, 'qwerty', 'qwertyu', 'qwerty', 'S', '8754744312', 1, 'akashmrk@gmail.com'),
(12, 'eeshitha', 'eeshitha', 'eeshitha', 'S', '8754744312', 1, 'eespra110998@gmail.com'),
(13, 'caroline', 'caro', 'caroline', 'S', '8754744312', 1, 'eespra110998@gmail.com'),
(14, 'surya', 'surya', 'suryaks', 'S', '8754744312', 1, 'selvaraj.suryaa@gmail.com'),
(15, 'RadhaKrishnan', 'akashmrk', 'akashmrk', 'S', '8754469434', 1, 'akashmrk@gmail.com'),
(16, 'Vikram', 'vikram', 'vikram', 'S', '9876543210', 1, 'vickyponting1999@gmail.com'),
(17, 'Vikramsuresh', 'vikram1', 'vikram1', 'S', '9876543210', 1, 's.vikram2016@vitstudent.ac.in'),
(18, 'Krish', 'krish', 'krishnan', 'S', '8754744312', 1, 'akashmrk@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
