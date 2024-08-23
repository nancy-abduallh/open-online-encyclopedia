-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 04:02 AM
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
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `language` varchar(50) NOT NULL,
  `creation_date` date NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `editorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `title`, `content`, `language`, `creation_date`, `page_url`, `userid`, `editorid`) VALUES
(1, 'software engineering1', 'Software engineering is an engineering approach to software development. A practitioner, a software engineer, applies the engineering design process to develop software.  The terms programmer and coder overlap software engineer, but they imply only the construction aspect of typical software engineer workload.', 'english,arabic', '2024-04-30', 'software engineering.php', 1, 1),
(11, 'operating system', 'An operating system (OS) is system software that manages computer hardware and software resources, and provides common services for computer programs.  Time-sharing operating systems schedule tasks for efficient use of the system and may also include accounting software for cost allocation of processor time, mass storage, peripherals, and other resources.', 'english', '2024-05-01', 'operating system.php', 0, 1),
(15, 'cyber security', 'Computer security, cybersecurity, digital security or information technology security (IT security) is the protection of computer systems and networks from attacks by malicious actors that may result in unauthorized information disclosure, theft of, or damage to hardware, software, or data, as well as from the disruption or misdirection of the services they provide.', 'english', '2024-05-02', 'cybersecurity.php', 0, 2),
(16, 'هندسة البرمجيات', 'هندسة البرمجيات (بالإنجليزية: Software Engineering)‏ المجال الذي يهتم بتطوير، وتصميم البرمجيات، عالية الجودة آخذة بعين الاعتبار تخصيصات المستخدم، ومتطلباته على جميع المستويات. تهتم هندسة البرمجيات بتكوين البرنامج منذ مراحله الأولى أثناء تحليل المشكلة، ومن ثم التصميم، وكتابة البرنامج حتى القيام بتجريبه، واختباره، وتنصيبه على الأجهزة، والقيام بعملية صيانته. وهي حديثاً يمكن أن تنقسم لقسمين الحوسبة اللينة والحوسبة الصلبة', 'arabic', '2024-05-05', 'arabic_software.php', 0, 3),
(48, 'programming', 'Computer programming or coding is the composition of sequences of instructions, called programs, that computers can follow to perform tasks. It involves designing and implementing algorithms, step-by-step specifications of procedures, by writing code in one or more programming languages. Programmers typically use high-level programming languages that are more easily intelligible to humans than machine code, which is directly executed by the central processing unit. Proficient programming usually requires expertise in several different subjects, including knowledge of the application domain, details of programming languages and generic code libraries, specialized algorithms, and formal logic.', 'english', '2024-05-08', 'programming.php', 0, 2),
(56, 'algorithms', 'introduction to algorithms', 'english', '2024-05-09', 'algorithms', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `bookmarkid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `page_url` varchar(200) NOT NULL,
  `page_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`bookmarkid`, `userid`, `page_url`, `page_title`) VALUES
(1, 41, 'software engineering.php', 'software engineering'),
(5, 40, 'software engineering.php', 'software engineering'),
(9, 39, 'arabic_software.php', 'هندسة البرمجيات'),
(10, 39, 'operating system.php', 'operating system'),
(11, 43, 'arabic_software.php', 'هندسة البرمجيات'),
(12, 40, 'arabic_operating.php', 'نظم التشغيل'),
(14, 40, 'operating system.php', 'operating system'),
(15, 50, 'operating system.php', 'operating system'),
(16, 40, 'software engineering.php', 'software engineering');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `comment_text` text NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `comment_text`, `page_id`) VALUES
(22, 1, 40, 'it is really very useful article', 1),
(23, 1, 39, 'it has a lot of precious information', 1),
(26, 1, 40, 'التعليق مفيد جدا', 5),
(27, 1, 41, 'it is really a wonderful article', 1),
(28, 1, 41, 'ان المقال به الكثير من المعلومات القيمة', 5),
(29, 1, 40, 'it is a knowledgeable article', 4),
(31, 1, 40, 'ان المقال مفيد جدا', 6),
(32, 1, 41, 'لقد استفدت كثيرا بالمعلومات\r\n', 6);

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `editor_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`editor_id`, `username`, `email`, `password`) VALUES
(1, 'abduallh', 'abduallh1@gmail.com', '12345'),
(2, 'Ahmed', 'ahmed@gmail.com', '12345'),
(3, 'أحمد', 'ahmed1@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
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
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `created_at`) VALUES
(4, 40, 'New article added: \'programming\'', '2024-05-07 21:00:00'),
(7, 40, 'New article added: \'logic design\'', '2024-05-07 21:00:00'),
(9, 50, 'New article added: \'algorithms\'', '2024-05-08 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `editor_id` int(11) NOT NULL,
  `page_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `title`, `language`, `editor_id`, `page_url`) VALUES
(1, 'software engineering', 'english', 1, 'software engineering.php'),
(4, 'operating system', 'english', 1, 'operating system.php'),
(5, 'هندسة البرمجيات', 'arabic', 2, 'arabic_software.php'),
(6, 'نظم التشغيل', 'arabic', 2, 'arabic_operating.php');

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
-- Table structure for table `search_mapping`
--

CREATE TABLE `search_mapping` (
  `id` int(11) NOT NULL,
  `search_term` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search_mapping`
--

INSERT INTO `search_mapping` (`id`, `search_term`, `page_url`) VALUES
(1, 'software engineering', 'software engineering.php'),
(2, 'programming', 'programming.php'),
(3, 'cybersecurity', 'cybersecurity.php'),
(4, 'operating system', 'operating system.php'),
(5, 'هندسة البرمجيات', 'arabic_software.php'),
(6, 'نظم التشغيل', 'arabic_operating.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `age`, `gender`) VALUES
(39, 'aser', 'aser123@gmail.com', '12345', 4, 'male'),
(40, 'nancy', 'nancyabdo857@gmail.com', '12345', 21, 'female'),
(41, 'eman', 'eman123@gmail.com', '12345', 40, 'female'),
(45, 'mazen', 'mazen123@gmail.com', '12345', 20, 'male'),
(50, 'mohammed', 'mohammed@gmail.com', '12345', 25, 'male'),
(51, 'احمد', 'ahmed12345@gmail.com', '12345', 27, 'رجل');

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
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `search_mapping`
--
ALTER TABLE `search_mapping`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `bookmarkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `editor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `search_history`
--
ALTER TABLE `search_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search_mapping`
--
ALTER TABLE `search_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`editorid`) REFERENCES `editor` (`editor_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

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
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `test` FOREIGN KEY (`page_id`) REFERENCES `search_mapping` (`id`);

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
