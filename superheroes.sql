-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2013 at 05:23 p.m.
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
  `delivery_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `orderline_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `orderline_id` (`orderline_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `order_date`, `delivery_date`, `order_status`, `orderline_id`) VALUES
(1, '2013-06-10', '2013-06-21', 'Pending', 1),
(3, '2013-06-12', '2013-06-15', 'Pending', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_orderline`
--

CREATE TABLE IF NOT EXISTS `tb_orderline` (
  `order_id` int(11) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL,
  `prodcut_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `tb_order` (`prodcut_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_orderline`
--

INSERT INTO `tb_orderline` (`order_id`, `quantity`, `prodcut_id`) VALUES
(1, 1, 1),
(3, 6, 6);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`product_id`, `product_name`, `image`, `description`, `price`, `hidden`) VALUES
(1, 'Batman1', '../public/assets/images/Batman.jpg', 'Batman is the superhero protector of Gotham City, a man dressed like a bat who fights against evil and strikes terror into the hearts of criminals everywhere. ', '30', 0),
(2, 'Captain America1', '../public/assets/images/CaptainAmerica.jpg', 'Too scrawny and frail to enlist in the U.S. Military during World War II, Steve Rogers volunteered to receive the experimental Super-Soldier Serum. Enhanced to the pinnacle of human physical potential he became Captain America.', '30', 0),
(3, 'Hulk', '../public/assets/images/Hulk.jpg', 'The Incredible Hulk: a green behemoth who is the living personification of rage and pure physical strength.', '40', 0),
(4, 'Ironman', '../public/assets/images/Ironman.jpg', 'After he was kidnapped by terrorists and gravely injured, billionaire iTony Stark was pressured to create a weapon of mass destruction. Now vowing to protect a world he helped endanger, he became the Invincible Iron Man.', '40', 0),
(5, 'Spiderman', '../public/assets/images/Spiderman.jpg', 'He is one super-hero who has not lost the common touch, and in fact he is frequently described as "your friendly neighbourhood Spider-Man."', '40', 0),
(6, 'Superman', '../public/assets/images/Superman.jpg', 'Using his immense solar-fueled powers, he became Superman to defend mankind from oppression while championing truth, justice, and the American way!', '40', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
mages/CaptainAmerica.jpg', 'Too scrawny and frail to enlist in the U.S. Military during World War II, Steve Rogers volunteered to receive the experimental Super-Soldier Serum. Enhanced to the pinnacle of human physical potential he became Captain America.', 30, 0),
(3, 'Hulk', '../public/assets/images/Hulk.jpg', 'The Incredible Hulk: a green behemoth who is the living personification of rage and pure physical strength.', 40, 0),
(4, 'Ironman', '../public/assets/images/Ironman.jpg', 'After he was kidnapped by terrorists and gravely injured, billionaire iTony Stark was pressured to create a weapon of mass destruction. Now vowing to protect a world he helped endanger, he became the Invincible Iron Man.', 40, 0),
(5, 'Spiderman', '../public/assets/images/Spiderman.jpg', 'He is one super-hero who has not lost the common touch, and in fact he is frequently described as "your friendly neighbourhood Spider-Man."', 40, 0),
(6, 'Superman', '../public/assets/images/Superman.jpg', 'Using his immense solar-fueled powers, he became Superman to defend mankind from oppression while championing truth, justice, and the American way!', 40, 0);
