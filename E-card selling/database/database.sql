-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2021 at 06:50 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_card`
--
CREATE DATABASE IF NOT EXISTS `e_card` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_card`;

-- --------------------------------------------------------

--
-- Table structure for table `addtocard`
--

DROP TABLE IF EXISTS `addtocard`;
CREATE TABLE IF NOT EXISTS `addtocard` (
`a_id` int(10) NOT NULL,
  `a_p_id` int(10) NOT NULL,
  `a_r_id` int(10) NOT NULL,
  `a_p_qty` int(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `bill1`
--

DROP TABLE IF EXISTS `bill1`;
CREATE TABLE IF NOT EXISTS `bill1` (
`b1_id` int(10) NOT NULL,
  `b1_r_id` int(10) NOT NULL,
  `b1_total` int(10) NOT NULL,
  `b1_date` date NOT NULL,
  `b1_nm` varchar(50) NOT NULL,
  `b1_adr` text NOT NULL,
  `b1_cont` text NOT NULL,
  `b1_city` varchar(50) NOT NULL,
  `b1_eml` varchar(50) NOT NULL,
  `b1_status` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `bill1`
--

INSERT INTO `bill1` (`b1_id`, `b1_r_id`, `b1_total`, `b1_date`, `b1_nm`, `b1_adr`, `b1_cont`, `b1_city`, `b1_eml`, `b1_status`) VALUES
(1, 2, 0, '2021-09-09', 'undhi', 'thanagalor', '5462389144', 'jetpur', 'mansi@gmail.com', 1),
(2, 2, 0, '2021-09-09', 'undhi', 'thanagalor', '5462389144', 'jetpur', 'mansi@gmail.com', 1),
(3, 2, 0, '2021-09-15', 'undhi', 'thanagalor', '5462389144', 'jetpur', 'mansi@gmail.com', 0),
(4, 4, 500, '2021-09-15', 'khyati', 'gondal', '9327866247', 'gondal', 'khyati@gmail.com', 0),
(5, 5, 510, '2021-09-15', 'rushita', 'gondal', '9327866247', 'gondal', 'khyati@gmail.com', 0),
(6, 2, 698, '2021-09-16', 'undhi', 'thanagalor', '5462389144', 'jetpur', 'mansi@gmail.com', 1),
(7, 2, 340, '2021-09-16', 'undhi', 'thanagalor', '5462389144', 'jetpur', 'mansi@gmail.com', 1),
(8, 2, 99, '2021-09-16', 'undhi', 'thanagalor', '5462389144', 'jetpur', 'mansi@gmail.com', 1),
(9, 7, 600, '2021-09-16', 'dasu', 'junagadh', '9875986365', 'junagadh', 'dashu@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill2`
--

DROP TABLE IF EXISTS `bill2`;
CREATE TABLE IF NOT EXISTS `bill2` (
`b2_id` int(10) NOT NULL,
  `b2_b1_id` int(10) NOT NULL,
  `b2_p_id` int(10) NOT NULL,
  `b2_p_qty` int(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bill2`
--

INSERT INTO `bill2` (`b2_id`, `b2_b1_id`, `b2_p_id`, `b2_p_qty`) VALUES
(1, 3, 5, 0),
(2, 4, 26, 1),
(3, 5, 18, 3),
(4, 6, 12, 1),
(5, 6, 7, 2),
(6, 7, 30, 2),
(7, 8, 8, 1),
(8, 9, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
`c_id` int(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_image` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_image`) VALUES
(2, 'birthdaycard', '3.1.jpg'),
(4, 'thankyoucard', 't1.png'),
(5, 'weddingcard', '2.1.jpg'),
(6, 'engegmentcard', '1.1.jpg'),
(7, 'velantaincard', 'v2.jpg'),
(10, 'motherdaycard', '5.2.jpg'),
(9, 'missyoucard', 'dhfg.jpg'),
(11, 'fathersdaycard', '4.2.jpg'),
(12, 'friendshipcard', 'f2.jpg'),
(13, 'congratscard', 'c2.jpg'),
(14, 'anniversarycard', 'a6.jpg'),
(15, 'lovecard', 'l1.jpg'),
(16, 'sorrycard', 's1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
`f_id` int(10) NOT NULL,
  `f_r_id` int(10) NOT NULL,
  `f_nm` varchar(50) NOT NULL,
  `f_review` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_r_id`, `f_nm`, `f_review`) VALUES
(1, 1, 'disha', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
`p_id` int(10) NOT NULL,
  `c_id` int(20) NOT NULL,
  `p_nm` varchar(50) NOT NULL,
  `p_image` varchar(60) NOT NULL,
  `p_price` varchar(50) NOT NULL,
  `p_qty` int(20) NOT NULL,
  `p_desc` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `c_id`, `p_nm`, `p_image`, `p_price`, `p_qty`, `p_desc`) VALUES
(5, 2, 'birthday card', '32.jpg', '300', 28, ''),
(6, 4, 'thankyou card', 't2.jpg', '50', 30, 'thank you card'),
(7, 2, 'birthday card', '3.3.jpg', '199', 28, 'birthday wish'),
(8, 2, 'birthday card', '3.11.jpg', '99', 39, 'birthday wish'),
(9, 4, 'thank you card', 't3.jpg', '200', 50, 'thank you for your h'),
(10, 4, 'thank you card', 't10.jpg', '150', 70, 'thank you for your h'),
(11, 5, 'wedding card', '2.9.jpg', '200', 40, 'bright future'),
(12, 5, 'wedding card', '2.10.jpg', '300', 39, 'bright future'),
(13, 5, 'wedding card', '2.11.jpg', '150', 70, 'bright future'),
(14, 6, 'angaged card', '1.2.jpg', '100', 30, 'happy engagement'),
(15, 6, 'angaged card', '1.3.jpg', '160', 40, 'happy engagement'),
(16, 6, 'angaged card', '1.5.jpg', '100', 30, 'happy engagement'),
(17, 7, 'velentine card', 'v6.jpg', '170', 60, 'happy velentineday'),
(18, 7, 'velentine card', 'v2.jpg', '170', 57, 'happy velentineday'),
(19, 7, 'velentine card', 'v9.jpg', '170', 60, 'happy velentineday'),
(20, 10, 'mothers day card', '55.jpg', '300', 60, 'happy mothers day'),
(21, 10, 'mothers day card', '54.jpg', '160', 70, 'happy mothers day'),
(22, 10, 'mothers day card', '53.jpg', '160', 70, 'happy mothers day'),
(23, 9, 'miss you card', 'm4.jpg', '200', 40, 'missing you'),
(24, 9, 'miss you card', 'm3.jpg', '300', 50, 'miss you'),
(25, 9, 'miss you card', 'm1.jpg', '200', 30, 'miss you'),
(26, 11, 'fathers day card', '4.2.jpg', '500', 59, 'happy fathers day'),
(27, 12, 'friendship card', 'f3.jpg', '300', 50, 'happy friendship day'),
(28, 13, 'conrets card', 'c9.jpg', '160', 30, 'congrethulation '),
(29, 14, 'anniversary card', 'a6.jpg', '200', 70, 'happy anniversary'),
(30, 15, 'love card', 'l8.jpg', '170', 38, 'love you '),
(31, 16, 'sorry card', 's2.jpg', '150', 3, 'sorry');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
`r_id` int(20) NOT NULL,
  `r_fnm` varchar(20) NOT NULL,
  `r_lnm` varchar(20) NOT NULL,
  `r_unm` varchar(20) NOT NULL,
  `r_password` varchar(20) NOT NULL,
  `r_add` text NOT NULL,
  `r_city` varchar(20) NOT NULL,
  `r_email` varchar(20) NOT NULL,
  `r_cont` varchar(20) NOT NULL,
  `r_que` varchar(50) NOT NULL,
  `r_ans` varchar(20) NOT NULL,
  `r_utype` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `r_fnm`, `r_lnm`, `r_unm`, `r_password`, `r_add`, `r_city`, `r_email`, `r_cont`, `r_que`, `r_ans`, `r_utype`) VALUES
(1, 'disha', 'pansuriya', 'dishu', '12', 'eeee', 'eee', 'disha@gmail.com', '4356123456', 'what is your name?', 'ami', 1),
(2, 'mansi', 'undhad', 'undhi', '0908', 'thanagalor', 'jetpur', 'mansi@gmail.com', '5462389144', 'what is your favourite actoress?', 'aaliya', 0),
(4, 'khyati', 'borad', 'khyati', 'manc', 'gondal', 'gondal', 'khyati@gmail.com', '9327866247', 'what is your favourite actor?', 'zain imam', 0),
(5, 'rushita', 'babariya', 'rushita', 'rushita', 'gondal', 'gondal', 'khyati@gmail.com', '9327866247', 'what is your name?', 'rushita', 0),
(6, 'dasu', 'kapdiya', 'dasu', 'dasu', 'junagadh', 'junagadh', 'dashu@gmail.com', '9875986365', 'what is your favourite food?', 'panipuri', 0),
(7, 'dasu', 'kapdiya', 'dasu', '123', 'junagadh', 'junagadh', 'dashu@gmail.com', '9875986365', 'what is your favourite food?', 'panipuri', 0),
(8, 'kishna', 'umretiya', 'kiyara', '123', 'wert', 'gfvd3ew', 'rdfdf@gmail.com', '4523678231', 'what is your name?', 'kisu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocard`
--
ALTER TABLE `addtocard`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bill1`
--
ALTER TABLE `bill1`
 ADD PRIMARY KEY (`b1_id`);

--
-- Indexes for table `bill2`
--
ALTER TABLE `bill2`
 ADD PRIMARY KEY (`b2_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocard`
--
ALTER TABLE `addtocard`
MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bill1`
--
ALTER TABLE `bill1`
MODIFY `b1_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bill2`
--
ALTER TABLE `bill2`
MODIFY `b2_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `r_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
