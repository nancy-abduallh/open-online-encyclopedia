-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 06:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encyclopedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `language` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `creation_date` date NOT NULL,
  `userid` int(11) NOT NULL,
  `editorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `bookmarkid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `editor_id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_bookmark`
--

CREATE TABLE `list_bookmark` (
  `list_bookmark_id` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `bookmarkid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_page`
--

CREATE TABLE `list_page` (
  `list_page_id` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `pageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `language` int(50) NOT NULL,
  `editor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

CREATE TABLE `search_history` (
  `history_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `search_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `editorid` (`editorid`);

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`bookmarkid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `articleid` (`articleid`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`editor_id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `list_bookmark`
--
ALTER TABLE `list_bookmark`
  ADD PRIMARY KEY (`list_bookmark_id`),
  ADD KEY `listid` (`listid`),
  ADD KEY `bookmarkid` (`bookmarkid`);

--
-- Indexes for table `list_page`
--
ALTER TABLE `list_page`
  ADD PRIMARY KEY (`list_page_id`),
  ADD KEY `listid` (`listid`),
  ADD KEY `pageid` (`pageid`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `FOREIGN KEY` (`editor_id`);

--
-- Indexes for table `search_history`
--
ALTER TABLE `search_history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `articleid` (`articleid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `bookmarkid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `editor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_bookmark`
--
ALTER TABLE `list_bookmark`
  MODIFY `list_bookmark_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_page`
--
ALTER TABLE `list_page`
  MODIFY `list_page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search_history`
--
ALTER TABLE `search_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`editorid`) REFERENCES `editor` (`editor_id`) ON DELETE CASCADE;

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookmark_ibfk_2` FOREIGN KEY (`articleid`) REFERENCES `article` (`article_id`) ON DELETE CASCADE;

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `list_bookmark`
--
ALTER TABLE `list_bookmark`
  ADD CONSTRAINT `list_bookmark_ibfk_1` FOREIGN KEY (`listid`) REFERENCES `list` (`list_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_bookmark_ibfk_2` FOREIGN KEY (`bookmarkid`) REFERENCES `bookmark` (`bookmarkid`) ON DELETE CASCADE;

--
-- Constraints for table `list_page`
--
ALTER TABLE `list_page`
  ADD CONSTRAINT `list_page_ibfk_1` FOREIGN KEY (`listid`) REFERENCES `list` (`list_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_page_ibfk_2` FOREIGN KEY (`pageid`) REFERENCES `page` (`page_id`) ON DELETE CASCADE;

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`editor_id`) REFERENCES `editor` (`editor_id`);

--
-- Constraints for table `search_history`
--
ALTER TABLE `search_history`
  ADD CONSTRAINT `search_history_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `search_history_ibfk_2` FOREIGN KEY (`articleid`) REFERENCES `article` (`article_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
