-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 01:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ans_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Local Area Network', '1'),
(2, 'Living Area Net', '1'),
(3, 'Live Area Network', '1'),
(4, 'Localling Area Network', '1'),
(5, 'Wide Area Network', '2'),
(6, 'Widest Area Network', '2'),
(7, 'Wide Area Networth', '2'),
(8, 'Wing Area Network', '2'),
(9, '6', '3'),
(10, '7', '3'),
(11, '7.1', '3'),
(12, '8', '3'),
(13, 'Creating', '4'),
(14, 'Removing', '4'),
(15, 'Sorting', '4'),
(16, 'Updating', '4'),
(17, 'Baseball', '5'),
(18, 'Firewall', '5'),
(19, 'Volleyball', '5'),
(20, 'internet', '5'),
(21, 'Pomax Downside Hatomata', '6'),
(22, 'Psuh Down Automata', '6'),
(23, 'Pull Dog Automata', '6'),
(24, 'Push Down Automata', '6'),
(25, 'Data Link Layer', '7'),
(26, 'Network Layer', '7'),
(27, 'Outermost Layer', '7'),
(28, 'Physical layer', '7');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(255) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `author`, `type`, `description`) VALUES
(2, 'unification', 'Nagaraj Sir', '21AI54', 'the process of finding a common solution for expressions with variables, making them equivalent '),
(3, 'DBMS', 'Gowramma ma\'am', '21CS53', 'primary key is a unique key'),
(6, 'Context Free Grammar', 'Keshav Murthy Sir', '21CS51', 'context free grammar problems must be practiced more and more'),
(9, 'checksum', 'Sampath Sir', '21CS52', 'problem doubt'),
(10, 'order by', 'Gowramma ma\'am', '21CS53', 'i am not able to understand the difference between order by asc and desc');

--
-- Triggers `notes`
--
DELIMITER $$
CREATE TRIGGER `deleted` BEFORE DELETE ON `notes` FOR EACH ROW INSERT INTO triggersolun VALUES(null,OLD.author,OLD.type,'deleted')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inserted` AFTER INSERT ON `notes` FOR EACH ROW INSERT INTO triggersolun VALUES(null, NEW.author,NEW.type,'Inserted')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updated` AFTER UPDATE ON `notes` FOR EACH ROW INSERT INTO triggersolun VALUES(null,NEW.author,NEW.type,'updated')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `aid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `aid`) VALUES
(1, 'What is the full form of LAN ?', '1'),
(2, 'What is the full form of WAN', '5'),
(3, 'OSI reference model has how many layers?', '10'),
(4, 'What is the purpose of ORDER BY clause in SQL', '15'),
(5, 'What device is used to block unauthorized access to a network?', '18'),
(6, 'What does PDA stands for?', '24'),
(7, 'Which is odd one out according to CN?', '27');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'son goku', 'goku@gmail.com', '$2y$10$bCz8GSQkO9gT/prxLqbWd.8vmLY/rGINxc3xymDrH1Tr6WMIPJQVC'),
(2, 'gohan', 'gohan@gmail.com', '$2y$10$IIGETY.pUTvttJ7DXVHc5ueN2p0iksUCOdkvUOOfXkfrsQAy98BrK'),
(3, 'prince vegeta', 'vegeta@gmail.com', '$2y$10$ckIPEwnFmqcX7O0n00gmC.J95UuWOmycSJ8GE1g9C.nG7tatqNiTm'),
(4, 'master roshi', 'masterroshi@gmail.com', '$2y$10$hLYiJCFvbD/4YbyL/SUN6.41M8OPQ2WosncXz7ZZP9TIEM00gyAaO'),
(5, 'roshi', 'turtlehermit@gmail.com', '$2y$10$0qgCgNbArp4zJTZFdIqW1OEKCoFWNVM.wV9yRTQ5c91sasWLxsRRi'),
(6, 'shri', 'shri@gmail.com', '$2y$10$2FTxu0.zIX.l.7ACIAAu4O0ZM89.bkiQ5Gotbb.Ku9fMdZ0OBWhFW'),
(7, 'samrudh m', 'samrudh@gmail.com', '$2y$10$4QUgdVIO.O/tA14yclGeSOKdFuCY4TLUNGqLA6OHKSEvKLKzy.BJO'),
(8, 'bulma', 'bulma@gmail.com', '$2y$10$j7lyLrFB5pOOtinsMuGyHugv/izBg10SziJExhrCQA38s9.7/UzPe'),
(9, 'mani', 'mani@gmail.com', '$2y$10$oj4hdfO7nv2TzXfu8ZHX9uJ6raRyOWJwj97ESUTtiwEUbIhK3j4tq'),
(10, 'abhinav', 'asd@gmail.com', '$2y$10$NMV6LMUon2z296blPH4pSu2YbCB7UrpwnBkqm2Y4Ve3GaTlEfj1LC');

--
-- Triggers `register`
--
DELIMITER $$
CREATE TRIGGER `insert_success` AFTER INSERT ON `register` FOR EACH ROW INSERT INTO trigger_register VALUES(null,NEW.fullname,NEW.email,NEW.password,'inserted')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `marks` int(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `name`, `email`, `usn`, `marks`, `feedback`) VALUES
(1, 'Son Goku', 'goku@gmail.com', '1DB21AD001', 0, 'Nice quiz i will improve further on'),
(2, 'Son Goku', 'goku@gmail.com', '1DB21AD001', 6, 'yeahh got it'),
(3, 'Abhinav S', 'asbillion1676@gmail.com', '1DB21AD002', 6, 'give a tougher one next time'),
(4, 'abhishek', 'abhikoti@gmail.com', '1DB21AD002', 6, 'nice'),
(5, 'abhishek', 'abhikoti@gmail.com', '1DB21AD002', 6, 'good'),
(6, 'baki', 'baki@gmail.com', '1BAKI409', 3, 'not good'),
(7, 'billa', 'billa@gmail.com', 'BILLA123', 4, 'somewhat i did it'),
(8, 'abhishek', 'abhikoti@gmail.com', '1DB21AD002', 2, 'welll'),
(9, 'gomi', 'gomi@gmail.com', '1DB21AD450', 1, 'done'),
(10, 'gomi', 'gomi@gmail.com', '1DB21AD450', 1, 'done'),
(11, 'param', 'param@gmail.com', 'PARAM9900', 6, 'karadi'),
(12, 'masterroshi', 'masterroshi@gmail.com', 'ROSHI875', 5, 'left one i will grab the remaining one next time'),
(13, 'masterroshi', 'masterroshi@gmail.com', 'ROSHI875', 5, 'left one i will grab the remaining one next time'),
(14, 'Sling', 'sling@gmail.com', 'SLING5454RET', 5, 'let 1 go its ok for me'),
(15, 'Bling', 'Bling@gmail.com', 'BLING5353ET', 5, 'let 1 go its not ok for me'),
(16, 'it', 'it@gmail.com', 'WE435', 1, 'i will give my best next time'),
(17, 'Shri', 'shri@gmail.com', 'SHRI131', 4, 'I will perform better than this next time!!'),
(18, 'samrudh', 'samrudh@gmail.com', '1DB21AD045', 5, 'ok ok'),
(19, 'blue', 'blue@gmail.com', 'BLUE24DBIT', 3, 'i will improve my performance before taking the next quiz'),
(20, 'mani', 'mani@gmail.com', 'MANIADDBIT123', 5, 'i will sore out of out in next quiz for sure!!!');

--
-- Triggers `response`
--
DELIMITER $$
CREATE TRIGGER `inserted_done` AFTER INSERT ON `response` FOR EACH ROW INSERT INTO trigger_feedback VALUES(null,NEW.usn,NEW.feedback,'inserted')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `triggersolun`
--

CREATE TABLE `triggersolun` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(36) NOT NULL,
  `type` varchar(36) NOT NULL,
  `action` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `triggersolun`
--

INSERT INTO `triggersolun` (`id`, `teacher_name`, `type`, `action`) VALUES
(1, 'Nagaraj Sir', '21AI54', 'Inserted'),
(2, 'Sampath Sir', '21CS52', 'updated'),
(3, 'Sampath Sir', '21CS52', 'deleted'),
(4, 'Gowramma ma\'am', '21CS53', 'Inserted'),
(5, 'Gowramma ma\'am', '21CS53', 'updated'),
(6, 'Nagaraj Sir', '21AI54', 'updated');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_feedback`
--

CREATE TABLE `trigger_feedback` (
  `id` int(11) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trigger_feedback`
--

INSERT INTO `trigger_feedback` (`id`, `usn`, `feedback`, `action`) VALUES
(1, 'BLUE24DBIT', 'i will improve my performance before taking the next quiz', 'inserted'),
(2, 'MANIADDBIT123', 'i will sore out of out in next quiz for sure!!!', 'inserted');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_register`
--

CREATE TABLE `trigger_register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trigger_register`
--

INSERT INTO `trigger_register` (`id`, `fullname`, `email`, `password`, `action`) VALUES
(1, 'bulma', 'bulma@gmail.com', '$2y$10$j7lyLrFB5pOOtinsMuGyHugv/izBg10SziJExhrCQA38s9.7/UzPe', 'inserted'),
(2, 'mani', 'mani@gmail.com', '$2y$10$oj4hdfO7nv2TzXfu8ZHX9uJ6raRyOWJwj97ESUTtiwEUbIhK3j4tq', 'inserted'),
(3, 'abhinav', 'asd@gmail.com', '$2y$10$NMV6LMUon2z296blPH4pSu2YbCB7UrpwnBkqm2Y4Ve3GaTlEfj1LC', 'inserted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triggersolun`
--
ALTER TABLE `triggersolun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trigger_feedback`
--
ALTER TABLE `trigger_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trigger_register`
--
ALTER TABLE `trigger_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `triggersolun`
--
ALTER TABLE `triggersolun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trigger_feedback`
--
ALTER TABLE `trigger_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trigger_register`
--
ALTER TABLE `trigger_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
