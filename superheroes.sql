-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2013 at 05:49 p.m.
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `superheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `order_date`) VALUES
(1, '2013-06-10'),
(3, '2013-06-12'),
(59, '2013-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orderline`
--

CREATE TABLE IF NOT EXISTS `tb_orderline` (
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  KEY `tb_order` (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_orderline`
--

INSERT INTO `tb_orderline` (`order_id`, `quantity`, `product_id`) VALUES
(1, 1, 1),
(3, 6, 6),
(59, 1, 3),
(59, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pages`
--

CREATE TABLE IF NOT EXISTS `tb_pages` (
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pages`
--

INSERT INTO `tb_pages` (`page_id`, `title`, `content`, `location`) VALUES
(1, 'Welcome to Amazing Super Heroes', 'Get in on the "action" with our incredible action figures including Marvel and DC. "The Amazing Super Heroes" carries your favorite superhero action figures from Spider-man and Thor to Iron Man and Batman!', 'index.php'),
(2, 'Who we are', '"Experts in Superhero action figures."\r\n\r\nOur obsession to provide top quality Superhero figures drives us forward day by day. This is your one stop shop for all your superhero needs.\r\n\r\nWe aim to supply top of the range quality crafted figures from brands such as Marvel and DC.', 'admin_about.php'),
(3, 'Contact Us', 'You can contact us using the form to the left or alternatively\r\nby taking advantage of the contact information beneath.\r\n\r\nPhone:	+64 9 634 4399\r\nEmail:		info@amazingsuperheroes.co.nz\r\nAddress:	264 The Mall,\r\n			Onehunga, Auckland, \r\n			New Zealand', 'admin_contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE IF NOT EXISTS `tb_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`product_id`, `product_name`, `image`, `description`, `price`, `hidden`) VALUES
(1, 'Batman', 'Batman.jpg', 'Batman is the superhero protector of Gotham City, a man dressed like a bat who fights against evil and strikes terror into the hearts of criminals everywhere. ', '40', 0),
(2, 'Captain America', 'CaptainAmerica.jpg', 'Too scrawny and frail to enlist in the U.S. Military during World War II, Steve Rogers volunteered to receive the experimental Super-Soldier Serum. Enhanced to the pinnacle of human physical potential he became Captain America.', '30', 0),
(3, 'Hulk', 'Hulk.jpg', 'The Incredible Hulk: a green behemoth who is the living personification of rage and pure physical strength.', '40', 0),
(4, 'Ironman', 'Ironman.jpg', 'After he was kidnapped by terrorists and gravely injured, billionaire iTony Stark was pressured to create a weapon of mass destruction. Now vowing to protect a world he helped endanger, he became the Invincible Iron Man.', '40', 0),
(5, 'Spiderman', 'Spiderman.jpg', 'He is one super-hero who has not lost the common touch, and in fact he is frequently described as "your friendly neighbourhood Spider-Man."', '40', 0),
(6, 'Superman', 'Superman.jpg', 'Using his immense solar-fueled powers, he became Superman to defend mankind from oppression while championing truth, justice, and the American way!', '40', 0),
(23, '', 'images.jpg', '', '0', 1),
(22, '', 'dog.jpg', '', '0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
