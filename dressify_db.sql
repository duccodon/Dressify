-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 25, 2024 lúc 05:58 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dressify_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `cus_id` int(255) NOT NULL,
  `owner_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'checkout'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `cus_id`, `owner_id`, `product_id`, `status`) VALUES
(5, 0, 4, 47, 'checkout'),
(15, 5, 4, 44, 'checkout');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contact_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`cus_id`, `username`, `email`, `password`, `fullname`, `address`, `country`, `city`, `contact_number`, `avatar`, `user_type`) VALUES
(1, 'Friends', 'friends@gmail.com', '$2y$10$G..7g77YHRui7X3.V7V9ue3aXQ18dJlNPlgeErrio0akpoltpiB2a', 'admin', '227, Nguyễn Văn Cừ, P4, Q5', 'Việt Nam', 'Hồ Chí Minh', '909111111', '', 'admin'),
(3, 'thienduc1', '123@gmail.com', '1234', 'thienduc', '227, Nguyễn Văn Cừ, P4, Q5', 'Việt Nam', 'Hồ Chí Minh ', '909123456', '', 'Customer'),
(4, 'owner1', 'abc@gmail.com', '$2y$10$G..7g77YHRui7X3.V7V9ue3aXQ18dJlNPlgeErrio0akpoltpiB2a', 'owner1', '227, Nguyễn Văn Cừ, P4, Q5', 'Việt Nam', 'Ha Noi', '909123123', '', 'Rental Owner'),
(5, 'hoang tester', 'test@gmail.com', '$2y$10$A6DH2a0B2vgutZTfeKRgfOklqIQuK7WuvKQeW2T4n8XpAM5UXXeoK', 'tester', '227, Nguyễn Văn Cừ, P4, Q5', 'Việt Nam', 'Hồ Chí Minh ', '0909123456', '', 'Customer'),
(6, 'test1', 'test1@gmail.com', '$2y$10$G..7g77YHRui7X3.V7V9ue3aXQ18dJlNPlgeErrio0akpoltpiB2a', 'test1', '227, Nguyễn Văn Cừ, P4, Q5', 'Việt Nam', 'Hồ Chí Minh ', '1231233', '', 'Customer'),
(7, 'Minh Quan', 'quan@gmail.com', '$2y$10$jf09FxzxeW2jmW6LQuk84e2KK9txsyMiYrGk8b2KD7Z4kus5HdtQ6', 'quan', '227, Nguyễn Văn Cừ, P4, Q5', 'Việt Nam', 'Hồ Chí Minh ', '1231233', '', 'Customer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delivery_unit`
--

CREATE TABLE `delivery_unit` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `delivery_unit`
--

INSERT INTO `delivery_unit` (`id`, `name`, `price`) VALUES
(1, 'Giao Hang Tiet Kiem', '5000'),
(2, 'GHN', '15000'),
(3, 'Ahamove', '12000'),
(4, 'Grab', '10000'),
(5, 'Shopee', '8000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discount`
--

CREATE TABLE `discount` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `discount_code` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cus_id` INT(11) NOT NULL,
  `discount_value` DECIMAL(10, 2) NOT NULL,
  `image_url` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `rate` int(255) NOT NULL,
  `tracking_id` int(255) NOT NULL,
  `report_to_id` int(255) NOT NULL,
  `image1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `problem_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `from_id` int(255) NOT NULL,
  `to_id` int(255) NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `cus_id` int(255) NOT NULL,
  `owner_id` int(255) NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contact_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_start` date NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `shipping_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `delivery_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `total` int(255) NOT NULL,
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `owner_id` int(255) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `stock` int(255) NOT NULL,
  `approve` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `owner_id`, `product_name`, `description`, `price`, `category`, `image3`, `image1`, `image2`, `stock`, `approve`) VALUES
(44, 4, 'test', 'aefawefawef', '1234123413', 'aeraewr', '', 'short.jpg', '', 10, 'True'),
(47, 4, 'ao cua hoang', 'hoang rat thich', '1200000', 'ao', '', 'ao.jpg', '', 5, 'True');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `cus_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlist`
--

INSERT INTO `wishlist` (`id`, `product_id`, `cus_id`) VALUES
(1, 39, 5),
(2, 44, 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `delivery_unit`
--
ALTER TABLE `delivery_unit`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `delivery_unit`
--
ALTER TABLE `delivery_unit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
