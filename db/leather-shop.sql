-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 01:10 PM
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
(1, '1', '1', 'admin', 'test add', '0123456789', 'e-mail@admin.com', 'admin', '2017-08-30 01:57:41'),
(2, 'staff', '2', 'staff', 'test staff', '0123456789', 'e-mail@staff.com', 'staff', '2018-01-25 04:13:06'),
(10, 'superadmin', 'superadmin', 'superadmin', 'superadmin add', '0222222222', '23superadmin@superadmin.com', 'superadmin', '2018-10-20 06:16:32');

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
(14, 'asdasdasd', 'asdsadasd', '0902020202', 'sdfsdfsad', 'asdasdasd', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'no', '2018-08-25 18:46:17'),
(15, 'ssss', 'ssss', '0902020202', 'sssss', 'sssss', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'yes', '2018-08-25 19:04:23'),
(16, 'kkkkkk', 'ffff 123', '0902020202', 'ffff', 'ffff', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'yes', '2018-08-26 03:28:10'),
(17, 'ddd', 'ddd', '3333333333', 'ddd', 'ddd', '23.noop@gmail.com', 'user', '3vravt2ad0rg6g0j4tmfbsll86', 'yes', '2018-08-26 10:18:29');

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
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `mem_id`, `name`, `address`, `email`, `phone`, `order_status`, `pay_slip`, `b_name`, `b_number`, `pay_date`, `pay_amount`, `postcode`, `order_date`) VALUES
(000006, 17, 'ddd', 'ddd', '23.noop@gmail.com', '3333333333', 2, '50476915920181020_143424.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-20', 9014.30, '', '2018-10-20 14:33:58'),
(000007, 17, 'ddd', 'ddd', '23.noop@gmail.com', '3333333333', 4, '', '', '', '0000-00-00', 0.00, '', '2018-10-20 14:52:58'),
(000008, 17, 'ddd', 'ddd', '23.noop@gmail.com', '3333333333', 1, '', '', '', '0000-00-00', 0.00, '', '2018-10-20 15:14:15');

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
(14, 8, 37, 'กระเป๋าสตางค์ Wallet Easy-S Black', 1, 1891.15);

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
(43, 15, 'หมวกกันน็อคหนัง Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 15900.43, 'ใบ', 'img1143426510720180828_220416.jpg', '', '', '', '', 11, 0, 's', 45, 32100.00, '2018-08-28 15:04:16'),
(44, 15, 'หมวกหนังวัวแท้ Quinn Hat Coffee ', '<p><strong>หมวกหนังวัวแท้ Quinn Hat Coffee size XXL</strong><br />\r\nหล่อ ปัง มีสไตล์ กันฝน ท้าลม สู้แดด แมนได้อีกกก !!<br />\r\nดีไซต์เนี๊ยบ เท่ ระดับไฮคลาส</p>\r\n\r\n<p><strong>หมวกหนังวัวแท้ Quinn Hat Coffee size XXL</strong><br />\r\nเหมาะกับคุณผู้ชาย ชอบสไตล์คันทรี ที่อบอุ่น มีความชิว<br />\r\nดูดีขั้นเทพ สะดุดตา จนสาวๆ ต้องหลงรัก<br />\r\nพรีเมี่ยมขนาดนี้ ถ้าพลาดคงเสียดายสุดๆ !!!!!!</p>\r\n\r\n<p>โปรโมชั่นภายในเดือนนี้เท่านั้น!!<br />\r\n<strong>หมวกหนังวัวแท้ Quinn Hat Coffee size XXL</strong><br />\r\n<strong>ราคาพิเศษ 2,690 บาท จากราคาปกติ 4,500 บาท</strong><br />\r\nส่งฟรีแบบด่วน&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 2690.00, 'ใบ', 'img173858041320180828_220557.jpg', 'img273858041320180828_220557.jpg', '', '', '', 6, 11, 's', 45, 0.00, '2018-08-28 15:05:57'),
(45, 16, 'กระเป๋าใส่พวงกุญแจหนัง Gaston Blue', '<p><strong>กระเป๋าใส่พวงกุญแจหนัง Gaston Blue</strong><br />\r\nทำจาหนังแท้เกรดพรีเมี่ยม<br />\r\nใส่กุญแจรถ กุญแจบ้าน กุญแจเซฟ หรือแล้วแต่ต้องการ</p>\r\n\r\n<p>โปรโมชั่น<br />\r\n<strong>กระเป๋าใส่พวงกุญแจหนัง Gaston Blue</strong><br />\r\n<strong>ราคาพิเศษ 1,590บาท&nbsp; จากปกติ 3,400 บาท</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1590.00, 'ชิ้น', 'img1187125003120180828_220729.jpg', 'img2187125003120180828_220729.jpg', '', '', '', 4, 3, 's', 45, 3500.00, '2018-08-28 15:07:29'),
(46, 16, 'สายกระเป๋าหนัง Strap', '<p><strong>สายกระเป๋าหนัง Strap</strong><br />\r\nสายกระเป๋าหนัง แข็งแรงสุด ๆ</p>\r\n', 450.00, 'ชิ้น', 'img1122020876020180828_220919.jpg', '', '', '', '', 6, 21, 's', 45, 0.00, '2018-08-28 15:09:19'),
(47, 14, 'รองเท้าหนังแท้ Chilling Loafer Brown', '<p><strong>รองเท้าหนังแท้ Chilling Loafer Brown&nbsp;size40</strong><br />\r\nรองเท้าหนังสุดเท่ มี 3 สี Classic, Brown, Gray พร้อมส่ง ไซส์ 40 &ndash; 47<br />\r\nรองเท้าลำลอง ใส่ทำงานก็ได้ ใส่เที่ยวก็ดูดี<br />\r\nของดี คุณภาพคุณผู้ชายต้องชอบแน่นอน การันตี!!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>รองเท้าหนังแท้ Chilling Loafer Brown&nbsp;size40</strong><br />\r\nดีไซน์ออกแบบมาเป็นพิเศษ หล่อ เท่ห์ ไม่ซ้ำใคร<br />\r\nทำจากหนังวัวแท้&nbsp;ใส่นิ่ม สบายเท้า<br />\r\nพื้นรองเท้าทำจากยางคุณภาพดีที่สุด<br />\r\nระบายอากาศได้เป็นอย่างดี<br />\r\nกันน้ำ กันลม กันฝุ่น กันแดด กันได้ทุกอย่าง สุดยอด !!</p>\r\n\r\n<p><strong>รองเท้าหนังแท้ Chilling Loafer Brown&nbsp;size40</strong><br />\r\nทางร้านจัดโปรโมชั่นเฉพาะ 40 ท่านแรกเท่านั้น!!<br />\r\n<strong>ราคาพิเศษเพียง 4,250 บาท จากราคาปกติ 6,500 บาท</strong><br />\r\nพิเศษยิ่งกว่านั้น ..เราแถม&nbsp;ส่งฟรี EMS ทุกชิ้น!!</p>\r\n', 4250.00, 'คู่', 'img11133146420180828_221240.jpg', 'img21133146420180828_221240.jpg', '', '', '', 8, 18, 's', 45, 6200.00, '2018-08-28 15:12:40'),
(40, 12, 'แจ็คเก็ตหนังPU สำหรับ Biker', '<p><strong>จ็คเก็ตหนังPU สำหรับ Biker</strong><br />\r\nทำจากหนังวัวผสม PU คุณภาพดี มีคุณสมบัติกันแดด กันฝน กันลม ดีเยี่ยม<br />\r\nเหมาะสำหรับ Biker</p>\r\n\r\n<p><strong>แจ็คเก็ตหนังPU สำหรับ Biker</strong><br />\r\nมี Size M L XL XXL XXXL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>โปรโมชั่นราคาพิเศษเพียง 5,490 บาท จากราคาปกติ 8,500บาท</strong><br />\r\nพิเศษยิ่งกว่านั้น ..เราแถม&nbsp;ส่งฟรี EMS ทุกชิ้น!!</p>\r\n', 5490.00, 'ตัว', 'img1137514345820180828_215842.jpg', 'img229173571320180828_214536.jpg', '', '', '', 0, 11, 's', 45, 0.00, '2018-08-28 14:45:36'),
(41, 13, 'เข็มขัดหนัง Smart Man แบบ1', '<p><strong>เข็มขัดหนัง Smart Man หัวเข็มขัดแบบ1</strong><br />\r\nหัวเข็มขัดถอดเปลี่ยนได้ !!!<br />\r\nหัวเข็มขัดแสตนเลสอย่างดี โครตเท่<br />\r\nเนื้อดี หนังวัวแท้ นุ่ม หนา ทนทาน ใช้ได้ยันลูกหลาน<br />\r\nของดี คุณภาพ หนา คุณผู้ชายต้องชอบแน่นอน การีนตี !!!<br />\r\nขนาดความยาว 120 cm กว้าง 3.80 cm</p>\r\n\r\n<p>ทางร้านจัดโปรโมชั่น ภายในเดือนนี้เท่านั้น !!!<br />\r\n<strong>เข็มขัดหนัง Smart Man หัวเข็มขัดแบบ1</strong><br />\r\n40 ท่านแรกเท่านั้น<br />\r\n<strong>ราคาพิเศษ 1,690 บาท !! จากราคาปกติ 3,500 บาท</strong><br />\r\nพิเศษยิ่งกว่านั้น ..เราแถม&nbsp;ส่งฟรี EMS ทุกชิ้น!!</p>\r\n', 1690.00, 'ชิ้น', 'img1118127783720180828_215716.jpg', 'img268731187420180828_215002.jpg', '', '', '', 1, 54, 's', 45, 0.00, '2018-08-28 14:50:02'),
(42, 14, 'รองเท้าบูท Cowboy Boots size44', '<p><strong>รองเท้าบูท Cowboy Boots size44</strong><br />\r\nทำจากหนังวัวแท้ ระดับพรีเมี่ยม<br />\r\nเท่ มีสไตลย์ จะลุย เที่ยว ทำงาน ปาร์ตี้ ก็ได้<br />\r\nกันน้ำ กันลม กันฝุ่น กันแดด<br />\r\nของดี คุณภาพคุณผู้ชายต้องชอบแน่นอน</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>รองเท้าบูท Cowboy Boots size44</strong><br />\r\nดีไซน์ออกแบบมาเป็นพิเศษ หล่อ เท่ห์ ไม่ซ้ำใคร<br />\r\nทำจากหนังวัวแท้&nbsp;ใส่นิ่ม สบายเท้า<br />\r\nพื้นรองเท้าทำจากยางคุณภาพดีที่สุด</p>\r\n\r\n<p><strong>รองเท้าบูท Cowboy Boots size44</strong><br />\r\nทางร้านจัดโปรโมชั่น<br />\r\n<strong>ราคาพิเศษเพียง 8,990 บาท จากราคาปกติ 13,500 บาท</strong><br />\r\nพิเศษยิ่งกว่านั้น ..เราแถม&nbsp;ส่งฟรี EMS ทุกชิ้น!!</p>\r\n', 8999.00, 'คู่', 'img156718228120180828_215622.jpg', 'img2110152471120180828_215228.jpg', '', '', '', 2, 11, 's', 45, 0.00, '2018-08-28 14:52:28'),
(37, 10, 'กระเป๋าสตางค์ Wallet Easy-S Black', '<p><strong>กระเป๋าสตางค์ Wallet Easy-S Black</strong>&nbsp;กระเป๋าหนังแท้<br />\r\nขนาดกำลังพอเหมาะ มีช่องใส่ธนบัตร ใส่สตางค์<br />\r\nสามารถคล้องกุญแจได้ เหมาะสำหรับพกพาไปทุกที่</p>\r\n\r\n<p><strong>กระเป๋าสตางค์ Wallet Easy-S Black</strong><br />\r\n<strong>โปรโมชั่น ราคาพิเศษ 1,690 บาท จากปกติ 1,990 บาท</strong><br />\r\nส่ง EMS ฟรี</p>\r\n', 1690.00, 'ใบ', 'img1112233121020180828_220133.jpg', 'img2201620226920180828_213944.jpg', '', '', '', 0, 11, 's', 45, 0.00, '2018-08-28 14:39:44'),
(38, 11, 'กระเป๋าเดินทาง หนังวัว Jarvoz Migana', '<p><strong>กระเป๋าเดินทาง หนังวัว Jarvoz Migana</strong><br />\r\nเหมาะสำหรับผู้ที่ชอบแบบง่ายๆ ถือก็ได้ สะพายเป็นเป้ก็ดี<br />\r\nรับรองว่า ติดใจ ทั้งคนใช้ และคนมอง<br />\r\nใครเห็นก็อยากได้ ใครใช้ก็ดูดี<br />\r\nกระเป๋า 2 in 1 เพราะมีช่องใส่ของหลายช่อง เลือกได้ตามใจชอบ<br />\r\nจุของได้เยอะ สะใจ หนังแท้ หนังหนา เคลือบแว๊กพิเศษ</p>\r\n\r\n<p><strong>กระเป๋าเดินทาง หนังวัว Jarvoz Migana</strong><br />\r\n<strong>จัดโปรโมชั่น ราคาพิเศษ 10,900 บาท จากปกติ 19,990 บาท</strong></p>\r\n', 10900.00, 'ใบ', 'img127119811920180828_215958.jpg', 'img2192568450420180828_214137.jpg', '', '', '', 1, 12, 's', 45, 0.00, '2018-08-28 14:41:37'),
(39, 11, 'กระเป๋าเป้ Rocket Bag', '<p><strong>กระเป๋าเป้ Rocket Bag</strong><br />\r\nตามเทรน Pokemon Go ด้วยกระเป๋าเป้หนังแท้<br />\r\n<strong>Genuine First Layer Cow Genuine First Layer Cow Leather</strong><br />\r\n<strong>รุ่น Rocket Bag</strong>&nbsp;เกรด พรีเมี่ยมมมม โอ้โหวววว สุดยอด<br />\r\nสำผัสนุ่ม น่าหลงไหล มีไว้รับรองคุ้มมมม<br />\r\nการรันดี หนังคุณภาพดี 100%<br />\r\nสี Chocolate คลาสสิคสุดๆ<br />\r\nน้ำหนัก 1.75 Kg เท่านั้น เหมาะสำหรับพกพา ไปตามล่า Pokemon<br />\r\nกันเลยคร้าบบบ !!!</p>\r\n\r\n<p>โปรโมชั่นภายในเดือนนี้เท่านั้น!!<br />\r\n<strong>กระเป๋า JARVOZ รุ่น Rocket Bag</strong>&nbsp;ราคาพิเศษ 18,900 บาท<br />\r\nพิเศษยิ่งกว่านั้น ..เราแถม&nbsp;ส่งฟรีแบบด่วนเฉพาะ 40 ท่านแรกเท่านั้นคร้าบบ</p>\r\n', 18900.00, 'ใบ', 'img1113102335920180828_215919.jpg', 'img2209658065920180828_214354.jpg', '', '', '', 0, 12, 's', 45, 0.00, '2018-08-28 14:43:54'),
(36, 10, 'กระเป๋าสตางค์ Long Wallet-Pumar', '<p><strong>กระเป๋าสตางค์ Long Wallet-Pumar&nbsp;</strong>กระเป๋าหนังวัวแท้ เกรดพรีเมี่ยม<br />\r\nขนาดกำลังพอเหมาะ มีช่องใส่ธนบัตร ใส่สตางค์ ใส่ IPhone บัตรต่างๆ</p>\r\n\r\n<p><strong>กระเป๋าสตางค์ Long Wallet-Pumar</strong><br />\r\nจัดโปรโมชั่นสมนาคุณลูกค้า<br />\r\n<strong>ราคาพิเศษ 2,190 บาท จากปกติ 4,290 บาท</strong><br />\r\nส่ง EMSฟรี</p>\r\n', 2190.00, 'ใบ', 'img13709343920180828_220207.jpg', 'img2144583376820180828_213658.jpg', '', '', '', 0, 32, 's', 45, 0.00, '2018-08-28 14:36:58'),
(34, 9, 'กระเป๋าคาดอก Crok Blaze สี Black', '<p><strong>กระเป๋าสะพาย Crok Blaze สี Black</strong>&nbsp;พิมพ์ลายจระเข้<br />\r\nหนังวัวแท้ 100 % ทนทาน ใช้ได้นาน คุ้มค่าที่สุด<br />\r\nกระเป๋าคุณภาพ แค่ถือก็ดูมีระดับแล้ว มีสเหน่ห์ต่อสาวๆ</p>\r\n\r\n<p><strong>ราคาพิเศษ 3,690 บาท เท่านั้น!! จากราคาปกติ 6,900 บาท</strong><br />\r\nพิเศษยิ่งกว่านั้น ..เราแถม&nbsp;ส่งฟรี EMS&nbsp;ทุกชิ้น!!</p>\r\n', 3690.00, 'ใบ', 'img1166759347620180828_213349.jpg', 'img2166759347620180828_213349.jpg', '', '', '', 1, 42, 's', 45, 0.00, '2018-08-28 14:33:49'),
(35, 9, 'กระเป๋าคาดอก Neo สี coffee', '<p><strong>กระเป๋าคาดอก Neo สี coffee</strong><br />\r\nฮิตมาก ใส่แล้วหล่อเท่ขั้นเทพ หนังวัวแท้ แบรนด์ดัง Jarvoz<br />\r\nดีไซน์เรียบง่าย ซิปหน้า เหมาะมากใช้งานได้ทุกกิจกรรม เท่โคตร<br />\r\n<strong>กระเป๋า คาดอด หนังวัวแท้ รุ่น Neo Bag</strong><br />\r\nใส่ของได้จุใจ ขนาดพกพาสะดวก พร้อมซิปหน้า เก๋ๆ<br />\r\nสินค้าพรีเมียม ช้าหมดอดนะครับ ต้องรีบจองแล้ว ห้ามพลาด</p>\r\n\r\n<p>ทางร้านจัดโปรโมชั่นSale ภายในเดือนนี้เท่านั้น!!<br />\r\n<strong>กระเป๋า คาดอด หนังวัวแท้ รุ่น Neo Bag</strong><br />\r\n<strong>ราคาพิเศษ 3,890 บาท เท่านั้น!! จากราคาปกติ 7,900 บาท</strong><br />\r\nพิเศษยิ่งกว่านั้น ..30 ท่านแรก&nbsp;ส่งฟรีแบบด่วน<br />\r\nโอนก่อนเที่ยง ส่งของวันนั้นทันที !!!</p>\r\n', 3990.00, 'ใบ', 'img1107498210920180828_213526.jpg', 'img2107498210920180828_213526.jpg', '', '', '', 0, 21, 's', 45, 0.00, '2018-08-28 14:35:26'),
(33, 8, 'กระเป๋าหนังสะพายข้าง สี Oil Chocolate', '<p><strong>กระเป๋าหนัง รุ่น Jarvoz-M สี Oil Chocolate</strong><br />\r\nเท่!! กระเป๋าหนังแท้อย่างดี กับโปรโมชั่นพิเศษ!!<br />\r\nแค่กระเป๋าJarvoz 1 ใบ ก็ช่วยให้คุณดูหล่อขึ้นได้ทันตา<br />\r\n<strong>กระเป๋าหนัง รุ่น Jarvoz-M สี Oil Chocolate</strong>&nbsp;เซอร์ เก๋า เท่ห์<br />\r\nถ้าได้ลองใช้แล้วคุณจะโครตฟิน!! โครตแนะนำๆๆๆ!!<br />\r\nทำจากหนังวัวแท้ คุณภาพ ทนทาน คุ้มค่า ใช้ได้นาน<br />\r\nขนาดกำลังดี ดีไซด์แบนเรียบ ถือไปเรียน/ทำงาน โครตเท่ห์<br />\r\nมีสายหนัง สะพายไหล่ได้ด้วย เซอร์ๆ เท่ห์ไปอีก<br />\r\nมีซิปด้านล่าง ขยายขนาดได้ ใส่ของได้สารพัดประโยชน์<br />\r\nใส่สมุด หนังสือ ไอแพด แฟ้ม ได้สบายมาก จุได้เยอะ<br />\r\n* กระเป๋าคุณภาพ แค่ถือก็ดูมีระดับแล้ว<br />\r\nมีสเหน่ห์ต่อสาวๆ อย่างไม่ต้องตกใจ<br />\r\nสัมผัสนุ่ม ผ้าหนังอย่างดี คุณภาพดี ทนทาน ไม่เลอะง่าย<br />\r\nสี Oil Chocolate คลาสสิค เท่ห์ในตัวมันเอง<br />\r\nเทคนิคการผลิตแบบ Melt-blown เย็บแน่น ทนทาน ใช้ได้นาน<br />\r\nสุดยอด ขายดี สินค้ามีจำนวนจำกัดครับ !!</p>\r\n', 2990.00, 'ใบ', 'img1148095548220180828_212540.jpg', 'img2148095548220180828_212540.jpg', '', '', '', 0, 22, 's', 45, 0.00, '2018-08-28 14:25:40'),
(32, 8, 'กระเป๋าสะพาย Brown Jarvoz-A', '<p><strong>กระเป๋าสะพาย สี Brown รุ่น Jarvoz-A</strong><br />\r\nหนังวัวแท้ 100 % ทนทาน ใช้ได้นาน คุ้มค่าที่สุด<br />\r\nกระเป๋าคุณภาพ แค่ถือก็ดูมีระดับแล้ว มีสเหน่ห์ต่อสาวๆ<br />\r\nมี 3 สี Dark Coffee, Brown, Red Coffee<br />\r\n<strong>ราคาพิเศษ 2,890 บาท เท่านั้น!! (ราคาปกติ 4,900 บาท)</strong><br />\r\nพิเศษยิ่งกว่านั้น ..เราแถม&nbsp;ส่งฟรี EMS&nbsp;ทุกชิ้น!!<br />\r\nโอนก่อนเที่ยง ส่งของวันนั้นทันที !!!<br />\r\n** &nbsp;สินค้า Sale มีจำนวนจำกัด ของหมดไวมาก รีบจองนะครับ</p>\r\n', 2890.00, 'ใบ', 'img131334681320180828_211705.jpg', 'img231334681320180828_211705.jpg', '', '', '', 1, 12, 's', 45, 0.00, '2018-08-28 14:17:05');

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
(8, 'PE', 'กระเป๋าหนังสะพายข้าง'),
(9, 'KE', 'กระเป๋าหนังคาดอก-คาดเอว'),
(10, 'WE', 'กระเป๋าสตางค์-Wallet'),
(11, 'LE', 'กระเป๋าเดินทาง'),
(12, 'JE', 'เสื้อแจ็คเก็ตหนัง'),
(13, 'BE', 'เข็มขัดหนังแท้'),
(14, 'HE', 'รองเท้าหนังแท้'),
(15, 'HE', 'หมวกหนังวัวแท้'),
(16, 'SE', 'แอคแซสซอรี่');

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
  MODIFY `order_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
