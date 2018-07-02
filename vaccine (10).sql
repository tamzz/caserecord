-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017 年 12 月 08 日 17:54
-- 伺服器版本: 5.7.18-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `vaccine`
--

-- --------------------------------------------------------

--
-- 資料表結構 `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `patientNo` varchar(100) NOT NULL,
  `patienthkid` varchar(100) NOT NULL,
  `patientnamec` varchar(100) NOT NULL,
  `patientnamee` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `countrycode` varchar(11) DEFAULT NULL,
  `contactno` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `patients`
--

INSERT INTO `patients` (`id`, `patientNo`, `patienthkid`, `patientnamec`, `patientnamee`, `gender`, `countrycode`, `contactno`, `email`, `date`) VALUES
(7, 'C 00004', 'F123432(3)', '李智能', 'LeeChi Nan', 'F', '852', 96853214, 'portia@lin.com', '1900-01-30'),
(8, 'C 00003', 'B123654123', '馬庫斯馬', 'Marcus Danvers', 'M', '852', 96321254, 'marcus@gmail.com', '1986-02-21'),
(13, 'C 00007', 'W9652872', '葉林', 'Yip Lam', 'F', '852', 5232145, 'Yip@lam.com', '2000-01-19'),
(17, 'C 38917', 'T1234560', '123', '123', 'M', '123', 123456, 'Yip@lam.com', ''),
(19, 'C 00002', 'B123685(0)', '林嘉玲', 'Portia lin', 'F', '852', 98745123, 'portia@lin.com', '1899-05-10'),
(34, 'C 00006', 'W7890543', '克里森 ', 'Christen Press', 'F', '852', 5232145, 'press@press.com', '1986-09-19'),
(35, 'C 00005', 'H78987650', '', 'Tobin Heath', 'M', '123', 96354152, 'heath@heath.com', '');

-- --------------------------------------------------------

--
-- 資料表結構 `patientvaccine`
--

CREATE TABLE `patientvaccine` (
  `id` int(100) NOT NULL,
  `patientid` varchar(100) NOT NULL,
  `vaccineid` varchar(100) DEFAULT NULL,
  `language` varchar(100) NOT NULL,
  `smsorcall` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `patientvaccine`
--

INSERT INTO `patientvaccine` (`id`, `patientid`, `vaccineid`, `language`, `smsorcall`) VALUES
(714, 'PN000004', 'VI 1471', 'ENG', ''),
(715, 'PN000004', 'VI 9273', 'ENG', ''),
(716, 'PN000004', 'VI 9395', '简体', ''),
(717, 'PN000003', 'VI 1471', 'ENG', ''),
(718, 'PN000003', 'VI 9273', '简体', ''),
(719, 'PN000003', 'VI 9395', 'ENG', ''),
(720, 'PN000003', 'VI 7038', 'ENG', ''),
(721, 'PN000003', 'VI 7038', '繁體', ''),
(722, 'PN000002', 'VI 1471', '繁體', ''),
(723, 'PN000002', 'VI 9273', 'ENG', ''),
(724, 'PN000002', 'VI 9395', 'ENG', ''),
(725, 'PN000002', 'VI 7038', '简体', ''),
(726, 'PN000001', 'VI 9273', 'ENG', ''),
(727, 'PN000001', 'VI 1471', 'ENG', ''),
(728, 'PN000001', 'VI 9395', '简体', ''),
(729, 'PN000001', 'VI 1574', '简体', ''),
(730, 'PN000004', 'VI 7038', 'ENG', ''),
(731, 'PN000004', 'VI 1574', '繁體', ''),
(732, 'PN000004', 'VI 1471', '繁體', ''),
(733, 'PN000004', 'VI 2513', '繁體', ''),
(734, 'PN000004', 'VI 2513', 'ENG', ''),
(735, 'PN000004', 'VI 2513', 'ENG', ''),
(736, 'PN000004', 'VI 6847', '简体', ''),
(737, 'PN000004', 'VI 1471', '繁體', ''),
(738, 'PN000004', 'VI 1471', '繁體', ''),
(739, 'PN000007', 'VI 1471', 'ENG', ''),
(740, 'PN000007', 'VI 9273', 'ENG', ''),
(741, 'PN000004', 'VI 1471', '繁體', ''),
(742, 'PN000004', 'VI 1471', '繁體', ''),
(743, 'PN000004', 'VI 2513', '繁體', ''),
(744, 'PN000004', 'VI 2513', 'ENG', ''),
(745, 'PN000004', 'VI 1574', '繁體', ''),
(746, 'PN000004', 'VI 2513', '繁體', ''),
(747, 'PN000004', 'VI 1471', 'ENG', ''),
(748, 'PN000004', 'VI 9273', 'ENG', ''),
(749, 'PN000004', 'VI 7038', '简体', ''),
(750, 'PN000004', 'VI 2513', '繁體', ''),
(751, 'PN000004', 'VI 1471', 'ENG', ''),
(752, 'PN000004', 'VI 9273', 'ENG', ''),
(753, 'PN000004', 'VI 9395', '繁體', ''),
(754, 'PN000004', 'VI 7038', '繁體', ''),
(755, 'PN000004', 'VI 1574', 'ENG', ''),
(756, 'PN000003', 'VI 1471', '繁體', ''),
(757, 'PN000003', 'VI 1471', '繁體', ''),
(758, 'PN000003', 'VI 9273', 'ENG', ''),
(759, 'PN000003', 'VI 1471', '繁體', ''),
(760, 'PN000003', 'VI 9273', 'ENG', ''),
(761, 'PN000003', 'VI 7038', '简体', ''),
(762, 'PN000003', 'VI 7038', '繁體', ''),
(763, 'PN000003', 'VI 2513', '繁體', ''),
(764, 'PN000003', 'VI 1471', '繁體', ''),
(765, 'PN000004', 'VI 1471', '繁體', ''),
(766, 'PN000004', 'VI 9273', 'ENG', ''),
(767, 'PN000004', 'VI 7038', 'ENG', ''),
(768, 'PN000004', 'VI 1574', 'ENG', ''),
(769, 'PN000004', 'VI 9395', '繁體', ''),
(770, 'PN000003', 'VI 1471', 'ENG', ''),
(771, 'PN000003', 'VI 9273', '繁體', ''),
(772, 'PN000003', 'VI 7038', 'ENG', ''),
(773, 'PN000002', 'VI 1471', '繁體', ''),
(774, 'PN000002', 'VI 9273', 'ENG', ''),
(775, 'PN000002', 'VI 7038', 'ENG', ''),
(776, 'PN000003', 'VI 1471', '繁體', ''),
(777, 'PN000003', 'VI 1471', 'ENG', ''),
(778, 'PN000004', 'VI 2513', '繁體', ''),
(779, 'PN000004', 'VI 2513', 'ENG', ''),
(780, 'PN000004', 'VI 1471', '繁體', ''),
(781, 'PN000004', 'VI 1471', '繁體', ''),
(782, 'PN000001', 'VI 1471', '繁體', ''),
(783, 'PN000001', 'VI 9273', '简体', ''),
(784, 'PN000001', 'VI 7038', 'ENG', ''),
(785, 'PN000007', 'VI 0624', 'ENG', ''),
(786, 'PN000001', 'VI 1471', '繁體', ''),
(787, 'PN000004', 'VI 5932', 'ENG', ''),
(788, 'PN000007', 'VI 6847', '简体', ''),
(789, 'PN000006', 'VI 9395', 'ENG', ''),
(790, 'PN000006', 'VI 9273', '繁體', ''),
(791, 'PN000006', 'VI 1574', 'ENG', ''),
(792, 'PN000006', 'VI 1471', '繁體', ''),
(793, 'PN000006', 'VI 5932', 'ENG', ''),
(794, 'PN000006', 'VI 6952', '繁體', ''),
(795, 'PN000007', 'VI 1471', '繁體', ''),
(796, 'PN000007', 'VI 2513', '繁體', ''),
(797, 'PN000007', 'VI 9395', 'ENG', ''),
(798, 'PN000007', 'VI 1471', '繁體', ''),
(799, 'PN000007', 'VI 2513', '繁體', ''),
(800, 'PN000007', 'VI 9395', 'ENG', ''),
(801, 'PN000007', 'VI 2513', '繁體', ''),
(802, 'PN000007', 'VI 9273', '繁體', ''),
(803, 'PN000007', 'VI 7038', '繁體', ''),
(804, 'PN000007', 'VI 3592', '繁體', ''),
(805, 'PN000007', 'VI 1471', '简体', ''),
(806, 'PN000007', 'VI 9395', '繁體', ''),
(807, 'PN000007', 'VI 9395', 'ENG', ''),
(808, 'PN000007', 'VI 1471', '繁體', ''),
(809, 'PN000006', 'VI 1471', '繁體', ''),
(810, 'PN000006', 'VI 1574', 'ENG', ''),
(811, 'PN000008', 'VI 1471', '繁體', ''),
(812, 'PN000004', 'VI 1471', '繁體', ''),
(813, 'PN000004', 'VI 1471', '繁體', ''),
(814, 'PN000004', 'VI 1471', '繁體', ''),
(815, 'PN000004', 'VI 1471', '繁體', ''),
(816, 'PN000004', 'VI 1471', '繁體', ''),
(817, 'PN000004', 'VI 0624', 'ENG', ''),
(818, 'PN000004', 'VI 0624', '简体', ''),
(819, 'PN000004', 'VI 5932', 'ENG', ''),
(820, 'PN000004', 'VI 0624', 'ENG', ''),
(821, 'PN000004', 'VI 0624', 'ENG', ''),
(822, 'PN000004', 'VI 9395', 'ENG', ''),
(823, 'PN000004', 'VI 0624', 'ENG', ''),
(824, 'PN000004', 'VI 0624', 'ENG', ''),
(825, 'PN000004', 'VI 1471', 'ENG', ''),
(826, 'PN000004', 'VI 9395', '繁體', ''),
(827, 'PN000004', 'VI 1574', 'ENG', ''),
(828, 'PN000004', 'VI 5932', '简体', ''),
(829, 'PN000004', 'VI 9395', 'ENG', ''),
(830, 'PN000004', 'VI 9395', '繁體', ''),
(831, 'PN000004', 'VI 9273', '繁體', ''),
(832, 'PN000004', 'VI 5932', '繁體', ''),
(833, 'PN000004', 'VI 5932', 'ENG', ''),
(834, 'PN000004', 'VI 5932', '繁體', ''),
(835, 'PN000003', 'VI 6952', '繁體', ''),
(836, 'PN000003', '', '繁體', ''),
(837, 'PN000003', '', '繁體', ''),
(838, 'PN000004', '', '繁體', ''),
(839, 'PN000004', '', '繁體', ''),
(840, 'PN000003', '', '繁體', ''),
(841, 'PN000003', '', '繁體', ''),
(842, 'PN000003', '', '繁體', ''),
(843, 'PN000003', '', '繁體', ''),
(844, 'PN000003', '', 'ENG', ''),
(845, 'PN000003', '', 'ENG', ''),
(846, 'C 00004', '', '繁體', ''),
(847, 'C 00002', '', '繁體', ''),
(848, 'C 00002', '', 'ENG', ''),
(849, 'C 00002', '', 'ENG', ''),
(850, 'C 00002', '', 'ENG', ''),
(851, 'C 00002', '', 'ENG', ''),
(852, 'C 00004', '', 'ENG', ''),
(853, 'C 00007', '', '简体', ''),
(854, 'C 00007', '', '简体', ''),
(855, 'C 00003', '', 'ENG', ''),
(856, 'C 00004', '', '繁體', ''),
(857, 'C 00004', '', '繁體', ''),
(858, 'C 00004', '', '繁體', ''),
(859, 'C 00004', '', '繁體', ''),
(860, 'C 00002', '', '繁體', ''),
(861, 'C 00002', '', '繁體', ''),
(862, 'C 00002', '', '繁體', ''),
(863, 'C 00002', '', 'ENG', ''),
(864, 'C 00002', '', '繁體', ''),
(865, 'C 00002', '', 'ENG', ''),
(866, 'C 00004', '', 'ENG', '');

-- --------------------------------------------------------

--
-- 資料表結構 `patientvaccinedetail`
--

CREATE TABLE `patientvaccinedetail` (
  `id` int(100) NOT NULL,
  `patientid` longtext NOT NULL,
  `patienthkid` varchar(100) NOT NULL,
  `chinesename` varchar(10) NOT NULL,
  `engname` varchar(100) NOT NULL,
  `source` varchar(100) DEFAULT NULL,
  `casetypeid` varchar(100) DEFAULT NULL,
  `nature` varchar(100) DEFAULT NULL,
  `vaccineid` varchar(100) NOT NULL,
  `vaccinename1` varchar(100) NOT NULL,
  `vaccinename2` varchar(100) NOT NULL,
  `vaccinename3` varchar(100) NOT NULL,
  `totalnoofinjection` varchar(100) NOT NULL,
  `nthinjection` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `nextdate` varchar(100) NOT NULL,
  `skip` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `smsorcall` varchar(100) NOT NULL,
  `traditionalmessage` varchar(100) NOT NULL,
  `simplifiedmessage` varchar(100) NOT NULL,
  `engmessage` varchar(100) NOT NULL,
  `planaction` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `nurse` varchar(50) DEFAULT NULL,
  `paymentmethod` varchar(100) DEFAULT NULL,
  `price` varchar(100) NOT NULL,
  `paystatus` varchar(100) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `arrears` varchar(100) DEFAULT NULL,
  `callno` varchar(100) NOT NULL,
  `countrycode` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id0000` varchar(100) DEFAULT NULL,
  `completed` varchar(100) DEFAULT NULL,
  `status000` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `patientvaccinedetail`
--

INSERT INTO `patientvaccinedetail` (`id`, `patientid`, `patienthkid`, `chinesename`, `engname`, `source`, `casetypeid`, `nature`, `vaccineid`, `vaccinename1`, `vaccinename2`, `vaccinename3`, `totalnoofinjection`, `nthinjection`, `date`, `nextdate`, `skip`, `language`, `smsorcall`, `traditionalmessage`, `simplifiedmessage`, `engmessage`, `planaction`, `status`, `nurse`, `paymentmethod`, `price`, `paystatus`, `remark`, `total`, `arrears`, `callno`, `countrycode`, `email`, `id0000`, `completed`, `status000`) VALUES
(1563, 'C 00002', 'B123685(0)', '林嘉玲', 'Portia lin', 'Call', '1', 'Internal matter', 'VI 7038', '申請公屋', '申请公屋', 'Apply for public housing', '3', '1', '2017-12-09', '2018-1-9', '31', 'ENG', 'SMSEmailCall', '申請公屋\r\n下一個注射期為:2018-1-8', '申请公屋\r\n下一个注射期为:2018-1-8', 'Apply for public housing\r\nNext injection period will be:2018-1-9        ', NULL, 'open', '', 'Cash', ' 準備申請表格', 'N', '', '0', '', '98745123', '852', 'portia@lin.com', NULL, 'ongoing', '75'),
(1564, 'C 00002', 'B123685(0)', '林嘉玲', 'Portia lin', 'Call', '1', 'Internal matter', 'VI 7038', '申請公屋', '申请公屋', 'Apply for public housing', '3', '2', '2018-01-09', '2018-2-8', '30', 'ENG', 'SMSEmailCall', '申請公屋\r\n下一個注射期為:2018-2-7', '申请公屋\r\n下一个注射期为:2018-2-7', 'Apply for public housing\r\nNext injection period will be:2018-2-8        ', NULL, 'open', '', 'Cash', '發送表格', 'N', '', '0', '', '98745123', '852', 'portia@lin.com', NULL, 'ongoing', '50'),
(1565, 'C 00002', 'B123685(0)', '林嘉玲', 'Portia lin', 'Call', '1', 'Internal matter', 'VI 7038', '申請公屋', '申请公屋', 'Apply for public housing', '3', '3 ', '2018-02-08', '', 'Last', 'ENG', 'SMSEmailCall', '申請公屋\r\n下一個注射期為:', '申请公屋\r\n下一个注射期为:', 'Apply for public housing\r\nNext injection period will be:        ', NULL, 'open', '', 'Cash', ' 跟進', 'N', '', '0', '', '98745123', '852', 'portia@lin.com', NULL, 'ongoing', '40'),
(1566, 'C 00004', 'F123432(3)', '李智能', 'LeeChi Nan', 'Home Visit', '1', 'Internal matter', 'C 6847', '申請長者咭', '申请长者咭', 'Application for Senior Citizen Card', '3', '1', '2017-12-08', '2017-12-15', '7', 'ENG', 'SMSEmailCall', '申請長者咭\r\n下一個注射期為:2017-12-15', '申请长者咭\r\n下一个注射期为:2017-12-15', 'Application for Senior Citizen Card\r\nNext injection period will be:2017-12-15    ', NULL, 'open', '', 'Cash', '協助準備申請所需文件', 'N', '', '0', '', '96853214', '852', 'portia@lin.com', NULL, 'ongoing', '10'),
(1567, 'C 00004', 'F123432(3)', '李智能', 'LeeChi Nan', 'Home Visit', '1', 'Internal matter', 'C 6847', '申請長者咭', '申请长者咭', 'Application for Senior Citizen Card', '3', '2', '2017-12-15', '2017-12-22', '7', 'ENG', 'SMSEmailCall', '申請長者咭\r\n下一個注射期為:2017-12-22', '申请长者咭\r\n下一个注射期为:2017-12-22', 'Application for Senior Citizen Card\r\nNext injection period will be:2017-12-22    ', NULL, 'open', '', 'Cash', '申請', 'N', '', '0', '', '96853214', '852', 'portia@lin.com', NULL, 'ongoing', '20'),
(1568, 'C 00004', 'F123432(3)', '李智能', 'LeeChi Nan', 'Home Visit', '1', 'Internal matter', 'C 6847', '申請長者咭', '申请长者咭', 'Application for Senior Citizen Card', '3', '3', '2017-12-22', '', 'Last', 'ENG', 'SMSEmailCall', '申請長者咭\r\n下一個注射期為:', '申请长者咭\r\n下一个注射期为:', 'Application for Senior Citizen Card\r\nNext injection period will be:    ', NULL, 'open', '', 'Cash', ' 跟進', 'N', '', '0', '', '96853214', '852', 'portia@lin.com', NULL, 'ongoing', '50');

-- --------------------------------------------------------

--
-- 資料表結構 `username`
--

CREATE TABLE `username` (
  `UserNameID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `pass` varbinary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `username`
--

INSERT INTO `username` (`UserNameID`, `userName`, `pass`) VALUES
(57, 'admin', 0x2dd5d9c59a0001cdc84cebdb33a78669),
(58, 'test', 0x1521ce1e7b33581df75ba0df53f8f6d3),
(59, 'press', 0x040e3dd8e1b5870ee825def4d01d7ef6);

-- --------------------------------------------------------

--
-- 資料表結構 `vaccinedetail`
--

CREATE TABLE `vaccinedetail` (
  `id` int(100) NOT NULL,
  `vaccineid` varchar(100) NOT NULL,
  `typeid` varchar(100) DEFAULT NULL,
  `vaccinename1` varchar(100) NOT NULL,
  `vaccinename2` varchar(100) NOT NULL,
  `vaccinename3` varchar(100) NOT NULL,
  `totalnoofinjection` varchar(100) NOT NULL,
  `nthinjection` varchar(100) NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `nextdate` varchar(100) NOT NULL,
  `skip` varchar(100) NOT NULL,
  `traditionalmessage` varchar(100) NOT NULL,
  `simplifiedmessage` varchar(100) NOT NULL,
  `engmessage` varchar(100) NOT NULL,
  `vaccinedes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `vaccinedetail`
--

INSERT INTO `vaccinedetail` (`id`, `vaccineid`, `typeid`, `vaccinename1`, `vaccinename2`, `vaccinename3`, `totalnoofinjection`, `nthinjection`, `price`, `date`, `nextdate`, `skip`, `traditionalmessage`, `simplifiedmessage`, `engmessage`, `vaccinedes`) VALUES
(95, 'VI 9273', '4', '法律諮詢', '法律咨询', 'Legal advice', '4', '1', '', '', '', '11', '卡介苗\r\n下一個注射期', '卡介苗\r\n下一个注射期為', 'BCG\r\nNext injection period will be', 'A vaccine prepared from a living attenuated strain of tubercle bacilli '),
(96, 'VI 9273', '4', '法律諮詢', '法律咨询', 'Legal advice', '4', '2', '', '', '', '20', '卡介苗\r\n下一個注射期', '卡介苗\r\n下一个注射期為', 'BCG\r\nNext injection period will be', 'A vaccine prepared from a living attenuated strain of tubercle bacilli '),
(163, 'VI 7038', '6', '申請公屋', '申请公屋', 'Apply for public housing', '3', '1', ' 準備申請表格', '', '', '31', 'B型肝炎疫苗\r\n下一個注射期为', ' 乙型肝炎疫苗\r\n下一个注射期為', 'Hepatitis B vaccine\r\nNext injection period will be', '協助準備申請所需文件'),
(164, 'VI 7038', '6', '申請公屋', '申请公屋', 'Apply for public housing', '3', '2', '發送表格', '', '', '30', 'B型肝炎疫苗\r\n下一個注射期为', ' 乙型肝炎疫苗\r\n下一个注射期為', 'Hepatitis B vaccine\r\nNext injection period will be', '郵寄申請'),
(170, 'VI 1574', '5', '廁所漏水', '厕所漏水', 'Leakage of toilet', '3', '1', '', '', '', '45', '肺炎球菌\r\n下一個注射期为', '肺炎球菌\r\n下一个注射期為', 'Pneumococcal\r\nNext injection period will be', 'The Pneumococcal vaccine can protect agains pneumococcal disease'),
(171, 'VI 1574', '5', '廁所漏水', '厕所漏水', 'Leakage of toilet', '3', '2', '', '', '', '75', '肺炎球菌\r\n下一個注射期为', '肺炎球菌\r\n下一个注射期為', 'Pneumococcal\r\nNext injection period will be', 'The Pneumococcal vaccine can protect agains pneumococcal disease'),
(172, 'VI 1574', '5', '廁所漏水', '厕所漏水', 'Leakage of toilet', '3', '3', '', '', '', 'Last', '肺炎球菌\r\n下一個注射期为', '肺炎球菌\r\n下一个注射期為', 'Pneumococcal\r\nNext injection period will be', 'The Pneumococcal vaccine can protect agains pneumococcal disease'),
(228, 'C 6847', '1', '申請長者咭', '申请长者咭', 'Application for Senior Citizen Card', '3', '1', '協助準備申請所需文件', '', '', '7', '腺病毒疫苗\r\n下一個注射期为', ' 腺病毒疫苗\r\n下一个注射期為', 'Adenovirus vaccine\r\nNext injection period will be', '協助準備申請所需文件'),
(229, 'C 6847', '1', '申請長者咭', '申请长者咭', 'Application for Senior Citizen Card', '3', '2', '申請', '', '', '7', '腺病毒疫苗\r\n下一個注射期为', ' 腺病毒疫苗\r\n下一个注射期為', 'Adenovirus vaccine\r\nNext injection period will be', '郵寄申請'),
(244, 'VI 6952', '2', '工傷問題', '工傷問題', 'Injury problem', '3', '1', '', '', '', '50', '日本腦炎疫苗 \r\n下一個注射期为', '日本腦炎疫苗 \r\n下一个注射期為', 'Japanese encephalitis vaccine \r\nNext injection period will be', 'A vaccine that protects against Japanese encephalitis'),
(245, 'VI 6952', '2', '工傷問題', '工傷問題', 'Injury problem', '3', '2', '', '', '', '60', '日本腦炎疫苗 \r\n下一個注射期为', '日本腦炎疫苗 \r\n下一个注射期為', 'Japanese encephalitis vaccine \r\nNext injection period will be', 'A vaccine that protects against Japanese encephalitis'),
(246, 'VI 6952', '2', '工傷問題', '工傷問題', 'Injury problem', '3', '3 ', '', '', '', 'Last', '日本腦炎疫苗 下一個注射期为', '日本腦炎疫苗 下一个注射期為', 'Japanese encephalitis vaccine Next injection period will be', 'A vaccine that protects against Japanese encephalitis'),
(271, 'VI 9273', '4', '法律諮詢', '法律咨询', 'Legal advice', '4', '3 ', '', '', '', '100', '卡介苗\r\n下一個注射期為', '卡介苗\r\n下一个注射期为', 'BCG\r\nNext injection period will be', 'A vaccine prepared from a living attenuated strain of tubercle bacilli '),
(272, 'C 5932', '3', '噪音', '噪音', 'Noise', '3', '1', '', '', '', '30', '流感疫苗\r\n下一個注射期为', ' 流感疫苗\r\n下一个注射期為', 'Influenza vaccine\r\nNext injection period will be', ' Prevention and control of influenza'),
(273, 'C 5932', '3', '噪音', '噪音', 'Noise', '3', '2', '', '', '', '30', '流感疫苗\r\n下一個注射期为', ' 流感疫苗\r\n下一个注射期為', 'Influenza vaccine\r\nNext injection period will be', ' Prevention and control of influenza'),
(274, 'C 5932', '3', '噪音', '噪音', 'Noise', '3', '3', '', '', '', 'Last', '流感疫苗\r\n下一個注射期为', ' 流感疫苗\r\n下一个注射期為', 'Influenza vaccine\r\nNext injection period will be', ' Prevention and control of influenza'),
(295, 'VI 9273', '4', '法律諮詢', '法律咨询', 'Legal advice', '4', '4 ', '', '', '', 'Last', '卡介苗\r\n下一個注射期為', '卡介苗\r\n下一个注射期为', 'BCG\r\nNext injection period will be', 'A vaccine prepared from a living attenuated strain of tubercle bacilli '),
(320, 'VI 7038', '6', '申請公屋', '申请公屋', 'Apply for public housing', '3', '3 ', ' 跟進', '', '', 'Last', 'B型肝炎疫苗\r\n下一個注射期為', ' 乙型肝炎疫苗\r\n下一个注射期为', 'Hepatitis B vaccine\r\nNext injection period will be', '等待結果, 如果成功.....\r\n如果失敗'),
(355, 'C 6847', '1', '申請長者咭', '申请长者咭', 'Application for Senior Citizen Card', '3', '3', ' 跟進', '', '', 'Last', '申請長者咭\r\n下一個注射期為', '申请长者咭\r\n下一个注射期为', 'Application for Senior Citizen Card\r\nNext injection period will be', '送交長者咭'),
(360, 'C 52196', '6', '調遷大單位', '調遷大單位', '調遷大單位', '3', '1', '準備申請表格', '', '', '10', '調遷大單位\r\n下一個注射期為', '調遷大單位\r\n下一个注射期为', '調遷大單位\r\nNext injection period will be', '調遷大單位'),
(361, 'C 52196', '6', '調遷大單位', '調遷大單位', '調遷大單位', '3', '2', '發送申請表格', '', '', '10', '調遷大單位\r\n下一個注射期為', '調遷大單位\r\n下一个注射期为', '調遷大單位\r\nNext injection period will be', '調遷大單位'),
(362, 'C 52196', '6', '調遷大單位', '調遷大單位', '調遷大單位', '3', '3', 'followup', '', '', 'Last', '調遷大單位\r\n下一個注射期為', '調遷大單位\r\n下一个注射期为', '調遷大單位\r\nNext injection period will be', '調遷大單位'),
(363, 'C 13549', '1', '申請低津', '申請低津', '申請低津', '3', '1', '準備申請表格', '', '', '10', '申請低津\r\n下一個注射期為', '申請低津\r\n下一个注射期为', '申請低津\r\nNext injection period will be', '申請低津'),
(364, 'C 13549', '1', '申請低津', '申請低津', '申請低津', '3', '2', ' 發送申請表格', '', '', '10', '申請低津\r\n下一個注射期為', '申請低津\r\n下一个注射期为', '申請低津\r\nNext injection period will be', '申請低津'),
(365, 'C 13549', '1', '申請低津', '申請低津', '申請低津', '3', '3', 'followup', '', '', 'Last', '申請低津\r\n下一個注射期為', '申請低津\r\n下一个注射期为', '申請低津\r\nNext injection period will be', '申請低津'),
(381, 'C 18579', '1', '1111', 'test444', 'test444', '2', '1', 'des2', '', '', '12', '1111\r\n下一個注射期為', 'test444\r\n下一个注射期为', 'test444\r\nNext injection period will be', ''),
(382, 'C 18579', '1', '1111', 'test444', 'test444', '2', '2', 'des3', '', '', 'Last', '1111\r\n下一個注射期為', 'test444\r\n下一个注射期为', 'test444\r\nNext injection period will be', '');

-- --------------------------------------------------------

--
-- 資料表結構 `vaccinetype`
--

CREATE TABLE `vaccinetype` (
  `id` int(100) NOT NULL,
  `typename1` varchar(100) NOT NULL,
  `typename2` varchar(100) NOT NULL,
  `typename3` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `vaccinetype`
--

INSERT INTO `vaccinetype` (`id`, `typename1`, `typename2`, `typename3`) VALUES
(1, '社福醫療\r\n\r\n', '社福医疗', 'Social welfare medical'),
(2, '勞工\r\n\r\n', '劳工\r\n', 'Labor'),
(3, '環境/衞生\r\n\r\n', '环境/卫生\r\n', 'Environment / health'),
(4, '法律\r\n', '法律', 'Law'),
(5, '維修', '維修', 'Maintenance'),
(6, '房屋\r\n', '房屋', 'Housing');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `patientvaccine`
--
ALTER TABLE `patientvaccine`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `patientvaccinedetail`
--
ALTER TABLE `patientvaccinedetail`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`UserNameID`);

--
-- 資料表索引 `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `vaccinetype`
--
ALTER TABLE `vaccinetype`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- 使用資料表 AUTO_INCREMENT `patientvaccine`
--
ALTER TABLE `patientvaccine`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=867;
--
-- 使用資料表 AUTO_INCREMENT `patientvaccinedetail`
--
ALTER TABLE `patientvaccinedetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1569;
--
-- 使用資料表 AUTO_INCREMENT `username`
--
ALTER TABLE `username`
  MODIFY `UserNameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- 使用資料表 AUTO_INCREMENT `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;
--
-- 使用資料表 AUTO_INCREMENT `vaccinetype`
--
ALTER TABLE `vaccinetype`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22555;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
