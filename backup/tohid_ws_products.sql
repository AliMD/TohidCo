-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2012 at 01:46 AM
-- Server version: 5.1.65
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mihando_tohidfoundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `sku` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `iran_code` varchar(32) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `weight` float NOT NULL,
  `category` varchar(32) CHARACTER SET latin1 NOT NULL,
  `category_id` varchar(32) CHARACTER SET latin1 NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 NOT NULL,
  `name_fa` varchar(64) CHARACTER SET utf8 NOT NULL,
  `description_fa` text CHARACTER SET utf8 NOT NULL,
  `category_fa` varchar(32) CHARACTER SET utf8 NOT NULL,
  `sort_order` int(4) unsigned NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `sku` (`sku`,`iran_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=53 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `sku`, `iran_code`, `description`, `weight`, `category`, `category_id`, `image`, `name_fa`, `description_fa`, `category_fa`, `sort_order`) VALUES
(3, '405 Rear Axle Crossmember', NULL, '', '', 0, '', '', '1.jpg', 'بازويي اتاق پژو 405', 'قطعه مجموعه تعليق خودرو', '', 1),
(4, '405 Rear Suspension Arm', NULL, '', '', 0, '', '', '2.jpg', 'بازويي چرخ پژو 405', 'قطعه مجموعه تعليق خودرو', '', 0),
(5, '405 Suspension Pivot ', NULL, '', '', 0, '', '', '3.jpg', 'سگدست پژو 405', 'قطعه واسطه مجموعه فرمان خودرو', '', 0),
(6, '405 Diffbox', NULL, '', '', 0, '', '', '4.jpg', 'هوزينگ پژو 405', 'قطعه ديفرانسيل سيستم انتقال قدرت خودرو', '', 0),
(7, '405 Brake Disc', NULL, '', '', 0, '', '', '5.jpg', 'ديسک ترمز پژو 405', 'قطعه ترمز چرخ سيستم ترمز خودرو', '', 0),
(8, '405 Rear Brake Socket', NULL, '', '', 0, '', '', '6.jpg', 'کاسه چرخ پژو 405', 'قطعه واسطه سيستم انتقال قدرت خودرو', '', 0),
(9, 'Pride Cylinder Block', NULL, '', '', 0, '', '', '7.jpg', 'بلوک سيلندر پرايد', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(10, 'Pride Crank Shaft', NULL, '', '', 0, '', '', '8.jpg', 'ميل لنگ پرايد', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(11, 'Pride Suspension Pivot', NULL, '', '', 0, '', '', '9.jpg', 'سگدست پرايد', 'قطعه واسطه مجموعه فرمان خودرو', '', 0),
(12, 'Pride Diffbox', NULL, '', '', 0, '', '', '10.jpg', 'هوزينگ پرايد', 'قطعه ديفرانسيل سيستم انتقال قدرت خودرو', '', 0),
(13, 'Pride Brake Caliper', NULL, '', '', 0, '', '', '11.jpg', 'کاليپر ترمز پرايد', 'قطعه ترمز چرخ سيستم ترمز خودرو', '', 0),
(14, 'Pride Bearing Cap Axle Housing', NULL, '', '', 0, '', '', '12.jpg', 'کپه ياتان پرايد', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(15, 'Pride Brake Arm', NULL, '', '', 0, '', '', '13.jpg', 'رکابي پرايد', 'قطعه واسطه سيستم چرخ و شاسي', '', 0),
(16, 'Patrol Differential Housing Bevel Pinion', NULL, '', '', 0, '', '', '14.jpg', 'کله گاوي پاترول', 'قطعه ديفرانسيل سيستم انتقال قدرت خودرو', '', 0),
(17, 'Nissan Hub Road Wheel ', NULL, '', '', 0, '', '', '16.jpg', 'توپي چرخ جلو نيسان', 'قطعه واسط سيستم انتقال قدرت خودرو', '', 0),
(18, 'Nissan Hub Road Wheel ', NULL, '', '', 0, '', '', '17.jpg', 'توپي چرخ عقب نيسان', 'قطعه واسط سيستم انتقال قدرت خودرو', '', 0),
(19, 'Nissan Diffbox', NULL, '', '', 0, '', '', '18.jpg', 'هوزينگ نيسان', 'قطعه ديفرانسيل سيستم اتتقال قدرت خودرو', '', 0),
(20, 'Nissan Differential Housing Bevel Pinion', NULL, '', '', 0, '', '', '19.jpg', 'کله گاوي نيسان', 'قطعه ديفرانسيل سيستم انتقال قدرت خودرو', '', 0),
(21, 'Nissan shaft cylander', NULL, '', '', 0, '', '', '20.jpg', 'سيلندر هرزگرد نيسان', 'قطعه واسطه فرمان', '', 0),
(22, 'Nissan Cap Axle Differential H.B.P', NULL, '', '', 0, '', '', '21.jpg', 'کپه نيسان', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(23, 'Nissan Differential Housing Bevel Pinion', NULL, '', '', 0, '', '', '22.jpg', 'پوسته کلاچ نيسان', 'قطعه سيستم انتقال قدرت خودرو', '', 0),
(24, 'Nissan Pot Shell ', NULL, '', '', 0, '', '', '23.jpg', 'پوسته گلداني نيسان', 'قطعه جعبه دنده خودرو', '', 0),
(25, 'ROA Hub Road Wheel ', NULL, '', '', 0, '', '', '24.jpg', 'توپي چرخ روا', 'قطعه واسط سيستم انتقال قدرت خودرو', '', 0),
(26, 'ROA Differential Housing Bevel Pinion', NULL, '', '', 0, '', '', '25.jpg', 'کله گاوي روا', 'قطعه ديفرانسيل سيستم انتقال قدرت خودرو', '', 0),
(27, 'ROA Brake Caliper', NULL, '', '', 0, '', '', '26.jpg', 'کاليپر ترمز اصلي روا', 'قطعه ترمز چرخ سيستم ترمز خودرو', '', 0),
(28, 'ROA Brake Caliper', NULL, '', '', 0, '', '', '27.jpg', 'کاليپر ترمز فرعي روا', 'قطعه ترمز چرخ سيستم ترمز خودرو', '', 0),
(29, 'ROA Diffbox', NULL, '', '', 0, '', '', '30.jpg', 'هوزينگ روا', 'قطعه ديفرانسيل سيستم انتقال قدرت خودرو', '', 0),
(30, 'ROA Differential Box ', NULL, '', '', 0, '', '', '32.jpg', 'پوسته مرکزي روا', 'قطعه واسط سيستم انتقال قدرت خودرو', '', 0),
(31, '806 Hub Road Wheel', NULL, '', '', 0, '', '', '34.jpg', 'توپي چرخ خاور', 'قطعه واسط سيستم انتقال قدرت خودرو', '', 0),
(32, 'EF7 Cap Axle', NULL, '', '', 0, '', '', '35.jpg', 'كپه سمند', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(33, 'Flywheel', NULL, '', '', 0, '', '', '36.jpg', 'فلايويل', 'قطعه موتور سيستم انتقال قدرت خودرو', '', 0),
(34, '206 Rear Suspension Arm', NULL, '', '', 0, '', '', '37.jpg', 'بازويي چرخ 206', 'قطعه مجموعه تعليق خودرو', '', 0),
(35, '206 Rear Axle Crossmember', NULL, '', '', 0, '', '', '38.jpg', 'بازويي اتاق 206', 'قطعه مجموعه تعليق خودرو', '', 0),
(36, '206 Suspension Pivot', NULL, '', '', 0, '', '', '39.jpg', 'سگدست 206', 'قطعه واسطه مجموعه فرمان خودرو', '', 0),
(37, 'L90 Suspension Pivot', NULL, '', '', 0, '', '', '40.jpg', 'سگدست ال 90', 'قطعه واسطه مجموعه فرمان خودرو', '', 0),
(38, 'TU5 Manifold', NULL, '', '', 0, '', '', '41.jpg', 'مانيفولد TU5', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(39, 'TU3Manifold', NULL, '', '', 0, '', '', '42.jpg', 'مانيفولد TU3', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(40, 'OHV Manifold', NULL, '', '', 0, '', '', '43.jpg', 'مانيفولد OHV', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(41, 'EF7 Manifold', NULL, '', '', 0, '', '', '44.jpg', 'مانيفولد EF7', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(42, 'XU7 Manifold', NULL, '', '', 0, '', '', '45.jpg', 'مانيفولد XU7', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(43, 'Patrol Differential Box', NULL, '', '', 0, '', '', '47.jpg', 'توپي چرخ پاترول', 'قطعه واسطه سيستم انتقال قدرت خودرو', '', 0),
(44, 'Nissan Brake Disk ', NULL, '', '', 0, '', '', '48.jpg', 'ديسك ترمز نيسان', 'قطعه ترمز چرخ سيستم ترمز خودرو', '', 0),
(45, 'Pride Rear Brake Socket', NULL, '', '', 0, '', '', '49.jpg', 'كاسه چرخ پرايد', 'قطعه واسطه سيستم انتقال قدرت خودرو', '', 0),
(46, 'Nissan Gear Box', NULL, '', '', 0, '', '', '50.jpg', 'جعبه دنده نيسان', 'قطعه مجموعه سيستم انتقال قدرت خودرو', '', 0),
(47, 'ROA Gear Box', NULL, '', '', 0, '', '', '51.jpg', 'جعبه دنده روا', 'قطعه مجموعه سيستم انتقال قدرت خودرو', '', 0),
(48, 'XU7 Crank Shaft', NULL, '', '', 0, '', '', '52.jpg', 'ميل لنگ 405', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(49, 'EF7 Crank Shaft', NULL, '', '', 0, '', '', '53.jpg', 'ميل لنگ EF7', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(50, 'OHV Crank Shaft ', NULL, '', '', 0, '', '', '54.jpg', 'ميل لنگ OHV', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(51, 'TU3 Crank Shaft', NULL, '', '', 0, '', '', '55.jpg', 'ميل لنگ TU3', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0),
(52, 'TU5 Crank Shaft"', NULL, '', '', 0, '', '', '56.jpg', 'ميل لنگ TU5', 'قطعه موتور سيستم مولد قدرت خودرو', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
