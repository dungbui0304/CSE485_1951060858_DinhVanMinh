-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2021 lúc 08:24 AM
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
-- Cấu trúc bảng cho bảng `tour_user`
--

CREATE TABLE `tour_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_fullName` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_registerDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour_user`
--

INSERT INTO `tour_user` (`user_id`, `user_fullName`, `user_email`, `user_pass`, `user_phone`, `user_registerDate`) VALUES
(1, 'phạm thành đạt', 'dat@gmail.com', 'abc', '0396179000', '2021-10-30'),
(2, 'Phạm Thành Đông', 'dong1@gmail.com', '123', '', '0000-00-00'),
(5, 'Bùi thế Dũng', 'dung1231@tlu.edu.vn', '123', '0000000001', '0000-00-00'),
(6, 'đinh văn minh', 'minhkt@tlu.edu.vn', '123', '0000000001', '0000-00-00'),
(7, 'Đinh Văn Minh', '123caa@tlu.edu.vn', '123', '0000000001', '0000-00-00'),
(8, 'Đinh Văn Minh', 'phamdat171201@tlu.edu.vn', 'qưe', '0000000001', '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tour_user`
--
ALTER TABLE `tour_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tour_user`
--
ALTER TABLE `tour_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

