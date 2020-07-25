-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 01:48 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `specon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$osrZJeIHQaiiNiHwpbb6r.KwqMN3.f.0ZKNUZ9dd5Cr8trsp/WgIa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `benifits`
--

CREATE TABLE `benifits` (
  `id` int(11) NOT NULL,
  `title` char(70) NOT NULL,
  `description` varchar(191) NOT NULL,
  `img` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benifits`
--

INSERT INTO `benifits` (`id`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Honorable Speakers', 'Parturient nec suspendisse liniquacmtuvluptas sit elementuisim risus tell nullam, elementum ac enim. it is importent things.', 'fa fa-graduation-cap', '2020-07-25 04:38:15', '2020-07-25 05:21:24'),
(2, 'Confreances Topics', 'Parturient nec suspendisse liniquacmtuvluptas sit elementuisim risus tell nullam, elementum ac enim. it is importent things.', 'fa fa-calendar', '2020-07-25 04:38:15', '2020-07-25 05:23:29'),
(3, 'Privacy & Condition', 'Parturient nec suspendisse liniquacmtuvluptas sit elementuisim risus tell nullam, elementum ac enim. it is importent things.', 'fa fa-cogs', '2020-07-25 04:38:15', '2020-07-25 04:38:41'),
(4, 'Beneifits Of Event', 'Parturient nec suspendisse liniquacmtuvluptas sit elementuisim risus tell nullam, elementum ac enim. it is importent things.', 'fa fa-university', '2020-07-25 04:38:15', '2020-07-25 04:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_desc`, `long_desc`, `img`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Imperdiet tortor ratione quisque morbi nulla ntesque facilisi in quis world games.', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero odio molestie,', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero odio molestie, vitae auctor eros orci sed.Interdum libero diam ac a lorem, amet tellus dis vitae elit ut, torquent sapien pretium mauris integer, primis arcu sem auctor at, massa ut, in a vel feugiat dictumst mus accumsan. Nunc aenean sapien ornare ipsum qui faucibus, interdum dui varius ac sit enim proin, nec quia at. Nulla non,', 'assets/blogImage/blog01.jpg', 'July-22', 1, '2020-07-18 23:26:50', '2020-07-18 23:26:50'),
(2, 'A praesent a feugiat id sit rilus velit fusce morbi dolorum. blog 28 DEC Pede fringilla et vulputate et wisi varius,', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero odio molestie, vitae auctor eros orci sed.Interdum libero diam ac a lorem, amet tellus dis vitae elit ut, torquent sapien pretium mauris integer, non condimentum egestas feugiat lacus. Gravida non diam atque massa at at, sapien ut pulvinar, libero dictum quam faucibus urna nunc viverra. Faucibus libero et imperdiet et, id primis arcu sem auctor at, massa ut, in a vel feugiat dictumst mus accumsan. Nunc aenean sapien ornare ipsum qui faucibus, interdum dui varius ac sit enim proin, nec quia at.', 'assets/blogImage/blog03.jpg', 'July-28', 1, '2020-07-18 23:28:00', '2020-07-18 23:51:43'),
(4, 'Imperdiet tortor ratione quisque morbi nulla ntesque facilisi in quis world games.', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero odio molestie', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero odio molestie, vitae auctor eros orci sed.Interdum libero diam ac a lorem, amet tellus dis vitae elit ut, torquent sapien pretium mauris integer, non condimentum egestas feugiat lacus. Gravida non diam atque massa at at, sapien ut pulvinar, libero dictum quam faucibus urna nunc viverra. Faucibus libero et imperdiet et, id primis arcu sem auctor at, massa ut, in a vel feugiat dictumst mus accumsan. Nunc a', 'assets/blogImage/blog02.jpg', 'July-29', 1, '2020-07-19 00:05:37', '2020-07-19 00:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tkt_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `tkt_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 'kabir', 'kabir@gmail.com', '01911871738', 'eOvIFL', 10, '2020-07-19 23:31:39', '2020-07-19 23:31:39'),
(2, 'kabir', 'kabir@gmail.com', '01911871738', 'yjHKlI', 10, '2020-07-19 23:33:08', '2020-07-19 23:33:08'),
(3, 'eva', 'test@gmail.com', '546345', 'J1aflU', 50, '2020-07-25 11:03:03', '2020-07-25 11:03:03'),
(4, 'user3', 'test@gmail.com', '01911871738', 'rlwE5j', 10, '2020-07-25 11:30:05', '2020-07-25 11:30:05'),
(5, 'testuser', 'admin@gmail.com', '01911871738', 'WVkNhm', 6, '2020-07-25 11:31:42', '2020-07-25 11:31:42'),
(6, 'kabir', 'user@gmail.com', '01911871738', 'FP0Z4u', 6, '2020-07-25 11:32:07', '2020-07-25 11:32:07'),
(7, 'Honorable Speakers', 'test@gmail.com', '01911871738', 'PSvinJ', 6, '2020-07-25 11:34:02', '2020-07-25 11:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_15_072159_create_admins_table', 1),
(5, '2020_07_16_053114_create_speakers_table', 2),
(6, '2020_07_16_064953_create_topics_table', 3),
(7, '2020_07_16_070704_create_schedules_table', 4),
(8, '2020_07_18_091910_create_tickets_table', 5),
(10, '2020_07_19_050458_create_blogs_table', 7),
(11, '2020_07_19_064730_create_sections_table', 8),
(12, '2020_07_19_103733_create_welcomes_table', 9),
(13, '2020_07_20_051535_create_customers_table', 9),
(14, '2020_07_21_083508_create_settings_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speaker_id` int(11) NOT NULL,
  `topic` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot` char(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `speaker_id`, `topic`, `date`, `start_time`, `end_time`, `slot`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '2020-07-19', '11:30', '11:50', '1st', '2020-07-16 03:38:10', '2020-07-22 11:36:11'),
(2, 2, '2', '2020-07-20', '11:11', '11:50', '2nd', '2020-07-17 22:19:04', '2020-07-17 22:19:04'),
(3, 3, '4', '2020-07-23', '10:10', '10:55', '3rd', '2020-07-17 22:20:49', '2020-07-17 22:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'banner', 'join with global business <span class=\"d-block w-100\">conferances 2019</span>', 'Tortor sed id nulla ac vivamus, semper at orci vitpltus a sodales. Nibh adipiscing nullam consequat.', NULL, NULL, '2020-07-25 06:53:30'),
(2, 'about', 'join with us for next conferance 2019', 'consequat, quis ac turpis, mi a ligula scelerisque eleifend arcuttis feugiat pede vivamus idac, vitae volutpat viverra, pttitor velppede est auctor velit. Nullam nonummy Fusce neque\r\n                                pharetra elemtum ante praesent et, non non nulla enim, velit amet sit convallis si<p></p>\r\n                            <p>portgilla. Maecenas auctor convallis dolor, eros consectetuer nulla eget vitae, nec\r\n                                porttitor viverra eu quis quisque</p>', 'assets/sectionImage/DqxuUy.jpg', NULL, '2020-07-25 06:55:15'),
(3, 'about_overview', 'well come to conference 2019', '<p>consequat, quis ac turpis, mi a ligula scelerisque eleifend arcu. Arctugiat\r\n                                            pede vivamus id ac, vitae volutpat viverra, porttitor velit parturient, pede\r\n                                            est auctor velit. Nullam nonummy Quam lorem magna, lectus pede sit felis ab\r\n                                            nulla wisi, fusce eget lorem. Porro etiam sed lacus eu, donec mus ipsum eu\r\n                                            ligula eget, nullacipit duis, accumsan ut lorem semvtulum suspendisse tempor\r\n                                            est nulla, ac tincidunt ligula magna enim et, eros </p>\r\n                                            <ol>\r\n                                                <li>leifend fringilla quiselit</li>\r\n                                                <li>aliquam dolor tortor phasellus</li>\r\n                                                <li> dignissim semper consequat </li>\r\n                                            </ol>', 'assets/sectionImage/PJoqAU.jpg', NULL, '2020-07-25 05:37:25'),
(4, 'speaker', 'Event speakers', '<p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis asd</p>', NULL, NULL, '2020-07-23 07:00:04'),
(5, 'schedule', 'what is going on', 'a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis', NULL, NULL, '2020-07-23 07:04:57'),
(6, 'call_in', 'hurry up', 'contact with us for your ticket', NULL, NULL, '2020-07-23 07:11:05'),
(7, 'ticket1', 'get your ticket', 'a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis', NULL, NULL, '2020-07-23 07:16:54'),
(8, 'event', 'join our event', 'Magna eget et velit sed, cras neque amet aeante quis mauris mollis elit, fringilla et\r\n                                suscipitet.', NULL, NULL, '2020-07-23 07:21:51'),
(9, 'blog1', 'our news update', 'a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis', NULL, NULL, '2020-07-23 08:34:32'),
(10, 'sponsor1', 'official sponsor', 'a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis', NULL, NULL, '2020-07-23 08:39:28'),
(11, 'tab_mission', 'Consequat, quis ac turpis, mi a ligula scelerque eleifend arcu. Arctugiat pede vivamus', 'Lorem ipsum dolor sit amet, varius class massa velit amet cras, felis a donec at. Justo nonummy hymenaeos sed ipsum, urna ornare odio amet sit et. Penatibus ante eu bibendum quisque. Ut sit aenean elementum tincidunt cras, dictum nunc aliquet lacus lorem. Lorem ridiculus nunc ligula perleifend et quam, dictumst pellentesque rhoncus et, hendrerit non accumsan fringilla mauris, metus reiciendis amet vitae sed consectetuer vitae.', NULL, NULL, '2020-07-23 08:46:05'),
(12, 'tab_testimonial', 'Jhonson', 'It is helpfull conferences for all nec proin nunc quis odio turpiger euismod semper. Eu cras praesent fusce erat aptent nullam hendrerit volutpat&nbsp;', 'assets/sectionImage/Pe9RbM.jpg', NULL, '2020-07-23 09:10:37'),
(13, 'overview_img', 'Honorable Speakers', 'Parturient nec suspendisse liniquacmtuvluptas sit elementuisim risus tell nullam, elementum ac enim. it is importent things.', 'assets/sectionImage/s2glwO.jpg', NULL, '2020-07-25 05:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `place` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `location`, `start_date`, `place`, `phone`, `email`, `title`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Uttara ,sector 11 dhaka', '2020-08-20', 'The SoftKing', '11111111112', 'softking@soft.com', 'Specon', 'assets/siteImage/CDl9k1.png', NULL, '2020-07-25 05:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speaker_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experties` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaker_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `speaker_name`, `experties`, `description`, `speaker_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Martin Hook', 'Wordpress Development', 'Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.', 'assets/speakerImage/speaker01.jpg', 0, '2020-07-16 00:28:19', '2020-07-25 11:15:27'),
(2, 'Kawsar Ahmed', 'FrontEnd Development', 'Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.', 'assets/speakerImage/speaker04.jpg', 0, '2020-07-16 00:28:41', '2020-07-25 11:15:40'),
(3, 'Ivan Ahmed', 'Java Development', 'Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.adc<div>Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.adc<br></div><div>Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.adc<br></div><div>Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.adc<br></div><div>Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.adc<br></div><div>Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.adc<br></div><div>Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.adc<br></div>', 'assets/speakerImage/speaker05.jpg', 1, '2020-07-16 00:28:54', '2020-07-25 11:16:18'),
(4, 'Zaman Hossain', 'Android Development', 'Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.', 'assets/speakerImage/speaker06.jpg', 1, '2020-07-17 23:16:46', '2020-07-18 00:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `company_name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `website` char(50) NOT NULL,
  `sponsor_id` int(11) NOT NULL,
  `img` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `company_name`, `email`, `website`, `sponsor_id`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'The Softking', 'user@gmail.com', 'www.google.com', 1, 'assets/sponsorImage/7w46Tp.png', 1, '2020-07-25 08:19:26', '2020-07-25 08:19:26'),
(2, 'kabir', 'BrainStation', 'test1@gmail.com', 'www.test1.com', 2, 'assets/sponsorImage/et2RHi.png', 1, '2020-07-25 08:19:30', '2020-07-25 08:19:30'),
(3, 'Test', 'Wedev', 'admin@gmail.com', 'www.google.com', 1, 'assets/sponsorImage/vE8nF8.png', 1, '2020-07-25 08:19:32', '2020-07-25 08:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_types`
--

CREATE TABLE `sponsor_types` (
  `id` int(11) NOT NULL,
  `sponsor_name` char(50) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsor_types`
--

INSERT INTO `sponsor_types` (`id`, `sponsor_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Silver', 1, '2020-07-25 08:09:55', '2020-07-25 08:09:55'),
(2, 'Golden', 1, '2020-07-25 08:09:55', '2020-07-25 08:09:55'),
(3, 'Platinum', 0, '2020-07-25 08:09:55', '2020-07-25 08:09:55'),
(4, 'Media', 0, '2020-07-25 08:10:20', '2020-07-25 08:10:20'),
(5, 'Diamond', 0, '2020-07-25 08:10:20', '2020-07-25 10:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tkt_typ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tkt_price` double(8,2) NOT NULL,
  `tkt_desc` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tkt_qty` int(11) NOT NULL,
  `tkt_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `tkt_typ`, `tkt_price`, `tkt_desc`, `tkt_qty`, `tkt_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Personal', 250.00, 'Tortor sodales facilis diam sed. Turpis maecenas.', 22, 'assets/ticketImage/ticket01.png', 1, '2020-07-18 04:41:59', '2020-07-25 11:34:02'),
(2, 'Business', 499.00, 'Tortor sodales facilis diam sed. Turpis maecenas.', 0, 'assets/ticketImage/ticket03.png', 1, '2020-07-18 04:42:11', '2020-07-25 11:03:03'),
(3, 'Golden Pack', 599.00, 'Tortor sodales facilis diam sed. Turpis maecenas.', 30, 'assets/ticketImage/ticket01.png', 1, '2020-07-18 04:42:21', '2020-07-19 23:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `topic_name`, `created_at`, `updated_at`) VALUES
(1, 'Wordpress Development', '2020-07-16 02:28:25', '2020-07-18 01:08:55'),
(2, 'FrontEnd Development', '2020-07-16 02:28:27', '2020-07-16 02:28:27'),
(3, 'Java Development', '2020-07-16 02:28:30', '2020-07-16 02:28:30'),
(4, 'Android Development', '2020-07-16 02:28:32', '2020-07-16 02:28:32'),
(6, 'Ios Development', '2020-07-21 04:57:32', '2020-07-21 04:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_name_unique` (`name`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `benifits`
--
ALTER TABLE `benifits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `speakers_speaker_name_unique` (`speaker_name`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_types`
--
ALTER TABLE `sponsor_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `benifits`
--
ALTER TABLE `benifits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sponsor_types`
--
ALTER TABLE `sponsor_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
