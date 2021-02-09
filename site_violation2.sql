-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 08:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_violation2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password1` text NOT NULL,
  `password2` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_id`, `username`, `password1`, `password2`, `firstname`, `middlename`, `lastname`, `contact`, `email`, `user_type`) VALUES
(8, 'kuro', 'kuro123', 'kuro123', 'kuro', 'tensai', 'ryu', '09123456789', 'kryu@gmail.com', 'DEAN'),
(10, 'jlara', 'jlara', 'jlara', 'Jerick', 'Steven', 'Lara', '09123456789', 'jlara@gmail.com', 'DEAN'),
(11, 'hyper', 'hyper', 'hyper', 'Gerald', 'Villar', 'Balabis', '09987541235', 'gbalabis@gmail.com', 'GOVERNOR');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `fullname` text NOT NULL,
  `user_type` text NOT NULL,
  `xdate` text NOT NULL,
  `xtime` text NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `username`, `fullname`, `user_type`, `xdate`, `xtime`, `action`) VALUES
(1, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:06:50pm', 'Edited in students(20030042)'),
(2, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:07:03pm', 'Edited in students(20030042)'),
(3, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:08:37pm', 'Added in students(2)'),
(4, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:08:49pm', 'Edited in students(200603124)'),
(5, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:09:02pm', 'Deleted in students(2)'),
(6, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:10:31pm', 'Added in students(20124338)'),
(7, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:11:39pm', 'Added in students(20130945)'),
(8, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:13:24pm', 'Added in students(201304562)'),
(9, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:15:05pm', 'Added in students(201200678)'),
(10, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:18:26pm', 'Added in students(201710434)'),
(11, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:20:16pm', 'Added in students(201720123)'),
(12, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:21:26pm', 'Added in students(201700234)'),
(13, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:21:58pm', 'Deleted in events(5)'),
(14, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:23:22pm', 'Added in events(7)'),
(15, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:23:53pm', 'Added in events(9)'),
(16, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:24:02pm', 'Deleted in events(9)'),
(17, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:24:32pm', 'Added in events(7)'),
(18, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:25:38pm', 'Added in events(7)'),
(19, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:26:06pm', 'Added in events(7)'),
(20, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:27:11pm', 'Added in events(7)'),
(21, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:27:42pm', 'Added in events(10)'),
(22, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:28:35pm', 'Added in events(10)'),
(23, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:29:18pm', 'Added in events(11)'),
(24, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:29:36pm', 'Deleted in events(10)'),
(25, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:29:38pm', 'Deleted in events(11)'),
(26, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:29:56pm', 'Added in events(12)'),
(27, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:30:09pm', 'Edited in events(12)'),
(28, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:30:41pm', 'Deleted in events(12)'),
(29, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:35:10pm', 'Added in events(13)'),
(30, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:35:46pm', 'Added in events(14)'),
(31, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:36:00pm', 'Deleted in events(4)'),
(32, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:36:07pm', 'Deleted in events(6)'),
(33, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:36:12pm', 'Deleted in events(7)'),
(34, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:36:31pm', 'Deleted in events(13)'),
(35, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:37:15pm', 'Added in events(15)'),
(36, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:39:15pm', 'Added in events(16)'),
(37, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:40:04pm', 'Added in events(17)'),
(38, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:42:15pm', 'Added in events(18)'),
(39, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:42:49pm', 'Added in events(19)'),
(40, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:43:19pm', 'Deactivated sanction(1)'),
(41, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:43:21pm', 'Deactivated sanction(2)'),
(42, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:43:22pm', 'Deactivated sanction(4)'),
(43, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:44:03pm', 'Added in sanctions(37)'),
(44, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:46:45pm', 'Added in sanctions(38)'),
(45, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '10:47:06pm', 'Added in sanctions(39)'),
(46, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '11:00:16pm', 'Activated sanction(1)'),
(47, 'user2', 'Dean Community', 'DEAN', '2020-10-24', '11:00:23pm', 'Deactivated sanction(1)'),
(48, 'user2', 'Marifel Grace Kummer', 'DEAN', '2020-10-24', '11:02:39pm', 'Edited in accounts(2)'),
(49, 'user2', 'Marifel Grace Kummer', 'DEAN', '2020-10-24', '11:03:31pm', 'Edited in accounts(1)'),
(50, 'user2', 'Marifel Grace', 'DEAN', '2020-10-24', '11:56:11pm', 'Edited in events(19)'),
(51, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '08:57:04pm', 'Added in students(213123)'),
(52, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '08:58:07pm', 'Added in students(13131)'),
(53, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '08:59:13pm', 'Added in students(69420)'),
(54, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '09:00:58pm', 'Edited in students(20030042)'),
(55, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '09:01:44pm', 'Edited in students(20030042)'),
(56, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '09:01:59pm', 'Deactivated student(69420)'),
(57, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '09:03:03pm', 'Added in students(2151)'),
(58, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '09:03:08pm', 'Deleted in students(2151)'),
(59, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:32:28pm', 'Added in students(2141)'),
(60, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:33:47pm', 'Added in students(awd)'),
(61, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:34:21pm', 'Added in students(wa512515)'),
(62, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:34:28pm', 'Deleted in students(2141)'),
(63, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:36:39pm', 'Deleted in students(awd)'),
(64, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:36:43pm', 'Deleted in students(awd)'),
(65, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:36:48pm', 'Deleted in students(awd)'),
(66, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:37:14pm', 'Added in students(999999)'),
(67, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:37:36pm', 'Deactivated student(wa512515)'),
(68, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:37:41pm', 'Deactivated student(awd)'),
(69, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:37:52pm', 'Deactivated student(awd)'),
(70, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:38:04pm', 'Deleted in students(awd)'),
(71, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:43:11pm', 'Added in students(69420)'),
(72, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:45:40pm', 'Added in students(69420)'),
(73, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:46:01pm', 'Added in students(1414)'),
(74, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:47:00pm', 'Deleted in students(1414)'),
(75, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:47:04pm', 'Deleted in students(awd)'),
(76, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:47:54pm', 'Added in students(201200001)'),
(77, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '10:48:22pm', 'Deleted in students(201200001)'),
(78, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '11:15:15pm', 'Added in students(69420)'),
(79, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '11:15:53pm', 'Added in students(69420)'),
(80, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '11:16:20pm', 'Edited in students(69420)'),
(81, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '11:16:49pm', 'Deactivated student(69420)'),
(82, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '11:17:02pm', 'Deactivated student(69420)'),
(83, 'user2', 'Marifel Grace', 'DEAN', '2021-02-08', '11:17:07pm', 'Deleted in students(69420)'),
(84, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:18:08am', 'Added in violations(32)'),
(85, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:26:12am', 'Added in violations(33)'),
(86, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:27:28am', 'Added in violations(34)'),
(87, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:28:48am', 'Added in violations(35)'),
(88, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:29:32am', 'Added in violations(36)'),
(89, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:29:42am', 'Added in violations(37)'),
(90, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:29:52am', 'Added in violations(38)'),
(91, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:30:04am', 'Edited in violations(38)'),
(92, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:37:58am', 'Deleted in violations(37)'),
(93, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:38:04am', 'Deleted in violations(36)'),
(94, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '12:38:12am', 'Edited in violations(32)'),
(95, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:03:17am', 'Added in sanctions(40)'),
(96, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:04:33am', 'Added in sanctions(41)'),
(97, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:06:56am', 'Deactivated sanction(37)'),
(98, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:07:04am', 'Activated sanction(37)'),
(99, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:07:12am', 'Deactivated sanction(37)'),
(100, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:10:26am', 'Edited in sanctions(38)'),
(101, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:10:35am', 'Edited in sanctions(39)'),
(102, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:12:39am', 'Added in sanctions(42)'),
(103, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:12:46am', 'Deleted in sanctions(39)'),
(104, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '01:12:51am', 'Deactivated sanction(38)'),
(105, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:32:00am', 'Added in accounts(8)'),
(106, 'kuro', 'kuro', 'DEAN', '2021-02-09', '02:33:39am', 'Added in accounts(9)'),
(107, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:44:03am', 'Deleted in accounts(9)'),
(108, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:06am', 'Edited in students(20030042)'),
(109, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:13am', 'Deleted in students(20030042)'),
(110, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:16am', 'Deleted in students(200400037)'),
(111, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:18am', 'Deleted in students(200603124)'),
(112, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:19am', 'Deleted in students(201200678)'),
(113, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:20am', 'Deleted in students(20124338)'),
(114, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:22am', 'Deleted in students(201304562)'),
(115, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:23am', 'Deleted in students(20130945)'),
(116, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:25am', 'Deleted in students(201700234)'),
(117, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:26am', 'Deleted in students(201710434)'),
(118, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '02:59:28am', 'Deleted in students(201720123)'),
(119, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:01:52am', 'Added in students(202100001)'),
(120, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:07:23am', 'Added in violations(39)'),
(121, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:09:54am', 'Added in students(202100002)'),
(122, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:10:24am', 'Added in students(201200003)'),
(123, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:10:41am', 'Edited in students(202100002)'),
(124, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:15:05am', 'Deleted in accounts(2)'),
(125, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:15:10am', 'Deleted in accounts(5)'),
(126, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:15:12am', 'Deleted in accounts(1)'),
(127, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:15:38am', 'Added in accounts(10)'),
(128, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:16:05am', 'Added in accounts(11)'),
(129, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:17:57am', 'Edited in sanctions(41)'),
(130, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:18:00am', 'Edited in sanctions(42)'),
(131, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:18:04am', 'Added in sanctions(43)'),
(132, 'user2', 'Marifel Grace', 'DEAN', '2021-02-09', '03:18:07am', 'Deleted in sanctions(43)'),
(133, 'kuro', 'kuro ryu', 'DEAN', '2021-02-09', '03:30:31am', 'Edited in accounts(10)');

-- --------------------------------------------------------

--
-- Table structure for table `sanctions`
--

CREATE TABLE `sanctions` (
  `sanction_id` int(11) NOT NULL,
  `sanction_name` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanctions`
--

INSERT INTO `sanctions` (`sanction_id`, `sanction_name`, `quantity`, `status`) VALUES
(38, 'Blackpink shirt', 2, 1),
(40, 'Blackpink album', 1, 0),
(41, 'Blackpink lightstick', 1, 0),
(42, 'Blackpink ticket', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(11) NOT NULL,
  `year_level` int(11) NOT NULL,
  `section` text NOT NULL,
  `program` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `year_level`, `section`, `program`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `status`) VALUES
('201200003', 5, 'Z', 'BSCpE', 'Gerald', 'Villar', 'Balabis', 'gbalabis@gmail.com', '09987654321', 0),
('202100001', 3, 'A', 'BSIT', 'Miguel Francisco', '', 'Gamiao', 'mfgamiao@gmail.com', '09123456789', 0),
('202100002', 1, 'G', 'BSCE', 'Jerick', 'Steven', 'Lara', 'jlara@gmail.com', '09651156915', 0);

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `vio_id` int(11) NOT NULL,
  `committer_id` text NOT NULL,
  `description` text NOT NULL,
  `date_committed` text NOT NULL,
  `compliance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`vio_id`, `committer_id`, `description`, `date_committed`, `compliance`) VALUES
(1, '0', '123', '2020-09-26', 0),
(2, '0', 'sa pa', '2020-09-26', 0),
(4, '0', 'asdas', '2020-09-26', 0),
(5, 'First Middle Last', '69', '2020-09-26', 0),
(6, 'First Middle Last', '696', '2020-09-26', 0),
(7, 'First Middle Last', '6969', '2020-09-26', 0),
(8, 'First Middle Last', '69696', '2020-09-26', 0),
(9, 'First Middle Last', 'sa pa', '2020-09-26', 0),
(10, '200400037', 'orayty', '2020-09-26', 0),
(11, '200400037', 'orayty', '2020-09-26', 0),
(12, '112', 'ZZ', '2020-09-26', 1),
(13, '112', 'dadag trial', '2020-09-25', 1),
(14, '112', 'add lang', '2020-09-27', 1),
(15, '112', 'dagdag manin', '2020-09-27', 0),
(16, '12341234', 'as the clock strikes 12', '2020-09-30', 0),
(17, '12341234', 'xxyy', '2020-09-13', 0),
(19, '112', 'asd', '2020-09-30', 0),
(20, '200400037', 'asd', '1233-03-12', 0),
(21, '200400037', 'badboi', '2020-09-15', 0),
(22, '112', 'baesikqwe', '2020-09-14', 1),
(23, '11', 'sdfgdf', '', 0),
(24, '112', 'dagdag sa gabi', '2020-09-20', 0),
(25, '112', 'tae', '2020-09-28', 1),
(26, '112', 'tumae ulit', '2020-09-28', 0),
(27, '09', 'smoke til im high', '2020-10-10', 0),
(28, '09', 'gotta represent', '2020-10-14', 0),
(30, '09', 'never chase a c', '2020-10-17', 0),
(32, '201200678', 'DDUDUDUDUD', '2021-02-09', 0),
(33, '201200678', 'pretty savage', '2001-02-01', 0),
(34, '201200678', 'blackpink', '11111-11-11', 0),
(35, '201200678', 'in your area', '2001-12-25', 0),
(38, '201200678', 'wada', '2021-02-24', 1),
(39, '202100001', 'HA HOW YOU LIKE THAT?', '2021-02-09', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `sanctions`
--
ALTER TABLE `sanctions`
  ADD PRIMARY KEY (`sanction_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`vio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `sanction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `vio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
