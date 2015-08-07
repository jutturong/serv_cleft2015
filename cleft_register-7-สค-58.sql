-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2015 at 04:14 PM
-- Server version: 5.6.23
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thaiclef_dbcleft`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleft_register`
--

CREATE TABLE IF NOT EXISTS `cleft_register` (
  `id_register` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(3) DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `firstname` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `organization` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `notaddress` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `zipcode` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `payment` int(3) DEFAULT NULL,
  `course` int(15) NOT NULL,
  `status_register` int(3) NOT NULL,
  `class_register` int(2) NOT NULL,
  PRIMARY KEY (`id_register`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=82 ;

--
-- Dumping data for table `cleft_register`
--

INSERT INTO `cleft_register` (`id_register`, `title`, `lastname`, `firstname`, `email`, `phone`, `fax`, `organization`, `address`, `notaddress`, `city`, `zipcode`, `country`, `payment`, `course`, `status_register`, `class_register`) VALUES
(47, 1, 'copdirandal', 'peter', 'peter@gmail.com', '0852635247', '043225125', 'BKK ', 'BKK', 'BKK', 'Thailand', '100000', 'Thailand', 2, 45, 2, 0),
(49, 3, 'pat', 'Nir', 'nir@kku.ac.th', '089123456', '0431234', 'kku', '123', 'thailand', '', '40002', 'thailand', 1, 75, 2, 0),
(59, 1, 'fff', 'Mon', '@', '-', '-', '-', '-', '-', '-', '40002', '-', 2, 105, 3, 0),
(61, 2, 'Phutong', 'Napasorn', 'napasorn.pht@hotmail.com', '0866456942', '', 'sikarin hospital', '756/40 Passorn village Pattanakarn soi38 Pattanakarn Road ', 'Suan Luang District', 'Bangkok', '10250', 'Thailand', 2, 75, 3, 0),
(63, 3, 'Lerttham', 'Phornphimon', 'palmy8514@gmail.com', '+668833473', '6643366595', 'Tawanchai cleft center', '337/45 ซอย 8 หมู่บ้านไทย', 'ต.ศิลา', 'เมือง', '40000', 'ไทย', 2, 60, 3, 0),
(66, 3, 'Pradubwong', 'Suteera', 'p-suteera@hotmail.com', '66+081-263', '043-202558', 'Srinagarind Hospital, Khon Kaen Uinversity, Khon K', '123 Mittraparp Rd., Muang Khon Kaen, Khon Kaen, Thailand', 'Srinagarind Hospital,123 Mittraparp Rd., Muang Khon Kaen, Khon Kaen, Thailand', 'Khon Kaen', '40002', 'Thailand', 2, 0, 1, 0),
(68, 2, 'Chinchai', 'Supaporn', 'supaporn.c@cmu.ac.th', '0894332455', '053946042', 'Faculty of Associated Medical Sciences', '110 Inthawarorot Rd., Associated Medical Science Faculty, Mueang,', '', 'ChiangMai', '50200', 'Thailand', 2, 60, 3, 0),
(79, 1, 'Jariyapongpaiboon', 'Prajak', 'prajakj@gmail.com', '0818837579', '053713044', 'Chiangrai Prachanukhor Hospital', '1039 Sathanpayaban Road Muang ', '', 'Chaingrai', '57000', 'Thailand', 2, 75, 3, 0),
(80, 1, 'Ploypradith', 'Chamnan', 'cploypradith@gmail.com', '0817835497', '053173044', 'Chiangrai Prachanukhor Hospital', '1039 Sathanpayaban Road Muang', '', 'Chaingrai', '57000', 'Thailand', 2, 75, 3, 0),
(81, 3, 'Leelaadisorn', 'Niramon', 'villa42101@gmail.com', '0816621920', '043511296', '', '42 suriyadetchbamrung rd.', '', 'Roiet', '45000', 'Thailand', 2, 75, 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
