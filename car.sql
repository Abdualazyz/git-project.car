-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 06 نوفمبر 2023 الساعة 17:50
-- إصدار الخادم: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- بنية الجدول `ca`
--

DROP TABLE IF EXISTS `ca`;
CREATE TABLE IF NOT EXISTS `ca` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `model` varchar(25) NOT NULL,
  `color` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `bno` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `ca`
--

INSERT INTO `ca` (`no`, `model`, `color`, `image`, `bno`) VALUES
(203, 'yukon', 'black', 'img/1699292987_', 78);

-- --------------------------------------------------------

--
-- بنية الجدول `cardb`
--

DROP TABLE IF EXISTS `cardb`;
CREATE TABLE IF NOT EXISTS `cardb` (
  `bno` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(25) NOT NULL,
  PRIMARY KEY (`bno`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `cardb`
--

INSERT INTO `cardb` (`bno`, `brand`) VALUES
(78, 'gmc');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `bno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `pass` int(50) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`bno`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`bno`, `name`, `uname`, `pass`, `level`) VALUES
(7, 'aziz', 'aziz21', 123, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
