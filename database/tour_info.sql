-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 06:37 PM
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
-- Cấu trúc bảng cho bảng `tour_info`
--

CREATE TABLE `tour_info` (
  `tour_id` int(11) NOT NULL,
  `tour_price` double NOT NULL,
  `starting_gate` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `tour_traffic` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour_info`
--

INSERT INTO `tour_info` (`tour_id`, `tour_price`, `starting_gate`, `destination`, `starting_date`, `ending_date`, `time`, `tour_traffic`, `description`, `img`) VALUES
(1, 3499000, 'Hà Nội', 'Đà Nẵng - Ngũ Hành Sơn - Bà Nà - Phố Cổ Hội An', '2021-11-01', '2021-11-03', '3 ngày 2 đêm', 'Xe du lịch, Máy bay', 'If you have any questions, please feel free to drop me a line. If you don\'t get an answer immediately, I might just be travelling through the middle of nowhere. I\'ll get back to you as soon as I can. That\'s a promise!', 'assest/img/da-nang-ngu-hanh-son.jpg\r\n'),
(2, 4699000, 'Hồ Chí Minh', 'Đà Nẵng - Huế - Thánh Địa La Vang - Động Phong Nha', '2021-11-04', '2021-11-08', '4 ngày 3 đêm', 'Xe du lịch, máy bay', '', 'assest/img/da-nang-hoi-an.jpg'),
(3, 4899000, 'Hồ Chí Minh', 'Đà Nẵng - Huế - Thánh Địa La Vang - Động Thiên Đường', '2021-11-02', '2021-11-04', '2 ngày 1 đêm', 'Xe du lịch, máy bay', '', 'assest/img/da-nang-hoi-an-hue.jpg'),
(4, 5499000, 'Hà Nội', 'Quy Nhơn - Phú Yên giá tốt', '2021-11-10', '2021-11-13', '3ngày 2đêm', 'xe du lịch, máy bay', '', 'assest/img/tour-quy-nhon-gia-tot-du-lich-viet.jpg'),
(5, 7599000, 'Đà Nẵng', 'Phan Thiết - Cát Vàng - Mũi Né - Hòn Rơm - Lâu Đài Rượu Vang', '2021-11-02', '2021-11-07', '5ngày 4đêm', 'xe du lịnh, máy bay', '', 'assest/img/du-lich-phan-thiet-tua-mui-ne-du-lich-viet.jpg'),
(6, 6999000, 'Đà Nẵng', 'Phú Quốc - Grand World - Checkin Dòng Sông Venice - Vinwonders', '2021-11-06', '2021-11-09', '3ngày 2đêm', 'xe du lịch, máy bay', '', 'assest/img/kinh-nghiem-tua-phu-quoc-du-lich-viet.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tour_info`
--
ALTER TABLE `tour_info`
  ADD PRIMARY KEY (`tour_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tour_info`
--
ALTER TABLE `tour_info`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
