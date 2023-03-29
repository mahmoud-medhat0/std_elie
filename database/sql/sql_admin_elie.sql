-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2023 at 06:50 PM
-- Server version: 8.0.24
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_admin_essamm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mahmoud medhat', 'hetlarhhs@gmail.com', '$2y$10$nXBOO53h.jep3IPxONDIEew26P3TRS0aE9zsk3jFhbfgO4CGXIhGq', NULL, 'HqtgTj1ADteNuiTVl1JNbpZXfApytgEzqidYFzS9LqbJ9Rae1x4PHdMRQuuF', '2022-10-06 11:18:48', '2022-10-06 11:18:48'),
(4, 'mm mm', 'efotqz@hi2.in', '$2y$10$qWM24dGrGNjtmEAZEv7G.emVP3U3/cv8TvCYcmAUcAozvdthcz1qC', NULL, NULL, '2022-10-15 18:52:18', '2022-10-15 19:19:49'),
(5, 'hager', 'jkhjdbckjhbsd@gmail.com', '$2y$10$zH/eFdxT4D9ukaDK8hBPy.n/WoCoGqliPRJjEAh.QgIpdLvKglO46', NULL, NULL, '2022-11-09 13:53:17', '2022-11-09 13:53:17'),
(6, 'hagar hussain', 'hagarhussain@gmail.com', '$2y$10$mq4eqJqOs9CkCdpr7IelD.9Vh13Xs1ZeL4qVuXgeVsNeaHFf7A.Mq', NULL, 'yuOzDhD1CJKTGrvRLa08Jfr70Vgzvvn3o0g2P4ug1cDNZSZLZHhIQJwIn0R6', '2023-02-11 13:27:41', '2023-02-11 13:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int UNSIGNED NOT NULL,
  `std_id` int UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `attendence` tinyint UNSIGNED DEFAULT '0',
  `hw` tinyint(1) DEFAULT '0',
  `payed` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '*',
  `reset` char(5) DEFAULT '*',
  `branch_id` int NOT NULL,
  `sec_type_id` int NOT NULL,
  `attend_record` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attend_records`
--

CREATE TABLE `attend_records` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `money` int NOT NULL,
  `Branch_id` int NOT NULL,
  `sec_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int NOT NULL,
  `name` char(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `created_at`) VALUES
(1, 'فرنساوي', '2023-03-29 10:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int UNSIGNED NOT NULL,
  `std_id` int UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `degree` char(50) DEFAULT '*',
  `branch_id` int NOT NULL,
  `payed` char(10) DEFAULT '*',
  `sec_type_id` int NOT NULL,
  `exam_record` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_records`
--

CREATE TABLE `exam_records` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `Branch_id` int NOT NULL,
  `sec_id` int NOT NULL,
  `maximum` int NOT NULL,
  `money` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int UNSIGNED NOT NULL,
  `std_id` int UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `degree` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '*',
  `branch_id` int NOT NULL,
  `sec_type_id` int NOT NULL,
  `Exercise_Record` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exercise_records`
--

CREATE TABLE `exercise_records` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `Branch_id` int NOT NULL,
  `sec_id` int NOT NULL,
  `maximum` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_10_06_122311_admins', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sec_type`
--

CREATE TABLE `sec_type` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sec_type`
--

INSERT INTO `sec_type` (`id`, `name`) VALUES
(1, 'الصف الأول الثانوي'),
(2, 'الصف الثاني الثانوي'),
(3, 'الصف الثالث الثانوي');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(512) NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` char(11) DEFAULT NULL,
  `p_phone` char(11) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `sumprep` char(4) DEFAULT NULL,
  `gender` enum('f','m') NOT NULL COMMENT '''f'' => ''female ''m''=>male',
  `sec_type_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_attendence_branches` (`branch_id`),
  ADD KEY `FK_attendence_students` (`std_id`),
  ADD KEY `FK_attendence_sec_type` (`sec_type_id`),
  ADD KEY `FK_attendence_attendencerecords` (`attend_record`);

--
-- Indexes for table `attend_records`
--
ALTER TABLE `attend_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_attendencerecords_branches` (`Branch_id`),
  ADD KEY `FK_attendencerecords_sec_type` (`sec_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_exams_branches` (`branch_id`),
  ADD KEY `FK_exams_students` (`std_id`),
  ADD KEY `FK_exams_sec_type` (`sec_type_id`),
  ADD KEY `FK_exams_exam_records` (`exam_record`);

--
-- Indexes for table `exam_records`
--
ALTER TABLE `exam_records`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_attendencerecords_branches` (`Branch_id`) USING BTREE,
  ADD KEY `FK_attendencerecords_sec_type` (`sec_id`) USING BTREE;

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_exercises_students` (`std_id`),
  ADD KEY `FK_exercises_branches` (`branch_id`),
  ADD KEY `FK_exercises_sec_type` (`sec_type_id`),
  ADD KEY `FK_exercises_exercise_records` (`Exercise_Record`);

--
-- Indexes for table `exercise_records`
--
ALTER TABLE `exercise_records`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_attendencerecords_branches` (`Branch_id`) USING BTREE,
  ADD KEY `FK_attendencerecords_sec_type` (`sec_id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sec_type`
--
ALTER TABLE `sec_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `FK_students_sec_type` (`sec_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attend_records`
--
ALTER TABLE `attend_records`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_records`
--
ALTER TABLE `exam_records`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4362;

--
-- AUTO_INCREMENT for table `exercise_records`
--
ALTER TABLE `exercise_records`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sec_type`
--
ALTER TABLE `sec_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1168;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendence`
--
ALTER TABLE `attendence`
  ADD CONSTRAINT `FK_attendence_attendencerecords` FOREIGN KEY (`attend_record`) REFERENCES `attend_records` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_attendence_branches` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_attendence_sec_type` FOREIGN KEY (`sec_type_id`) REFERENCES `sec_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_attendence_students` FOREIGN KEY (`std_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attend_records`
--
ALTER TABLE `attend_records`
  ADD CONSTRAINT `FK_attendencerecords_branches` FOREIGN KEY (`Branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `FK_attendencerecords_sec_type` FOREIGN KEY (`sec_id`) REFERENCES `sec_type` (`id`);

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `FK_exams_branches` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_exams_exam_records` FOREIGN KEY (`exam_record`) REFERENCES `exam_records` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_exams_sec_type` FOREIGN KEY (`sec_type_id`) REFERENCES `sec_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_exams_students` FOREIGN KEY (`std_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_records`
--
ALTER TABLE `exam_records`
  ADD CONSTRAINT `exam_records_ibfk_1` FOREIGN KEY (`Branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `exam_records_ibfk_2` FOREIGN KEY (`sec_id`) REFERENCES `sec_type` (`id`);

--
-- Constraints for table `exercises`
--
ALTER TABLE `exercises`
  ADD CONSTRAINT `FK_exercises_branches` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_exercises_exercise_records` FOREIGN KEY (`Exercise_Record`) REFERENCES `exercise_records` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_exercises_sec_type` FOREIGN KEY (`sec_type_id`) REFERENCES `sec_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_exercises_students` FOREIGN KEY (`std_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exercise_records`
--
ALTER TABLE `exercise_records`
  ADD CONSTRAINT `exercise_records_ibfk_1` FOREIGN KEY (`Branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `exercise_records_ibfk_2` FOREIGN KEY (`sec_id`) REFERENCES `sec_type` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FK_students_sec_type` FOREIGN KEY (`sec_type_id`) REFERENCES `sec_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
