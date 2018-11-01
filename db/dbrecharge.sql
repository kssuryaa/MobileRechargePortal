-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 05:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbrecharge`
--

-- --------------------------------------------------------

--
-- Table structure for table `dthoffrs`
--

CREATE TABLE IF NOT EXISTS `dthoffrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rchamt` int(11) NOT NULL,
  `valadity` varchar(50) NOT NULL,
  `operator` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dthoffrs`
--

INSERT INTO `dthoffrs` (`id`, `rchamt`, `valadity`, `operator`) VALUES
(1, 200, '30 days', 'Airtel Digital TV');

-- --------------------------------------------------------

--
-- Table structure for table `offrs`
--

CREATE TABLE IF NOT EXISTS `offrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rchamt` int(11) NOT NULL,
  `tlktime` int(11) NOT NULL,
  `valadity` varchar(50) NOT NULL,
  `operator` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offrs`
--

INSERT INTO `offrs` (`id`, `rchamt`, `tlktime`, `valadity`, `operator`) VALUES
(2, 100, 100, 'lifetime', 'Airtel');

-- --------------------------------------------------------

--
-- Table structure for table `tbbank`
--

CREATE TABLE IF NOT EXISTS `tbbank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unam` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `usrnam` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `transpass` varchar(50) NOT NULL,
  `accnum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbbank`
--

INSERT INTO `tbbank` (`id`, `unam`, `name`, `bname`, `usrnam`, `pass`, `transpass`, `accnum`) VALUES
(3, 'anjaan', 'Anjaan', 'Uco Bank', 'anjaan', 'anjaan123', 'anjaan12', 56984563),
(8, 'amit1', 'Amit', 'Indian Bank', 'amit123', 'amit234', '234amit', 21456986),
(9, 'amit1', 'Amit Kumar', 'SBI', 'amit234', '123amit', 'am123it', 65896324),
(10, 'amit1', 'rohit', 'Uco Bank', 'rohit', 'rohit123', '123rohit', 23654789);

-- --------------------------------------------------------

--
-- Table structure for table `tbbanknm`
--

CREATE TABLE IF NOT EXISTS `tbbanknm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbbanknm`
--

INSERT INTO `tbbanknm` (`id`, `bname`) VALUES
(1, 'Uco Bank'),
(2, 'Indian Bank'),
(3, 'SBI'),
(4, 'ICICI Bank'),
(5, 'Punjab National Bank');

-- --------------------------------------------------------

--
-- Table structure for table `tbcard`
--

CREATE TABLE IF NOT EXISTS `tbcard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `ccnum` int(11) NOT NULL,
  `expdate` varchar(7) NOT NULL,
  `cvv` int(11) NOT NULL,
  `txnpass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbcard`
--

INSERT INTO `tbcard` (`id`, `name`, `ccnum`, `expdate`, `cvv`, `txnpass`) VALUES
(6, '', 12568974, '03/2017', 963, 'amit123'),
(7, 'anjaan', 56984563, '03/2017', 653, 'amit123'),
(11, 'amit1', 20312563, '02/2017', 563, 'amit125');

-- --------------------------------------------------------

--
-- Table structure for table `tbcomplaints`
--

CREATE TABLE IF NOT EXISTS `tbcomplaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cmpnum` int(11) NOT NULL,
  `usrnam` varchar(50) NOT NULL,
  `usrmnum` varchar(10) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `usreml` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbcomplaints`
--

INSERT INTO `tbcomplaints` (`id`, `cmpnum`, `usrnam`, `usrmnum`, `complaint`, `usreml`) VALUES
(3, 98590087, 'Amit', '8699559744', 'not working', 'aindoria@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbdthoprtr`
--

CREATE TABLE IF NOT EXISTS `tbdthoprtr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oprtr` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbdthoprtr`
--

INSERT INTO `tbdthoprtr` (`id`, `oprtr`) VALUES
(1, 'Airtel Digital TV'),
(2, 'TATA SKY'),
(3, 'DISH TV');

-- --------------------------------------------------------

--
-- Table structure for table `tbdthrc`
--

CREATE TABLE IF NOT EXISTS `tbdthrc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txnnum` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dthid` varchar(10) NOT NULL,
  `oprtr` varchar(50) NOT NULL,
  `amt` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tbdthrc`
--

INSERT INTO `tbdthrc` (`id`, `txnnum`, `name`, `dthid`, `oprtr`, `amt`, `status`) VALUES
(7, 29284667, 'amit1', '300551465', 'Airtel Digital TV', 200, 'success'),
(11, 53781127, 'amit1', '3005514659', 'Airtel Digital TV', 200, 'success'),
(14, 99942016, 'amit1', '3005514659', 'TATA SKY', 200, 'success'),
(15, 73541259, 'amit1', '3005514659', 'Airtel Digital TV', 200, 'success'),
(16, 25546264, 'amit1', '2564896585', 'TATA SKY', 200, 'failed'),
(23, 91921997, 'anjaan', '3005514659', 'Airtel Digital TV', 200, 'success'),
(24, 78088378, 'anjaan', '3005514659', 'Airtel Digital TV', 200, 'success'),
(26, 12091064, 'amit1', '3005514659', 'Airtel Digital TV', 500, 'success'),
(27, 42303466, 'amit1', '3005514659', 'Airtel Digital TV', 500, 'success'),
(28, 53530883, 'anjaan', '3005514659', 'Airtel Digital TV', 200, 'success'),
(29, 89974975, 'anjaan', '3005514659', 'Airtel Digital TV', 200, 'success'),
(30, 75308227, 'amit1', '3005514659', 'Airtel Digital TV', 200, 'success'),
(31, 2194213, 'amit1', '3005514659', 'Airtel Digital TV', 200, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tboprtr`
--

CREATE TABLE IF NOT EXISTS `tboprtr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opratornam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tboprtr`
--

INSERT INTO `tboprtr` (`id`, `opratornam`) VALUES
(1, 'Airtel'),
(2, 'idea'),
(3, 'Tata Docomo');

-- --------------------------------------------------------

--
-- Table structure for table `tbrc`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

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

CREATE TABLE IF NOT EXISTS `tbsimdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nam` varchar(50) NOT NULL,
  `mnum` varchar(10) NOT NULL,
  `usrreg` varchar(50) NOT NULL,
  `mopratr` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbusr`
--

CREATE TABLE IF NOT EXISTS `tbusr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `usernam` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `usrrol` char(1) NOT NULL,
  `cntnum` varchar(10) NOT NULL,
  `act` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbusr`
--

INSERT INTO `tbusr` (`id`, `name`, `usernam`, `password`, `usrrol`, `cntnum`, `act`) VALUES
(1, 'Admin', 'admin', 'admin123', 'A', '2345698752', 1),
(2, 'Anjaan', 'anjaan', '123456', 'S', '5689452365', 1),
(3, 'Amit Indoria', 'amit1', 'amit123', 'S', '8699559447', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
