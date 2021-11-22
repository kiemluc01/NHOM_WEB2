-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 07:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docsach`
--
create database docsach;
use docsach;
-- --------------------------------------------------------

--
-- Table structure for table `chitietsach`
--

CREATE TABLE `chitietsach` (
  `IdChitietsach` int(11) NOT NULL,
  `idSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtatND` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Luotxem` int(11) DEFAULT NULL,
  `Feedback` int(11) DEFAULT NULL,
  `Favorite` int(11) DEFAULT NULL,
  `Sotrang` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietsach`
--

INSERT INTO `chitietsach` (`IdChitietsach`, `idSach`, `tomtatND`, `Luotxem`, `Feedback`, `Favorite`, `Sotrang`) VALUES
(1, '1', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 2, 4, 2, '200'),
(2, '2', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 4, 2, 4, '200'),
(3, '3', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 4, 1, 4, '200'),
(4, '4', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 4, 1, 4, '200'),
(5, '5', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 4, 1, 4, '200'),
(6, '6', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 4, 2, 4, '200'),
(7, '7', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 4, 1, 4, '200'),
(8, '8', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 4, 1, 4, '200');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `idMember` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-1.png',
  `Gioitinh` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`idMember`, `username`, `password`, `email`, `IMG`, `Gioitinh`, `Ngaysinh`) VALUES
(1, 'kiemluc', '161101', 'kiemluc@gmail.com', 'https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/247224275_951065242150688_4911589926309599867_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=VwyH_CrfnsgAX_3fbXz&_nc_ht=scontent.fdad3-5.fna&oh=e43e86dd41b64baed66542a785f9cde5&oe=61922516', NULL, NULL),
(2, 'hailong', '041112', 'hailong@gmail.com', 'https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-1.png', NULL, NULL),
(3, 'thanhhoa', '181101', 'ThanhHoa@gmail.com', 'https://scontent.fdad3-3.fna.fbcdn.net/v/t1.6435-9/242092272_3035470070107015_3856801447139456145_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=E0WuszrbwWAAX-vqX9T&_nc_ht=scontent.fdad3-3.fna&oh=8be05224f4acfdf9252b0d1ec9cb41c7&oe=61B07706', NULL, NULL),
(4, 'anhtan', '291100', 'tannguyen@gmail.com', 'https://scontent.fdad3-5.fna.fbcdn.net/v/t1.6435-9/86776606_2250126728615141_3293442173101408256_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=oNBO2r0N_a8AX_2JdrK&_nc_ht=scontent.fdad3-5.fna&oh=56fa9303a7ad0bdc8cf4863d38100653&oe=61B108C7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblchitietchuong`
--

CREATE TABLE `tblchitietchuong` (
  `idChitietchuong` int(11) NOT NULL,
  `idChuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Noidung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblchuong`
--

CREATE TABLE `tblchuong` (
  `idChuong` int(11) NOT NULL,
  `idSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenChuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sotrang` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbldanhgia`
--

CREATE TABLE `tbldanhgia` (
  `idMember` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDanhgia` int(11) NOT NULL,
  `Noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbldanhgia`
--

INSERT INTO `tbldanhgia` (`idMember`, `idSach`, `idDanhgia`, `Noidung`, `Thoigian`) VALUES
('1', '1', 1, 'Toẹt vời ông mặt trời', '2021-11-10'),
('1', '2', 2, 'Giỏi lắm, đúng là con trai của ta', '2021-11-10'),
('1', '6', 3, 'Ở cái XH này, có làm thì mới có ăn, không làm mà đòi có ăn thì đọc ngay nghĩ giàu làm giàu', '2021-11-10'),
('2', '1', 4, 'tuỵt zời lắm', '2021-11-10'),
('3', '1', 5, 'hay hay hay', '2021-11-10'),
('2', '2', 6, 'đang đọc nữa chừng, tắt đi tém rửa cơm nác đã', '2021-11-10'),
('3', '4', 7, 'ulatr!!! sao hay thế này', '2021-11-10'),
('4', '6', 8, 'OMG lun á', '2021-11-10'),
('4', '5', 9, 'Quá được còn gì nữa', '2021-11-10'),
('4', '7', 10, '3 từ thôi, xuất sắc lắm', '2021-11-10'),
('4', '3', 11, 'Quá hayy!!!', '2021-11-10'),
('4', '8', 12, 'Quá hayy!!!', '2021-11-10');

--
-- Triggers `tbldanhgia`
--
DELIMITER $$
CREATE TRIGGER `add_luotcmt` AFTER INSERT ON `tbldanhgia` FOR EACH ROW update chitietsach set Feedback = Feedback +1 where idSach = NEW.idSach
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_luotcmt` AFTER DELETE ON `tbldanhgia` FOR EACH ROW update chitietsach set Feedback = Feedback -1 where idSach = OLD.idSach
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbldanhmuc`
--

CREATE TABLE `tbldanhmuc` (
  `idDanhmuc` int(11) NOT NULL,
  `Tendanhmuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbldanhmuc`
--

INSERT INTO `tbldanhmuc` (`idDanhmuc`, `Tendanhmuc`) VALUES
(1, 'Sách Kinh Doanh'),
(2, 'Đời Sống - Xã Hội'),
(3, 'Thiếu Nhi'),
(4, 'Tác Phẩm Văn Học'),
(5, 'Khoa Học');

-- --------------------------------------------------------

--
-- Table structure for table `tblfavorite`
--

CREATE TABLE `tblfavorite` (
  `idSach` int(11) NOT NULL,
  `idMember` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfavorite`
--

INSERT INTO `tblfavorite` (`idSach`, `idMember`) VALUES
(1, '3'),
(1, '4'),
(2, '1'),
(2, '2'),
(2, '3'),
(2, '4'),
(3, '1'),
(3, '2'),
(3, '3'),
(3, '4'),
(4, '1'),
(4, '2'),
(4, '3'),
(4, '4'),
(5, '1'),
(5, '2'),
(5, '3'),
(5, '4'),
(6, '1'),
(6, '2'),
(6, '3'),
(6, '4'),
(7, '1'),
(7, '2'),
(7, '3'),
(7, '4'),
(8, '1'),
(8, '2'),
(8, '3'),
(8, '4');

--
-- Triggers `tblfavorite`
--
DELIMITER $$
CREATE TRIGGER `add_Favorite` AFTER INSERT ON `tblfavorite` FOR EACH ROW update chitietsach set Favorite = Favorite +1 where idSach = NEW.idSach
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_Favorite` AFTER DELETE ON `tblfavorite` FOR EACH ROW update chitietsach set Favorite = Favorite -1 where idSach = OLD.idSach
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tblsach`
--

CREATE TABLE `tblsach` (
  `idSach` int(11) NOT NULL,
  `imgSach` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tensach` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tacgia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NXB` int(11) NOT NULL,
  `idDanhmuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayDang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsach`
--

INSERT INTO `tblsach` (`idSach`, `imgSach`, `Tensach`, `Tacgia`, `NXB`, `idDanhmuc`, `NgayDang`) VALUES
(1, 'Public/images/TK.jpg', 'Truyện Kiều', 'Nguyễn Du', 2012, '4', '2021-11-03'),
(2, 'Public/images/DMPLK.jfif', 'Dế Mèn Phiêu Lưu Kí', 'Tô Hoài', 2016, '3', '2021-11-03'),
(3, 'Public/images/TD.jpeg', 'Tắt Đèn', 'Ngô Tất Tố', 2010, '2', '2021-11-08'),
(4, 'Public/images/CTGSS.jpg', 'Các Thế Giới Song Song', 'Quên Rồi mô Nựa', 2019, '5', '2021-11-07'),
(5, 'http://static.nhanam.com.vn/thumb/0x320/crop/Books/Images/2017/3/1/8KHZPG41.jpg', 'Nghệ Thuật Xứ An Nam', 'Quên Rồi mô Nựa', 2019, '2', '2021-11-07'),
(6, 'Public/images/NGLG.jpg', 'Nghĩ Giàu Làm Giàu', 'Quên Rồi mô Nựa', 2019, '1', '2021-11-07'),
(7, 'https://cdn.azfin.vn/KienThucDauTu/Sach-cha-giau-cha-ngheo-AzFin-Vietnam-800x800.jpg', 'Cha Giàu Cha Nghèo', 'Quên Rồi mô Nựa', 2019, '2', '2021-11-07'),
(8, 'https://salt.tikicdn.com/cache/400x400/ts/product/05/e7/b8/52d2e9afc19ca59fbf4f58b05a26f1f5.jpg.webp', 'Kinh Doanh Online', 'Quên Rồi mô Nựa', 2019, '1', '2021-11-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsach`
--
ALTER TABLE `chitietsach`
  ADD PRIMARY KEY (`IdChitietsach`);

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `tblchitietchuong`
--
ALTER TABLE `tblchitietchuong`
  ADD PRIMARY KEY (`idChitietchuong`);

--
-- Indexes for table `tblchuong`
--
ALTER TABLE `tblchuong`
  ADD PRIMARY KEY (`idChuong`);

--
-- Indexes for table `tbldanhgia`
--
ALTER TABLE `tbldanhgia`
  ADD PRIMARY KEY (`idDanhgia`);

--
-- Indexes for table `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  ADD PRIMARY KEY (`idDanhmuc`);

--
-- Indexes for table `tblsach`
--
ALTER TABLE `tblsach`
  ADD PRIMARY KEY (`idSach`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsach`
--
ALTER TABLE `chitietsach`
  MODIFY `IdChitietsach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `idMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblchitietchuong`
--
ALTER TABLE `tblchitietchuong`
  MODIFY `idChitietchuong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblchuong`
--
ALTER TABLE `tblchuong`
  MODIFY `idChuong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbldanhgia`
--
ALTER TABLE `tbldanhgia`
  MODIFY `idDanhgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  MODIFY `idDanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblsach`
--
ALTER TABLE `tblsach`
  MODIFY `idSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
