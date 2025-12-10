-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2025 at 02:08 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `liet_ke_sach`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `liet_ke_sach` (`ma` VARCHAR(10))   BEGIN
	SELECT masach, tensach
    FROM sach
    WHERE maloai = ma;
END$$

DROP PROCEDURE IF EXISTS `updateGia`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateGia` (IN `ma` VARCHAR(15), IN `giaNew` FLOAT)   BEGIN
	UPDATE sach SET gia = giaNew WHERE masach = ma;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

DROP TABLE IF EXISTS `chitiethd`;
CREATE TABLE IF NOT EXISTS `chitiethd` (
  `mahd` int NOT NULL,
  `masach` varchar(5) NOT NULL,
  `soluong` tinyint NOT NULL,
  `gia` float NOT NULL,
  PRIMARY KEY (`mahd`,`masach`),
  KEY `FK_chitiet_sach` (`masach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chitiethd`
--

INSERT INTO `chitiethd` (`mahd`, `masach`, `soluong`, `gia`) VALUES
(1001, 'S0001', 2, 120000),
(1001, 'S0005', 1, 150000),
(1002, 'S0003', 1, 250000),
(1002, 'S0011', 3, 90000),
(1003, 'S0007', 2, 100000),
(1004, 'S0002', 1, 95000),
(1004, 'S0013', 2, 75000),
(1005, 'S0006', 1, 180000),
(1006, 'S0004', 1, 80000),
(1007, 'S0010', 2, 110000),
(1008, 'S0012', 1, 130000),
(1009, 'S0014', 3, 85000),
(1010, 'S0008', 1, 220000),
(1010, 'S0017', 1, 280000),
(1011, 'S0015', 2, 140000),
(1012, 'S0016', 1, 160000),
(1013, 'S0009', 1, 300000),
(1014, 'S0018', 2, 98000),
(1015, 'S0019', 1, 170000),
(1016, 'S0020', 1, 65000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `mahd` int NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ngayhd` datetime DEFAULT NULL,
  `tennguoinhan` varchar(50) DEFAULT NULL,
  `diachinguoinhan` varchar(80) DEFAULT NULL,
  `ngaynhan` date DEFAULT NULL,
  `dienthoainguoinhan` varchar(11) DEFAULT NULL,
  `trangthai` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`mahd`),
  KEY `FK_hoadon_khach` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `email`, `ngayhd`, `tennguoinhan`, `diachinguoinhan`, `ngaynhan`, `dienthoainguoinhan`, `trangthai`) VALUES
(1001, 'anh.nguyen@email.com', '2025-10-15 10:30:00', 'Nguyễn A', '123 P. Láng Hạ, Đống Đa, Hà Nội', '2025-10-20', '0901123456', 1),
(1002, 'binh.tran@email.com', '2025-10-16 14:45:00', 'Trần B', '456 Đ. Nam Kỳ Khởi Nghĩa, Q.3, TP.HCM', '2025-10-21', '0918765432', 1),
(1003, 'cuong.le@email.com', '2025-10-17 09:00:00', 'Lê C', '789 Đ. Bạch Đằng, Hải Châu, Đà Nẵng', '2025-10-22', '0982345678', 1),
(1004, 'dung.pham@email.com', '2025-10-18 16:20:00', 'Phạm D', '101 Cầu Giấy, Hà Nội', '2025-10-23', '0975432109', 0),
(1005, 'hien.vu@email.com', '2025-10-19 11:00:00', 'Vũ H', '202 Ngô Quyền, Hoàn Kiếm, Hà Nội', '2025-10-24', '0903334455', 1),
(1006, 'khoa.do@email.com', '2025-10-20 12:30:00', 'Đỗ K', '303 Lê Lợi, Q.1, TP.HCM', '2025-10-25', '0919988776', 0),
(1007, 'lan.mai@email.com', '2025-10-21 15:00:00', 'Mai L', '404 Trần Phú, Q.5, TP.HCM', '2025-10-26', '0971234567', 1),
(1008, 'minh.nguyet@email.com', '2025-10-22 08:30:00', 'Nguyệt M', '505 Nguyễn Văn Linh, Long Biên, Hà Nội', '2025-10-27', '0983344556', 1),
(1009, 'nam.bui@email.com', '2025-10-23 13:45:00', 'Bùi N', '606 Hùng Vương, Q.5, TP.HCM', '2025-10-28', '0905566778', 0),
(1010, 'oanh.phan@email.com', '2025-10-24 10:15:00', 'Phan O', '707 Nguyễn Huệ, Q.1, TP.HCM', '2025-10-29', '0917788990', 1),
(1011, 'phong.hoang@email.com', '2025-11-01 11:30:00', 'Hoàng P', '808 Hai Bà Trưng, Hà Nội', '2025-11-06', '0973456789', 0),
(1012, 'quynh.vo@email.com', '2025-11-02 14:00:00', 'Võ Q', '909 Nguyễn Trãi, Q.5, TP.HCM', '2025-11-07', '0984567890', 1),
(1013, 'son.trinh@email.com', '2025-11-03 09:30:00', 'Trịnh S', '110 Đinh Tiên Hoàng, Q.1, TP.HCM', '2025-11-08', '0906677889', 1),
(1014, 'thao.bui@email.com', '2025-11-04 16:00:00', 'Bùi Th', '121 Điện Biên Phủ, Thanh Khê, Đà Nẵng', '2025-11-09', '0911223344', 0),
(1015, 'thuan.nguyen@email.com', '2025-11-05 10:45:00', 'Nguyễn Thuận', '132 Lý Thường Kiệt, Q.10, TP.HCM', '2025-11-10', '0976543210', 1),
(1016, 'tuan.tran@email.com', '2025-11-06 12:00:00', 'Trần T', '143 Hùng Vương, Phú Nhuận, TP.HCM', '2025-11-11', '0989012345', 1),
(1017, 'uyen.pham@email.com', '2025-11-07 15:30:00', 'Phạm U', '154 Pasteur, Q.1, TP.HCM', '2025-11-12', '0907890123', 0),
(1018, 'viet.do@email.com', '2025-11-08 11:15:00', 'Đỗ V', '165 Trưng Vương, Hà Nội', '2025-11-13', '0915678901', 1),
(1019, 'xuan.hoang@email.com', '2025-11-09 13:00:00', 'Hoàng X', '176 Lạc Long Quân, Tây Hồ, Hà Nội', '2025-11-14', '0972109876', 0),
(1020, 'yen.le@email.com', '2025-11-10 16:40:00', 'Lê Y', '187 Võ Văn Tần, Q.3, TP.HCM', '2025-11-15', '0988765432', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(32) DEFAULT NULL,
  `tenkh` varchar(50) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `dienthoai` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`email`, `matkhau`, `tenkh`, `diachi`, `dienthoai`) VALUES
('anh.nguyen@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn Anh', '123 P. Láng Hạ, Đống Đa, Hà Nội', '0901123456'),
('binh.tran@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Thị Bình', '456 Đ. Nam Kỳ Khởi Nghĩa, Q.3, TP.HCM', '0918765432'),
('cuong.le@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Hữu Cường', '789 Đ. Bạch Đằng, Hải Châu, Đà Nẵng', '0982345678'),
('dung.pham@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Thị Dung', '101 Cầu Giấy, Hà Nội', '0975432109'),
('hien.vu@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vũ Văn Hiền', '202 Ngô Quyền, Hoàn Kiếm, Hà Nội', '0903334455'),
('khoa.do@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Đỗ Thị Khoa', '303 Lê Lợi, Q.1, TP.HCM', '0919988776'),
('lan.mai@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mai Văn Lan', '404 Trần Phú, Q.5, TP.HCM', '0971234567'),
('minh.nguyet@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Nguyệt Minh', '505 Nguyễn Văn Linh, Long Biên, Hà Nội', '0983344556'),
('nam.bui@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Bùi Xuân Nam', '606 Hùng Vương, Q.5, TP.HCM', '0905566778'),
('oanh.phan@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Phan Thị Oanh', '707 Nguyễn Huệ, Q.1, TP.HCM', '0917788990'),
('phong.hoang@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Văn Phong', '808 Hai Bà Trưng, Hà Nội', '0973456789'),
('quynh.vo@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Võ Thị Quỳnh', '909 Nguyễn Trãi, Q.5, TP.HCM', '0984567890'),
('son.trinh@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Trịnh Bá Sơn', '110 Đinh Tiên Hoàng, Q.1, TP.HCM', '0906677889'),
('thao.bui@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Bùi Thị Thảo', '121 Điện Biên Phủ, Thanh Khê, Đà Nẵng', '0911223344'),
('thuan.nguyen@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Đức Thuận', '132 Lý Thường Kiệt, Q.10, TP.HCM', '0976543210'),
('tuan.tran@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Anh Tuấn', '143 Hùng Vương, Phú Nhuận, TP.HCM', '0989012345'),
('uyen.pham@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Thị Uyên', '154 Pasteur, Q.1, TP.HCM', '0907890123'),
('viet.do@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Đỗ Thành Việt', '165 Trưng Vương, Hà Nội', '0915678901'),
('xuan.hoang@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Xuân', '176 Lạc Long Quân, Tây Hồ, Hà Nội', '0972109876'),
('yen.le@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Thị Yến', '187 Võ Văn Tần, Q.3, TP.HCM', '0988765432');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `maloai` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('TL001', 'Kỹ Năng Sống'),
('TL002', 'Văn Học Nước Ngoài'),
('TL003', 'Văn Học Việt Nam'),
('TL004', 'Khoa Học - Công Nghệ'),
('TL005', 'Tài Chính - Kinh Doanh');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxb`
--

DROP TABLE IF EXISTS `nhaxb`;
CREATE TABLE IF NOT EXISTS `nhaxb` (
  `manxb` varchar(5) NOT NULL,
  `tennxb` text NOT NULL,
  PRIMARY KEY (`manxb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nhaxb`
--

INSERT INTO `nhaxb` (`manxb`, `tennxb`) VALUES
('NXB01', 'Nhà Xuất Bản Trẻ'),
('NXB02', 'Nhà Xuất Bản Lao Động'),
('NXB03', 'Nhà Xuất Bản Tổng Hợp TP.HCM'),
('NXB04', 'Nhà Xuất Bản Văn Học'),
('NXB05', 'Nhà Xuất Bản Khoa Học và Kỹ Thuật');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

DROP TABLE IF EXISTS `sach`;
CREATE TABLE IF NOT EXISTS `sach` (
  `masach` varchar(5) NOT NULL,
  `tensach` varchar(250) NOT NULL,
  `mota` text NOT NULL,
  `gia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `manxb` varchar(5) NOT NULL,
  `maloai` varchar(5) NOT NULL,
  PRIMARY KEY (`masach`),
  KEY `FK_sach_loai` (`maloai`),
  KEY `FK_sach_nxb` (`manxb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`masach`, `tensach`, `mota`, `gia`, `hinh`, `manxb`, `maloai`) VALUES
('S0001', 'Nhà Giả Kim', 'Tiểu thuyết về hành trình theo đuổi ước mơ.', 100000, 'hinh01.jpg', 'NXB04', 'TL002'),
('S0002', 'Đắc Nhân Tâm', 'Sách kỹ năng sống, nghệ thuật giao tiếp.', 100000000, 'hinh02.jpg', 'NXB02', 'TL001'),
('S0003', 'Tư Duy Nhanh Và Chậm', 'Sách khoa học hành vi và tâm lý học.', 250000, 'hinh03.jpg', 'NXB05', 'TL004'),
('S0004', 'Quẳng Gánh Lo Đi Và Vui Sống', 'Sách tự lực giúp quản lý căng thẳng.', 80000, 'hinh04.jpg', 'NXB02', 'TL001'),
('S0005', 'Harry Potter - Hòn Đá Phù Thủy', 'Tiểu thuyết giả tưởng nổi tiếng.', 150000, 'hinh05.jpg', 'NXB04', 'TL002'),
('S0006', '7 Thói Quen Của Người Thành Đạt', 'Sách phát triển cá nhân và lãnh đạo.', 180000, 'hinh06.jpg', 'NXB01', 'TL001'),
('S0007', 'Mắt Biếc', 'Truyện dài lãng mạn Việt Nam.', 100000, 'hinh07.jpg', 'NXB03', 'TL003'),
('S0008', 'Lược Sử Thời Gian', 'Sách khoa học vũ trụ.', 220000, 'hinh08.jpg', 'NXB05', 'TL004'),
('S0009', 'Suối Nguồn', 'Tiểu thuyết triết học.', 300000, 'hinh09.jpg', 'NXB04', 'TL002'),
('S0010', 'Bí Mật Của May Mắn', 'Truyện ngắn kinh doanh.', 110000, 'hinh10.jpg', 'NXB02', 'TL005'),
('S0011', 'Cha Giàu Cha Nghèo', 'Sách về tài chính cá nhân.', 90000, 'hinh11.jpg', 'NXB02', 'TL005'),
('S0012', '1984', 'Tiểu thuyết phản địa đàng kinh điển.', 130000, 'hinh12.jpg', 'NXB04', 'TL002'),
('S0013', 'Cà Phê Cùng Tony', 'Tản văn truyền cảm hứng.', 75000, 'hinh13.jpg', 'NXB01', 'TL001'),
('S0014', 'Tuổi Trẻ Đáng Giá Bao Nhiêu', 'Sách về học hỏi và trải nghiệm.', 85000, 'hinh14.jpg', 'NXB01', 'TL001'),
('S0015', 'Tâm Lý Học Về Tiền', 'Sách về tài chính cá nhân và tâm lý.', 140000, 'hinh15.jpg', 'NXB02', 'TL005'),
('S0016', 'Giết Chết Con Chim Nhại', 'Tiểu thuyết kinh điển Mỹ.', 160000, 'hinh16.jpg', 'NXB04', 'TL002'),
('S0017', 'Marketing 4.0', 'Sách chuyên ngành Marketing.', 280000, 'hinh17.jpg', 'NXB05', 'TL005'),
('S0018', 'Bóng Đêm Thật Ra Chỉ Là Buổi Sáng', 'Tập truyện ngắn Việt Nam.', 98000, 'hinh18.jpg', 'NXB03', 'TL003'),
('S0019', 'Sức Mạnh Của Hiện Tại', 'Sách tâm linh và phát triển bản thân.', 170000, 'hinh19.jpg', 'NXB02', 'TL001'),
('S0020', 'Những Ngày Thơ Ấu', 'Hồi ký Việt Nam.', 65000, 'hinh20.jpg', 'NXB03', 'TL003');

-- --------------------------------------------------------

--
-- Stand-in structure for view `top_10_gia`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `top_10_gia`;
CREATE TABLE IF NOT EXISTS `top_10_gia` (
`masach` varchar(5)
,`tensach` varchar(250)
,`gia` float
);

-- --------------------------------------------------------

--
-- Structure for view `top_10_gia`
--
DROP TABLE IF EXISTS `top_10_gia`;

DROP VIEW IF EXISTS `top_10_gia`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top_10_gia`  AS SELECT `sach`.`masach` AS `masach`, `sach`.`tensach` AS `tensach`, `sach`.`gia` AS `gia` FROM `sach` ORDER BY `sach`.`gia` DESC LIMIT 0, 10 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `FK_chitiet_hoadon` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_chitiet_sach` FOREIGN KEY (`masach`) REFERENCES `sach` (`masach`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_hoadon_khach` FOREIGN KEY (`email`) REFERENCES `khachhang` (`email`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `FK_sach_loai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_sach_nxb` FOREIGN KEY (`manxb`) REFERENCES `nhaxb` (`manxb`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
