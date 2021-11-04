-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th10 04, 2021 lúc 04:13 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hungphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `loai` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia` double NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `loai`, `gia`, `soluong`) VALUES
(1, 'Kính thiên văn Celestron', 'Celestron Khúc xạ', 1500000, 150),
(23, 'Máy giặt Panasonic', 'Đồ gia dụng', 2000000, 5),
(26, 'Quạt Sanzo', 'Đồ gia dụng', 500000, 1258),
(27, 'Đèn học Rạng Đông', 'Đồ dùng hoc tập', 35000, 10),
(31, 'Quạt điện ', 'Đồ gia dụng', 150000, 3),
(32, 'cà phê nâu', 'đồ uống', 120000, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(10) NOT NULL,
  `tendangnhap` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `tendangnhap`, `matkhau`, `ten`, `sdt`, `level`) VALUES
(1, 'admin', 'admin', 'Hùng Steven', '0123456789', 1),
(28, 'danghung', '123', 'Văn Hùng', '013213224', 2),
(33, 'vutienhoa', '123456', 'Vũ Tiến Hóa', '0132468456', 2),
(35, 'anhtuan', '1234', 'nguyễn anh tuấn', '012345678', 2),
(36, '123', '123', '112', '112', 2),
(38, 'anhtuan', '1234', 'nguyễn anh tuấn', '112', 2),
(41, 'anhtuan', '1234', 'nguyễn anh tuấn', '112', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tonkho`
--

CREATE TABLE `tonkho` (
  `id_tonkho` int(10) NOT NULL,
  `soluong` int(50) NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
