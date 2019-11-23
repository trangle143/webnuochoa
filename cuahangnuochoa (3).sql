-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2019 lúc 02:48 AM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuahangnuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sanpham_id` bigint(20) UNSIGNED NOT NULL,
  `noidung` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `user_id`, `sanpham_id`, `noidung`, `created_at`, `updated_at`) VALUES
(5, 1, 40, 'sản phẩm ổn. giao đúng ngày', '2019-11-08 03:50:34', '2019-11-08 03:50:34'),
(6, 1, 0, 'sản phẩm ok. gói hàng ok. giao hàng ok', '2019-11-08 03:51:17', '2019-11-08 03:51:17'),
(7, 3, 0, 'giao hàng đúng hen', '2019-11-08 03:52:18', '2019-11-08 03:52:18'),
(8, 1, 0, 'sản phẩm chất lượng', '2019-11-09 06:03:28', '2019-11-09 06:03:28'),
(9, 3, 0, 'sản phẩm gói đẹp và giao đúng hẹn', '2019-11-09 06:04:32', '2019-11-09 06:04:32'),
(10, 3, 0, 'ffsegg', '2019-11-09 06:23:36', '2019-11-09 06:23:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `donhang_id` bigint(10) UNSIGNED NOT NULL,
  `sanpham_id` bigint(10) UNSIGNED NOT NULL,
  `quantily` bigint(10) NOT NULL,
  `dongia` double NOT NULL,
  `tongtien` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `donhang_id`, `sanpham_id`, `quantily`, `dongia`, `tongtien`) VALUES
(1, 1, 57, 1, 3540000, 3540000),
(2, 1, 58, 1, 3540000, 3540000),
(3, 1, 1, 1, 2350000, 2350000),
(4, 2, 58, 1, 3540000, 3540000),
(5, 2, 57, 1, 3540000, 3540000),
(6, 3, 53, 1, 4650000, 4650000),
(7, 3, 54, 1, 3400000, 3400000),
(8, 3, 49, 1, 1500000, 1500000),
(9, 3, 50, 1, 2500000, 2500000),
(10, 4, 44, 1, 3780000, 3780000),
(11, 4, 43, 1, 2720000, 2720000),
(12, 4, 2, 1, 2350000, 2350000),
(13, 4, 31, 1, 2000000, 2000000),
(14, 5, 38, 2, 3500000, 7000000),
(15, 5, 39, 1, 1500000, 1500000),
(16, 7, 0, 1, 3540000, 3540000),
(17, 7, 57, 1, 3540000, 3540000),
(18, 7, 30, 1, 4580000, 4580000),
(19, 8, 0, 1, 3540000, 3540000),
(20, 8, 48, 1, 3478000, 3478000),
(21, 8, 36, 1, 3978000, 3978000),
(22, 9, 46, 2, 2350000, 4700000),
(23, 9, 49, 1, 1500000, 1500000),
(24, 10, 1, 1, 2350000, 2350000),
(25, 10, 57, 1, 3540000, 3540000),
(26, 11, 0, 1, 3540000, 3540000),
(27, 11, 57, 1, 3540000, 3540000),
(28, 12, 0, 1, 3540000, 3540000),
(29, 12, 57, 1, 3540000, 3540000),
(30, 13, 0, 1, 3540000, 3540000),
(31, 14, 36, 1, 3978000, 3978000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `khachhang_id` bigint(10) UNSIGNED NOT NULL,
  `ngaydathang` date NOT NULL,
  `tongtien` double NOT NULL,
  `thanhtoan` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'Thanh toán trực tiếp',
  `ghichu` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tinhtrang` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `khachhang_id`, `ngaydathang`, `tongtien`, `thanhtoan`, `ghichu`, `tinhtrang`) VALUES
(1, 1, '2019-11-05', 9430000, 'Thanh toán trực tiếp', 'ewf', 1),
(2, 2, '2019-11-06', 7080000, 'Thanh toán trực tiếp', 'thụ phu', 2),
(3, 3, '2019-11-06', 12050000, 'Thanh toán trực tiếp', 'free ship', 3),
(4, 4, '2019-11-06', 10850000, 'Thanh toán trực tiếp', 'dsfwè', 1),
(5, 5, '2019-11-06', 8500000, 'Thanh toán trực tiếp', 'tga', 1),
(6, 6, '2019-11-07', 0, 'Thanh toán trực tiếp', 'qr', 1),
(7, 7, '2019-11-08', 11660000, 'Thanh toán trực tiếp', 'Miễn phí vẫn chuyển', 1),
(8, 8, '2019-11-08', 10996000, 'Thanh toán trực tiếp', 'tuấn tấn tần', 1),
(9, 30, '2019-11-09', 6200000, 'Thanh toán trực tiếp', 'ẻh', 1),
(10, 31, '2019-11-09', 5890000, 'Thanh toán trực tiếp', 'Gói quà sinh nhật', 1),
(11, 44, '2019-11-09', 7080000, 'Thanh toán trực tiếp', 'Test2Test2Test2', 1),
(12, 45, '2019-11-09', 7080000, 'Thanh toán trực tiếp', 'dfhdrh', 1),
(13, 47, '2019-11-09', 3540000, 'Thanh toán trực tiếp', 'trutru', 1),
(14, 62, '2019-11-21', 3978000, 'Thanh toán trực tiếp', 'dawdawd', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh`
--

CREATE TABLE `hinh` (
  `id` bigint(20) NOT NULL,
  `sp_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hinh`
--

INSERT INTO `hinh` (`id`, `sp_id`, `hinhanh`) VALUES
(1, 0, '1.jpg'),
(2, 0, '2.jpg'),
(3, 0, '3.jpg'),
(4, 0, '4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thanhtoan` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thongtin` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `ten`, `gioitinh`, `diachi`, `sdt`, `ghichu`, `thanhtoan`, `thongtin`) VALUES
(1, 'dfs', 'Chị', 'sfe', 'd', 'ewf', '', NULL),
(2, 'Tuấn', 'Anh', 'le hong phong', '0918838822', 'thụ phu', '', NULL),
(3, 'Lam Vy', 'Chị', 'tran hung dao', '1231231231', 'free ship', '', NULL),
(4, 'Tuấn', 'Chị', 'sdfcsdv', '0999999999', 'dsfwè', '', NULL),
(5, 'Long', 'Anh', 'phạm ngũ lão', '0898410046', 'tga', '', NULL),
(6, 'fè', 'Chị', 'eqừ', 'ư', 'qr', '', NULL),
(7, 'Nguyễn Văn A', 'Anh', 'Trần Hưng Đạo, Phường An Nghiệp, Quận Ninh Kiều, TPCT', '0367897654', 'Miễn phí vẫn chuyển', '', NULL),
(8, 'Trang', 'Chị', 'Nguyễn Văn Cừ', '0918838822', 'tuấn tấn tần', '', NULL),
(9, 'Thắm', 'Chị', 'Trần Văn Hoài, Quận Cái Khế,  TP.Cần Thơ', '0123768945', 'giao tới nhà', '', NULL),
(10, 'Thắm', 'Anh', 'Trần Văn Hoài, Quận Cái Khế,  TP.Cần Thơ', '0123768945', 'giao tới nhà', '', NULL),
(11, 'trang lê', 'Chị', 'lê hồng phong', '0918838822', 'giao hàng tận nhà', '', NULL),
(12, 'Le Minh Trang', 'Chị', 'trần hưng đạo', '0918838822', 'miễn phí giao hàng', '', NULL),
(13, 'Le Minh Trang', 'Chị', 'trần hưng đạo', '0918838822', 'miễn phí giao hàng', '', NULL),
(14, 'Le Minh Anh', 'Chị', 'phan ngọc hiển', '0918838822', 'miễn phí giao hàng', '', NULL),
(15, 'Le Minh Anh', 'Chị', 'phan ngọc hiển', '0918838822', 'miễn phí giao hàng', '', NULL),
(16, 'Nguyễn Hoàng A`', 'Anh', 'Trần Văn Hoài, Quận Ninh Kiều, TP.Cần Thơ', '01669943439', 'Gói hàng và giao tận nhà', '', NULL),
(17, 'Nguyễn Hoàng A`', 'Anh', 'Trần Văn Hoài, Quận Ninh Kiều, TP.Cần Thơ', '01669943439', 'Gói hàng và giao tận nhà', '', NULL),
(18, 'Nguyễn Hoàng A`', 'Anh', 'Trần Văn Hoài, Quận Ninh Kiều, TP.Cần Thơ', '01669943439', 'Gói hàng và giao tận nhà', '', NULL),
(19, 'Nguyễn Hoàng A`', 'Anh', 'Trần Văn Hoài, Quận Ninh Kiều, TP.Cần Thơ', '01669943439', 'Gói hàng và giao tận nhà', '', NULL),
(20, 'Nguyễn Hoàng A`', 'Anh', 'Trần Văn Hoài, Quận Ninh Kiều, TP.Cần Thơ', '01669943439', 'Gói hàng và giao tận nhà', '', NULL),
(21, 'Trang', 'Anh', 'ưeTGY4W', '0918838822', '43T44', '', NULL),
(22, 'Nguyễn Hoàng B', 'Anh', 'Phạm Ngũ Lão', '0918838822', 'giao hàng đúng địa chỉ', '', NULL),
(23, 'Lê Văn B', 'Anh', 'Lê Hồng Phong', '0918838822', 'Giao hàng đúng hẹn', '', NULL),
(24, 'Lê Văn B', 'Anh', 'Lê Hồng Phong', '0918838822', 'Giao hàng đúng hẹn', '', NULL),
(25, 'dsfsF', 'Nữ', 'FSDGSG', '0999999999', 'SDGSD', '', NULL),
(26, 'dsfsF', 'Nữ', 'FSDGSG', '0999999999', 'SDGSD', '', NULL),
(27, 'Le Minh C', 'Nữ', 'Lê Hồng Phong', '0123678543', 'gói quà tặng', '', NULL),
(28, 'Le Minh C', 'Nữ', 'Lê Hồng Phong', '0123678543', 'gói quà tặng', '', NULL),
(29, 'Trang', 'Nữ', 'nguyễn thị minh khai', '0918838822', 'gói quà tặng sinh nhật', '', NULL),
(30, 'ẻagẻ', 'Chị', 'hẻ', 'ẻ', 'ẻh', '', NULL),
(31, 'Le Minh A', 'Chị', 'Nguyễn Văn Cừ', '0918565656', 'Gói quà sinh nhật', '', NULL),
(32, 'Hồ Thị B', 'Nữ', 'Lê Hồng Phong', '01882277889', 'Gói quà tặng 20/11', '', NULL),
(33, 'A Huy B', 'Nam', 'Trần Quang Diệu', '0918838822', 'Giao hàng cho khách', '', NULL),
(34, 'Le Minh A', 'Nam', 'Đường 30/4', '01669943439', 'Giao hàng và gói quà miễn phí', '', NULL),
(35, 'Le Minh A', 'Nam', 'Đường 30/4', '01669943439', 'Giao hàng và gói quà miễn phí', '', NULL),
(36, 'Le Minh A', 'Nữ', 'Trần Quang Diệu', '0123678543', 'Gói quà và vận chuyển giao hàng miễn phí', '', NULL),
(37, 'Trang', 'Nữ', 'gsgr', '0999999999', 'fgdsgsd', '', NULL),
(38, 'Tuấn', 'Nam', 'awdwad', '0999999999', 'wadawdaw', '', NULL),
(39, 'Tes1', 'Nữ', 'awdadawd', '0999999999', 'awdawdaw', '', NULL),
(40, 'awdawda', 'Nữ', 'wadawd', '2323232', 'awdawdaw', '', NULL),
(41, 'awdawda', 'Nữ', 'wadawd', '2323232', 'awdawdaw', '', NULL),
(42, 'awdawda', 'Nữ', 'wadawd', '2323232', 'awdawdaw', '', NULL),
(43, 'Test2', 'Nam', 'Test2Test2', '0999999999', 'Test2Test2Test2Test2', '', NULL),
(44, 'TTest2', 'Nam', 'Test2', '0999999999', 'Test2Test2Test2', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(45, 'Le Minh A', 'Nữ', 'gdgrg', '0918838822', 'dfhdrh', 'Vui lòng chọn tài khoản để chuyển tiền vào ngân hàng hoặc thẻ ATM.', NULL),
(46, 'awdawd', 'Nam', 'awdawdwa', '0999999999', 'awdawdawd', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(47, 'Tuấn', 'Nam', 'atutru', '0918838822', 'trutru', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(48, 'Trang', 'Nam', 'hij', '0918838822', 'ỳy', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(49, 'Trang', 'Nam', '28', '0999999999', 'awdwadawdwa', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(50, 'Trang', 'Nam', '28', '0999999999', 'awdwadawdwa', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(51, 'Trang', 'Nam', 'awd', '0999999999', 'awdwad', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(52, 'Trang', 'Nam', '14', '0999999999', 'AWDWADWA', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(53, 'Trang', 'Nam', '14', '0999999999', 'AWDWADWA', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(54, 'Trang', 'Nam', '14', '0999999999', 'AWDWADWA', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(55, 'Trang', 'Nam', '14', '0999999999', 'AWDWADWA', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(56, 'Trang', 'Nam', '14', '0999999999', 'AWDWADWA', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(57, 'Trang', 'Nam', '14', '0999999999', 'AWDWADWA', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(58, 'Tuấn', 'Nam', '14', '0999999999', 'wadawdaw', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(59, 'Trang', 'Nam', 'awdwad', '0999999999', 'wadwadwa', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(60, 'Trang', 'Nam', 'awdaw', '0999999999', 'dawdwda', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(61, 'Tuấn', 'Nam', 'awdaw', '0918838822', 'dawdawd', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(62, 'Tuấn', 'Nam', 'awdaw', '0918838822', 'dawdawd', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(63, 'Tuấn', 'Nam', 'awdaw', '0918838822', 'dawdawd', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(64, 'Trang', 'Nam', '14wdwa', '0918838822', 'wadwadwa', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(65, 'Trang', 'Nam', '14wdwa', '0918838822', 'wadwadwa', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(66, 'Trang', 'Nam', '14wdwa', '0918838822', 'wadwadwa', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(67, 'Trang', 'Nam', '14wdwa', '0918838822', 'wadwadwa', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(68, 'Trang', 'Nam', '14wdwa', '0918838822', 'wadwadwa', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(69, 'Tuấn', 'Nam', 'wadwad', '0999999999', 'awdadwd', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(70, 'Trang123', 'Nam', 'awdawd123', '0999999999', 'awdaw31231', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL),
(71, 'Trang', 'Nam', 'wada', '0999999999', 'wdawd', 'Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mota` text COLLATE utf8mb4_vietnamese_ci,
  `hinhanh` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `ten`, `mota`, `hinhanh`, `ngaytao`) VALUES
(1, 'Nước hoa nữ', NULL, 'valentinaMyrrhAssoluto.jpg', '2019-10-19 06:47:41'),
(2, 'Nước hoa nam', NULL, 'GucciPourHomm.jpg', '2019-10-19 06:49:48'),
(3, 'Nước hoa em bé', NULL, 'BarbieFashionGirl.jpg', '2019-10-19 06:48:35'),
(4, 'Nước hoa Unisex', NULL, 'Fahrenheit.jpg', '2019-10-19 06:50:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_11_07_120802_create_binhluan_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thuonghieu_id` bigint(10) UNSIGNED NOT NULL,
  `mota` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` float NOT NULL,
  `giakhuyenmai` float DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `soluong` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `xuatxu` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dungtich` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `thuonghieu_id`, `mota`, `price`, `giakhuyenmai`, `hinhanh`, `soluong`, `ngaytao`, `xuatxu`, `dungtich`) VALUES
(0, 'Chanel No.19', 1, 'Nước hoa Chanel No.19 được trình làng vào sinh nhật lần thứ 87 của Chanel và được đặt tên theo ngày sinh của nguời sáng lập ra thương hiệu danh giá này, ngày 19 tháng 8.\r\nNước hoa Chanel No.19 là sự kết hợp độc đáo của hương cỏ cây xanh mát kết hợp với hoa diên vĩ và gỗ mang đến sự thanh khiết, tinh tế, sảng khoái cho phái đẹp.', 3540000, 55, 'scUa_Chanelno19.jpg', '5', '2019-11-09 06:36:07', 'pháp', '150ml'),
(1, 'Dior J’adore', 1, 'J’adore eau de toilette là mùi hương ngọt ngào mát rượi cho đám cưới ngoài trời mùa hè. Hương hoa nhài, hoa cam lãng mạn đến xiêu lòng cho điệu nhảy đầu tiên. Với J’adore Ea de toilette, Dior đã mang đến một món quà đong đầy hương thơm của tình yêu dành cho những ai yêu thích phong cách nữ tính, thuần khiết và thanh tao như một bông sen trắng.', 2350000, 44, 'DiorJadore.1.jpg', '3', '2019-11-09 06:36:04', 'Anh', '250ml'),
(2, 'Miss Dior eau de toilette', 3, 'Những bông hồng dại bé xinh như những mặt trời tí hon lung linh tỏa nắng dưới cánh đồng. Từng bông bung nở, từng chùm chen chúc, rực rỡ như nắng xuân. Mỗi cành hồng dại có hàng chục bông chen chúc nhau khoe sắc tỏa hương. Miss Dior eau de toilette mang mùi hồng đặc trưng đến mức khiến người ta muốn ôm cả vào lòng những bông hoa tròn xoe rung rinh ấy.', 2350000, 0, 'Miss Dior.jpg', '3', '2019-10-18 07:53:19', NULL, '0'),
(29, 'Dior Hypnotic Poison', 19, 'Thơm đậm chất phương Đông, bí ẩn và đầy lôi cuốn từ vani, hạt hạnh nhân và gỗ đàn hương mang đến sự mê hoặc không thể cưỡng lại được. Quả thật nước hoa Dior Hypnotic Posion là một “liều thuốc độc” kỳ diệu dành cho phái đẹp. Táo bạo nhưng lại vô cùng nữ tính. Mùi hương là sự pha trộn độc đáo, sự cân bằng kỳ diệu của những hương vị tương phản.', 3500000, 0, 'DiorHypnoticPoison.jpg', '5', '2019-10-18 06:27:07', NULL, '0'),
(30, 'Very Sexy Sheer Mist', 3, 'Là nước hoa xịt thơm toàn thân của hãng Victioria’s Secret(Usa) với hương thơm chủ đạo đến từ tiêu đen, xạ hương và hoa phong lan cho hương thơm cuốn hút, nóng bỏng và cực kỳ quyến rũ.\r\nDùng Very Sexy Sheer Mist sau khi tắm sẽ khiến cơ thể bạn được phủ thơm toàn diện bằng một lớp hương thơm ngọt ấm, cuốn hút như một thỏi nam châm, nhẹ nhàng hấp dẫn và thu hút khứu giác đối phương,..\r\n', 4580000, 24, 'verysexy.jpg', '6', '2019-11-09 06:36:01', NULL, '0'),
(31, 'Valentino Donna', 4, 'Chai nước hoa màu hồng phấn mang tên Valentino Donna của năm 2015 là một khu vườn ngày xuân với rất nhiều hoa diên vic hồng nồng nàn quyện trong gió có mùi phấn nữ tính và vanilla ấm áp. Nốt hương phấn trộn vani êm ả và mềm mịn như nhung. Đây là mùi hương của một mỹ nhân xinh đẹp, yên lặng và dịu dàng đến nao lòng.\r\nValentin Donna có thiết kế chai làm người ta không yêu không được. Nắp màu vàng phối với chai nước hoa màu hồng phấn, đúng kiểu nữ tính, đẹp đơn giản và nhẹ nhàng.\r\n', 2000000, 11, 'valentino donna.jpg', '5', '2019-11-09 06:35:58', NULL, '0'),
(32, 'Valentina Assoluto Oud', 4, 'Là mùi hương sang trọng và trầm lắng với khói gỗ. Sự đẳng cấp vương vấn trên từng giọt hương đen hun hút như trời đêm của Valentina Assoluto Oud làm say đắm biết bao trái tim dù là gã trai trẻ dồi dào năng lượng hay các quý ông trầm tĩnh chững chạc.', 4580000, 0, 'Valentina AssolutoOud.jpg', NULL, '2019-10-18 06:29:22', NULL, '0'),
(33, 'Valentina Myrrh Assoluto', 4, 'Hương thơm của Valentina Myrrh Assoluto lạ lẫm và hiếm hoi giữa vị vani quyện cùng da thuộc và mộc hương bao phủ. Hương thơm thăm thẳm ma mị tựa da dẻ nõn nà phô diễn, phảng phất quẩn quanh màn sương khói lẩn khuất tựa lớp vải lụa mênh mang che phủ. Hương thơm đưa đẩy người ta vào khoảng thời gian đêm đen tịch mịch. Da thịt trắng muốt lóe sáng thổn thức ẩn hiện, bốc hương khói đẻ mê dẫn dụ thôi miên.', 3478000, 22, 'valentinaMyrrhAssoluto.jpg', '5', '2019-11-09 06:35:54', NULL, '0'),
(34, 'Ck Eternity Men ', 5, 'lL hương thơm tươi mát và cổ điển ghi dấu ấn sâu đậm cho thương hiệu Calsvin Klein kể từ khi ra mắt thị trường năm 1990 đến nay.\r\nHương thơm nam tính và phóng khoáng của Ck Eternity Men đến từ cam quýt tươi mát kết hợp với hoa oải hương mềm mại và gỗ đàn hương ấm áp, tạo ra một hương thơm nam tính, mạnh mẽ, tràn trề sinh lực.\r\n', 3540000, 44, 'CkEternityMen.jpg', '7', '2019-11-09 06:35:51', NULL, '0'),
(36, 'Obsession', 5, 'Là dòng nước hoa làm nên tên tuổi cho thương hiệu Calvin Klein khi mang về giải thưởng danh giá của nghành nước hoa – Giải FIFI cho nước hoa nam xuất sắc nhất năm 1987.\r\nMang hương thơm nam tính, sâu ấm và quyến rũ từ hương quế, hỗ phách và vani tạo phong cách mạnh mẽ và táo bạo như đánh thức tất cả mọi giác quan trên cơ thể bạn.\r\n', 3978000, 90, 'Obsession.jpg', '3', '2019-11-09 06:35:47', NULL, '0'),
(37, 'Issey Miyake Summer ', 6, 'Mang đậm mùi hoa quả nhiệt đới của kiwi, bưởi và dứa. Mùi hương gợi nên những ngày vùng nhiệt đới thiêu đốt mọi giấc mơ\r\nHương thơm của Issey Miyake Summer như những ly cocktail nhiệt đới nóng bỏng dưới ánh hoàng hôn phủ vàng trên những bãi cát. Khi lớp hương chạm vào da thịt, bạn sẽ ngay lập tức cảm nhận được một cảm giác du dương khi nhắm mắt lại và tưởng tượng ra trước mắt vẻ đẹp thiên thần của hòn đảo Panarea.\r\n', 4500000, 0, 'IsseyMiyakeSummer.jpg', '8', '2019-10-18 06:32:31', NULL, '0'),
(38, 'Issey Miyake L’Eau Bleue d’lssey Pour Homme', 6, 'Là  nước hoa mang hương thơm của gỗ đặc trưng dành cho nam giới được giới thiệu vào năm 2004. Đây là một mùi hương bí ẩn, sâu lắng và nồng nàn với những rung động như kích thích từng giác quan của người dùng.', 3500000, 80, 'IsseyMiyakeL’EauBleued’lsseyPourHomme.jpg', '5', '2019-11-09 06:35:44', NULL, '0'),
(39, 'L’Eau d’lssey Pour Homme Intense ', 6, 'Là một mùi hương đơn giản và chân thật của nhà Issey Miyake trình làng vào năm 2009.\r\nHương thơm vừa da thịt vừa tinh khôi với những nốt khí, nốt nước vừa gợi tình với rất nhiều trầm hương xuyên suốt. Trầm hương luôn gợi lên những gần gụi về thể xác. Khi lên da chàng sẽ như làn hương thứ hai của cơ thể, không thể tách bạch ra nổi mà hòa quyện như thể đây là hương thơm tự nhiên trên cơ thể chàng khi vừa từ phòng tắm bước ra chỉ có khăn bông trên người.\r\n', 1500000, 0, 'L’Eaud’lsseyPourHommeIntense.jpg', '5', '2019-10-18 06:32:57', NULL, '0'),
(40, 'Dior Homme', 7, 'Khá ngọt với rất nhiều hoa diên vĩ, cacao và da thuộc. Chàng phải nam tính đến mức choáng ngợp mới có thể cân bằng với cái ngọt tràn ngập này. Mà sự nam tính không cần đến từ cơ bắp, đến từ sự vững vàng không gì lay chuyển được.', 4500000, 70, 'DiorHomme.jpg', '6', '2019-11-09 06:35:40', NULL, '0'),
(41, 'Fahrenheit', 7, 'Thơm lịch lãm, tinh tế, được sáng tạo từ sự đối nghịch đầy lý thú giữa nước và lửa được bao trùm bởi hương da thuộc kết hợp với lá violet và cỏ hương bài tạo nên sự lịch lãm thuần chất của một quý ông tao nhã. Sự ấm áp của Fahrenheit đủ để chinh phục người phụ nữ của anh ấy an tâm tựa vào vòng tay của người đàn ông bản lĩnh, sang trọng và vô cùng ', 3120000, 0, 'Fahrenheit.jpg', '7', '2019-10-18 06:33:33', NULL, '0'),
(42, 'Dior Homme Sport', 7, 'Mang đến sự bùng nổ, tràn đầy sức sống và năng lượng với hương thơm tươi mát. Mùi hương của nước hoa nổi bật với mùi vị của thanh yên kết hợp cùng hương thơm gừng tươi, hoa diên vĩ và hương gỗ tuyết tùng mãnh liệt, nam tính và mạnh mẽ.', 2960000, 60, 'DiorHommeSport.jpg', '8', '2019-11-09 06:35:37', NULL, '0'),
(43, 'Gucci Pour Homm', 8, 'Mang những nốt thuốc lá, gỗ tùng và hoa violet. Một tổ hợp cám dỗ nhiều hiểm nguy. Các nguyên liệu nhưng được đan lát tài tình cho ra một mùi hương của những người đàn ông từng trải khiến ta muốn dựa dẫm và cùng phiêu lưu.  Người đàn ông dùng Gucci Pour Homme không thể là chàng sinh viên chân chất ít trải nghiệm cuộc đời, mà là người biết rõ phụ nữ và trải nghiệm trong cuộc sống.', 2720000, 0, 'GucciPourHomm.jpg', '', '2019-10-18 06:34:27', NULL, '0'),
(44, 'Gucci Guilty Diamond', 8, 'Mang hương thơm hiện đại và độc đáo của cỏ lá thiên nhiên kết hợp với tinh dầu hoa cam và chanh Ý tạo thành một tổ hợp cám dỗ nhiều hiểm nguy.\r\n-Người đàn ông dùng Gucci Guilty Diamond là người có gu thẩm mỹ, sành điệu, thừa tự tin và nhất định là đủ đẹp trai để thu hút mọi giác quan của các mỹ nhân xung quanh mình. Liệu chàng của em có tự tin để mặc Gucci Guilty Diamond xuống phố đêm nay?\r\n', 3780000, 15, 'GucciGuiltyDiamond.jpg', '3', '2019-11-09 06:35:33', NULL, '0'),
(45, 'Gucci Guilty Intense', 8, 'Mở ra bằng mùi hương đánh thức các giác quan của chanh và hoa oải hoa oải hương kết hợp cùng rau mùi tạo nên một cảm giác tươi mát đến lôi cuốn mãnh liệt. Hương giữa bằng sự kết hợp của tinh dầu hoa cam tăng cường nét nam tính mạnh mẽ. Hương cuối như mê hoặc bởi hoắc hương, tuyết tùng và hổ phách tạo ấn tượng, khiêu khích đến kì lạ.', 3000000, 14, 'GucciGuiltyIntense.jpg', '5', '2019-11-09 06:35:30', NULL, '0'),
(46, 'Mickey Mouse', 9, 'Tươi mát dễ thương từ hương cam quýt kết hợp vơi các loại hoa trắng và xạ hương mượt mà sẽ cùng các chàng “hoàng tử bé” phát huy tinh thần nhiệt tình, tốt bụng và không ngại sáng tạo ra những “ ý tưởng điên rồ” để tiếp cận cô bạn gái Minnie của chính mình.', 2350000, 45, 'MickeyMouse.jpg', '3', '2019-11-09 06:35:21', NULL, '0'),
(48, 'The Smurfs Vanity', 10, 'Là hương thơm hoa cỏ tươi mát, dùng được cho cả bé trai lẫn bé gái. Nhẹ nhàng với làn da nhạy cảm và khử được mùi hôi, mùi chua khi bé chơi đùa trong nhiều giờ.', 3478000, 23, 'XiTrumTiĐieuTheSmurfsVanity.jpg', '5', '2019-11-09 06:35:18', NULL, '0'),
(49, 'The Smurfs Papa', 10, 'Là hương thơm hoa cỏ tươi mát, dùng được cho cả bé trai lẫn bé gái. Nhẹ nhàng với làn da nhạy cảm và khử được mùi hôi, mùi chua khi bé chơi đùa trong nhiều giờ.', 1500000, 0, 'TheSmurfsPapa.jpg', '5', '2019-10-19 04:50:40', NULL, '0'),
(50, 'Barbie Fashion Girl ', 11, 'Là mùi hương mà cô nàng Barbie chọn dùng trong buổi diễn thời trang của mình. Hương thơm hoa trái tươi tắn của chai nước hoa sẽ giúp cô nàng tỏa sáng trọn vẹn trong các show diễn thời trang ấn tưởng của mình.', 2500000, 15, 'BarbieFashionGirl.jpg', '5', '2019-11-21 10:28:14', NULL, '0'),
(51, 'The Smurfs Clumsy ', 10, 'Mang hương thơm hoa cỏ tươi mát, dùng được cho cả bé trai lẫn bé gái. Nhẹ nhàng với làn da nhạy cảm và khử mùi mồ hôi, mùi chua khi bé chơi đùa trong nhiều giờ.', 3500000, 0, 'TheSmurfsClumsy.jpg', '6', '2019-10-19 04:50:00', NULL, '0'),
(52, 'Princess Aurora ', 21, 'Mang hương thơm cam quýt ngọt thanh, dùng cho bé gái trên 3 tuổi. Nhẹ nhàng với làn da nhảy cảm và khử mùi mồ hôi, mùi chua khi bé chơi đùa trong nhiều giờ.', 2000000, 55, 'PrincessAurora.jpg', '4', '2019-11-09 06:35:12', NULL, '0'),
(53, 'Chergui', 12, 'Là mùi mà nam nữ đều có thể dùng được,.. Có mật ông, có thuốc lá, có gỗ, có mùi trầm… kết hợp khéo léo và hòa quyện đến mức nếu chỉ vài cái hít hà ban đầu, bạn khó có thể nhận ra bất kỳ một note mùi riêng lẻ. Hệt như một bản nhạc, Chergui có độ phức tạp vừa phải và đủ để người ta càng nghiện, càng nghe càng nhận ra từng nốt nhạc đều có cái duyên riêng của nó,..', 4650000, 60, 'Chergui.jpg', '5', '2019-11-09 06:35:05', NULL, '0'),
(54, 'Gris Clair ', 12, 'Nghĩa là Xám Sáng. Một cái tên ngắn nhưng đẹp và gợi hình. Serge Lutens tiếp tục có một sáng tạo đẹp lạ lùng khi mang oải hương đốt chung với gia vị quyện cùng khói mờ ảo. Vị oải hương trong Gris Clair mát lạnh, đặc sắc, sang trọng và rất cuốn hút. Một hợp hương đơn giản mà lại cầu kì, ngòn  ngọt của hoa, trầm lắng của gỗ - thật làm say và thu hút lòng người.', 3400000, 0, 'GrisClair.jpg', '4', '2019-10-18 06:26:30', NULL, '0'),
(55, 'Ck One (Unisex)', 13, 'Nước hoa Ck One (Unisex) là hương thơm nhẹ nhàng với chiết xuất cam quýt dành cho cả nam giới và nữ giới. Sản phẩm được sản xuất bởi Alberto Morillas và Harry Fremont.\r\nĐúng với tên gọi, mang đến sản phẩm chung nhất phù hợp cho cả nam và nữ, mang ý nghĩa của sự hòa hợp 2 tâm hồn đồng điệu, gắn kết lại với nhau thành một thể thống nhất. Sản phẩm rất phù hợp với các cặp tình nhân muốn tìm đến một mùi thơm chung phù hợp với cả hai giới tính.\r\n', 3478000, 25, 'CkOne(Unisex).jpg', '8', '2019-11-09 06:35:01', NULL, '0'),
(56, 'Ck Be', 13, 'Mùi hương Ck Be toát lên vẻ tinh khiết, trong trẻo, mượt mà, nhưng ẩn chưa bên trong là một nét quyến rủ khó quên. Sản phẩm là một bản hợp ca các hương thơm độc đáo, dạo đầu là hương cây trái tươi mát với những trái cam Mandarin hoàn hảo nhất từ Trung Hoa và cam Bergamot, điểm thêm hương hoa laven der, bạc hà sảng khoái, sau đó kết thúc bằng hương vani, hổ phách và xạ hương.', 1500000, 30, 'CkBe.jpg', '3', '2019-11-09 06:34:57', NULL, '0'),
(57, ' versace', 1, 'Những bông hồng dại bé xinh như những mặt trời tí hon lung linh tỏa nắng dưới cánh đồng. Từng bông bung nở, từng chùm chen chúc, rực rỡ như nắng xuân. Mỗi cành hồng dại có hàng chục bông chen chúc nhau khoe sắc tỏa hương. Miss Dior eau de toilette mang mùi hồng đặc trưng đến mức khiến người ta muốn ôm cả vào lòng những bông hoa tròn xoe rung rinh ấy.', 3540000, 10, 'versacexanh.jpg', '5', '2019-11-09 06:34:51', 'pháp', '150ml'),
(58, 'Ck One (Unisex)', 1, 'Những bông hồng dại bé xinh như những mặt trời tí hon lung linh tỏa nắng dưới cánh đồng. Từng bông bung nở, từng chùm chen chúc, rực rỡ như nắng xuân. Mỗi cành hồng dại có hàng chục bông chen chúc nhau khoe sắc tỏa hương. Miss Dior eau de toilette mang mùi hồng đặc trưng đến mức khiến người ta muốn ôm cả vào lòng những bông hoa tròn xoe rung rinh ấy.', 3540000, 50, 'CkBe.jpg', '7', '2019-11-09 06:34:34', 'pháp', '120ml');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` bigint(10) NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sothich`
--

CREATE TABLE `sothich` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sanpham_id` bigint(20) UNSIGNED NOT NULL,
  `tinhtrang` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sothich`
--

INSERT INTO `sothich` (`id`, `user_id`, `sanpham_id`, `tinhtrang`) VALUES
(1, 1, 34, 0),
(4, 1, 53, 0),
(5, 1, 0, 0),
(7, 1, 46, 0),
(9, 1, 36, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `loai_id` bigint(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_vietnamese_ci,
  `hinhanh` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT 'download.png',
  `noibat` tinyint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `loai_id`, `ten`, `gioithieu`, `hinhanh`, `noibat`) VALUES
(1, 1, 'Chanel Perfume', NULL, 'chanel_nu.jpg', 1),
(2, 1, 'Christian Dior Perfumes', NULL, 'Hparfum.jpg', 1),
(3, 1, 'Victoria’s Secret', NULL, 'dior.png', 1),
(4, 1, 'Valentino Perfumes', NULL, 'download.png', 0),
(5, 2, 'Calvin Klein Perfumes', NULL, 'calvin.png', 1),
(6, 2, 'Issey Miyake Perfumes', NULL, 'download.png', 1),
(7, 2, 'Dior Perfumes', NULL, 'dior.png', 1),
(8, 2, 'Gucci Perfumes', NULL, 'gucci.jpg', 0),
(9, 3, 'Air-Val International Perfumes', NULL, 'Hparfum.jpg', 1),
(10, 3, 'FAB Perfumes', NULL, 'Hparfum.jpg', 1),
(11, 3, 'Mattel Perfumes', NULL, 'download.png', 1),
(12, 4, 'Serge Lutens Perfumes', NULL, 'download.png', 1),
(13, 4, 'Calvin Klein', NULL, 'calvin.png', 0),
(19, 1, 'Christian Dior Fragrances', NULL, 'dior.png', 0),
(21, 3, 'Disney Perfumes', NULL, 'versace.png', 0),
(28, 2, 'TSET TT', NULL, 'bYZ8_download (1).png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaytao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ld2fcvaSciLZnoHMcP7ryuuvZm3JCrrp7h47s/jvlUikVxLZaRjea', NULL, '2019-11-05 05:19:27', '2019-11-05 05:19:27'),
(2, 'tuan', 'tuan@gmail.com', NULL, '$2y$10$HIwfPIMEWmPyBGDWDByRLOyAETtdAOV0qdb4Ug2a4Anl4TwteLBCS', NULL, '2019-11-05 05:25:53', '2019-11-05 05:25:53'),
(3, 'trang', 'trangle5200@gmail.com', NULL, '$2y$10$.5G0I8M.q...qRwcmp.P0.jVsq9VaLtfYaRRPyvaC/hv8SD47p0eq', NULL, '2019-11-07 19:57:14', '2019-11-07 19:57:14'),
(4, 'NGUYỄN VŨ KHUYÊN', 'trangb1505859@student.ctu.edu.vn', NULL, '$2y$10$jW5gmE2cTzG3m4c0ZBuzhu7oKAzeT6p0EdNCIorQ3kt5ZXUhgvsXS', NULL, '2019-11-09 08:41:59', '2019-11-09 08:41:59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhluan_user_id_index` (`user_id`),
  ADD KEY `binhluan_sanpham_id_index` (`sanpham_id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fr_dh_id` (`donhang_id`) USING BTREE,
  ADD KEY `fr_sp_id` (`sanpham_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fr_kh_id` (`khachhang_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_fk_hinh` (`sp_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fr_sp_id` (`thuonghieu_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sothich`
--
ALTER TABLE `sothich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_like` (`user_id`),
  ADD KEY `sanpham_like` (`sanpham_id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loai_id` (`loai_id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh`
--
ALTER TABLE `hinh`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sothich`
--
ALTER TABLE `sothich`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`thuonghieu_id`) REFERENCES `thuonghieu` (`id`);

--
-- Các ràng buộc cho bảng `sothich`
--
ALTER TABLE `sothich`
  ADD CONSTRAINT `sothich_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sothich_ibfk_2` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD CONSTRAINT `thuonghieu_ibfk_1` FOREIGN KEY (`loai_id`) REFERENCES `loaisanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
