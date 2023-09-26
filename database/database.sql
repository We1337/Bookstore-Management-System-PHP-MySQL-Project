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
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `admin_id` INT(10) NOT NULL AUTO_INCREMENT,
  `admin_user_name` VARCHAR(30) NOT NULL,
  `admin_password` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE = InnoDB  DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_user_name`, `admin_password`) VALUES 
('admin', 'admin'), 
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE IF NOT EXISTS `book_table` (
  `book_id` INT(10) NOT NULL AUTO_INCREMENT,
  `book_name` VARCHAR(50) NOT NULL,
  `book_category` VARCHAR(50) NOT NULL,
  `book_description` LONGTEXT NOT NULL,
  `book_price` INT(4) NOT NULL,
  `book_img` VARCHAR(50) NOT NULL,
  `book_time` INT(20) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE = InnoDB  DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 1;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`book_name`, `book_category`, `book_description`, `book_price`, `book_img`, `book_time`) VALUES
('Octavia Spencer - Detective', 'Suspence', 'This is Detective Book About Ninja', 1000, 'book_img/d.jpg', 1554088592),
('Murder on The Orient Express', 'Suspence', 'Suspence Book about Murder.', 2000, 'book_img/d3.jpg', 1554088749),
('A Dictionary of Architecture', 'Architecture', 'Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume', 1500, 'book_img/ARC9.jpg', 1554089362),
('CAT Book', 'Competitive Exam', 'Book about Competitive Exam CAT.\r\nIn CAT Collegians are Eligible for Give Exam.', 800, 'book_img/CAT.jpg', 1554089935),
('Visual Basic 2005', 'Programming', 'VB.Net Connectivity.', 1500, 'book_img/comp8.jpg', 1554090190),
('HTML for World Wide Web', 'Web Design', 'HTML uses tags,it''s not case sensitive,work with own html tags which must be enclosed.', 5000, 'book_img/0201354934.jpg', 1554090473),
('A TEXTBOOK OF COST AND MANAGEMENT ACCOUNTING 8th e', 'Management', 'Student friendly and examination oriented approach # Innovative, comprehensive and systematic presentation of the subject matter # Use of diagrams and exhibits to help students understand concepts easily and clearly # Around 500 solved problems and illustrations with working notes # Solved and unsolved practical questions from various university and professional examinations like BCom, MCom, CA, CS, ICWA, etc. # Objective type questions and select theory questions # Ideal for self study.', 2500, 'book_img/busi7.jpg', 1554091189),
('Spider Man', 'Comics', 'Spider Man Comic Book.', 1200, 'book_img/comic1.jpg', 1554091718),
('The Mad, Mad World of Cricket', 'Sport', 'The funny side of the gentleman?s game?captured by a master cartoonist In India cricket is more than a game; it is a national obsession. And with a World Cup always around the corner, there is no better way to prepare for the excitement of seeing the men in blue in action than with renowned cartoonist Sudhir Dar?s creations.', 2500, 'book_img/c1.jpg', 1554092107),
('A Dictionary of', 'Architecture', 'Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume', 950, 'book_img/ARC9.jpg', 1555228720),
('BILL DAVE MANAGEMENT', 'Management', 'This book is about management by Bill Dave', 1560, 'book_img/MANAGEMENT2.jpg', 1555250569);

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE IF NOT EXISTS `category_table` (
  `category_id` INT(10) NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_name`) VALUES
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
-- Table structure for table `contact_table`
--

CREATE TABLE IF NOT EXISTS `contact_table` (
  `contact_id` INT(10) NOT NULL AUTO_INCREMENT,
  `contact_full_name` VARCHAR(100) NOT NULL,
  `contact_mobile_number` VARCHAR(15) NOT NULL,
  `contact_email` VARCHAR(60) NOT NULL,
  `contact_message` LONGTEXT NOT NULL,
  `contact_time` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`contact_full_name`, `contact_mobile_number`, `contact_email`, `contact_message`, `contact_time`) VALUES
('Alan Batr',    77470000000, 'alanbatr@gmail.com',    'Awesome Books.',         '1554092678'),
('Mergen Altai', 77470000000, 'mergenaltai@gmail.com', 'Best Books',             '1554201509'),
('Saq Kipchak',  77470000000, 'saqkipchak@gmail.com',  'Looking For New Books',  '1554219813');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE IF NOT EXISTS `order_table` (
  `order_id` INT(10) NOT NULL AUTO_INCREMENT,
  `order_name` VARCHAR(30) NOT NULL,
  `order_address` VARCHAR(200) NOT NULL,
  `order_pincode` INT(20) NOT NULL,
  `order_city` VARCHAR(30) NOT NULL,
  `order_state` VARCHAR(30) NOT NULL,
  `order_mobile` VARCHAR(15) NOT NULL,
  `order_register_id` INT(8) NOT NULL,
  `order_total_price` INT(50) NOT NULL,
  `order_list_books` LONGTEXT NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_name`, `order_address`, `order_pincode`, `order_city`, `order_state`, `order_mobile`, `order_register_id`, `order_total_price`, `order_list_books`) VALUES
('Ulan Batr', 'St. Astana 51', 000000, 'Akmola', 'Astana', 77470000000, 1, 500000, 'book_id-amout: 15-12, book_id-amout: 16-10'),
('Mete Khan', 'St. Astana 21', 000000, 'Akmola', 'Astana', 77470000000, 1, 540000, 'book_id-amout: 15-12, book_id-amout: 16-10');

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE IF NOT EXISTS `register_table` (
  `register_id` INT(10) NOT NULL AUTO_INCREMENT,
  `register_full_name` VARCHAR(100) NOT NULL,
  `register_user_name` VARCHAR(50) NOT NULL,
  `register_password` VARCHAR(30) NOT NULL,
  `register_contact_number` VARCHAR(15) NOT NULL,
  `register_email` VARCHAR(60) NOT NULL,
  `register_question` VARCHAR(100) NOT NULL,
  `register_answer` VARCHAR(50) NOT NULL,
  `register_time` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 1;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`register_full_name`, `register_user_name`, `register_password`, `register_contact_number`, `register_email`, `register_question`, `register_answer`, `register_time`) VALUES
('Asl Khan',    'Aslkhan', 'asl123',      77470000000, 'aslturkkhan77@gmail.com', 'Which is your Favourite Movie ?', 'redemption', '1554092678'),
('Tatar Batr',  'Tatar',   'tatar12345',  77470000000, 'tatarbatr@gmail.com',     'Which is your Favourite Movie ?', '123',        '1554201585'),
('Xasak Ata',   'Ata',     'ataxasak000', 77470000000, 'xasakata@gmail.com',      'Which is your Favourite Movie ?', 'prometheus', '1555655074');

-- --------------------------------------------------------

--
-- Table structure for table `user_support_table`
--

CREATE TABLE IF NOT EXISTS `user_support_table` (
    `user_support_id` INT(10) NOT NULL AUTO_INCREMENT,
    `user_support_email` VARCHAR(255) NOT NULL,
    `user_support_subject` VARCHAR(255) NOT NULL,
    `user_support_message` TEXT NOT NULL,
    `user_support_status` ENUM('Open', 'Closed') DEFAULT 'Open',
    `user_support_created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`user_support_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 1;

--
-- Dumping data for table `user_support_table`
-- 

INSERT INTO `user_support_table` (`user_support_email`, `user_support_subject`, `user_support_message`) VALUES
('turkkhan@gmail.com', 'User error',          'Help with with error login system'),
('tatar@gmail.com',    'Delivery problem',    'Hi there, help me with delivery'),
('aslkhan@gmail.com',  'How to search books', 'Hello, I can not find books');

-- --------------------------------------------------------
