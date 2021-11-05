-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 04:41 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_travel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_booking`
--

CREATE TABLE `tour_booking` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `book_fullName` varchar(255) NOT NULL,
  `book_email` varchar(255) NOT NULL,
  `book_phone` varchar(255) NOT NULL,
  `book_address` varchar(255) NOT NULL,
  `book_note` varchar(255) NOT NULL,
  `book_numberPeople` int(10) NOT NULL,
  `book_numberRoom` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour_booking`
--

INSERT INTO `tour_booking` (`book_id`, `book_fullName`, `book_email`, `book_phone`, `book_address`, `book_note`, `book_numberPeople`, `book_numberRoom`) VALUES
(1, 'phạm thành đạt', 'dat123@gmail.com', '0396179411', 'Hải Dương', 'Thanh Hà-Thanh Hồng', 3, 2),
(2, 'a', 'minhdv1@gmail.com', '0396179411', 'a', 'a', 2, 2),
(3, '', 'minhdv12@gmail.com', '', '', '', 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tour_booking`
--
ALTER TABLE `tour_booking`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tour_booking`
--
ALTER TABLE `tour_booking`
  MODIFY `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
