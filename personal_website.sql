-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 07:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `user_name` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `link` varchar(150) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `caption` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `link`, `portfolio_id`, `caption`) VALUES
(1, 'assets/img/7.png', 1, 'در این قسمت تکنولوژی های بکار رفته قرار دارد.'),
(2, 'assets/img/10.1.png', 1, 'این یک فرم ارسال رزومه است .'),
(3, 'assets/img/9.1.png', 1, 'این صفحه پروژه های دنجی است .'),
(4, 'assets/img/2.png', 1, ' این صفحه توضیحات درباره دنجی است.'),
(5, 'assets/img/5.1.png', 1, ' نمونه کارهای دنجی در این صفحه است.'),
(6, 'assets/img/11.1.png', 1, 'در این صفحه رضایت مشتری قرار دارد .'),
(7, 'assets/img/7.png', 2, 'در این قسمت تکنولوژی های بکار رفته قرار دارد.'),
(8, 'assets/img/10.1.png', 2, 'این یک فرم ارسال رزومه است .'),
(9, 'assets/img/9.1.png', 2, 'این صفحه پروژه های دنجی است .'),
(10, 'assets/img/2.png', 2, ' این صفحه توضیحات درباره دنجی است.'),
(11, 'assets/img/5.1.png', 2, 'نمونه کارهای دنجی در این صفحه است.'),
(12, 'assets/img/11.1.png', 2, ''),
(13, 'assets\\img\\1-a.jpg', 2, ''),
(14, 'assets\\img\\2-a.jpg', 2, ''),
(15, 'assets\\img\\3-a.jpg', 2, ''),
(16, 'assets\\img\\4-a.jpg', 2, ''),
(17, 'assets\\img\\5-a.jpg', 2, ''),
(18, 'assets\\img\\6-a.jpg', 2, ''),
(20, 'assets/img/7.png', 1, 'در این قسمت تکنولوژی های بکار رفته قرار دارد.'),
(21, 'assets/img/10.1.png', 1, 'این یک فرم ارسال رزومه است .'),
(22, 'assets/img/9.1.png', 1, 'این صفحه پروژه های دنجی است .'),
(23, 'assets/img/2.png', 1, ' این صفحه توضیحات درباره دنجی است.'),
(24, 'assets/img/5.1.png', 1, ' نمونه کارهای دنجی در این صفحه است.'),
(25, 'assets/img/11.1.png', 1, 'در این صفحه رضایت مشتری قرار دارد .'),
(26, 'assets/img/7.png', 2, 'در این قسمت تکنولوژی های بکار رفته قرار دارد.'),
(27, 'assets/img/10.1.png', 2, 'این یک فرم ارسال رزومه است .'),
(28, 'assets/img/9.1.png', 2, 'این صفحه پروژه های دنجی است .'),
(29, 'assets/img/2.png', 2, ' این صفحه توضیحات درباره دنجی است.'),
(30, 'assets/img/5.1.png', 2, 'نمونه کارهای دنجی در این صفحه است.'),
(31, 'assets/img/11.1.png', 2, ''),
(32, 'assets\\img\\1-a.jpg', 2, ''),
(33, 'assets\\img\\2-a.jpg', 2, ''),
(34, 'assets\\img\\3-a.jpg', 2, ''),
(35, 'assets\\img\\4-a.jpg', 2, ''),
(36, 'assets\\img\\5-a.jpg', 2, ''),
(37, 'assets\\img\\6-a.jpg', 2, ''),
(38, '', 0, ''),
(39, 'assets/img/7.png', 1, 'در این قسمت تکنولوژی های بکار رفته قرار دارد.'),
(40, 'assets/img/10.1.png', 1, 'این یک فرم ارسال رزومه است .'),
(41, 'assets/img/9.1.png', 1, 'این صفحه پروژه های دنجی است .'),
(42, 'assets/img/2.png', 1, ' این صفحه توضیحات درباره دنجی است.'),
(43, 'assets/img/5.1.png', 1, ' نمونه کارهای دنجی در این صفحه است.'),
(44, 'assets/img/11.1.png', 1, 'در این صفحه رضایت مشتری قرار دارد .'),
(45, 'assets/img/7.png', 2, 'در این قسمت تکنولوژی های بکار رفته قرار دارد.'),
(46, 'assets/img/10.1.png', 2, 'این یک فرم ارسال رزومه است .'),
(47, 'assets/img/9.1.png', 2, 'این صفحه پروژه های دنجی است .'),
(48, 'assets/img/2.png', 2, ' این صفحه توضیحات درباره دنجی است.'),
(49, 'assets/img/5.1.png', 2, 'نمونه کارهای دنجی در این صفحه است.'),
(50, 'assets/img/11.1.png', 2, ''),
(51, 'assets\\img\\1-a.jpg', 2, ''),
(52, 'assets\\img\\2-a.jpg', 2, ''),
(53, 'assets\\img\\3-a.jpg', 2, ''),
(54, 'assets\\img\\4-a.jpg', 2, ''),
(55, 'assets\\img\\5-a.jpg', 2, ''),
(56, 'assets\\img\\6-a.jpg', 2, ''),
(57, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

DROP TABLE IF EXISTS `general_info`;
CREATE TABLE `general_info` (
  `id` int(11) NOT NULL,
  `mobail` varchar(20) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `addres` varchar(300) NOT NULL,
  `about` text NOT NULL,
  `linkedin` varchar(150) NOT NULL,
  `github` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`id`, `mobail`, `tel`, `email`, `addres`, `about`, `linkedin`, `github`) VALUES
(1, '09924743486', 'https://t.me/raha_sdi80', 'rahasdi80@gmail.com', 'خراسان جنوبی- بیرجند- خیابان غفاری- پارک علم و فناوری ', 'من توسعه دهنده وب\r\nمن یک توسعه دهنده وب هستم که علاقه زیادی به ایجاد وب سایت های جذاب و کاربر پسند\r\nدارم. درحال حاضر دانشجو رشته علوم کامپیوتر در دانشگاه صنعتی بیرجند هستم \r\nمن دائماً در حال یادگیری و پیگیری آخرین روندهای توسعه وب هستم . فردی با انگیزه بالا\r\nهستم که در\r\n.محیط سریع رشد می کنم', 'https://www.linkedin.com/in/fatemeh-sarhadi/', 'https://github.com/fatemeh-sarhadi'),
(2, '09380397974', 'https://t.me/Anahitanadi2', 'anahitanadi.99@gmail.com', 'خراسان جنوبی- بیرجند- خیابان غفاری- پارک علم و فناوری ', 'من یک توسعه دهنده وب هستم \r\nکه علاقه زیادی به ایجاد وب سایت های جذاب و کاربر پسند دارم. من در دانشگاه صنعتی بیرجند در ایران در رشته کامپیوتر تحصیل کردم و از آن زمان تجربیات زیادی در زمینه توسعه وب کسب کردم.\r\n\r\nتخصص من در HTML، CSS، JavaScript، PHP، Git، GitHub، Bootstrap و WordPress است. من دائماً در حال یادگیری و پیگیری آخرین روندهای توسعه وب هستم تا اطمینان حاصل کنم که بهترین خدمات ممکن را به مشتریان خود ارائه می دهم.\r\n\r\nمن فردی با انگیزه بالا هستم که در محیطی سریع رشد می کنم. من از همکاری با دیگران لذت می برم و معتقدم که کار گروهی برای دستیابی به موفقیت ضروری است. هدف من ایجاد وب سایت هایی است که نه تنها عالی به نظر می رسند، بلکه یک تجربه کاربری یکپارچه را نیز ارائه می دهند.\r\n\r\nاگر به دنبال یک توسعه دهنده وب ماهر و متعهد هستید، لطفا در تماس باشید. مشتاقانه منتظر همکاری با شما هستم!', 'https://www.linkedin.com/in/anahita-nadi-4471a32a9', 'https://github.com/anahita-nadi');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`) VALUES
(1, 'HTML & CSS'),
(2, 'Bootstrap'),
(3, 'Javascript'),
(4, 'PHP'),
(5, 'Laravel'),
(3, 'Javascript'),
(4, 'PHP'),
(5, 'Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `project_link` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `project_link`, `description`) VALUES
(1, ' پروژه دنجی', 'assets\\img\\Screenshot.png', 'این پروژه تیمی انجام شده با استفاده از html , css , javascript , bootstrap انجام شده .'),
(2, 'پروژه بوت استرپ', 'assets\\img\\Screenshot (2).png', 'این پروژه تنها با فریم ورک Bootstrap 5 انجام شده .'),
(4, ' پروژه دنجی', 'assets\\img\\Screenshot.png', 'این پروژه تیمی انجام شده با استفاده از html , css , javascript , bootstrap انجام شده .'),
(6, 'پروژه HTML & CSS ', 'assetsimg1-a.jpg', 'طراحی جذاب و مدرن با HTML & CSS');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_contributor`
--

DROP TABLE IF EXISTS `portfolio_contributor`;
CREATE TABLE `portfolio_contributor` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `portfolio_contributor`
--

INSERT INTO `portfolio_contributor` (`id`, `portfolio_id`, `user_id`) VALUES
(5, 1, 1),
(6, 2, 1),
(7, 4, 2),
(8, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_languages`
--

DROP TABLE IF EXISTS `portfolio_languages`;
CREATE TABLE `portfolio_languages` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `portfolio_languages`
--

INSERT INTO `portfolio_languages` (`id`, `portfolio_id`, `language_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 2),
(5, 4, 1),
(6, 4, 2),
(7, 4, 3),
(8, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `registration_date` date DEFAULT NULL,
  `img` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `resume`, `job`, `registration_date`, `img`) VALUES
(1, 'raha', 'rahasdi@gmail.com', 'raha8111', 'فاطمه سرحدی', 'assets/pdf/resume.pdf', 'Web Developer', NULL, 'assets/img/DSC3414.jpg'),
(2, 'Anahita', 'anahitanadi.99@gmail.com', 'ana8111', 'آناهیتا نادی', 'assets/pdf/resume_anahita.pdf', 'Web Developer', NULL, 'assets/img/DSC3423.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_contributor`
--
ALTER TABLE `portfolio_contributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_languages`
--
ALTER TABLE `portfolio_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_contributor`
--
ALTER TABLE `portfolio_contributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolio_languages`
--
ALTER TABLE `portfolio_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
