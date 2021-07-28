-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP VIEW IF EXISTS `accessedtime`;
CREATE TABLE `accessedtime` (`MS` varchar(45), `Accessed` bigint(21));


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `MS` varchar(45) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Batch` int(1) NOT NULL,
  `STime` time NOT NULL,
  `ETime` time NOT NULL,
  `TDiff` time NOT NULL,
  `Date` date NOT NULL,
  `GrpNo` int(11) NOT NULL,
  `CenterNo` varchar(45) NOT NULL,
  `servers` varchar(255) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `data` (`No`, `MS`, `Name`, `Batch`, `STime`, `ETime`, `TDiff`, `Date`, `GrpNo`, `CenterNo`, `servers`) VALUES
(1,	'chrome',	'Goodluck',	1,	'15:54:00',	'16:03:00',	'00:09:00',	'2021-07-19',	1,	'',	'Station 1'),
(2,	'scratch',	'user9',	1,	'23:14:00',	'24:03:00',	'00:48:00',	'2021-07-19',	1,	'',	'Station 1'),
(3,	'chrome',	'Goodluck',	1,	'17:19:00',	'25:19:00',	'08:00:00',	'2021-07-19',	1,	'',	'Station 1'),
(4,	'Ms Excel',	'johnisuna',	1,	'07:30:00',	'30:38:00',	'23:08:00',	'2021-07-19',	1,	'',	'Station 1'),
(5,	'Ms Excel',	'Goodluck',	1,	'25:28:00',	'31:18:00',	'05:49:00',	'2021-07-19',	1,	'',	'Station 1'),
(6,	'Ms Excel',	'johnisuna',	1,	'31:06:00',	'31:51:00',	'00:45:00',	'2021-07-19',	1,	'',	'Station 1'),
(7,	'Ms Excel',	'johnisuna',	1,	'31:54:00',	'32:19:00',	'00:24:00',	'2021-07-19',	1,	'',	'Station 1'),
(8,	'Ms Word',	'johnisuna',	1,	'06:51:00',	'33:19:00',	'26:28:00',	'2021-07-19',	1,	'',	'Station 1'),
(9,	'chrome',	'Goodluck',	1,	'31:21:00',	'34:57:00',	'03:35:00',	'2021-07-19',	1,	'',	'Station 1'),
(10,	'Ms Excel',	'user9',	1,	'00:02:00',	'17:08:00',	'17:05:00',	'2021-07-19',	1,	'',	'Station 1'),
(11,	'sublime_text',	'user9',	1,	'33:40:00',	'17:08:00',	'43:27:00',	'2021-07-19',	1,	'',	'Station 1'),
(12,	'chrome',	'Goodluck',	1,	'48:56:00',	'18:16:00',	'29:20:00',	'2021-07-20',	1,	'',	'Station 1'),
(13,	'Ms Excel',	'Goodluck',	1,	'18:26:00',	'28:56:00',	'10:29:00',	'2021-07-20',	1,	'',	'Station 1'),
(14,	'chrome',	'user7',	1,	'31:32:00',	'47:06:00',	'15:34:00',	'2021-07-20',	1,	'',	'Station 1'),
(15,	'Ms Excel',	'Goodluck',	1,	'29:01:00',	'32:33:00',	'03:31:00',	'2021-07-20',	1,	'',	'Station 1'),
(16,	'Ms Excel',	'Goodluck',	1,	'32:39:00',	'33:09:00',	'00:30:00',	'2021-07-20',	1,	'',	'Station 1'),
(17,	'Ms PowerPoint',	'ANDONY LENGAI',	1,	'51:09:00',	'52:28:00',	'01:18:00',	'2021-07-20',	1,	'',	'Station 1'),
(18,	'Ms PowerPoint',	'ANDONY LENGAI',	1,	'03:46:00',	'05:59:00',	'02:12:00',	'2021-07-20',	1,	'',	'Station 1'),
(19,	'Ms Excel',	'ANDONY LENGAI',	1,	'02:27:00',	'06:05:00',	'03:37:00',	'2021-07-20',	1,	'',	'Station 1'),
(20,	'chrome',	'faraja',	1,	'13:51:00',	'04:23:00',	'50:32:00',	'2021-07-20',	1,	'',	'Station 1'),
(21,	'notepad',	'faraja',	1,	'11:53:00',	'04:24:00',	'52:30:00',	'2021-07-20',	1,	'',	'Station 1'),
(22,	'Ms Excel',	'RASHDAH',	1,	'34:01:00',	'35:05:00',	'01:03:00',	'2021-07-22',	1,	'',	'Station 1'),
(23,	'Ms Word',	'RASHDAH',	1,	'34:13:00',	'35:14:00',	'01:00:00',	'2021-07-22',	1,	'',	'Station 1'),
(24,	'Ms Excel',	'johnisuna',	1,	'03:26:00',	'03:53:00',	'00:27:00',	'2021-07-22',	1,	'',	'Station 1'),
(25,	'Ms Word',	'user11',	1,	'25:34:00',	'31:33:00',	'05:58:00',	'2021-07-22',	1,	'',	'Station 1'),
(26,	'Ms Excel',	'Goodluck',	1,	'18:17:00',	'57:32:00',	'39:14:00',	'2021-07-22',	1,	'',	'Station 1'),
(27,	'notepad',	'user3',	1,	'44:05:00',	'03:54:00',	'19:48:00',	'2021-07-22',	1,	'',	'Station 1'),
(28,	'Ms Word',	'johnisuna',	1,	'06:26:00',	'09:52:00',	'03:25:00',	'2021-07-22',	1,	'',	'Station 1'),
(29,	'Ms Excel',	'johnisuna',	1,	'04:02:00',	'09:55:00',	'05:53:00',	'2021-07-22',	1,	'',	'Station 1'),
(30,	'Ms PowerPoint',	'MACMILLAN GEOPHREY',	1,	'25:45:00',	'31:53:00',	'06:07:00',	'2021-07-22',	1,	'',	'Station 1'),
(31,	'Ms Word',	'MACMILLAN GEOPHREY',	1,	'32:14:00',	'33:02:00',	'00:48:00',	'2021-07-22',	1,	'',	'Station 1'),
(32,	'Ms Word',	'MACMILLAN GEOPHREY',	1,	'33:05:00',	'33:35:00',	'00:30:00',	'2021-07-22',	1,	'',	'Station 1'),
(33,	'Ms Word',	'MACMILLAN GEOPHREY',	1,	'33:38:00',	'39:55:00',	'06:16:00',	'2021-07-22',	1,	'',	'Station 1'),
(34,	'Ms Word',	'MACMILLAN GEOPHREY',	1,	'39:58:00',	'40:22:00',	'00:24:00',	'2021-07-22',	1,	'',	'Station 1'),
(35,	'chrome',	'MACMILLAN GEOPHREY',	1,	'10:53:00',	'51:22:00',	'40:28:00',	'2021-07-22',	1,	'',	'Station 1'),
(36,	'Ms Excel',	'Goodluck',	1,	'43:15:00',	'50:21:00',	'07:05:00',	'2021-07-23',	1,	'',	'Station 1'),
(37,	'Ms PowerPoint',	'user4',	1,	'55:31:00',	'56:19:00',	'00:48:00',	'2021-07-23',	1,	'',	'Station 1'),
(38,	'Ms Excel',	'user3',	1,	'15:49:00',	'17:19:00',	'01:30:00',	'2021-07-23',	1,	'',	'Station 1'),
(39,	'Ms Word',	'faraja',	1,	'27:04:00',	'30:47:00',	'03:43:00',	'2021-07-23',	1,	'',	'Station 1'),
(40,	'notepad',	'faraja',	1,	'30:56:00',	'31:42:00',	'00:45:00',	'2021-07-23',	1,	'',	'Station 1'),
(41,	'chrome',	'faraja',	1,	'31:09:00',	'35:13:00',	'04:04:00',	'2021-07-23',	1,	'',	'Station 1'),
(42,	'notepad',	'faraja',	1,	'35:22:00',	'44:59:00',	'09:36:00',	'2021-07-23',	1,	'',	'Station 1'),
(43,	'chrome',	'faraja',	1,	'45:29:00',	'06:01:00',	'20:31:00',	'2021-07-23',	1,	'',	'Station 1'),
(44,	'chrome',	'faraja',	1,	'12:14:00',	'59:15:00',	'47:00:00',	'2021-07-23',	1,	'',	'Station 1'),
(45,	'notepad',	'faraja',	1,	'06:10:00',	'12:01:00',	'05:51:00',	'2021-07-23',	1,	'',	'Station 1'),
(46,	'chrome',	'E3empower',	1,	'38:05:00',	'54:29:00',	'16:23:00',	'2021-07-19',	1,	'',	'Station 2'),
(47,	'Ms Word',	'joyce',	1,	'48:42:00',	'49:15:00',	'00:33:00',	'2021-07-22',	1,	'',	'Station 2'),
(48,	'Ms Word',	'joyce',	1,	'49:19:00',	'00:32:00',	'11:13:00',	'2021-07-22',	1,	'',	'Station 2'),
(49,	'Ms Word',	'joyce',	1,	'00:41:00',	'02:42:00',	'02:00:00',	'2021-07-22',	1,	'',	'Station 2'),
(50,	'Ms Word',	'joyce',	1,	'03:33:00',	'29:51:00',	'26:17:00',	'2021-07-22',	1,	'',	'Station 2'),
(51,	'Ms Word',	'joyce',	1,	'29:55:00',	'30:29:00',	'00:33:00',	'2021-07-22',	1,	'',	'Station 2'),
(52,	'Ms Word',	'joyce',	1,	'26:55:00',	'38:05:00',	'11:10:00',	'2021-07-23',	1,	'',	'Station 2'),
(53,	'Ms Word',	'joyce',	1,	'38:27:00',	'39:06:00',	'00:39:00',	'2021-07-23',	1,	'',	'Station 2'),
(54,	'Hour Of Code',	'user 6',	1,	'47:39:00',	'58:16:00',	'10:37:00',	'2021-07-23',	1,	'',	'Station 2'),
(55,	'Ms Word',	'joyce',	1,	'39:09:00',	'00:54:00',	'21:45:00',	'2021-07-23',	1,	'',	'Station 2'),
(56,	'Ms Word',	'joyce',	1,	'00:57:00',	'03:02:00',	'02:04:00',	'2021-07-23',	1,	'',	'Station 2'),
(57,	'Ms Word',	'joyce',	1,	'03:05:00',	'04:38:00',	'01:33:00',	'2021-07-23',	1,	'',	'Station 2'),
(58,	'Ms Word',	'joyce',	1,	'04:41:00',	'24:40:00',	'19:58:00',	'2021-07-23',	1,	'',	'Station 2'),
(59,	'chrome',	'user7',	1,	'35:32:00',	'00:11:00',	'24:38:00',	'2021-07-16',	1,	'',	'Station 3'),
(60,	'Ms Word',	'Administrator',	1,	'05:29:00',	'09:18:00',	'03:49:00',	'2021-07-19',	1,	'',	'Station 3'),
(61,	'Ms Word',	'eulalia',	1,	'58:20:00',	'10:05:00',	'11:45:00',	'2021-07-19',	1,	'',	'Station 3'),
(62,	'Ms Word',	'eulalia',	1,	'10:08:00',	'17:04:00',	'06:55:00',	'2021-07-19',	1,	'',	'Station 3'),
(63,	'Ms Word',	'Administrator',	1,	'09:29:00',	'20:01:00',	'10:32:00',	'2021-07-19',	1,	'',	'Station 3'),
(64,	'Ms Word',	'Administrator',	1,	'20:07:00',	'23:48:00',	'03:40:00',	'2021-07-19',	1,	'',	'Station 3'),
(65,	'Ms Word',	'Administrator',	1,	'23:51:00',	'24:54:00',	'01:03:00',	'2021-07-19',	1,	'',	'Station 3'),
(66,	'Ms Word',	'Administrator',	1,	'24:57:00',	'26:27:00',	'01:30:00',	'2021-07-19',	1,	'',	'Station 3'),
(67,	'Ms Word',	'Administrator',	1,	'26:30:00',	'31:34:00',	'05:04:00',	'2021-07-19',	1,	'',	'Station 3'),
(68,	'Ms Word',	'eulalia',	1,	'17:07:00',	'34:32:00',	'17:25:00',	'2021-07-19',	1,	'',	'Station 3'),
(69,	'Ms Word',	'Administrator',	1,	'31:38:00',	'36:27:00',	'04:49:00',	'2021-07-19',	1,	'',	'Station 3'),
(70,	'Ms Word',	'eulalia',	1,	'36:21:00',	'39:46:00',	'03:25:00',	'2021-07-19',	1,	'',	'Station 3'),
(71,	'Ms Word',	'Administrator',	1,	'36:45:00',	'41:47:00',	'05:02:00',	'2021-07-19',	1,	'',	'Station 3'),
(72,	'Ms Word',	'Administrator',	1,	'41:50:00',	'42:44:00',	'00:54:00',	'2021-07-19',	1,	'',	'Station 3'),
(73,	'chrome',	'user7',	1,	'40:19:00',	'56:37:00',	'16:18:00',	'2021-07-19',	1,	'',	'Station 3'),
(74,	'sublime_text',	'user7',	1,	'28:44:00',	'57:25:00',	'28:40:00',	'2021-07-19',	1,	'',	'Station 3'),
(75,	'Ms Word',	'eulalia',	1,	'40:15:00',	'41:59:00',	'01:44:00',	'2021-07-20',	1,	'',	'Station 3'),
(76,	'Ms Word',	'eulalia',	1,	'42:15:00',	'48:44:00',	'06:29:00',	'2021-07-20',	1,	'',	'Station 3'),
(77,	'Ms Word',	'eulalia',	1,	'48:47:00',	'55:29:00',	'06:41:00',	'2021-07-20',	1,	'',	'Station 3'),
(78,	'Ms Word',	'eulalia',	1,	'55:32:00',	'02:59:00',	'07:26:00',	'2021-07-20',	1,	'',	'Station 3'),
(79,	'Ms Word',	'eulalia',	1,	'03:02:00',	'06:00:00',	'02:58:00',	'2021-07-20',	1,	'',	'Station 3'),
(80,	'Ms Word',	'eulalia',	1,	'06:09:00',	'07:37:00',	'01:27:00',	'2021-07-20',	1,	'',	'Station 3'),
(81,	'Ms Word',	'eulalia',	1,	'07:40:00',	'19:02:00',	'11:22:00',	'2021-07-20',	1,	'',	'Station 3'),
(82,	'Ms Word',	'eulalia',	1,	'19:08:00',	'29:39:00',	'10:31:00',	'2021-07-20',	1,	'',	'Station 3'),
(83,	'Ms Word',	'eulalia',	1,	'29:42:00',	'35:57:00',	'06:14:00',	'2021-07-20',	1,	'',	'Station 3'),
(84,	'Ms Word',	'eulalia',	1,	'36:00:00',	'37:36:00',	'01:36:00',	'2021-07-20',	1,	'',	'Station 3'),
(85,	'notepad',	'eulalia',	1,	'39:01:00',	'39:07:00',	'00:06:00',	'2021-07-20',	1,	'',	'Station 3'),
(86,	'Ms Word',	'eulalia',	1,	'39:13:00',	'39:46:00',	'00:33:00',	'2021-07-20',	1,	'',	'Station 3'),
(87,	'Ms Word',	'eulalia',	1,	'41:08:00',	'44:21:00',	'03:13:00',	'2021-07-20',	1,	'',	'Station 3'),
(88,	'Ms Word',	'eulalia',	1,	'44:24:00',	'46:09:00',	'01:45:00',	'2021-07-20',	1,	'',	'Station 3'),
(89,	'Ms Word',	'eulalia',	1,	'47:04:00',	'57:49:00',	'10:45:00',	'2021-07-20',	1,	'',	'Station 3'),
(90,	'Ms Word',	'eulalia',	1,	'58:29:00',	'01:00:00',	'02:31:00',	'2021-07-20',	1,	'',	'Station 3'),
(91,	'Ms Word',	'eulalia',	1,	'01:12:00',	'02:55:00',	'01:42:00',	'2021-07-20',	1,	'',	'Station 3'),
(92,	'Ms Word',	'eulalia',	1,	'02:58:00',	'04:04:00',	'01:06:00',	'2021-07-20',	1,	'',	'Station 3'),
(93,	'Ms Word',	'eulalia',	1,	'04:19:00',	'10:28:00',	'06:08:00',	'2021-07-20',	1,	'',	'Station 3'),
(94,	'Ms Word',	'eulalia',	1,	'10:31:00',	'29:07:00',	'18:36:00',	'2021-07-20',	1,	'',	'Station 3'),
(95,	'Ms Word',	'eulalia',	1,	'29:19:00',	'40:48:00',	'11:28:00',	'2021-07-20',	1,	'',	'Station 3'),
(96,	'Ms Word',	'eulalia',	1,	'41:51:00',	'44:58:00',	'03:07:00',	'2021-07-20',	1,	'',	'Station 3'),
(97,	'Ms Word',	'eulalia',	1,	'45:01:00',	'47:08:00',	'02:06:00',	'2021-07-20',	1,	'',	'Station 3'),
(98,	'Ms Word',	'eulalia',	1,	'47:11:00',	'52:22:00',	'05:10:00',	'2021-07-20',	1,	'',	'Station 3'),
(99,	'Ms Word',	'eulalia',	1,	'53:05:00',	'56:08:00',	'03:03:00',	'2021-07-20',	1,	'',	'Station 3'),
(100,	'Ms Word',	'eulalia',	1,	'56:11:00',	'59:37:00',	'03:25:00',	'2021-07-20',	1,	'',	'Station 3'),
(101,	'Ms Word',	'eulalia',	1,	'00:31:00',	'02:53:00',	'02:21:00',	'2021-07-20',	1,	'',	'Station 3'),
(102,	'Ms Word',	'eulalia',	1,	'03:26:00',	'05:21:00',	'01:54:00',	'2021-07-20',	1,	'',	'Station 3'),
(103,	'Ms Word',	'eulalia',	1,	'05:24:00',	'06:54:00',	'01:30:00',	'2021-07-20',	1,	'',	'Station 3'),
(104,	'chrome',	'Administrator',	1,	'24:53:00',	'38:21:00',	'13:27:00',	'2021-07-22',	1,	'',	'Station 3'),
(105,	'Ms Word',	'eulalia',	1,	'20:38:00',	'38:28:00',	'17:49:00',	'2021-07-22',	1,	'',	'Station 3'),
(106,	'Ms Word',	'eulalia',	1,	'38:40:00',	'38:52:00',	'00:12:00',	'2021-07-22',	1,	'',	'Station 3'),
(107,	'Ms Word',	'eulalia',	1,	'39:01:00',	'43:09:00',	'04:07:00',	'2021-07-22',	1,	'',	'Station 3'),
(108,	'Ms Word',	'eulalia',	1,	'43:24:00',	'43:45:00',	'00:21:00',	'2021-07-22',	1,	'',	'Station 3'),
(109,	'Ms Word',	'eulalia',	1,	'43:57:00',	'44:33:00',	'00:36:00',	'2021-07-22',	1,	'',	'Station 3'),
(110,	'Ms Word',	'eulalia',	1,	'45:09:00',	'45:30:00',	'00:21:00',	'2021-07-22',	1,	'',	'Station 3'),
(111,	'Ms Word',	'eulalia',	1,	'45:55:00',	'47:22:00',	'01:27:00',	'2021-07-22',	1,	'',	'Station 3');

DROP VIEW IF EXISTS `data_ci`;
CREATE TABLE `data_ci` (`No` int(11), `Name` varchar(45), `MS` varchar(45), `CenterNo` varchar(45), `CenterName` varchar(45), `ClusterNo` varchar(45), `ClusterName` varchar(45), `STime` time, `ETime` time, `TDiff` time, `Date` date);


DROP VIEW IF EXISTS `data_group`;
CREATE TABLE `data_group` (`No` int(11), `Name` varchar(45), `MS` varchar(45), `GrpNo` int(11), `batch` int(1), `GrpName` varchar(45), `STime` time, `ETime` time, `TDiff` time, `Date` date, `servers` varchar(255));


DROP VIEW IF EXISTS `data_notepad_perfomance`;
CREATE TABLE `data_notepad_perfomance` (`Name` varchar(45), `MS` varchar(45), `TIME` time, `Status` varchar(10), `GrpNo` int(11), `MINUTES` int(2));


DROP VIEW IF EXISTS `data_perfomance`;
CREATE TABLE `data_perfomance` (`Name` varchar(45), `MS` varchar(45), `Status` varchar(10), `GrpNo` int(11), `Hours` decimal(2,0), `batch` int(1), `Minutes` int(2), `Original-Time` time);


DROP VIEW IF EXISTS `data_ppt_perfomance`;
CREATE TABLE `data_ppt_perfomance` (`Name` varchar(45), `MS` varchar(45), `TIME` time, `Status` varchar(10), `GrpNo` int(11), `HOURS` int(2));


DROP VIEW IF EXISTS `data_process`;
CREATE TABLE `data_process` (`No` int(11), `Name` varchar(45), `MS` varchar(45), `GrpNo` int(11), `CenterNo` varchar(45), `STime` time, `ETime` time, `TIMEDIFF` time, `Date` date);


DROP VIEW IF EXISTS `data_summary`;
CREATE TABLE `data_summary` (`Status` varchar(10), `Total` bigint(21), `grpNo` int(11), `batch` int(1));


DROP VIEW IF EXISTS `excel_perfomance`;
CREATE TABLE `excel_perfomance` (`Name` varchar(45), `MS` varchar(45), `Status` varchar(10), `GrpNo` int(11), `Hours` decimal(2,0), `batch` int(1), `Minutes` int(2), `Original-Time` time, `servers` varchar(255));


DROP VIEW IF EXISTS `hourofcode_perfomance`;
CREATE TABLE `hourofcode_perfomance` (`Name` varchar(45), `MS` varchar(45), `Status` varchar(10), `GrpNo` int(11), `Hours` decimal(2,0), `batch` int(1), `Minutes` int(2), `Original-Time` time, `servers` varchar(255));


DROP VIEW IF EXISTS `ms_perfomance`;
CREATE TABLE `ms_perfomance` (`Name` varchar(45), `MS` varchar(45), `Status` varchar(10), `GrpNo` int(11), `Hours` decimal(2,0), `batch` int(1), `Minutes` int(2), `Original-Time` time, `servers` varchar(255));


DROP VIEW IF EXISTS `notepad_perfomance`;
CREATE TABLE `notepad_perfomance` (`Name` varchar(45), `MS` varchar(45), `Status` varchar(10), `GrpNo` int(11), `Hours` decimal(2,0), `batch` int(1), `Minutes` int(2), `Original-Time` time, `servers` varchar(255));


DROP VIEW IF EXISTS `ppt_perfomance`;
CREATE TABLE `ppt_perfomance` (`Name` varchar(45), `MS` varchar(45), `Status` varchar(10), `GrpNo` int(11), `Hours` decimal(2,0), `batch` int(1), `Minutes` int(2), `Original-Time` time, `servers` varchar(255));


DROP VIEW IF EXISTS `rogic_perfomance`;
CREATE TABLE `rogic_perfomance` (`Name` varchar(45), `MS` varchar(45), `Status` varchar(10), `GrpNo` int(11), `Hours` decimal(2,0), `batch` int(1), `Minutes` int(2), `Original-Time` time, `servers` varchar(255));


DROP VIEW IF EXISTS `scratch_perfomance`;
CREATE TABLE `scratch_perfomance` (`Name` varchar(45), `MS` varchar(45), `Status` varchar(10), `GrpNo` int(11), `Hours` decimal(2,0), `batch` int(1), `Minutes` int(2), `Original-Time` time, `servers` varchar(255));


DROP TABLE IF EXISTS `tblcenter`;
CREATE TABLE `tblcenter` (
  `CenterNo` varchar(45) NOT NULL,
  `ClusterNo` varchar(45) DEFAULT NULL,
  `CenterName` varchar(45) DEFAULT NULL,
  `PDName` varchar(45) DEFAULT NULL,
  `PDPhone` varchar(45) DEFAULT NULL,
  `PDEmail` varchar(45) DEFAULT NULL,
  `centTechName` varchar(45) DEFAULT NULL,
  `centTechPhone` varchar(45) DEFAULT NULL,
  `centTechEmail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CenterNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tblcenter` (`CenterNo`, `ClusterNo`, `CenterName`, `PDName`, `PDPhone`, `PDEmail`, `centTechName`, `centTechPhone`, `centTechEmail`) VALUES
('TZ00100',	'9',	'TAG BETHEL',	'Joyce Mono',	'2.55754E+11',	'joycemono.tz0100@gmail.com',	NULL,	NULL,	NULL),
('TZ00102',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
('TZ00112',	'2',	'TAG Karatu ',	'Lucy Paul Kinabo',	'2.55755E+11',	'lkinabo.tz112@gmail.com',	NULL,	NULL,	NULL),
('TZ00135',	'3',	'TAG MPWAPWA',	'JOHN NDUTTU',	'629642562',	'jmbuttu@icps.or.tz ,jmbuttu.tz0135@gmail.com ',	NULL,	NULL,	NULL),
('TZ00136',	'1',	'TAG KITETE',	'Abel Yohana',	'2.55757E+11',	'ayohana.tz136@gmail.com',	NULL,	NULL,	NULL),
('TZ00138',	'1',	'TAG MARANATHA',	'TIMOTHY MWAKIMBWALA',	'2.55758E+11',	'tmwakimbwala.tz138@gmail.com',	NULL,	NULL,	NULL),
('TZ00141',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
('TZ00206',	'9',	'KIMANDOLU',	'Adam',	NULL,	NULL,	NULL,	NULL,	NULL),
('TZ00212',	'9',	'ELCT UNGALTD',	'Mr. Msafiri',	NULL,	NULL,	NULL,	NULL,	NULL),
('TZ00213',	'11',	'ELCT SAME',	'GILIARD MKUMBWA',	'712829595',	'gmkumbwa.tz213@gmail.com',	NULL,	NULL,	NULL),
('TZ00219',	'5',	'ELCT KONGWA',	'MR NJAU',	'2.55787E+11',	'cnjau.tz219@gmail.com',	NULL,	NULL,	NULL),
('TZ00220',	'4',	'KKKT Kateshi',	'Joseph Ginawe',	'2.55786E+11',	'elct.tz0220@gmail.com',	NULL,	NULL,	NULL),
('TZ00225',	'2',	'ELCT OLDEAN',	'ELDA ISRAEL',	'2.5577E+11',	'eisrael.tz225@gmail.com',	NULL,	NULL,	NULL),
('TZ00238',	'11',	'ELCT SPILLWAY',	'NELSON URASSA',	'762556519',	'nurassa.tz238@gmail.com',	NULL,	NULL,	NULL),
('TZ00239',	'3',	'ELCT MPWAPWA',	'Social Worker (Frank)',	'712213020',	'fkibendera.tz0239@gmail.com',	NULL,	NULL,	NULL),
('TZ00251',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
('TZ00301',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
('TZ00303',	'9',	'ST ADREW',	'Mr Abraham',	'2.55787E+11',	'invalid Number',	NULL,	NULL,	NULL),
('TZ00315',	'5',	'ST. JAMES KONGWA',	'MR MNG\'ONG\'OSE',	'2.55785E+11',	'cmngongose.tz315@gmail.com',	NULL,	NULL,	NULL),
('TZ00339',	'3',	'ST. PAUL MPWAPWA',	'CORNELIO NDATILA',	'621167838',	'kndatila@icps.or.tz ,kndatila.tz339@gmail.com',	NULL,	NULL,	NULL),
('TZ00340',	'3',	'ALL SAITS MPWAPWA',	'STEPHEN NGAILO',	'713716046',	'matekha2005@gmail.com',	NULL,	NULL,	NULL),
('TZ00342',	'1',	'ANGLICAN ISEVYA',	'EMMANUEL RUSSOTA',	'2.55757E+11',	'madidirussota@yahoo.com',	NULL,	NULL,	NULL),
('TZ00403',	'4',	'ELIM PENTCOST',	'Abusalim',	NULL,	'elimtz0403katesh@gmail.com',	NULL,	NULL,	NULL),
('TZ00500',	'9',	'BAPTIST LONGIDO',	'Amadeus',	'2.55757E+11',	'unavailable',	NULL,	NULL,	NULL),
('TZ00505',	'9',	'LONGIDO BAPTIST',	'AMADEUS MUNISHI',	'2.55757E+11',	'amunishitz505@gmail.com',	NULL,	NULL,	NULL),
('TZ00507',	'1',	'BAPTIST ISEVYA',	'Roland Robert',	'2.55657E+11',	'rrobert.tz0507@gmail.com',	NULL,	NULL,	NULL),
('TZ00557',	'1',	'EFESO BAPTIST',	'Wallace Masanja',	'2.55759E+11',	'wmasanja.tz557@gmail.com',	NULL,	NULL,	NULL),
('TZ00558',	'1',	'MORAVIAN MILUMBANI',	'Christopher Mkondya',	'2.55766E+11',	'cmkondya.tz558@gmail.com',	NULL,	NULL,	NULL),
('TZ00559',	'1',	'MORAVIAN CHEMCHEM',	'LAZARO  MAYAN',	'2.55767E+11',	'lmayan.tz559@gmail.com',	NULL,	NULL,	NULL),
('TZ00601',	'9',	'PAG UNGA LTD STUDENT CENTER',	'Mr Yona',	'2.55767E+11',	'yonahkaaya@gmail.com',	NULL,	NULL,	NULL),
('TZ00604',	'4',	'PAG KATESHI',	'Farayo Paulo',	'255788357677	',	'pagtz0604katesh@gmail.com',	NULL,	NULL,	NULL),
('TZ00605',	'9',	'ZION CITY',	'Furaha',	'2.55787E+11',	'furahahappe.tz0605@gmail.com',	NULL,	NULL,	NULL),
('TZ00651',	'4',	'PCA KATESHI',	'Andrew Emmanuel ',	'255789587068	',	'tz0651pcakatesh@gmail.com',	NULL,	NULL,	NULL),
('TZ00660',	'5',	'EAGT KONGWA',	'Vumi',	'2.55757E+11',	'Hmololo.tz660@gmail.com',	NULL,	NULL,	NULL),
('TZ00667',	'3',	'EAGT MPWAPWA',	'ARUNA BRITON MWAISONGWA',	'652776117',	'amwaisongwa.tz0667@gmail.com',	NULL,	NULL,	NULL),
('TZ00668',	'1',	'EAGT KILOLENI',	'Saimon  Boniphace ',	'2.55753E+11',	'sboniphace.tz0668@gmail.com',	NULL,	NULL,	NULL),
('TZ00673',	'1',	'EAGT RELI',	'PAUL HEZRON',	'2.55756E+11',	'phezron.tz673@gmail.com',	NULL,	NULL,	NULL),
('TZ00802',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
('TZ00805',	'11',	'KLPU SAME',	'Mr. Daniel',	'2.55787E+11',	'klpusame.tz805@gmail.com',	NULL,	NULL,	NULL),
('TZ00812',	'4',	'FPCT KATESHI',	'Boaz Mathias',	'2.55785E+11',	'fpctkatesh.812@gmail.com',	NULL,	NULL,	NULL),
('TZ00820',	'1',	'FPCT NG\'AMBO',	'SULEIMAN H. HALLETU',	'2.55764E+11',	'shalletu.tz820@gmail.com',	NULL,	NULL,	NULL),
('TZ00822',	'1',	'FPCT RUFITA',	'ROSE SICHILIMA',	'2.55756E+11',	'rsichilima.tz822@gmail.com',	NULL,	NULL,	NULL),
('TZ00950',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
('TZ00955',	'7',	'AICT ILEMELA',	'Festo Nyala Kisusi ',	'754547689',	'fkisusi.tz955@gmail.com',	NULL,	NULL,	NULL),
('TZ00959',	'1',	'AICT KITETE',	'NAOMI LWENGE',	'255758134074 ',	'nlwenge.tz959@gmail.com',	NULL,	NULL,	NULL),
('TZ0103',	'9',	'GALILAYA NGARAMTONI',	'Mr. Peter Laizer',	'2.55769E+11',	'peterlaizer.tz103@gmail.com',	NULL,	NULL,	NULL),
('TZ0113',	'11',	'TAG SAME',	'Mary',	'2.55658E+11',	'marygilbert.tz0113@gmail.com',	NULL,	NULL,	NULL),
('TZ0134',	'2',	'TAG BASHAI',	'Christopher S. Batuta',	'2.55768E+11',	'cbatutas.tz134@icptz.org',	NULL,	NULL,	NULL),
('TZ0201',	'9',	'KIJENGE LUTHERAN CENTER',	'Ombeni Safael',	'2.55752E+11',	'ombenisifaeli.tz0201@gmail.com',	NULL,	NULL,	NULL),
('TZ0400',	'9',	'ELIM PENTEKOSTE',	'Mr Antony',	'2.55763E+11',	'ambise.tz400@gmail.com',	NULL,	NULL,	NULL),
('TZ0402',	'2',	'ELIM PENTECOSTE',	'Ahadi Fanuel',	'2.55767E+11',	'afanuel.tz402@gmail.com',	NULL,	NULL,	NULL),
('TZ0600',	'9',	'PAG NJIRO Student',	'Neema',	'2.55769E+11',	'neybenedicto.tz0600@gmail.com',	NULL,	NULL,	NULL),
('TZ0700',	'9',	'MENONITE',	'Elisante',	'2.55767E+11',	'elisantedaniel.tz0700@gmail.com',	NULL,	NULL,	NULL),
('TZXAR5',	'9',	'TAG UNGALIMITED',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
('TZXXX1',	'11',	'NYUMBA YA MUNGU',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
('TZXXX4',	'9',	'TIMBOLO',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `tblcluster`;
CREATE TABLE `tblcluster` (
  `ClusterNo` varchar(45) NOT NULL,
  `clusterName` varchar(45) DEFAULT NULL,
  `PFName` varchar(45) DEFAULT NULL,
  `PFEmail` varchar(45) DEFAULT NULL,
  `PFPhone` varchar(45) DEFAULT NULL,
  `zID` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ClusterNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tblcluster` (`ClusterNo`, `clusterName`, `PFName`, `PFEmail`, `PFPhone`, `zID`) VALUES
('1',	'Tabora',	'Janeth Shayo',	'jshayo@tz.ci.org',	'255754910971',	'1'),
('10',	'Longido.',	'Michael Balele',	NULL,	'255754456133',	'1'),
('11',	'Same',	'Mr Boaz',	'bsayayi@tz.ci.org',	'255784898140',	NULL),
('12',	'Central Arusha',	NULL,	NULL,	NULL,	NULL),
('13',	'Southern Arusha',	NULL,	NULL,	NULL,	NULL),
('14',	'Northen Arusha',	NULL,	NULL,	NULL,	NULL),
('2',	'Karatu',	'Andrew Msegua ',	'amsegua@tz.ci.org',	'255767033871',	'2'),
('3',	'Mpwapwa',	'David Siwale',	'dsiwale@tz.ci.org',	'255759927802',	'3'),
('4',	'Kateshi',	'Erasto Malila ',	'emalila@tz.ci.org',	'255754597023',	'4'),
('5',	'Kongwa',	'Maximina S. Goa',	'MGoa@tz.ci.org',	NULL,	NULL),
('6',	'Nyumba Ya Mungu',	NULL,	NULL,	NULL,	NULL),
('7',	'Mwanza',	'SUZAN GOLUGWA',	'Sgolugwa@tz.ci.org',	'255754479644',	NULL),
('9',	'Arusha',	'Tinde H. Bahunde',	'TBahunde@tz.ci.org',	'255754544279',	NULL);

DROP TABLE IF EXISTS `tblgroup`;
CREATE TABLE `tblgroup` (
  `grpNo` int(11) NOT NULL AUTO_INCREMENT,
  `grpName` varchar(45) NOT NULL,
  PRIMARY KEY (`grpNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tblgroup` (`grpNo`, `grpName`) VALUES
(1,	'E3A'),
(2,	'WAILES'),
(3,	'MBALIZI'),
(4,	'COBET'),
(5,	'CTS'),
(6,	'AGHS');

DROP VIEW IF EXISTS `totaltimeperpackage`;
CREATE TABLE `totaltimeperpackage` (`MS` varchar(45), `TDiff` time);


DROP TABLE IF EXISTS `accessedtime`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `accessedtime` AS select `data`.`MS` AS `MS`,count(`data`.`MS`) AS `Accessed` from `data` group by `data`.`MS`;

DROP TABLE IF EXISTS `data_ci`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `data_ci` AS select `data`.`No` AS `No`,`data`.`Name` AS `Name`,`data`.`MS` AS `MS`,`data`.`CenterNo` AS `CenterNo`,`tblcenter`.`CenterName` AS `CenterName`,`tblcluster`.`ClusterNo` AS `ClusterNo`,`tblcluster`.`clusterName` AS `ClusterName`,`data`.`STime` AS `STime`,`data`.`ETime` AS `ETime`,`data`.`TDiff` AS `TDiff`,`data`.`Date` AS `Date` from ((`data` join `tblcenter` on(convert(`tblcenter`.`CenterNo` using utf8mb4) = `data`.`CenterNo`)) join `tblcluster` on(`tblcluster`.`ClusterNo` = `tblcenter`.`ClusterNo`));

DROP TABLE IF EXISTS `data_group`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `data_group` AS select `data`.`No` AS `No`,`data`.`Name` AS `Name`,`data`.`MS` AS `MS`,`data`.`GrpNo` AS `GrpNo`,`data`.`Batch` AS `batch`,`tblgroup`.`grpName` AS `GrpName`,`data`.`STime` AS `STime`,`data`.`ETime` AS `ETime`,`data`.`TDiff` AS `TDiff`,`data`.`Date` AS `Date`,`data`.`servers` AS `servers` from (`data` join `tblgroup` on(`tblgroup`.`grpNo` = `data`.`GrpNo`));

DROP TABLE IF EXISTS `data_notepad_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `data_notepad_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,sec_to_time(sum(`data_group`.`TDiff`)) AS `TIME`,if(minute(sec_to_time(sum(`data_group`.`TDiff`))) > 30,'Finished',if(minute(sec_to_time(sum(`data_group`.`TDiff`))) > 20,'Average',if(minute(sec_to_time(sum(`data_group`.`TDiff`))) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,minute(sec_to_time(sum(`data_group`.`TDiff`))) AS `MINUTES` from `data_group` where `data_group`.`MS` = 'Notepad' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `data_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `data_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,if(round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) > 10,'Finished',if(round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) > 5,'Average',if(round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) AS `Hours`,`data_group`.`batch` AS `batch`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `Minutes`,sec_to_time(sum(`data_group`.`TDiff`)) AS `Original-Time` from `data_group` where `data_group`.`MS` = 'Ms Word' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `data_ppt_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `data_ppt_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,sec_to_time(sum(`data_group`.`TDiff`)) AS `TIME`,if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 8,'Finished',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 4,'Average',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `HOURS` from `data_group` where `data_group`.`MS` = 'Ms PowerPoint' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `data_process`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `data_process` AS select `data`.`No` AS `No`,`data`.`Name` AS `Name`,`data`.`MS` AS `MS`,`data`.`GrpNo` AS `GrpNo`,`data`.`CenterNo` AS `CenterNo`,`data`.`STime` AS `STime`,`data`.`ETime` AS `ETime`,timediff(`data`.`ETime`,`data`.`STime`) AS `TIMEDIFF`,`data`.`Date` AS `Date` from `data` limit 10;

DROP TABLE IF EXISTS `data_summary`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `data_summary` AS select `data_perfomance`.`Status` AS `Status`,count(0) AS `Total`,`data_perfomance`.`GrpNo` AS `grpNo`,`data_perfomance`.`batch` AS `batch` from `data_perfomance` group by `data_perfomance`.`Status`;

DROP TABLE IF EXISTS `excel_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `excel_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 450,'Finished',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 250,'Average',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) AS `Hours`,`data_group`.`batch` AS `batch`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `Minutes`,sec_to_time(sum(`data_group`.`TDiff`)) AS `Original-Time`,`data_group`.`servers` AS `servers` from `data_group` where `data_group`.`MS` = 'MS Excel' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `hourofcode_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `hourofcode_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 40,'Finished',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 20,'Average',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) AS `Hours`,`data_group`.`batch` AS `batch`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `Minutes`,sec_to_time(sum(`data_group`.`TDiff`)) AS `Original-Time`,`data_group`.`servers` AS `servers` from `data_group` where `data_group`.`MS` = 'Hour of Code' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `ms_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `ms_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 500,'Finished',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 300,'Average',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) AS `Hours`,`data_group`.`batch` AS `batch`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `Minutes`,sec_to_time(sum(`data_group`.`TDiff`)) AS `Original-Time`,`data_group`.`servers` AS `servers` from `data_group` where `data_group`.`MS` = 'MS Word' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `notepad_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `notepad_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,if(round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) > 10,'Finished',if(round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) > 5,'Average',if(round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) AS `Hours`,`data_group`.`batch` AS `batch`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `Minutes`,sec_to_time(sum(`data_group`.`TDiff`)) AS `Original-Time`,`data_group`.`servers` AS `servers` from `data_group` where `data_group`.`MS` = 'notepad' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `ppt_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `ppt_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 150,'Finished',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 90,'Average',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) AS `Hours`,`data_group`.`batch` AS `batch`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `Minutes`,sec_to_time(sum(`data_group`.`TDiff`)) AS `Original-Time`,`data_group`.`servers` AS `servers` from `data_group` where `data_group`.`MS` = 'MS PowerPoint' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `rogic_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `rogic_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 250,'Finished',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 200,'Average',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) AS `Hours`,`data_group`.`batch` AS `batch`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `Minutes`,sec_to_time(sum(`data_group`.`TDiff`)) AS `Original-Time`,`data_group`.`servers` AS `servers` from `data_group` where `data_group`.`MS` = 'New Rogic' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `scratch_perfomance`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `scratch_perfomance` AS select `data_group`.`Name` AS `Name`,`data_group`.`MS` AS `MS`,if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 300,'Finished',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 200,'Average',if(hour(sec_to_time(sum(`data_group`.`TDiff`))) > 0,'Incomplete','Absent'))) AS `Status`,`data_group`.`GrpNo` AS `GrpNo`,round(hour(sec_to_time(sum(`data_group`.`TDiff`))) / 60,0) AS `Hours`,`data_group`.`batch` AS `batch`,hour(sec_to_time(sum(`data_group`.`TDiff`))) AS `Minutes`,sec_to_time(sum(`data_group`.`TDiff`)) AS `Original-Time`,`data_group`.`servers` AS `servers` from `data_group` where `data_group`.`MS` = 'Scratch' group by `data_group`.`Name`;

DROP TABLE IF EXISTS `totaltimeperpackage`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `totaltimeperpackage` AS select `data`.`MS` AS `MS`,`data`.`TDiff` AS `TDiff` from `data` group by `data`.`MS`;

-- 2021-07-28 09:36:44
