-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-06-26 05:28:27
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wlgl`
--

-- --------------------------------------------------------

--
-- 表的结构 `information_client`
--

CREATE TABLE `information_client` (
  `Client_Count` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Client_Password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Client_Tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Client_Remarks` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `information_client`
--

INSERT INTO `information_client` (`Client_Count`, `Client_Password`, `Client_Tel`, `Client_Remarks`) VALUES
('101', '1102', '16443', '用户'),
('root', '123456', '23', '管理员'),
('wen', '123456', '123789', '用户'),
('whw', 'whw', '13689787333', '用户');

-- --------------------------------------------------------

--
-- 表的结构 `information_dingdanbiao`
--

CREATE TABLE `information_dingdanbiao` (
  `jjren` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `JiJianRen_Addr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `JiJianRen_Tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ShouJianRen` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ShouJianRen_Tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ShouJianRen_Addr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Heavy` int(10) NOT NULL,
  `JiJianRen_Beizhu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DingDanBianha` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `information_dingdanbiao`
--

INSERT INTO `information_dingdanbiao` (`jjren`, `JiJianRen_Addr`, `JiJianRen_Tel`, `ShouJianRen`, `ShouJianRen_Tel`, `ShouJianRen_Addr`, `Heavy`, `JiJianRen_Beizhu`, `DingDanBianha`) VALUES
('123', '城市学院', '13660089232', 'wangxiao ', '123456789011', '3453', 10, '4234', 2),
('wen', '1', '23', 'he', '23', '126', 1, '23', 3),
('hlj', 'zxcv', '1234455', 'ab', '344555', 'popo', 1, '', 8),
('hlj', 'zxcv', '1234455', 'ab', '344555', 'popo', 1, '', 8);

-- --------------------------------------------------------

--
-- 表的结构 `information_distribution`
--

CREATE TABLE `information_distribution` (
  `Distribution_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WayBill_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Emploee_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Push_Time` datetime NOT NULL,
  `Get_Time` datetime NOT NULL,
  `Warehouse_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `information_employee`
--

CREATE TABLE `information_employee` (
  `Information_Employee_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Information_Employee_Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Information_Employee_Tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nformation_Employee_Pos` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nformation_Employee_Sex` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nformation_Employee_ID` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `information_employee`
--

INSERT INTO `information_employee` (`Information_Employee_No`, `Information_Employee_Name`, `Information_Employee_Tel`, `nformation_Employee_Pos`, `nformation_Employee_Sex`, `nformation_Employee_ID`) VALUES
('', '吴广德', '024420024440', '广东省霞山淘宝村120号', '男', '33088199112074437'),
('003', '吴好提', '0000000000', '北京市东坡村莲蓬街90号', '女', '010773099872847628'),
('1', 'q32326', '337', '48', '59', '50');

-- --------------------------------------------------------

--
-- 表的结构 `information_evaluate`
--

CREATE TABLE `information_evaluate` (
  `Evaluate_Speed` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Evaluate_Grade` int(11) NOT NULL,
  `Evaluate_Remaks` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `information_evaluate`
--

INSERT INTO `information_evaluate` (`Evaluate_Speed`, `Evaluate_Grade`, `Evaluate_Remaks`) VALUES
('', 1, ''),
('', 1, 'dd'),
('一般', 1, 'ssss'),
('非常满意', 1, 'ssss'),
('非常满意', 1, 'ssss'),
('一般', 1, 'wadalsdalsm'),
('非常满意', 1, 'aaaa'),
('非常满意', 1, ''),
('非常满意', 1, ''),
('非常满意', 1, 'aaXzxz'),
('非常满意', 1, 'a'),
('非常满意', 1, ''),
('一般', 1, 'x'),
('非常满意', 1, ''),
('一般', 1, ''),
('非常满意', 1, 'a'),
('非常满意', 1, 's'),
('非常满意', 1, ''),
('非常满意', 1, ''),
('非常满意', 1, ''),
('非常满意', 1, ''),
('非常满意', 1, ''),
('非常满意', 1, ''),
('非常满意', 1, ''),
('非常满意', 1, 'wwwww'),
('非常满意', 10, '666666666666666666666'),
('非常满意', 7, '66666666666');

-- --------------------------------------------------------

--
-- 表的结构 `information_receiver`
--

CREATE TABLE `information_receiver` (
  `Receiver_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Receiver_Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Receiver_Tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Receiver_Add` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `information_transfer`
--

CREATE TABLE `information_transfer` (
  `Transfer_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WeiZhi&DiDian` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RuKuShijian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `information_transfer`
--

INSERT INTO `information_transfer` (`Transfer_No`, `WeiZhi&DiDian`, `RuKuShijian`) VALUES
('2', '福建泉州', '2017-06-14 00:00:00'),
('3', '山西省李白县宝哥村78号', '2017-06-21 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `information_warehouse`
--

CREATE TABLE `information_warehouse` (
  `Warehouse_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Push_Time` datetime NOT NULL,
  `Pop_Time` datetime NOT NULL,
  `Warehouse_Add` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `information_warehouse`
--

INSERT INTO `information_warehouse` (`Warehouse_No`, `Push_Time`, `Pop_Time`, `Warehouse_Add`) VALUES
('', '2017-06-08 00:00:00', '2017-06-09 00:00:00', '新疆卡马尔里头村40号'),
('7', '2017-06-29 00:00:00', '2017-06-30 00:00:00', ' 哈萨克斯坦硅谷888号');

-- --------------------------------------------------------

--
-- 表的结构 `information_waybill`
--

CREATE TABLE `information_waybill` (
  `WayBill_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cargo_Weight` int(11) NOT NULL,
  `Cargo_Fee` int(11) NOT NULL,
  `Cargo_State` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cargo_Sender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cargo_Receiver` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cargo_Pushtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information_client`
--
ALTER TABLE `information_client`
  ADD PRIMARY KEY (`Client_Count`);

--
-- Indexes for table `information_dingdanbiao`
--
ALTER TABLE `information_dingdanbiao`
  ADD PRIMARY KEY (`DingDanBianha`);

--
-- Indexes for table `information_distribution`
--
ALTER TABLE `information_distribution`
  ADD PRIMARY KEY (`Distribution_No`);

--
-- Indexes for table `information_employee`
--
ALTER TABLE `information_employee`
  ADD PRIMARY KEY (`Information_Employee_No`);

--
-- Indexes for table `information_receiver`
--
ALTER TABLE `information_receiver`
  ADD PRIMARY KEY (`Receiver_No`);

--
-- Indexes for table `information_transfer`
--
ALTER TABLE `information_transfer`
  ADD PRIMARY KEY (`Transfer_No`);

--
-- Indexes for table `information_warehouse`
--
ALTER TABLE `information_warehouse`
  ADD PRIMARY KEY (`Warehouse_No`);

--
-- Indexes for table `information_waybill`
--
ALTER TABLE `information_waybill`
  ADD PRIMARY KEY (`WayBill_No`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `information_dingdanbiao`
--
ALTER TABLE `information_dingdanbiao`
  MODIFY `DingDanBianha` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
