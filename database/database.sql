-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
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
-- Database: `bookstoredatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` INT(4) NOT NULL AUTO_INCREMENT,
  `a_unm` VARCHAR(30) NOT NULL,
  `a_pwd` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE = InnoDB  DEFAULT CHARSET = latin1 AUTO_INCREMENT = 2;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_unm`, `a_pwd`) VALUES (1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `b_id` INT(10) NOT NULL AUTO_INCREMENT,
  `b_nm` VARCHAR(50) NOT NULL,
  `b_cat` VARCHAR(50) NOT NULL,
  `b_desc` LONGTEXT NOT NULL,
  `b_price` INT(4) NOT NULL,
  `b_img` VARCHAR(50) NOT NULL,
  `b_time` INT(20) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE = InnoDB  DEFAULT CHARSET = latin1 AUTO_INCREMENT = 27;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_nm`, `b_cat`, `b_desc`, `b_price`, `b_img`, `b_time`) VALUES
(15, 'Octavia Spencer - Detective', 'Suspence', 'This is Detective Book About Ninja', 50, 'book_img/d.jpg', 1554088592),
(16, 'Murder on The Orient Express', 'Suspence', 'Suspence Book about Murder.', 60, 'book_img/d3.jpg', 1554088749),
(18, 'A Dictionary of Architecture', 'Architecture', 'Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume', 500, 'book_img/ARC9.jpg', 1554089362),
(19, 'CAT Book', 'Competitive Exam', 'Book about Competitive Exam CAT.\r\nIn CAT Collegians are Eligible for Give Exam.', 260, 'book_img/CAT.jpg', 1554089935),
(20, 'Visual Basic 2005', 'Programming', 'VB.Net Connectivity.', 430, 'book_img/comp8.jpg', 1554090190),
(21, 'HTML for World Wide Web', 'Web Design', 'HTML uses tags,it''s not case sensitive,work with own html tags which must be enclosed.', 240, 'book_img/0201354934.jpg', 1554090473),
(22, 'A TEXTBOOK OF COST AND MANAGEMENT ACCOUNTING 8th e', 'Management', 'Student friendly and examination oriented approach # Innovative, comprehensive and systematic presentation of the subject matter # Use of diagrams and exhibits to help students understand concepts easily and clearly # Around 500 solved problems and illustrations with working notes # Solved and unsolved practical questions from various university and professional examinations like BCom, MCom, CA, CS, ICWA, etc. # Objective type questions and select theory questions # Ideal for self study.', 410, 'book_img/busi7.jpg', 1554091189),
(23, 'Spider Man', 'Comics', 'Spider Man Comic Book.', 120, 'book_img/comic1.jpg', 1554091718),
(24, 'The Mad, Mad World of Cricket', 'Sport', 'The funny side of the gentleman?s game?captured by a master cartoonist In India cricket is more than a game; it is a national obsession. And with a World Cup always around the corner, there is no better way to prepare for the excitement of seeing the men in blue in action than with renowned cartoonist Sudhir Dar?s creations.', 200, 'book_img/c1.jpg', 1554092107),
(25, 'A Dictionary of', 'Architecture', 'Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume', 500, 'book_img/ARC9.jpg', 1555228720),
(26, 'BILL DAVE MANAGEMENT', 'Management', 'This book is about management by Bill Dave', 90, 'book_img/MANAGEMENT2.jpg', 1555250569);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` INT(10) NOT NULL AUTO_INCREMENT,
  `cat_nm` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 22;

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

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` INT(4) NOT NULL AUTO_INCREMENT,
  `c_fnm` VARCHAR(100) NOT NULL,
  `c_mno` INT(10) NOT NULL,
  `c_email` VARCHAR(60) NOT NULL,
  `c_msg` LONGTEXT NOT NULL,
  `c_time` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE = InnoDB  DEFAULT CHARSET = latin1 AUTO_INCREMENT = 14;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_fnm`, `c_mno`, `c_email`, `c_msg`, `c_time`) VALUES
(5, 'Kumar Baraiya', 2147483647, 'kumar@gmail.com', 'Awesome Books.', '1554092678'),
(10, 'Dhaval Makwana', 2147483647, 'dhavalmak77@gmail.com', 'Best Books', '1554201509'),
(12, 'Dhaval', 123654789, 'dhaval@gmail.com', 'Looking For New Books', '1554219813');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `o_id` INT(11) NOT NULL AUTO_INCREMENT,
  `o_name` VARCHAR(30) NOT NULL,
  `o_address` VARCHAR(200) NOT NULL,
  `o_pincode` INT(20) NOT NULL,
  `o_city` VARCHAR(30) NOT NULL,
  `o_state` VARCHAR(30) NOT NULL,
  `o_mobile` VARCHAR(11) NOT NULL,
  `o_rid` INT(8) NOT NULL,
  `o_total_price` INT(50) NOT NULL,
  `o_list_books` LONGTEXT NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 41;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `o_name`, `o_address`, `o_pincode`, `o_city`, `o_state`, `o_mobile`, `o_rid`, `o_total_price`, `o_list_books`) VALUES
(39, 'Dhaval Akal', 'Mahuva', 125478, 'nuihu', 'Gujarat', 123456789, 1, 500000, 'book_id-amout: 15-12, book_id-amout: 16-10'),
(40, 'Dhaval Makwana', 'Mahuva', 125478, 'nuihu', 'Gujarat', 123456789, 1, 500000, 'book_id-amout: 15-12, book_id-amout: 16-10');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `r_id` INT(8) NOT NULL AUTO_INCREMENT,
  `r_fnm` VARCHAR(100) NOT NULL,
  `r_unm` VARCHAR(50) NOT NULL,
  `r_pwd` VARCHAR(30) NOT NULL,
  `r_cno` VARCHAR(11) NOT NULL,
  `r_email` VARCHAR(60) NOT NULL,
  `r_question` VARCHAR(100) NOT NULL,
  `r_answer` VARCHAR(50) NOT NULL,
  `r_time` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 6;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_fnm`, `r_unm`, `r_pwd`, `r_cno`, `r_email`, `r_question`, `r_answer`, `r_time`) VALUES
(1, 'Dhaval Makwana', 'dhaval', 'dhaval123', '9876543210', 'dhavalmak77@gmail.com', 'Which is your Favourite Movie ?', 'shawshank redemption', '1554092678'),
(2, 'Kumar Baraiya', 'kumar', 'kumar123', '1234567890', 'kbaraiya@gmail.com', 'Which is your Favourite Movie ?', '123', '1554201585'),
(3, 'Hiren Makwana', 'hirenmakwana', 'hirenmakwana', '7894561230', 'hiren@gmail.com', 'Which is your Favourite Movie ?', 'prometheus', '1555655074');

--
-- Table structure for table `userSupport`
--

CREATE TABLE `userSupport` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `message` TEXT NOT NULL,
    `status` ENUM('Open', 'Closed') DEFAULT 'Open',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `register`(`r_id`)
);

