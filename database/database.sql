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
  `admin_id` INT(4) NOT NULL AUTO_INCREMENT,
  `admin_user_name` VARCHAR(30) NOT NULL,
  `admin_password` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE = InnoDB  DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user_name`, `admin_password`) VALUES ('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` INT(10) NOT NULL AUTO_INCREMENT,
  `book_name` VARCHAR(50) NOT NULL,
  `book_category` VARCHAR(50) NOT NULL,
  `book_description` LONGTEXT NOT NULL,
  `book_price` INT(4) NOT NULL,
  `book_img` VARCHAR(50) NOT NULL,
  `book_time` INT(20) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE = InnoDB  DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_name`, `book_category`, `book_description`, `book_price`, `book_img`, `book_time`) VALUES
('Octavia Spencer - Detective', 'Suspence', 'This is Detective Book About Ninja', 50, 'book_img/d.jpg', 1554088592),
('Murder on The Orient Express', 'Suspence', 'Suspence Book about Murder.', 60, 'book_img/d3.jpg', 1554088749),
('A Dictionary of Architecture', 'Architecture', 'Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume', 500, 'book_img/ARC9.jpg', 1554089362),
('CAT Book', 'Competitive Exam', 'Book about Competitive Exam CAT.\r\nIn CAT Collegians are Eligible for Give Exam.', 260, 'book_img/CAT.jpg', 1554089935),
('Visual Basic 2005', 'Programming', 'VB.Net Connectivity.', 430, 'book_img/comp8.jpg', 1554090190),
('HTML for World Wide Web', 'Web Design', 'HTML uses tags,it''s not case sensitive,work with own html tags which must be enclosed.', 240, 'book_img/0201354934.jpg', 1554090473),
('A TEXTBOOK OF COST AND MANAGEMENT ACCOUNTING 8th e', 'Management', 'Student friendly and examination oriented approach # Innovative, comprehensive and systematic presentation of the subject matter # Use of diagrams and exhibits to help students understand concepts easily and clearly # Around 500 solved problems and illustrations with working notes # Solved and unsolved practical questions from various university and professional examinations like BCom, MCom, CA, CS, ICWA, etc. # Objective type questions and select theory questions # Ideal for self study.', 410, 'book_img/busi7.jpg', 1554091189),
('Spider Man', 'Comics', 'Spider Man Comic Book.', 120, 'book_img/comic1.jpg', 1554091718),
('The Mad, Mad World of Cricket', 'Sport', 'The funny side of the gentleman?s game?captured by a master cartoonist In India cricket is more than a game; it is a national obsession. And with a World Cup always around the corner, there is no better way to prepare for the excitement of seeing the men in blue in action than with renowned cartoonist Sudhir Dar?s creations.', 200, 'book_img/c1.jpg', 1554092107),
('A Dictionary of', 'Architecture', 'Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume', 500, 'book_img/ARC9.jpg', 1555228720),
('BILL DAVE MANAGEMENT', 'Management', 'This book is about management by Bill Dave', 90, 'book_img/MANAGEMENT2.jpg', 1555250569);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` INT(10) NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`) VALUES
('Suspence'),
('Architecture'),
('Competitive Exam'),
('Programming'),
('Web Design'),
('Business'),
('Comics'),
('Sport'),
('Management');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` INT(4) NOT NULL AUTO_INCREMENT,
  `contact_full_name` VARCHAR(100) NOT NULL,
  `contact_mobile_number` INT(10) NOT NULL,
  `contact_email` VARCHAR(60) NOT NULL,
  `contact_message` LONGTEXT NOT NULL,
  `contact_time` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_full_name`, `contact_mobile_number`, `contact_email`, `contact_message`, `contact_time`) VALUES
('Kumar Baraiya', 2147483647, 'kumar@gmail.com', 'Awesome Books.', '1554092678'),
('Dhaval Makwana', 2147483647, 'dhavalmak77@gmail.com', 'Best Books', '1554201509'),
('Dhaval', 123654789, 'dhaval@gmail.com', 'Looking For New Books', '1554219813');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` INT(11) NOT NULL AUTO_INCREMENT,
  `order_name` VARCHAR(30) NOT NULL,
  `order_address` VARCHAR(200) NOT NULL,
  `order_pincode` INT(20) NOT NULL,
  `order_city` VARCHAR(30) NOT NULL,
  `order_state` VARCHAR(30) NOT NULL,
  `order_mobile` VARCHAR(11) NOT NULL,
  `order_register_id` INT(8) NOT NULL,
  `order_total_price` INT(50) NOT NULL,
  `order_list_books` LONGTEXT NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_name`, `order_address`, `order_pincode`, `order_city`, `order_state`, `order_mobile`, `order_rid`, `order_total_price`, `order_list_books`) VALUES
('Dhaval Akal', 'Mahuva', 125478, 'nuihu', 'Gujarat', 123456789, 1, 500000, 'book_id-amout: 15-12, book_id-amout: 16-10'),
('Dhaval Makwana', 'Mahuva', 125478, 'nuihu', 'Gujarat', 123456789, 1, 500000, 'book_id-amout: 15-12, book_id-amout: 16-10');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `register_id` INT(8) NOT NULL AUTO_INCREMENT,
  `register_full_name` VARCHAR(100) NOT NULL,
  `register_user_name` VARCHAR(50) NOT NULL,
  `register_password` VARCHAR(30) NOT NULL,
  `register_contact_number` VARCHAR(11) NOT NULL,
  `register_email` VARCHAR(60) NOT NULL,
  `register_question` VARCHAR(100) NOT NULL,
  `register_answer` VARCHAR(50) NOT NULL,
  `register_time` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_full_name`, `register_user_name`, `register_password`, `register_contact_number`, `register_email`, `register_question`, `register_answer`, `register_time`) VALUES
('Dhaval Makwana', 'dhaval', 'dhaval123', '9876543210', 'dhavalmak77@gmail.com', 'Which is your Favourite Movie ?', 'shawshank redemption', '1554092678'),
('Kumar Baraiya', 'kumar', 'kumar123', '1234567890', 'kbaraiya@gmail.com', 'Which is your Favourite Movie ?', '123', '1554201585'),
('Hiren Makwana', 'hirenmakwana', 'hirenmakwana', '7894561230', 'hiren@gmail.com', 'Which is your Favourite Movie ?', 'prometheus', '1555655074');

--
-- Table structure for table `userSupport`
--

CREATE TABLE IF NOT EXISTS `user_support` (
    `user_support_id` INT(8) NOT NULL AUTO_INCREMENT,
    `user_support_email` VARCHAR(255) NOT NULL,
    `user_support_subject` VARCHAR(255) NOT NULL,
    `user_support_message` TEXT NOT NULL,
    `user_support_status` ENUM('Open', 'Closed') DEFAULT 'Open',
    `user_support_created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`user_support_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;

