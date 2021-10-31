-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2021 lúc 04:34 PM
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
-- Cấu trúc bảng cho bảng `info_tour`
--

CREATE TABLE `info_tour` (
  `tour_id` int(11) UNSIGNED NOT NULL,
  `tour_price` double NOT NULL,
  `starting_gate` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `tour_traffic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `info_tour`
--

INSERT INTO `info_tour` (`tour_id`, `tour_price`, `starting_gate`, `destination`, `starting_date`, `ending_date`, `time`, `tour_traffic`) VALUES
(1, 3499000, 'Hồ Chí Minh', 'Đà Nẵng - Ngũ Hành Sơn - Bà Nà - Phố Cổ Hội An', '2021-11-01', '2021-11-03', '3 ngày 2 đêm', 'Xe du lịch, Máy bay  '),
(2, 4699000, 'Hồ Chí Minh', 'Đà Nẵng - Huế - Thánh Địa La Vang - Động Phong Nha', '2021-11-04', '2021-11-08', '4 ngày 3 đêm', 'Xe du lịch, máy bay'),
(3, 1890000, 'Hà Nội', 'Hà Nội - Sapa - Bản Cát Cát - Fansipan', '2021-11-02', '2021-11-04', '2 ngày 1 đêm', 'Xe du lịch');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `info_tour`
--
ALTER TABLE `info_tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `info_tour`
--
ALTER TABLE `info_tour`
  MODIFY `tour_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
