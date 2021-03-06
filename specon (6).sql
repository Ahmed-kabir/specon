-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 12:12 PM
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
(4, 'Beneifits Of Events', 'Parturient nec suspendisse liniquacmtuvluptas sit elementuisim risus tell nullam, elementum ac enim. it is importent things.', 'fa fa-university', '2020-07-25 04:38:15', '2020-07-28 05:44:36');

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
(1, 'Imperdiet tortor ratione quisque morbi nulla ntesque facilisi in quis world games.', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero odio molestie,}', 'speaker-sVmHIFwb.jpg', 'July-28', 1, '2020-07-27 10:55:33', '2020-07-28 09:11:58'),
(2, 'Laravel Development', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero odio molestie,}', 'blog-4OspijsB.jpg', 'July-30', 1, '2020-07-27 10:55:58', '2020-07-27 10:55:58'),
(3, 'Wordpressadsf', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit', 'Condimentum eu felis vitae nibh, mauris dui neque purus fusce tellus, sed velit, posuere ac pede idum ridiculus. Cras sodales mauris quis sit volutpat, molestie hendrerit aptent parturientvenatis urna urna etiam arcu nisl, libero odio molestie,}', 'speaker-ZSFilOQU.jpg', 'July-31', 1, '2020-07-27 10:56:16', '2020-07-28 09:05:24');

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
(1, 'admin', 'test@gmail.com', '01911871738', 'ZNssvH', 3, '2020-07-29 06:19:17', '2020-07-29 06:19:17'),
(2, 'Shojib', 'admin@gmail.com', '01911871738', 'YdtIgk', 4, '2020-07-29 06:20:11', '2020-07-29 06:20:11'),
(3, 'sojib', 'test@gmail.com', '01911871738', 'LfmU63', 3, '2020-07-29 06:22:10', '2020-07-29 06:22:10'),
(4, 'sojib', 'test@gmail.com', '01911871738', 'bLbawC', 3, '2020-07-29 06:27:25', '2020-07-29 06:27:25'),
(5, 'sojib', 'test@gmail.com', '01911871738', 'LrzjBY', 3, '2020-07-29 06:33:06', '2020-07-29 06:33:06'),
(6, 'user', 'kabir@gmail.com', '546345', 'PmDoto', 3, '2020-07-29 07:00:06', '2020-07-29 07:00:06'),
(7, 'kawsar', 'test@gmail.com', '01911871738', 'B3oaXx', 5, '2020-07-29 07:07:06', '2020-07-29 07:07:06'),
(8, 'user3', 'test@gmail.com', '546345', 'ZPdlWT', 3, '2020-07-29 07:14:11', '2020-07-29 07:14:11');

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
(1, 1, '1', '2020-07-19', '11:30', '11:50', '1st', '2020-07-16 03:38:10', '2020-07-26 05:26:13'),
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
(1, 'banner', 'join with global business <span class=\"d-block w-100\">conferances 2019</span>', 'Tortor sed id nulla ac vivamus, semper at orci vitpltus a sodales.&nbsp;', 'section-4rOHxvLJ.jpg', NULL, '2020-07-29 10:06:36'),
(2, 'about', 'join with us for next conferance 2019-2020', 'consequat, quis ac turpis, mi a ligula scelerisque eleifend arcuttis feugiat pede vivamus idac, vitae volutpat viverra, pttitor velppede est auctor velit. Nullam nonummy Fusce neque\r\n                                pharetra elemtum ante praesent et, non non nulla enim, velit amet sit convallis si<p></p>\r\n                            <p>portgilla. Maecenas auctor convallis dolor, eros consectetuer nulla eget vitae, nec\r\n                                porttitor viverra eu quis quisque', 'section-Cn9Q13Ub.jpg', NULL, '2020-07-28 04:48:56'),
(3, 'about_overview', 'well come to conference 2019', '<p>consequat, quis ac turpis, mi a ligula scelerisque eleifend arcu. Arctugiat\r\n                                            pede vivamus id ac, vitae volutpat viverra, porttitor velit parturient, pede\r\n                                            est auctor velit. Nullam nonummy Quam lorem magna, lectus pede sit felis ab\r\n                                            nulla wisi, fusce eget lorem. Porro etiam sed lacus eu, donec mus ipsum eu\r\n                                            ligula eget, nullacipit duis, accumsan ut lorem semvtulum suspendisse tempor\r\n                                            est nulla, ac tincidunt ligula magna enim et, eros </p>\r\n                                            <ol>\r\n                                                <li>leifend fringilla quiselit&nbsp;</li>\r\n                                                <li>aliquam dolor tortor phasellus</li>\r\n                                                <li> dignissim semper consequat </li>\r\n                                            </ol>', 'section-R2e9gk2G.jpg', NULL, '2020-07-28 05:19:30'),
(4, 'speaker', 'Event speaker', '<p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis asddf</p>', NULL, NULL, '2020-07-28 07:09:39'),
(5, 'schedule', 'what is going on', 'a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis&nbsp;', NULL, NULL, '2020-07-28 07:12:48'),
(6, 'call_in', 'hurry up', 'contact with us for your ticket', NULL, NULL, '2020-07-28 07:16:20'),
(7, 'ticket1', 'get your ticket', 'a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis&nbsp;', NULL, NULL, '2020-07-28 07:17:44'),
(8, 'event', 'join our event', 'Magna eget et velit sed, cras neque amet aeante quis mauris mollis elit, fringilla et\r\n                                suscipitet', NULL, NULL, '2020-07-28 07:15:16'),
(9, 'blog1', 'our news update', 'a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis&nbsp;', NULL, NULL, '2020-07-28 07:20:29'),
(10, 'sponsor1', 'official sponsor', 'a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi\r\n                    taciti eu urna, mi nunc volutpat quis', NULL, NULL, '2020-07-28 07:21:32'),
(11, 'tab_mission', 'Consequat, quis ac turpis, mi a ligula scelerque eleifend arcu. Arctugiat pede vivamus', 'Lorem ipsum dolor sit amet, varius class massa velit amet cras, felis a donec at. Justo nonummy hymenaeos sed ipsum, urna ornare odio amet sit et. Penatibus ante eu bibendum quisque. Ut sit aenean elementum tincidunt cras, dictum nunc aliquet lacus lorem. Lorem ridiculus nunc ligula perleifend et quam, dictumst pellentesque rhoncus et, hendrerit non accumsan fringilla mauris, metus reiciendis amet vitae sed consectetuer vitae.', NULL, NULL, '2020-07-28 07:22:08'),
(12, 'tab_testimonial', 'Jhonson', 'It is helpfull conferences for all nec proin nunc quis odio turpiger euismod semper. Eu cras praesent fusce erat aptent nullam hendrerit volutpat&nbsp;&nbsp;', 'assets/sectionImage/Pe9RbM.jpg', NULL, '2020-07-28 07:23:00'),
(13, 'overview_img', 'Honorable Speakers', 'Parturient nec suspendisse liniquacmtuvluptas sit elementuisim risus tell nullam, elementum ac enim. it is importent things.', 'section-IRVxB3q1.jpg', NULL, '2020-07-28 08:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `place` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_tkt_qty` int(11) NOT NULL,
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

INSERT INTO `settings` (`id`, `location`, `start_date`, `place`, `max_tkt_qty`, `phone`, `email`, `title`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Uttara,sector11dhaka', '2020-08-20', 'The SoftKing', 6, '11111111112', 'softking@soft.com', 'Specon', 'CDl9k1.png', NULL, '2020-07-29 09:32:23');

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
(1, 'Martin Hook', 'Wordpress Development', 'Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.', 'speaker-uxGhFHC3.jpg', 1, '2020-07-27 05:37:11', '2020-07-27 05:37:11'),
(2, 'Kawsar Ahmed', 'Laravel', 'Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.', 'speaker-tmF1GKCW.jpg', 1, '2020-07-27 05:37:24', '2020-07-27 05:37:24'),
(3, 'Ivan Ahmed', 'Android Developer', 'Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.', 'speaker-tW3lDEWk.jpg', 1, '2020-07-27 05:37:37', '2020-07-27 05:37:37'),
(4, 'Mustafiz', 'Ios Developer', 'Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.', 'speaker-3mMWPTcJ.jpg', 1, '2020-07-27 05:37:45', '2020-07-27 05:40:12');

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
(1, 'admin', 'The Softking', 'test@gmail.com', 'www.google.com', 2, 'HKFszD.png', 1, '2020-07-28 09:57:21', '2020-07-28 09:57:21'),
(2, 'user', 'BrainStation', 'test1@gmail.com', 'www.test1.com', 7, 'NUL4HT.png', 1, '2020-07-28 09:57:39', '2020-07-28 09:57:39'),
(3, 'testuser', 'Wedev', 'user@gmail.com', 'www.test1.com', 2, 'wCpTUw.png', 1, '2020-07-29 09:52:56', '2020-07-29 09:52:56');

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
(1, 'Silver', 0, '2020-07-25 08:09:55', '2020-07-28 09:53:06'),
(2, 'Golden', 1, '2020-07-25 08:09:55', '2020-07-28 09:57:21'),
(3, 'Platinum', 0, '2020-07-25 08:09:55', '2020-07-28 09:45:35'),
(4, 'Media', 0, '2020-07-25 08:10:20', '2020-07-25 08:10:20'),
(7, 'Diamond', 1, '2020-07-27 10:36:25', '2020-07-28 09:57:39');

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
(1, 'Personal', 250.00, 'Tortor sodales facilis diam sed. Turpis maecenas.', 42, 'tkt-rmTOR0Kq.png', 1, '2020-07-27 09:21:16', '2020-07-29 07:14:11'),
(2, 'Business', 500.00, 'Tortor sodales facilis diam sed. Turpis maecenas', 41, 'tkt-XL4YDZfV.png', 1, '2020-07-27 09:21:28', '2020-07-29 09:51:11'),
(3, 'Golden Pack', 599.00, 'Tortor sodales facilis diam sed. Turpis maecenas.', 40, 'tkt-i7mbFKdn.png', 1, '2020-07-27 09:21:39', '2020-07-29 09:44:11');

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
(1, 'Wordpress Development', '2020-07-16 02:28:25', '2020-07-29 09:37:29'),
(2, 'FrontEnd Development', '2020-07-16 02:28:27', '2020-07-16 02:28:27'),
(3, 'Java Development', '2020-07-16 02:28:30', '2020-07-16 02:28:30'),
(4, 'Android Development', '2020-07-16 02:28:32', '2020-07-16 02:28:32');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sponsor_types`
--
ALTER TABLE `sponsor_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
