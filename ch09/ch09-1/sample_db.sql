-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-05-02: 09:33:16
-- 伺服器版本: 5.6.17
-- PHP 版本： 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `sample_db`
--
CREATE DATABASE IF NOT EXISTS `sample_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sample_db`;

-- --------------------------------------------------------

--
-- 資料表結構 `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `usr_id` varchar(10) NOT NULL,
  `score` int(3) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 資料表的匯出資料 `score`
--

INSERT INTO `score` (`usr_id`, `score`, `subject`, `id`) VALUES
('S201600001', 65, 'C', 1),
('S201600002', 65, 'C', 2),
('S201600001', 75, 'database', 3),
('S201600002', 85, 'database', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
