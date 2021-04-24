-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2021 at 11:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonto`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_parents`
--

CREATE TABLE `all_parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_o_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_parents`
--

INSERT INTO `all_parents` (`id`, `first_name`, `surname`, `occupation`, `id_number`, `p_o_box`, `town`, `town_code`, `phone_no`, `landline`, `guardian_email`, `guardian`, `description`, `created_at`, `updated_at`, `deleted_at`, `student_id`, `created_by_id`) VALUES
(1, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(2, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(3, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(4, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(5, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(6, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(7, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(8, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(9, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(10, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6),
(11, 'Fletcher', 'Hardy', 'Voluptas itaque duci', '536', 'P.O. Box 4573', 'Tempora consectetur', 'Ex magnam modi nobis', '+1 (892) 514-3355', 'Aut nostrum beatae u', 'qijuxukyr@mailinator.com', 'Relative', 'Enim qui in placeat', '2021-04-24 10:58:42', '2021-04-24 11:12:39', NULL, 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `all_students`
--

CREATE TABLE `all_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_o_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabled` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `kcpe_grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kcpe_total_marks` int(11) NOT NULL,
  `admission_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_students`
--

INSERT INTO `all_students` (`id`, `surname`, `name`, `p_o_box`, `town`, `town_code`, `phone_no`, `email`, `country`, `date_of_birth`, `religion`, `gender`, `village`, `county`, `disabled`, `description`, `status`, `kcpe_grade`, `kcpe_total_marks`, `admission_number`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(1, 'Valdez', 'Cooper Rojas', 'P.O. Box 1871', 'Irure ipsum sint si', 'Sint voluptate blan', '+1 (139) 927-6441', 'qusum@mailinator.com', 'KE', '2021-04-24', 'Christian', 'Others', 'Alias lorem aliquam', 'Nyeri', 'Yes', 'Illum et perferendi', 1, 'B', 30, '867', '2021-04-23 21:09:57', NULL, NULL, 1),
(2, 'Nunez', 'Allen Mills', 'PO Box 4347', 'Consequatur lorem es', 'Obcaecati ea quisqua', '+1 (365) 566-2026', 'byjy@mailinator.com', 'KE', '2021-04-24', 'Muslim', 'Others', 'Et debitis at volupt', 'Nyeri', 'No', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before fi', 0, 'C', 12, '219', '2021-04-23 21:21:20', '2021-04-24 09:04:46', NULL, 1),
(3, 'Valdez', 'Cooper Rojas', 'P.O. Box 1871', 'Irure ipsum sint si', 'Sint voluptate blan', '+1 (139) 927-6441', 'qusum@mailinator.com', 'KE', '2021-04-24', 'Christian', 'Others', 'Alias lorem aliquam', 'Nyeri', 'Yes', 'Illum et perferendi', 91, 'Nemo est rerum ex no', 30, '867', '2021-04-23 21:09:57', '2021-04-23 22:09:40', '2021-04-23 22:09:40', 1),
(4, 'Nunez', 'Allen Mills', 'PO Box 4347', 'Consequatur lorem es', 'Obcaecati ea quisqua', '+1 (365) 566-2026', 'byjy@mailinator.com', 'KE', '2021-04-24', 'Muslim', 'Others', 'Et debitis at volupt', 'Nyeri', 'No', 'In repellendus Anim', 7, 'Non et amet autem a', 12, '219', '2021-04-23 21:21:20', '2021-04-23 22:09:33', '2021-04-23 22:09:33', 1),
(5, 'Price', 'Sierra Dejesus', 'PO Box 312', 'Officia non nobis do', 'Aliquip consequatur', '+1 (342) 606-8598', 'lanac@mailinator.com', 'KE', '2021-04-24', 'Buthist', 'Male', 'Dolorem deserunt mol', 'Nyeri', 'Yes', 'Labore labore fugiat', 1, 'A', 100, '777', '2021-04-23 22:21:59', '2021-04-23 22:21:59', NULL, 1),
(6, 'Harper', 'Allen Henderson', 'PO Box 2', 'Quidem ad veritatis', 'Nemo quod maiores vo', '+1 (113) 949-8839', 'fawut@mailinator.com', 'KE', '2021-04-24', 'Muslim', 'Male', 'Eius deleniti sunt', 'Nyeri', 'No', 'Dolores ipsum nobis', 1, 'E', 55, '55', '2021-04-24 09:42:04', '2021-04-24 09:42:04', NULL, 1),
(7, 'Hancock', 'Aubrey Browning', 'P.O. Box 75615', 'Dolor omnis molestia', 'Reprehenderit laboru', '+1 (279) 934-1601', 'xefumile@mailinator.com', 'KE', '2021-04-24', 'Protestant', 'Male', 'Anim corporis atque', 'Nyeri', 'Yes', 'Autem excepteur culp', 0, 'A', 72, '7265', '2021-04-24 10:01:20', '2021-04-24 10:01:20', NULL, 6),
(8, 'Valdez', 'Cooper Rojas', 'P.O. Box 1871', 'Irure ipsum sint si', 'Sint voluptate blan', '+1 (139) 927-6441', 'qusum@mailinator.com', 'KE', '2021-04-24', 'Christian', 'Others', 'Alias lorem aliquam', 'Nyeri', 'Yes', 'Illum et perferendi', 1, 'B', 30, '867', '2021-04-23 21:09:57', NULL, NULL, 1),
(9, 'Nunez', 'Allen Mills', 'PO Box 4347', 'Consequatur lorem es', 'Obcaecati ea quisqua', '+1 (365) 566-2026', 'byjy@mailinator.com', 'KE', '2021-04-24', 'Muslim', 'Others', 'Et debitis at volupt', 'Nyeri', 'No', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before fi', 0, 'C', 12, '219', '2021-04-23 21:21:20', '2021-04-24 09:04:46', NULL, 1),
(10, 'Valdez', 'Cooper Rojas', 'P.O. Box 1871', 'Irure ipsum sint si', 'Sint voluptate blan', '+1 (139) 927-6441', 'qusum@mailinator.com', 'KE', '2021-04-24', 'Christian', 'Others', 'Alias lorem aliquam', 'Nyeri', 'Yes', 'Illum et perferendi', 91, 'Nemo est rerum ex no', 30, '867', '2021-04-23 21:09:57', '2021-04-23 22:09:40', '2021-04-23 22:09:40', 1),
(11, 'Nunez', 'Allen Mills', 'PO Box 4347', 'Consequatur lorem es', 'Obcaecati ea quisqua', '+1 (365) 566-2026', 'byjy@mailinator.com', 'KE', '2021-04-24', 'Muslim', 'Others', 'Et debitis at volupt', 'Nyeri', 'No', 'In repellendus Anim', 7, 'Non et amet autem a', 12, '219', '2021-04-23 21:21:20', '2021-04-23 22:09:33', '2021-04-23 22:09:33', 1),
(12, 'Price', 'Sierra Dejesus', 'PO Box 312', 'Officia non nobis do', 'Aliquip consequatur', '+1 (342) 606-8598', 'lanac@mailinator.com', 'KE', '2021-04-24', 'Buthist', 'Male', 'Dolorem deserunt mol', 'Nyeri', 'Yes', 'Labore labore fugiat', 1, 'A', 100, '777', '2021-04-23 22:21:59', '2021-04-23 22:21:59', NULL, 1),
(13, 'Harper', 'Allen Henderson', 'PO Box 2', 'Quidem ad veritatis', 'Nemo quod maiores vo', '+1 (113) 949-8839', 'fawut@mailinator.com', 'KE', '2021-04-24', 'Muslim', 'Male', 'Eius deleniti sunt', 'Nyeri', 'No', 'Dolores ipsum nobis', 1, 'E', 55, '55', '2021-04-24 09:42:04', '2021-04-24 09:42:04', NULL, 1),
(14, 'Hancock', 'Aubrey Browning', 'P.O. Box 75615', 'Dolor omnis molestia', 'Reprehenderit laboru', '+1 (279) 934-1601', 'xefumile@mailinator.com', 'KE', '2021-04-24', 'Protestant', 'Male', 'Anim corporis atque', 'Nyeri', 'Yes', 'Autem excepteur culp', 0, 'A', 72, '7265', '2021-04-24 10:01:20', '2021-04-24 10:01:20', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(1, 'created', 2, 'App\\Models\\User', NULL, '{\"name\":\"Fletcher Spence\",\"email\":\"mumyco@mailinator.com\",\"updated_at\":\"2021-04-23 22:24:59\",\"created_at\":\"2021-04-23 22:24:59\",\"id\":2,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 19:24:59', '2021-04-23 19:24:59'),
(2, 'updated', 2, 'App\\Models\\User', NULL, '{\"name\":\"Fletcher Spence\",\"email\":\"mumyco@mailinator.com\",\"updated_at\":\"2021-04-23 22:24:59\",\"created_at\":\"2021-04-23 22:24:59\",\"id\":2,\"verification_token\":\"hDcjzuz2TFFOeSU6GQAEu3o846OIuEkxHBObMsYWCYCvlYzX5oaj5lZrYEorGZFp\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 19:25:00', '2021-04-23 19:25:00'),
(3, 'created', 3, 'App\\Models\\User', NULL, '{\"name\":\"Alyssa Lewis\",\"email\":\"gyruko@mailinator.com\",\"updated_at\":\"2021-04-23 22:27:20\",\"created_at\":\"2021-04-23 22:27:20\",\"id\":3,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 19:27:20', '2021-04-23 19:27:20'),
(4, 'updated', 3, 'App\\Models\\User', NULL, '{\"name\":\"Alyssa Lewis\",\"email\":\"gyruko@mailinator.com\",\"updated_at\":\"2021-04-23 22:27:20\",\"created_at\":\"2021-04-23 22:27:20\",\"id\":3,\"verification_token\":\"Snzrr1C5jEJCslZUgffuv6ifFWE6QzdJ04rknwIL9MfQJJWQ7VDgSzGKJDyneix3\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 19:27:20', '2021-04-23 19:27:20'),
(5, 'created', 1, 'App\\Models\\UserType', 1, '{\"name\":\"Student\",\"updated_at\":\"2021-04-23 23:35:48\",\"created_at\":\"2021-04-23 23:35:48\",\"id\":1,\"image\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 20:35:48', '2021-04-23 20:35:48'),
(6, 'created', 4, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Shannon Mills\",\"email\":\"laxubydit@mailinator.com\",\"updated_at\":\"2021-04-23 23:36:21\",\"created_at\":\"2021-04-23 23:36:21\",\"id\":4,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 20:36:21', '2021-04-23 20:36:21'),
(7, 'updated', 4, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Shannon Mills\",\"email\":\"laxubydit@mailinator.com\",\"updated_at\":\"2021-04-23 23:36:21\",\"created_at\":\"2021-04-23 23:36:21\",\"id\":4,\"verified\":1,\"verified_at\":\"23\\/04\\/2021 23:36:21\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 20:36:21', '2021-04-23 20:36:21'),
(8, 'updated', 4, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Shannon Mills\",\"email\":\"laxubydit@mailinator.com\",\"updated_at\":\"2021-04-23 23:36:26\",\"created_at\":\"2021-04-23 23:36:21\",\"id\":4,\"verified\":1,\"verified_at\":\"23\\/04\\/2021 23:36:26\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 20:36:26', '2021-04-23 20:36:26'),
(9, 'created', 5, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Kimberley Odonnell\",\"email\":\"mume@mailinator.com\",\"updated_at\":\"2021-04-23 23:38:46\",\"created_at\":\"2021-04-23 23:38:46\",\"id\":5,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 20:38:46', '2021-04-23 20:38:46'),
(10, 'updated', 5, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Kimberley Odonnell\",\"email\":\"mume@mailinator.com\",\"updated_at\":\"2021-04-23 23:38:46\",\"created_at\":\"2021-04-23 23:38:46\",\"id\":5,\"verified\":1,\"verified_at\":\"23\\/04\\/2021 23:38:46\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 20:38:46', '2021-04-23 20:38:46'),
(11, 'updated', 5, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Kimberley Odonnell\",\"email\":\"mume@mailinator.com\",\"updated_at\":\"2021-04-23 23:38:49\",\"created_at\":\"2021-04-23 23:38:46\",\"id\":5,\"verified\":1,\"verified_at\":\"23\\/04\\/2021 23:38:49\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 20:38:49', '2021-04-23 20:38:49'),
(12, 'created', 1, 'App\\Models\\AllStudent', 1, '{\"surname\":\"Valdez\",\"name\":\"Cooper Rojas\",\"p_o_box\":\"P.O. Box 1871\",\"town\":\"Irure ipsum sint si\",\"town_code\":\"Sint voluptate blan\",\"phone_no\":\"+1 (139) 927-6441\",\"email\":\"qusum@mailinator.com\",\"village\":\"Alias lorem aliquam\",\"county\":\"Nyeri\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Christian\",\"gender\":\"Others\",\"kcpe_grade\":\"Nemo est rerum ex no\",\"kcpe_total_marks\":\"30\",\"disabled\":\"Yes\",\"description\":\"Illum et perferendi\",\"admission_number\":\"867\",\"status\":\"91\",\"updated_at\":\"2021-04-24 00:09:57\",\"created_at\":\"2021-04-24 00:09:57\",\"id\":1,\"result_slip\":null,\"birth_certificate\":null,\"passport_photo\":null,\"any_other_documents\":[],\"media\":[]}', '127.0.0.1', '2021-04-23 21:09:57', '2021-04-23 21:09:57'),
(13, 'created', 2, 'App\\Models\\AllStudent', 1, '{\"surname\":\"Nunez\",\"name\":\"Allen Mills\",\"p_o_box\":\"PO Box 4347\",\"town\":\"Consequatur lorem es\",\"town_code\":\"Obcaecati ea quisqua\",\"phone_no\":\"+1 (365) 566-2026\",\"email\":\"byjy@mailinator.com\",\"village\":\"Et debitis at volupt\",\"county\":\"Nyeri\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Muslim\",\"gender\":\"Others\",\"kcpe_grade\":\"Non et amet autem a\",\"kcpe_total_marks\":\"12\",\"disabled\":\"No\",\"description\":\"In repellendus Anim\",\"admission_number\":\"219\",\"status\":\"7\",\"updated_at\":\"2021-04-24 00:21:20\",\"created_at\":\"2021-04-24 00:21:20\",\"id\":2,\"result_slip\":null,\"birth_certificate\":null,\"passport_photo\":null,\"any_other_documents\":[],\"media\":[]}', '127.0.0.1', '2021-04-23 21:21:20', '2021-04-23 21:21:20'),
(14, 'created', 6, 'App\\Models\\User', NULL, '{\"name\":\"Felicia Mendoza\",\"email\":\"doluluxepy@mailinator.com\",\"updated_at\":\"2021-04-24 00:50:23\",\"created_at\":\"2021-04-24 00:50:23\",\"id\":6,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 21:50:24', '2021-04-23 21:50:24'),
(15, 'updated', 6, 'App\\Models\\User', NULL, '{\"name\":\"Felicia Mendoza\",\"email\":\"doluluxepy@mailinator.com\",\"updated_at\":\"2021-04-24 00:50:23\",\"created_at\":\"2021-04-24 00:50:23\",\"id\":6,\"verification_token\":\"OxlRvlxRIOIAylUAfI26iRemCCxAi3UxD4PAgeM3VaC7qXFgqSPif8v0XMRlHrXj\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 21:50:24', '2021-04-23 21:50:24'),
(16, 'deleted', 4, 'App\\Models\\AllStudent', 1, '{\"id\":4,\"surname\":\"Nunez\",\"name\":\"Allen Mills\",\"p_o_box\":\"PO Box 4347\",\"town\":\"Consequatur lorem es\",\"town_code\":\"Obcaecati ea quisqua\",\"phone_no\":\"+1 (365) 566-2026\",\"email\":\"byjy@mailinator.com\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Muslim\",\"gender\":\"Others\",\"village\":\"Et debitis at volupt\",\"county\":\"Nyeri\",\"disabled\":\"No\",\"description\":\"In repellendus Anim\",\"status\":7,\"kcpe_grade\":\"Non et amet autem a\",\"kcpe_total_marks\":12,\"admission_number\":\"219\",\"created_at\":\"2021-04-24 00:21:20\",\"updated_at\":\"2021-04-24 01:09:33\",\"deleted_at\":\"2021-04-24 01:09:33\",\"created_by_id\":1,\"result_slip\":null,\"birth_certificate\":null,\"passport_photo\":null,\"any_other_documents\":[],\"media\":[]}', '127.0.0.1', '2021-04-23 22:09:34', '2021-04-23 22:09:34'),
(17, 'deleted', 3, 'App\\Models\\AllStudent', 1, '{\"id\":3,\"surname\":\"Valdez\",\"name\":\"Cooper Rojas\",\"p_o_box\":\"P.O. Box 1871\",\"town\":\"Irure ipsum sint si\",\"town_code\":\"Sint voluptate blan\",\"phone_no\":\"+1 (139) 927-6441\",\"email\":\"qusum@mailinator.com\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Christian\",\"gender\":\"Others\",\"village\":\"Alias lorem aliquam\",\"county\":\"Nyeri\",\"disabled\":\"Yes\",\"description\":\"Illum et perferendi\",\"status\":91,\"kcpe_grade\":\"Nemo est rerum ex no\",\"kcpe_total_marks\":30,\"admission_number\":\"867\",\"created_at\":\"2021-04-24 00:09:57\",\"updated_at\":\"2021-04-24 01:09:40\",\"deleted_at\":\"2021-04-24 01:09:40\",\"created_by_id\":1,\"result_slip\":null,\"birth_certificate\":null,\"passport_photo\":null,\"any_other_documents\":[],\"media\":[]}', '127.0.0.1', '2021-04-23 22:09:40', '2021-04-23 22:09:40'),
(18, 'updated', 1, 'App\\Models\\User', 1, '{\"id\":1,\"name\":\"Admin\",\"email\":\"wilsonkinyuam@gmail.com\",\"email_verified_at\":null,\"verified\":1,\"verified_at\":\"23\\/04\\/2021 21:33:58\",\"verification_token\":\"\",\"created_at\":null,\"updated_at\":\"2021-04-24 01:13:59\",\"deleted_at\":null,\"user_type_id\":\"1\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-23 22:13:59', '2021-04-23 22:13:59'),
(19, 'created', 5, 'App\\Models\\AllStudent', 1, '{\"created_by_id\":\"1\",\"surname\":\"Price\",\"name\":\"Sierra Dejesus\",\"p_o_box\":\"PO Box 312\",\"town\":\"Officia non nobis do\",\"town_code\":\"Aliquip consequatur\",\"phone_no\":\"+1 (342) 606-8598\",\"email\":\"lanac@mailinator.com\",\"village\":\"Dolorem deserunt mol\",\"county\":\"Nyeri\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Buthist\",\"gender\":\"Male\",\"kcpe_grade\":\"Aut esse dignissimo\",\"kcpe_total_marks\":\"100\",\"disabled\":\"Yes\",\"description\":\"Labore labore fugiat\",\"admission_number\":\"777\",\"status\":\"62\",\"updated_at\":\"2021-04-24 01:21:59\",\"created_at\":\"2021-04-24 01:21:59\",\"id\":5,\"result_slip\":null,\"birth_certificate\":null,\"passport_photo\":null,\"any_other_documents\":[],\"media\":[]}', '127.0.0.1', '2021-04-23 22:21:59', '2021-04-23 22:21:59'),
(20, 'updated', 2, 'App\\Models\\AllStudent', 1, '{\"id\":2,\"surname\":\"Nunez\",\"name\":\"Allen Mills\",\"p_o_box\":\"PO Box 4347\",\"town\":\"Consequatur lorem es\",\"town_code\":\"Obcaecati ea quisqua\",\"phone_no\":\"+1 (365) 566-2026\",\"email\":\"byjy@mailinator.com\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Muslim\",\"gender\":\"Others\",\"village\":\"Et debitis at volupt\",\"county\":\"Nyeri\",\"disabled\":\"No\",\"description\":\"In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before fi\",\"status\":1,\"kcpe_grade\":\"Non et amet autem a\",\"kcpe_total_marks\":12,\"admission_number\":\"219\",\"created_at\":\"2021-04-24 00:21:20\",\"updated_at\":\"2021-04-24 12:04:46\",\"deleted_at\":null,\"created_by_id\":6,\"result_slip\":{\"id\":6,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"0ac9e440-f83b-4cce-bfd9-1e9cc4c929cf\",\"collection_name\":\"result_slip\",\"name\":\"6083645f1684c_7188\",\"file_name\":\"6083645f1684c_7188.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":1326419,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":6,\"created_at\":\"2021-04-24T00:21:23.000000Z\",\"updated_at\":\"2021-04-24T00:21:23.000000Z\"},\"birth_certificate\":{\"id\":7,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"8c8d78f2-c308-4d24-9ffb-90c968cf42e6\",\"collection_name\":\"birth_certificate\",\"name\":\"608364651340d_asignmentonejava\",\"file_name\":\"608364651340d_asignmentonejava.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":129894,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":7,\"created_at\":\"2021-04-24T00:21:23.000000Z\",\"updated_at\":\"2021-04-24T00:21:23.000000Z\"},\"passport_photo\":{\"id\":8,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"71341238-d489-4536-a773-51d1196f0249\",\"collection_name\":\"passport_photo\",\"name\":\"60836470ee242_1_PiHoomzwh9Plr9_GA26JcA\",\"file_name\":\"60836470ee242_1_PiHoomzwh9Plr9_GA26JcA.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":36953,\"manipulations\":[],\"custom_properties\":{\"generated_conversions\":{\"thumb\":true,\"preview\":true}},\"responsive_images\":[],\"order_column\":8,\"created_at\":\"2021-04-24T00:21:23.000000Z\",\"updated_at\":\"2021-04-24T00:21:23.000000Z\",\"url\":\"http:\\/\\/localhost:8000\\/storage\\/8\\/60836470ee242_1_PiHoomzwh9Plr9_GA26JcA.png\",\"thumbnail\":\"http:\\/\\/localhost:8000\\/storage\\/8\\/conversions\\/60836470ee242_1_PiHoomzwh9Plr9_GA26JcA-thumb.jpg\",\"preview\":\"http:\\/\\/localhost:8000\\/storage\\/8\\/conversions\\/60836470ee242_1_PiHoomzwh9Plr9_GA26JcA-preview.jpg\"},\"any_other_documents\":[{\"id\":9,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"bfc7755e-c14e-42b6-ab6a-084f0302eb4e\",\"collection_name\":\"any_other_documents\",\"name\":\"60836477a185a_cat2-SCT121-0676_2018\",\"file_name\":\"60836477a185a_cat2-SCT121-0676_2018.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":154981,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":9,\"created_at\":\"2021-04-24T00:21:23.000000Z\",\"updated_at\":\"2021-04-24T00:21:23.000000Z\"},{\"id\":10,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"4bdac247-b002-4f17-ac67-d05980c37a47\",\"collection_name\":\"any_other_documents\",\"name\":\"60836f2605a6f_7188\",\"file_name\":\"60836f2605a6f_7188.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":1326419,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":10,\"created_at\":\"2021-04-24T01:06:55.000000Z\",\"updated_at\":\"2021-04-24T01:06:55.000000Z\"},{\"id\":11,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"9722a1e4-0310-44a8-9e18-c394e34f5b41\",\"collection_name\":\"any_other_documents\",\"name\":\"60836f2c81b2b_cat2-SCT121-0676_2018\",\"file_name\":\"60836f2c81b2b_cat2-SCT121-0676_2018.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":154981,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":11,\"created_at\":\"2021-04-24T01:06:55.000000Z\",\"updated_at\":\"2021-04-24T01:06:55.000000Z\"}],\"media\":[{\"id\":6,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"0ac9e440-f83b-4cce-bfd9-1e9cc4c929cf\",\"collection_name\":\"result_slip\",\"name\":\"6083645f1684c_7188\",\"file_name\":\"6083645f1684c_7188.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":1326419,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":6,\"created_at\":\"2021-04-24T00:21:23.000000Z\",\"updated_at\":\"2021-04-24T00:21:23.000000Z\"},{\"id\":7,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"8c8d78f2-c308-4d24-9ffb-90c968cf42e6\",\"collection_name\":\"birth_certificate\",\"name\":\"608364651340d_asignmentonejava\",\"file_name\":\"608364651340d_asignmentonejava.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":129894,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":7,\"created_at\":\"2021-04-24T00:21:23.000000Z\",\"updated_at\":\"2021-04-24T00:21:23.000000Z\"},{\"id\":8,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"71341238-d489-4536-a773-51d1196f0249\",\"collection_name\":\"passport_photo\",\"name\":\"60836470ee242_1_PiHoomzwh9Plr9_GA26JcA\",\"file_name\":\"60836470ee242_1_PiHoomzwh9Plr9_GA26JcA.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":36953,\"manipulations\":[],\"custom_properties\":{\"generated_conversions\":{\"thumb\":true,\"preview\":true}},\"responsive_images\":[],\"order_column\":8,\"created_at\":\"2021-04-24T00:21:23.000000Z\",\"updated_at\":\"2021-04-24T00:21:23.000000Z\",\"url\":\"http:\\/\\/localhost:8000\\/storage\\/8\\/60836470ee242_1_PiHoomzwh9Plr9_GA26JcA.png\",\"thumbnail\":\"http:\\/\\/localhost:8000\\/storage\\/8\\/conversions\\/60836470ee242_1_PiHoomzwh9Plr9_GA26JcA-thumb.jpg\",\"preview\":\"http:\\/\\/localhost:8000\\/storage\\/8\\/conversions\\/60836470ee242_1_PiHoomzwh9Plr9_GA26JcA-preview.jpg\"},{\"id\":9,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"bfc7755e-c14e-42b6-ab6a-084f0302eb4e\",\"collection_name\":\"any_other_documents\",\"name\":\"60836477a185a_cat2-SCT121-0676_2018\",\"file_name\":\"60836477a185a_cat2-SCT121-0676_2018.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":154981,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":9,\"created_at\":\"2021-04-24T00:21:23.000000Z\",\"updated_at\":\"2021-04-24T00:21:23.000000Z\"},{\"id\":10,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"4bdac247-b002-4f17-ac67-d05980c37a47\",\"collection_name\":\"any_other_documents\",\"name\":\"60836f2605a6f_7188\",\"file_name\":\"60836f2605a6f_7188.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":1326419,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":10,\"created_at\":\"2021-04-24T01:06:55.000000Z\",\"updated_at\":\"2021-04-24T01:06:55.000000Z\"},{\"id\":11,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":2,\"uuid\":\"9722a1e4-0310-44a8-9e18-c394e34f5b41\",\"collection_name\":\"any_other_documents\",\"name\":\"60836f2c81b2b_cat2-SCT121-0676_2018\",\"file_name\":\"60836f2c81b2b_cat2-SCT121-0676_2018.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":154981,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":11,\"created_at\":\"2021-04-24T01:06:55.000000Z\",\"updated_at\":\"2021-04-24T01:06:55.000000Z\"}]}', '127.0.0.1', '2021-04-24 09:04:46', '2021-04-24 09:04:46'),
(21, 'updated', 1, 'App\\Models\\AllStudent', 1, '{\"id\":1,\"surname\":\"Valdez\",\"name\":\"Cooper Rojas\",\"p_o_box\":\"P.O. Box 1871\",\"town\":\"Irure ipsum sint si\",\"town_code\":\"Sint voluptate blan\",\"phone_no\":\"+1 (139) 927-6441\",\"email\":\"qusum@mailinator.com\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Christian\",\"gender\":\"Others\",\"village\":\"Alias lorem aliquam\",\"county\":\"Nyeri\",\"disabled\":\"Yes\",\"description\":\"Illum et perferendi\",\"status\":1,\"kcpe_grade\":\"Nemo est rerum ex no\",\"kcpe_total_marks\":30,\"admission_number\":\"867\",\"created_at\":\"2021-04-24 00:09:57\",\"updated_at\":\"2021-04-24 12:05:10\",\"deleted_at\":null,\"created_by_id\":1,\"result_slip\":{\"id\":3,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":1,\"uuid\":\"58d9d84c-ce07-4004-beff-80c9820548e9\",\"collection_name\":\"result_slip\",\"name\":\"608361a35391f_7188\",\"file_name\":\"608361a35391f_7188.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":1326419,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":3,\"created_at\":\"2021-04-24T00:10:01.000000Z\",\"updated_at\":\"2021-04-24T00:10:01.000000Z\"},\"birth_certificate\":{\"id\":4,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":1,\"uuid\":\"9ba757be-2ab2-4af1-a490-ffa6a6fbbd6c\",\"collection_name\":\"birth_certificate\",\"name\":\"608361a8d4671_7188\",\"file_name\":\"608361a8d4671_7188.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":1326419,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":4,\"created_at\":\"2021-04-24T00:10:01.000000Z\",\"updated_at\":\"2021-04-24T00:10:01.000000Z\"},\"passport_photo\":{\"id\":5,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":1,\"uuid\":\"60779e7b-3cec-4674-ac06-c302c6ff6028\",\"collection_name\":\"passport_photo\",\"name\":\"608361ae5a95d_diamond\",\"file_name\":\"608361ae5a95d_diamond.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":248412,\"manipulations\":[],\"custom_properties\":{\"generated_conversions\":{\"thumb\":true,\"preview\":true}},\"responsive_images\":[],\"order_column\":5,\"created_at\":\"2021-04-24T00:10:01.000000Z\",\"updated_at\":\"2021-04-24T00:10:01.000000Z\",\"url\":\"http:\\/\\/localhost:8000\\/storage\\/5\\/608361ae5a95d_diamond.png\",\"thumbnail\":\"http:\\/\\/localhost:8000\\/storage\\/5\\/conversions\\/608361ae5a95d_diamond-thumb.jpg\",\"preview\":\"http:\\/\\/localhost:8000\\/storage\\/5\\/conversions\\/608361ae5a95d_diamond-preview.jpg\"},\"any_other_documents\":[],\"media\":[{\"id\":3,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":1,\"uuid\":\"58d9d84c-ce07-4004-beff-80c9820548e9\",\"collection_name\":\"result_slip\",\"name\":\"608361a35391f_7188\",\"file_name\":\"608361a35391f_7188.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":1326419,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":3,\"created_at\":\"2021-04-24T00:10:01.000000Z\",\"updated_at\":\"2021-04-24T00:10:01.000000Z\"},{\"id\":4,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":1,\"uuid\":\"9ba757be-2ab2-4af1-a490-ffa6a6fbbd6c\",\"collection_name\":\"birth_certificate\",\"name\":\"608361a8d4671_7188\",\"file_name\":\"608361a8d4671_7188.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":1326419,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":4,\"created_at\":\"2021-04-24T00:10:01.000000Z\",\"updated_at\":\"2021-04-24T00:10:01.000000Z\"},{\"id\":5,\"model_type\":\"App\\\\Models\\\\AllStudent\",\"model_id\":1,\"uuid\":\"60779e7b-3cec-4674-ac06-c302c6ff6028\",\"collection_name\":\"passport_photo\",\"name\":\"608361ae5a95d_diamond\",\"file_name\":\"608361ae5a95d_diamond.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":248412,\"manipulations\":[],\"custom_properties\":{\"generated_conversions\":{\"thumb\":true,\"preview\":true}},\"responsive_images\":[],\"order_column\":5,\"created_at\":\"2021-04-24T00:10:01.000000Z\",\"updated_at\":\"2021-04-24T00:10:01.000000Z\",\"url\":\"http:\\/\\/localhost:8000\\/storage\\/5\\/608361ae5a95d_diamond.png\",\"thumbnail\":\"http:\\/\\/localhost:8000\\/storage\\/5\\/conversions\\/608361ae5a95d_diamond-thumb.jpg\",\"preview\":\"http:\\/\\/localhost:8000\\/storage\\/5\\/conversions\\/608361ae5a95d_diamond-preview.jpg\"}]}', '127.0.0.1', '2021-04-24 09:05:11', '2021-04-24 09:05:11'),
(22, 'updated', 6, 'App\\Models\\User', 1, '{\"id\":6,\"name\":\"Felicia Mendoza\",\"email\":\"doluluxepy@mailinator.com\",\"email_verified_at\":null,\"verified\":1,\"verified_at\":null,\"verification_token\":\"OxlRvlxRIOIAylUAfI26iRemCCxAi3UxD4PAgeM3VaC7qXFgqSPif8v0XMRlHrXj\",\"created_at\":\"2021-04-24 00:50:23\",\"updated_at\":\"2021-04-24 12:40:09\",\"deleted_at\":null,\"user_type_id\":\"1\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 09:40:09', '2021-04-24 09:40:09'),
(23, 'created', 6, 'App\\Models\\AllStudent', 1, '{\"created_by_id\":\"1\",\"surname\":\"Harper\",\"name\":\"Allen Henderson\",\"p_o_box\":\"PO Box 2\",\"town\":\"Quidem ad veritatis\",\"town_code\":\"Nemo quod maiores vo\",\"phone_no\":\"+1 (113) 949-8839\",\"email\":\"fawut@mailinator.com\",\"village\":\"Eius deleniti sunt\",\"county\":\"Nyeri\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Muslim\",\"gender\":\"Male\",\"kcpe_grade\":\"Magnam dolor quis eu\",\"kcpe_total_marks\":\"55\",\"disabled\":\"No\",\"description\":\"Dolores ipsum nobis\",\"admission_number\":\"55\",\"status\":\"3\",\"updated_at\":\"2021-04-24 12:42:04\",\"created_at\":\"2021-04-24 12:42:04\",\"id\":6,\"result_slip\":null,\"birth_certificate\":null,\"passport_photo\":null,\"any_other_documents\":[],\"media\":[]}', '127.0.0.1', '2021-04-24 09:42:04', '2021-04-24 09:42:04'),
(24, 'created', 7, 'App\\Models\\AllStudent', 1, '{\"created_by_id\":\"1\",\"surname\":\"Hancock\",\"name\":\"Aubrey Browning\",\"p_o_box\":\"P.O. Box 75615\",\"town\":\"Dolor omnis molestia\",\"town_code\":\"Reprehenderit laboru\",\"phone_no\":\"+1 (279) 934-1601\",\"email\":\"xefumile@mailinator.com\",\"village\":\"Anim corporis atque\",\"county\":\"Nyeri\",\"country\":\"KE\",\"date_of_birth\":\"24\\/04\\/2021\",\"religion\":\"Protestant\",\"gender\":\"Male\",\"kcpe_grade\":\"Magni dolor praesent\",\"kcpe_total_marks\":\"72\",\"disabled\":\"Yes\",\"description\":\"Autem excepteur culp\",\"admission_number\":\"7265\",\"status\":\"0\",\"updated_at\":\"2021-04-24 13:01:20\",\"created_at\":\"2021-04-24 13:01:20\",\"id\":7,\"result_slip\":null,\"birth_certificate\":null,\"passport_photo\":null,\"any_other_documents\":[],\"media\":[]}', '127.0.0.1', '2021-04-24 10:01:20', '2021-04-24 10:01:20'),
(25, 'created', 1, 'App\\Models\\AllParent', 1, '{\"created_by_id\":\"1\",\"guardian\":\"Relative\",\"first_name\":\"Fletcher\",\"surname\":\"Hardy\",\"occupation\":\"Voluptas itaque duci\",\"id_number\":\"536\",\"p_o_box\":\"P.O. Box 4573\",\"town\":\"Tempora consectetur\",\"town_code\":\"Ex magnam modi nobis\",\"phone_no\":\"+1 (892) 514-3355\",\"landline\":\"Aut nostrum beatae u\",\"guardian_email\":\"qijuxukyr@mailinator.com\",\"description\":\"Enim qui in placeat\",\"student_id\":\"1\",\"updated_at\":\"2021-04-24 13:58:42\",\"created_at\":\"2021-04-24 13:58:42\",\"id\":1}', '127.0.0.1', '2021-04-24 10:58:42', '2021-04-24 10:58:42'),
(26, 'updated', 1, 'App\\Models\\AllParent', 6, '{\"id\":1,\"first_name\":\"Fletcher\",\"surname\":\"Hardy\",\"occupation\":\"Voluptas itaque duci\",\"id_number\":\"536\",\"p_o_box\":\"P.O. Box 4573\",\"town\":\"Tempora consectetur\",\"town_code\":\"Ex magnam modi nobis\",\"phone_no\":\"+1 (892) 514-3355\",\"landline\":\"Aut nostrum beatae u\",\"guardian_email\":\"qijuxukyr@mailinator.com\",\"guardian\":\"Relative\",\"description\":\"Enim qui in placeat\",\"created_at\":\"2021-04-24 13:58:42\",\"updated_at\":\"2021-04-24 14:12:05\",\"deleted_at\":null,\"student_id\":\"7\",\"created_by_id\":\"6\"}', '127.0.0.1', '2021-04-24 11:12:05', '2021-04-24 11:12:05'),
(27, 'deleted', 1, 'App\\Models\\AllParent', 1, '{\"id\":1,\"first_name\":\"Fletcher\",\"surname\":\"Hardy\",\"occupation\":\"Voluptas itaque duci\",\"id_number\":\"536\",\"p_o_box\":\"P.O. Box 4573\",\"town\":\"Tempora consectetur\",\"town_code\":\"Ex magnam modi nobis\",\"phone_no\":\"+1 (892) 514-3355\",\"landline\":\"Aut nostrum beatae u\",\"guardian_email\":\"qijuxukyr@mailinator.com\",\"guardian\":\"Relative\",\"description\":\"Enim qui in placeat\",\"created_at\":\"2021-04-24 13:58:42\",\"updated_at\":\"2021-04-24 14:12:39\",\"deleted_at\":\"2021-04-24 14:12:39\",\"student_id\":7,\"created_by_id\":6}', '127.0.0.1', '2021-04-24 11:12:39', '2021-04-24 11:12:39'),
(28, 'created', 7, 'App\\Models\\User', NULL, '{\"name\":\"Laurel Austin\",\"email\":\"jeqoly@mailinator.com\",\"updated_at\":\"2021-04-24 19:41:52\",\"created_at\":\"2021-04-24 19:41:52\",\"id\":7,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 16:41:52', '2021-04-24 16:41:52'),
(29, 'updated', 7, 'App\\Models\\User', NULL, '{\"name\":\"Laurel Austin\",\"email\":\"jeqoly@mailinator.com\",\"updated_at\":\"2021-04-24 19:41:52\",\"created_at\":\"2021-04-24 19:41:52\",\"id\":7,\"verification_token\":\"hGCuieyoWalCJlK4GPvTlPO88AeEkR96NtEwMbVZdvnJRJQZTzlmz2B7QVDNFHur\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 16:41:52', '2021-04-24 16:41:52'),
(30, 'created', 8, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Sharon Cherry\",\"email\":\"hyhoqogowo@mailinator.com\",\"updated_at\":\"2021-04-24 20:47:43\",\"created_at\":\"2021-04-24 20:47:43\",\"id\":8,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 17:47:43', '2021-04-24 17:47:43'),
(31, 'updated', 8, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Sharon Cherry\",\"email\":\"hyhoqogowo@mailinator.com\",\"updated_at\":\"2021-04-24 20:47:43\",\"created_at\":\"2021-04-24 20:47:43\",\"id\":8,\"verified\":1,\"verified_at\":\"24\\/04\\/2021 20:47:43\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 17:47:43', '2021-04-24 17:47:43'),
(32, 'updated', 8, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Sharon Cherry\",\"email\":\"hyhoqogowo@mailinator.com\",\"updated_at\":\"2021-04-24 20:47:49\",\"created_at\":\"2021-04-24 20:47:43\",\"id\":8,\"verified\":1,\"verified_at\":\"24\\/04\\/2021 20:47:49\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 17:47:50', '2021-04-24 17:47:50'),
(33, 'updated', 8, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Sharon Cherry\",\"email\":\"hyhoqogowo@mailinator.com\",\"updated_at\":\"2021-04-24 20:47:50\",\"created_at\":\"2021-04-24 20:47:43\",\"id\":8,\"verified\":1,\"verified_at\":\"24\\/04\\/2021 20:47:50\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 17:47:50', '2021-04-24 17:47:50'),
(34, 'created', 9, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Latifah Wood\",\"email\":\"sytyvugyc@mailinator.com\",\"updated_at\":\"2021-04-24 21:01:10\",\"created_at\":\"2021-04-24 21:01:10\",\"id\":9,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 18:01:10', '2021-04-24 18:01:10'),
(35, 'updated', 9, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Latifah Wood\",\"email\":\"sytyvugyc@mailinator.com\",\"updated_at\":\"2021-04-24 21:01:10\",\"created_at\":\"2021-04-24 21:01:10\",\"id\":9,\"verified\":1,\"verified_at\":\"24\\/04\\/2021 21:01:10\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 18:01:11', '2021-04-24 18:01:11'),
(36, 'updated', 9, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Latifah Wood\",\"email\":\"sytyvugyc@mailinator.com\",\"updated_at\":\"2021-04-24 21:01:14\",\"created_at\":\"2021-04-24 21:01:10\",\"id\":9,\"verified\":1,\"verified_at\":\"24\\/04\\/2021 21:01:14\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 18:01:14', '2021-04-24 18:01:14'),
(37, 'created', 17, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Lacey Levine\",\"email\":\"zyjuwupa@mailinator.com\",\"updated_at\":\"2021-04-24 21:06:02\",\"created_at\":\"2021-04-24 21:06:02\",\"id\":17,\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 18:06:02', '2021-04-24 18:06:02'),
(38, 'updated', 17, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Lacey Levine\",\"email\":\"zyjuwupa@mailinator.com\",\"updated_at\":\"2021-04-24 21:06:02\",\"created_at\":\"2021-04-24 21:06:02\",\"id\":17,\"verified\":1,\"verified_at\":\"24\\/04\\/2021 21:06:02\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 18:06:02', '2021-04-24 18:06:02'),
(39, 'updated', 17, 'App\\Models\\User', 1, '{\"user_type_id\":\"1\",\"name\":\"Lacey Levine\",\"email\":\"zyjuwupa@mailinator.com\",\"updated_at\":\"2021-04-24 21:06:07\",\"created_at\":\"2021-04-24 21:06:02\",\"id\":17,\"verified\":1,\"verified_at\":\"24\\/04\\/2021 21:06:07\",\"profile_photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-24 18:06:07', '2021-04-24 18:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 4, '5218a110-50b6-4c08-9658-11149d55f8cc', 'profile_photo', '608359f385895_1_PiHoomzwh9Plr9_GA26JcA', '608359f385895_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 1, '2021-04-23 20:36:26', '2021-04-23 20:36:26'),
(2, 'App\\Models\\User', 5, 'a71f7a94-b0a2-4ac5-a4a9-5ea1f7fb0df7', 'profile_photo', '60835a849ebdb_carpet-cleaning-277x300', '60835a849ebdb_carpet-cleaning-277x300.jpeg', 'image/jpeg', 'public', 'public', 25689, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 2, '2021-04-23 20:38:49', '2021-04-23 20:38:49'),
(3, 'App\\Models\\AllStudent', 1, '58d9d84c-ce07-4004-beff-80c9820548e9', 'result_slip', '608361a35391f_7188', '608361a35391f_7188.pdf', 'application/pdf', 'public', 'public', 1326419, '[]', '[]', '[]', 3, '2021-04-23 21:10:01', '2021-04-23 21:10:01'),
(4, 'App\\Models\\AllStudent', 1, '9ba757be-2ab2-4af1-a490-ffa6a6fbbd6c', 'birth_certificate', '608361a8d4671_7188', '608361a8d4671_7188.pdf', 'application/pdf', 'public', 'public', 1326419, '[]', '[]', '[]', 4, '2021-04-23 21:10:01', '2021-04-23 21:10:01'),
(5, 'App\\Models\\AllStudent', 1, '60779e7b-3cec-4674-ac06-c302c6ff6028', 'passport_photo', '608361ae5a95d_diamond', '608361ae5a95d_diamond.png', 'image/png', 'public', 'public', 248412, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 5, '2021-04-23 21:10:01', '2021-04-23 21:10:01'),
(6, 'App\\Models\\AllStudent', 2, '0ac9e440-f83b-4cce-bfd9-1e9cc4c929cf', 'result_slip', '6083645f1684c_7188', '6083645f1684c_7188.pdf', 'application/pdf', 'public', 'public', 1326419, '[]', '[]', '[]', 6, '2021-04-23 21:21:23', '2021-04-23 21:21:23'),
(7, 'App\\Models\\AllStudent', 2, '8c8d78f2-c308-4d24-9ffb-90c968cf42e6', 'birth_certificate', '608364651340d_asignmentonejava', '608364651340d_asignmentonejava.pdf', 'application/pdf', 'public', 'public', 129894, '[]', '[]', '[]', 7, '2021-04-23 21:21:23', '2021-04-23 21:21:23'),
(8, 'App\\Models\\AllStudent', 2, '71341238-d489-4536-a773-51d1196f0249', 'passport_photo', '60836470ee242_1_PiHoomzwh9Plr9_GA26JcA', '60836470ee242_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 8, '2021-04-23 21:21:23', '2021-04-23 21:21:23'),
(9, 'App\\Models\\AllStudent', 2, 'bfc7755e-c14e-42b6-ab6a-084f0302eb4e', 'any_other_documents', '60836477a185a_cat2-SCT121-0676_2018', '60836477a185a_cat2-SCT121-0676_2018.pdf', 'application/pdf', 'public', 'public', 154981, '[]', '[]', '[]', 9, '2021-04-23 21:21:23', '2021-04-23 21:21:23'),
(10, 'App\\Models\\AllStudent', 2, '4bdac247-b002-4f17-ac67-d05980c37a47', 'any_other_documents', '60836f2605a6f_7188', '60836f2605a6f_7188.pdf', 'application/pdf', 'public', 'public', 1326419, '[]', '[]', '[]', 10, '2021-04-23 22:06:55', '2021-04-23 22:06:55'),
(11, 'App\\Models\\AllStudent', 2, '9722a1e4-0310-44a8-9e18-c394e34f5b41', 'any_other_documents', '60836f2c81b2b_cat2-SCT121-0676_2018', '60836f2c81b2b_cat2-SCT121-0676_2018.pdf', 'application/pdf', 'public', 'public', 154981, '[]', '[]', '[]', 11, '2021-04-23 22:06:55', '2021-04-23 22:06:55'),
(12, 'App\\Models\\User', 1, 'd7d2e85e-f515-4b18-945c-b1657de12703', 'profile_photo', '608370d52f6c7_1_PiHoomzwh9Plr9_GA26JcA', '608370d52f6c7_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 12, '2021-04-23 22:13:59', '2021-04-23 22:13:59'),
(13, 'App\\Models\\AllStudent', 5, '46decdec-df7b-4d6f-9765-6c4991587eb6', 'result_slip', '6083729923833_7188', '6083729923833_7188.pdf', 'application/pdf', 'public', 'public', 1326419, '[]', '[]', '[]', 13, '2021-04-23 22:22:02', '2021-04-23 22:22:02'),
(14, 'App\\Models\\AllStudent', 5, '2d5eb18a-b539-423d-855f-16242859ad9a', 'birth_certificate', '608372a0aa234_7188', '608372a0aa234_7188.pdf', 'application/pdf', 'public', 'public', 1326419, '[]', '[]', '[]', 14, '2021-04-23 22:22:02', '2021-04-23 22:22:02'),
(15, 'App\\Models\\AllStudent', 5, 'f9e7ea2e-e306-4dfd-aa05-29d229524b72', 'passport_photo', '608372a7d7fb0_1_PiHoomzwh9Plr9_GA26JcA', '608372a7d7fb0_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 15, '2021-04-23 22:22:02', '2021-04-23 22:22:02'),
(16, 'App\\Models\\AllStudent', 5, '3c7b6fea-a14f-41b0-90ee-14356b24dab5', 'any_other_documents', '608372af96563_7188', '608372af96563_7188.pdf', 'application/pdf', 'public', 'public', 1326419, '[]', '[]', '[]', 16, '2021-04-23 22:22:03', '2021-04-23 22:22:03'),
(17, 'App\\Models\\AllStudent', 5, '2e6ec998-0567-4032-b9e1-a7dd3c398d5b', 'any_other_documents', '608372af9e63e_2024188_4_sample-network-design-2', '608372af9e63e_2024188_4_sample-network-design-2.pdf', 'application/pdf', 'public', 'public', 1206180, '[]', '[]', '[]', 17, '2021-04-23 22:22:03', '2021-04-23 22:22:03'),
(18, 'App\\Models\\AllStudent', 5, '2e5c3732-668f-4e52-8299-54ed7dc23e0e', 'any_other_documents', '608372afa5525_439960030-Network-Design-Mtg-Assignment-4-docx', '608372afa5525_439960030-Network-Design-Mtg-Assignment-4-docx.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'public', 'public', 378428, '[]', '[]', '[]', 18, '2021-04-23 22:22:03', '2021-04-23 22:22:03'),
(19, 'App\\Models\\User', 6, '8ff58d51-3b44-4dbc-9f0f-1aef839b9938', 'profile_photo', '6084119fc6c50_images', '6084119fc6c50_images.jpeg', 'image/jpeg', 'public', 'public', 4333, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 19, '2021-04-24 09:40:09', '2021-04-24 09:40:09'),
(20, 'App\\Models\\AllStudent', 6, '755e99f6-4565-4280-929f-96e37568b75f', 'result_slip', '6084121392967_asignmentonejava', '6084121392967_asignmentonejava.pdf', 'application/pdf', 'public', 'public', 129894, '[]', '[]', '[]', 20, '2021-04-24 09:42:10', '2021-04-24 09:42:10'),
(21, 'App\\Models\\AllStudent', 6, '4d2801ff-8f6c-4b4e-9eb2-4beb316db809', 'birth_certificate', '6084120cae983_asignmentonejava', '6084120cae983_asignmentonejava.pdf', 'application/pdf', 'public', 'public', 129894, '[]', '[]', '[]', 21, '2021-04-24 09:42:10', '2021-04-24 09:42:10'),
(22, 'App\\Models\\AllStudent', 6, 'b06ada9c-e00a-49dc-bf20-89d5ed50f7cf', 'passport_photo', '608411f697aa9_images', '608411f697aa9_images.jpeg', 'image/jpeg', 'public', 'public', 4333, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 22, '2021-04-24 09:42:10', '2021-04-24 09:42:10'),
(23, 'App\\Models\\AllStudent', 6, '15403088-8f3a-4f53-9f2a-9a3789b5868c', 'any_other_documents', '608412016be5d_74b5609156c0db32683868991ea66f1e', '608412016be5d_74b5609156c0db32683868991ea66f1e.png', 'image/png', 'public', 'public', 55105, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 23, '2021-04-24 09:42:10', '2021-04-24 09:42:11'),
(24, 'App\\Models\\AllStudent', 6, 'd7220f24-c3cb-4bd3-a6b1-2286d45836b6', 'any_other_documents', '6084120176eb9_29b030e8fb3489d19683eb80d18ac8f3', '6084120176eb9_29b030e8fb3489d19683eb80d18ac8f3.png', 'image/png', 'public', 'public', 49581, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 24, '2021-04-24 09:42:11', '2021-04-24 09:42:12'),
(25, 'App\\Models\\AllStudent', 6, '05d1064c-1dff-4a8b-add1-2526876f9ab9', 'any_other_documents', '608412019171e_100+Days+of+Python+Check+Off+Posters', '608412019171e_100+Days+of+Python+Check+Off+Posters.pdf', 'application/pdf', 'public', 'public', 179937, '[]', '[]', '[]', 25, '2021-04-24 09:42:12', '2021-04-24 09:42:12'),
(26, 'App\\Models\\AllStudent', 7, '7252ac46-969d-4e5e-ab87-def23e5800c0', 'result_slip', '608416914b2a3_1', '608416914b2a3_1.jpeg', 'image/jpeg', 'public', 'public', 77397, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 26, '2021-04-24 10:01:25', '2021-04-24 10:01:26'),
(27, 'App\\Models\\AllStudent', 7, '3f098816-abb4-428e-8fa7-bb1f4790a8d7', 'birth_certificate', '60841695eaec5_29b030e8fb3489d19683eb80d18ac8f3', '60841695eaec5_29b030e8fb3489d19683eb80d18ac8f3.png', 'image/png', 'public', 'public', 49581, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 27, '2021-04-24 10:01:26', '2021-04-24 10:01:26'),
(28, 'App\\Models\\AllStudent', 7, '8d04ffdd-0c69-4ea4-bc5b-e095773a6ae7', 'passport_photo', '6084169c2ac4b_Inventory-Management-System-Use-Case-Diagram', '6084169c2ac4b_Inventory-Management-System-Use-Case-Diagram.png', 'image/png', 'public', 'public', 70494, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 28, '2021-04-24 10:01:26', '2021-04-24 10:01:27'),
(29, 'App\\Models\\User', 8, '971070f1-ba28-4fa6-93c1-08eb21a0ea13', 'profile_photo', '608483ed57f21_1_PiHoomzwh9Plr9_GA26JcA', '608483ed57f21_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 29, '2021-04-24 17:47:50', '2021-04-24 17:47:50');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_04_23_000001_create_media_table', 1),
(4, '2021_04_23_000002_create_audit_logs_table', 1),
(5, '2021_04_23_000003_create_all_parents_table', 1),
(6, '2021_04_23_000004_create_all_students_table', 1),
(7, '2021_04_23_000005_create_user_types_table', 1),
(8, '2021_04_23_000006_create_user_alerts_table', 1),
(9, '2021_04_23_000007_create_users_table', 1),
(10, '2021_04_23_000008_create_roles_table', 1),
(11, '2021_04_23_000009_create_permissions_table', 1),
(12, '2021_04_23_000010_create_role_user_pivot_table', 1),
(13, '2021_04_23_000011_create_user_user_alert_pivot_table', 1),
(14, '2021_04_23_000012_create_permission_role_pivot_table', 1),
(15, '2021_04_23_000013_add_relationship_fields_to_users_table', 1),
(16, '2021_04_23_000014_add_relationship_fields_to_all_students_table', 1),
(17, '2021_04_23_000015_add_relationship_fields_to_all_parents_table', 1),
(18, '2021_04_23_000016_add_verification_fields', 1),
(19, '2021_04_23_000017_create_qa_topics_table', 1),
(20, '2021_04_23_000018_create_qa_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wilsonkinyuam@gmail.com', '$2y$10$jV1ridwPsuzpNixt343d2Oa6BK4r3ujxm.Fy3h0eKIiQWj6/.bv8O', '2021-04-24 16:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'audit_log_show', NULL, NULL, NULL),
(18, 'audit_log_access', NULL, NULL, NULL),
(19, 'user_alert_create', NULL, NULL, NULL),
(20, 'user_alert_show', NULL, NULL, NULL),
(21, 'user_alert_delete', NULL, NULL, NULL),
(22, 'user_alert_access', NULL, NULL, NULL),
(23, 'user_type_create', NULL, NULL, NULL),
(24, 'user_type_edit', NULL, NULL, NULL),
(25, 'user_type_show', NULL, NULL, NULL),
(26, 'user_type_delete', NULL, NULL, NULL),
(27, 'user_type_access', NULL, NULL, NULL),
(28, 'all_student_create', NULL, NULL, NULL),
(29, 'all_student_edit', NULL, NULL, NULL),
(30, 'all_student_show', NULL, NULL, NULL),
(31, 'all_student_delete', NULL, NULL, NULL),
(32, 'all_student_access', NULL, NULL, NULL),
(33, 'all_parent_create', NULL, NULL, NULL),
(34, 'all_parent_edit', NULL, NULL, NULL),
(35, 'all_parent_show', NULL, NULL, NULL),
(36, 'all_parent_delete', NULL, NULL, NULL),
(37, 'all_parent_access', NULL, NULL, NULL),
(38, 'profile_password_edit', NULL, NULL, NULL),
(39, 'only_admin', '2021-04-23 22:17:33', '2021-04-23 22:17:33', NULL),
(40, 'all_student_approve', '2021-04-23 22:29:37', '2021-04-23 22:29:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(2, 28),
(2, 29),
(2, 30),
(2, 32),
(2, 33),
(2, 34),
(2, 37),
(2, 38),
(1, 39),
(1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qa_messages`
--

CREATE TABLE `qa_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qa_topics`
--

CREATE TABLE `qa_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `verified_at` datetime DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_type_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `verified`, `verified_at`, `verification_token`, `created_at`, `updated_at`, `deleted_at`, `user_type_id`) VALUES
(1, 'Admin', 'wilsonkinyuam@gmail.com', NULL, '$2y$10$LQsab0nEmKG3mDF.zTRCs.NsJmxfjLzJ.ZwgZ/QElidpBVlRSMS9u', NULL, 1, '2021-04-23 21:33:58', '', NULL, '2021-04-23 22:13:59', NULL, 1),
(3, 'Alyssa Lewis', 'gyruko@mailinator.com', NULL, '$2y$10$HoepFr5TI0mjXgErdO9xrub/BZ52ITACjGuSbktbGrCk9EM2BubLW', NULL, 0, NULL, 'Snzrr1C5jEJCslZUgffuv6ifFWE6QzdJ04rknwIL9MfQJJWQ7VDgSzGKJDyneix3', '2021-04-23 19:27:20', '2021-04-23 19:27:20', NULL, NULL),
(4, 'Shannon Mills', 'laxubydit@mailinator.com', NULL, '$2y$10$qToyy6bT4IG/9gFbdejWZ.76clbutTNxe2GVZBKoH6dIlcEa8z8xa', NULL, 1, '2021-04-23 23:36:26', NULL, '2021-04-23 20:36:21', '2021-04-23 20:36:26', NULL, 1),
(5, 'Kimberley Odonnell', 'mume@mailinator.com', NULL, '$2y$10$4V3fPVouoIPs.qpSXUFJYOBiDO8CuySF2BRFgFQegdezGUIl2K4sy', NULL, 1, '2021-04-23 23:38:49', NULL, '2021-04-23 20:38:46', '2021-04-23 20:38:49', NULL, 1),
(6, 'Felicia Mendoza', 'doluluxepy@mailinator.com', NULL, '$2y$10$xeHF3nBvN1AwmUFy6rBt9uRij8OLDL6uqExyiLoSab/wweGCIV08.', NULL, 1, NULL, 'OxlRvlxRIOIAylUAfI26iRemCCxAi3UxD4PAgeM3VaC7qXFgqSPif8v0XMRlHrXj', '2021-04-23 21:50:23', '2021-04-24 09:40:09', NULL, 1),
(7, 'Laurel Austin', 'jeqoly@mailinator.com', NULL, '$2y$10$weUA/ZrtZKZ3p1aYGyyd0.Oq5XUgzkeQkUED4MMOx1naBjqtCSJqO', NULL, 0, NULL, 'hGCuieyoWalCJlK4GPvTlPO88AeEkR96NtEwMbVZdvnJRJQZTzlmz2B7QVDNFHur', '2021-04-24 16:41:52', '2021-04-24 16:41:52', NULL, NULL),
(8, 'Sharon Cherry', 'hyhoqogowo@mailinator.com', NULL, '$2y$10$Wkb1tsmeaTebk4qCzPCXguohnBNMGvE4GzlKWrDFG8QJeoRgZCRJu', NULL, 1, '2021-04-24 20:47:50', NULL, '2021-04-24 17:47:43', '2021-04-24 17:47:50', NULL, 1),
(9, 'Latifah Wood', 'sytyvugyc@mailinator.com', NULL, '$2y$10$BSHVKEEMpi9EjU7cc7GnjuLCZuGiP.Wi4QXt5XIySxLRd1CMwwJzK', NULL, 1, '2021-04-24 21:01:14', NULL, '2021-04-24 18:01:10', '2021-04-24 18:01:14', NULL, 1),
(10, 'Alyssa Lewis', 'gyruko@mailinastor.com', NULL, '$2y$10$HoepFr5TI0mjXgErdO9xrub/BZ52ITACjGuSbktbGrCk9EM2BubLW', NULL, 0, NULL, 'Snzrr1C5jEJCslZUgffuv6ifFWE6QzdJ04rknwIL9MfQJJWQ7VDgSzGKJDyneix3', '2021-04-23 19:27:20', '2021-04-23 19:27:20', NULL, NULL),
(11, 'Shannon Mills', 'lasxubydit@mailinator.com', NULL, '$2y$10$qToyy6bT4IG/9gFbdejWZ.76clbutTNxe2GVZBKoH6dIlcEa8z8xa', NULL, 1, '2021-04-23 23:36:26', NULL, '2021-04-23 20:36:21', '2021-04-23 20:36:26', NULL, 1),
(12, 'Kimberley Odonnell', 'mume@mailisnator.com', NULL, '$2y$10$4V3fPVouoIPs.qpSXUFJYOBiDO8CuySF2BRFgFQegdezGUIl2K4sy', NULL, 1, '2021-04-23 23:38:49', NULL, '2021-04-23 20:38:46', '2021-04-23 20:38:49', NULL, 1),
(17, 'Lacey Levine', 'zyjuwupa@mailinator.com', NULL, '$2y$10$.UJL2sCOouUayoNQpTjqPusHmfZS312FBx1Q/DQVtOBEpJUkuWHd2', NULL, 1, '2021-04-24 21:06:07', NULL, '2021-04-24 18:06:02', '2021-04-24 18:06:07', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_alerts`
--

CREATE TABLE `user_alerts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alert_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alert_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Student', '2021-04-23 20:35:48', '2021-04-23 20:35:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_user_alert`
--

CREATE TABLE `user_user_alert` (
  `user_alert_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_parents`
--
ALTER TABLE `all_parents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_fk_3755935` (`student_id`),
  ADD KEY `created_by_fk_3755939` (`created_by_id`);

--
-- Indexes for table `all_students`
--
ALTER TABLE `all_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_3755892` (`created_by_id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_3755413` (`role_id`),
  ADD KEY `permission_id_fk_3755413` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qa_messages`
--
ALTER TABLE `qa_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qa_messages_topic_id_foreign` (`topic_id`),
  ADD KEY `qa_messages_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `qa_topics`
--
ALTER TABLE `qa_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qa_topics_creator_id_foreign` (`creator_id`),
  ADD KEY `qa_topics_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_3755422` (`user_id`),
  ADD KEY `role_id_fk_3755422` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_type_fk_3755472` (`user_type_id`);

--
-- Indexes for table `user_alerts`
--
ALTER TABLE `user_alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_user_alert`
--
ALTER TABLE `user_user_alert`
  ADD KEY `user_alert_id_fk_3755442` (`user_alert_id`),
  ADD KEY `user_id_fk_3755442` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_parents`
--
ALTER TABLE `all_parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `all_students`
--
ALTER TABLE `all_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_messages`
--
ALTER TABLE `qa_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_topics`
--
ALTER TABLE `qa_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_alerts`
--
ALTER TABLE `user_alerts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_parents`
--
ALTER TABLE `all_parents`
  ADD CONSTRAINT `created_by_fk_3755939` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `student_fk_3755935` FOREIGN KEY (`student_id`) REFERENCES `all_students` (`id`);

--
-- Constraints for table `all_students`
--
ALTER TABLE `all_students`
  ADD CONSTRAINT `created_by_fk_3755892` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_3755413` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_3755413` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `qa_messages`
--
ALTER TABLE `qa_messages`
  ADD CONSTRAINT `qa_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_messages_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `qa_topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `qa_topics`
--
ALTER TABLE `qa_topics`
  ADD CONSTRAINT `qa_topics_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_topics_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_3755422` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_3755422` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_type_fk_3755472` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`);

--
-- Constraints for table `user_user_alert`
--
ALTER TABLE `user_user_alert`
  ADD CONSTRAINT `user_alert_id_fk_3755442` FOREIGN KEY (`user_alert_id`) REFERENCES `user_alerts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_3755442` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
