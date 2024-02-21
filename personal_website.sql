-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 08:45 AM
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

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `link` varchar(150) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `caption` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

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

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `picture_link` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_contributor`
--

CREATE TABLE `portfolio_contributor` (
  `id` int(11) NOT NULL,
  `port_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_languages`
--

CREATE TABLE `portfolio_languages` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `user_language`
--

CREATE TABLE `user_language` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
