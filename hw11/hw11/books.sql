-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-05-20 08:09:47
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bookstore`
--

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--

CREATE TABLE `books` (
  `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `cBookName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cAuthor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cPublisher` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cPublishDate` date NOT NULL,
  `cPrice` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `books`
--

INSERT INTO `books` (`cID`, `cBookName`, `cAuthor`, `cPublisher`, `cPublishDate`, `cPrice`) VALUES
(01, '深入淺出程式設計', 'David Griffiths', '歐萊禮', '2011-08-25', '537'),
(02, '美國經濟史(下卷)', '福克訥', '商務印書館', '2018-05-01', '312'),
(03, '超圖解：經濟學關鍵字!', '鈴木一之', '楓葉社文化 ', '2018-11-30', '316'),
(04, '經典動漫素材全攻略', 'C.C動漫社', '佳魁資訊', '2016-07-25', '69'),
(05, '蔡康永的情商課：為你自己活一次', '蔡康永 ', '如何', '2018-11-01', '277'),
(06, '123', '456', '5646', '0000-00-00', '656');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`cID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `books`
--
ALTER TABLE `books`
  MODIFY `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
