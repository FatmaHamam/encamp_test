-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2020 at 01:06 AM
-- Server version: 5.6.48-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encampleads`
--

-- --------------------------------------------------------

--
-- Table structure for table `dawkileads`
--

CREATE TABLE `dawkileads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dawkileads`
--

INSERT INTO `dawkileads` (`id`, `name`, `number`, `mail`, `checkin`, `created_at`, `updated_at`) VALUES
(1, 'rahul', '8638167920', 'rahul@zakti.com', '2/21/2020', '2020-02-13 04:53:45', '2020-02-13 04:53:45'),
(2, 'rahul', '8638167920', 'rahul@zakti.com', '2/21/2020', '2020-02-13 18:37:01', '2020-02-13 18:37:01'),
(3, 'debuna', '7008506465', 'debuna.panda@gmail.com', '3/7/2020', '2020-02-18 06:35:18', '2020-02-18 06:35:18'),
(4, 'debuna', '7008506465', 'debuna.panda@gmail.com', '3/7/2020', '2020-02-18 06:35:18', '2020-02-18 06:35:18'),
(5, 'Tazkir', '9706075290', 'syedtazkir@gmail.com', '2/29/2020', '2020-02-27 01:42:37', '2020-02-27 01:42:37'),
(6, 'Bishal Das', '9365745509', 'bishalumon@gmail.com', '3/22/2020', '2020-03-05 20:27:45', '2020-03-05 20:27:45'),
(7, 'Krunal Dhobe', '9595242957', 'dhobekg@gmail.com', '6/2/2020', '2020-03-10 16:10:46', '2020-03-10 16:10:46'),
(8, 'Ayushi Gupta', '7980640079', 'ayushigupta0404@gmail.com', '3/25/2020', '2020-03-16 07:22:24', '2020-03-16 07:22:24'),
(9, 'test', '8638167920', 'rahul@zaktidigital.com', '4/14/2020', '2020-04-10 03:41:09', '2020-04-10 03:41:09'),
(10, 'Sahab Choudhury', '7002392407', 'sahab.mgu@gmail.com', '5/31/2020', '2020-05-24 10:10:17', '2020-05-24 10:10:17'),
(11, 'Bhaskar Talukdar', '7578887616', 'bjt10talukdar@gmail.com', '8/5/2020', '2020-06-04 22:09:15', '2020-06-04 22:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `dzukous`
--

CREATE TABLE `dzukous` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dzukous`
--

INSERT INTO `dzukous` (`id`, `name`, `phone`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Singha', '8638167920', 'Guwahati', '2020-05-27 21:48:42', '2020-05-27 21:48:42'),
(2, 'Rahul Singha', '8638167920', 'xyz', '2020-05-27 22:21:36', '2020-05-27 22:21:36'),
(3, 'Testing', '4487255262', 'xyz', '2020-05-27 22:22:57', '2020-05-27 22:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `hornleads`
--

CREATE TABLE `hornleads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dayswanted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `people` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hornleads`
--

INSERT INTO `hornleads` (`id`, `name`, `phno`, `email`, `dayswanted`, `people`, `created_at`, `updated_at`, `message`) VALUES
(1, 'tester', '1234567890', '15', NULL, NULL, '2019-11-06 07:01:32', '2019-11-06 07:01:32', NULL),
(2, 'tester', '1234567890', 'nilesh@encamp.com', '9', '15', '2019-11-06 07:02:36', '2019-11-06 07:02:36', NULL),
(3, 'tester', '1234567890', 'test@mail.com', '10', '5', '2019-11-06 20:10:12', '2019-11-06 20:10:12', NULL),
(4, 'tester', '0987567890', 'testing@email.com', '10', '15', '2019-11-06 20:11:10', '2019-11-06 20:11:10', 'Hi all'),
(5, 'test', '1234567890', 'test@email.com', '9', '15', '2019-11-09 03:04:35', '2019-11-09 03:04:35', NULL),
(6, 'tester', '8638167920', 'rahul@zaktidigital.com', '10', '17', '2019-11-11 13:27:34', '2019-11-11 13:27:34', NULL),
(7, 'Ankit', '9860408097', 'ankitgoel0@gmail.com', '3', '2', '2019-11-12 02:50:36', '2019-11-12 02:50:36', NULL),
(8, 'Inkita Goswami', '7002355470', 'agriculture2019dbt@gmail.com', '2', '2', '2019-11-13 17:47:04', '2019-11-13 17:47:04', NULL),
(9, 'Raktim Jyoti Dutta', '8402807072', 'duttaraktim840@gmail.com', '2', '15', '2019-11-13 20:47:08', '2019-11-13 20:47:08', 'Please provide us an itinerary with the best possible rates.'),
(10, 'Amit Utkarsh', '8340292055', 'amitutkarsh99@gmail.com', '4', '2', '2019-11-15 08:50:12', '2019-11-15 08:50:12', 'How big the tent, how many people accomodated in tent? And other facilities in tent? Hpw far the tent from the festival? Other places to visit than the festival? Can we bring booze or get from local area?'),
(11, 'Leki Drakpa', '8011638507', 'lekidrakpa406@gmail.com', '3', '5', '2019-11-16 07:20:54', '2019-11-16 07:20:54', 'River Rafting team from Bhutan'),
(12, 'Dipak gogoi', '7002005042', 'gogoidipak12@gmail.com', '1', '4', '2019-11-16 09:31:20', '2019-11-16 09:31:20', 'No comment'),
(13, 'Bipin', '9993271718', 'mrbipin009@gmail.com', '2', '2', '2019-11-16 10:30:35', '2019-11-16 10:30:35', NULL),
(14, 'ABHIJIT MAZUMDER', '7576001980', 'abhijitm999@gmail.com', '1', '2', '2019-11-16 11:04:18', '2019-11-16 11:04:18', NULL),
(15, 'ABHIJIT MAZUMDER', '7576001980', 'abhijitm999@gmail.com', '1', '2', '2019-11-16 11:05:09', '2019-11-16 11:05:09', NULL),
(16, 'Janu.mr.khan', '6303454194', '123456', 'jffmfb', 'nvbngdf', '2019-11-16 16:23:42', '2019-11-16 16:23:42', 'Mggmggng'),
(17, 'Aparajita kalita', '8474890064', 'Aparajitakalita@gmail.com', '3', '3', '2019-11-16 17:20:51', '2019-11-16 17:20:51', NULL),
(18, 'Aparajita kalita', '8474890064', 'Aparajitakalita@gmail.com', '2', '3', '2019-11-16 17:42:15', '2019-11-16 17:42:15', 'Is it starts from guwahati?are there any group of people who are going to this festival ?'),
(19, 'Dharmendra', '9711074970', 'dharmendrasingh2908@gmail.com', '3', '2', '2019-11-16 20:03:02', '2019-11-16 20:03:02', 'Want to stay for 3 days and run hornbill marathon. Give me the best option'),
(20, 'Bismita chutia', '6303836520', 'bismita.eiffel@gmail.com', '3 Or 4', '5', '2019-11-16 20:22:32', '2019-11-16 20:22:32', 'Wanted to enjoy the horbill festival and visit dzoku valley too. Will really appreciate if you could kindly let me know the best plan in cheap rate possible.. Thanking you in advance'),
(21, 'Mohan', '8419940963', 'mohan.narayankar@gmail.com', '5', '4', '2019-11-16 20:34:40', '2019-11-16 20:34:40', '2 children and 2 adult. Need costing and date'),
(22, 'Nilay', '9833811288', 'nilayajmera2708@gmail.com', '2', '2', '2019-11-16 20:47:04', '2019-11-16 20:47:04', NULL),
(23, 'Lincon', '9874381623', 'linconbanerjee@gmail.com', '2', '3', '2019-11-16 21:30:19', '2019-11-16 21:30:19', NULL),
(24, 'Bhaswati', '9854325371', 'replymebhaswati@gmail.com', '1', '2', '2019-11-16 23:29:05', '2019-11-16 23:29:05', NULL),
(25, 'Prodip Chetia', '7002090396', 'chetiaprodip@gmail.com', '4', '3 (1 M + 2 F)', '2019-11-17 10:55:25', '2019-11-17 10:55:25', 'Please provide terrif details including all'),
(26, 'Ranjith A', '6282136430', 'ranjithayyappath@gmail.com', '5', '2', '2019-11-17 22:52:38', '2019-11-17 22:52:38', 'I would like to know more about this.'),
(27, 'Saurav Jha', 'Saurav Jha', 'Saurav Jha', 'Saurav Jha', 'Saurav Jha', '2019-11-18 03:30:19', '2019-11-18 03:30:19', NULL),
(28, 'Ravi Das', '7086109127', 'Ravidas74200@gmail.com', '2', '2', '2019-11-18 09:05:34', '2019-11-18 09:05:34', NULL),
(29, 'Hemanga', '8638600125', 'hnobis@gmail.com', '3', '1', '2019-11-18 09:30:07', '2019-11-18 09:30:07', 'Nil'),
(30, 'Debjani Dam', '9093385381', 'damdebjani@gmail.com', '2', '2', '2019-11-18 10:56:06', '2019-11-18 10:56:06', 'Is these camps r safe regarding security purposes and is it also safe from violent animals'),
(31, 'Nayanjyoti Roy', '9435023053', 'nayanjyotidegs@gmail.com', '2', '2', '2019-11-18 16:30:57', '2019-11-18 16:30:57', 'May be local guest will be accompany'),
(32, 'Bhaskar Reddy', '9866333390', 'breddyb@gmail.com', '3', '2', '2019-11-19 09:09:28', '2019-11-19 09:09:28', NULL),
(33, 'Nabarun Hazarika', '9435480603', 'hazarikanabarun3@gmail.com', '5', '1', '2019-11-19 15:06:06', '2019-11-19 15:06:06', NULL),
(34, 'Neelu', '8283956487', 'neelus014@gmail.com', '4', '2', '2019-11-19 22:37:04', '2019-11-19 22:37:04', NULL),
(35, 'Jyotishmita Nath', '8486034147', 'tinakashyapjenny@gmail.com', '3', '10', '2019-11-20 00:01:40', '2019-11-20 00:01:40', NULL),
(36, 'Sujay ji', '7781088874', 'sujayunicomputergoh@gmail.com', '1', '1', '2019-11-20 09:28:51', '2019-11-20 09:28:51', 'Sujay hi'),
(37, 'Rajesh mallik', '7219099148', 'rajeshrm022146@gmail.com', 'Goa', 'Goa', '2019-11-20 11:44:39', '2019-11-20 11:44:39', NULL),
(38, 'Javed shaikh', '9922691364', 'Kawadhan ta.selu ji.parbhani', 'Javed', 'Shaikh', '2019-11-20 12:41:09', '2019-11-20 12:41:09', NULL),
(39, 'Jyoti bikash dutta', '7002413499', 'jyotibikashdutta54@gmail.com', 'Two days', '4', '2019-11-20 17:51:47', '2019-11-20 17:51:47', NULL),
(40, 'Amardeep Singh Jaswal', '8884619269', 'amarjaswal13@gmail.com', '5', '3', '2019-11-20 19:27:08', '2019-11-20 19:27:08', NULL),
(41, 'Pradeep Kumar', '8700281608', 'canefieldps@gmail.com', '2', '2', '2019-11-21 11:10:46', '2019-11-21 11:10:46', 'We r coming from shillong so please guide us the best route to reach at the festival.'),
(42, 'Pradeep Kumar', '8700281608', 'canefieldps@gmail.com', '2', '2', '2019-11-21 11:11:16', '2019-11-21 11:11:16', 'We r coming from shillong so please guide us the best route to reach at the festival.'),
(43, 'Susmita Dev', '8721877358', 'susmitadev30@gmail.com', '3-4', '2', '2019-11-21 21:16:20', '2019-11-21 21:16:20', 'This will be my first time in Hornbill festival, and I wanna try camping as well, so I\'d really appreciate if I could get the details of stay and travel and budget for all 4 days...\r\n\r\nThank you..'),
(44, 'Lawerence', '9954007658', 'lawrentzpadun21@gmail.com', '10', '2', '2019-11-22 16:02:34', '2019-11-22 16:02:34', NULL),
(45, 'Ranu', '8638008268', 'ranuray18@gmail.com', '3', '2', '2019-11-23 00:31:20', '2019-11-23 00:31:20', NULL),
(46, 'Sid Jamir', '6000056870', 'fsaikia43@gmail.com', '2', '5', '2019-11-23 00:47:33', '2019-11-23 00:47:33', NULL),
(47, 'bhaskar jyoti pegu', '8638988121', 'bhaskarjgel@gmail.com', '1', '2', '2019-11-23 08:25:20', '2019-11-23 08:25:20', NULL),
(48, 'bhaskar jyoti pegu', '8638988121', 'bhaskarjgel@gmail.com', '1', '2', '2019-11-23 08:45:13', '2019-11-23 08:45:13', NULL),
(49, 'Manjita Laftai', '8134008752', 'manprolaftai@gmail.com', '4', '2', '2019-11-23 11:48:21', '2019-11-23 11:48:21', 'Details of camp'),
(50, 'BINA ROY', '8876871133', 'Binaroy528@gmail.com', '2', '6', '2019-11-23 19:16:14', '2019-11-23 19:16:14', 'Please send me details.... N also price'),
(51, 'tarun', '8527587557', 'tarun1917@gmail.com', '4', '1', '2019-11-23 20:08:29', '2019-11-23 20:08:29', 'Hello,\r\nI am planning to reach Kohima on 30 November and planning stay for four days.\r\nI will be traveling solo and it would be quite helpful if you could suggest about stay :).\r\nLooking forward to your reply :)\r\nThank You,\r\nTarun'),
(52, 'Pranab Kr Sharms', '9435145537', 'pranab_sharma92@yahoo.com', '4', '2', '2019-11-24 09:57:03', '2019-11-24 09:57:03', 'I want to stay from 8 to 10 the Dec, 2019.'),
(53, 'Santanu Banerjee', '9748558976', 'santanubanerjee69@gmail.com', '5', '2', '2019-11-24 10:08:38', '2019-11-24 10:08:38', 'Tour details and cost'),
(54, 'Bhargav Jyoti Saikia', '7002893255', 'bhargav.saikia222@gmail.com', '1', '4', '2019-11-24 10:39:16', '2019-11-24 10:39:16', NULL),
(55, 'Sunita Sahoo', '9706363508', 'sh_snt@yahoo.com', '3', '4', '2019-11-24 11:46:40', '2019-11-24 11:46:40', NULL),
(56, 'Pale mung\'s', '9612824985', 'Mungpale@gmail.com', 'Sunday', '3', '2019-11-24 13:09:12', '2019-11-24 13:09:12', NULL),
(57, 'Sudhir kumar', '8393067960', 'Sudhir kumar', 'Sunday', '8393067960', '2019-11-24 14:03:40', '2019-11-24 14:03:40', 'Sdbmesbkejnbz4gjlexbmgv\r\nDashvvdjm cxvfhmifbfhkgng\r\nCkgdblogncghdgkphgtuikyfht\r\nXbkgbgjluhjfjkuffdfgutrgjydhug\r\nZcbkgeyujftuhxukkdrtyuvfhhfgjj\r\nJjreghfo8ttkdhirsgkfgi\r\nCbkotdnlfxmgfkn\r\nCbkybfhm\r\nBtrih\r\nBhgh\r\nFjyfh'),
(58, 'Bharat bhadana', '9599720407', 'evilviewer.bhadana777@gmail.com', '4', '1', '2019-11-24 15:06:33', '2019-11-24 15:06:33', 'Hi I am unable to book some room can you help me'),
(59, 'Probita borah', '9954601042', 'probitra.borah87@gmail.com', '1', '2', '2019-11-24 16:17:29', '2019-11-24 16:17:29', 'Price of accommodation?'),
(60, 'Probita borah', '9954601042', 'probitra.borah87@gmail.com', '1', '2', '2019-11-24 16:17:29', '2019-11-24 16:17:29', 'Price of accommodation?'),
(61, 'Krishnangkan Roy', '9101247177', 'roykrishnangkan@gmail.com', '2', '2', '2019-11-24 17:58:20', '2019-11-24 17:58:20', NULL),
(62, 'Subhadeep Sarkar', '9038206771', 'subhadeepzorro@gmail.com', '10', '1', '2019-11-24 21:02:58', '2019-11-24 21:02:58', NULL),
(63, 'Bhaskar Sonowal', '7002748758', 'bhaskarsonowal99@gmail.com', '3', '1', '2019-11-24 23:05:23', '2019-11-24 23:05:23', 'Send me the further details'),
(64, 'Dipak Das', '9682828629', 'samsean.in@gmail.com', '2', '1', '2019-11-25 07:56:40', '2019-11-25 07:56:40', NULL),
(65, 'Hemanta Duara', '9969228752', 'hmtduara@gmail.com', '2', '4', '2019-11-25 11:07:09', '2019-11-25 11:07:09', 'We will need car parking area.'),
(66, 'Sunondini gogoi', '8638250377', 'sunondini@gmail.com', '1', '6', '2019-11-25 14:18:17', '2019-11-25 14:18:17', NULL),
(67, 'meghana singamsetti', '7989620359', 'meghanamilli03@gmail.com', '5', '1', '2019-11-25 14:27:10', '2019-11-25 14:27:10', 'Nothing'),
(68, 'Shyam Narain Singh', '9470012701', 'karmvar@gmail.com', '02', '01', '2019-11-25 18:40:41', '2019-11-25 18:40:41', NULL),
(69, 'Mohit', '7838535349', 'mohit.verma0893@gmail.com', '3', '1', '2019-11-25 19:53:39', '2019-11-25 19:53:39', NULL),
(70, 'Siba Borah', '9435152509', 'sibaborah6@gmail.com', '2', '8', '2019-11-25 21:53:30', '2019-11-25 21:53:30', NULL),
(71, 'Ardhendu Sekhar Majumder', '9051288731', 'tyronwade.ards@gmail.com', '1-2', '1-3', '2019-11-25 22:03:09', '2019-11-25 22:03:09', 'Want to visit Dzouku Valley & Hornbill Festival. What is the package rate, if you can kindly say'),
(72, 'Mayna', '9365168525', '197700', '40', 'O', '2019-11-26 09:40:24', '2019-11-26 09:40:24', 'O'),
(73, 'Safiqul haque', '6002364487', 'safiqulhaque794@gmail.com', '0', '0', '2019-11-26 10:06:29', '2019-11-26 10:06:29', 'Friend'),
(74, 'Brijesh.pathak', '8429551168', 'Brijesh.clath.33@.gmal.com', 'Yes', 'Yes', '2019-11-26 10:45:58', '2019-11-26 10:45:58', 'Brijesh.pathak'),
(75, 'Brijesh.pathak', '8429551168', 'Brijesh.clath.33@.gmal.com', 'Yes', 'Yes', '2019-11-26 10:45:58', '2019-11-26 10:45:58', 'Brijesh.pathak'),
(76, 'Shivnath', 'Talos', 'Shivnath', 'falka', 'Falka', '2019-11-26 11:22:35', '2019-11-26 11:22:35', 'Shivnath'),
(77, 'Jaanpal Singh virk', '8813911972', '@com jaanpal Singh', '8813911972', '23', '2019-11-26 13:56:46', '2019-11-26 13:56:46', 'Hello'),
(78, 'Terry Thomas', '7995928778', 'terrythomas85@gmail.com', '1', '4', '2019-11-27 10:06:09', '2019-11-27 10:06:09', NULL),
(79, 'Manavjyoti Chutia', '8638244595', 'manavjyotichutia77735@gmail.com', '1', '9', '2019-11-27 14:04:43', '2019-11-27 14:04:43', NULL),
(80, 'Partha Pratim Dutta', '7002837965', 'parthapatimdutta@gmail.com', '1', '2', '2019-11-27 16:39:59', '2019-11-27 16:39:59', 'Thank you'),
(81, 'Partha Pratim Dutta', '7002837965', 'parthapatimdutta@gmail.com', '1', '2', '2019-11-27 16:39:59', '2019-11-27 16:39:59', 'Thank you'),
(82, 'Partha Pratim Dutta', '7002837965', 'parthapatimdutta@gmail.com', '1', '2', '2019-11-27 16:39:59', '2019-11-27 16:39:59', 'Thank you'),
(83, 'V gogoi', '9435926614', 'vigyan.gogoi123@gmail.com', '2', '3', '2019-11-27 22:02:31', '2019-11-27 22:02:31', 'Kindly mail me the rates'),
(84, 'Dinesh Bahahara', '6207021414', 'Singh Dinesh LjfHjre', 'Dinesh Kumar', 'Dinesh Singh', '2019-11-28 07:58:55', '2019-11-28 07:58:55', NULL),
(85, 'sarjeng milick', '6002196947', 'sarjeng.milick@.come', '24 7 1996', 'karbi', '2019-11-28 08:00:44', '2019-11-28 08:00:44', 'sarjeng milick'),
(86, 'subrata Sarbajna', '8811082176', 'subratasarbajna@gmail.com', '10', '2', '2019-11-28 11:37:53', '2019-11-28 11:37:53', NULL),
(87, 'Adrita Bharali', '8638683199', '14liamms14@gmail.com', '5', '1', '2019-11-28 14:50:53', '2019-11-28 14:50:53', NULL),
(88, 'Greg Greenberg', '7705723731', 'funnyeverywhere@gmail.com', '2/3', '2', '2019-11-29 03:04:45', '2019-11-29 03:04:45', 'Details'),
(89, 'Pritom Dutta', '8638819124', 'pritomdutta2012@gmail.co', '3', '8', '2019-11-29 13:49:25', '2019-11-29 13:49:25', 'we will be there from 8th December to 10th December.'),
(90, 'Arup ramchiary', '7002786478', 'arup3493@gmail.com', '2', '4', '2019-11-29 14:36:55', '2019-11-29 14:36:55', NULL),
(91, 'Banwari Lal jat', '9079795871', 'bijarniab@gmail.com', '1', '2', '2019-11-29 20:43:19', '2019-11-29 20:43:19', NULL),
(92, 'Kukil chutia', '9101683705', 'kukilchutia12@gmail.com', '5', 'T', '2019-11-29 22:12:54', '2019-11-29 22:12:54', 'Camping and enjoying nature of Nagaland'),
(93, 'Puspita saha', '7093741796', 'puspita.saha@gmail.com', '3', '2', '2019-11-30 13:47:58', '2019-11-30 13:47:58', NULL),
(94, 'Hemanta Kumar Das', '7002558582', 'vrg_hk@rediffmail.com', '1', '1', '2019-12-02 20:09:32', '2019-12-02 20:09:32', NULL),
(95, 'Sewali khanikar', '7002183259', 'sewali.khanikar@gandhifellowship.org', '2', '10', '2019-12-02 22:05:46', '2019-12-02 22:05:46', NULL),
(96, 'Hironmoi Duarah', '8876411504', 'hironmoi@gmail.com', '2days 3 nights', '4', '2019-12-03 00:55:47', '2019-12-03 00:55:47', NULL),
(97, 'Neelakshi Patgiri', '7002295439', 'neelakshipatgiri@gmail.com', '2', '2', '2019-12-03 13:02:16', '2019-12-03 13:02:16', 'No.'),
(98, 'rakesh bhagawati', '9706654026', 'bhagawatirakesh@gmail.com', '2', '2', '2019-12-03 21:07:37', '2019-12-03 21:07:37', NULL),
(99, 'rakesh bhagawati', '9706654026', 'bhagawatirakesh@gmail.com', '2', '2', '2019-12-03 21:08:04', '2019-12-03 21:08:04', NULL),
(100, 'nikhil unnikrishnan', '9746867702', 'nikhilunny@gmail.com', '2', '2', '2019-12-04 08:11:47', '2019-12-04 08:11:47', NULL),
(101, 'Sampath kumar', '9969229375', 'kumarsampathm@gmail.com', '2', '1', '2019-12-04 12:43:58', '2019-12-04 12:43:58', NULL),
(102, 'Mrinaljit Konwar', '7002320833', 'mrinaljitkonwar528@gmail.com', '2', '6', '2019-12-04 17:25:16', '2019-12-04 17:25:16', NULL),
(103, 'Bhaskar Bora', '8638805436', 'bhaskarbora66@gmail.com', '2', '2', '2019-12-04 19:05:17', '2019-12-04 19:05:17', NULL),
(104, 'Debasish Konwar', '8638586502', 'konwardebasish@gmail.com', '1', '2', '2019-12-04 20:39:25', '2019-12-04 20:39:25', NULL),
(105, 'Imran M Ahmed', '9954338228', 'Imran.ttb@gmail.com', '1', '2', '2019-12-05 20:10:55', '2019-12-05 20:10:55', 'Plz informe if any share taxi service is available'),
(106, 'Mrinaljit Konwar', '7002320833', 'mrinaljitkonwar528@gmail.com', '1', '5', '2019-12-06 12:05:42', '2019-12-06 12:05:42', NULL),
(107, 'Barnali', '7002258050', 'barnaliboro25@gmail.com', '1', '03', '2019-12-06 12:22:43', '2019-12-06 12:22:43', 'We will be arriving kohima by tomorrow morning...we want to spend our evening and night at hornbill festival..'),
(108, 'Ankur bajoria', '8011460690', 'ankurbajoria7@gmail.com', '2', '1', '2019-12-06 21:58:36', '2019-12-06 21:58:36', 'We are pure vegetarian..'),
(109, 'Pulock roy', '8787894117', 'roykaran 436@gmail.com', '1', '3', '2019-12-08 09:29:27', '2019-12-08 09:29:27', 'Rtyu'),
(110, 'Khagendra kumbang', '8638034941', 'k.kumbang.85@gmail.com', '1', '5', '2019-12-08 22:16:52', '2019-12-08 22:16:52', NULL),
(111, 'anil', '1234567', 'zatworld013@gmail.com', '2', '1', '2019-12-09 12:37:13', '2019-12-09 12:37:13', 'yyy');

-- --------------------------------------------------------

--
-- Table structure for table `khanaparaleads`
--

CREATE TABLE `khanaparaleads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khanaparaleads`
--

INSERT INTO `khanaparaleads` (`id`, `name`, `number`, `mail`, `checkin`, `created_at`, `updated_at`) VALUES
(1, 'rahul', '8638167920', 'rahulsingha@gmail.com', '2/26/2020', '2020-02-17 03:56:26', '2020-02-17 03:56:26'),
(2, 'Rahul', '8638167920', 'rahul@zakti.com', '2/27/2020', '2020-02-17 17:56:49', '2020-02-17 17:56:49'),
(3, 'Rahul', '8638167920', 'rahul@zakti.com', '2/27/2020', '2020-02-17 17:56:49', '2020-02-17 17:56:49'),
(4, 'Mirjanur Rahman', '9706750605', 'rohanrathore824@gmail.com', '3/8/2020', '2020-02-29 21:06:38', '2020-02-29 21:06:38'),
(5, 'Pritam saikia', '6901901124', 'www.pritomsaikia@gmail.com', '4/13/2020', '2020-02-29 22:00:19', '2020-02-29 22:00:19'),
(6, 'Parvez Halim', '9613904609', 'parvezhalim786@gmail.com', '3/14/2020', '2020-02-29 23:01:45', '2020-02-29 23:01:45'),
(7, 'Pulakesh Deka', '8486908815', 'contactmepulakesh@gmail.com', '1/28/2021', '2020-03-01 02:19:40', '2020-03-01 02:19:40'),
(8, 'Abhay Dey', '8133040845', 'dey.abhay0906@gmail.com', '3/9/2020', '2020-03-01 02:40:59', '2020-03-01 02:40:59'),
(9, 'Jayanta Thakuria', '9365748879', 'jayanta.thakuria12345@gmail.com', '3/7/2020', '2020-03-01 02:48:44', '2020-03-01 02:48:44'),
(10, 'Dhrubajyoti Das', '6001971528', 'evg.dhrubajyoti@gmail.com', '2/1/2020', '2020-03-01 04:40:26', '2020-03-01 04:40:26'),
(11, 'Ritika Sharma', '6000018355', 'ritika.sharma131713@gmail.com', '3/15/2020', '2020-03-01 05:45:22', '2020-03-01 05:45:22'),
(12, 'NAZIMUDDIN AHMED', '8638680771', 'nazimahmed472@gmail.com', '3/5/2020', '2020-03-01 06:00:33', '2020-03-01 06:00:33'),
(13, 'Bhudev Medhi', '8812864398', 'bhudevmedhi111@gmail.com', '3/20/2020', '2020-03-01 18:43:24', '2020-03-01 18:43:24'),
(14, 'Bhudev Medhi', '8812864398', 'bhudevmedhi111@gmail.com', '3/20/2020', '2020-03-01 18:43:26', '2020-03-01 18:43:26'),
(15, 'Pranab Jyoti Kakoti', '7035349036', 'pranabjyoti093@gmail.com', '3/3/2020', '2020-03-01 20:36:06', '2020-03-01 20:36:06'),
(16, 'Pranab Jyoti Kakoti', '7035349036', 'pranabjyoti093@gmail.com', '3/2/2020', '2020-03-01 20:36:30', '2020-03-01 20:36:30'),
(17, 'Anunoy Bathel', '7002430750', 'anunoybethel@gmail.com', '3/15/2020', '2020-03-01 21:54:14', '2020-03-01 21:54:14'),
(18, 'Anunoy Bathel', '7002430750', 'anunoybethel@gmail.com', '3/15/2020', '2020-03-01 21:54:15', '2020-03-01 21:54:15'),
(19, 'Snehamoy dey', '7002799184', 'sd.dey09@gmail.com', '3/7/2020', '2020-03-02 21:32:33', '2020-03-02 21:32:33'),
(20, 'Jugalkrishna kalita', '8638169698', 'scmne.jugalkalita@gmail.com', '3/7/2020', '2020-03-02 23:55:16', '2020-03-02 23:55:16'),
(21, 'Sam', '7002036845', 'sahmed989@gmail.com', '3/10/2020', '2020-03-03 07:50:29', '2020-03-03 07:50:29'),
(22, 'Nilamani Bhuyan', '9085354458', 'nilamani.bhuyan@yahoo.com', '3/15/2020', '2020-03-04 04:45:30', '2020-03-04 04:45:30'),
(23, 'JONE MONI BARUAH', '9864049898', 'jonemonibaruah@yahoo.co.in', '15 march', '2020-03-05 18:05:07', '2020-03-05 18:05:07'),
(24, 'DHIRAJ CHANGMAI', '7002830387', 'changmai173@gmail.com', '3/7/2020', '2020-03-05 19:11:02', '2020-03-05 19:11:02'),
(25, 'Hironmay Moran', '8638686839', 'hironmaymoran12@gmail.com', '3/11/2020', '2020-03-07 02:41:03', '2020-03-07 02:41:03'),
(26, 'ankit', '7002300945', 'ankitsewa@outlook.com', '3/12/2020', '2020-03-07 05:54:54', '2020-03-07 05:54:54'),
(27, 'Bishal Das', '9402560599', 'bishald1896@gmail.com', '3/7/2020', '2020-03-07 07:12:20', '2020-03-07 07:12:20'),
(28, 'Shakeel Mohammad', '8761838501', 'shakeelme7@gmail.com', '3/21/2020', '2020-03-08 02:01:32', '2020-03-08 02:01:32'),
(29, 'Sajid samad', '7005208637', 'sajid.samad987@gmail.com', '3/12/2020', '2020-03-08 07:09:07', '2020-03-08 07:09:07'),
(30, 'Rifatul', '9101014597', 'rifatmazumder0@gmail.com', '3/21/2020', '2020-03-09 01:28:31', '2020-03-09 01:28:31'),
(31, 'Seema talukdar', '8638275840', 'seematalukdar7@gmail.com', '3/9/2020', '2020-03-10 00:15:08', '2020-03-10 00:15:08'),
(32, 'Rocky', '8486570400', 'rockybhuyan300@gmail.com', '4/10/2020', '2020-03-10 00:44:55', '2020-03-10 00:44:55'),
(33, 'Chinmoy Bhuyan', '8486570400', 'rockybhuyan300@gmail.com', '4/11/2020', '2020-03-10 00:45:16', '2020-03-10 00:45:16'),
(34, 'Vishal Barman', '9613875109', 'vishal.barman300@gmail.com', '3/13/2020', '2020-03-12 07:43:22', '2020-03-12 07:43:22'),
(35, 'Jwngshar Boro', '8133866777', 'raidawb9954619007@gmail.com', '6/8/2020', '2020-03-13 03:09:48', '2020-03-13 03:09:48'),
(36, 'SAYOOJ S', '7034180987', 'Sayoojvly@gmail.com', '1/4/1997', '2020-03-14 17:33:12', '2020-03-14 17:33:12'),
(37, 'SAYOOJ S', '7034180987', 'Sayoojvly@gmail.com', '1/4/1997', '2020-03-14 17:33:14', '2020-03-14 17:33:14'),
(38, 'SAYOOJ S', '7034180987', 'Sayoojvly@gmail.com', '1/4/1997', '2020-03-14 17:33:15', '2020-03-14 17:33:15'),
(39, 'Anamika Paul', '6000848477', 'anamika.paul2015@gmail.com', '3/22/2020', '2020-03-15 12:56:37', '2020-03-15 12:56:37'),
(40, 'Ayush Thakur', '7067870647', 'atulyushsinghleo@gmail.com', '4/15/2020', '2020-03-15 21:13:02', '2020-03-15 21:13:02'),
(41, 'Ayushi Gupta', '7980640079', 'ayushigupta0404@gmail.com', '3/25/2020', '2020-03-16 07:24:25', '2020-03-16 07:24:25'),
(42, 'Nazir Ahmed', '8810566855', 'nazir140@gmail.com', '3/21/2020', '2020-03-16 19:01:02', '2020-03-16 19:01:02'),
(43, 'Sonali shinde', '6264576640', 'sonalishinde12341@gmail.com', '3/22/2020', '2020-03-17 05:30:36', '2020-03-17 05:30:36'),
(44, 'Sonali shinde', '6264576640', 'sonalishinde12341@gmail.com', '3/22/2020', '2020-03-17 05:30:37', '2020-03-17 05:30:37'),
(45, 'Hardik Makwana', '9316607647', 'hardikmakwana5451@gmail.com', '3/25/2020', '2020-03-17 22:37:33', '2020-03-17 22:37:33'),
(46, 'Harendra lal srivstav', '9839267304', 'omtrading1981@gmail.com', '5/25/2020', '2020-03-18 06:29:47', '2020-03-18 06:29:47'),
(47, 'Uttam Sharma', '8011634623', 'sharmauttam395@gmail.com', '9/11/2001', '2020-03-21 06:03:44', '2020-03-21 06:03:44'),
(48, 'Champak das', '8749986539', 'champakdas023@gmail.com', '4/26/2020', '2020-03-22 20:56:05', '2020-03-22 20:56:05'),
(49, 'JITUMONI MAHANTA', '7002373104', 'jitumahanta2@gmail.com', '7/15/2020', '2020-05-17 23:44:50', '2020-05-17 23:44:50'),
(50, 'Kumud Deka', '9854002050', 'bhaitynnwine22@gmail.com', '6/22/2020', '2020-05-23 14:39:48', '2020-05-23 14:39:48'),
(51, 'Test', '8638167920', 'rahul@zaktidigital.com', '5/20/2020', '2020-05-27 22:58:11', '2020-05-27 22:58:11'),
(52, 'Ankur Raktim Borah', '8134845156', 'ankurraktim1999@gmail.com', '7/22/2020', '2020-06-10 06:53:28', '2020-06-10 06:53:28'),
(53, 'Mona  Paul', '7002070554', 'monaranipaul20@gmail.com', '6/14/2020', '2020-06-11 13:42:01', '2020-06-11 13:42:01'),
(54, 'Amir hamja', '7577060863', 'hamjaa496@gmail.com', '8/22/2020', '2020-06-22 10:34:43', '2020-06-22 10:34:43'),
(55, 'Sunil kumar sahu', '9101141391', 'sunilkumar.digboi@gmail.com', '8/16/2020', '2020-08-01 05:52:50', '2020-08-01 05:52:50'),
(56, 'Tapash Das', '9101744690', 'yoyotapash97@gmail.com', '8/20/2020', '2020-08-01 08:41:17', '2020-08-01 08:41:17'),
(57, 'Debajit kr das', '9101344522', 'debajitdas5459@gmail.com', '8/23/2020', '2020-08-03 20:17:56', '2020-08-03 20:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `refercode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `number`, `email`, `message`, `created_at`, `updated_at`, `refercode`) VALUES
(1, 'kamal singha', '8486310015', 'kamalsingha@gmail.com', 'qweqweqweq', '2019-07-02 20:48:30', '2019-07-02 20:48:30', 'adbasd'),
(2, 'tester', '1234567890', 'testing@email.com', 'i am testing', '2019-07-17 14:21:22', '2019-07-17 14:21:22', 'habsdkbakd'),
(3, 'tester', '876541234', 'testing@email.com', 'baksbdbabdhjkas', '2019-07-20 21:13:24', '2019-07-20 21:13:24', 'asrter'),
(4, 'Ashutosh Tripathi', '8806065798', 'ashupagal@gmail.com', 'Hi,\r\n\r\nI would like to know the charges for a couple for 4 nights for Zero music festival time.\r\n\r\nThanks,\r\nAshutosh', '2019-07-22 23:11:50', '2019-07-22 23:11:50', NULL),
(5, 'AKASH PATHAK', '8790253746', 'akashpat75@gmail.com', 'I am interested in ZFM 2019 and would like to know more information about your packages and itinerary.', '2019-08-07 11:35:58', '2019-08-07 11:35:58', NULL),
(7, 'tester', '1234567890', 'nilesh@encamp.com', 'Testing', '2019-08-09 15:35:14', '2019-08-09 15:35:14', NULL),
(8, 'tester', '1234567890', 'testing@email.com', 'Another test', '2019-08-09 18:56:48', '2019-08-09 18:56:48', NULL),
(9, 'Karansinh Parmar', '9377599719', 'Karansinh15.parmar@gmail.com', 'Hello there, Karansinh here from Vadodara Gujarat. I would like to experience the Zero music festival.', '2019-08-09 21:39:50', '2019-08-09 21:39:50', NULL),
(10, 'Bhushan hathi', '9829025911', 'bhushanhathi@yahoo.com', 'Interested in ziro festival bookings \r\n\r\nOption of single stay 2 nights all inclusive of possible', '2019-08-12 00:56:43', '2019-08-12 00:56:43', NULL),
(11, 'Ameet jain', '9820016188', 'Ameetjain@icloud.com', 'Kindly contact me only on what’sapp', '2019-08-13 20:49:46', '2019-08-13 20:49:46', NULL),
(12, 'Ajith Krishnan', '9388481041', 'ajithkrishn@gmail.com', 'Hi\r\nLooking for details about the package', '2019-08-14 17:34:16', '2019-08-14 17:34:16', NULL),
(13, 'tester', '1234567890', 'testing@email.com', 'Just testing', '2019-08-21 15:42:44', '2019-08-21 15:42:44', NULL),
(14, 'Vishal Pal', '9756108796', 'Vishal.trbwins@gmail.com', 'Need accomodation from 27 Sep 19 to 29 Sep 19.', '2019-08-21 21:51:32', '2019-08-21 21:51:32', NULL),
(15, 'Rajnandini Kumari', '8276944303', 'rajnandini.mahi@gmail.com', 'Hi,\r\nWe are interested in music festival of 26-29 September and planning to visit on 28 afternoon with 10 people. please suggest accommodation, food and festival Pass package.', '2019-08-22 15:40:11', '2019-08-22 15:40:11', NULL),
(16, 'Nilesh', '7042531701', 'Nileshgoswami1110@gmail.com', 'Hello', '2019-08-23 00:23:29', '2019-08-23 00:23:29', NULL),
(17, 'Akshdeep', '7769987363', 'mailakshdeep@gmail.com', 'Can you send me the music line up for the festival.', '2019-08-23 14:11:40', '2019-08-23 14:11:40', NULL),
(18, 'Namita', '8967905058', 'namitalimbu31@gmail.com', 'Hello ! We are a couple planning to visit ziro music festival travelling from siliguri .Do you have a couple of slots for us ???', '2019-08-27 19:56:03', '2019-08-27 19:56:03', NULL),
(19, 'Kushal Sharma', '8447733601', 'rogerthatgame@gmail.com', 'Need to query for ziro festival 2019', '2019-08-29 15:24:24', '2019-08-29 15:24:24', NULL),
(20, 'Midhun Thaduru', '9030131517', 'tmidhunr@gmail.com', 'Hi, I\'m planning to visit north east in September. I would like to attend Ziro music fest. Could you please send me more details?', '2019-09-01 15:55:35', '2019-09-01 15:55:35', NULL),
(21, 'Kunal', '7887688888', 'kunal.baid@gmail.com', 'Please send me complete package details all inclusive for 2 pax on twin sharing tent basis .\r\n\r\nThanks', '2019-09-05 00:23:12', '2019-09-05 00:23:12', NULL),
(22, 'Souvik Deb', '8638712376', 'deb.souvik2612@gmail.com', 'Hello', '2019-09-10 10:38:19', '2019-09-10 10:38:19', NULL),
(23, 'Varun goel', '7838981466', 'varen.goel@gmail.com', 'Need to know how I can travel from Delhi with minimum expenses', '2019-09-15 15:42:57', '2019-09-15 15:42:57', NULL),
(24, 'Gautam Das', '9854032054', 'togautam.das@gmail.com', 'Hi, \r\n\r\nI want to book 2 N/3 D package starting from 27-9-19 to 29-9-19.  I wish to book tent accommodation for 3 persons (2 adult and 1 child aged 2 years).\r\nPlease, let me know availability and link for booking.\r\n\r\nRegards\r\nGautam Das\r\n9854032054, Dibrugarh', '2019-09-23 16:14:18', '2019-09-23 16:14:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mawleads`
--

CREATE TABLE `mawleads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mawleads`
--

INSERT INTO `mawleads` (`id`, `name`, `number`, `mail`, `checkin`, `created_at`, `updated_at`) VALUES
(1, 'Rahul', '8638167920', 'rahul@zakti.com', '2/26/2020', '2020-02-11 07:48:14', '2020-02-11 07:48:14'),
(2, 'Rahul', '8638167920', 'rahul@zakti.com', '2/28/2020', '2020-02-13 04:59:10', '2020-02-13 04:59:10'),
(3, 'Rahul', '8638167920', 'rahul@zakti.com', '2/28/2020', '2020-02-13 18:37:27', '2020-02-13 18:37:27'),
(4, 'Rahul', '8638167920', 'rahul@zakti.com', '2/28/2020', '2020-02-13 18:37:27', '2020-02-13 18:37:27'),
(5, 'nitin', '8638167920', 'rahul@zakti.com', '2/29/2020', '2020-02-13 18:37:40', '2020-02-13 18:37:40'),
(6, 'Testing', '8638167920', 'rahul@zaktidigital.com', '5/20/2020', '2020-05-27 22:58:38', '2020-05-27 22:58:38'),
(7, 'Mrigakshi Borthakur', '8486814322', 'mrigakshi499@gmail.com', '11/14/2020', '2020-05-29 19:33:13', '2020-05-29 19:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nh7leads`
--

CREATE TABLE `nh7leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nh7leads`
--

INSERT INTO `nh7leads` (`id`, `name`, `phno`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'tester', '1234567890', 'testing@email.com', 'asdasdassd', '2019-08-22 04:18:43', '2019-08-22 04:18:43'),
(2, 'rahul', '1234567890', 'testing@email.com', 'asdasdad', '2019-08-22 04:19:10', '2019-08-22 04:19:10'),
(3, 'Tester', '1234567890', 'rahul@zaktidigital.com', 'najsndjkna', '2019-08-22 21:08:59', '2019-08-22 21:08:59'),
(4, 'Deepak', '9436565872', 'Dchettri241@gmail.com', 'Hii', '2019-08-23 15:05:02', '2019-08-23 15:05:02'),
(5, 'Nilesh', '7042431701', 'Nileshgoswami1110@gmail.com', 'Testing', '2019-08-23 15:08:20', '2019-08-23 15:08:20'),
(6, 'tenzin jangsem', '8415853331', 'tenzinjangem@gmail.com', 'Want to knw the detail', '2019-08-24 01:56:49', '2019-08-24 01:56:49'),
(7, 'Niroshidha', '9952955344', 'sniroshidha95@gmail.com', 'Heyyy, would like have a run through a prospectus. Would love to be a part of this year\'s NH7', '2019-08-24 03:33:28', '2019-08-24 03:33:28'),
(8, 'Rakesh Roy', '9864083878', 'rroy035@gmail.com', 'I need tent for 4 person', '2019-08-25 02:27:17', '2019-08-25 02:27:17'),
(9, 'Debarun Banik', '9706660277', 'debarunbanik@gmail.com', 'It\'s me and my fiancée. I drink and she doesn\'t. Does the package include drinks too.', '2019-08-25 07:50:56', '2019-08-25 07:50:56'),
(10, 'Sounak Kundu', '9764405513', 'sounakpsychedelic@gmail.com', 'Are their any campstays available for the basic package for a single person.\r\nIf so please let me know.\r\nThanks.', '2019-08-25 14:25:17', '2019-08-25 14:25:17'),
(11, 'Sangeetha Krovvidi', '9987266669', 'mtsangeetha@gmail.com', 'More details', '2019-08-25 14:56:55', '2019-08-25 14:56:55'),
(12, 'Sangita Joishi', '8811088801', 'Sangiyana@gmail.com', 'Want to know in details for adult', '2019-09-17 23:24:51', '2019-09-17 23:24:51'),
(13, 'Susanth Masana', '9177760605', 'sushanth5653@gmail.com', 'Hi,\r\nPlease send the itinerary and camping details for both the packages.', '2019-09-21 12:11:54', '2019-09-21 12:11:54'),
(14, 'Kaushik deka', '8403064236', 'heyiamkaushik@gmail.com', 'I am going a Meghalaya becardi NH7 weekender', '2019-09-28 19:43:10', '2019-09-28 19:43:10'),
(15, 'Puja sarda', '7908057912', 'Pujasarda33@gmail.com', 'Contact me ASAP.', '2019-09-29 19:29:23', '2019-09-29 19:29:23'),
(16, 'Tanveer Malhotra', '9833397587', 'tanveer_malhotra@yahoo.com', 'I like your \'Extended\' option on Insider. I want you to plan my solo trip from Mumbai to the weekender and back. I have Diwali holidays from 26th October to 2nd November. Please call me or what\'s app on the above number. Thank you :)', '2019-09-29 23:08:20', '2019-09-29 23:08:20'),
(17, 'Priya Agarwala', '8486069554', 'priyagarwal97@gmail.com', 'Can u send me the whole itinerary. With the schedule for sports n music festival.', '2019-09-30 20:45:40', '2019-09-30 20:45:40'),
(18, 'Tadu Kani', '8794923211', 'tadukani12@icloud.com', 'Hi I please send me the complete itinerary.\r\nThank you', '2019-10-01 09:51:59', '2019-10-01 09:51:59'),
(19, 'Prakrit Kamra', '9971992084', 'prakrit.kamra@gmail.com', 'Hey there!\r\n\r\nI am interested in camping at NH7 and also at Dawki. Can you please send the details / prices to me?\r\n\r\nThanks,\r\nPrakrit', '2019-10-01 14:25:29', '2019-10-01 14:25:29'),
(20, 'Meha', 'Thacker', 'meha.thacker@gmail.com', 'Interested in Weekender stay for 2 nights - 5 people', '2019-10-01 16:12:52', '2019-10-01 16:12:52'),
(21, 'Ankit Kumar Gaur', '9561404003', 'ankitgaur573@gmail.com', 'I am Ankit from Delhi. I will be coming down to NH7 this November. Wanted to book a tent for 2 but your number is unreachable. \r\nWill your camps be nearby or inside the NH7 premises?', '2019-10-01 19:20:15', '2019-10-01 19:20:15'),
(22, 'Gaurav Navalakha', '9435118785', 'gaurav.navalakha@gmail.com', 'We wish to book camps for 2 days. Please let us know the details and price', '2019-10-02 14:24:03', '2019-10-02 14:24:03'),
(23, 'Meheran islam', '7002513737', 'meheranislam12345@gmail.com', 'I would like to go with my wife ...\r\nHow to book tickets ?', '2019-10-03 02:02:00', '2019-10-03 02:02:00'),
(24, 'Amarjyoti goswsmi', '7002606067', 'amar.bellissa@gmail.com', 'Please let me know about NH7 Weekender 2019 and complete trip itinerary. And please tell me whether car parking is there at the campsite or not?', '2019-10-03 16:29:41', '2019-10-03 16:29:41'),
(25, 'Karan Maheshwari', '9500095960', 'karan96maheshwari@gmail.com', 'Hi from Chennai interested to take part in the festival', '2019-10-03 20:38:14', '2019-10-03 20:38:14'),
(26, 'Ryan white', '9611344458', 'ryanwandroid@gmail.com', 'Inquiring about 3 tickets', '2019-10-04 14:21:34', '2019-10-04 14:21:34'),
(27, 'Yashu kapoor', '9911576607', 'yashu.kapoor1@gmail.com', 'What\'s the difference in the  two packages?\r\nYashu', '2019-10-04 15:42:33', '2019-10-04 15:42:33'),
(28, 'Harshika', '9849852245', 'harshikajn2@gmail.com', 'Heyyyy could I get the itinerary of the event', '2019-10-05 10:16:23', '2019-10-05 10:16:23'),
(29, 'Evangelina Dhar', '7829130047', 'Evangelina.dhar@gmail.com', 'Just wanna know', '2019-10-05 14:13:36', '2019-10-05 14:13:36'),
(30, 'Tanmay kr das', '8486301646', 'Tanmaykumard5@gmail.com', 'Booking', '2019-10-05 17:59:35', '2019-10-05 17:59:35'),
(31, 'sandeep gangadhar', '9448083042', 'sg_blr2001@yahoo.com', 'Hi,My wife and I would like to use your facility for 3 days and 2 nights starting from 31/10/2019.I would like to know a) If its available b)What is the vegetarian food offered c) Can we walk to the music show Bacardi NH7 weekend  d) how safe is the place.\r\nAlso as we would be staying on 31st  and 2nd most day what are our options to see and the cost for the same\r\nWhat would be the mode of transport available from and to Shillong \r\nShall appreciate a quick reply\r\nRegards \r\nSandeep Gangadhar', '2019-10-06 21:46:56', '2019-10-06 21:46:56'),
(32, 'Amzad Hussain', '9957942304', 'hussainamzad903@gmail.com', 'I want tow tickets', '2019-10-07 18:57:52', '2019-10-07 18:57:52'),
(33, 'Varun Khettry', '9820416066', 'khettry.varun@gmail.com', 'need basic 1n/2d', '2019-10-07 20:19:44', '2019-10-07 20:19:44'),
(34, 'Jameson', '7896497815', 'jamskonth@gmail.com', 'Is the tickets still available??', '2019-10-08 02:47:44', '2019-10-08 02:47:44'),
(35, 'debangan bhattacharyya', '9674025101', 'debangan.b@gmail.com', 'We are two people , traveling from Kolkata. Let us know more about travel and accomodation', '2019-10-09 01:11:45', '2019-10-09 01:11:45'),
(36, 'Anurag saha', '7044506552', 'sahaanurag63@gmail.com', 'Need camping on 1 st and 2 Nd November', '2019-10-09 15:24:24', '2019-10-09 15:24:24'),
(37, 'ABHIJEET RAJKHOWA', '7399480008', 'abhijeet95u@gmail.com', 'I want to know more about NH7 weekender, like passes, stay, washroom, parking.', '2019-10-10 00:32:08', '2019-10-10 00:32:08'),
(38, 'Akanksha Bhalerao', '7385240720', 'akankshasbhalerao@gmail.com', 'About the passes', '2019-10-10 11:18:07', '2019-10-10 11:18:07'),
(39, 'Astha shah', '8698307086', 'asthapratiekshah@gmail.com', 'About the passes', '2019-10-10 11:19:20', '2019-10-10 11:19:20'),
(40, 'Kamal Krishna Basumatary', '7002923488', 'Kamalkrishnabasu7002923488@gmail.com', 'I want to visit', '2019-10-10 16:54:18', '2019-10-10 16:54:18'),
(41, 'Kamal Krishna Basumatary', '7002923488', 'Kamalkrishnabasu7002923488@gmail.com', 'I want to visit', '2019-10-10 16:54:33', '2019-10-10 16:54:33'),
(42, 'Rubi', '9085154274', 'kalitarubee@gmail.com', 'Let me know more', '2019-10-10 19:58:49', '2019-10-10 19:58:49'),
(44, 'malabika sarma', '7002495017', 'malabikasharma1234@gmail.com', 'Cool', '2019-10-13 12:12:33', '2019-10-13 12:12:33'),
(45, 'Andria Fanai', '9774637799', 'ndrewfanai@gmail.com', 'What if we want to camp? What should we do or talk to?', '2019-10-13 20:19:18', '2019-10-13 20:19:18'),
(46, 'Appu', '8787400760', 'Appuraj418@gmail.com', 'Need more information', '2019-10-14 01:28:50', '2019-10-14 01:28:50'),
(47, 'Animesh Dev barma', '7005623861', 'animeshdevbarma22@gmail.com', 'please send me the whole details... regarding camping price n other stuffs', '2019-10-15 01:59:28', '2019-10-15 01:59:28'),
(48, 'Chesong teron', '9613912824', 'rongpipisabitri5@gmail.com', 'Hiii', '2019-10-15 02:21:55', '2019-10-15 02:21:55'),
(49, 'Akshay nangia', '7908020926', 'akshaynangia93@gmail.com', 'Looking for a tent on sharing basis,  please confirm the best possible price with meal inclusions. And I hope the campsite would have a safe parking', '2019-10-15 02:39:34', '2019-10-15 02:39:34'),
(50, 'Chandan tamang', '8011979620', 'chantmg@gmail.com', 'Rock on...', '2019-10-15 03:01:25', '2019-10-15 03:01:25'),
(51, 'Deepak', '7406893481', 'chikki2082@gmail.com', 'Hi, I am planning to attend with my family (two adults n two 6 yr old kids). We are looking for your basic package. I have the following querries:-\r\n 1.   Will one unit of accommodation suffice for whole family. PL share pics on WA.\r\n2.  What are the dates? 01-02 Nov? \r\n3.   What kind of food can we expect?\r\n4.  How do we book tickets for the fest?\r\nWill be highly obliged for an early reply or call back.\r\nThanks\r\nDeepak', '2019-10-15 07:14:01', '2019-10-15 07:14:01'),
(52, 'Sanjib Saikia', '9894964960', 'yankusaikia9706@gmail.com', 'I have to visit this time..', '2019-10-15 11:38:17', '2019-10-15 11:38:17'),
(53, 'Krishnendu Das', '9330665422', 'Krishnendu1993@gmail.com', 'Interested', '2019-10-17 19:01:32', '2019-10-17 19:01:32'),
(54, 'Rabinder Singh', '9741965488', 'rabinder4u@rediffmail.com', 'Hello I would like to join', '2019-10-17 19:52:42', '2019-10-17 19:52:42'),
(55, 'Sanasam Malemnganba Mangang', '9774901829', 'malemnganba25@gmail.com', 'Interested in travelling, enyoing, camping, bonfire and more i would like to join for this NH 7 weekender.', '2019-10-17 20:43:37', '2019-10-17 20:43:37'),
(56, 'Subham Jain', '8474866963', 'subhamjainnalbari@gmail.com', 'Please let me know the full details about this festival', '2019-10-17 21:40:21', '2019-10-17 21:40:21'),
(57, 'Arijit Bhattacharjee', '9864777755', 'ab.slcclash@gmail.com', 'Big Fan of weekender', '2019-10-17 21:42:47', '2019-10-17 21:42:47'),
(58, 'Shivam Srivastava', '7331102158', 'shivam1317@gmail.com', 'Hey. I\'ve booked tickets for the Weekender in Shillong this year. I\'m yet to book my accommodation. Would be great if I could get more details.', '2019-10-17 22:16:54', '2019-10-17 22:16:54'),
(59, 'Devashish Pareek', '9874800211', 'devashishkathotia@gmail.com', 'Please send me a complete itinerary for the trip', '2019-10-18 10:53:30', '2019-10-18 10:53:30'),
(60, 'Riya Agrawal', '9678735719', 'monika.monu645@gmail.com', 'I want to know the whole itinerary', '2019-10-18 22:44:23', '2019-10-18 22:44:23'),
(61, 'Akash biswa', '7009088618', 'ab277035@gmail.com', 'Which music band is coming this year??', '2019-10-19 01:21:14', '2019-10-19 01:21:14'),
(62, 'ASIM BHUYAN', '6003109801', 'bhuyanasim8@gmail.com', 'Please ensure me full complete details', '2019-10-19 10:21:21', '2019-10-19 10:21:21'),
(63, 'Gokul kumar Basumatary', '8876395733', 'gocoolkr@gmail.com', 'Planning to go for weekender eve 2019,kindly please let me know the total package for one individual expense.', '2019-10-19 14:37:25', '2019-10-19 14:37:25'),
(64, 'Mardikordor pohchen', '9612135429', 'Mardikordor@gmail.com', 'Which website can we get the reserve tickets', '2019-10-19 17:44:37', '2019-10-19 17:44:37'),
(65, 'Jai Rajiv', '9920814997', 'chhedajai@gmail.com', 'Hello , \r\nAttending the weekender at Shillong this year. I\'m landing in Guwahati on the 31st of October and plan to attend the festival and leave on the 3rd of November. Was wondering if you have camping facilities from the 31st Oct to the 3rd of November. Im willing to pay the extra charges. Do let me know so that I can book at the earliest.\r\n\r\nBest,\r\nJai Chheda', '2019-10-20 11:26:12', '2019-10-20 11:26:12'),
(66, 'Dr Samit Chowdhury', '8473021537', 'chowdhurysamit@gmail.com', 'complete trip itinerary required', '2019-10-21 00:59:00', '2019-10-21 00:59:00'),
(67, 'Raghav Chokhani', '9436702533', 'raghavchokhani006@gmail.com', 'Interested', '2019-10-21 10:05:22', '2019-10-21 10:05:22'),
(68, 'Abhivyakti', '9554622486', 'abhionline01@gmail.com', 'More details plz!', '2019-10-21 13:23:01', '2019-10-21 13:23:01'),
(69, 'Arghajyoti Debnath', '9954907468', 'arghanath879@gmail.com', 'I want time table', '2019-10-21 13:48:35', '2019-10-21 13:48:35'),
(70, 'Ella Seri Levy', '9127542275', 'Ellaserilevy@gmail.com', 'Hi\r\nI want to buy 3 tickets for 2d 1n.', '2019-10-21 18:07:08', '2019-10-21 18:07:08'),
(71, 'Ella Seri Levy', '9127542275', 'Ellaserilevy@gmail.com', 'Hi\r\nI want to buy 3 tickets for 2d 1n.', '2019-10-21 18:16:42', '2019-10-21 18:16:42'),
(72, 'Anvesh', '9849205252', 'anni.reddy89@gmail.com', 'I am interested in knowing more.. please help!', '2019-10-22 03:02:32', '2019-10-22 03:02:32'),
(73, 'K Surajit Singha', '9435171303', 'sucokonsam@gmail.com', 'I need a seasonal ticket for nh7 weekender jowai', '2019-10-22 10:20:53', '2019-10-22 10:20:53'),
(74, 'Priyanka Chopra', '8392048444', 'Lifezcull@gmail.com', 'We are 3 people needing two tents and 2N 3 D stay', '2019-10-22 12:18:29', '2019-10-22 12:18:29'),
(75, 'Bobita Bathari', '600397137', 'Bobita3kemprai@gmail.com', 'I want to know about NH7 weekender 2019', '2019-10-22 13:14:15', '2019-10-22 13:14:15'),
(76, 'Ashish', '9521648687', 'dhayalashish44@gmail.com', 'Query', '2019-10-22 15:01:34', '2019-10-22 15:01:34'),
(77, 'Subhankar Saha', '9954171140', 'subhankarsaha10@rocketmail.com', 'How much to pay for a group of 4 to 5 people ??? For 1N/2D', '2019-10-22 15:21:47', '2019-10-22 15:21:47'),
(78, 'Noring', '9957883372', 'noringdaulaguphu@gmail.com', 'I want to know all the structure of weekender\r\nThe fair of rides\r\nCampaign,food,stay etc...', '2019-10-22 17:20:12', '2019-10-22 17:20:12'),
(79, 'arindam bharati', '8876438820', 'arindam.shivam26@gmail.com', 'need booking and pass', '2019-10-22 22:26:56', '2019-10-22 22:26:56'),
(80, 'Ishant rajkhowa', '8876684302', 'Irajkhowa12@gmail.com', 'Please send me the ticket prices', '2019-10-22 23:13:37', '2019-10-22 23:13:37'),
(81, 'Kaustav Chowdhury', '9706925162', 'kaustavchoudhury94@gmail.com', 'Need complete information. Thanks', '2019-10-23 02:10:17', '2019-10-23 02:10:17'),
(82, 'Pramita Gurung', '8119835638', 'pramitagurung25@gmail.com', 'Which oll Musical bands and artists r performing', '2019-10-23 02:44:05', '2019-10-23 02:44:05'),
(83, 'Tester', '1234567890', 'testing@email.com', 'testing', '2019-10-23 17:10:17', '2019-10-23 17:10:17'),
(84, 'JYOTISHMAN BORAH', '6003583872', 'borahjyoti.man@gmail.com', 'Can we take our own tent?', '2019-10-23 22:18:02', '2019-10-23 22:18:02'),
(85, 'RAJIB HAZARIKA', '9854279600', 'rajibhzk@gmail.com', 'Thank you', '2019-10-23 23:09:22', '2019-10-23 23:09:22'),
(86, 'YASHASWI GHOSH', '9402168223', 'yashaswighosh@gmail.com', 'Start & End TRIP DATE TO BE REVEALED', '2019-10-25 18:20:34', '2019-10-25 18:20:34'),
(87, 'Proteepol Baruah', '8638966488', 'proteepaul.baruah@gmail.com', 'Hello first of all I want to know the lineup of the bands going to perform in nh7 weekend 2019, shillong. N price of ticket in details.\r\nThank you', '2019-10-25 23:53:06', '2019-10-25 23:53:06'),
(88, 'Ketan Goyal', '9957478715', 'ketangoyal60@gmail.com', 'Hello', '2019-10-26 17:26:13', '2019-10-26 17:26:13'),
(89, 'Manash jyoti baruah', '9101613581', 'manashjyotibaruah10@gmail.com', '4people', '2019-10-26 23:42:29', '2019-10-26 23:42:29'),
(90, 'Ramu boro', '863859o022', 'Ramuboro195@gmail.com', 'Fottball trails', '2019-10-28 05:43:25', '2019-10-28 05:43:25'),
(91, 'santosh tamang', '9402953139', 'santoshtamang05@yahoo.com', 'I want to know about the details of d artists pwrformin', '2019-10-28 18:40:01', '2019-10-28 18:40:01'),
(92, 'nandan handique', '9678784339', 'nandanhandique588gmail.com', 'Excited', '2019-10-30 23:17:37', '2019-10-30 23:17:37'),
(93, 'Rekha somra', '8137949262', 'rekhasomra@gmail.com', 'Need booking for three for 2nd Nov with camp stay', '2019-10-31 15:06:06', '2019-10-31 15:06:06'),
(94, 'Pamiya Dasgupta', '8723063906', 'pamiyadasgupta@gmail.com', 'Where\'s the exact location? How can we reach there? Do we need to take our own private car or we can get public transportation there', '2019-10-31 15:53:27', '2019-10-31 15:53:27'),
(95, 'Ramen Kalita', '9864296666', 'ramenkalita236@gmail.com', 'Hi, \r\nCan you please share complete details of the event.', '2019-10-31 17:45:28', '2019-10-31 17:45:28'),
(96, 'Priyanka', 'Golchha', 'priyankagolchha@hotmail.com', 'Plz keep me posted for ur upcoming events. \r\nThanks\r\nPriyanka golchha', '2019-11-05 17:43:06', '2019-11-05 17:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `nongleads`
--

CREATE TABLE `nongleads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nongleads`
--

INSERT INTO `nongleads` (`id`, `name`, `number`, `mail`, `checkin`, `created_at`, `updated_at`) VALUES
(1, 'Rahul', '8638167920', 'rahul@zakti.com', '2/20/2020', '2020-02-11 07:47:57', '2020-02-11 07:47:57'),
(2, 'rahul', '8638167920', 'rahul@zakti.com', '2/27/2020', '2020-02-13 05:00:34', '2020-02-13 05:00:34'),
(3, 'test', '8638167920', 'rahul@zaktidigital.com', '5/20/2020', '2020-05-27 22:57:48', '2020-05-27 22:57:48');

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
-- Table structure for table `sevens`
--

CREATE TABLE `sevens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sevens`
--

INSERT INTO `sevens` (`id`, `name`, `phone`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Singha', '8638167920', 'abc', '2020-05-27 03:21:02', '2020-05-27 03:21:02'),
(2, 'Rahul Singha', '8638167920', 'Guwahati', '2020-05-27 21:31:34', '2020-05-27 21:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(NULL, 'Nilesh', 'nilesh@encampadventures.com', NULL, '$2y$10$FtKklzPVrKaPAv7EtPv4V.y6sqgSY9MFNBwgg7c9D0OxD5YkE9Xjy', NULL, '2019-08-09 15:22:30', '2019-08-09 15:22:30'),
(1, 'Nilesh', 'nilesh@encamp.com', NULL, '$2y$10$tzo4hD18yW72uO7cvWOQ2uubXbRZIP6j.FclbYP/DsTlZbBn4E6/.', 'UEU1H7xpnWBX2Y4uaeAHde1rGIHrEdFWAGxKwOGQodLhH8Fg29xVrW4gxBn7', '2019-08-09 15:26:24', '2019-08-09 15:26:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dawkileads`
--
ALTER TABLE `dawkileads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dzukous`
--
ALTER TABLE `dzukous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hornleads`
--
ALTER TABLE `hornleads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khanaparaleads`
--
ALTER TABLE `khanaparaleads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mawleads`
--
ALTER TABLE `mawleads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nh7leads`
--
ALTER TABLE `nh7leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nongleads`
--
ALTER TABLE `nongleads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `sevens`
--
ALTER TABLE `sevens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dawkileads`
--
ALTER TABLE `dawkileads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dzukous`
--
ALTER TABLE `dzukous`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hornleads`
--
ALTER TABLE `hornleads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `khanaparaleads`
--
ALTER TABLE `khanaparaleads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mawleads`
--
ALTER TABLE `mawleads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nh7leads`
--
ALTER TABLE `nh7leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `nongleads`
--
ALTER TABLE `nongleads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sevens`
--
ALTER TABLE `sevens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
