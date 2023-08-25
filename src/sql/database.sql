-- phpMyAdmin SQL Dump
-- version 3.3.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2019 at 05:38 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- 
-- Database: `bookStoreManagementSystem`
--

-- -------------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
    `a_id` int(4) NOT NULL AUTO_INCREMENT,
    `a_unm` varchar(30) NOT NULL,
    `a_pwd` varchar(30) NOT NULL,
    PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_unm`, `a_pwd`) VALUES (1, 'admin', 'admin');

-- ------------------------------------------------------------------------

-- 
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
    `b_id` int(10) NOT NULL AUTO_INCREMENT,
    `b_nm` varchar(50) NOT NULL,
    `b_cat` int(6) NOT NULL,
    `b_desc` longtext NOT NULL,
    `b_price` int(8) NOT NULL,
    `b_img` varchar(50) NOT NULL,
    `b_time` int(20) NOT NULL,
    PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=27;

-- 
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_cat`, `b_cat`, `b_desc`, `b_price`, `b_img`, `b_time`) VALUES 
(15, 'Octavia Spencer - Detective', 12, 'This is Detective Book About Ninja', 50, 'book_img/d.jpg', 1554088592)

-- ------------------------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
    `cat_id` int(10) NOT NULL AUTO_INCREMENT, 
    `cat_nm` varchar(50) NOT NULL,
    PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=22;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(13, 'Suspence'),
(14, 'Architecture'),
(15, 'Competitive Exam'),
(16, 'Programming'),
(17, 'Web Design'),
(18, 'Business'),
(19, 'Comics'),
(20, 'Sport'),
(21, 'Management');

-- --------------------------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
    `c_id` int(4) NOT NULL AUTO_INCREMENT,
    `c_fnm` varchar(100) NOT NULL,
    `c_mno` int(10) NOT NULL,
    `c_email` varchar(60) NOT NULL,
    `c_msg` longtext(20) NOT NULL,
    `c_time` varchar(20) NOT NULL,
    PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=14;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_fnm`, `c_mno`, `c_email`, `c_msg`, `c_time`) VALUES 
(5, 'Alex', 7747131231, 'bob@gmail.com', 'Awesome books.', '12312312');

-- ---------------------------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
    `o_id` int(11) NOT NULL AUTO_INCREMENT,
    `o_name` varchar(30) NOT NULL,
    `o_address` varchar(200) NOT NULL,
    `o_pincode` int(20) NOT NULL
    `o_city` varchar(30) NOT NULL,
    `o_state` varchar(30) NOT NULL,
    `o_mobile` int(20) NOT NULL,
    `o_rid` int(8) NOT NULL,
    PRIMARY KEY (`o_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=41;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `o_name`, `o_address`, `o_pincode`, `o_city`, `o_state`, `o_mobile`, `o_rid`) VALUES
(39, 'Alex', 'Alex', 124123, 'Alex', 'Alex', 123456789, 1);

-- -------------------------------------------------------------------------------

-- 
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
    `r_id` int(8) NOT NULL AUTO_INCREMENT,
    `r_fnm` varchar(100) NOT NULL,
    `r_unm` varchar(50) NOT NULL,
    `r_pwd` varchar(30) NOT NULL,
    `r_cno` varchar(10) NOT NULL,
    `r_email` varchar(60) NOT NULL,
    `r_question` varchar(100) NOT NULL,
    `r_answer` varchar(50) NOT NULL,
    `r_time` varchar(20) NOT NULL,
    PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_fnm`, `r_unm`, `r_pwd`, `r_cno`, `r_email`, `r_question`, `r_time`) VALUES
(1, 'data', 'data', 'data', '123456789', 'data@gmail.com', 'Which is your data', 'data', '1231231273');