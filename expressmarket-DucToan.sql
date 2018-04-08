-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 05:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expressmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_ctdh` int(5) NOT NULL,
  `id_sp` int(5) NOT NULL,
  `so_luong` int(50) NOT NULL,
  `thanh_tien` decimal(10,0) NOT NULL,
  `id_dh` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethinhanh`
--

CREATE TABLE `chitiethinhanh` (
  `id_hinh` int(5) NOT NULL,
  `url_hinh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_sp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitiethinhanh`
--

INSERT INTO `chitiethinhanh` (`id_hinh`, `url_hinh`, `id_sp`) VALUES
(1, '1_1.jpg', 1),
(2, '1_2.jpg', 1),
(3, '1_3.jpg', 1),
(4, '2_1.jpg', 2),
(5, '2_2.jpg', 2),
(6, '2_3.jpg', 2),
(7, '3_1.jpg', 3),
(8, '3_2.jpg', 3),
(9, '3_3.jpg', 3),
(10, '4_1.jpg', 4),
(11, '4_2.jpg', 4),
(12, '4_3.jpg', 4),
(13, '5_1.jpg', 5),
(14, '5_2.jpg', 5),
(15, '5_3.jpg', 5),
(16, '6_1.jpg', 6),
(17, '6_2.jpg', 6),
(18, '6_3.jpg', 6),
(19, '7_1.jpg', 7),
(20, '7_2.jpg', 7),
(21, '7_3.jpg', 7),
(22, '8_1.jpg', 8),
(23, '8_2.jpg', 8),
(24, '8_3.jpg', 8),
(25, '9_1.jpg', 9),
(26, '9_2.jpg', 9),
(27, '9_3.jpg', 9),
(28, '10_1.jpg', 10),
(29, '10_2.jpg', 10),
(30, '10_3.jpg', 10),
(31, '11_1.jpg', 11),
(32, '11_2.jpg', 11),
(33, '11_3.jpg', 11),
(34, '12_1.jpg', 12),
(35, '12_2.jpg', 12),
(36, '12_3.jpg', 12),
(37, '13_1.jpg', 13),
(38, '13_2.jpg', 13),
(39, '13_3.jpg', 13),
(40, '14_1.jpg', 14),
(41, '14_2.jpg', 14),
(42, '14_3.jpg', 14),
(43, '15_1.jpg', 15),
(44, '15_2.jpg', 15),
(45, '15_3.jpg', 15),
(46, '16_1.jpg', 16),
(47, '16_2.jpg', 16),
(48, '16_3.jpg', 16),
(49, '17_1.jpg', 17),
(50, '17_2.jpg', 17),
(51, '17_3.jpg', 17),
(61, '21_1.jpg', 21),
(62, '21_2.jpg', 21),
(63, '21_3.jpg', 21),
(64, '22_1.jpg', 22),
(65, '22_2.jpg', 22),
(66, '22_3.jpg', 22),
(67, '23_1.jpg', 23),
(68, '23_2.jpg', 23),
(69, '23_3.jpg', 23),
(70, '24_1.jpg', 24),
(71, '24_2.jpg', 24),
(72, '24_3.jpg', 24),
(73, '25_1.jpg', 25),
(74, '25_2.jpg', 25),
(75, '25_3.jpg', 25),
(76, '26_1.jpg', 26),
(77, '26_2.jpg', 26),
(78, '26_3.jpg', 26),
(79, '27_1.jpg', 27),
(80, '27_2.jpg', 27),
(81, '27_3.jpg', 27),
(82, '28_1.jpg', 28),
(83, '28_2.jpg', 28),
(84, '28_3.jpg', 28),
(85, '29_1.jpg', 29),
(86, '29_2.jpg', 29),
(87, '29_3.jpg', 29),
(88, '30_1.jpg', 30),
(89, '30_2.jpg', 30),
(90, '30_3.jpg', 30),
(91, '31_1.jpg', 31),
(92, '31_2.jpg', 31),
(93, '31_3.jpg', 31),
(94, '32_1.jpg', 32),
(95, '32_2.jpg', 32),
(96, '32_3.jpg', 32),
(97, '33_1.jpg', 33),
(98, '33_2.jpg', 33),
(99, '33_3.jpg', 33),
(100, '34_1.jpg', 34),
(101, '34_2.jpg', 34),
(102, '34_3.jpg', 34),
(103, '35_1.jpg', 35),
(104, '35_2.jpg', 35),
(105, '35_3.jpg', 35),
(106, '36_1.jpg', 36),
(107, '36_2.jpg', 36),
(108, '36_3.jpg', 36);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(5) NOT NULL,
  `tong_tien` decimal(10,0) NOT NULL,
  `ngay_dat` date NOT NULL,
  `id_kh` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(5) NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `dien_thoai` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id_loai` int(5) NOT NULL,
  `ten_loai` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_loai`, `ten_loai`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại', '2018-03-31 10:22:11', '0000-00-00 00:00:00'),
(2, 'Tivi - Video', '2018-03-31 10:22:11', '0000-00-00 00:00:00'),
(3, 'Phụ kiện', '2018-03-31 10:22:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(5) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `url_hinh` varchar(255) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `so_luong_ton` int(50) NOT NULL,
  `sp_moi` tinyint(1) DEFAULT '0',
  `sp_hot` tinyint(1) NOT NULL DEFAULT '0',
  `sp_sale` int(50) NOT NULL,
  `id_loai` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia`, `url_hinh`, `mo_ta`, `so_luong_ton`, `sp_moi`, `sp_hot`, `sp_sale`, `id_loai`, `created_at`, `updated_at`) VALUES
(1, 'iPhone X 64GB \r\n', '29999000', 'A-iphoneX.jpg\r\n', 'Độ phân giải màn hình : 2436 x 1125 pixel\r\nCamera trước : 7.0 MP\r\nCamera sau : Dual 12.0 MP\r\nSố nhân : 6\r\nChipset : Apple A11 Bionic\r\nRAM : 3 GB\r\nChip đồ họa (GPU) : Apple GPU (three-core graphics)\r\nROM : 64 GB\r\nKích thước : 143.6 x 70.9 x 7.7 mm\r\nHệ điều hành : iOS 11', 100, 1, 1, 28999000, 1, '2018-04-02 08:11:06', '0000-00-00 00:00:00'),
(2, 'iPhone 8 Plus 64GB\r\n', '23990000', 'A-iphone8.jpg\r\n', '\"Độ phân giải màn hình : 1920 x 1080 pixels\r\nCamera trước : 7.0 MP\r\nCamera sau : Dual 12.0 MP\r\nSố nhân : 6\r\nChipset : Apple A11 Bionic\r\nRAM : 3 GB\r\nChip đồ họa (GPU) : Apple GPU (three-core graphics)\r\nROM : 64 GB\r\nKích thước : 158.4 x 78.1 x 7.5 mm\r\nHệ điều hành : iOS 11\"\r\n', 100, 1, 1, 22990000, 1, '2018-04-02 08:11:48', '0000-00-00 00:00:00'),
(3, 'iPhone 7 Plus 32GB\r\n', '19999000', 'A-iphone7.jpg\r\n', '\"ROM : 32 GB\r\nĐộ phân giải màn hình : 1920 x 1080 pixels\r\nCamera sau : Dual 12.0 MP\r\nCamera trước : 7.0 MP\r\nKích thước : 158.2 x 77.9 x 7.3 mm\r\nChipset : A10\r\nChip đồ họa (GPU) : M10\r\nTốc độ CPU : 2.3 GHz\r\nRAM : 3 GB\r\nSố nhân : 4 Nhân\"\r\n', 100, 1, 0, 0, 1, '2018-04-02 08:12:10', '0000-00-00 00:00:00'),
(4, 'iPhone 6s Plus 32GB\r\n', '13999000', 'A-iphone6splus.jpg\r\n', '\"Độ phân giải màn hình : 1080 x 1920 pixels\r\nCamera trước : 5.0 MP\r\nCamera sau : 12.0 MP\r\nTốc độ CPU : 1.8 GHz\r\nSố nhân : 2 Nhân\r\nChipset : Apple A9\r\nRAM : 2 GB\r\nChip đồ họa (GPU) : PowerVR GT7600\r\nROM : 32 GB\r\nKích thước : 158.2 x 77.9 x 7.3 mm\"\r\n', 100, 0, 0, 0, 1, '2018-04-02 14:06:31', '0000-00-00 00:00:00'),
(5, 'iPhone 6 32GB\r\n', '7999000', 'A-iphone6.jpg\r\n', '\"Độ phân giải màn hình : 1334 x 750 pixels\r\nCamera trước : 1.2 MP\r\nCamera sau : 8.0 MP\r\nTốc độ CPU : 1.4 GHz\r\nSố nhân : 2 Nhân\r\nChipset : Apple A8\r\nRAM : 1GB\r\nChip đồ họa (GPU) : PowerVR GX6450\r\nROM : 32 GB\r\nKích thước : 138.1 x 67 x 6.9 mm\"\r\n', 100, 0, 0, 0, 1, '2018-04-02 14:06:50', '0000-00-00 00:00:00'),
(6, 'Samsung Galaxy S9+\r\n', '24990000', 'A-samsunggalaxys9plus.jpg\r\n', '\"Độ phân giải màn hình : 2K (1440 x 2960 Pixels)\r\nCamera trước : 8 MP\r\nCamera sau : 2 camera 12 MP\r\nTốc độ CPU : 4 nhân 2.8 GHz & 4 nhân 1.7 GHz\r\nSố nhân : 4 nhân 2.8 GHz & 4 nhân 1.7 GHz\r\nChipset : Exynos 9810 8 nhân 64 bit\r\nRAM : 6 GB\r\nChip đồ họa (GPU) : Mali-G72 MP18\r\nROM : 128 GB\r\nKích thước : Dài 158.1 mm - Ngang 73.8 mm - 8.5 mm\r\nHệ điều hành : Android 8.0\"\r\n', 100, 1, 1, 0, 1, '2018-04-07 16:36:56', '0000-00-00 00:00:00'),
(7, 'Samsung Galaxy Note 8\r\n', '22490000', 'A-samsunggalaxynote8.jpg\r\n', '\"Độ phân giải màn hình : 2960 x 1440 pixels\r\nCamera trước : 8.0 MP\r\nCamera sau : Dual 12.0 MP\r\nTốc độ CPU : 4 nhân 2.3 GHz và 4 nhân 1.7 GHz\r\nSố nhân : 8 Nhân\r\nChipset : Exynos 8895\r\nRAM : 6 GB\r\nChip đồ họa (GPU) : Mali™ G71\r\nROM : 64 GB\r\nKích thước : 162.5 x 74.8 x 8.6 mm\"\r\n', 100, 1, 1, 20490000, 1, '2018-04-02 08:12:40', '0000-00-00 00:00:00'),
(8, 'Samsung Galaxy S7 Edge\r\n', '12990000', 'A-samsunggalaxys7.jpg\r\n', '\"Độ phân giải màn hình : 1440 x 2560 pixels\r\nCamera trước : 5.0 MP\r\nCamera sau : 12.0 MP\r\nTốc độ CPU : Octa-core\r\nSố nhân : 8 Nhân\r\nChipset : Exynos 8890\r\nRAM : 4 GB\r\nChip đồ họa (GPU) : Mali-T880 MP12\r\nROM : 32 GB\r\nKích thước : 150.9 x 72.6 x 7.7 mm\"\r\n', 100, 0, 1, 0, 1, '2018-03-31 15:39:51', '0000-00-00 00:00:00'),
(9, 'Samsung Galaxy A8\r\n', '10990000', 'A-samsunggalaxya8.jpg\r\n', '\"Độ phân giải màn hình : 1080 x 2220 pixels\r\nCamera trước : 16 MP và 8 MP\r\nCamera sau : 16 MP\r\nTốc độ CPU : 1.6 GHz\r\nSố nhân : 8 nhân\r\nChipset : Exynos 7885 Octa, Dual 2.2 + Hexa 1.6\r\nRAM : 4 GB\r\nChip đồ họa (GPU) : Mali™ G71\r\nROM : 32 GB\r\nKích thước : 149,2 x 70,6 x 8,4 mm\r\nHệ điều hành : Android 7\"\r\n', 100, 0, 0, 0, 1, '2018-03-31 15:40:13', '0000-00-00 00:00:00'),
(10, 'Samsung Galaxy J7+\r\n', '8690000', 'A-samsunggalaxyj7.jpg\r\n', '\"Độ phân giải màn hình : 1920 x 1080 pixels\r\nCamera trước : 16.0 MP\r\nCamera sau : Dual 12.0 MP và 5.0 MP\r\nTốc độ CPU : 4 nhân 2.39 GHz & 4 nhân 1.69 GHz\r\nSố nhân : 8 Nhân\r\nRAM : 4 GB\r\nChip đồ họa (GPU) : Mali-T880MP2\r\nROM : 32 GB\r\nKích thước : 152.4 x 74.7 x 7.9 mm\"\r\n', 100, 0, 0, 0, 1, '2018-04-01 15:39:33', '0000-00-00 00:00:00'),
(11, 'OPPO F5 6GB\r\n', '8990000', 'A-oppof5.jpg\r\n', '\"Độ phân giải màn hình : 1080 x 2160 Pixels\r\nCamera trước : 20 MP\r\nCamera sau : 16 MP\r\nTốc độ CPU : 2.5 Ghz\r\nSố nhân : 8 nhân\r\nChipset : Mediatek MT6763T Helio P23\r\nRAM : 6 GB\r\nChip đồ họa (GPU) : Mali-G71 MP2\r\nROM : 64 GB\r\nKích thước : 156.5 x 76 x 7.5 mm\r\nHệ điều hành : Andoid 7.1\"\r\n', 100, 1, 1, 7990000, 1, '2018-03-31 15:41:02', '0000-00-00 00:00:00'),
(12, 'OPPO F3 Plus\r\n', '7490000', 'A-oppof3plus.png\r\n', '\"Chipset : Qualcomm Snapdragon 653\r\nRAM : 4 GB\r\nTốc độ CPU : 4 nhân 1.95 GHz và 4 nhân 1.40 GHz\r\nChip đồ họa (GPU) : Adreno 510\r\nSố nhân : 8 Nhân\r\nKích thước : 163.63 x 80.8 x 7.35 mm\r\nCamera sau : 16.0 MP\r\nROM : 64 GB\r\nCamera trước : Dual 16.0 MP + 8.0 MP\r\nĐộ phân giải màn hình : 1080 x 1920 pixels\"\r\n', 100, 0, 1, 0, 1, '2018-03-31 15:41:22', '0000-00-00 00:00:00'),
(13, 'OPPO F5 RED\r\n', '6900000', 'A-oppof5red.jpg\r\n', '\"Độ phân giải màn hình : 1080 x 2160 Pixels\r\nCamera trước : 20 MP\r\nCamera sau : 16 MP\r\nTốc độ CPU : 2.5 Ghz\r\nSố nhân : 8 nhân\r\nChipset : Mediatek MT6763T Helio P23\r\nRAM : 4 GB\r\nChip đồ họa (GPU) : Mali-G71 MP2\r\nROM : 32 GB\r\nKích thước : 156.5 x 76 x 7.5 mm\r\nHệ điều hành : Andoid 7.1\"\r\n', 100, 0, 1, 6500000, 1, '2018-03-31 15:41:48', '0000-00-00 00:00:00'),
(14, 'OPPO A83\r\n', '4990000', 'A-oppoa83.jpg\r\n', '\"Độ phân giải màn hình : 720x1440 pixels\r\nCamera trước : 8.0 MP\r\nCamera sau : 13.0 MP\r\nTốc độ CPU : 2.5 Ghz\r\nSố nhân : 8 nhân\r\nChipset : Mediatek MT6763T Helio P23\r\nRAM : 3 GB\r\nChip đồ họa (GPU) : Mali-G71 MP2\r\nROM : 32 GB\r\nKích thước : 150.5 x 73.1 x 7.7 mm\r\nHệ điều hành : Andoid 7.1\"\r\n', 100, 0, 0, 0, 1, '2018-03-31 15:42:15', '0000-00-00 00:00:00'),
(15, 'OPPO F1s 2017\r\n', '5690000', 'A-oppof1s.jpg\r\n', '\"Độ phân giải màn hình : 1280 x 720 pixels\r\nCamera trước : 16.0 MP\r\nCamera sau : 13.0 MP\r\nTốc độ CPU : 1.5 GHz\r\nSố nhân : 8 Nhân\r\nChipset : MTK MT6750\r\nRAM : 4 GB\r\nChip đồ họa (GPU) : Mali-T860 MP2\r\nROM : 64 GB\r\nKích thước : 154.5 x 76 x 7.38 mm\r\n\"\r\n', 100, 0, 0, 0, 1, '2018-03-31 15:42:41', '0000-00-00 00:00:00'),
(16, 'Smart Tivi LG 55 inch 55UJ632T Model 2017 \r\n', '15099000', 'B-smart-tivi-lg-55-inch.jpg', '\"Kết nối Internet:Cổng LAN, Wifi\r\nCổng AV:Có cổng Composite và cổng Component\r\nCổng HDMI:3 cổng\r\nCổng xuất âm thanh:Jack 3.5 mm (cắm loa, tai nghe), Cổng Optical (Digital Audio Out)\r\nCổng VGA:Không\r\nUSB:2 cổng\r\nĐịnh dạng video TV đọc được:WMV, AVI, FLV, M4V, MKV, MP4, WebM, MOV, MPEG, DivX HD\r\nĐịnh dạng phụ đề TV đọc được:SRT\r\nĐịnh dạng hình ảnh TV đọc được:PNG, MPO, JPG, JPEG, JPS\r\nĐịnh dạng âm thanh TV đọc được:WAV, MID, MIDI, MKA, AC3, WMA, AAC, MPA, M4A, MP3\r\nTích hợp đầu thu kỹ thuật số:DVB', 100, 1, 1, 14099000, 2, '2018-04-01 15:49:05', '0000-00-00 00:00:00'),
(17, 'tivi asanzo - ti asanzo 25200\r\n', '2350000', 'B-tivi-asanzo-1m4G3_800x1200_max.jpg\r\n', '\"\r\nSKU AS791ELAA1GDD6VNAMZ-2317684\r\n3D TV No\r\nMàu Black\r\nCổng kết nối HDMI\r\nCurved TV No\r\nĐộ phân giải màn hình (pixels) 1366 x 768\r\nKích thước màn hình 25.0\r\nMẫu mã 25S200\r\nKích thước sản phẩm (D x R x C cm) 56 x 7 x 33.5\r\nProduct Type Tivi LED\r\nTrọng lượng (KG) 5\r\nSản xuất tại Việt Nam\r\nThời gian bảo hành 2 năm\r\nLoại hình bảo hành Bằng Hóa đơn mua hàng\r\n\r\n\"\r\n', 100, 1, 1, 2350000, 2, '2018-04-01 15:50:00', '0000-00-00 00:00:00'),
(21, 'tivi asanzo - tivi asanzo32t650\r\n', '3300000', 'B-tivi-asanzo-1m4G3.jpg', '\"\r\n- Màn hình: 32 inches\r\n- Độ phân giải  HD\r\n- Độ tương phản động: 5.000.000:1\r\n- Tần số quét TruMotion 100Hz\r\n- Chương trình kiểm soát hình ảnh Picture Wizard II\r\n- Cảm ứng màu thông minh\r\n- Hệ thống loa ẩn (5W + 5W)\r\n- Chế độ âm thanh Infinite\r\n- Kết nối USB 2.0 (HD DivX, MP3, MP4, FLV, MKV, Jpeg play)\r\n- Chế độ siêu tiết kiệm điện\r\n- Tích hợp truyền hình kỹ thuật số mặt đất.\"\r\n', 100, 1, 0, 3200000, 2, '2018-04-01 15:52:37', '0000-00-00 00:00:00'),
(22, 'tivi asanzo 32 - asanzo 32s610\r\n', '3150000', 'B-tivi-asanzo-32-1m4G3-rW2Lxs_simg_d0daf0_800x1200_max.jpg', '\"1 x TV\r\nĐặc điểm chính:\r\nSKU AS791ELAA166G1VNAMZ-1724594\r\nĐộ phân giải màn hình (pixels) 1366 x 768\r\nTechnology LCD\r\nLoại màn hình LED\r\nKích thước màn hình 32.0\r\nTrọng lượng (KG) 5.2\r\nThời gian bảo hành 2 năm\r\nProduct Type TV LED\r\nSản xuất tại Việt Nam\r\nCurved TV No\r\nKích thước sản phẩm (D x R x C cm) 74 x 48 x 8\r\nMẫu mã 32S610\r\nLoại hình bảo hành Bằng Phiếu bảo hành và Hóa đơn\r\nMàu Đen\r\n3D TV No\"\r\n', 100, 0, 1, 0, 2, '2018-04-01 15:53:11', '0000-00-00 00:00:00'),
(23, 'Tivi Darling 55 inches 55HD955T2 - 55HD955T2\r\n', '9299000', 'B-tivi-darling-55-inches-1m4G3.jpg', '\"\r\nModel               \r\n55HD955T2\r\nHãng sản xuất\r\nDarling\r\nBảo hành\r\n24 tháng chính hãng\r\nTính năng nổi bật\r\n- Màn hình: 55 inch sử dụng đèn nền LED.\r\n- Độ phân giải:1920 x 1080p\r\n- Kích thước sản phẩm: 1250 x 264 x 770.5\r\n- Công suất tiêu thụ: 135W.\r\n- Hỗ trợ 2 cổng HDMI, 1 cổng kết nối USB\r\n và 1 cổng kết nối PC\r\n- Sản xuất tại Việt Nam\r\n- Công nghệ Nhật Bản\"\r\n', 100, 0, 0, 0, 2, '2018-04-01 15:53:36', '0000-00-00 00:00:00'),
(24, 'tivi asanzo 40 inch - 40 inch = S890\r\n', '4950000', 'B-tivi-asanzo-40-inch-1m4G3.jpg\r\n', '\"Mã sản phẩm 40S890\r\nThương hiệu Asanzo\r\nKích thước có chân/đặt bàn 908x252x590.5mm\r\nKhối lượng có chân 6 kg\r\nKích thước không chân/treo tường 908x72x540 mm\r\nKhối lượng không chân 6 kg\r\nNơi sản xuất Việt Nam\r\nPhụ kiện đi kèm Chân đế, Sách hướng dẫn sử dụng, Điều khiển từ xa\r\n\"\r\n', 100, 1, 0, 4850000, 2, '2018-04-01 15:54:07', '0000-00-00 00:00:00'),
(25, 'Tai nghe Yison S60\r\n', '99000', 'C-TAI-NGHE-YISON-S60-00006311.JPG', '\"Màu sắc : Đen \r\nĐộ dài dây :1.2m\r\nTính năng : nghe nhạc,chống rối\r\nChế độ bảo hành :Không bảo hành \r\nThương hiệu :yison\r\nDòng máy tương ứng :điện thoại có sử dụng cổng cấm âm thanh\"\r\n', 100, 1, 0, 0, 3, '2018-04-01 15:56:30', '0000-00-00 00:00:00'),
(26, '\"\r\nThẻ nhớ MicroSD 8GB Kingston Class 4\"\r\n', '170000', 'C-the-nho-microsd-8gb-kingston-class-4-id26826.jpg\r\n', '\"Màu sắc: Đen\r\nMở rộng bộ nhớ trong, tăng thêm dung lượng lưu trữ cho các thiết bị di động\r\nGiúp bạn lưu trữ hàng ngàn dữ liệu như âm thanh, hình ảnh, video, tập tin\r\nThích hợp với các thiết bị di động phổ thông\r\nHỗ trợ chuẩn kết nối SD 2.0 cho phép truyền dữ liệu nhanh chóng\r\nTốc độ đọc - ghi dữ liệu có thể lên tới 4m/s\"\r\n', 100, 1, 0, 0, 3, '2018-04-01 15:57:07', '0000-00-00 00:00:00'),
(27, 'Sạc dự phòng Icore 5000mAh\r\n', '250000', 'C-SAC-DU-PHONG-ICORE-5000MAH-00262041 (1).JPG', '\"Chế độ bảo hành : 12 tháng 1 đổi 1\r\nDòng máy tương thích : Toàn bộ Điện thoại/ Máy tính bảng\r\nMẫu mã : Chữ nhật, mỏng, nhẹ\r\n Thương hiệu : Icore\r\nTrọng lượng : 127g\r\nThời gian sạc : >500 lần\r\nKích thước : 133*67*10mm\r\nDung lượng pin : 5000mAh\r\nĐộ bền, độ an toàn : Có chip IC chống cháy nổ, ổn định dòng điện bảo vệ pin điện thoại, tự ngắt khi sạc đầy\"\r\n', 100, 1, 1, 200000, 3, '2018-04-01 15:57:40', '0000-00-00 00:00:00'),
(28, 'Loa Dàn 2.0 Soundmax A130 Blue\r\n', '159000', 'C-LOA-DAN-20-SOUNDMAX-A130-BLUE-0003983-5.JPG', '\"Chế độ bảo hành : 12 tháng\r\nThương hiệu : SoundMax\r\nPhụ kiện kèm theo : Dây tín hiệu\r\nDòng loa : 2\r\nDòng máy tương thích : Máy vi tính, điện thoại, đầu đĩa, tivi\r\nTính năng : Nghe nhạc, xem phim.\r\nCông suất : 6W\r\nKích thước : 75x74x91\"\r\n', 100, 1, 1, 0, 3, '2018-04-01 15:58:13', '0000-00-00 00:00:00'),
(29, 'USB 2.0 8GB Adata\r\n', '150000', 'C-USB-20-8GB-ADATA-10.JPG', '\"Cổng USB : 3.0\r\nDung lượng ổ cứng : 8GB\r\nKích thước :28 x 12 x 5mm\r\nMàu sắc : Bạc, xanh biển\r\nTính năng đặc biệt : Vỏ kim loại sang trọng\r\nDòng máy tương thích : Máy tính có cổng USB 2.0 hoặc USB 3.0\r\nTốc độ đọc/ ghi : 15MB/s đọc, 8MB/s ghi\r\nChất liệu : Kim loại\r\nChế độ bảo hành : 12 Tháng\r\nTrọng lượng : 3g\"\r\n', 100, 0, 0, 0, 3, '2018-04-01 15:58:40', '0000-00-00 00:00:00'),
(30, 'Sạc ĐT liền cáp micro usb Icore \r\n', '200000', 'C-SAC-DT-LIEN-CAP-MICRO-USB-ICORE-01.JPG', '\"Nhà sản xuất: Arirang Tech Corp (HK) Limited\r\nMã sản phẩm: IC-V8\r\nCáp sạc Micro USB 1,5m\r\nDùng cho các loại Smartphone\r\nThiết kế nhỏ gọn, thuận tiện khi mang theo\r\nInput: AC 100 - 240V, 50/60Hz\r\nOutput 1: DC5V/1000 mA\"\r\n', 100, 1, 0, 0, 3, '2018-04-01 15:59:03', '0000-00-00 00:00:00'),
(31, 'Chuột có dây rút Prolink 3001\r\n', '200', 'C-CHUOT-DAY-RUT-PROLINK-3001-00005254-1.JPG', '\"Các mức DPI : 1000\r\nChế độ bảo hành : 12 tháng 1 đổi 1\r\nĐộ bền nút bấm : 1 triệu lần nhấn\r\nDòng máy tương thích : Máy tính với Windows XP/Vista/7/8/10; Linus; Mac OS\r\nLoại chuột : Quang, có dây\r\nNhu cầu sử dụng : Phổ thông, văn phòng\r\nThương hiệu : Prolink\r\nĐặc điểm nổi bật : Dây rút nhỏ gọn thuận tiện bỏ túi mang theo\r\nMàu sắc : Đỏ/Hồng/Xám/Đen\"\r\n', 100, 0, 1, 159000, 3, '2018-04-01 15:59:34', '0000-00-00 00:00:00'),
(32, 'Nút che bụi Sắc màu\r\n', '20000', 'C-NUT-CHE-BUI-SAC-MAU-1.jpg', '\"Dòng máy tương thích : Macbook\r\nThương hiệu : Khác\r\nChất liệu : Nhựa dẻo\r\nMàu sắc : Color (hồng, vàng, xanh, cam, đen…)\r\nChế độ bảo hành : không bảo hành\"\r\n', 100, 1, 0, 0, 3, '2018-04-01 16:00:07', '0000-00-00 00:00:00'),
(33, 'Đế đặt điện thoại Icore\r\n', '500', 'C-HAPK-DE-DAT-DT-ICORE-12.JPG\r\n', '\"Chất liệu : Kim loại\r\nDòng máy tương thích : Tất cả điện thoại, tablet 17\"\"\"\"\r\nMẫu mã : Hoàn toàn bằng inox chống rỉ, lớp dán keo 3D chắc chắn, thiết kế thông minh cho bạn khả năng xoay điện thoại 360 độ tùy thích. Dán lên mọi địa hình như kệ giường, xe hơi, bàn làm việc… cho bạn 2 tay hoàn toàn tự do thao tác mà điện thoại vẫn trong tầm quan sát tốt nhất của bạn.\r\nMàu sắc : Vàng, silver\r\nThương hiệu : Icore\r\nChế độ bảo hành : không bảo hành\"\r\n', 100, 0, 0, 480000, 3, '2018-04-01 16:00:34', '0000-00-00 00:00:00'),
(34, 'Đế tản nhiệt Notebook N168\r\n', '300000', 'C-DE-TAN-NHIET-NOTEBOOK-N168-00006134-7.JPG', '\"Dòng máy tương thích : Laptop 15\"\"\"\"\r\nChất liệu : Nhựa cao cấp\r\nMẫu mã : Thiết kế hai quạt tối đa công suất làm mát, có chân đế để bạn có thể đặt laptop ở vị trí nghiêng phù hợp.\r\nMàu sắc : Đen, xanh, hồng\r\nThương hiệu : Notebook\"\r\n', 100, 1, 0, 0, 3, '2018-04-01 16:00:54', '0000-00-00 00:00:00'),
(35, 'Gậy Selfie Lipstick\r\n', '99000', 'C-HAPK-GAY-SELFIE-LIPSTICK-HINH-THOI-SON-DIOR-00338260.JPG', '\"Kích thước : 16.5 - 61.5 cm\r\nChất liệu : Nhựa nhũ bóng\r\nMàu sắc : Tím, Hồng, Trắng\r\nMẫu mã : Gậy Selfie hình thỏi son Dior thiết kế thời trang, dễ dàng bỏ vào túi xách, ba lô mang theo khắp nơi.\r\nTính năng : Gậy chụp tự sướng độ dài tối đa 61.5cm, đảm bảo góc nhìn đủ rộng để selfie hay groupfie.\"\r\n', 100, 0, 0, 0, 3, '2018-04-01 16:01:15', '0000-00-00 00:00:00'),
(36, 'Camera quan sát PIC 2001\r\n', '600', 'C-CAMERA-QUAN-SAT-PIC-2001-00007150.JPG\r\n', '\"Chất liệu : Nhựa cao cấp\r\nDòng máy tương thích : Kết nối tất cả smartphone, máy tính\r\nMẫu mã : Có khả năng kết nối không dây 24/24 với bất cứ thiết bị nào như điện thoại, máy tính bảng, laptop… bạn hoàn toàn yên tâm khi đi ra ngoài mà vẫn quan sát được mọi vấn đề ở nhà hoặc cửa hàng kinh doanh của bạn. Đặc biệt phù hợp với các bà mẹ văn phòng.\r\nMàu sắc : Trắng, đen\r\nThương hiệu : Prolink\"\r\n', 100, 0, 0, 560000, 3, '2018-04-01 16:02:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(5) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `link`, `image`) VALUES
(1, '', 'computer.jpg'),
(2, '', 'cosmetics.jpg'),
(3, '', 'baby.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Đức Toàn', 'nguyenductoann@gmail.com', '$2y$10$c22LImJcqp8BRDFpQ6CpzezlPkWDd5cq81ZAsH7j5dg/LEXcV7DT6', '962525359', '457A Điện Biên Phủ , Phường 25 , Bình Thanh,Hô Chí Minh,Vietnam', 'q8ml2GMvqd0XRCrQdUNwvHdscfnln21idu5FWIGITBlvhp58Ovkw9pWn76Kz', '2018-04-08 01:57:02', '2018-04-08 01:57:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_ctdh`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_dh` (`id_dh`);

--
-- Indexes for table `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  ADD PRIMARY KEY (`id_hinh`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_loai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_loai_con` (`id_loai`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_ctdh` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  MODIFY `id_hinh` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_loai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id_dh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  ADD CONSTRAINT `chitiethinhanh_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loaisanpham` (`id_loai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
