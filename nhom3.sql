-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2021 at 11:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom3`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `MANU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MANU_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MANU_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`MANU_ID`, `MANU_NAME`) VALUES
(1, 'Apple'),
(2, 'Oppo'),
(3, 'Samsung'),
(4, 'Asus'),
(5, 'Acer'),
(6, 'Hp'),
(7, 'LG'),
(8, 'Sony'),
(9, 'JBL'),
(10, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANU_ID` int(11) NOT NULL,
  `TYPE_ID` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `IMAGE` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DESCRIPTION` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FEATURE` tinyint(4) NOT NULL,
  `CREATE_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `SLTK` int(11) NOT NULL,
  `SLBAN` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `NAME`, `MANU_ID`, `TYPE_ID`, `PRICE`, `IMAGE`, `DESCRIPTION`, `FEATURE`, `CREATE_AT`, `SLTK`, `SLBAN`) VALUES
(1, 'IPhone 13 Pro Max', 1, 1, 33990000, 'iphone13promax.png', '_Màn hình:6.7 Super Retina XDR\r\n_Tốc độ làm tươi:120Hz ProMotion\r\n_Camera sau:3 Camera: Ống kính góc rộng f/1.5 - Tele f/2.8 - Siêu rộng f/1.8\r\n_Vi xử lý:Chip A15 Bionic (5nm)\r\n_RAM:6GB\r\n_Dung lượng:128GB - 256GB - 512GB - 1TB\r\n_Chuẩn mạng:5G/ Wifi 6', 1, '2021-10-13 02:08:39', 30, 12),
(2, 'IPhone 13', 1, 1, 24990000, 'ip13.jpg', '_Màn hình:6.1\" Super Retina XDR\r\n_Tốc độ làm tươi:60Hz\r\n_Camera sau:2 Camera: Góc rộng ống kính f/1.6 - Siêu rộng f/2.4\r\n_Vi xử lý:Chip A15 Bionic (5nm)\r\n_RAM:4GB\r\n_Dung lượng:128GB - 256GB - 512GB\r\n_Chuẩn mạng:5G/ Wifi 6', 1, '2021-10-17 03:34:21', 17, 1),
(3, 'IPhone SE (2020)', 1, 1, 10500000, 'iphonese.jpg', '_Kích thước màn hình:4.7 inches\r\n_Công nghệ màn hình:IPS LCD\r\n_Camera sau:12 MP, f/1.8 (wide), PDAF, OIS\r\n_Camera trước:7 MP, f/2.2\r\n_Chipset	Apple:A13 Bionic (7 nm+)\r\n_Dung lượng RAM:3 GB\r\n_Bộ nhớ trong:64 GB', 0, '2021-10-09 03:36:10', 12, 8),
(4, 'Oppo Reno4', 2, 1, 6590000, 'opporeno4.jpg', '_Kích thước màn hình:6.4 inches\r\n_Công nghệ màn hình:OLED\r\n_Camera sau:48 MP (IMX586) + 8 MP + 2 MP + 2 MP, 4 camera\r\n_Camera trước:32 MP (IMX616) + Cảm biến thông minh AI\r\n_Chipset	Qualcomm SM7125 Snapdragon 720G (8 nm)\r\n_Dung lượng RAM	8 GB', 1, '2021-10-03 03:40:54', 20, 6),
(5, 'Oppo Find X2', 2, 1, 18990000, 'oppofindx2.jpg', '_Kích thước màn hình:6.7 inches\r\n_Công nghệ màn hình:AMOLED\r\n_Camera sau:Chính 48 MP & Phụ 13 MP, 12 MP\r\n_Camera trước:32 MP\r\n_Chipset	Qualcomm Snapdragon 865\r\n_Dung lượng RAM	12 GB', 0, '2021-10-07 03:45:01', 25, 15),
(6, 'Oppo A94', 2, 1, 7050000, 'oppoa94.gif', '_Kích thước màn hình:6.43 inches\r\n_Công nghệ màn hình:AMOLED\r\n_Camera sau:Camera chính góc rộng 48 MP (F/1.7)\r\n_Camera góc siêu rộng 8 MP (F/2.2)\r\n_Camera macro 2 MP (F/2.4)\r\n_Camera đơn sắc 2 MP (F/2.4)\r\n_Camera trước:32 MP\r\n_Khẩu độ F/2.4\r\n_Chipset Helio P95, tối đa 2.2GHz\r\n_Dung lượng RAM	8 GB', 0, '2021-09-09 03:46:22', 9, 10),
(7, 'Samsung Galaxy Z Fold3 5G', 3, 1, 38299000, 'sszfold35g.jpg', '_Màn hình: 7.6 inch (màn hình chính), 6.2 inch (màn hình phụ), Dynamic AMOLED 2X, 120 Hz.\r\n_Chip: Snapdragon 888, tiến trình 5 nm, hỗ trợ 5G\r\n_RAM: 12 GB.\r\n_Bộ nhớ trong: 256 GB hoặc 512 GB.\r\n_Hệ điều hành: Android 11.\r\n_Pin: 4.400 mAh (2 viên pin).\r\n_Camera: 12 MP - 12 MP - 12 MP (camera sau) và 4 MP - 10 MP (camera trước).', 1, '2021-08-10 03:49:06', 26, 20),
(8, 'Samsung Galaxy S21 5G', 3, 1, 14599000, 'ssgalaxyS21.jpg', '_Mặt kính cảm ứng:Gorilla Glass Victus\r\n_Độ phân giải:1080 x 2400 pixels\r\n_Màn hình rộng:6.2 inches, 94.1 cm2\r\n_Camera sau:64 MP, 12MP và 12MP (3 camera)\r\n_Quay Phim:8K@24fps, 4K@30/60fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, stereo sound rec., gyro-EIS\r\n_Hệ điều hành:Android 11, One UI 3.1\r\n_Chipset:Exynos 2100\r\n_RAM:8 GB\r\n_Bộ nhớ trong ( Rom):128 GB', 0, '2021-05-14 03:52:35', 16, 6),
(9, 'Samsung Galaxy Node 20 Ultra 5G', 3, 1, 30000000, 'ssnode20ultra5g.jpg', '_Màn hình :6.9\", 2K+ (1440 x 3088 Pixels), Dynamic AMOLED 2X 120Hz,\r\n_Camera sau :Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF, Quay phim FullHD 1080p@30fps, Quay phim HD 720p@960fps, Quay phim FullHD 1080p@60fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@30fps, Quay phim 4K 2160p@60fps, Quay phim 8K 4320p@24fps,\r\n_Camera trước :10 MP, Hỗ trợ VideoCall thông qua ứng dụng,\r\n_Hệ điều hành - CPU :Android 10, Exynos 990 8 nhân, 2 nhân 2.73 GHz, 2 nhân 2.5 GHz & 4 nhân 2.0 Ghz,\r\n_Bộ nhớ ram & Lưu trữ :12Gb, 256 GB, MicroSD, hỗ trợ tối đa 1 TB', 0, '2021-01-05 03:54:32', 50, 29),
(10, 'Laptop ASUS Vivobook S533EA', 4, 2, 20280000, 'asusvibook.jpg', '_Loại CPU:Intel Core i5-1135G7 Processor (4 x 2.40 GHz), Max Turbo Frequency : 4.20 GHz\r\n_Loại card đồ họa:Intel Iris Xe Graphics\r\n_Dung lượng RAM	8GB\r\n_Loại RAM:DDR4/ 3200MHz, không hỗ trợ nâng cấp\r\n_Ổ cứng	512GB SSD PCIe (M.2 2280)\r\n_Kích thước màn hình:15.6 inches', 1, '2021-09-08 03:58:09', 19, 18),
(11, 'Laptop ASUS Zenbook UX425EA', 4, 2, 999999, 'asuszenbook.jpg', '_Loại CPU:Intel Core i7-1165G7 2.8GHz up to 4.7GHz 12MB\r\n_Loại card đồ họa:Intel Iris Xe Graphics\r\n_Dung lượng RAM	16GB\r\n_Loại RAM:LPDDR4X 3200MHz, không hỗ trợ nâng cấp\r\n_Ổ cứng	512GB SSD M.2 PCIE G3X2\r\n_Kích thước màn hình:14 inches', 1, '2021-10-17 03:34:21', 35, 26),
(12, 'Laptop ASUS D415DA-EK482T', 4, 2, 12290000, 'asusd415da.jpg', '_Loại CPU:AMD Ryzen 3-3250U 2.6GHz up to 3.5GHz 4MB\r\n_Loại card đồ họa:AMD Radeon Graphics\r\n_Dung lượng RAM	4GB\r\n_Loại RAM:DDR4 3200MHz, 1 khe cắm hỗ trợ tối đa 12GB\r\n_Ổ cứng	512GB SSD M.2 PCIE G3X4 , 1x slot SATA3 2.5\"\r\n_Kích thước màn hình:14 inches', 0, '2021-10-03 03:40:54', 40, 22),
(13, 'Laptop Acer Nitro 5 Gaming AN515 57 727J', 5, 2, 28990000, 'LaptopAcerNitro5.jpg', '_CPU:i711800H2.30 GHz\r\n_RAM:8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\n_Ổ cứng:Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\n_Màn hình:15.6\"Full HD (1920 x 1080)144Hz\r\n_Card màn hình:Card rờiRTX 3050Ti 4GB\r\n_Cổng kết nối:3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C', 1, '2021-10-09 03:36:10', 33, 11),
(14, 'Laptop Acer Predator Helios PH315 54 75YD', 5, 2, 38990000, 'LaptopAcerPredaorHelios.jpg', '_CPU:i711800H2.30 GHz\r\n_RAM:16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz\r\n_Ổ cứng:Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\n_Màn hình:15.6\"QHD (2560 x 1440)165Hz\r\n_Card màn hình:Card rờiRTX 3060 6GB\r\n_Cổng kết nối:3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)Mini DisplayPortUSB Type-C', 0, '2021-10-13 02:08:39', 22, 2),
(15, 'Laptop Acer Aspire 3 A315 56 58EB i5 1035G1', 5, 2, 15590000, 'LaptopAcerAspire3.jpg', '_CPU:i51035G11.00 GHz\r\nRAM:\r\n8 GBDDR4 (On board 4GB +1 khe 4GB)2400 MHz\r\n_Ổ cứng:SSD 512 GB NVMe PCIeHỗ trợ khe cắm HDD SATA\r\n_Màn hình:15.6\"Full HD (1920 x 1080)\r\n_Card màn hình:Card tích hợpIntel UHD\r\n_Cổng kết nối:Jack tai nghe 3.5 mmHDMILAN (RJ45)USB 3.12 x USB 2.0', 0, '2021-10-03 03:40:54', 41, 22),
(16, 'Laptop HP 340s G7 240Q4PA', 6, 2, 12990000, 'hp340sg7.jpg', '_Loại CPU:Intel Core i3-1005G1\r\n_Loại card đồ họa:Intel UHD Graphics\r\n_Dung lượng RAM	4GB\r\n_Loại RAM:DDR4 2666Mhz, 2 khe cắm, hỗ trợ tối đa 16GB\r\n_Ổ cứng	256 GB PCIe® NVMe™ SSD\r\n_Kích thước màn hình:14 inches', 0, '2021-10-04 04:18:18', 9, 23),
(17, 'Laptop HP 348 G7 9PH23PA', 6, 2, 22130000, 'hp348g7.jpg', '_Loại CPU:Intel Core i7-10510U 1.8GHz up to 4.9GHz 8MB\r\n_Loại card đồ họa:AMD Radeon 530 2GB GDDR5\r\n_Dung lượng RAM	8GB\r\n_Loại RAM:DDR4 2666MHz, 2 khe cắm hỗ trợ tối đa 16GB\r\n_Ổ cứng	512GB PCIe NVMe SSD\r\n_Kích thước màn hình:14 inches', 1, '2021-10-01 04:23:15', 4, 1),
(18, 'Laptop HP 240 G8 3D0E8PA', 6, 2, 21490000, 'hp240g8.gif', '_Loại CPU:Intel Core i7-1165G7 2.80 GHz up to 4.70 GHz, 12MB\r\n_Loại card đồ họa:Intel Iris XeGraphics\r\n_Dung lượng RAM	8GB\r\n_Loại RAM:8GB(1 x 8GB) DDR4 3200MHz, 2 khe cắm\r\n_Ổ cứng	512GB PCIe NVMe SSD\r\n_Kích thước màn hình:14 inches', 1, '2021-10-09 03:36:10', 36, 25),
(19, 'LG A1 48 inch 4K Smart OLED TV', 7, 3, 28900000, 'LG A1 48 inch 4K Smart OLED TV.jpg', '_Loại màn hình hiển thị:4K OLED\r\n_Kích thước:48\r\n_Độ phân giải:3840 x 2160\r\n_Màu sắc / Wide Color Gamut:Perfect Color', 1, '2021-10-17 03:34:21', 15, 26),
(20, 'LG UP80 86 inch 4K Smart UHD TV', 7, 3, 79900000, 'LG UP80 86 inch 4K Smart UHD TV.jpg', '_Loại màn hình hiển thị:4K UHD\r\n_Kích thước:86\r\n_Độ phân giải:3840x2160\r\n_Tăng cường sáng Ultra Luminance:Ultra Luminance', 1, '2021-10-18 05:40:56', 34, 26),
(21, 'LG Z1 88inch 8K Smart OLED TV', 7, 3, 890000000, 'LG Z1 88inch 8K Smart OLED TV.jpg', '_Loại màn hình hiển thị:8K OLED\r\n_Kích thước:88\r\n_Độ phân giải:7680 x 4320\r\n_Màu sắc / Wide Color Gamut:Perfect Color', 0, '2021-10-03 03:40:54', 44, 33),
(22, 'Smart Tivi 4K Sony KD-50X75 50 inch 4K HDR Android TV', 8, 3, 16400000, 'SONY SMART TIVI 4K.jpg', 'Smart Tivi, Tivi Ultra HD\r\nKích thước màn hình:\r\n50 inch\r\nĐộ phân giải:\r\n4K Ultra HD (3840 x 2160px)\r\nSản xuất tại:\r\nViệt Nam\r\nBluetooth:\r\nCó\r\nKết nối Internet:\r\nWifi, Cổng LAN\r\nCổng AV:\r\nCổng Composite\r\nCổng HDMI:\r\n3 cổng\r\nCổng USB:\r\n2 cổng\r\nCổng xuất âm thanh:\r\nCổng Optical (Digital Audio Out)\r\nTích hợp đầu thu kỹ thuật số:\r\nDVB-T2', 1, '2021-10-17 03:34:21', 35, 30),
(23, 'OLED Tivi 4K Sony 55 inch 55A80J Android TV', 8, 3, 48200000, 'SONY OLED TV 4K.jpg', 'Smart Tivi, OLED Tivi, Tivi Ultra HD\r\nKích thước màn hình:\r\n55 inch\r\nĐộ phân giải;\r\n4K Ultra HD (3840 x 2160px)\r\nSản xuất tại;\r\nMalaysia\r\nBluetooth;\r\nCó\r\nKết nối Internet;\r\nWifi, Cổng LAN\r\nCổng AV;\r\nCổng Composite\r\nCổng HDMI;\r\n4 cổng\r\nCổng USB;\r\n3 cổng\r\nCổng xuất âm thanh;\r\nCổng Optical (Digital Audio Out)\r\nTích hợp đầu thu kỹ thuật số;\r\nDVB-T2', 0, '2021-10-03 03:40:54', 45, 44),
(24, 'Smart Tivi 4K 43 inch Sony KD-43X8050H HDR Android', 8, 3, 16790000, 'SONY ANDROID TV 4K.jpg', 'Smart Tivi, Tivi Ultra HD\r\nKích thước màn hình\r\n43 inch\r\nĐộ phân giải\r\n4K Ultra HD (3840 x 2160px)\r\nSản xuất tại\r\nMalaysia\r\nBluetooth\r\nCó\r\nKết nối Internet\r\nWifi, Cổng LAN\r\nCổng AV\r\nCổng Composite\r\nCổng HDMI\r\n4 cổng\r\nCổng USB\r\n2 cổng\r\nCổng xuất âm thanh\r\nCổng Optical (Digital Audio Out), Jack loa 3.5 mm\r\nTích hợp đầu thu kỹ thuật số\r\nDVB-T2', 1, '2021-10-09 03:36:10', 6, 26),
(25, 'Tai nghe True Wireless JBL Live PRO+ Rose', 9, 4, 2990000, 'Tai nghe True Wireless JBL Live PRO+ Rose.jpg', 'Bảo hành:12 Tháng\r\nMàu sắc:Rose\r\nKết nối:Không dây\r\nChuẩn kết nối:Bluetooth 5.0\r\nTần số	20 Hz – 20 kHz\r\nTrở kháng:16 Ohm\r\nPin:Li-ion 3.7 V, 55 mAh', 1, '2021-10-07 03:45:01', 5, 22),
(26, 'Tai nghe True Wireless JBL Tune 115 TWS', 9, 4, 1390000, 'Tai nghe True Wireless JBL Tune 115 TWS.jpg', 'Thời lượng pin Tai nghe:5 giờ\r\nHộp sạc:21 giờ\r\nThời gian sạc:2 giờ\r\nChống nước:Không\r\nCông nghệ âm thanh:JBL Pure Sound\r\nMicro:Mic đàm thoại\r\nTương thích:Android, IOS, Windows\r\nLoại thiết kế:In Ear\r\nSố thiết bị kết nối cùng lúc:1 Thiết bị\r\nỨng dụng kết nối:My JBL Headphone', 0, '2021-10-03 03:40:54', 41, 40),
(27, 'Tai nghe không dây JBL Tune 700BT', 9, 4, 1990000, 'Tai nghe không dây JBL Tune 700BT.jpg', 'Model:Tune 700BT\r\nMàu:Đen, Cam, Xanh, Trắng\r\nTần số:20Hz-20KHz\r\nTrở kháng:32Ohm\r\nCông suất đầu vào tối đa:40mW\r\nKhoảng cách sử dụng:40mm\r\nTruyền độ nhạy:-15 Dbv / Pa\r\nBluetooth:4.2\r\nPin: Pin Li-ion Polymer (610mAh / 3.7V)\r\n', 1, '2021-10-04 05:57:08', 12, 4),
(28, 'Tai nghe Xiaomi Mi Basic', 10, 4, 150000, 'Tai nghe Xiaomi Mi Basic.jpg', 'Jack cắm	3.5mm\r\nKích thước	1.25m\r\nTrọng lượng	14g\r\nHãng sản xuất	Xiaomi', 1, '2021-10-09 03:36:10', 9, 3),
(29, 'Tai nghe Xiaomi True Wireless Earbuds Basic 2', 10, 4, 450000, 'Tai nghe Xiaomi True Wireless Earbuds Basic 2.jpg', 'Thơi lượng pin	12 giờ\r\nThời gian sạc	2 giờ\r\nChống nước	IPX4 (Mồ hôi,nước mưa)\r\nCông nghệ âm thanh	Công nghệ giảm ồn DSP\r\nMicro	Mic đàm thoại\r\nTương thích	Android,iOS,Windows', 0, '2021-10-03 03:40:54', 5, 2),
(30, 'Tai nghe không dây Xiaomi Earphones 2 Basic BHR4089GL', 10, 4, 850000, 'Tai nghe không dây Xiaomi Earphones 2 Basic BHR4089GL.jpg', 'Thơi lượng pin	Tai nghe : 5 giờ - Hộp sạc : 20 giờ\r\nThời gian sạc	1.5 giờ\r\nChống nước	IPX5 (Mồ hôi,nước mưa)\r\nMicro	Mic đàm thoại chống ồn\r\nTương thích	Android,iOS,Windows\r\nTính năng khác	Sử dụng độc lập 1 bên tai\r\nTự động kết nối khi mở hộp sạc\r\nTự động tắt nhạc khi tháo tai nghe', 1, '2021-10-17 03:34:21', 25, 25),
(31, 'Loa Bluetooth Xiaomi Mi Compact Speaker 2', 10, 5, 290000, 'Loa Bluetooth Xiaomi Mi Compact Speaker 2.jpg', 'Cách kết nối	Bluetooth\r\nChất liệu	Nhựa\r\nCổng sạc	Micro USB\r\nDãy Tần số	200Hz ~ 18kHz(-10dB)\r\nKết nối	BT 4.2', 1, '2021-10-03 03:40:54', 25, 55),
(32, 'Loa Bluetooth Tích Hợp Sạc Không Dây Xiaomi XMWXCLYYX01ZM', 10, 5, 1150000, 'Loa Bluetooth Tích Hợp Sạc Không Dây Xiaomi XMWXCLYYX01ZM.jpg', '_Mô tả: Thương hiệu : Xiaomi\r\n_Model: XMWXCLYYX01ZM\r\n_Kích thước: 234 x 86.5 x 73.9mm\r\n_Bluetooth: 5.0\r\n_Phạm vi kết nối: ≤10m\r\n_Kích thước màn loa: 40mm\r\n_Công suất loa: 5W\r\n_Công suất sạc không dây: 30W\r\n_Điện áp đầu vào: 15V/3A\r\n_Khoảng cách sạc: ≤4mm\r\n_Nhiệt độ hoạt động: 0°C – 45°C', 0, '2021-10-17 03:34:21', 2, 52),
(33, 'Loa Bluetooth Outdoor Xiaomi Portable Speaker 16W (MDZ-36-DB)', 10, 5, 890000, 'Loa Bluetooth Outdoor Xiaomi Portable Speaker 16W (MDZ-36-DB).jpg', '_Mô tả: Thương hiệu: XIAOMI\r\n_Model: MDZ-36-DB\r\n_Kích thước: 213 x 74 x 74 mm\r\n_Bluetooth: 5.0\r\n_Công suất: 2 x 8W (16W)\r\n_Dải tần: 80Hz đến 20KHz\r\n_Chống nước: IPx7\r\n_Pin: Lithium-ion, 3.7V, 2600mAh\r\n_Thời gian chơi nhạc: 13 giờ\r\n_Thời gian sạc: 4 giờ\r\n_Màu sắc: Đen / Xanh Blue', 0, '2021-10-03 03:40:54', 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`TYPE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`TYPE_ID`, `TYPE_NAME`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Tivi'),
(4, 'Tai nghe'),
(5, 'Loa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
