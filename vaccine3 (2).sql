-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017 年 08 月 08 日 06:25
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
-- 資料庫： `vaccine3`
--

-- --------------------------------------------------------

--
-- 資料表結構 `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `patientid` longtext,
  `officialIDid` int(11) NOT NULL,
  `dob` datetime NOT NULL,
  `doi` datetime NOT NULL,
  `nationality` longtext,
  `surName` longtext,
  `givenName` longtext,
  `otherName` longtext,
  `chineseSurName` longtext,
  `chineseGivenName` longtext,
  `chineseOtherName` longtext,
  `maritalStatus` int(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `religion` longtext,
  `prefLang` int(11) NOT NULL,
  `telHome` longtext,
  `telOffice` longtext,
  `telMobile` longtext,
  `pager` longtext,
  `fax` longtext,
  `email` longtext,
  `residentialAddressid` int(11) NOT NULL,
  `correspondanceAddressid` int(11) NOT NULL,
  `nextOfKid1id` int(11) NOT NULL,
  `nextOfKid2id` int(11) NOT NULL,
  `referrerid` int(11) NOT NULL,
  `remark` longtext,
  `version` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `lastUpdated` datetime NOT NULL,
  `updatedBy` longtext,
  `Discriminator` varchar(128) NOT NULL,
  `mbid` int(11) NOT NULL,
  `medicalBackground_id` int(11) DEFAULT NULL,
  `dotorid` int(11) NOT NULL,
  `officialIDNO` longtext,
  `memberGroupingid` int(11) NOT NULL,
  `religiousid` int(11) NOT NULL,
  `maritalStatusid` int(11) NOT NULL,
  `sexid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `patients`
--

INSERT INTO `patients` (`id`, `patientid`, `officialIDid`, `dob`, `doi`, `nationality`, `surName`, `givenName`, `otherName`, `chineseSurName`, `chineseGivenName`, `chineseOtherName`, `maritalStatus`, `sex`, `religion`, `prefLang`, `telHome`, `telOffice`, `telMobile`, `pager`, `fax`, `email`, `residentialAddressid`, `correspondanceAddressid`, `nextOfKid1id`, `nextOfKid2id`, `referrerid`, `remark`, `version`, `dateCreated`, `lastUpdated`, `updatedBy`, `Discriminator`, `mbid`, `medicalBackground_id`, `dotorid`, `officialIDNO`, `memberGroupingid`, `religiousid`, `maritalStatusid`, `sexid`) VALUES
(92, 'p003', 2, '1993-05-13 00:00:00', '2015-05-13 00:00:00', 'Hong Kong', 'Wong', 'Tin Ming', '', '王', '天明', NULL, 4, 0, NULL, 1, '23098456', NULL, '96709394', NULL, NULL, 'tinmin@yahoo.com', 304, 303, 232, 233, 0, NULL, 23, '2016-10-04 17:30:21', '2017-06-08 11:48:06', NULL, '', 101, NULL, 0, 'G123456(7)', 2, 1, 0, 1),
(93, 'p004', 2, '1989-06-14 00:00:00', '2007-05-08 00:00:00', 'American', 'Lam', 'Siu Chun', 'Alex', '林', '小俊', 'Alex', 4, 0, 'Eckankar', 0, '26711654', '1', '97803281', NULL, '12345678', 'steve@gmail.com', 306, 305, 234, 235, 0, NULL, 112, '2016-10-06 23:30:37', '2017-06-18 21:39:42', NULL, '', 102, NULL, 1, 'P956325(3)', 1, 1, 0, 0),
(94, 'todaypatient', 2, '2000-02-03 00:00:00', '2015-02-04 00:00:00', 'Hong Kong', 'Wong', 'Vicky', 'HH', '王', '浩香', NULL, 4, 1, 'Christianity', 0, '23232323', NULL, '90232323', NULL, NULL, NULL, 310, 309, 238, 239, 0, NULL, 6, '2017-02-08 12:39:52', '2017-06-08 11:40:47', NULL, '', 104, NULL, 1, 'G123456(7)', 1, 13, 1, 10),
(95, 'PN000056', 2, '1989-05-02 00:00:00', '2008-05-07 00:00:00', 'Hong Kong', 'Cheung', 'Kenny', NULL, '張', '偉大', NULL, 0, 0, 'Others', 0, '29475684', NULL, '97846355', NULL, NULL, NULL, 312, 311, 240, 241, 0, NULL, 9, '2017-02-08 12:41:37', '2017-05-31 10:48:36', NULL, '', 105, NULL, 2, 'G234543(3)', 2, 1, 0, 0),
(96, 'PN000057', 2, '1993-02-03 00:00:00', '2010-02-10 00:00:00', NULL, 'Luk', 'Mary', NULL, '陸', '小妹', NULL, 4, 1, NULL, 0, '27779043', NULL, '98632628', NULL, NULL, NULL, 314, 313, 242, 243, 0, NULL, 4, '2017-02-08 12:44:13', '2017-05-31 10:40:28', NULL, '', 106, NULL, 1, 'K232010(7)', 1, 1, 0, 0),
(97, 'ttttttttt', 2, '1983-09-06 00:00:00', '2003-02-20 00:00:00', 'Chinese', 'Yip', 'Gloria', NULL, '葉', '子媚', NULL, 0, 1, 'Buddhism', 2, '28463850', NULL, '60998432', NULL, NULL, NULL, 316, 315, 244, 245, 0, NULL, 2, '2017-02-08 12:56:38', '2017-03-28 16:32:17', NULL, '', 107, NULL, 1, 'B123987(0)', 1, 1, 0, 0),
(98, 'PN000059', 2, '1963-08-06 00:00:00', '1979-05-16 00:00:00', 'Hong Kong', 'Lee', 'George', NULL, '李', '自成', NULL, 0, 0, NULL, 1, '29874673', NULL, '64095839', NULL, NULL, NULL, 318, 317, 246, 247, 0, NULL, 6, '2017-02-08 13:04:09', '2017-06-08 15:52:16', NULL, '', 108, NULL, 2, 'D145893(Z)', 2, 1, 1, 1),
(99, 'p008', 2, '1986-03-31 00:00:00', '1999-05-10 00:00:00', NULL, 'Ho', 'Loi', NULL, '何', '來', NULL, 0, 1, NULL, 1, '23476598', NULL, '55503234', NULL, NULL, NULL, 320, 319, 248, 249, 0, NULL, 3, '2017-02-08 13:06:04', '2017-06-20 15:14:27', NULL, '', 109, NULL, 1, 'H456495(Z)', 1, 1, 0, 0),
(100, 'PN000061', 2, '1976-02-25 00:00:00', '2007-02-21 00:00:00', 'Hong Kong', 'Lui', 'Hutchi', NULL, '廖', '許智', NULL, 0, 0, NULL, 1, '29478566', NULL, '95856433', NULL, NULL, NULL, 322, 321, 250, 251, 0, NULL, 0, '2017-02-08 13:10:22', '2017-02-08 13:10:22', NULL, '', 110, NULL, 2, 'B3894575(3)', 2, 1, 0, 0),
(101, 'PN000062', 5, '1963-08-07 00:00:00', '1993-08-30 00:00:00', NULL, 'Kwong', 'Ki Chi', NULL, '鄺', '其智', NULL, 0, 0, NULL, 0, '27458930', NULL, '63428885', NULL, NULL, NULL, 324, 323, 252, 253, 0, NULL, 0, '2017-02-08 14:24:08', '2017-02-08 14:24:08', NULL, '', 111, NULL, 1, 'K693759(0)', 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `patientvaccine`
--

CREATE TABLE `patientvaccine` (
  `id` int(100) NOT NULL,
  `patientid` varchar(100) NOT NULL,
  `vaccineid` varchar(100) NOT NULL,
  `patientvid` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `patientvaccine`
--

INSERT INTO `patientvaccine` (`id`, `patientid`, `vaccineid`, `patientvid`, `language`) VALUES
(247, 'p000', 'VI 1471', 'PVI 13490', '繁體='),
(248, 'p002', 'VI 1471', 'PVI 12277', 'ENG='),
(249, 'p003', 'VI 1471', 'PVI 12277', 'ENG='),
(250, 'p008', 'VI 1471', 'PVI 17449', '繁體='),
(253, 'p003', 'VI 4451', 'PVI 16514', '简体='),
(255, 'p003', 'VI 2387', 'PVI 16072', '简体='),
(256, 'p003', 'VI 2597', 'PVI 16934', 'ENG='),
(257, 'p77', 'VI 1471', 'PVI 12534', '繁體='),
(258, 'pkk', 'VI 1471', 'PVI 18558', 'ENG='),
(259, 'plll', 'VI 1471', 'PVI 13673', 'ENG='),
(260, 'p0816', 'VI 5301', 'PVI 14288', '繁體='),
(261, 'p003', 'VI 9395', 'PVI 16159', 'ENG='),
(262, 'ddd', 'VI 1471', 'PVI 11987', 'ENG='),
(263, 'p003', 'VI 7038', 'PVI 13101', 'ENG='),
(264, 'p003', 'VI 5783', 'PVI 13882', '繁體='),
(268, 'c', 'VI 7038', 'PVI 10482', '繁體='),
(269, 'ss', 'VI 1471', 'PVI 17896', 'volvo='),
(270, 'sss', 'VI 1471', 'PVI 16068', '繁體='),
(271, 'test111', 'VI 1471', 'PVI 11718', '繁體='),
(272, 'vvvvv', 'VI 1471', 'PVI 10023', '繁體='),
(273, 'p', 'VI 1471', 'PVI 18506', '繁體='),
(274, 'gg', 'VI 1471', 'PVI 16635', '繁體='),
(275, 'yy', 'VI 1471', 'PVI 18658', '繁體='),
(276, 'p004', 'VI 1471', 'PVI 10065', '繁體='),
(277, 'p0050', 'VI 2560', 'PVI 18393', '繁體='),
(278, 'p006', 'VI 5301', 'PVI 10570', '繁體='),
(279, 'cxcx', 'VI 1471', 'PVI 11446', '繁體='),
(280, 'ooo', 'VI 1471', 'PVI 16939', '繁體='),
(281, 'ppp', 'VI 1471', 'PVI 16021', '繁體='),
(282, '123321', 'VI 1471', 'PVI 12622', '繁體='),
(283, '123321f', 'VI 1471', 'PVI 12622', '繁體='),
(284, 'p0041', 'VI 1471', 'PVI 16778', '繁體='),
(285, 'p11', 'VI 1471', 'PVI 13749', '繁體='),
(286, 'p110', 'VI 2597', 'PVI 13749', '繁體='),
(287, 'iuuiuiu', 'VI 1471', 'PVI 18820', '繁體='),
(288, 'll', 'VI 1471', 'PVI 17991', '繁體='),
(289, 'opo', 'VI 1471', 'PVI 18659', '繁體='),
(290, 'p00115', 'VI 1471', 'PVI 17183', '繁體='),
(291, 'supthere', 'VI 1471', 'PVI 18538', '繁體='),
(292, 'hihihihi', 'VI 4980', 'PVI 15407', '繁體='),
(293, 'testJuly', 'VI 1471', 'PVI 15599', '繁體='),
(294, '987654321', 'VI 4980', 'PVI 10727', '繁體='),
(295, 'todaypatient', 'VI 5192', 'PVI 14118', 'ENG='),
(296, '33333', 'VI 1471', 'PVI 13935', '繁體='),
(297, 'P 8888', 'VI 3592', 'PVI 18843', '繁體='),
(298, 'y', 'VI 1471', 'PVI 18290', '繁體='),
(299, '3265', 'VI 3592', 'PVI 10766', '繁體='),
(300, 'ccc', 'VI 3592', 'PVI 10766', '繁體='),
(301, 'pann', 'VI 1471', 'PVI 18631', '繁體='),
(302, 'panny', 'VI 3592', 'PVI 18631', '繁體='),
(303, 'oooo', 'VI 3592', 'PVI 19735', '繁體='),
(304, 'emily', 'VI 3592', 'PVI 16573', 'ENG='),
(305, 'p0087', 'VI 3592', 'PVI 10169', '繁體='),
(306, 'ptest', 'VI 3592', 'PVI 17991', '繁體='),
(307, '789', 'VI 3592', 'PVI 12502', '繁體='),
(308, '987', 'VI 3592', 'PVI 19732', '繁體='),
(309, '456', 'VI 3592', 'PVI 18215', '繁體='),
(310, 'p123', 'VI 3592', 'PVI 19519', '繁體='),
(311, 'Pchange', 'VI 3592', 'PVI 12584', '繁體='),
(312, 'Pchange2', 'VI 3592', 'PVI 18481', '繁體='),
(313, 'Pchange3', 'VI 3592', 'PVI 13635', '繁體='),
(314, 'Pchange4', 'VI 3592', 'PVI 11511', '繁體='),
(315, 'p001', 'VI 6847', 'PVI 13462', '繁體='),
(316, 'p002', 'VI 6847', 'PVI 16191', '繁體='),
(317, '123321', 'VI 1471', 'PVI 18981', '繁體='),
(318, 'July13', 'VI 6952', 'PVI 15319', '繁體='),
(319, 'pppppppp', 'VI 1471', 'PVI 14743', '繁體='),
(320, 'xx', 'VI 1471', 'PVI 10675', '繁體='),
(321, 'P123456', 'VI 2039', 'PVI 16473', '繁體='),
(322, 'P4567', 'VI 2039', 'PVI 14819', '繁體='),
(323, 'ptest123', 'VI 3974', 'PVI 14184', '繁體='),
(324, 'p00333', 'VI 2039', 'PVI 13598', '繁體='),
(325, 'P0039', 'VI 3518', 'PVI 16603', '繁體='),
(326, 'P963', 'VI 6425', 'PVI 19458', '繁體='),
(327, 'p002', 'VI 2039', 'PVI 12789', '简体='),
(328, 'patienttest', 'VI 9273', 'PVI 11910', '繁體='),
(329, 'p00031', 'VI 5932', 'PVI 16897', '繁體='),
(330, 'dfgfg', 'VI 1471', 'PVI 15711', '繁體='),
(331, 'p0007', 'VI 0159', 'PVI 13460', 'ENG=');

-- --------------------------------------------------------

--
-- 資料表結構 `patientvaccinedetail`
--

CREATE TABLE `patientvaccinedetail` (
  `id` int(100) NOT NULL,
  `patientid` varchar(100) NOT NULL,
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
  `traditionalmessage` varchar(100) NOT NULL,
  `simplifiedmessage` varchar(100) NOT NULL,
  `engmessage` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `nurse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `patientvaccinedetail`
--

INSERT INTO `patientvaccinedetail` (`id`, `patientid`, `vaccineid`, `vaccinename1`, `vaccinename2`, `vaccinename3`, `totalnoofinjection`, `nthinjection`, `date`, `nextdate`, `skip`, `language`, `traditionalmessage`, `simplifiedmessage`, `engmessage`, `status`, `nurse`) VALUES
(169, 'p003', 'VI 1471', '脊髓灰質炎疫苗', '脊髓灰质炎疫苗', 'POLIO VACCINE', '2', '2', '2017-06-14', '2017-6-24', '10', 'ENG', '脊髓灰質炎疫苗下一個注射期为2017-6-24', '脊髓灰质炎疫苗下一个注射期2017-6-24', 'POLIO VACCINENext injection period2017-6-24', 'closed', 'N12345'),
(193, 'p003', 'VI 7038', 'B型肝炎疫苗', ' 乙型肝炎疫苗', 'Hepatitis B vaccine', '2', '1', '2017-07-13', '2017-8-8', '31', '繁體', 'B型肝炎疫苗下一個注射期为 2017-8-8', ' 乙型肝炎疫苗下一个注射期為', 'Hepatitis B vaccineNext injection period will be', 'open', ''),
(194, 'p003', 'VI 7038', 'B型肝炎疫苗', ' 乙型肝炎疫苗', 'Hepatitis B vaccine', '2', '2', '2017-06-27', '2017-08-08', '30', '繁體', 'B型肝炎疫苗下一個注射期为2017-7-27', ' 乙型肝炎疫苗下一个注射期2017-7-27', 'Hepatitis B vaccineNext injection period2017-7-27', 'open', ''),
(195, 'p003', 'VI 5783', '疫苗名稱4', '疫苗名称 4', 'Vaccine Name4', '1', '1', '2017-07-13', '2017-08-08', 'end', '繁體', '疫苗名稱4下一個注射期为 2017-8-8', '疫苗名称 4下一个注射期為', 'Vaccine Name4Next injection period will be', '', ''),
(216, '987654321', 'VI 4980', 'July5繁體', 'July5简体', 'July5Eng', '3', '1', '2017-07-12', '2017-8-3', '22', '繁體', 'July5繁體下一個注射期为2017-8-3', 'July5简体下一个注射期2017-8-3', 'July5EngNext injection period2017-8-3', 'closed', 'N4567'),
(217, '987654321', 'VI 4980', 'July5繁體', 'July5简体', 'July5Eng', '3', '2', '2017-07-12', '2017-8-14', '33', '繁體', 'July5繁體下一個注射期为2017-8-14', 'July5简体下一个注射期2017-8-14', 'July5EngNext injection period2017-8-14', 'open', ''),
(218, '987654321', 'VI 4980', 'July5繁體', 'July5简体', 'July5Eng', '3', '3', '2017-07-14', 'NaN-NaN-NaN', 'end', '繁體', 'July5繁體下一個注射期为NaN-NaN-NaN', 'July5简体下一个注射期NaN-NaN-NaN', 'July5EngNext injection periodNaN-NaN-NaN', 'open', ''),
(219, 'todaypatient', 'VI 5192', 'today(繁體', 'today(简体', 'today(Eng', '3', '1', '2020-07-29', '2017-7-6', '4', 'ENG', 'today(繁體下一個注射期为2017-7-6', 'today(简体下一个注射期2017-7-6', 'today(EngNext injection period2017-7-6', 'closed', 'N7894'),
(220, 'todaypatient', 'VI 5192', 'today(繁體', 'today(简体', 'today(Eng', '3', '2', '2017-07-23', '2017-7-28', '5', 'ENG', 'today(繁體\r\n下一個注射期为2017-7-28', 'today(简体\r\n下一个注射期為2017-7-28', 'today(Eng\r\nNext injection period will be2017-7-28', 'open', ''),
(221, 'todaypatient', 'VI 5192', 'today(繁體', 'today(简体', 'today(Eng', '3', '3', '2017-07-25', 'NaN-NaN-NaN', 'end', 'ENG', 'today(繁體\r\n下一個注射期为NaN-NaN-NaN', 'today(简体\r\n下一个注射期為NaN-NaN-NaN', 'today(Eng\r\nNext injection period will beNaN-NaN-NaN', 'open', ''),
(222, 'P 8888', 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '1', '2017-07-18', '2017-07-06', '15', '繁體', 'Rotavirus vaccine下一個注射期为2017-8-2', '輪狀病毒疫苗下一个注射期2017-8-2', '轮状病毒 疫苗Next injection period2017-8-2', '', ''),
(223, 'P 8888', 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '2', '2017-08-01', '2017-8-31', '30', '繁體', 'Rotavirus vaccine\r\n下一個注射期为2017-8-31', '輪狀病毒疫苗\r\n下一个注射期為2017-8-31', '轮状病毒 疫苗\r\nNext injection period will be2017-8-31', '', ''),
(224, 'P 8888', 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '3', '2017-08-31', 'NaN-NaN-NaN', 'end', '繁體', 'Rotavirus vaccine\r\n下一個注射期为NaN-NaN-NaN', '輪狀病毒疫苗\r\n下一个注射期為NaN-NaN-NaN', '轮状病毒 疫苗\r\nNext injection period will beNaN-NaN-NaN', '', ''),
(225, 'oooo', 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '1', '2017-07-08', '2017-7-23', '15', '繁體', '輪狀病毒疫苗下一個注射期为2017-7-23', '轮状病毒疫苗下一个注射期2017-7-23', 'Rotavirus vaccineNext injection period2017-7-23', '', ''),
(226, 'oooo', 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '2', '2017-07-18', '2017-8-17', '30', '繁體', '輪狀病毒疫苗下一個注射期为2017-8-17', '轮状病毒疫苗下一个注射期2017-8-17', 'Rotavirus vaccineNext injection period2017-8-17', '', ''),
(227, 'oooo', 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '3', '2017-07-04', '', 'end', '繁體', '輪狀病毒疫苗\r\n下一個注射期为', '轮状病毒疫苗\r\n下一个注射期為', 'Rotavirus vaccine\r\nNext injection period will be', '', ''),
(234, 'p001', 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '4', '1', '2017-06-14', '2017-6-24', '10', '繁體', '腺病毒疫苗下一個注射期为2017-6-24', ' 腺病毒疫苗下一个注射期2017-6-24', 'Adenovirus vaccineNext injection period2017-6-24', 'closed', 'N1245'),
(235, 'p001', 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '4', '2', '2017-06-24', '2017-7-14', '20', '繁體', '腺病毒疫苗下一個注射期为2017-7-14', ' 腺病毒疫苗下一个注射期2017-7-14', 'Adenovirus vaccineNext injection period2017-7-14', 'closed', 'N3652'),
(236, 'p001', 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '4', '3', '2017-07-14', '2017-8-13', '30', '繁體', '腺病毒疫苗下一個注射期为2017-8-13', ' 腺病毒疫苗下一个注射期2017-8-13', 'Adenovirus vaccineNext injection period2017-8-13', 'closed', 'N 6788'),
(237, 'p001', 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '4', '4', '2017-08-13', '', 'end', '繁體', '腺病毒疫苗\r\n下一個注射期为', ' 腺病毒疫苗\r\n下一个注射期', 'Adenovirus vaccine\r\nNext injection period', 'open', ''),
(238, 'p002', 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '4', '1', '2017-07-11', '2017-7-21', '10', '繁體', '腺病毒疫苗\r\n下一個注射期为2017-7-21', ' 腺病毒疫苗\r\n下一个注射期2017-7-21', 'Adenovirus vaccine\r\nNext injection period2017-7-21', 'closed', 'N1204'),
(239, 'p002', 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '4', '2', '2017-07-21', '2017-8-10', '20', '繁體', '腺病毒疫苗\r\n下一個注射期为2017-8-10', ' 腺病毒疫苗\r\n下一个注射期2017-8-10', 'Adenovirus vaccine\r\nNext injection period2017-8-10', 'closed', 'N3605'),
(240, 'p002', 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '4', '3', '2017-08-10', '2017-9-9', '30', '繁體', '腺病毒疫苗\r\n下一個注射期为2017-9-9', ' 腺病毒疫苗\r\n下一个注射期2017-9-9', 'Adenovirus vaccine\r\nNext injection period2017-9-9', 'open', ''),
(241, 'p002', 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '4', '4', '2017-07-09', '', 'end', '繁體', '腺病毒疫苗\r\n下一個注射期为', ' 腺病毒疫苗\r\n下一个注射期', 'Adenovirus vaccine\r\nNext injection period', 'open', ''),
(242, 'July13', 'VI 6952', '日本腦炎疫苗 ', '日本腦炎疫苗 ', 'Japanese encephalitis vaccine ', '3', '1', '2017-07-12', '2017-8-31', '50', '繁體', '日本腦炎疫苗 \r\n下一個注射期为2017-8-31', '日本腦炎疫苗 \r\n下一个注射期2017-8-31', 'Japanese encephalitis vaccine \r\nNext injection period2017-8-31', 'closed', 'N1285'),
(243, 'July13', 'VI 6952', '日本腦炎疫苗 ', '日本腦炎疫苗 ', 'Japanese encephalitis vaccine ', '3', '2', '2017-08-31', '2017-10-30', '60', '繁體', '日本腦炎疫苗 \r\n下一個注射期为2017-10-30', '日本腦炎疫苗 \r\n下一个注射期2017-10-30', 'Japanese encephalitis vaccine \r\nNext injection period2017-10-30', 'open', ''),
(244, 'July13', 'VI 6952', '日本腦炎疫苗 ', '日本腦炎疫苗 ', 'Japanese encephalitis vaccine ', '3', '3 ', '2017-10-30', '', 'End', '繁體', '日本腦炎疫苗 \r\n下一個注射期为', '日本腦炎疫苗 \r\n下一个注射期', 'Japanese encephalitis vaccine \r\nNext injection period', 'open', ''),
(245, 'pppppppp', 'VI 1471', '脊髓灰質炎疫苗', '脊髓灰质炎疫苗', 'POLIO VACCINE', '2', '1', '', '', '30', '繁體', '脊髓灰質炎疫苗\r\n下一個注射期为', '脊髓灰质炎疫苗\r\n下一个注射期', 'POLIO VACCINE\r\nNext injection period', NULL, NULL),
(246, 'pppppppp', 'VI 1471', '脊髓灰質炎疫苗', '脊髓灰质炎疫苗', 'POLIO VACCINE', '2', '2', '', '', '60', '繁體', '脊髓灰質炎疫苗\r\n下一個注射期为', '脊髓灰质炎疫苗\r\n下一个注射期', 'POLIO VACCINE\r\nNext injection period', NULL, NULL),
(247, 'P123456', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '3', '1', '', '', '60', '繁體', '日本腦炎\r\n下一個注射期为', ' 日本脑炎\r\n下一个注射期', 'Japanese encephalitis\r\nNext injection period', NULL, NULL),
(248, 'P123456', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '3', '2', '', '', '60', '繁體', '日本腦炎\r\n下一個注射期为', ' 日本脑炎\r\n下一个注射期', 'Japanese encephalitis\r\nNext injection period', NULL, NULL),
(249, 'P123456', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '3', '3 ', '', '', 'end', '繁體', '日本腦炎\r\n下一個注射期为', ' 日本脑炎\r\n下一个注射期', 'Japanese encephalitis\r\nNext injection period', NULL, NULL),
(250, 'P4567', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '3', '1', '2017-07-17', '2017-9-15', '60', '繁體', '日本腦炎\r\n下一個注射期为2017-9-15', ' 日本脑炎\r\n下一个注射期2017-9-15', 'Japanese encephalitis\r\nNext injection period2017-9-15', 'closed', 'N4568'),
(251, 'P4567', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '3', '2', '2017-09-01', '2017-10-31', '60', '繁體', '日本腦炎\r\n下一個注射期为2017-10-31', ' 日本脑炎\r\n下一个注射期2017-10-31', 'Japanese encephalitis\r\nNext injection period2017-10-31', 'open', ''),
(252, 'P4567', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '3', '3 ', '2017-10-31', '', 'end', '繁體', '日本腦炎\r\n下一個注射期为', ' 日本脑炎\r\n下一个注射期', 'Japanese encephalitis\r\nNext injection period', 'open', ''),
(253, 'ptest123', 'VI 3974', 'test', 'test', 'test', '2', '1', '2017-09-18', '2017-10-3', '15', '繁體', 'test\r\n下一個注射期为2017-10-3', 'test\r\n下一个注射期2017-10-3', 'test\r\nNext injection period2017-10-3', NULL, NULL),
(254, 'ptest123', 'VI 3974', 'test', 'test', 'test', '2', '2', '2017-10-03', '', 'end', '繁體', 'test\r\n下一個注射期为', 'test\r\n下一个注射期', 'test\r\nNext injection period', NULL, NULL),
(255, 'P0039', 'VI 3518', 'testtest', 'testtest', 'testtest', '3', '1', '2017-07-19', '2017-9-27', '70', '繁體', 'testtest\r\n下一個注射期为2017-9-27', 'testtest\r\n下一个注射期2017-9-27', 'testtest\r\nNext injection period2017-9-27', 'closed', 'N1234'),
(256, 'P0039', 'VI 3518', 'testtest', 'testtest', 'testtest', '3', '2', '2017-09-27', '2017-12-6', '70', '繁體', 'testtest\r\n下一個注射期为2017-12-6', 'testtest\r\n下一个注射期2017-12-6', 'testtest\r\nNext injection period2017-12-6', 'open', ''),
(257, 'P0039', 'VI 3518', 'testtest', 'testtest', 'testtest', '3', '3', '2017-12-06', 'NaN-NaN-NaN', 'end', '繁體', 'testtest\r\n下一個注射期为NaN-NaN-NaN', 'testtest\r\n下一个注射期NaN-NaN-NaN', 'testtest\r\nNext injection periodNaN-NaN-NaN', 'open', ''),
(258, 'P963', 'VI 6425', '963', '963', '963', '2', '1', '2017-07-18', '2017-8-7', '20', '繁體', '963\r\n下一個注射期为2017-8-7', '963\r\n下一个注射期2017-8-7', '963\r\nNext injection period2017-8-7', 'closed', 'N9874'),
(259, 'P963', 'VI 6425', '963', '963', '963', '2', '2', '2017-08-07', 'NaN-NaN-NaN', 'End', '繁體', '963\r\n下一個注射期为NaN-NaN-NaN', '963\r\n下一个注射期NaN-NaN-NaN', '963\r\nNext injection periodNaN-NaN-NaN', 'open', ''),
(260, 'p002', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '', '', '2017-07-20', '2017-9-18', '60', '简体', '日本腦炎\r\n下一個注射期为2017-9-18', ' 日本脑炎\r\n下一个注射期2017-9-18', 'Japanese encephalitis\r\nNext injection period2017-9-18', 'closed', 'N7898'),
(261, 'p002', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '', '', '2017-09-01', '2017-10-31', '60', '简体', '日本腦炎\r\n下一個注射期为2017-10-31', ' 日本脑炎\r\n下一个注射期2017-10-31', 'Japanese encephalitis\r\nNext injection period2017-10-31', 'open', ''),
(262, 'p002', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '', '', '2017-10-31', '2017-12-30', '60', '简体', '日本腦炎\r\n下一個注射期为2017-12-30', ' 日本脑炎\r\n下一个注射期2017-12-30', 'Japanese encephalitis\r\nNext injection period2017-12-30', 'open', ''),
(263, 'p002', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '', '', '2017-12-31', '2018-3-1', '60', '简体', '日本腦炎\r\n下一個注射期为2018-3-1', ' 日本脑炎\r\n下一个注射期2018-3-1', 'Japanese encephalitis\r\nNext injection period2018-3-1', 'open', ''),
(264, 'p002', 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '', '', '2018-03-01', '', 'end', '简体', '日本腦炎\r\n下一個注射期为', ' 日本脑炎\r\n下一个注射期', 'Japanese encephalitis\r\nNext injection period', 'open', ''),
(265, 'patienttest', 'VI 9273', '卡介苗', '卡介苗', 'BCG', '3', '1', '2017-07-27', '2017-8-7', '11', '繁體', '卡介苗\r\n下一個注射期为2017-8-7', '卡介苗\r\n下一个注射期2017-8-7', 'BCG\r\nNext injection period2017-8-7', 'closed', 'N1456'),
(266, 'patienttest', 'VI 9273', '卡介苗', '卡介苗', 'BCG', '3', '2', '2017-08-07', '2017-8-27', '20', '繁體', '卡介苗\r\n下一個注射期为2017-8-27', '卡介苗\r\n下一个注射期2017-8-27', 'BCG\r\nNext injection period2017-8-27', 'open', ''),
(267, 'patienttest', 'VI 9273', '卡介苗', '卡介苗', 'BCG', '3', '3 ', '2017-08-27', '', 'end', '繁體', '卡介苗\r\n下一個注射期为', '卡介苗\r\n下一个注射期', 'BCG\r\nNext injection period', 'open', ''),
(268, 'p00031', 'VI 5932', '流感疫苗', ' 流感疫苗', 'Influenza vaccine', '3', '1', '2017-07-28', '2017-8-27', '30', '繁體', '流感疫苗\r\n下一個注射期为2017-8-27', ' 流感疫苗\r\n下一个注射期2017-8-27', 'Influenza vaccine\r\nNext injection period2017-8-27', 'closed', 'N 1286'),
(269, 'p00031', 'VI 5932', '流感疫苗', ' 流感疫苗', 'Influenza vaccine', '3', '2', '2017-08-27', '2017-9-26', '30', '繁體', '流感疫苗\r\n下一個注射期为2017-9-26', ' 流感疫苗\r\n下一个注射期2017-9-26', 'Influenza vaccine\r\nNext injection period2017-9-26', 'open', ''),
(270, 'p00031', 'VI 5932', '流感疫苗', ' 流感疫苗', 'Influenza vaccine', '3', '3', '2017-09-26', '', 'end', '繁體', '流感疫苗\r\n下一個注射期为', ' 流感疫苗\r\n下一个注射期', 'Influenza vaccine\r\nNext injection period', 'open', ''),
(271, 'p0007', 'VI 0159', 'testing繁體', 'testing简体', 'testingEng', '1', '1', '2017-08-04', '', 'end', 'ENG', 'testing繁體\r\n下一個注射期为NaN-NaN-NaN', 'testing简体\r\n下一个注射期NaN-NaN-NaN', 'testingEng\r\nNext injection periodNaN-NaN-NaN', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `vaccinedetail`
--

CREATE TABLE `vaccinedetail` (
  `id` int(100) NOT NULL,
  `vaccineid` varchar(100) NOT NULL,
  `vaccinename1` varchar(100) NOT NULL,
  `vaccinename2` varchar(100) NOT NULL,
  `vaccinename3` varchar(100) NOT NULL,
  `totalnoofinjection` varchar(100) NOT NULL,
  `nthinjection` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `nextdate` varchar(100) NOT NULL,
  `skip` varchar(100) NOT NULL,
  `traditionalmessage` varchar(100) NOT NULL,
  `simplifiedmessage` varchar(100) NOT NULL,
  `engmessage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `vaccinedetail`
--

INSERT INTO `vaccinedetail` (`id`, `vaccineid`, `vaccinename1`, `vaccinename2`, `vaccinename3`, `totalnoofinjection`, `nthinjection`, `date`, `nextdate`, `skip`, `traditionalmessage`, `simplifiedmessage`, `engmessage`) VALUES
(68, 'VI 1471', '脊髓灰質炎疫苗', '脊髓灰质炎疫苗', 'POLIO VACCINE', '3', '1', '', '', '30', '信息', '信息', 'Message'),
(69, 'VI 1471', '脊髓灰質炎疫苗', '脊髓灰质炎疫苗', 'POLIO VACCINE', '3', '2', '', '', '60', '信息', '信息', 'Message'),
(95, 'VI 9273', '卡介苗', '卡介苗', 'BCG', '3', '1', '', '', '11', '卡介苗\r\n下一個注射期', '卡介苗\r\n下一个注射期為', 'BCG\r\nNext injection period will be'),
(96, 'VI 9273', '卡介苗', '卡介苗', 'BCG', '3', '2', '', '', '20', '卡介苗\r\n下一個注射期', '卡介苗\r\n下一个注射期為', 'BCG\r\nNext injection period will be'),
(109, 'VI 9395', '水痘疫苗 ', '水痘疫苗', 'Varicella vaccine', '1', '1', '', '', '0', '水痘疫苗 \r\n下一個注射期', '水痘疫苗\r\n下一个注射期為', 'Varicella vaccine\r\nNext injection period will be'),
(163, 'VI 7038', 'B型肝炎疫苗', ' 乙型肝炎疫苗', 'Hepatitis B vaccine', '2', '1', '', '', '31', 'B型肝炎疫苗\r\n下一個注射期为', ' 乙型肝炎疫苗\r\n下一个注射期為', 'Hepatitis B vaccine\r\nNext injection period will be'),
(164, 'VI 7038', 'B型肝炎疫苗', ' 乙型肝炎疫苗', 'Hepatitis B vaccine', '2', '2', '', '', 'end', 'B型肝炎疫苗\r\n下一個注射期为', ' 乙型肝炎疫苗\r\n下一个注射期為', 'Hepatitis B vaccine\r\nNext injection period will be'),
(170, 'VI 1574', '肺炎球菌', '肺炎球菌', 'Pneumococcal', '3', '1', '', '', '45', '肺炎球菌\r\n下一個注射期为', '肺炎球菌\r\n下一个注射期為', 'Pneumococcal\r\nNext injection period will be'),
(171, 'VI 1574', '肺炎球菌', '肺炎球菌', 'Pneumococcal', '3', '2', '', '', '75', '肺炎球菌\r\n下一個注射期为', '肺炎球菌\r\n下一个注射期為', 'Pneumococcal\r\nNext injection period will be'),
(172, 'VI 1574', '肺炎球菌', '肺炎球菌', 'Pneumococcal', '3', '3', '', '', 'end', '肺炎球菌\r\n下一個注射期为', '肺炎球菌\r\n下一个注射期為', 'Pneumococcal\r\nNext injection period will be'),
(225, 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '1', '', '', '15', '輪狀病毒疫苗\r\n下一個注射期为', '轮状病毒疫苗\r\n下一个注射期為', 'Rotavirus vaccine\r\nNext injection period will be'),
(226, 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '2', '', '', '30', '輪狀病毒疫苗\r\n下一個注射期为', '轮状病毒疫苗\r\n下一个注射期為', 'Rotavirus vaccine\r\nNext injection period will bebe'),
(227, 'VI 3592', '輪狀病毒疫苗', '轮状病毒疫苗', 'Rotavirus vaccine', '3', '3', '', '', 'end', '輪狀病毒疫苗\r\n下一個注射期为', '轮状病毒疫苗\r\n下一个注射期為', 'Rotavirus vaccine\r\nNext injection period will be'),
(228, 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '7', '1', '', '', '10', '腺病毒疫苗\r\n下一個注射期为', ' 腺病毒疫苗\r\n下一个注射期為', 'Adenovirus vaccine\r\nNext injection period will be'),
(229, 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '7', '2', '', '', '20', '腺病毒疫苗\r\n下一個注射期为', ' 腺病毒疫苗\r\n下一个注射期為', 'Adenovirus vaccine\r\nNext injection period will be'),
(230, 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '7', '3', '', '', '30', '腺病毒疫苗\r\n下一個注射期为', ' 腺病毒疫苗\r\n下一个注射期為', 'Adenovirus vaccine\r\nNext injection period will be'),
(231, 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '7', '4', '', '', '40', '腺病毒疫苗\r\n下一個注射期为', ' 腺病毒疫苗\r\n下一个注射期為', 'Adenovirus vaccine\r\nNext injection period will be'),
(233, 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '7', '5 ', '', '', '50', '下一個注射期为', '下一个注射期為', ''),
(234, 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '7', '6 ', '', '', '60', '下一個注射期为', '下一个注射期為', ''),
(240, 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', '7', '7 ', '', '', 'end', '腺病毒疫苗\r\n下一個注射期为', '腺病毒疫苗下一个注射期為', 'Adenovirus vaccineNext injection period will be'),
(244, 'VI 6952', '日本腦炎疫苗 ', '日本腦炎疫苗 ', 'Japanese encephalitis vaccine ', '3', '1', '', '', '50', '日本腦炎疫苗 \r\n下一個注射期为', '日本腦炎疫苗 \r\n下一个注射期為', 'Japanese encephalitis vaccine \r\nNext injection period will be'),
(245, 'VI 6952', '日本腦炎疫苗 ', '日本腦炎疫苗 ', 'Japanese encephalitis vaccine ', '3', '2', '', '', '60', '日本腦炎疫苗 \r\n下一個注射期为', '日本腦炎疫苗 \r\n下一个注射期為', 'Japanese encephalitis vaccine \r\nNext injection period will be'),
(246, 'VI 6952', '日本腦炎疫苗 ', '日本腦炎疫苗 ', 'Japanese encephalitis vaccine ', '3', '3 ', '', '', 'End', '日本腦炎疫苗 下一個注射期为', '日本腦炎疫苗 下一个注射期為', 'Japanese encephalitis vaccine Next injection period will be'),
(253, 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '5', '1', '', '', '60', '日本腦炎\r\n下一個注射期为', ' 日本脑炎\r\n下一个注射期為', 'Japanese encephalitis\r\nNext injection period will be'),
(254, 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '5', '2', '', '', '60', '日本腦炎\r\n下一個注射期为', ' 日本脑炎\r\n下一个注射期為', 'Japanese encephalitis\r\nNext injection period will be'),
(255, 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '5', '3 ', '', '', '60', '日本腦炎下一個注射期为', ' 日本脑炎下一个注射期為', 'Japanese encephalitisNext injection period will be'),
(261, 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '5', '4 ', '', '', '60', '日本腦炎\r\n下一個注射期為', ' 日本脑炎\r\n下一个注射期为', 'Japanese encephalitis\r\nNext injection period will be'),
(262, 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', '5', '5 ', '', '', 'end', '日本腦炎\r\n下一個注射期為', ' 日本脑炎\r\n下一个注射期为', 'Japanese encephalitis\r\nNext injection period will be'),
(263, 'VI 1471', '脊髓灰質炎疫苗', '脊髓灰质炎疫苗', 'POLIO VACCINE', '3', '3 ', '', '', 'end', '脊髓灰質炎疫苗\r\n下一個注射期為', '脊髓灰质炎疫苗\r\n下一个注射期为', 'POLIO VACCINE\r\nNext injection period will be'),
(269, 'VI 1273', 'testt', 'tests', 'teste', '2', '1', '', '', '20', 'testt\r\n下一個注射期为', 'tests\r\n下一个注射期為', 'teste\r\nNext injection period will be'),
(270, 'VI 1273', 'testt', 'tests', 'teste', '2', '2', '', '', 'end', 'testt\r\n下一個注射期为', 'tests\r\n下一个注射期為', 'teste\r\nNext injection period will be'),
(271, 'VI 9273', '卡介苗', '卡介苗', 'BCG', '3', '3 ', '', '', 'end', '卡介苗\r\n下一個注射期為', '卡介苗\r\n下一个注射期为', 'BCG\r\nNext injection period will be'),
(272, 'VI 5932', '流感疫苗', ' 流感疫苗', 'Influenza vaccine', '3', '1', '', '', '30', '流感疫苗\r\n下一個注射期为', ' 流感疫苗\r\n下一个注射期為', 'Influenza vaccine\r\nNext injection period will be'),
(273, 'VI 5932', '流感疫苗', ' 流感疫苗', 'Influenza vaccine', '3', '2', '', '', '30', '流感疫苗\r\n下一個注射期为', ' 流感疫苗\r\n下一个注射期為', 'Influenza vaccine\r\nNext injection period will be'),
(274, 'VI 5932', '流感疫苗', ' 流感疫苗', 'Influenza vaccine', '3', '3', '', '', 'end', '流感疫苗\r\n下一個注射期为', ' 流感疫苗\r\n下一个注射期為', 'Influenza vaccine\r\nNext injection period will be'),
(275, 'VI 0159', 'testing繁體', 'testing简体', 'testingEng', '1', '1', '', '', 'end', 'testing繁體\r\n下一個注射期为', 'testing简体\r\n下一个注射期為', 'testingEng\r\nNext injection period will be');

-- --------------------------------------------------------

--
-- 資料表結構 `vaccinetype`
--

CREATE TABLE `vaccinetype` (
  `id` int(100) NOT NULL,
  `vaccineid` varchar(100) NOT NULL,
  `vaccinename1` varchar(100) NOT NULL,
  `vaccinename2` varchar(100) NOT NULL,
  `vaccinename3` varchar(100) NOT NULL,
  `vaccinedescription` varchar(100) NOT NULL,
  `totalnoofinjection` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `vaccinetype`
--

INSERT INTO `vaccinetype` (`id`, `vaccineid`, `vaccinename1`, `vaccinename2`, `vaccinename3`, `vaccinedescription`, `totalnoofinjection`) VALUES
(22411, 'VI 2597', '疫苗名稱23', '疫苗名称23', 'Vaccine Name23', 'des23', '2'),
(22454, 'VI 6847', '腺病毒疫苗', ' 腺病毒疫苗', 'Adenovirus vaccine', 'Adenovirus cure', '4'),
(22407, 'VI 1471', '脊髓灰質炎疫苗', '脊髓灰质炎疫苗', 'POLIO VACCINE', 'for polio', '2'),
(22424, 'VI 9946', '疫苗名稱 (繁體): *', ' 疫苗名称 (简体): ', 'Vaccine Name (Eng): ', 'Vaccine Description: *', '1'),
(22425, 'VI 9273', '卡介苗', '卡介苗', 'BCG', 'for bcg', '2'),
(22427, 'VI 9395', '水痘疫苗 ', '水痘疫苗', 'Varicella vaccine', 'for Varicella', '1'),
(22428, 'VI 79', '乙型肝炎疫苗', '乙型肝炎疫苗', 'Hepatitis B Vaccine ', 'Hepatitis B Vaccine (3 Doses)', '3'),
(22453, 'VI 3592', 'Rotavirus vaccine', '輪狀病毒疫苗', '轮状病毒 疫苗', 'for Rotavirus', '3'),
(22452, 'VI 5192', 'today(繁體', 'today(简体', 'today(Eng', 'des', '3'),
(22451, 'VI 4980', 'July5繁體', 'July5简体', 'July5Eng', 'fsdf', '3'),
(22450, 'VI 9510', 'July5繁體', 'July5简体', 'July5Eng', 'July5', '5'),
(22480, 'VI 2961', '123', '123', '123', '123des', '3'),
(22481, 'VI 1456', '987', '987', '987', '987dec', '4'),
(22436, 'VI 7038', 'B型肝炎疫苗', ' 乙型肝炎疫苗', 'Hepatitis B vaccine', 'des', '2'),
(22441, 'VI 1574', '肺炎球菌', '肺炎球菌', 'Pneumococcal', 'Pneumococcal cure', '3'),
(22486, 'VI 0159', 'testing繁體', 'testing简体', 'testingEng', 'testing', '3'),
(22482, 'VI 3518', 'testtest', 'testtest', 'testtest', 'testtest', '1'),
(22483, 'VI 6425', '963', '963', '963', '963', '3'),
(22484, 'VI 1273', 'testt', 'tests', 'teste', 'testd', '2'),
(22485, 'VI 5932', '流感疫苗', ' 流感疫苗', 'Influenza vaccine', 'Cure for influenza', '3'),
(22466, 'VI 6952', '日本腦炎疫苗 ', '日本腦炎疫苗 ', 'Japanese encephalitis vaccine ', 'Cure Japanese encephalitis vaccine ', '2'),
(22478, 'VI 2039', '日本腦炎', ' 日本脑炎', 'Japanese encephalitis', 'For Japanese encephalitis', '2');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- 使用資料表 AUTO_INCREMENT `patientvaccine`
--
ALTER TABLE `patientvaccine`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;
--
-- 使用資料表 AUTO_INCREMENT `patientvaccinedetail`
--
ALTER TABLE `patientvaccinedetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;
--
-- 使用資料表 AUTO_INCREMENT `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;
--
-- 使用資料表 AUTO_INCREMENT `vaccinetype`
--
ALTER TABLE `vaccinetype`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22487;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
