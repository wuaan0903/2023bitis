-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2023 lúc 03:32 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bitis`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `price` int(30) NOT NULL,
  `size` int(30) NOT NULL,
  `soluong` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `product_name`, `product_image`, `price`, `size`, `soluong`) VALUES
(120, 1, 2, '[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700DOO (Đỏ)', 'https://product.hstatic.net/1000230642/product/dsmh09700doo__2__38f66965910143b9bd7a60b3e46105cb_grande.jpg', 1236000, 36, 1),
(121, 1, 2, '[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700DOO (Đỏ)', 'https://product.hstatic.net/1000230642/product/dsmh09700doo__2__38f66965910143b9bd7a60b3e46105cb_grande.jpg', 1236000, 38, 1),
(122, 1, 2, '[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700DOO (Đỏ)', 'https://product.hstatic.net/1000230642/product/dsmh09700doo__2__38f66965910143b9bd7a60b3e46105cb_grande.jpg', 1236000, 36, 1),
(123, 1, 2, '[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700DOO (Đỏ)', 'https://product.hstatic.net/1000230642/product/dsmh09700doo__2__38f66965910143b9bd7a60b3e46105cb_grande.jpg', 1236000, 36, 1),
(124, 3, 2, '[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700DOO (Đỏ)', 'https://product.hstatic.net/1000230642/product/dsmh09700doo__2__38f66965910143b9bd7a60b3e46105cb_grande.jpg', 1236000, 36, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_nam`
--

CREATE TABLE `menu_nam` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_nam`
--

INSERT INTO `menu_nam` (`id`, `name`) VALUES
(1, 'HUNTER'),
(2, 'SANDAL'),
(3, 'GIÀY THỂ THAO'),
(4, 'GIÀY CHẠY BỘ'),
(5, 'GIÀY ĐÁ BANH'),
(6, 'GIÀY TÂY'),
(7, 'DÉP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `old_price` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `image_hover` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `old_price`, `image`, `image_hover`) VALUES
(1, '[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700TRG (Trắng)', 1236000, 1300000, 'https://product.hstatic.net/1000230642/product/-40-nam-giay-the-thao-nu-hunter-x-dswh09700trg-trang-3f7uk-color-trang_a842220156324c1ea80630beab7df323_grande.jpg', 'https://product.hstatic.net/1000230642/product/dsmh09700trg__5__669aaa867ce24e848d2e3d6c82ec1dc1_grande.jpg'),
(2, '[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700DOO (Đỏ)', 1236000, 1300000, 'https://product.hstatic.net/1000230642/product/dsmh09700doo__2__38f66965910143b9bd7a60b3e46105cb_grande.jpg', 'https://product.hstatic.net/1000230642/product/dsmh09700doo__5__30182ed07d804cd3977ed39bf19e5303_grande.jpg'),
(3, 'Giày Thể Thao Nam Hunter Tennis DSMH10200XAM (Xám)', 751000, 800000, 'https://product.hstatic.net/1000230642/product/dsmh10200xam__2__fd7a0050ed804686a07972c95945a08a_grande.jpg', 'https://product.hstatic.net/1000230642/product/dsmh10200xam__5__960001f0c3aa4435b8d8194ebe853172_grande.jpg'),
(4, 'Giày Thể Thao Nam Hunter Tennis DSMH10200TRG (Trắng)', 751000, 800000, 'https://product.hstatic.net/1000230642/product/dsmh10200trg__2__72f64d95e47a49b58b0aeb40ae026ec8_grande.jpg', 'https://product.hstatic.net/1000230642/product/dsmh10200trg__5__7e088310d2324579a23653c064e824b0_grande.jpg'),
(5, 'Giày Thể Thao Nam DSM075033XAM (Xám)', 751000, 800000, 'https://product.hstatic.net/1000230642/product/dsm075033xam__2__eb67a70ccbe444e096752a444748505e_grande.jpg', 'https://product.hstatic.net/1000230642/product/dsm075033xam__5__d25de82488fa4773b20b5f06fade05d5_grande.jpg'),
(6, 'Giày Thể Thao Nữ Hunter X - X-NITE 22 Collection DSWH10500KEM (Kem)', 917100, 1000000, 'https://product.hstatic.net/1000230642/product/dswh10500kem__2__1556c71ce52b4d13bf1487ba32b57f9a_grande.jpg', 'https://product.hstatic.net/1000230642/product/dswh10500kem__5__5dd1b6f03a7d43d2981570695668a45d_grande.jpg'),
(7, 'Giày Thể Thao Nữ Hunter X - X-NITE 22 Collection DSWH10500XAM (Xám)', 917100, 1000000, 'https://product.hstatic.net/1000230642/product/dswh10500xam__2__26d959e3f23e4286a588d631678d7ef2_grande.jpg', 'https://product.hstatic.net/1000230642/product/dswh10500xam__5__a984b5419ad04128bdf41b1a99a8027a_grande.jpg'),
(8, 'Giày Thể Thao Nữ Hunter X - X-NITE 22 Collection DSWH10500TRG (Trắng)', 917100, 1000000, 'https://product.hstatic.net/1000230642/product/dsmh10500trg__2__2d0991d8535b4312ab1f699d96c09872_grande.jpg', 'https://product.hstatic.net/1000230642/product/dsmh10500trg__5__2a79f5a2a361402087a7c706f0281355_grande.jpg'),
(9, 'Giày Thể Thao Nữ Hunter Street x VietMax Vietnam Arising DSWH05502TRG (Trắng)', 1412100, 1500000, 'https://product.hstatic.net/1000230642/product/dsc_0322_a561a175903d445eaf7758c8aa101c05_grande.jpg', 'https://product.hstatic.net/1000230642/product/dsmh05502trg__5__eb6191738e344e96a0e09f5378e24ea1_grande.jpg'),
(10, 'Giày Thể Thao Nữ Hunter Street x VietMax Vietnam Arising DSWH05501DEN (Đen)', 1412100, 1500000, 'https://product.hstatic.net/1000230642/product/dsc_0107_5d4c7d7f6b4d44f98b84ce27a12a103e_grande.jpg', 'https://product.hstatic.net/1000230642/product/dsmh05501den__5__a628b22fabf7498f8a83565289fe4d5b_grande.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(30) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `email`, `pass`, `mobile`) VALUES
(1, 'Nguyễn', 'Quân', 'Nam', 'a123@gmail.com', '1', 942909584),
(2, 'Nguyễn', 'Quân', 'Nam', 'q@gmail.com', '1', 942909584),
(3, 'Nguyễn', 'Quân', 'Nam', 'a@gmail.com', '1', 942909584);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_nam`
--
ALTER TABLE `menu_nam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT cho bảng `menu_nam`
--
ALTER TABLE `menu_nam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
