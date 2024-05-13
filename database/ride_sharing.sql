-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 12:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ride_sharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `description`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, 'User  accessed /application-setting/setting', '127.0.0.1', '2024-03-16 09:32:24', '2024-03-16 09:32:24'),
(2, 1, 'User  accessed /application-setting/setting-update', '127.0.0.1', '2024-03-16 09:34:26', '2024-03-16 09:34:26'),
(3, 1, 'User  accessed /sliders', '127.0.0.1', '2024-03-16 09:52:15', '2024-03-16 09:52:15'),
(4, 1, 'User  accessed /sliders/create', '127.0.0.1', '2024-03-16 09:52:17', '2024-03-16 09:52:17'),
(5, 1, 'User  accessed /sliders', '127.0.0.1', '2024-03-16 09:52:55', '2024-03-16 09:52:55'),
(6, 1, 'User  accessed /sliders', '127.0.0.1', '2024-03-16 09:52:56', '2024-03-16 09:52:56'),
(7, 1, 'User  accessed /sliders/create', '127.0.0.1', '2024-03-16 09:52:58', '2024-03-16 09:52:58'),
(8, 1, 'User  accessed /sliders', '127.0.0.1', '2024-03-16 09:53:10', '2024-03-16 09:53:10'),
(9, 1, 'User  accessed /sliders', '127.0.0.1', '2024-03-16 09:53:11', '2024-03-16 09:53:11'),
(10, 1, 'User  accessed /application-setting/email-setting', '127.0.0.1', '2024-03-16 12:12:01', '2024-03-16 12:12:01'),
(11, 1, 'User  accessed /application-setting/database-backup', '127.0.0.1', '2024-03-16 12:12:28', '2024-03-16 12:12:28'),
(12, 1, 'User  accessed /application-setting/application-cache-clear', '127.0.0.1', '2024-03-16 12:13:11', '2024-03-16 12:13:11'),
(13, 1, 'User  accessed /application-setting/setting', '127.0.0.1', '2024-03-16 12:13:12', '2024-03-16 12:13:12'),
(14, 1, 'User  accessed /customer', '127.0.0.1', '2024-03-16 12:13:20', '2024-03-16 12:13:20'),
(15, 1, 'User  accessed /home-page-data', '127.0.0.1', '2024-03-16 12:13:30', '2024-03-16 12:13:30'),
(16, 1, 'User  accessed /home-page-data', '127.0.0.1', '2024-03-16 12:14:15', '2024-03-16 12:14:15'),
(17, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-16 12:14:26', '2024-03-16 12:14:26'),
(18, 1, 'User  accessed /ticket/pending', '127.0.0.1', '2024-03-16 12:15:15', '2024-03-16 12:15:15'),
(19, 1, 'User  accessed /home-page-data', '127.0.0.1', '2024-03-16 12:15:30', '2024-03-16 12:15:30'),
(20, 1, 'User  accessed /save-home-data', '127.0.0.1', '2024-03-16 12:18:58', '2024-03-16 12:18:58'),
(21, 1, 'User  accessed /home-page-data', '127.0.0.1', '2024-03-16 12:18:59', '2024-03-16 12:18:59'),
(22, 1, 'User  accessed /save-home-data', '127.0.0.1', '2024-03-16 12:20:57', '2024-03-16 12:20:57'),
(23, 1, 'User  accessed /home-page-data', '127.0.0.1', '2024-03-16 12:20:58', '2024-03-16 12:20:58'),
(24, 1, 'User  accessed /save-home-data', '127.0.0.1', '2024-03-16 12:22:05', '2024-03-16 12:22:05'),
(25, 1, 'User  accessed /home-page-data', '127.0.0.1', '2024-03-16 12:22:06', '2024-03-16 12:22:06'),
(26, 1, 'User  accessed /fleets', '127.0.0.1', '2024-03-16 12:41:48', '2024-03-16 12:41:48'),
(27, 1, 'User  accessed /fleets', '127.0.0.1', '2024-03-16 12:41:49', '2024-03-16 12:41:49'),
(28, 1, 'User  accessed /application-setting/setting', '127.0.0.1', '2024-03-16 12:42:12', '2024-03-16 12:42:12'),
(29, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-16 12:43:31', '2024-03-16 12:43:31'),
(30, 1, 'User  accessed /customer', '127.0.0.1', '2024-03-16 12:43:56', '2024-03-16 12:43:56'),
(31, 1, 'User  accessed /sliders', '127.0.0.1', '2024-03-16 22:21:17', '2024-03-16 22:21:17'),
(32, 1, 'User  accessed /amenitie-store', '127.0.0.1', '2024-03-16 22:22:05', '2024-03-16 22:22:05'),
(33, 1, 'User  accessed /fleets', '127.0.0.1', '2024-03-16 22:23:27', '2024-03-16 22:23:27'),
(34, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-16 22:23:51', '2024-03-16 22:23:51'),
(35, 1, 'User  accessed /customer', '127.0.0.1', '2024-03-16 22:24:42', '2024-03-16 22:24:42'),
(36, 1, 'User  accessed /fleets', '127.0.0.1', '2024-03-16 22:24:54', '2024-03-16 22:24:54'),
(37, 1, 'User  accessed /sliders', '127.0.0.1', '2024-03-16 22:25:02', '2024-03-16 22:25:02'),
(38, 1, 'User  accessed /home-page-data', '127.0.0.1', '2024-03-16 22:59:33', '2024-03-16 22:59:33'),
(39, 1, 'User  accessed /home-page-data', '127.0.0.1', '2024-03-19 09:55:49', '2024-03-19 09:55:49'),
(40, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-19 09:56:07', '2024-03-19 09:56:07'),
(41, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-19 10:01:45', '2024-03-19 10:01:45'),
(42, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-19 10:02:03', '2024-03-19 10:02:03'),
(43, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-19 10:02:33', '2024-03-19 10:02:33'),
(44, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-19 10:04:08', '2024-03-19 10:04:08'),
(45, 1, 'User  accessed /taxi-booking', '127.0.0.1', '2024-03-19 10:05:55', '2024-03-19 10:05:55'),
(46, 1, 'User  accessed /taxi-booking?customer_id=&service_id=&status=1&datefilter=03%2F20%2F2024+-+04%2F30%2F2024', '127.0.0.1', '2024-03-19 10:06:39', '2024-03-19 10:06:39'),
(47, 1, 'User  accessed /taxi-booking?customer_id=&service_id=2&status=1&datefilter=', '127.0.0.1', '2024-03-19 10:06:46', '2024-03-19 10:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(4) NOT NULL DEFAULT 0,
  `click_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=>Active; 0=>Inactive',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `cost`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Richard Nunez', '68.00', 1, '65f66fedc28d01710649325.png', '2024-03-16 22:22:05', '2024-03-16 22:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `application_settings`
--

CREATE TABLE `application_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` decimal(8,2) DEFAULT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_from_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_encryption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clicksend_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clicksend_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nab_transact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_pass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_settings`
--

INSERT INTO `application_settings` (`id`, `business_name`, `business_address`, `business_number`, `business_email`, `time_zone`, `logo`, `favicon`, `currency`, `meta_title`, `meta_description`, `meta_image`, `gst`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_from_name`, `mail_from_address`, `mail_encryption`, `mail_status`, `clicksend_username`, `clicksend_key`, `sms_status`, `nab_transact`, `merchant_id`, `transaction_pass`, `created_at`, `updated_at`) VALUES
(1, 'Hedda Dejesus', 'Rerum culpa magnam d', '+1 (133) 172-9545', 'nacymuwofy@mailinator.com', NULL, '65f5bc022a62e1710603266.png', '65f5bc0251ff61710603266.png', NULL, NULL, NULL, NULL, '53.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pugoqi', 'Eligendi eaque lauda', NULL, NULL, NULL, NULL, '2024-02-27 10:39:53', '2024-03-16 09:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `booking_data` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_payments`
--

CREATE TABLE `booking_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `discount_amount` decimal(10,2) NOT NULL,
  `gst` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED DEFAULT NULL COMMENT '0=>Initiated; 1=>Success; 2=>Pending; 3=>Rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=>Active; 0=>Inactive;',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `min_amount` decimal(8,2) NOT NULL,
  `type` enum('percentage','fixed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `limit` int(10) UNSIGNED DEFAULT NULL,
  `used_number` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` int(10) UNSIGNED DEFAULT NULL COMMENT '0=>Active; 1=>Inactive',
  `expires_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_user`
--

CREATE TABLE `coupon_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crs_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crs_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crs_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crs_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crs_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_holder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=>archive; 1=>publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `license_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_areas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1=>Verified; 0=>Unverified; 2=>Ban',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_reviews`
--

CREATE TABLE `driver_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=>archive; 1=>publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_training_results`
--

CREATE TABLE `driver_training_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `driver_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_mark` int(11) DEFAULT NULL,
  `obtain_mark` int(11) DEFAULT NULL,
  `fine_mark` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0=>pass; 1=>fail',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_transport_details`
--

CREATE TABLE `driver_transport_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transport_type_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chasis_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `car_planumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_luggage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_photos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_mark` double(10,2) NOT NULL,
  `pass_mark` double(10,2) NOT NULL,
  `negative_mark` tinyint(1) DEFAULT NULL,
  `negative_mark_value` double(8,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>Active; 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `base_fare` decimal(10,2) NOT NULL,
  `per_km_rate` decimal(10,2) DEFAULT NULL,
  `per_minute_rate` decimal(10,2) NOT NULL,
  `extra_charge` decimal(10,2) NOT NULL,
  `is_vat_applicable` int(11) DEFAULT NULL,
  `vat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fleets`
--

CREATE TABLE `fleets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passanger` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luggage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hand_bag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=>ENABLE; 0=>DISABLE; 2=>Booked',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fleets`
--

INSERT INTO `fleets` (`id`, `service_id`, `tour_id`, `name`, `passanger`, `luggage`, `hand_bag`, `photos`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'ex', '4', NULL, '3', '[\"https:\\/\\/fakeimg.pl\\/300\"]', '98.18', '1', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(2, NULL, NULL, 'doloremque', '5', '3', NULL, '[\"https:\\/\\/fakeimg.pl\\/300\"]', '22.28', '0', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(3, NULL, NULL, 'hic', '3', '3', NULL, '[\"https:\\/\\/fakeimg.pl\\/300\"]', '78.05', '2', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(4, NULL, NULL, 'soluta', '2', NULL, '2', '[\"https:\\/\\/fakeimg.pl\\/300\"]', '90.78', '0', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(5, NULL, NULL, 'deleniti', '3', NULL, NULL, '[\"https:\\/\\/fakeimg.pl\\/300\"]', '10.39', '2', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(6, NULL, NULL, 'illo', '4', NULL, NULL, '[\"https:\\/\\/fakeimg.pl\\/300\"]', '35.73', '1', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(7, NULL, NULL, 'perspiciatis', '1', NULL, '1', '[\"https:\\/\\/fakeimg.pl\\/300\"]', '92.73', '1', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(8, NULL, NULL, 'rem', '3', '5', '3', '[\"https:\\/\\/fakeimg.pl\\/300\"]', '71.82', '1', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(9, NULL, NULL, 'voluptatum', '3', '1', '3', '[\"https:\\/\\/fakeimg.pl\\/300\"]', '47.73', '2', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(10, NULL, NULL, 'aut', '1', NULL, NULL, '[\"https:\\/\\/fakeimg.pl\\/300\"]', '85.33', '0', '2024-02-27 10:39:54', '2024-02-27 10:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_keys` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sections`
--

CREATE TABLE `home_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `support_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reservation_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reservation_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `who_are_we_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats_one_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats_one_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats_two_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats_two_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats_three_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats_three_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats_four_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats_four_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_block_1_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_block_1_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_block_2_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_block_2_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_block_3_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_block_3_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sections`
--

INSERT INTO `home_sections` (`id`, `support_title`, `support_description`, `reservation_title`, `reservation_description`, `location_title`, `location_description`, `who_are_we_description`, `stats_one_title`, `stats_one_number`, `stats_two_title`, `stats_two_number`, `stats_three_title`, `stats_three_number`, `stats_four_title`, `stats_four_number`, `section_title`, `section_description`, `section_block_1_title`, `section_block_1_description`, `section_block_2_title`, `section_block_2_description`, `section_block_3_title`, `section_block_3_description`, `created_at`, `updated_at`) VALUES
(1, 'The standard Lorem Ipsum passage, used since the 1500s', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '1914 translation by H. Rackham', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', '1914 translation by H. Rackham', '\"On the other hand, we denounce with righteous indignation and dislike men who are so', 'What is Lorem Ipsum?', 'beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,', 'he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', 'readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there', 'Translations: Can you help translate this site into a foreign language ? Please email us with details if you can help.', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2024-03-16 12:18:58', '2024-03-16 12:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pick_up_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_off_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retun_pick_up` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_drop_off` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_wait` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baby_seat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_passangers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_stop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `late_early_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pick_up_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pick_up_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `sort_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=>ENABLE; 2=>DISABLE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `url`, `parent_id`, `sort_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Services', 'Dolores ut dolore vo', 0, '0', '1', '2024-03-16 09:55:45', '2024-03-16 09:55:45'),
(2, 'AIRPORT TRANSFERS', 'Dolores ut dolore vo', 1, '0', '1', '2024-03-16 09:56:06', '2024-03-16 09:56:06'),
(3, 'Oleg Mcpherson', 'Unde qui voluptatem', 1, '0', '1', '2024-03-16 22:59:25', '2024-03-16 22:59:25');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_12_201152_create_activity_logs_table', 1),
(7, '2023_10_22_152722_create_subrubs_table', 1),
(8, '2023_11_12_044259_add_username_to_users_table', 1),
(9, '2023_11_12_062436_create_permission_tables', 1),
(10, '2023_11_13_030243_create_service_types_table', 1),
(11, '2023_11_13_090244_create_services_table', 1),
(12, '2023_11_13_093713_create_transport_types_table', 1),
(13, '2023_11_13_095328_create_drivers_table', 1),
(14, '2023_11_13_095343_create_driver_transport_details_table', 1),
(15, '2023_11_14_044248_create_amenities_table', 1),
(16, '2023_11_15_033231_create_tags_table', 1),
(17, '2023_11_15_033237_create_categories_table', 1),
(18, '2023_11_15_033850_create_sub_categories_table', 1),
(19, '2023_11_15_042517_create_customers_table', 1),
(20, '2023_11_15_044321_create_posts_table', 1),
(21, '2023_11_15_073951_create_post_tag_table', 1),
(22, '2023_11_15_103425_create_courses_table', 1),
(23, '2023_11_16_041004_create_application_settings_table', 1),
(24, '2023_11_16_085554_create_examinations_table', 1),
(25, '2023_11_16_0855555_create_questions_table', 1),
(26, '2023_11_18_062535_create_driver_training_results_table', 1),
(27, '2023_11_19_054206_create_taxi_bookings_table', 1),
(28, '2023_11_20_054109_create_coupons_table', 1),
(29, '2023_11_20_083930_create_booking_payments_table', 1),
(30, '2023_11_20_104036_create_fares_table', 1),
(31, '2023_11_21_065508_create_customer_reviews_table', 1),
(32, '2023_11_21_082940_create_support_tickets_table', 1),
(33, '2023_11_21_083054_create_support_messages_table', 1),
(34, '2023_11_21_083217_create_support_attachments_table', 1),
(35, '2023_11_21_083403_create_admin_notifications_table', 1),
(36, '2023_11_25_073226_create_driver_reviews_table', 1),
(37, '2023_11_26_082821_create_booking_details_table', 1),
(38, '2023_11_30_032700_create_pages_table', 1),
(39, '2023_11_30_041812_create_menus_table', 1),
(40, '2023_12_02_043137_create_frontends_table', 1),
(41, '2023_12_04_105037_create_contacts_table', 1),
(42, '2023_12_07_164700_create_sliders_table', 1),
(43, '2023_12_08_054151_create_fleets_table', 1),
(44, '2023_12_21_190645_create_credit_cards_table', 1),
(45, '2023_12_22_151854_create_newsletters_table', 1),
(46, '2023_12_28_141434_create_coupon_user_table', 1),
(47, '2024_02_04_153305_create_home_sections_table', 1),
(48, '2024_02_23_062542_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_1_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_1_subheading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_1_book_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_1_qoute_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_3_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_3_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_3_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_3_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_4_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_4_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_4_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_4_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_5_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_5_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_5_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_5_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_6_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_6_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_7_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_7_subheading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_7_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_7_book_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_7_qoute_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_8_1_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_8_1_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_8_2_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_8_2_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_8_3_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_8_3_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_8_4_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_8_4_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_9_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_9_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why_choose_us` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why_choose_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `section_1_heading`, `section_1_subheading`, `section_1_image`, `section_1_book_button_url`, `section_1_qoute_button_url`, `section_2_title`, `section_2_content`, `section_3_title`, `section_3_image`, `section_3_content`, `section_3_button_url`, `section_4_title`, `section_4_image`, `section_4_content`, `section_4_button_url`, `section_5_title`, `section_5_image`, `section_5_content`, `section_5_button_url`, `section_6_title`, `section_6_content`, `section_7_heading`, `section_7_subheading`, `section_7_image`, `section_7_book_button_url`, `section_7_qoute_button_url`, `section_8_1_heading`, `section_8_1_text`, `section_8_2_heading`, `section_8_2_text`, `section_8_3_heading`, `section_8_3_text`, `section_8_4_heading`, `section_8_4_text`, `section_9_heading`, `section_9_text`, `why_choose_us`, `why_choose_button_url`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Eu cupidatat earum s', 'Dolores ut dolore vo', 'Tenetur eu praesenti', 'Sit deserunt aut am', 'Maiores unde aut vol', 'Quia illum providen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '65f676f72ca031710651127.jpg', 'Ea non saepe tenetur', 'Fugit ipsum et offi', 'Lorem Ipsum is simply dummy text', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><div><br></div>', 'Why do we use it?', '65f6908818c4c1710657672.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Book', 'Where does it come from?', '65f69088853261710657672.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><div><br></div>', 'Click', 'comes from a line in section 1.10.32.', '65f69088c16071710657672.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><div><br></div>', 'open', 'Where can I get some?', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><div><br></div>', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '65f690890fd211710657673.jpg', 'Aut ut sint dicta d', 'Accusamus nostrum ve', 'Atque dolor eu conse', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><div><br></div>', 'Why do we use it?', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div>', 'Where can I get some?', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><div><br></div>', 'Where does it come from?', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'comes from a line in section 1.10.32.', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'Similique ea ducimus', '<p><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; text-align: left; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>', '2024-03-16 09:55:16', '2024-03-19 11:58:26'),
(2, 'Rerum beatae exercit', 'Earum in animi eaqu', 'Reprehenderit cillum', 'Nam sit nisi in quo', 'Quis ad culpa dolor', 'Et qui odit consecte', 'Odit aut eius evenie', '65f676bc9c7971710651068.png', 'Ut atque consequat', 'Dolorem dolor qui qu', 'Repellendus Quod im', NULL, 'Sint beatae qui dol', NULL, NULL, 'Qui qui qui aspernat', 'Ut rerum sunt deseru', '65f676bce40aa1710651068.jpg', NULL, 'Et molestiae a dolor', 'Ipsa vitae aut dolo', NULL, NULL, 'Voluptates velit et', 'Velit et autem vitae', NULL, 'Est cupidatat minima', 'Est aliquam exceptur', NULL, 'Adipisci aute non es', 'Provident velit con', 'Mollit magnam exerci', NULL, 'Rerum repellendus V', NULL, 'In ut ullamco non am', NULL, 'Suscipit nulla ea si', NULL, 'Adipisicing sint cor', NULL, NULL, 'Sint inventore dolor', NULL, '2024-03-16 22:51:09', '2024-03-16 22:51:09');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(2, 'role-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(3, 'role-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(4, 'role-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(5, 'user-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(6, 'user-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(7, 'user-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(8, 'user-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(9, 'service-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(10, 'service-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(11, 'service-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(12, 'service-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(13, 'transport-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(14, 'transport-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(15, 'transport-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(16, 'transport-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(17, 'amenitie-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(18, 'amenitie-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(19, 'amenitie-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(20, 'amenitie-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(21, 'category-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(22, 'category-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(23, 'category-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(24, 'category-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(25, 'subcategory-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(26, 'subcategory-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(27, 'subcategory-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(28, 'subcategory-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(29, 'tag-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(30, 'tag-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(31, 'tag-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(32, 'tag-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(33, 'post-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(34, 'post-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(35, 'post-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(36, 'post-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(37, 'setting-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(38, 'setting-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(39, 'setting-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(40, 'setting-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(41, 'customer-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(42, 'customer-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(43, 'customer-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(44, 'customer-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(45, 'taxi-booking-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(46, 'taxi-booking-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(47, 'taxi-booking-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(48, 'taxi-booking-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(49, 'coupon-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(50, 'coupon-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(51, 'coupon-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(52, 'coupon-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(53, 'fare-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(54, 'fare-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(55, 'fare-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(56, 'fare-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(57, 'slider-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(58, 'slider-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(59, 'slider-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(60, 'slider-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(61, 'taxi-booking-approve-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(62, 'taxi-booking-approve-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(63, 'taxi-booking-approve-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(64, 'taxi-booking-approve-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(65, 'page-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(66, 'page-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(67, 'page-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(68, 'page-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(69, 'menu-list', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(70, 'menu-create', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(71, 'menu-edit', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(72, 'menu-delete', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1=>Publish; 0=>Archive;',
  `is_featured` int(11) NOT NULL COMMENT '0=>featured; 1=>not featured;',
  `gallery_images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_multiple` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2024-02-27 10:39:53', '2024-02-27 10:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>Active; 0=>Inactive',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_fare` decimal(10,2) DEFAULT NULL,
  `subrub_id` int(11) DEFAULT NULL,
  `fare_1` decimal(10,2) DEFAULT NULL,
  `fare_2` decimal(10,2) DEFAULT NULL,
  `fare_3` decimal(10,2) DEFAULT NULL,
  `fare_4` decimal(10,2) DEFAULT NULL,
  `fare_5` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `status`, `description`, `base_fare`, `subrub_id`, `fare_1`, `fare_2`, `fare_3`, `fare_4`, `fare_5`, `created_at`, `updated_at`) VALUES
(1, 'From Airport', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(2, 'To Airport', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(3, 'Point-to-Point', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(4, 'Hourly/As Directed', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(5, 'Weddings', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(6, 'Private Tour', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 10:39:53', '2024-02-27 10:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=>active; 0=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=>ENABLE; 2=>DISABLE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `short_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ullam tempor labore', 'Rerum aspernatur nec', '65f5c0581c4dc1710604376.jpg', '1', '2024-03-16 09:52:56', '2024-03-16 09:52:56'),
(2, 'Ut nesciunt necessi', 'Adipisci quibusdam o', '65f5c0668d1471710604390.jpg', '1', '2024-03-16 09:53:10', '2024-03-16 09:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `subrubs`
--

CREATE TABLE `subrubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subrubs`
--

INSERT INTO `subrubs` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Abbotsford', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(2, 'Aberfeldie', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(3, 'Airport West', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(4, 'Albanvale', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(5, 'Albert Park', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(6, 'Albion', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(7, 'Alphington', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(8, 'Altona Meadows', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(9, 'Altona North', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(10, 'Altona', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(11, 'Ardeer', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(12, 'Armadale', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(13, 'Arthurs Seat', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(14, 'Ascot Vale', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(15, 'Ashburton', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(16, 'Ashwood', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(17, 'Aspendale', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(18, 'Aspendale Gardens', '50.00', '2024-02-27 10:39:53', '2024-02-27 10:39:53'),
(19, 'Attwood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(20, 'Auburn', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(21, 'Aurora', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(22, 'Avondale Heights', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(23, 'Avonsleigh', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(24, 'Balaclava', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(25, 'Balwyn', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(26, 'Balwyn North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(27, 'Bangholme', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(28, 'Baxter', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(29, 'Bayswater', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(30, 'Bayswater North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(31, 'Beaconsfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(32, 'Beaumaris', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(33, 'Belgrave', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(34, 'Belgrave Heights', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(35, 'Belgrave South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(36, 'Bellfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(37, 'Bennettswood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(38, 'Bentleigh', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(39, 'Bentleigh East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(40, 'Berwick', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(41, 'Bittern', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(42, 'Black Rock', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(43, 'Blackburn', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(44, 'Blackburn North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(45, 'Blackburn South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(46, 'Blairgowrie', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(47, 'Bonbeach', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(48, 'Boronia', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(49, 'Box Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(50, 'Box Hill North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(51, 'Box Hill South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(52, 'Braeside', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(53, 'Braybrook', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(54, 'Briar Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(55, 'Brighton', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(56, 'Brighton East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(57, 'Broadmeadows', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(58, 'Brookfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(59, 'Brooklyn', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(60, 'Brunswick', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(61, 'Brunswick East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(62, 'Brunswick West', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(63, 'Bulla', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(64, 'Bulleen', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(65, 'Bundoora', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(66, 'Burnley', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(67, 'Burnside', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(68, 'Burnside Heights', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(69, 'Burwood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(70, 'Burwood East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(71, 'Cairnlea', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(72, 'Calder Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(73, 'Camberwell', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(74, 'Campbellfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(75, 'Canterbury', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(76, 'Carlton North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(77, 'Carlton', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(78, 'Carnegie', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(79, 'Caroline Springs', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(80, 'Carrum', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(81, 'Carrum Downs', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(82, 'Caulfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(83, 'Caulfield East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(84, 'Caulfield North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(85, 'Caulfield South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(86, 'Chadstone', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(87, 'Chelsea', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(88, 'Chelsea Heights', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(89, 'Cheltenham', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(90, 'Chirnside Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(91, 'Clarinda', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(92, 'Clayton', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(93, 'Clayton South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(94, 'Clematis', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(95, 'Clifton Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(96, 'Coburg', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(97, 'Coburg North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(98, 'Cocoroc', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(99, 'Coldstream', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(100, 'Collingwood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(101, 'Coolaroo', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(102, 'Craigieburn', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(103, 'Cranbourne', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(104, 'Cranbourne East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(105, 'Cranbourne North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(106, 'Cranbourne South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(107, 'Cranbourne West', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(108, 'Cremorne', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(109, 'Crib Point', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(110, 'Croydon', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(111, 'Croydon Hills', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(112, 'Croydon North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(113, 'Croydon South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(114, 'Dallas', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(115, 'Dandenong', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(116, 'Dandenong North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(117, 'Dandenong South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(118, 'Deer Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(119, 'Delahey', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(120, 'Derrimut', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(121, 'Diamond Creek', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(122, 'Dingley Village', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(123, 'Docklands', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(124, 'Doncaster', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(125, 'Doncaster East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(126, 'Donvale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(127, 'Doreen', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(128, 'Doveton', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(129, 'Dromana', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(130, 'Eaglemont', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(131, 'East Melbourne', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(132, 'Edithvale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(133, 'Elsternwick', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(134, 'Eltham', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(135, 'Eltham North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(136, 'Elwood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(137, 'Emerald', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(138, 'Endeavour Hills', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(139, 'Epping', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(140, 'Essendon Fields', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(141, 'Essendon North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(142, 'Essendon West', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(143, 'Essendon', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(144, 'Eumemmerring', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(145, 'Fairfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(146, 'Fawkner', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(147, 'Ferntree Gully', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(148, 'Ferny Creek', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(149, 'Fitzroy', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(150, 'Fitzroy North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(151, 'Flemington', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(152, 'Footscray', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(153, 'Forest Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(154, 'Frankston', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(155, 'Frankston North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(156, 'Frankston South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(157, 'Gardenvale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(158, 'Gladstone Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(159, 'Glen Huntly', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(160, 'Glen Iris', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(161, 'Glen Waverley', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(162, 'Glenroy', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(163, 'Gowanbrae', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(164, 'Greensborough', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(165, 'Greenvale Lakes', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(166, 'Greenvale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(167, 'Guys Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(168, 'Hadfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(169, 'Hallam', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(170, 'Hampton', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(171, 'Hampton East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(172, 'Hampton Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(173, 'Harkaway', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(174, 'Hawthorn', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(175, 'Hawthorn East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(176, 'Heatherdale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(177, 'Heatherton', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(178, 'Heathmont', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(179, 'Heidelberg', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(180, 'Heidelberg Heights', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(181, 'Heidelberg West', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(182, 'Highett', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(183, 'Hillside', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(184, 'Hoppers Crossing', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(185, 'Houston', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(186, 'Hughesdale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(187, 'Huntingdale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(188, 'Hurstbridge', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(189, 'Ivanhoe', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(190, 'Ivanhoe East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(191, 'Jacana', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(192, 'Junction Village', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(193, 'Kallista', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(194, 'Kalorama', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(195, 'Karingal', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(196, 'Kealba', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(197, 'Keilor', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(198, 'Keilor Downs', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(199, 'Keilor East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(200, 'Keilor Lodge', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(201, 'Keilor North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(202, 'Keilor Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(203, 'Kensington', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(204, 'Kerrimuir', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(205, 'Kew', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(206, 'Kew East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(207, 'Keysborough', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(208, 'Kilsyth', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(209, 'Kilsyth South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(210, 'Kings Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(211, 'Kingsbury', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(212, 'Kingsville', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(213, 'Knoxfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(214, 'Kooyong', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(215, 'Kurunjang', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(216, 'Laburnum', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(217, 'Lalor', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(218, 'Langwarrin', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(219, 'Langwarrin South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(220, 'Laverton', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(221, 'Laverton North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(222, 'Lilydale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(223, 'Lower Plenty', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(224, 'Lynbrook', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(225, 'Lyndhurst', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(226, 'Lysterfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(227, 'Lysterfield South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(228, 'Macclesfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(229, 'McCrae', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(230, 'McKinnon', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(231, 'Macleod', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(232, 'Maidstone', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(233, 'Malvern', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(234, 'Malvern East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(235, 'Maribyrnong', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(236, 'Meadow Heights', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(237, 'Melbourne Airport', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(238, 'Melton (suburb)', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(239, 'Melton South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(240, 'Melton West', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(241, 'Mentone', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(242, 'Menzies Creek', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(243, 'Mernda', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(244, 'Mickleham', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(245, 'Middle Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(246, 'Milgate Park Estate', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(247, 'Mill Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(248, 'Mitcham', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(249, 'Monbulk', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(250, 'Mont Albert', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(251, 'Mont Albert North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(252, 'Montmorency', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(253, 'Montrose', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(254, 'Moonee Ponds', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(255, 'Moorabbin Airport', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(256, 'Moorabbin', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(257, 'Moorooduc', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(258, 'Mooroolbark', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(259, 'Mordialloc', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(260, 'Mornington', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(261, 'Mount Dandenong', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(262, 'Mount Eliza', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(263, 'Mount Evelyn', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(264, 'Mount Martha', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(265, 'Mount Waverley', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(266, 'Mulgrave', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(267, 'Narre Warren East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(268, 'Narre Warren North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(269, 'Narre Warren South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(270, 'Narre Warren', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(271, 'Newport', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(272, 'Niddrie', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(273, 'Noble Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(274, 'Noble Park North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(275, 'North Melbourne', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(276, 'North Richmond', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(277, 'North Warrandyte', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(278, 'Northcote', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(279, 'Norwood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(280, 'Notting Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(281, 'Nunawading', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(282, 'Oak Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(283, 'Oaklands Junction', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(284, 'Oakleigh', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(285, 'Oakleigh East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(286, 'Oakleigh South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(287, 'Olinda', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(288, 'Olivers Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(289, 'Ormond', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(290, 'Pakenham', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(291, 'Panton Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(292, 'Park Orchards', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(293, 'Parkdale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(294, 'Parkville', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(295, 'Pascoe Vale South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(296, 'Pascoe Vale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(297, 'The Patch', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(298, 'Patterson Lakes', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(299, 'Pennydale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(300, 'Plenty', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(301, 'Point Cook', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(302, 'Port Melbourne', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(303, 'Portsea', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(304, 'Prahran', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(305, 'Preston', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(306, 'Princes Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(307, 'Ravenhall', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(308, 'Research', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(309, 'Reservoir', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(310, 'Richmond', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(311, 'Ringwood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(312, 'Ringwood East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(313, 'Ringwood North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(314, 'Ripponlea', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(315, 'Rockbank', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(316, 'Rosanna', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(317, 'Rosebud', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(318, 'Rosebud West', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(319, 'Rowville', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(320, 'Roxburgh Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(321, 'Rye', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(322, 'Safety Beach', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(323, 'St Albans', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(324, 'St Helena', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(325, 'St Kilda', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(326, 'St Kilda East', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(327, 'St Kilda West', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(328, 'Sandhurst', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(329, 'Sandringham', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(330, 'Sassafras', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(331, 'Scoresby', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(332, 'Seabrook', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(333, 'Seaford', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(334, 'Seaholme', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(335, 'Seddon', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(336, 'Selby', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(337, 'Seville', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(338, 'Sherbrooke', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(339, 'Skye', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(340, 'Somerton', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(341, 'Sorrento', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(342, 'South Kingsville', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(343, 'South Melbourne', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(344, 'South Morang', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(345, 'South Wharf', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(346, 'South Yarra', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(347, 'Southbank', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(348, 'Spotswood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(349, 'Springvale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(350, 'Springvale South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(351, 'Strathmore', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(352, 'Strathmore Heights', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(353, 'Sunbury', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(354, 'Sunshine', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(355, 'Sunshine North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(356, 'Sunshine West', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(357, 'Surrey Hills', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(358, 'Sydenham', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(359, 'Syndal', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(360, 'Tally Ho', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(361, 'Tarneit', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(362, 'Taylors Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(363, 'Taylors Lakes', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(364, 'Tecoma', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(365, 'Templestowe', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(366, 'Templestowe Lower', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(367, 'The Basin', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(368, 'Thomastown', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(369, 'Thornbury', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(370, 'Toorak', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(371, 'Tootgarook', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(372, 'Tottenham', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(373, 'Travancore', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(374, 'Tremont', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(375, 'Truganina', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(376, 'Tullamarine', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(377, 'Upfield', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(378, 'Upper Ferntree Gully', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(379, 'Upwey', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(380, 'Vermont', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(381, 'Vermont South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(382, 'Viewbank', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(383, 'Wantirna', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(384, 'Wantirna South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(385, 'Warrandyte', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(386, 'Warrandyte South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(387, 'Warranwood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(388, 'Waterways', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(389, 'Watsonia', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(390, 'Watsonia North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(391, 'Wattle Glen', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(392, 'Waverley Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(393, 'Werribee', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(394, 'Werribee South', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(395, 'West Footscray', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(396, 'West Melbourne', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(397, 'Westgarth', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(398, 'Westmeadows', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(399, 'Wheelers Hill', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(400, 'Wildwood', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(401, 'Williams Landing', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(402, 'Williamstown', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(403, 'Williamstown North', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(404, 'Windsor', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(405, 'Wonga Park', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(406, 'Wyndham Vale', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(407, 'Yallambie', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(408, 'Yarrambat', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(409, 'Yarraville', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54'),
(410, 'Yuroke', '50.00', '2024-02-27 10:39:54', '2024-02-27 10:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=>Active; 0=>Inactive;',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_attachments`
--

CREATE TABLE `support_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `support_message_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `support_ticket_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Open, 1: Answered, 2: Replied, 3: Closed',
  `priority` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1 = Low, 2 = medium, 3 = high',
  `last_reply` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=>Active; 0=>Inactive;',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taxi_bookings`
--

CREATE TABLE `taxi_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `fleet_id` bigint(20) UNSIGNED NOT NULL,
  `pick_up_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pick_up_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pick_up_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_off_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_passenger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_luggage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_service` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenities` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passanger_infos` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stops` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `promo_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=>pending; 1=>accepted; 2=>completed; 3=>cancelled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_types`
--

CREATE TABLE `transport_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 2 COMMENT '1=>admin; 2=>user',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `email_verified_at`, `password`, `is_admin`, `photo`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(1, 'Mr', 'Admin', '56646', 'admin@gmail.com', NULL, '$2y$10$oeyCPa9UiySRNk1scFf3i.v/9r34sCmrMh5xIPA5TwlAb4ACxOSV6', 1, NULL, NULL, '2024-02-27 10:39:53', '2024-02-27 10:39:53', NULL),
(2, 'Guest', 'User', '56646', 'guestuser@gmail.com', NULL, '$2y$12$773jEdIYZaLxHIaQV1tgweQXEnzx3y/ZJyKFI8X/IUxci58WhH/Kq', 2, NULL, NULL, '2024-02-27 10:39:53', '2024-02-27 10:39:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_settings`
--
ALTER TABLE `application_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_details_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `booking_payments`
--
ALTER TABLE `booking_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_payments_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `coupon_user`
--
ALTER TABLE `coupon_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupon_user_coupon_id_foreign` (`coupon_id`),
  ADD KEY `coupon_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_cards`
--
ALTER TABLE `credit_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_reviews_customer_id_foreign` (`customer_id`),
  ADD KEY `customer_reviews_driver_id_foreign` (`driver_id`),
  ADD KEY `customer_reviews_booking_id_foreign` (`booking_id`),
  ADD KEY `customer_reviews_service_id_foreign` (`service_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drivers_user_id_foreign` (`user_id`),
  ADD KEY `drivers_service_id_foreign` (`service_id`);

--
-- Indexes for table `driver_reviews`
--
ALTER TABLE `driver_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_reviews_customer_id_foreign` (`customer_id`),
  ADD KEY `driver_reviews_driver_id_foreign` (`driver_id`),
  ADD KEY `driver_reviews_booking_id_foreign` (`booking_id`),
  ADD KEY `driver_reviews_service_id_foreign` (`service_id`);

--
-- Indexes for table `driver_training_results`
--
ALTER TABLE `driver_training_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_training_results_course_id_foreign` (`course_id`),
  ADD KEY `driver_training_results_exam_id_foreign` (`exam_id`),
  ADD KEY `driver_training_results_driver_id_foreign` (`driver_id`);

--
-- Indexes for table `driver_transport_details`
--
ALTER TABLE `driver_transport_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_transport_details_transport_type_id_foreign` (`transport_type_id`),
  ADD KEY `driver_transport_details_driver_id_foreign` (`driver_id`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fares`
--
ALTER TABLE `fares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fares_service_id_foreign` (`service_id`);

--
-- Indexes for table `fleets`
--
ALTER TABLE `fleets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sections`
--
ALTER TABLE `home_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_course_id_foreign` (`course_id`),
  ADD KEY `questions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subrubs`
--
ALTER TABLE `subrubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `support_attachments`
--
ALTER TABLE `support_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_attachments_support_message_id_foreign` (`support_message_id`);

--
-- Indexes for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_messages_support_ticket_id_foreign` (`support_ticket_id`),
  ADD KEY `support_messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxi_bookings`
--
ALTER TABLE `taxi_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taxi_bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `transport_types`
--
ALTER TABLE `transport_types`
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
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application_settings`
--
ALTER TABLE `application_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_payments`
--
ALTER TABLE `booking_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_user`
--
ALTER TABLE `coupon_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credit_cards`
--
ALTER TABLE `credit_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_reviews`
--
ALTER TABLE `driver_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_training_results`
--
ALTER TABLE `driver_training_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_transport_details`
--
ALTER TABLE `driver_transport_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fares`
--
ALTER TABLE `fares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fleets`
--
ALTER TABLE `fleets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sections`
--
ALTER TABLE `home_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subrubs`
--
ALTER TABLE `subrubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_attachments`
--
ALTER TABLE `support_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taxi_bookings`
--
ALTER TABLE `taxi_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_types`
--
ALTER TABLE `transport_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD CONSTRAINT `admin_notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `taxi_bookings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_payments`
--
ALTER TABLE `booking_payments`
  ADD CONSTRAINT `booking_payments_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `taxi_bookings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_user`
--
ALTER TABLE `coupon_user`
  ADD CONSTRAINT `coupon_user_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`),
  ADD CONSTRAINT `coupon_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD CONSTRAINT `customer_reviews_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `taxi_bookings` (`id`),
  ADD CONSTRAINT `customer_reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_reviews_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`),
  ADD CONSTRAINT `customer_reviews_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `drivers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `driver_reviews`
--
ALTER TABLE `driver_reviews`
  ADD CONSTRAINT `driver_reviews_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `taxi_bookings` (`id`),
  ADD CONSTRAINT `driver_reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_reviews_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`),
  ADD CONSTRAINT `driver_reviews_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `driver_training_results`
--
ALTER TABLE `driver_training_results`
  ADD CONSTRAINT `driver_training_results_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_training_results_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_training_results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `examinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `driver_transport_details`
--
ALTER TABLE `driver_transport_details`
  ADD CONSTRAINT `driver_transport_details_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`),
  ADD CONSTRAINT `driver_transport_details_transport_type_id_foreign` FOREIGN KEY (`transport_type_id`) REFERENCES `transport_types` (`id`);

--
-- Constraints for table `fares`
--
ALTER TABLE `fares`
  ADD CONSTRAINT `fares_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `examinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `support_attachments`
--
ALTER TABLE `support_attachments`
  ADD CONSTRAINT `support_attachments_support_message_id_foreign` FOREIGN KEY (`support_message_id`) REFERENCES `support_messages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD CONSTRAINT `support_messages_support_ticket_id_foreign` FOREIGN KEY (`support_ticket_id`) REFERENCES `support_tickets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `support_messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `taxi_bookings`
--
ALTER TABLE `taxi_bookings`
  ADD CONSTRAINT `taxi_bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
