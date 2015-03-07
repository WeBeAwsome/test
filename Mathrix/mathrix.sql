-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2015 at 03:51 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mathrix`
--

-- --------------------------------------------------------

--
-- Table structure for table `mathrix`
--

CREATE TABLE IF NOT EXISTS `mathrix` (
  `mathrix_id` varchar(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `college` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `dumb_c` int(1) NOT NULL,
  `math_sketching` int(1) NOT NULL,
  `paper_presentation` int(1) NOT NULL,
  `math_quiz` int(1) NOT NULL,
  `amount` int(3) NOT NULL,
  PRIMARY KEY (`mathrix_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mathrix`
--

INSERT INTO `mathrix` (`mathrix_id`, `name`, `college`, `email`, `mobile_no`, `dumb_c`, `math_sketching`, `paper_presentation`, `math_quiz`, `amount`) VALUES
('M01', ' Arthy.V', 'A.A. Arts and Science College (Women), Chennai ', 'arthy.venkat10@gmail', 2147483647, 0, 0, 1, 0, 50),
('M02', 'deepika', 'A.A. Arts and Science College (Women), Chennai', 'deepiss20@gmail.com', 2147483647, 1, 0, 0, 0, 50),
('M03', 'hari', 'A.A. Arts and Science College (Women), Chennai', 'arthy.venkat10@gmail', 2147483647, 0, 0, 0, 1, 50),
('M04', ' Hari', 'A.C. College of Engineering and Technology, Karaik', 'arthy.venkat10@gmail', 2147483647, 0, 0, 1, 1, 100),
('M08', 'Kaaviya', 'A.A. Arts and Science College (Women), Chennai', 'ddds', 9, 1, 0, 0, 0, 50),
('M09', '      dsdsf', 'A.E.T. College, Attur Taluk      ', 'deepiss20@gmail.com ', 1234567891, 0, 1, 0, 0, 50),
('M10', '          Vasanthi', 'A.R.C. Viswanathan College, Mayiladuthurai        ', 'deepiss20@gmail.com ', 2147483647, 0, 1, 0, 0, 50),
('M11', 'fddfffa', 'A.A. Arts and Science College (Women), Chennai', 'arthy.venkat10@gmail', 2147483647, 0, 1, 0, 0, 50),
('m12', ' Deepika', 'A.A. Govt. Arts College, Attur, Salem ', 'deepiss20@gmail.com ', 90951666, 0, 1, 0, 0, 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
