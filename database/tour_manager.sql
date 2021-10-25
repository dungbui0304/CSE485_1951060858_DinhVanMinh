-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- MÃ¡y chá»§: 127.0.0.1
-- Thá»i gian Ä‘Ã£ táº¡o: Th10 25, 2021 lÃºc 10:51 AM
-- PhiÃªn báº£n mÃ¡y phá»¥c vá»¥: 10.4.21-MariaDB
-- PhiÃªn báº£n PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- CÆ¡ sá»Ÿ dá»¯ liá»‡u: `db_travel`
--

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `tour_manager`
--

CREATE TABLE `tour_manager` (
  `tour_id` varchar(255) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `tour_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chá»‰ má»¥c cho cÃ¡c báº£ng Ä‘Ã£ Ä‘á»•
--

--
-- Chá»‰ má»¥c cho báº£ng `tour_manager`
--
ALTER TABLE `tour_manager`
  ADD PRIMARY KEY (`tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
