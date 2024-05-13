-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2024 at 04:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `description`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 05:20:28', '2024-01-26 05:20:28'),
(2, 1, 'User  accessed /fleets/1/edit', '127.0.0.1', '2024-01-26 05:20:34', '2024-01-26 05:20:34'),
(3, 1, 'User  accessed /fleets/1/edit', '127.0.0.1', '2024-01-26 05:20:45', '2024-01-26 05:20:45'),
(4, 1, 'User  accessed /fleets/1/edit', '127.0.0.1', '2024-01-26 05:20:58', '2024-01-26 05:20:58'),
(5, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 05:21:32', '2024-01-26 05:21:32'),
(6, 1, 'User  accessed /fleets/1/edit', '127.0.0.1', '2024-01-26 05:21:42', '2024-01-26 05:21:42'),
(7, 1, 'User  accessed /fleets/1/edit', '127.0.0.1', '2024-01-26 05:22:10', '2024-01-26 05:22:10'),
(8, 1, 'User  accessed /fleets/1', '127.0.0.1', '2024-01-26 05:22:46', '2024-01-26 05:22:46'),
(9, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 05:22:46', '2024-01-26 05:22:46'),
(10, 1, 'User  accessed /fleets/2/edit', '127.0.0.1', '2024-01-26 05:23:09', '2024-01-26 05:23:09'),
(11, 1, 'User  accessed /fleets/2', '127.0.0.1', '2024-01-26 05:23:37', '2024-01-26 05:23:37'),
(12, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 05:23:37', '2024-01-26 05:23:37'),
(13, 1, 'User  accessed /amenitie-store', '127.0.0.1', '2024-01-26 05:24:15', '2024-01-26 05:24:15'),
(14, 1, 'User  accessed /amenitie-store', '127.0.0.1', '2024-01-26 05:24:41', '2024-01-26 05:24:41'),
(15, 1, 'User  accessed /amenitie-store', '127.0.0.1', '2024-01-26 05:25:02', '2024-01-26 05:25:02'),
(16, 1, 'User  accessed /application-setting/setting', '127.0.0.1', '2024-01-26 05:25:07', '2024-01-26 05:25:07'),
(17, 1, 'User  accessed /application-setting/setting-update', '127.0.0.1', '2024-01-26 05:25:35', '2024-01-26 05:25:35'),
(18, 1, 'User  accessed /application-setting/setting', '127.0.0.1', '2024-01-26 05:25:36', '2024-01-26 05:25:36'),
(19, 1, 'User  accessed /sliders', '127.0.0.1', '2024-01-26 05:25:52', '2024-01-26 05:25:52'),
(20, 1, 'User  accessed /sliders/create', '127.0.0.1', '2024-01-26 05:25:55', '2024-01-26 05:25:55'),
(21, 1, 'User  accessed /sliders', '127.0.0.1', '2024-01-26 05:26:06', '2024-01-26 05:26:06'),
(22, 1, 'User  accessed /sliders', '127.0.0.1', '2024-01-26 05:26:07', '2024-01-26 05:26:07'),
(23, 1, 'User  accessed /service-update', '127.0.0.1', '2024-01-26 05:32:19', '2024-01-26 05:32:19'),
(24, 1, 'User  accessed /service-update', '127.0.0.1', '2024-01-26 05:33:39', '2024-01-26 05:33:39'),
(25, 1, 'User  accessed /service-update', '127.0.0.1', '2024-01-26 05:35:02', '2024-01-26 05:35:02'),
(26, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:27:15', '2024-01-26 08:27:15'),
(27, 1, 'User  accessed /fleets/1/edit', '127.0.0.1', '2024-01-26 08:30:45', '2024-01-26 08:30:45'),
(28, 1, 'User  accessed /fleets/1', '127.0.0.1', '2024-01-26 08:31:00', '2024-01-26 08:31:00'),
(29, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:31:01', '2024-01-26 08:31:01'),
(30, 1, 'User  accessed /fleets/2/edit', '127.0.0.1', '2024-01-26 08:31:05', '2024-01-26 08:31:05'),
(31, 1, 'User  accessed /fleets/2', '127.0.0.1', '2024-01-26 08:31:14', '2024-01-26 08:31:14'),
(32, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:31:15', '2024-01-26 08:31:15'),
(33, 1, 'User  accessed /fleets/3/edit', '127.0.0.1', '2024-01-26 08:33:06', '2024-01-26 08:33:06'),
(34, 1, 'User  accessed /fleets/3', '127.0.0.1', '2024-01-26 08:33:43', '2024-01-26 08:33:43'),
(35, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:33:43', '2024-01-26 08:33:43'),
(36, 1, 'User  accessed /fleets/4/edit', '127.0.0.1', '2024-01-26 08:34:22', '2024-01-26 08:34:22'),
(37, 1, 'User  accessed /fleets/4', '127.0.0.1', '2024-01-26 08:34:51', '2024-01-26 08:34:51'),
(38, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:34:51', '2024-01-26 08:34:51'),
(39, 1, 'User  accessed /fleets/5/edit', '127.0.0.1', '2024-01-26 08:34:55', '2024-01-26 08:34:55'),
(40, 1, 'User  accessed /fleets/5', '127.0.0.1', '2024-01-26 08:35:26', '2024-01-26 08:35:26'),
(41, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:35:26', '2024-01-26 08:35:26'),
(42, 1, 'User  accessed /fleets/6/edit', '127.0.0.1', '2024-01-26 08:35:32', '2024-01-26 08:35:32'),
(43, 1, 'User  accessed /fleets/6', '127.0.0.1', '2024-01-26 08:35:53', '2024-01-26 08:35:53'),
(44, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:35:54', '2024-01-26 08:35:54'),
(45, 1, 'User  accessed /fleets/7/edit', '127.0.0.1', '2024-01-26 08:35:59', '2024-01-26 08:35:59'),
(46, 1, 'User  accessed /fleets/7', '127.0.0.1', '2024-01-26 08:36:27', '2024-01-26 08:36:27'),
(47, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:36:27', '2024-01-26 08:36:27'),
(48, 1, 'User  accessed /fleets/8/edit', '127.0.0.1', '2024-01-26 08:36:32', '2024-01-26 08:36:32'),
(49, 1, 'User  accessed /fleets/8', '127.0.0.1', '2024-01-26 08:37:07', '2024-01-26 08:37:07'),
(50, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:37:07', '2024-01-26 08:37:07'),
(51, 1, 'User  accessed /fleets/9/edit', '127.0.0.1', '2024-01-26 08:37:12', '2024-01-26 08:37:12'),
(52, 1, 'User  accessed /fleets/9', '127.0.0.1', '2024-01-26 08:37:39', '2024-01-26 08:37:39'),
(53, 1, 'User  accessed /fleets', '127.0.0.1', '2024-01-26 08:37:40', '2024-01-26 08:37:40'),
(54, 1, 'User  accessed /sliders', '127.0.0.1', '2024-01-26 08:37:59', '2024-01-26 08:37:59'),
(55, 1, 'User  accessed /sliders/create', '127.0.0.1', '2024-01-26 08:38:03', '2024-01-26 08:38:03'),
(56, 1, 'User  accessed /sliders', '127.0.0.1', '2024-01-26 08:38:14', '2024-01-26 08:38:14'),
(57, 1, 'User  accessed /sliders', '127.0.0.1', '2024-01-26 08:38:15', '2024-01-26 08:38:15'),
(58, 1, 'User  accessed /application-setting/setting', '127.0.0.1', '2024-01-26 08:43:59', '2024-01-26 08:43:59'),
(59, 1, 'User  accessed /application-setting/setting-update', '127.0.0.1', '2024-01-26 08:44:13', '2024-01-26 08:44:13'),
(60, 1, 'User  accessed /application-setting/setting', '127.0.0.1', '2024-01-26 08:44:14', '2024-01-26 08:44:14'),
(61, 1, 'User  accessed /amenitie-update', '127.0.0.1', '2024-01-26 08:46:54', '2024-01-26 08:46:54'),
(62, 1, 'User  accessed /amenitie-update', '127.0.0.1', '2024-01-26 08:47:06', '2024-01-26 08:47:06'),
(63, 1, 'User  accessed /amenitie-update', '127.0.0.1', '2024-01-26 08:47:17', '2024-01-26 08:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint NOT NULL DEFAULT '0',
  `click_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `status` int NOT NULL COMMENT '1=>Active; 0=>Inactive',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `cost`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Booster Seat', 11.00, 1, '65b3c5de5c16a1706280414.jpg', '2024-01-26 05:24:16', '2024-01-26 08:46:54'),
(2, 'Rearward-Facing Seats', 11.00, 1, '65b3c5eae3f551706280426.jpg', '2024-01-26 05:24:41', '2024-01-26 08:47:07'),
(3, 'Backsword Facing', 11.00, 1, '65b3c5f51d8d01706280437.png', '2024-01-26 05:25:02', '2024-01-26 08:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `application_settings`
--

CREATE TABLE `application_settings` (
  `id` bigint UNSIGNED NOT NULL,
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
  `merchant_id` text COLLATE utf8mb4_unicode_ci,
  `transaction_pass` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_settings`
--

INSERT INTO `application_settings` (`id`, `business_name`, `business_address`, `business_number`, `business_email`, `time_zone`, `logo`, `favicon`, `currency`, `meta_title`, `meta_description`, `meta_image`, `gst`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_from_name`, `mail_from_address`, `mail_encryption`, `mail_status`, `clicksend_username`, `clicksend_key`, `sms_status`, `nab_transact`, `merchant_id`, `transaction_pass`, `created_at`, `updated_at`) VALUES
(1, 'Imelda Carroll', 'Possimus ipsam blan', '+1 (578) 447-7426', 'wumov@mailinator.com', NULL, '65b3c53d4a56a1706280253.jpg', '65b3c53d6a8221706280253.jpg', NULL, NULL, NULL, NULL, 10.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mezocil', 'Natus accusantium re', NULL, NULL, NULL, NULL, '2024-01-26 05:15:54', '2024-01-26 08:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` bigint UNSIGNED NOT NULL,
  `booking_id` bigint UNSIGNED NOT NULL,
  `booking_data` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_payments`
--

CREATE TABLE `booking_payments` (
  `id` bigint UNSIGNED NOT NULL,
  `booking_id` bigint UNSIGNED NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `discount_amount` decimal(10,2) NOT NULL,
  `gst` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int UNSIGNED DEFAULT NULL COMMENT '0=>Initiated; 1=>Success; 2=>Pending; 3=>Rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `min_amount` decimal(8,2) NOT NULL,
  `type` enum('percentage','fixed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `limit` int UNSIGNED DEFAULT NULL,
  `used_number` int UNSIGNED NOT NULL DEFAULT '0',
  `status` int UNSIGNED DEFAULT NULL COMMENT '0=>Active; 1=>Inactive',
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
  `id` bigint UNSIGNED NOT NULL,
  `coupon_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `crs_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crs_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crs_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crs_description` longtext COLLATE utf8mb4_unicode_ci,
  `crs_image` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
  `id` bigint UNSIGNED NOT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_holder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `driver_id` bigint UNSIGNED NOT NULL,
  `booking_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `rating` int UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0' COMMENT '0=>archive; 1=>publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `license_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents` text COLLATE utf8mb4_unicode_ci,
  `preferred_areas` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL COMMENT '1=>Verified; 0=>Unverified; 2=>Ban',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_reviews`
--

CREATE TABLE `driver_reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `driver_id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `booking_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `rating` int UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0' COMMENT '0=>archive; 1=>publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_training_results`
--

CREATE TABLE `driver_training_results` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `exam_id` bigint UNSIGNED DEFAULT NULL,
  `driver_id` bigint UNSIGNED DEFAULT NULL,
  `total_mark` int DEFAULT NULL,
  `obtain_mark` int DEFAULT NULL,
  `fine_mark` int DEFAULT NULL,
  `status` int DEFAULT NULL COMMENT '0=>pass; 1=>fail',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_transport_details`
--

CREATE TABLE `driver_transport_details` (
  `id` bigint UNSIGNED NOT NULL,
  `transport_type_id` bigint UNSIGNED NOT NULL,
  `driver_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chasis_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat_capacity` int DEFAULT NULL,
  `car_planumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_luggage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_photos` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_mark` double(10,2) NOT NULL,
  `pass_mark` double(10,2) NOT NULL,
  `negative_mark` tinyint(1) DEFAULT NULL,
  `negative_mark_value` double(8,2) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=>Active; 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `base_fare` decimal(10,2) NOT NULL,
  `per_km_rate` decimal(10,2) DEFAULT NULL,
  `per_minute_rate` decimal(10,2) NOT NULL,
  `extra_charge` decimal(10,2) NOT NULL,
  `is_vat_applicable` int DEFAULT NULL,
  `vat` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fleets`
--

CREATE TABLE `fleets` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passanger` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luggage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hand_bag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=>ENABLE; 0=>DISABLE; 2=>Booked',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fleets`
--

INSERT INTO `fleets` (`id`, `service_id`, `name`, `passanger`, `luggage`, `hand_bag`, `photos`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Any Luxury Vehicle', '5', '2', '2', '[\"65b3c2248b6651706279460.jpg\"]', 10.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:31:01'),
(2, 1, 'Excusive Euro', '3', '1', '1', '[\"65b3c232908d71706279474.jpg\"]', 30.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:31:14'),
(3, 1, 'Audi 8', '5', '1', '1', '[\"65b3c2c74bafa1706279623.jpg\"]', 60.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:33:43'),
(4, 2, 'Marcedes 2024', '2', '1', '1', '[\"65b3c30b423541706279691.jpg\"]', 60.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:34:51'),
(5, 2, 'Rolls Royes', '3', '3', '3', '[\"65b3c32e30a401706279726.jpg\"]', 60.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:35:26'),
(6, 3, 'Audi 8', '3', '1', '5', '[\"65b3c34977a311706279753.jpg\"]', 20.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:35:53'),
(7, 3, 'Ferari', '5', '3', '3', '[\"65b3c36b4fa9e1706279787.jpg\"]', 50.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:36:27'),
(8, 3, 'Honda 2024', '1', '1', '5', '[\"65b3c393236981706279827.jpg\"]', 50.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:37:07'),
(9, 1, 'Yamaha 2025', '2', '2', '3', '[\"65b3c3b35208b1706279859.jpg\"]', 50.00, '1', '2024-01-26 05:15:54', '2024-01-26 08:37:39'),
(10, NULL, 'occaecati', '3', NULL, '2', '[\"https:\\/\\/fakeimg.pl\\/300\"]', 31.24, '2', '2024-01-26 05:15:54', '2024-01-26 05:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` bigint UNSIGNED NOT NULL,
  `data_keys` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_values` longtext COLLATE utf8mb4_unicode_ci,
  `views` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `sort_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=>ENABLE; 2=>DISABLE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
(7, '2023_11_12_044259_add_username_to_users_table', 1),
(8, '2023_11_12_062436_create_permission_tables', 1),
(9, '2023_11_13_030243_create_service_types_table', 1),
(10, '2023_11_13_090244_create_services_table', 1),
(11, '2023_11_13_093713_create_transport_types_table', 1),
(12, '2023_11_13_095328_create_drivers_table', 1),
(13, '2023_11_13_095343_create_driver_transport_details_table', 1),
(14, '2023_11_14_044248_create_amenities_table', 1),
(15, '2023_11_15_033231_create_tags_table', 1),
(16, '2023_11_15_033237_create_categories_table', 1),
(17, '2023_11_15_033850_create_sub_categories_table', 1),
(18, '2023_11_15_042517_create_customers_table', 1),
(19, '2023_11_15_044321_create_posts_table', 1),
(20, '2023_11_15_073951_create_post_tag_table', 1),
(21, '2023_11_15_103425_create_courses_table', 1),
(22, '2023_11_16_041004_create_application_settings_table', 1),
(23, '2023_11_16_085554_create_examinations_table', 1),
(24, '2023_11_16_0855555_create_questions_table', 1),
(25, '2023_11_18_062535_create_driver_training_results_table', 1),
(26, '2023_11_19_054206_create_taxi_bookings_table', 1),
(27, '2023_11_20_054109_create_coupons_table', 1),
(28, '2023_11_20_083930_create_booking_payments_table', 1),
(29, '2023_11_20_104036_create_fares_table', 1),
(30, '2023_11_21_065508_create_customer_reviews_table', 1),
(31, '2023_11_21_082940_create_support_tickets_table', 1),
(32, '2023_11_21_083054_create_support_messages_table', 1),
(33, '2023_11_21_083217_create_support_attachments_table', 1),
(34, '2023_11_21_083403_create_admin_notifications_table', 1),
(35, '2023_11_25_073226_create_driver_reviews_table', 1),
(36, '2023_11_26_082821_create_booking_details_table', 1),
(37, '2023_11_30_032700_create_pages_table', 1),
(38, '2023_11_30_041812_create_menus_table', 1),
(39, '2023_12_02_043137_create_frontends_table', 1),
(40, '2023_12_04_105037_create_contacts_table', 1),
(41, '2023_12_07_164700_create_sliders_table', 1),
(42, '2023_12_08_054151_create_fleets_table', 1),
(43, '2023_12_21_190645_create_credit_cards_table', 1),
(44, '2023_12_22_151854_create_newsletters_table', 1),
(45, '2023_12_28_141434_create_coupon_user_table', 1),
(46, '2024_01_22_152722_create_subrubs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(2, 'role-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(3, 'role-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(4, 'role-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(5, 'user-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(6, 'user-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(7, 'user-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(8, 'user-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(9, 'service-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(10, 'service-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(11, 'service-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(12, 'service-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(13, 'transport-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(14, 'transport-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(15, 'transport-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(16, 'transport-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(17, 'amenitie-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(18, 'amenitie-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(19, 'amenitie-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(20, 'amenitie-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(21, 'category-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(22, 'category-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(23, 'category-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(24, 'category-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(25, 'subcategory-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(26, 'subcategory-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(27, 'subcategory-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(28, 'subcategory-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(29, 'tag-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(30, 'tag-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(31, 'tag-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(32, 'tag-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(33, 'post-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(34, 'post-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(35, 'post-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(36, 'post-delete', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(37, 'setting-list', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(38, 'setting-create', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(39, 'setting-edit', 'web', '2024-01-26 05:15:52', '2024-01-26 05:15:52'),
(40, 'setting-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(41, 'customer-list', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(42, 'customer-create', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(43, 'customer-edit', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(44, 'customer-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(45, 'taxi-booking-list', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(46, 'taxi-booking-create', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(47, 'taxi-booking-edit', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(48, 'taxi-booking-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(49, 'coupon-list', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(50, 'coupon-create', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(51, 'coupon-edit', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(52, 'coupon-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(53, 'fare-list', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(54, 'fare-create', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(55, 'fare-edit', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(56, 'fare-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(57, 'slider-list', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(58, 'slider-create', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(59, 'slider-edit', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(60, 'slider-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(61, 'taxi-booking-approve-list', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(62, 'taxi-booking-approve-create', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(63, 'taxi-booking-approve-edit', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(64, 'taxi-booking-approve-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(65, 'page-list', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(66, 'page-create', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(67, 'page-edit', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(68, 'page-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(69, 'menu-list', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(70, 'menu-create', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(71, 'menu-edit', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53'),
(72, 'menu-delete', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL COMMENT '1=>Publish; 0=>Archive;',
  `is_featured` int NOT NULL COMMENT '0=>featured; 1=>not featured;',
  `gallery_images` text COLLATE utf8mb4_unicode_ci,
  `thumb_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `exam_id` bigint UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_multiple` tinyint(1) NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2024-01-26 05:15:53', '2024-01-26 05:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=>Active; 0=>Inactive',
  `description` text COLLATE utf8mb4_unicode_ci,
  `base_fare` decimal(10,2) DEFAULT NULL,
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

INSERT INTO `services` (`id`, `name`, `status`, `description`, `base_fare`, `fare_1`, `fare_2`, `fare_3`, `fare_4`, `fare_5`, `created_at`, `updated_at`) VALUES
(1, 'From Airport', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(2, 'To Airport', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(3, 'Point-to-Point', 1, NULL, NULL, 60.00, 80.00, 90.00, 2.85, NULL, '2024-01-26 05:15:54', '2024-01-26 05:33:39'),
(4, 'Hourly/As Directed', 1, NULL, 100.00, NULL, NULL, NULL, NULL, NULL, '2024-01-26 05:15:54', '2024-01-26 05:35:02'),
(5, 'Weddings', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(6, 'Private Tour', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-26 05:15:54', '2024-01-26 05:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Dolores est soluta', 'Excepturi optio at', '65b396ce736711706268366.jpeg', '1', '2024-01-26 05:26:06', '2024-01-26 05:26:06'),
(2, 'Proident qui except', 'Nobis accusantium do', '65b3c3d6aed2d1706279894.jpg', '1', '2024-01-26 08:38:15', '2024-01-26 08:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `subrubs`
--

CREATE TABLE `subrubs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subrubs`
--

INSERT INTO `subrubs` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Select', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(2, 'Abbotsford', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(3, 'Aberfeldie', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(4, 'Airport West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(5, 'Albanvale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(6, 'Albert Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(7, 'Albion', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(8, 'Alphington', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(9, 'Altona Meadows', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(10, 'Altona North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(11, 'Altona', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(12, 'Ardeer', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(13, 'Armadale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(14, 'Arthurs Seat', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(15, 'Ascot Vale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(16, 'Ashburton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(17, 'Ashwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(18, 'Aspendale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(19, 'Aspendale Gardens', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(20, 'Attwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(21, 'Auburn', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(22, 'Aurora', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(23, 'Avondale Heights', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(24, 'Avonsleigh', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(25, 'Balaclava', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(26, 'Balwyn', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(27, 'Balwyn North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(28, 'Bangholme', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(29, 'Baxter', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(30, 'Bayswater', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(31, 'Bayswater North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(32, 'Beaconsfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(33, 'Beaumaris', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(34, 'Belgrave', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(35, 'Belgrave Heights', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(36, 'Belgrave South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(37, 'Bellfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(38, 'Bennettswood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(39, 'Bentleigh', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(40, 'Bentleigh East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(41, 'Berwick', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(42, 'Bittern', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(43, 'Black Rock', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(44, 'Blackburn', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(45, 'Blackburn North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(46, 'Blackburn South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(47, 'Blairgowrie', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(48, 'Bonbeach', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(49, 'Boronia', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(50, 'Box Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(51, 'Box Hill North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(52, 'Box Hill South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(53, 'Braeside', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(54, 'Braybrook', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(55, 'Briar Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(56, 'Brighton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(57, 'Brighton East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(58, 'Broadmeadows', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(59, 'Brookfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(60, 'Brooklyn', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(61, 'Brunswick', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(62, 'Brunswick East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(63, 'Brunswick West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(64, 'Bulla', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(65, 'Bulleen', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(66, 'Bundoora', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(67, 'Burnley', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(68, 'Burnside', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(69, 'Burnside Heights', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(70, 'Burwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(71, 'Burwood East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(72, 'Cairnlea', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(73, 'Calder Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(74, 'Camberwell', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(75, 'Campbellfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(76, 'Canterbury', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(77, 'Carlton North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(78, 'Carlton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(79, 'Carnegie', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(80, 'Caroline Springs', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(81, 'Carrum', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(82, 'Carrum Downs', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(83, 'Caulfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(84, 'Caulfield East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(85, 'Caulfield North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(86, 'Caulfield South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(87, 'Chadstone', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(88, 'Chelsea', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(89, 'Chelsea Heights', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(90, 'Cheltenham', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(91, 'Chirnside Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(92, 'Clarinda', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(93, 'Clayton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(94, 'Clayton South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(95, 'Clematis', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(96, 'Clifton Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(97, 'Coburg', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(98, 'Coburg North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(99, 'Cocoroc', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(100, 'Coldstream', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(101, 'Collingwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(102, 'Coolaroo', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(103, 'Craigieburn', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(104, 'Cranbourne', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(105, 'Cranbourne East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(106, 'Cranbourne North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(107, 'Cranbourne South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(108, 'Cranbourne West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(109, 'Cremorne', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(110, 'Crib Point', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(111, 'Croydon', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(112, 'Croydon Hills', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(113, 'Croydon North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(114, 'Croydon South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(115, 'Dallas', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(116, 'Dandenong', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(117, 'Dandenong North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(118, 'Dandenong South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(119, 'Deer Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(120, 'Delahey', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(121, 'Derrimut', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(122, 'Diamond Creek', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(123, 'Dingley Village', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(124, 'Docklands', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(125, 'Doncaster', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(126, 'Doncaster East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(127, 'Donvale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(128, 'Doreen', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(129, 'Doveton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(130, 'Dromana', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(131, 'Eaglemont', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(132, 'East Melbourne', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(133, 'Edithvale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(134, 'Elsternwick', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(135, 'Eltham', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(136, 'Eltham North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(137, 'Elwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(138, 'Emerald', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(139, 'Endeavour Hills', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(140, 'Epping', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(141, 'Essendon Fields', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(142, 'Essendon North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(143, 'Essendon West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(144, 'Essendon', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(145, 'Eumemmerring', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(146, 'Fairfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(147, 'Fawkner', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(148, 'Ferntree Gully', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(149, 'Ferny Creek', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(150, 'Fitzroy', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(151, 'Fitzroy North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(152, 'Flemington', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(153, 'Footscray', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(154, 'Forest Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(155, 'Frankston', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(156, 'Frankston North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(157, 'Frankston South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(158, 'Gardenvale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(159, 'Gladstone Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(160, 'Glen Huntly', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(161, 'Glen Iris', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(162, 'Glen Waverley', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(163, 'Glenroy', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(164, 'Gowanbrae', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(165, 'Greensborough', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(166, 'Greenvale Lakes', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(167, 'Greenvale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(168, 'Guys Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(169, 'Hadfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(170, 'Hallam', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(171, 'Hampton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(172, 'Hampton East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(173, 'Hampton Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(174, 'Harkaway', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(175, 'Hawthorn', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(176, 'Hawthorn East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(177, 'Heatherdale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(178, 'Heatherton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(179, 'Heathmont', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(180, 'Heidelberg', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(181, 'Heidelberg Heights', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(182, 'Heidelberg West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(183, 'Highett', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(184, 'Hillside', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(185, 'Hoppers Crossing', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(186, 'Houston', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(187, 'Hughesdale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(188, 'Huntingdale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(189, 'Hurstbridge', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(190, 'Ivanhoe', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(191, 'Ivanhoe East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(192, 'Jacana', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(193, 'Junction Village', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(194, 'Kallista', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(195, 'Kalorama', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(196, 'Karingal', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(197, 'Kealba', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(198, 'Keilor', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(199, 'Keilor Downs', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(200, 'Keilor East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(201, 'Keilor Lodge', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(202, 'Keilor North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(203, 'Keilor Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(204, 'Kensington', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(205, 'Kerrimuir', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(206, 'Kew', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(207, 'Kew East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(208, 'Keysborough', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(209, 'Kilsyth', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(210, 'Kilsyth South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(211, 'Kings Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(212, 'Kingsbury', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(213, 'Kingsville', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(214, 'Knoxfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(215, 'Kooyong', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(216, 'Kurunjang', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(217, 'Laburnum', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(218, 'Lalor', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(219, 'Langwarrin', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(220, 'Langwarrin South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(221, 'Laverton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(222, 'Laverton North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(223, 'Lilydale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(224, 'Lower Plenty', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(225, 'Lynbrook', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(226, 'Lyndhurst', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(227, 'Lysterfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(228, 'Lysterfield South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(229, 'Macclesfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(230, 'McCrae', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(231, 'McKinnon', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(232, 'Macleod', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(233, 'Maidstone', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(234, 'Malvern', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(235, 'Malvern East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(236, 'Maribyrnong', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(237, 'Meadow Heights', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(238, 'Melbourne Airport', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(239, 'Melton (suburb)', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(240, 'Melton South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(241, 'Melton West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(242, 'Mentone', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(243, 'Menzies Creek', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(244, 'Mernda', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(245, 'Mickleham', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(246, 'Middle Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(247, 'Milgate Park Estate', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(248, 'Mill Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(249, 'Mitcham', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(250, 'Monbulk', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(251, 'Mont Albert', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(252, 'Mont Albert North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(253, 'Montmorency', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(254, 'Montrose', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(255, 'Moonee Ponds', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(256, 'Moorabbin Airport', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(257, 'Moorabbin', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(258, 'Moorooduc', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(259, 'Mooroolbark', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(260, 'Mordialloc', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(261, 'Mornington', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(262, 'Mount Dandenong', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(263, 'Mount Eliza', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(264, 'Mount Evelyn', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(265, 'Mount Martha', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(266, 'Mount Waverley', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(267, 'Mulgrave', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(268, 'Narre Warren East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(269, 'Narre Warren North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(270, 'Narre Warren South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(271, 'Narre Warren', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(272, 'Newport', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(273, 'Niddrie', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(274, 'Noble Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(275, 'Noble Park North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(276, 'North Melbourne', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(277, 'North Richmond', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(278, 'North Warrandyte', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(279, 'Northcote', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(280, 'Norwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(281, 'Notting Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(282, 'Nunawading', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(283, 'Oak Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(284, 'Oaklands Junction', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(285, 'Oakleigh', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(286, 'Oakleigh East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(287, 'Oakleigh South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(288, 'Olinda', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(289, 'Olivers Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(290, 'Ormond', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(291, 'Pakenham', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(292, 'Panton Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(293, 'Park Orchards', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(294, 'Parkdale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(295, 'Parkville', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(296, 'Pascoe Vale South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(297, 'Pascoe Vale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(298, 'The Patch', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(299, 'Patterson Lakes', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(300, 'Pennydale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(301, 'Plenty', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(302, 'Point Cook', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(303, 'Port Melbourne', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(304, 'Portsea', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(305, 'Prahran', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(306, 'Preston', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(307, 'Princes Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(308, 'Ravenhall', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(309, 'Research', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(310, 'Reservoir', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(311, 'Richmond', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(312, 'Ringwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(313, 'Ringwood East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(314, 'Ringwood North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(315, 'Ripponlea', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(316, 'Rockbank', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(317, 'Rosanna', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(318, 'Rosebud', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(319, 'Rosebud West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(320, 'Rowville', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(321, 'Roxburgh Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(322, 'Rye', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(323, 'Safety Beach', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(324, 'St Albans', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(325, 'St Helena', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(326, 'St Kilda', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(327, 'St Kilda East', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(328, 'St Kilda West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(329, 'Sandhurst', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(330, 'Sandringham', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(331, 'Sassafras', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(332, 'Scoresby', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(333, 'Seabrook', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(334, 'Seaford', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(335, 'Seaholme', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(336, 'Seddon', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(337, 'Selby', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(338, 'Seville', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(339, 'Sherbrooke', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(340, 'Skye', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(341, 'Somerton', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(342, 'Sorrento', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(343, 'South Kingsville', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(344, 'South Melbourne', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(345, 'South Morang', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(346, 'South Wharf', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(347, 'South Yarra', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(348, 'Southbank', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(349, 'Spotswood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(350, 'Springvale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(351, 'Springvale South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(352, 'Strathmore', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(353, 'Strathmore Heights', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(354, 'Sunbury', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(355, 'Sunshine', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(356, 'Sunshine North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(357, 'Sunshine West', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(358, 'Surrey Hills', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(359, 'Sydenham', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(360, 'Syndal', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(361, 'Tally Ho', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(362, 'Tarneit', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(363, 'Taylors Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(364, 'Taylors Lakes', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(365, 'Tecoma', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(366, 'Templestowe', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(367, 'Templestowe Lower', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(368, 'The Basin', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(369, 'Thomastown', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(370, 'Thornbury', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(371, 'Toorak', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(372, 'Tootgarook', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(373, 'Tottenham', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(374, 'Travancore', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(375, 'Tremont', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(376, 'Truganina', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(377, 'Tullamarine', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(378, 'Upfield', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(379, 'Upper Ferntree Gully', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(380, 'Upwey', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(381, 'Vermont', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(382, 'Vermont South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(383, 'Viewbank', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(384, 'Wantirna', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(385, 'Wantirna South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(386, 'Warrandyte', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(387, 'Warrandyte South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(388, 'Warranwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(389, 'Waterways', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(390, 'Watsonia', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(391, 'Watsonia North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(392, 'Wattle Glen', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(393, 'Waverley Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(394, 'Werribee', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(395, 'Werribee South', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(396, 'West Footscray', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(397, 'West Melbourne', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(398, 'Westgarth', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(399, 'Westmeadows', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(400, 'Wheelers Hill', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(401, 'Wildwood', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(402, 'Williams Landing', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(403, 'Williamstown', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(404, 'Williamstown North', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(405, 'Windsor', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(406, 'Wonga Park', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(407, 'Wyndham Vale', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(408, 'Yallambie', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(409, 'Yarrambat', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(410, 'Yarraville', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54'),
(411, 'Yuroke', 50.00, '2024-01-26 05:15:54', '2024-01-26 05:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=>Active; 0=>Inactive;',
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_attachments`
--

CREATE TABLE `support_attachments` (
  `id` bigint UNSIGNED NOT NULL,
  `support_message_id` bigint UNSIGNED DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `support_ticket_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0: Open, 1: Answered, 2: Replied, 3: Closed',
  `priority` tinyint NOT NULL DEFAULT '0' COMMENT '1 = Low, 2 = medium, 3 = high',
  `last_reply` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `invoice_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `fleet_id` bigint UNSIGNED NOT NULL,
  `pick_up_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pick_up_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pick_up_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_off_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_passenger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_luggage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_service` longtext COLLATE utf8mb4_unicode_ci,
  `amenities` longtext COLLATE utf8mb4_unicode_ci,
  `passanger_infos` longtext COLLATE utf8mb4_unicode_ci,
  `stops` text COLLATE utf8mb4_unicode_ci,
  `subtotal` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `promo_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0' COMMENT '0=>pending; 1=>accepted; 2=>completed; 3=>cancelled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_types`
--

CREATE TABLE `transport_types` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int NOT NULL DEFAULT '2' COMMENT '1=>admin; 2=>user',
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
(1, 'Mr', 'Admin', '56646', 'admin@gmail.com', NULL, '$2y$12$S.zTpddH8yweYisK.XdHk.Ar.boNkmsuWBmQcYlwKb/6CxCvZUYba', 1, NULL, NULL, '2024-01-26 05:15:51', '2024-01-26 05:15:51', NULL),
(2, 'Guest', 'User', '56646', 'guestuser@gmail.com', NULL, '$2y$12$mN5F/AjoAp.fCGeHHyc3S./PPusYier6N5MqDF8llSKXaW01u4CGi', 2, NULL, NULL, '2024-01-26 05:15:52', '2024-01-26 05:15:52', NULL);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `application_settings`
--
ALTER TABLE `application_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_payments`
--
ALTER TABLE `booking_payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_user`
--
ALTER TABLE `coupon_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credit_cards`
--
ALTER TABLE `credit_cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_reviews`
--
ALTER TABLE `driver_reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_training_results`
--
ALTER TABLE `driver_training_results`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_transport_details`
--
ALTER TABLE `driver_transport_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fares`
--
ALTER TABLE `fares`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fleets`
--
ALTER TABLE `fleets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subrubs`
--
ALTER TABLE `subrubs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_attachments`
--
ALTER TABLE `support_attachments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taxi_bookings`
--
ALTER TABLE `taxi_bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_types`
--
ALTER TABLE `transport_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
