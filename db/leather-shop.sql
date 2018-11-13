-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 03:39 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leather-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_tel` varchar(10) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_name`, `admin_address`, `admin_tel`, `admin_email`, `status`, `date_save`) VALUES
(1, '1', '1', 'ผู้ดูแลระบบ', 'test add', '0123456789', 'e-mail@admin.com', 'admin', '2017-08-30 01:57:41'),
(2, '2', '2', 'พนักงาน', 'test staff', '0123456789', 'e-mail@staff.com', 'staff', '2018-01-25 04:13:06'),
(10, '3', '3', 'ผู้บริหาร', 'test staff', '0222222222', '23superadmin@superadmin.com', 'superadmin', '2018-10-20 06:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `b_id` int(11) NOT NULL,
  `b_number` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_type` varchar(50) NOT NULL,
  `b_owner` varchar(50) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  `b_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`b_id`, `b_number`, `b_name`, `b_type`, `b_owner`, `bn_name`, `b_logo`) VALUES
(2, '365-3032132-3212', 'กรุงไทย', 'ออมทรัพ', 'สมชาย ใจดี', 'พระสมุทรเจดีย์', 'imgb87159464020180819_000254.jpg'),
(3, '543-1534-54634-212', 'กสิกรไทย', 'ออมทรัพย์', 'มงคล ศรีสุข', 'พระสมุทรเจดีย์', 'imgb197504342620180818_223441.png'),
(4, '445-354-3232-212', 'ไทยพาณิชย์', 'ออมทรัพย์', 'สมบูรณ์ มั่งมี', 'พระสมุทรเจดีย์', 'imgb133828463220180818_223607.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `log_id` int(10) NOT NULL,
  `log_user` varchar(50) NOT NULL,
  `log_login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `mem_id` int(11) NOT NULL,
  `mem_name` varchar(50) NOT NULL,
  `mem_address` varchar(255) NOT NULL,
  `mem_tel` varchar(10) NOT NULL,
  `mem_username` varchar(20) NOT NULL,
  `mem_password` varchar(20) NOT NULL,
  `mem_email` varchar(20) NOT NULL,
  `status` varchar(5) NOT NULL,
  `sid` varchar(32) NOT NULL,
  `active` varchar(3) NOT NULL,
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`mem_id`, `mem_name`, `mem_address`, `mem_tel`, `mem_username`, `mem_password`, `mem_email`, `status`, `sid`, `active`, `dateinsert`) VALUES
(14, 'เบญจรงคกุล', '256/344 หมู่ 4 ถนนรามคำแหง ตำบลคลองกุ่ม อำเภอบึงกุ่ม กรุงเทพมหานคร 12400', '0902020202', 'ben', '123456789', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'no', '2018-08-25 18:46:17'),
(15, 'วงศ์กุศลกิจ', ' ถ.เพชรบุรีตัดใหม่ แขวงมักกะสัน เขตราชเทวี กรุงเทพฯ 10400', '0902020202', 'vo', '123456789', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'yes', '2018-08-25 19:04:23'),
(16, 'มหากิจศิริ', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว  แขวงคลองจั่น เขตบางกะปิ  กรุงเทพมหานคร  10240', '0902020202', 'maha', '123456789', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'yes', '2018-08-26 03:28:10'),
(17, 'มาลี', 'บ้านสังแก  ตำบลสะเดา  อำเภอบัวเชด  จังหวัดสุรินทร์  32230', '0915678456', 'ma', '123456789', '23.noop@gmail.com', 'user', '3vravt2ad0rg6g0j4tmfbsll86', 'yes', '2018-08-26 10:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `mem_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `order_status` int(1) NOT NULL,
  `pay_slip` varchar(200) DEFAULT NULL,
  `b_name` varchar(100) DEFAULT NULL,
  `b_number` varchar(200) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `pay_amount` float(10,2) DEFAULT NULL,
  `postcode` varchar(30) DEFAULT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `mem_id`, `name`, `address`, `email`, `phone`, `order_status`, `pay_slip`, `b_name`, `b_number`, `pay_date`, `pay_amount`, `postcode`, `order_date`) VALUES
(000006, 17, 'ddd', 'ddd', '23.noop@gmail.com', '3333333333', 3, '50476915920181020_143424.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-20', 9014.30, 'TH1235455556', '2018-10-20'),
(000007, 17, 'ddd', 'ddd', '23.noop@gmail.com', '3333333333', 4, '', '', '', '0000-00-00', 0.00, '', '2018-10-20'),
(000008, 17, 'ddd', 'ddd', '23.noop@gmail.com', '3333333333', 4, '', '', '', '0000-00-00', 0.00, '', '2018-10-20'),
(000009, 16, 'kkkkkk', 'ffff 123', '23.noop@gmail.com', '0902020202', 2, '51058952720181111_101815.jpg', 'ไทยพาณิชย์', '445-354-3232-212', '2018-11-11', 1782.15, '', '2018-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `d_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) DEFAULT NULL,
  `p_c_qty` int(11) NOT NULL,
  `total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`d_id`, `order_id`, `p_id`, `p_name`, `p_c_qty`, `total`) VALUES
(11, 6, 44, 'หมวกหนังวัวแท้ Quinn Hat Coffee ', 1, 2981.15),
(12, 6, 40, 'แจ็คเก็ตหนังPU สำหรับ Biker', 1, 6033.15),
(13, 7, 47, 'รองเท้าหนังแท้ Chilling Loafer Brown', 1, 4681.55),
(14, 8, 37, 'กระเป๋าสตางค์ Wallet Easy-S Black', 1, 1891.15),
(15, 9, 45, 'กระเป๋าใส่พวงกุญแจหนัง Gaston Blue', 1, 1782.15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detial` text NOT NULL,
  `p_price` float(10,2) NOT NULL,
  `p_unit` varchar(20) NOT NULL,
  `p_img1` varchar(200) NOT NULL,
  `p_img2` varchar(100) DEFAULT NULL,
  `p_img3` varchar(200) NOT NULL,
  `p_img4` varchar(200) NOT NULL,
  `p_img5` varchar(200) NOT NULL,
  `p_view` int(11) NOT NULL,
  `p_qty` int(11) DEFAULT NULL,
  `p_size` varchar(50) NOT NULL,
  `p_ems` int(50) NOT NULL,
  `promo` float(10,2) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `t_id`, `p_name`, `p_detial`, `p_price`, `p_unit`, `p_img1`, `p_img2`, `p_img3`, `p_img4`, `p_img5`, `p_view`, `p_qty`, `p_size`, `p_ems`, `promo`, `date_save`) VALUES
(82, 13, 'เข็มขัดหนัง LBE04', '<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>ทนทาน ใช้งานได้นาน</p>\r\n\r\n<p>ตัวล็อคแน่นหนา ไม่หลุดง่าย</p>\r\n\r\n<p>ขนาดยาวพอเหมาะ<br />\r\n&nbsp;</p>\r\n', 1400.00, 'ชิ้น', 'img148022928620181111_165430.jpg', 'img248022928620181111_165430.jpg', '', '', '', 0, 5, '0', 50, 0.00, '2018-11-11 09:54:30'),
(83, 13, 'เข็มขัดหนัง LBE05', '<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>ทนทาน ใช้งานได้นาน</p>\r\n\r\n<p>ตัวล็อคแน่นหนา ไม่หลุดง่าย</p>\r\n\r\n<p>ขนาดยาวพอเหมาะ<br />\r\n&nbsp;</p>\r\n', 1400.00, 'ชิ้น', 'img1184492184620181111_165516.jpg', 'img2184492184620181111_165516.jpg', '', '', '', 0, 6, '0', 50, 0.00, '2018-11-11 09:55:16'),
(84, 13, 'เข็มขัดหนัง LBE06', '<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>ทนทาน ใช้งานได้นาน</p>\r\n\r\n<p>ตัวล็อคแน่นหนา ไม่หลุดง่าย</p>\r\n\r\n<p>ขนาดยาวพอเหมาะ<br />\r\n&nbsp;</p>\r\n', 1400.00, 'ชิ้น', 'img173474011320181111_165611.jpg', 'img273474011320181111_165611.jpg', '', '', '', 0, 4, '0', 50, 0.00, '2018-11-11 09:56:11'),
(78, 10, 'กระเป๋าสตางค์ LBAW04', '<p>กระเป๋าสตางค์ เป็นงาน Handmade</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>กระเป๋าเป็นทรงแนวตั้ง</p>\r\n\r\n<p>สามารถใส่ การ์ด นามบัตร บัตรต่าง ๆ ได้</p>\r\n', 1500.00, 'ใบ', 'img1108101225620181111_163948.jpg', 'img2108101225620181111_163948.jpg', '', '', '', 0, 5, '0', 50, 0.00, '2018-11-11 09:39:48'),
(79, 13, 'เข็มขัดหนัง LBE01', '<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>ทนทาน ใช้งานได้นาน</p>\r\n\r\n<p>ตัวล็อคแน่นหนา ไม่หลุดง่าย</p>\r\n\r\n<p>ขนาดยาวพอเหมาะ<br />\r\n&nbsp;</p>\r\n', 1500.00, 'ชิ้น', 'img1152428098520181111_165052.jpg', 'img2152428098520181111_165052.jpg', '', '', '', 0, 5, '0', 50, 0.00, '2018-11-11 09:50:52'),
(80, 13, 'เข็มขัดหนัง LBE02', '<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>ทนทาน ใช้งานได้นาน</p>\r\n\r\n<p>ตัวล็อคแน่นหนา ไม่หลุดง่าย</p>\r\n\r\n<p>ขนาดยาวพอเหมาะ<br />\r\n&nbsp;</p>\r\n', 1500.00, 'ชิ้น', 'img1153714357220181111_165203.jpg', 'img2153714357220181111_165203.jpg', '', '', '', 0, 4, '0', 50, 0.00, '2018-11-11 09:52:03'),
(81, 13, 'เข็มขัดหนัง LBE03', '<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>ทนทาน ใช้งานได้นาน</p>\r\n\r\n<p>ตัวล็อคแน่นหนา ไม่หลุดง่าย</p>\r\n\r\n<p>ขนาดยาวพอเหมาะ<br />\r\n&nbsp;</p>\r\n', 1500.00, 'ชิ้น', 'img119277948120181111_165317.jpg', 'img219277948120181111_165317.jpg', '', '', '', 0, 5, '0', 50, 0.00, '2018-11-11 09:53:17'),
(76, 10, 'กระเป๋าสตางค์ LBAW02', '<p>กระเป๋าสตางค์ เป็นงาน Handmade</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>กระเป๋าเป็นทรงแนวนอน</p>\r\n\r\n<p>สามารถใส่ การ์ด นามบัตร บัตรต่าง ๆ ได้</p>\r\n', 1500.00, 'ใบ', 'img139867733220181111_163201.jpg', 'img239867733220181111_163201.jpg', '', '', '', 2, 6, '0', 50, 0.00, '2018-11-11 09:32:01'),
(77, 10, 'กระเป๋าสตางค์ LBAW03', '<p>กระเป๋าสตางค์ เป็นงาน Handmade</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้</p>\r\n\r\n<p>กระเป๋าเป็นทรงแนวนอน</p>\r\n\r\n<p>สามารถใส่ การ์ด นามบัตร บัตรต่าง ๆ ได้</p>\r\n', 1500.00, 'ใบ', 'img1191191296620181111_163609.jpg', 'img2191191296620181111_163609.jpg', '', '', '', 1, 6, '0', 50, 0.00, '2018-11-11 09:36:09'),
(73, 14, 'รองเท้าหนัง LSW02 ไซส์ 42', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'คู่', 'img197919774120181111_162028.jpg', 'img297919774120181111_162028.jpg', 'img397919774120181111_162028.jpg', 'img497919774120181111_162028.jpg', '', 0, 6, '42', 50, 0.00, '2018-11-11 09:20:28'),
(74, 14, 'รองเท้าหนังLSW03 ไซส์ 41', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'คู่', 'img18022966520181111_162154.jpg', 'img28022966520181111_162154.jpg', 'img38022966520181111_162154.jpg', 'img48022966520181111_162154.jpg', '', 0, 5, '41', 50, 0.00, '2018-11-11 09:21:54'),
(75, 14, 'รองเท้าหนัง LSW04 ไซส์ 42', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'ชิ้น', 'img1208176296620181111_162343.jpg', 'img2208176296620181111_162343.jpg', 'img3208176296620181111_162343.jpg', 'img4208176296620181111_162343.jpg', '', 0, 6, '42', 50, 0.00, '2018-11-11 09:23:43'),
(71, 14, 'รองเท้าหนัง LSSO08 ไซส์ 39', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'คู่', 'img193340183520181111_161718.jpg', 'img293340183520181111_161718.jpg', 'img393340183520181111_161718.jpg', 'img493340183520181111_161718.jpg', '', 0, 6, '39', 50, 0.00, '2018-11-11 09:17:18'),
(72, 14, 'รองเท้าหนัง LSW01 ไซส์ 40', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'คู่', 'img1128175334120181111_161847.jpg', 'img2128175334120181111_161847.jpg', 'img3128175334120181111_161847.jpg', 'img4128175334120181111_161847.jpg', '', 0, 6, '40', 50, 0.00, '2018-11-11 09:18:47'),
(69, 14, 'รองเท้าหนัง LSSO06 ไซส์ 41', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2500.00, 'คู่', 'img129136629120181111_160843.jpg', 'img229136629120181111_160843.jpg', 'img329136629120181111_160843.jpg', 'img429136629120181111_160843.jpg', '', 1, 6, '41', 50, 0.00, '2018-11-11 09:08:43'),
(70, 14, 'รองเท้าหนัง LSSO07 ไซส์ 38', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'คู่', 'img117100580620181111_161330.jpg', 'img217100580620181111_161330.jpg', 'img317100580620181111_161330.jpg', 'img417100580620181111_161330.jpg', '', 1, 8, '38', 50, 0.00, '2018-11-11 09:13:30'),
(67, 14, 'รองเท้าหนัง LSSO04 ไซส์ 40', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2500.00, 'คู่', 'img1157581415720181111_155734.jpg', 'img2157581415720181111_155734.jpg', 'img3157581415720181111_155734.jpg', 'img4157581415720181111_155734.jpg', '', 0, 7, '40', 50, 0.00, '2018-11-11 08:57:34'),
(68, 14, 'รองเท้าหนัง LSSO05 ไซส์ 37', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'คู่', 'img151365872820181111_160100.jpg', 'img251365872820181111_160100.jpg', 'img351365872820181111_160100.jpg', 'img451365872820181111_160100.jpg', '', 0, 7, '37', 50, 0.00, '2018-11-11 09:01:00'),
(64, 14, 'รองเท้าหนัง LSSO01 ไซส์ 44', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ตกแต่งด้วยตะเข็บกลางรองเท้า<br />\r\nผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'คู่', 'img1111777089920181111_154717.jpg', 'img2111777089920181111_154717.jpg', 'img3111777089920181111_154717.jpg', 'img4111777089920181111_154717.jpg', '', 0, 6, '44', 50, 0.00, '2018-11-11 08:47:17'),
(65, 14, 'รองเท้าหนัง LSSO02 ไซส์ 34', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2500.00, 'คู่', 'img1102694049820181111_155205.jpg', 'img2102694049820181111_155205.jpg', 'img3102694049820181111_155205.jpg', 'img4102694049820181111_155205.jpg', '', 0, 6, '34', 50, 0.00, '2018-11-11 08:52:05'),
(66, 14, 'รองเท้าหนัง LSSO03 ไซส์ 36', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2400.00, 'คู่', 'img176511124620181111_155426.jpg', 'img276511124620181111_155426.jpg', 'img376511124620181111_155426.jpg', 'img476511124620181111_155426.jpg', '', 0, 6, '36', 50, 0.00, '2018-11-11 08:54:26'),
(63, 14, 'รองเท้าหนัง LSSK02 ไซส์ 40', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป<br />\r\nผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2500.00, 'คู่', 'img189084204820181111_154216.jpg', 'img289084204820181111_154216.jpg', 'img389084204820181111_154216.jpg', 'img489084204820181111_154216.jpg', '', 1, 5, '35', 50, 0.00, '2018-11-11 08:42:16'),
(61, 14, 'รองเท้าหนัง LSR09 ไซส์ 36', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2400.00, 'ชิ้น', 'img1150999665520181111_153331.jpg', 'img2150999665520181111_153331.jpg', 'img3150999665520181111_153331.jpg', 'img4150999665520181111_153331.jpg', '', 1, 6, '36', 50, 0.00, '2018-11-11 08:33:31'),
(62, 14, 'รองเท้าหนัง LSSK01 ไซส์ 35', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2500.00, 'คู่', 'img110121828520181111_153940.jpg', 'img210121828520181111_153940.jpg', 'img310121828520181111_153940.jpg', 'img410121828520181111_153940.jpg', '', 2, 7, '35', 50, 0.00, '2018-11-11 08:39:40'),
(58, 14, 'รองเท้าหนัง LSR06 ไซส์ 43', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2500.00, 'คู่', 'img1186089341220181111_151153.jpg', 'img2186089341220181111_151153.jpg', 'img3186089341220181111_151153.jpg', 'img4186089341220181111_151153.jpg', '', 0, 6, '43', 50, 0.00, '2018-11-11 08:11:53'),
(59, 14, 'รองเท้าหนัง LSR07 ไซส์ 41', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2500.00, 'คู่', 'img1131666085320181111_152457.jpg', 'img2131666085320181111_152457.jpg', 'img3131666085320181111_152457.jpg', 'img4131666085320181111_152457.jpg', '', 0, 4, '41', 50, 0.00, '2018-11-11 08:24:57'),
(60, 14, 'รองเท้าหนัง LSR08 ไซส์ 43', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2500.00, 'คู่', 'img1124005921520181111_152921.jpg', 'img2124005921520181111_152921.jpg', 'img3124005921520181111_152921.jpg', 'img4124005921520181111_152921.jpg', '', 1, 5, '43', 50, 0.00, '2018-11-11 08:29:21'),
(56, 14, 'รองเท้าหนัง LSR04 ไซส์ 40', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ตกแต่งด้วยตะเข็บกลางรองเท้า</p>\r\n\r\n<p>รองเท้าเป็นแบบหุ้มข้อ</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2500.00, 'คู่', 'img1192450910120181111_145209.jpg', 'img2192450910120181111_145209.jpg', 'img3192450910120181111_145209.jpg', 'img4192450910120181111_145209.jpg', '', 0, 4, '40', 50, 0.00, '2018-11-11 07:52:09'),
(57, 14, 'รองเท้าหนัง LSR05 ไซส์ 41', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ตกแต่งด้วยตะเข็บกลางรองเท้า</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2500.00, 'คู่', 'img1163547283320181111_150905.jpg', 'img2163547283320181111_150905.jpg', 'img3163547283320181111_150905.jpg', 'img4163547283320181111_150905.jpg', '', 0, 5, '41', 50, 0.00, '2018-11-11 08:09:05'),
(53, 14, 'รองเท้าหนัง LSR01 ไซส์ 40', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ตกแต่งด้วยตะเข็บกลางรองเท้า</p>\r\n\r\n<p>รองเท้าเป็นแบบหุ้มข้อ</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย</p>\r\n', 2500.00, 'คู่', 'img175790772020181111_141949.jpg', 'img275790772020181111_141949.jpg', 'img375790772020181111_141949.jpg', 'img475790772020181111_141949.jpg', '', 1, 7, '40', 50, 0.00, '2018-11-11 07:19:49'),
(55, 14, 'รองเท้าหนัง LSR03 ไซส์ 42', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>รองเท้าเป็นแบบหุ้มข้อ</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2500.00, 'คู่', 'img197755449320181111_144628.jpg', 'img297755449320181111_144628.jpg', 'img397755449320181111_144628.jpg', 'img497755449320181111_144628.jpg', '', 0, 6, '42', 50, 0.00, '2018-11-11 07:46:28'),
(54, 14, 'รองเท้าหนัง LSR02 ไซส์ 43', '<p>ตัวรองเท้าเป็นงาน Handmade</p>\r\n\r\n<p>น้ำหนักกำลังดีไม่หนัก ไม่เบาเกินไป</p>\r\n\r\n<p>ตกแต่งด้วยตะเข็บกลางรองเท้า</p>\r\n\r\n<p>รองเท้าเป็นแบบหุ้มข้อ</p>\r\n\r\n<p>ผลิตจากหนังวัวแท้ 100%</p>\r\n\r\n<p>สวมใส่สบาย<br />\r\n&nbsp;</p>\r\n', 2400.00, 'คู่', 'img1119883132320181111_142759.jpg', 'img2119883132320181111_142759.jpg', 'img3119883132320181111_142759.jpg', 'img4119883132320181111_142759.jpg', '', 0, 5, '43', 50, 0.00, '2018-11-11 07:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `t_id` int(11) NOT NULL,
  `t_type` varchar(11) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`t_id`, `t_type`, `t_name`) VALUES
(10, 'WE', 'กระเป๋าสตางค์'),
(13, 'BE', 'เข็มขัดหนังแท้'),
(14, 'HE', 'รองเท้าหนังแท้');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
