-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 01:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `ordering` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `link`, `image`, `content`, `ordering`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Counter Strike Gobal Offensive', 'counter-strike-gobal-offensive', 'csgo-wallpaper_fovq.jpg', '<p> </p>\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\"> </div>', 0, 1, '2018-02-01 01:35:47', '2020-05-30 03:11:43'),
(9, 'PUBG', 'https://cdn-www.bluestacks.com/bs-images/pubg-international_banner.jpg', 'pubg1.png', '<p> </p>\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\"> </div>', 0, 1, '2018-02-01 21:22:18', '2020-05-25 21:21:05'),
(10, 'GTA V', 'gta-v', '11368-gta-banner-1920x623.webp', '<p> </p>\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\"> </div>', 0, 1, '2020-05-30 03:03:50', '2020-05-30 03:03:50'),
(11, 'Assassins Creed', 'assassins-creed', 'assassins_creed___revelations_2-wallpaper-1600x900.jpg', '<p> </p>\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\"> </div>', 0, 1, '2020-05-30 03:06:33', '2020-05-30 03:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Steam', 0, 1, '2018-02-01 21:53:20', '2018-02-01 21:53:20'),
(15, 'Origin', 0, 1, '2018-02-01 21:53:32', '2018-02-01 21:53:32'),
(16, 'Battle.net', 0, 1, '2018-02-01 21:53:50', '2018-02-01 21:53:50'),
(17, 'Uplay', 0, 1, '2018-02-01 21:54:16', '2020-05-26 07:44:07'),
(18, 'Microsoft', 0, 1, '2020-05-26 07:44:43', '2020-05-26 08:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `product_id`, `code`, `created_at`, `updated_at`) VALUES
(362, 20, '23KSJKDHKD', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(363, 20, 'DSHAKHJK3A', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(364, 20, 'SDAGHDHJJ', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(365, 20, 'SDHKAHSSA', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(366, 20, '213K1H43KK', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(367, 20, 'JLDAS98SAD', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(368, 20, '87DSADKJKK', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(369, 20, '213SDLASDD', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(370, 20, '2133SALDJKL', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(371, 20, 'JSAHKJH213', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(372, 20, 'HSADKHDKJ', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(373, 20, 'KJWELQLKWE', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(374, 20, 'ASJCAALKJ313', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(375, 20, 'DSJKAKJDHS', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(376, 20, 'AJSDLKJASH', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(377, 20, 'JSDJKH32FJ', '2020-05-28 02:25:17', '2020-05-28 02:25:17'),
(378, 20, 'KJSALJDSLAK', '2020-05-28 02:25:18', '2020-05-28 02:25:18'),
(379, 20, 'DSJKAL3213', '2020-05-28 02:25:18', '2020-05-28 02:25:18'),
(380, 20, 'SDAHKHSDJK', '2020-05-28 02:25:18', '2020-05-28 02:25:18'),
(381, 20, 'ASDLAKDDSA', '2020-05-28 02:25:18', '2020-05-28 02:25:18'),
(388, 21, '23KSJKDHKD', '2020-05-28 02:25:25', '2020-05-28 02:25:25'),
(389, 21, 'DSHAKHJK3A', '2020-05-28 02:25:25', '2020-05-28 02:25:25'),
(390, 21, 'SDAGHDHJJ', '2020-05-28 02:25:25', '2020-05-28 02:25:25'),
(391, 21, 'SDHKAHSSA', '2020-05-28 02:25:25', '2020-05-28 02:25:25'),
(392, 21, '213K1H43KK', '2020-05-28 02:25:25', '2020-05-28 02:25:25'),
(393, 21, 'JLDAS98SAD', '2020-05-28 02:25:25', '2020-05-28 02:25:25'),
(394, 21, '87DSADKJKK', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(395, 21, '213SDLASDD', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(396, 21, '2133SALDJKL', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(397, 21, 'JSAHKJH213', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(398, 21, 'HSADKHDKJ', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(399, 21, 'KJWELQLKWE', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(400, 21, 'ASJCAALKJ313', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(401, 21, 'DSJKAKJDHS', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(402, 21, 'AJSDLKJASH', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(403, 21, 'JSDJKH32FJ', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(404, 21, 'KJSALJDSLAK', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(405, 21, 'DSJKAL3213', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(406, 21, 'SDAHKHSDJK', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(407, 21, 'ASDLAKDDSA', '2020-05-28 02:25:26', '2020-05-28 02:25:26'),
(414, 22, '23KSJKDHKD', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(415, 22, 'DSHAKHJK3A', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(416, 22, 'SDAGHDHJJ', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(417, 22, 'SDHKAHSSA', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(418, 22, '213K1H43KK', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(419, 22, 'JLDAS98SAD', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(420, 22, '87DSADKJKK', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(421, 22, '213SDLASDD', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(422, 22, '2133SALDJKL', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(423, 22, 'JSAHKJH213', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(424, 22, 'HSADKHDKJ', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(425, 22, 'KJWELQLKWE', '2020-05-28 02:25:34', '2020-05-28 02:25:34'),
(426, 22, 'ASJCAALKJ313', '2020-05-28 02:25:35', '2020-05-28 02:25:35'),
(427, 22, 'DSJKAKJDHS', '2020-05-28 02:25:35', '2020-05-28 02:25:35'),
(428, 22, 'AJSDLKJASH', '2020-05-28 02:25:35', '2020-05-28 02:25:35'),
(429, 22, 'JSDJKH32FJ', '2020-05-28 02:25:35', '2020-05-28 02:25:35'),
(430, 22, 'KJSALJDSLAK', '2020-05-28 02:25:35', '2020-05-28 02:25:35'),
(431, 22, 'DSJKAL3213', '2020-05-28 02:25:35', '2020-05-28 02:25:35'),
(432, 22, 'SDAHKHSDJK', '2020-05-28 02:25:35', '2020-05-28 02:25:35'),
(433, 22, 'ASDLAKDDSA', '2020-05-28 02:25:35', '2020-05-28 02:25:35'),
(440, 7, '23KSJKDHKD', '2020-05-29 06:51:17', '2020-05-29 06:51:17'),
(441, 7, 'DSHAKHJK3A', '2020-05-29 06:51:17', '2020-05-29 06:51:17'),
(442, 7, 'SDAGHDHJJ', '2020-05-29 06:51:17', '2020-05-29 06:51:17'),
(443, 7, 'SDHKAHSSA', '2020-05-29 06:51:17', '2020-05-29 06:51:17'),
(444, 7, '213K1H43KK', '2020-05-29 06:51:17', '2020-05-29 06:51:17'),
(445, 7, 'JLDAS98SAD', '2020-05-29 06:51:17', '2020-05-29 06:51:17'),
(446, 7, '87DSADKJKK', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(447, 7, '213SDLASDD', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(448, 7, '2133SALDJKL', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(449, 7, 'JSAHKJH213', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(450, 7, 'HSADKHDKJ', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(451, 7, 'KJWELQLKWE', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(452, 7, 'ASJCAALKJ313', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(453, 7, 'DSJKAKJDHS', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(454, 7, 'AJSDLKJASH', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(455, 7, 'JSDJKH32FJ', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(456, 7, 'KJSALJDSLAK', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(457, 7, 'DSJKAL3213', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(458, 7, 'SDAHKHSDJK', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(459, 7, 'ASDLAKDDSA', '2020-05-29 06:51:18', '2020-05-29 06:51:18'),
(466, 12, '23KSJKDHKD', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(467, 12, 'DSHAKHJK3A', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(468, 12, 'SDAGHDHJJ', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(469, 12, 'SDHKAHSSA', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(470, 12, '213K1H43KK', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(471, 12, 'JLDAS98SAD', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(472, 12, '87DSADKJKK', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(473, 12, '213SDLASDD', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(474, 12, '2133SALDJKL', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(475, 12, 'JSAHKJH213', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(476, 12, 'HSADKHDKJ', '2020-05-29 06:51:24', '2020-05-29 06:51:24'),
(477, 12, 'KJWELQLKWE', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(478, 12, 'ASJCAALKJ313', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(479, 12, 'DSJKAKJDHS', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(480, 12, 'AJSDLKJASH', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(481, 12, 'JSDJKH32FJ', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(482, 12, 'KJSALJDSLAK', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(483, 12, 'DSJKAL3213', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(484, 12, 'SDAHKHSDJK', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(485, 12, 'ASDLAKDDSA', '2020-05-29 06:51:25', '2020-05-29 06:51:25'),
(492, 15, '23KSJKDHKD', '2020-05-29 06:51:30', '2020-05-29 06:51:30'),
(493, 15, 'DSHAKHJK3A', '2020-05-29 06:51:30', '2020-05-29 06:51:30'),
(494, 15, 'SDAGHDHJJ', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(495, 15, 'SDHKAHSSA', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(496, 15, '213K1H43KK', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(497, 15, 'JLDAS98SAD', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(498, 15, '87DSADKJKK', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(499, 15, '213SDLASDD', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(500, 15, '2133SALDJKL', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(501, 15, 'JSAHKJH213', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(502, 15, 'HSADKHDKJ', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(503, 15, 'KJWELQLKWE', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(504, 15, 'ASJCAALKJ313', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(505, 15, 'DSJKAKJDHS', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(506, 15, 'AJSDLKJASH', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(507, 15, 'JSDJKH32FJ', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(508, 15, 'KJSALJDSLAK', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(509, 15, 'DSJKAL3213', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(510, 15, 'SDAHKHSDJK', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(511, 15, 'ASDLAKDDSA', '2020-05-29 06:51:31', '2020-05-29 06:51:31'),
(518, 16, '23KSJKDHKD', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(519, 16, 'DSHAKHJK3A', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(520, 16, 'SDAGHDHJJ', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(521, 16, 'SDHKAHSSA', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(522, 16, '213K1H43KK', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(523, 16, 'JLDAS98SAD', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(524, 16, '87DSADKJKK', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(525, 16, '213SDLASDD', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(526, 16, '2133SALDJKL', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(527, 16, 'JSAHKJH213', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(528, 16, 'HSADKHDKJ', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(529, 16, 'KJWELQLKWE', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(530, 16, 'ASJCAALKJ313', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(531, 16, 'DSJKAKJDHS', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(532, 16, 'AJSDLKJASH', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(533, 16, 'JSDJKH32FJ', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(534, 16, 'KJSALJDSLAK', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(535, 16, 'DSJKAL3213', '2020-05-29 06:51:42', '2020-05-29 06:51:42'),
(536, 16, 'SDAHKHSDJK', '2020-05-29 06:51:43', '2020-05-29 06:51:43'),
(537, 16, 'ASDLAKDDSA', '2020-05-29 06:51:43', '2020-05-29 06:51:43'),
(544, 18, '23KSJKDHKD', '2020-05-29 06:52:04', '2020-05-29 06:52:04'),
(545, 18, 'DSHAKHJK3A', '2020-05-29 06:52:04', '2020-05-29 06:52:04'),
(546, 18, 'SDAGHDHJJ', '2020-05-29 06:52:04', '2020-05-29 06:52:04'),
(547, 18, 'SDHKAHSSA', '2020-05-29 06:52:04', '2020-05-29 06:52:04'),
(548, 18, '213K1H43KK', '2020-05-29 06:52:04', '2020-05-29 06:52:04'),
(549, 18, 'JLDAS98SAD', '2020-05-29 06:52:04', '2020-05-29 06:52:04'),
(550, 18, '87DSADKJKK', '2020-05-29 06:52:04', '2020-05-29 06:52:04'),
(551, 18, '213SDLASDD', '2020-05-29 06:52:04', '2020-05-29 06:52:04'),
(552, 18, '2133SALDJKL', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(553, 18, 'JSAHKJH213', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(554, 18, 'HSADKHDKJ', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(555, 18, 'KJWELQLKWE', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(556, 18, 'ASJCAALKJ313', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(557, 18, 'DSJKAKJDHS', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(558, 18, 'AJSDLKJASH', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(559, 18, 'JSDJKH32FJ', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(560, 18, 'KJSALJDSLAK', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(561, 18, 'DSJKAL3213', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(562, 18, 'SDAHKHSDJK', '2020-05-29 06:52:05', '2020-05-29 06:52:05'),
(563, 18, 'ASDLAKDDSA', '2020-05-29 06:52:05', '2020-05-29 06:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2017_12_22_082743_create_table_category', 1),
(4, '2018_01_08_075515_create_table_product', 2),
(5, '2018_01_08_081239_create_table_product', 3),
(6, '2014_10_12_000000_create_users_table', 4),
(7, '2014_10_12_100000_create_password_resets_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(10,2) NOT NULL,
  `price_sale` double(10,2) DEFAULT '0.00',
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `cat_id`, `slug`, `image`, `price`, `price_sale`, `content`, `status`, `created_at`, `updated_at`) VALUES
(7, 'DARK SOULS™ II: Scholar of the First Sin', 14, 'dark-souls™-ii-scholar-of-the-first-sin', 'dark.jpg', 899000.00, 800000.00, 'Gamers are in for a big surprise in DARK SOULS™ II: Scholar of the First Sin. An unforgettable journey awaits you in a breathtaking world where each dark corner and unexpected encounter will test your resolve. Go beyond what you thought was possible and discover incredible challenge and intense emotional reward. Whether you’ve previously played DARK SOULS™ II, or are new to the award-winning franchise, you are in for an entirely different experience with this exclusive, “Director’s Cut” version of the game.\r\n\r\n- The definitive edition of DARK SOULS™ II. DARK SOULS™ II: Scholar of the First Sin includes all the DARK SOULS™ II content released to-date in one package and much more!\r\n\r\n- A brand new experience and challenge. Enemy placement has been overhauled, resulting in a completely different play dynamic than experienced before. The safe zones that some players remembered are no longer safe! A new NPC invader called Forlorn will also play a key role in changing the gameplay experience. Hardened players will have to forget everything they thought they knew about DARK SOULS™ II.\r\n\r\n- Online play has been enhanced with the addition of a special item to regulate souls acquired in battle - it’s now possible to match up more consistently online. The number of players who can participate in an online session has also been increased, from 4 to 6 people, completely changing the online play dynamic.\r\n\r\nDARK SOULS™ II: Scholar of the First Sin brings the franchise’s renowned obscurity & gripping gameplay to a new level. Join the dark journey and experience overwhelming enemy encounters, diabolical hazards, and unrelenting challenge.', 1, '2018-02-02 00:33:55', '2018-02-02 00:33:55'),
(12, 'FOR HONOR™ SEASON PASS', 14, 'for-honor™-season-pass', 'FOR HONOR.jpg', 725000.00, 0.00, 'FOR HONOR™ SEASON PASS', 1, '2018-02-02 00:37:37', '2018-02-02 00:37:37'),
(15, 'DARK SOULS™ II: Scholar of the First Sin', 14, 'dark-souls™-ii-scholar-of-the-first-sin', 'DARKSOULS.jpg', 899000.00, 0.00, 'Gamers are in for a big surprise in DARK SOULS™ II: Scholar of the First Sin. An unforgettable journey awaits you in a breathtaking world where each dark corner and unexpected encounter will test your resolve. Go beyond what you thought was possible and discover incredible challenge and intense emotional reward. Whether you’ve previously played DARK SOULS™ II, or are new to the award-winning franchise, you are in for an entirely different experience with this exclusive, “Director’s Cut” version of the game.\r\n\r\n- The definitive edition of DARK SOULS™ II. DARK SOULS™ II: Scholar of the First Sin includes all the DARK SOULS™ II content released to-date in one package and much more!\r\n\r\n- A brand new experience and challenge. Enemy placement has been overhauled, resulting in a completely different play dynamic than experienced before. The safe zones that some players remembered are no longer safe! A new NPC invader called Forlorn will also play a key role in changing the gameplay experience. Hardened players will have to forget everything they thought they knew about DARK SOULS™ II.\r\n\r\n- Online play has been enhanced with the addition of a special item to regulate souls acquired in battle - it’s now possible to match up more consistently online. The number of players who can participate in an online session has also been increased, from 4 to 6 people, completely changing the online play dynamic.\r\n\r\nDARK SOULS™ II: Scholar of the First Sin brings the franchise’s renowned obscurity & gripping gameplay to a new level. Join the dark journey and experience overwhelming enemy encounters, diabolical hazards, and unrelenting challenge.', 1, '2018-02-02 00:52:59', '2018-02-02 00:52:59'),
(16, 'Assassin\'s Creed® Origins - Season Pass', 14, 'assassins-creed®-origins-season-pass', 'Assassin\'.jpg', 740000.00, 0.00, 'Assassin\'s Creed® Origins - Season Pass', 1, '2018-02-02 00:53:47', '2018-02-02 00:53:47'),
(17, 'Tom Clancy\'s The Division™ - Season Pass', 14, 'tom-clancys-the-division™-season-pass', 'Tom Clancy\'s.jpg', 725000.00, 0.00, 'Tom Clancy\'s The Division™ - Season Pass', 1, '2018-02-02 00:54:39', '2018-02-02 00:54:39'),
(18, 'Call of Duty®: Black Ops III', 14, 'call-of-duty®-black-ops-iii', 'callofduty.jpg', 632000.00, NULL, 'Call of Duty®: Black Ops III - Zombies Chronicles', 1, '2018-02-02 00:55:59', '2018-02-02 00:56:35'),
(19, 'Grand Theft Auto V', 14, 'grand-theft-auto-v', '4gta.jpg', 468000.00, 0.00, 'When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.\r\n\r\nGrand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.\r\n\r\nThe game offers players a huge range of PC-specific customization options, including over 25 separate configurable settings for texture quality, shaders, tessellation, anti-aliasing and more, as well as support and extensive customization for mouse and keyboard controls. Additional options include a population density slider to control car and pedestrian traffic, as well as dual and triple monitor support, 3D compatibility, and plug-and-play controller support.\r\n\r\nGrand Theft Auto V for PC also includes Grand Theft Auto Online, with support for 30 players and two spectators. Grand Theft Auto Online for PC will include all existing gameplay upgrades and Rockstar-created content released since the launch of Grand Theft Auto Online, including Heists and Adversary modes.\r\n\r\nThe PC version of Grand Theft Auto V and Grand Theft Auto Online features First Person Mode, giving players the chance to explore the incredibly detailed world of Los Santos and Blaine County in an entirely new way.\r\n\r\nGrand Theft Auto V for PC also brings the debut of the Rockstar Editor, a powerful suite of creative tools to quickly and easily capture, edit and share game footage from within Grand Theft Auto V and Grand Theft Auto Online. The Rockstar Editor’s Director Mode allows players the ability to stage their own scenes using prominent story characters, pedestrians, and even animals to bring their vision to life. Along with advanced camera manipulation and editing effects including fast and slow motion, and an array of camera filters, players can add their own music using songs from GTAV radio stations, or dynamically control the intensity of the game’s score. Completed videos can be uploaded directly from the Rockstar Editor to YouTube and the Rockstar Games Social Club for easy sharing.\r\n\r\nSoundtrack artists The Alchemist and Oh No return as hosts of the new radio station, The Lab FM. The station features new and exclusive music from the production duo based on and inspired by the game’s original soundtrack. Collaborating guest artists include Earl Sweatshirt, Freddie Gibbs, Little Dragon, Killer Mike, Sam Herring from Future Islands, and more. Players can also discover Los Santos and Blaine County while enjoying their own music through Self Radio, a new radio station that will host player-created custom soundtracks.\r\n\r\nSPECIAL CONTENT FOR RETURNING PLAYERS\r\nPlayers returning from the PS3™ and Xbox 360 versions get special access to a host of content on PC including rare versions of classic vehicles to collect from across the Grand Theft Auto series such as the Dukes, the Dodo Seaplane and a faster, more maneuverable Blimp; activities including wildlife photography and new shooting range challenges, new weapons and more.\r\n\r\nSpecial access content requires Rockstar Games Social Club account. Visit http://rockstargames.com/v/bonuscontent for details.', 1, '2018-02-02 00:57:49', '2018-02-02 00:57:49'),
(20, 'Battlefield 1', 15, 'battlefield-1', 'bf1-457x213.png', 400000.00, NULL, '<p><span style=\"font-size:16px\">Chi tiết sản phẩm</span></p>\r\n\r\n<h1><span style=\"font-size:16px\">M&ocirc; tả</span></h1>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Battlefield 1&nbsp;</strong>(c&ograve;n được gọi l&agrave; Chiến trường 1 hay Chiến trường rực lửa 1) l&agrave; tựa game bắn s&uacute;ng g&oacute;c nh&igrave;n thứ nhất được ph&aacute;t triển bởi EA DICE v&agrave; được ph&aacute;t h&agrave;nh bởi Electronic Arts.&nbsp;<strong>Battlefield 1&nbsp;</strong>l&agrave; phần thứ mười lăm trong loạt&nbsp;<strong>Battlefield</strong>.</span></p>\r\n\r\n<h1><span style=\"font-size:16px\">Nội dung&nbsp;</span></h1>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Battlefield 1&nbsp;</strong>l&agrave; một tr&ograve; chơi bắn s&uacute;ng g&oacute;c nh&igrave;n thứ nhất nhấn mạnh tinh thần đồng đội. N&oacute; c&oacute; bối cảnh trong thời kỳ Thế chiến thứ nhất, v&agrave; được lấy cảm hứng từ những sự kiện lịch sử.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img src=\"https://lh4.googleusercontent.com/xVIK2UikhZcZ_mcCTQlbRwx3aQju165JERsw9sod4Lts0qhj_MVX2gw3CN2fDfCOYMiAM9SiRXCB0pfnyZBtK__7NtK_Um8UcoAK2z6hJ5Cqrp2-LXvHKJQM4xpmodhm0e8NTd0T\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Người chơi c&oacute; thể sử dụng vũ kh&iacute; trong Chiến tranh Thế giới thứ nhất, bao gồm s&uacute;ng trường nạp đạn bằng kh&oacute;a n&ograve;ng, s&uacute;ng trường tự động v&agrave; b&aacute;n tự động, ph&aacute;o binh, s&uacute;ng phun lửa v&agrave; kh&iacute; m&ugrave; tạt để chống lại đối thủ.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img src=\"https://lh3.googleusercontent.com/RKLlxgDgFzVknAcUBnQ7GI_q2OzzLBBkfEOGkhZZJ4xc_S4O3nIe8jp_yTURy8nzTsA2yNVF-XIQfh36NQjMY21ggUJwYV8PeFs1rh8v6xbO0m8Lf2IMUDMJ3vUei7RMQuiNJM2s\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ngo&agrave;i ra, DICE đ&atilde; giới thiệu nhiều loại vũ kh&iacute; cận chiến mới như gươm lưỡi cong, ch&agrave;y gai, v&agrave; xẻng v&agrave;o tr&ograve; chơi. Những vũ kh&iacute; cận chiến n&agrave;y được chia th&agrave;nh ba nh&oacute;m: nặng, trung b&igrave;nh v&agrave; nhẹ. Người chơi cũng c&oacute; thể điều khiển nhiều loại xe bọc th&eacute;p kh&aacute;c nhau, bao gồm xe tăng hạng nhẹ v&agrave; hạng nặng, xe bọc th&eacute;p, xe &ocirc; t&ocirc;, t&agrave;u ph&oacute;ng ngư l&ocirc;i, m&aacute;y bay hai tầng, Xe lửa bọc th&eacute;p, xe trinh s&aacute;t, t&agrave;u bay Dreadnought v&agrave; LZ 30. Ngo&agrave;i ra, người chơi cũng c&oacute; thể cưỡi ngựa v&agrave; chiến đấu.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img src=\"https://lh3.googleusercontent.com/TMj7-KFhAtP5PXTKqFVaPA-HqZNyXKkEUAWUEa1mxAfPPU8j_XdDqc7wOAvJSJjUKywOtRx3RphMN38Vr_717m5b-z5pwXhOt6yfXb1q3fDBlezj_icdhj6SeYXH1_ZCwiDIjm21\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Chế độ chiến dịch c&oacute; m&ocirc;i trường rộng hơn v&agrave; cởi mở hơn so với c&aacute;c phần trước trong s&ecirc;-ri, với nhiều lựa chọn hơn về c&aacute;ch ho&agrave;n th&agrave;nh cấp độ v&agrave; c&aacute;ch tiếp cận chiến đấu. Người chơi c&oacute; thể điều khiển nhiều nh&acirc;n vật trong chiến dịch. Nếu người chơi chết trong phần mở đầu, họ sẽ điều khiển một người l&iacute;nh v&agrave; vai tr&ograve; kh&aacute;c thay v&igrave; hồi sinh lại ở một điểm lưu. Khi người chơi chết, t&ecirc;n v&agrave; năm sinh/mất của người l&iacute;nh m&agrave; họ điều khiển sẽ xuất hiện tr&ecirc;n m&agrave;n h&igrave;nh.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Chế độ nhiều người chơi của game hỗ trợ tới 64 người chơi. Theo Berlin, chơi m&agrave; kh&ocirc;ng tham gia một đội h&igrave;nh sẽ khiến cho lối chơi trở n&ecirc;n kh&oacute; khăn hơn nhiều. Bản đồ nhiều người chơi dựa tr&ecirc;n c&aacute;c địa điểm c&oacute; thật tr&ecirc;n thế giới, bao gồm Arabia, Mặt trận ph&iacute;a T&acirc;y v&agrave; d&atilde;y n&uacute;i Alps. Game được ph&aacute;t h&agrave;nh với 9 bản đồ v&agrave; 6 chế độ, bao gồm Conquest, Domination, Operation, Rush, Team Deathmatch, v&agrave; War Pigeons.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Nguồn :&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Battlefield_1\">https://vi.wikipedia.org/wiki/Battlefield_1</a></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Cấu h&igrave;nh y&ecirc;u cầu</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h6><span style=\"font-size:16px\"><strong>MINIMUM SPECS</strong></span></h6>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">OS: 64-bit Windows 7, Windows 8.1 and Windows 10</span></li>\r\n	<li><span style=\"font-size:16px\">Processor (AMD): AMD FX-6350</span></li>\r\n	<li><span style=\"font-size:16px\">Processor (Intel): Core i5 6600K</span></li>\r\n	<li><span style=\"font-size:16px\">Memory: 8GB RAM</span></li>\r\n	<li><span style=\"font-size:16px\">Graphics card (AMD): AMD Radeon&trade; HD 7850 2GB</span></li>\r\n	<li><span style=\"font-size:16px\">Graphics card (NVIDIA): nVidia GeForce&reg; GTX 660 2GB</span></li>\r\n	<li><span style=\"font-size:16px\">DirectX: 11.0 Compatible video card or equivalent</span></li>\r\n	<li><span style=\"font-size:16px\">Online Connection Requirements: 512 KBPS or faster Internet connection</span></li>\r\n	<li><span style=\"font-size:16px\">Hard-drive space: 50GB</span></li>\r\n</ul>\r\n\r\n<h6><span style=\"font-size:16px\"><strong>RECOMMENDED SPECS</strong></span></h6>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">OS: 64-bit Windows 10 or later</span></li>\r\n	<li><span style=\"font-size:16px\">Processor (AMD): AMD FX 8350 Wraith</span></li>\r\n	<li><span style=\"font-size:16px\">Processor (Intel): Intel Core i7 4790 or equivalent</span></li>\r\n	<li><span style=\"font-size:16px\">Memory: 16GB RAM</span></li>\r\n	<li><span style=\"font-size:16px\">Graphics card (AMD): AMD Radeon&trade; RX 480 4GB</span></li>\r\n	<li><span style=\"font-size:16px\">Graphics card (NVIDIA): NVIDIA GeForce&reg; GTX 1060 3GB</span></li>\r\n	<li><span style=\"font-size:16px\">DirectX: 11.1 Compatible video card or equivalent</span></li>\r\n	<li><span style=\"font-size:16px\">Online Connection Requirements: 512 KBPS or faster Internet connection</span></li>\r\n	<li><span style=\"font-size:16px\">Available Disk Space: 50GB</span></li>\r\n</ul>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all:unset\">&nbsp;</div>', 1, '2020-05-26 06:43:54', '2020-05-26 07:24:20'),
(21, 'Tomb Raider', 15, 'tomb-raider', 'header.jpg', 62000.00, NULL, '<p>Chi tiết sản phẩm</p>\r\n\r\n<p dir=\"ltr\">Những người h&acirc;m mộ d&ograve;ng game Tomb Raider đ&atilde; theo ch&acirc;n Lara Croft trong hơn 16 năm kể từ khi phi&ecirc;n bản Tomb Raider đầu ti&ecirc;n ra mắt v&agrave;o năm 1996. &nbsp;Cho đến nay, đ&atilde; c&oacute; hơn 13 tựa game Tomb Raider được ra mắt, c&ugrave;ng với doanh số 35 triệu bản b&aacute;n ra, đ&atilde; chứng minh rằng Tomb Raider l&agrave; một trong những thương hiệu game ăn kh&aacute;ch nhất to&agrave;n cầu.</p>\r\n\r\n<p dir=\"ltr\">Sau phi&ecirc;n bản Underworld ra mắt v&agrave;o năm 2008, d&ograve;ng game Tomb Raider bắt đầu &ldquo;im hơi lặng tiếng&rdquo; khi tự nhận thấy bản th&acirc;n trở n&ecirc;n &ldquo;gi&agrave; cỗi&rdquo;, thiếu sự đổi mới. C&ugrave;ng thời điểm n&agrave;y, ở mảng console, xuất hiện một ng&ocirc;i sao mới &ndash; Uncharted: Drake&rsquo;s Fortune, của h&atilde;ng Naughty Dog, m&agrave; về sau đ&atilde; trở th&agrave;nh một trong những d&ograve;ng game độc quyền chủ lực cho PlayStation của Sony.</p>\r\n\r\n<p dir=\"ltr\">Ch&iacute;nh đối thủ đ&aacute;ng gờm n&agrave;y đ&atilde; th&ocirc;i th&uacute;c Crystal Dynamics phải &ldquo;đẻ&rdquo; ra một phụ bản mang t&ecirc;n: Lara Croft and The Guardian of Light (2010) để &ldquo;c&acirc;u giờ&rdquo;, c&ograve;n b&ecirc;n trong nh&agrave; th&igrave; dồn hết nh&acirc;n lực v&agrave; t&acirc;m huyết để t&aacute;i sinh lại thương hiệu Tomb Raider trứ danh, sao cho khi ra mắt phải xứng đ&aacute;ng l&agrave; &ldquo;đ&agrave;n chị&rdquo; của d&ograve;ng game Uncharted kia.</p>\r\n\r\n<p dir=\"ltr\">Thế l&agrave; phi&ecirc;n bản &ldquo;reboot&rdquo; (khởi động lại) mang c&aacute;i t&ecirc;n &ldquo;cộc lốc&rdquo;: Tomb Raider ra đời. Một cuộc h&agrave;nh tr&igrave;nh mới, c&ugrave;ng với một Lara Croft &ldquo;thời ni&ecirc;n thiếu&rdquo; xuất hiện. Liệu niềm ki&ecirc;u h&atilde;nh của thương hiệu Tomb Raider gi&agrave; đời c&oacute; đ&aacute;nh bại được Uncharted trẻ trung, liệu n&agrave;ng Lara qu&yacute; tộc c&oacute; gi&agrave;nh lại được cảm t&igrave;nh của những cựu fan v&agrave; thu h&uacute;t c&aacute;c t&acirc;n binh từ tay ch&agrave;ng Don Juan &ndash; Nathan Drake, sau ngần ấy năm &ldquo;biệt t&iacute;ch giang hồ&rdquo;?</p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://lh5.googleusercontent.com/mnB0ja2rhys0dWkKHO77yw2SQlam8X3zRR0cD3WD9YtSiBBxRRHuADeuFvjTWb0dMwx0odcSbKuWfVStT0JvAMzpNzQH2CqGZfUtroZpCZ6nI2zVzFXIAZ3xeFW_WdDMlxLHcWDc\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Sự khởi đầu của một huyền thoại&hellip;</p>\r\n\r\n<p>C&acirc;u chuyện của Tomb Raider bắt đầu với h&igrave;nh ảnh Lara Croft &ldquo;thời ni&ecirc;n thiếu&rdquo; c&ugrave;ng với những người đồng nghiệp của m&igrave;nh tr&ecirc;n con t&agrave;u Endurance trong chuyến hải tr&igrave;nh t&igrave;m kiếm vương quốc Yamatai kỳ b&igrave;.</p>\r\n\r\n<p dir=\"ltr\">Khi con t&agrave;u bị đắm tại một h&ograve;n đảo với sự xuất hiện của những kẻ lạ mặt t&agrave;n &aacute;c thuộc gi&aacute;o ph&aacute;i Solarii, Lara từ một thiếu nữ ch&acirc;n yếu tay mềm, buộc phải trở n&ecirc;n mạnh mẽ hơn, quyết đo&aacute;n hơn v&agrave; kh&ocirc;ng l&ugrave;i bước trước những hiểm nguy đang r&igrave;nh rập ph&iacute;a trước, với mục đ&iacute;ch cố gắng giữ lấy mạng m&igrave;nh v&agrave; t&igrave;m kiếm những người bạn bị thất lạc giữa một nơi ho&agrave;n to&agrave;n xa lạ.</p>\r\n\r\n<p dir=\"ltr\">Kh&aacute;c với truyền thống của loạt game, Tomb Raider sử dụng t&iacute;nh khốc liệt, t&agrave;n nhẫn để tạo n&ecirc;n một cuộc phi&ecirc;u lưu đầy kịch t&iacute;nh v&agrave; đậm chất Hollywood, nhưng vẫn kh&ocirc;ng bỏ qu&ecirc;n những khoảng lặng trong cốt truyện v&agrave; diễn biến t&acirc;m l&yacute; phức tạp của Lara Croft xuy&ecirc;n suốt h&agrave;nh tr&igrave;nh.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p><img src=\"https://lh6.googleusercontent.com/e5tZM35zUtBspYyPR-tOj7F0W5To_vyYPRucgIt8NTM-SJ-RqgNM4d6zbj2CAwXS6U9bG3w0ILgFxyqXpy-fy-UEb86Tz2FuVGI5NBiYo9VxmlA2_yNv1Nh0w9C-B_SJXznmTYv6\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Người chơi c&oacute; thể cảm nhận được sự trưởng th&agrave;nh của Lara, qua mỗi bước chạy, qua mỗi mũi t&ecirc;n bay l&agrave; cả một nỗ lực to lớn của một &ldquo;kẻ sống s&oacute;t&rdquo; thực thụ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Điều đ&oacute; c&ograve;n được thể hiện r&otilde; hơn qua th&aacute;i độ v&agrave; từng c&acirc;u n&oacute;i của Lara, đ&oacute; l&agrave; l&uacute;c khi nhắm thẳng v&agrave;o một t&ecirc;n Solarii v&agrave; n&oacute;i rằng &ldquo;T&ocirc;i kh&ocirc;ng muốn l&agrave;m điều n&agrave;y&rdquo; cho đến l&uacute;c h&eacute;t l&ecirc;n &ldquo;H&atilde;y chạy đi lũ khốn!&rdquo; khi đang s&ocirc;i sục &yacute; ch&iacute; cứu sống người bạn th&acirc;n của m&igrave;nh.</p>\r\n\r\n<p dir=\"ltr\">Mặc d&ugrave; cốt truyện c&ograve;n hơi phi l&ocirc;-g&iacute;c một c&aacute;ch&hellip; qu&aacute; đ&aacute;ng v&agrave; nửa sau game hơi bị &ldquo;đuối&rdquo;, qu&aacute; tr&igrave;nh Lara Croft c&ograve;n trẻ v&agrave; non nớt dần trở th&agrave;nh một Lara Croft cứng c&aacute;p, mạnh mẽ m&agrave; ch&uacute;ng ta đ&atilde; được chứng kiến trước đ&acirc;y cũng qu&aacute; đủ để l&agrave;m động lực khiến cho người chơi tiếp tục tr&ecirc;n cuộc h&agrave;nh tr&igrave;nh.</p>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute;, cũng kh&ocirc;ng thể kh&ocirc;ng khen ngợi sự lồng gh&eacute;p kh&eacute;o l&eacute;o của yếu tố phim ảnh v&agrave;o trong Tomb Raider, đ&acirc;y cũng l&agrave; ưu điểm tạo n&ecirc;n danh tiếng của d&ograve;ng game Uncharted đ&atilde; được Tomb Raider &ldquo;hấp thu&rdquo; cho m&igrave;nh.</p>\r\n\r\n<p dir=\"ltr\">C&aacute;c trường đoạn như Lara buộc phải chạy khỏi một x&aacute;c m&aacute;y bay đang lao thằng về ph&iacute;a m&igrave;nh, hay cố gắng leo l&ecirc;n v&aacute;ch đ&aacute; trong l&uacute;c cơn b&atilde;o tuyết nổi cơn thịnh nộ&hellip; ch&uacute;ng được sắp xếp một c&aacute;ch hợp l&yacute;, k&iacute;ch th&iacute;ch v&agrave; tần suất xuất hiện kh&ocirc;ng qu&aacute; d&agrave;y đặc nhưng cũng đủ để khiến cho người chơi cảm thấy h&agrave;o hứng v&agrave; kh&ocirc;ng bị nh&agrave;m ch&aacute;n.</p>\r\n\r\n<p dir=\"ltr\">H&agrave;nh động m&aacute;u lửa, dồn dập, kịch t&iacute;nh</p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p><img src=\"https://lh5.googleusercontent.com/d2TNYL4ua5DrexufTKqDw0aQUeMJAfTDNMTwHi9mcgGju18OKjbc9Aa23F4m1yYCLo7yJ9pudf2czHpJLCTyPO0gkL2RC5-BtEsEAF3E7SV3W-qoMCKfRTgaD10i-fo8C6yaQuTR\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Điều n&agrave;y c&oacute; thể khiến cho nhiều người ngạc nhi&ecirc;n, nhất l&agrave; c&aacute;c fan của d&ograve;ng game chắc chắn sẽ bị &ldquo;sốc&rdquo;, nhưng thực sự yếu tố nổi bật nhất của Tomb Raider lại l&agrave; mảng&hellip; h&agrave;nh động. Lara sở hữu bốn vũ kh&iacute; ch&iacute;nh l&agrave; cung t&ecirc;n, s&uacute;ng lục, s&uacute;ng trường v&agrave; s&uacute;ng săn, tất cả đều c&oacute; thể được n&acirc;ng cấp nhờ v&agrave;o lượng nguy&ecirc;n liệu (salvage) xuất hiện trong mỗi m&agrave;n chơi.</p>\r\n\r\n<p dir=\"ltr\">C&aacute;c pha h&agrave;nh động trong Tomb Raider li&ecirc;n tục t&ugrave;y biến, c&oacute; l&uacute;c người chơi sẽ phải l&eacute;n l&uacute;t hạ từng t&ecirc;n địch bằng cung t&ecirc;n, dụ địch bằng c&aacute;ch bắn t&ecirc;n v&agrave;o tường rồi thoải m&aacute;i &ldquo;xơi mồi&rdquo;, hay trở th&agrave;nh một &ldquo;rambo&rdquo; đ&uacute;ng nghĩa, x&ocirc;ng pha thẳng v&agrave;o v&ugrave;ng chiến v&agrave; d&ugrave;ng khẩu s&uacute;ng trường tr&ecirc;n tay c&agrave;n qu&eacute;t hết những t&ecirc;n địch ng&aacute;ng đường. Hỗ trợ cho cả hai lối chơi tr&ecirc;n l&agrave; cơ chế tự động nấp v&agrave;o vật chắn (cover) hoạt động rất trơn tru v&agrave; hiệu quả hơn nhiều so với cơ chế &ldquo;d&iacute;nh tường&rdquo; cổ điển.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh y&ecirc;u cầu</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Minimum:</strong>\r\n\r\n	<ul>\r\n		<li><strong>OS:</strong>Windows XP Service Pack 3, Windows Vista,7,8 (32bit/64bit)</li>\r\n		<li><strong>Processor:</strong>Dual core CPU: AMD Athlon64 X2 2.1 Ghz (4050+), Intel Core2 Duo 1.86 Ghz (E6300)</li>\r\n		<li><strong>Memory:</strong>1GB Memory (2GB on Vista)<br />\r\n		&nbsp;</li>\r\n		<li><strong>Graphics:</strong>DirectX 9 graphics card with 512Mb Video RAM: AMD Radeon HD 2600 XT, nVidia 8600</li>\r\n		<li><strong>DirectX&reg;:</strong>9.0c</li>\r\n		<li><strong>Hard Drive:</strong>12 GB HD space</li>\r\n		<li><strong>Other Requirements:</strong>Broadband Internet connection</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all:unset\">&nbsp;</div>', 1, '2020-05-26 06:46:49', '2020-05-26 07:28:23'),
(22, 'Mirror\'s Edge™', 15, 'mirrors-edge™', 'header (1).jpg', 200000.00, NULL, '<p>Chi tiết sản phẩm</p>\r\n\r\n<p><img src=\"http://cdn.edgecast.steamstatic.com/steam/apps/17410/extras/MEdge.jpg?t=1447351617\" /><br />\r\n<br />\r\nIn a city where information is heavily monitored, agile couriers called Runners transport sensitive data away from prying eyes. In this seemingly utopian paradise, a crime has been committed, your sister has been framed and now you are being hunted. You are a Runner called Faith and this innovative first-person action-adventure is your story.<br />\r\n<br />\r\nMirror&#39;s Edge&trade; delivers you straight into the shoes of this unique heroine as she traverses the vertigo-inducing cityscape, engaging in intense combat and fast paced chases. With a never before seen sense of movement and perspective, you will be drawn into Faith&#39;s world. A world that is visceral, immediate, and very dangerous.<br />\r\n<br />\r\nLive or die? Soar or plummet? One thing is certain, in this city you will learn how to run. From the makers of the groundbreaking Battlefield franchise, Mirror&#39;s Edge is an action-adventure experience unlike any other.</p>\r\n\r\n<h2>Features</h2>\r\n\r\n<ul>\r\n	<li><strong>Move yourself</strong>: String together an amazing arsenal of wall-runs, leaps, vaults and more, in fluid, acrobatic movements that turns every level of the urban environment to your advantage and salvation.</li>\r\n	<li><strong>Immerse yourself</strong>: In first person every breath, every collision, every impact is acutely felt. Heights create real vertigo, movements flow naturally, collisions and bullet impacts create genuine fear and adrenaline.</li>\r\n	<li><strong>Challenge yourself</strong>: Fight or flight. Your speed and agility allow you not only to evade, capture and perform daring escapes, but also to disable and disarm unwary opponents, in a mix of chase, puzzles, strategy and intense combat.</li>\r\n	<li><strong>Free yourself</strong>: Runner vision allows you to see the city as they do. See the flow. Rooftops become pathways and conduits, opportunities and escape routes. The flow is what keeps you running  what keeps you alive.</li>\r\n</ul>\r\n\r\n<h2>Awards</h2>\r\n\r\n<p><img src=\"http://cdn.edgecast.steamstatic.com/steam/apps/17410/extras/181041_3_GameProGoldE308.png?t=1447351617\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh y&ecirc;u cầu</p>\r\n\r\n<p>Kh&ocirc;ng</p>', 1, '2020-05-26 07:09:09', '2020-05-26 07:09:09'),
(23, 'Overwatch Standard Edition', 16, 'overwatch-standard-edition', 'overwatch-457x213.png', 800000.00, NULL, '<p><strong>Chi tiết sản phẩm</strong></p>\r\n\r\n<p dir=\"ltr\">Overwatch chơi theo kiểu đấu ch&iacute;nh l&agrave; đấu đội với hai đội đối phương gồm s&aacute;u người chơi. Người chơi sẽ chọn một trong những anh h&ugrave;ng (Hero), mỗi anh h&ugrave;ng đều c&oacute; kỹ năng đặc trưng ri&ecirc;ng v&agrave; theo vai tr&ograve; thuộc 3 nh&oacute;m: S&aacute;t thương (Damage) - Chống chịu (Tank) - Hỗ trợ (Support). Trong qu&aacute; tr&igrave;nh thiết lập trước trận đấu, những người chơi trong đội sẽ được tư vấn từ đầu trận đấu nếu đội của họ kh&ocirc;ng c&acirc;n bằng, chẳng hạn như nếu thiếu anh h&ugrave;ng Chống chịu hay người hồi phục m&aacute;u, họ sẽ khuyến kh&iacute;ch c&aacute;c người chơi kh&aacute;c chuyển sang c&aacute;c anh h&ugrave;ng kh&aacute;c trước trận đấu v&agrave; c&acirc;n bằng đội h&igrave;nh xuất ph&aacute;t. Trong một trận đấu, người chơi c&oacute; thể chuyển đổi giữa c&aacute;c nh&acirc;n vật trong tr&ograve; chơi sau khi chết hoặc bằng c&aacute;ch trở về căn nh&agrave; của họ. Tr&ograve; chơi được thiết kế để khuyến kh&iacute;ch người chơi th&iacute;ch ứng với đội đối phương trong một trận đấu bằng c&aacute;ch chuyển sang c&aacute;c nh&acirc;n vật phản &aacute;nh t&ugrave;y theo khả năng của m&igrave;nh.</p>\r\n\r\n<p dir=\"ltr\"><img src=\"https://lh4.googleusercontent.com/6K2Ab_zvVdXlN6EpIuY4iAVuPFdsQmuYznzf34LOwvQ2UpPQhd6C_KZGjDwJnDcTgKOm-GnqCM5ELBYXOHvLgeii9BUuhqSF5uB5p5PGufH-J_J8P_YLOHQnTigw-B5ZSV70pm6y\" /></p>\r\n\r\n<p dir=\"ltr\">Mỗi anh h&ugrave;ng c&oacute; một vũ kh&iacute; ch&iacute;nh v&agrave; &iacute;t nhất l&agrave; hai kỹ năng bổ sung m&agrave; c&oacute; thể được sử dụng bất cứ l&uacute;c n&agrave;o, một số đ&ograve;i hỏi một thời gian hồi chi&ecirc;u ngắn trước khi ch&uacute;ng c&oacute; thể được sử dụng lại. Hơn nữa, mỗi người chơi từ từ nạp chi&ecirc;u cuối của nh&acirc;n vật; chi&ecirc;u cuối được nạp theo thời gian nhưng c&oacute; thể nạp nhanh hơn để đ&aacute;nh bại đối thủ hoặc thực hiện c&aacute;c nhiệm vụ c&oacute; &iacute;ch kh&aacute;c cho đội của họ như hồi phục (hồi m&aacute;u) cho c&aacute;c th&agrave;nh vi&ecirc;n kh&aacute;c trong nh&oacute;m. Khi đ&atilde; sẵn s&agrave;ng, người chơi c&oacute; thể sử dụng kỹ năng n&agrave;y v&agrave;o bất kỳ thời điểm n&agrave;o v&agrave; n&oacute; c&oacute; thể k&eacute;o d&agrave;i trong v&agrave;i gi&acirc;y (như tăng sức tấn c&ocirc;ng hoặc miễn nhiễm đối với c&aacute;c cuộc tấn c&ocirc;ng) hoặc l&agrave; một kỹ năng đảo ngược t&igrave;nh thế (chẳng hạn như hồi sinh bất kỳ th&agrave;nh vi&ecirc;n nh&oacute;m n&agrave;o vừa nằm xuống gần đ&acirc;y), sau đ&oacute; sau đ&oacute; họ phải chờ một thời gian để lấp đầy lại thanh chi&ecirc;u cuối lần nữa. Những người chơi đối phương sẽ được cảnh b&aacute;o khi người trong đội sử dụng chi&ecirc;u cuối bằng một c&acirc;u n&oacute;i cảnh b&aacute;o từ nh&acirc;n vật, thường bằng ng&ocirc;n ngữ mẹ đẻ của nh&acirc;n vật (v&iacute; dụ Mei, Zarya, Genji,...). Chẳng hạn, tay s&uacute;ng cao bồi McCree sẽ n&oacute;i&nbsp;<em>&quot;It&#39;s high noon&quot;</em>&nbsp;khi người chơi k&iacute;ch hoạt chi&ecirc;u cuối để nhắm mục ti&ecirc;u đến nhiều kẻ th&ugrave; c&oacute; thể nh&igrave;n thấy v&agrave; g&acirc;y ra những s&aacute;t thương chết người cho những người vẫn c&ograve;n trong tầm nh&igrave;n. Điều n&agrave;y cho ph&eacute;p người chơi phản ứng trong một thời gian ngắn để ẩn nấp khỏi tầm nh&igrave;n hoặc đ&aacute;p trả lại.</p>\r\n\r\n<p dir=\"ltr\"><img src=\"https://lh3.googleusercontent.com/Ye7qICY66PQeuNMpQSLWsM4VEbLk6VxmdA1DZtdONoU0F462_lbSn9U8xabllxbXB2B-pvRrHnv4rOcBtVIl_2cJMHtrMWYhngJGLw2SqTdzpP5Lsi8BbAVk5HTgV6QIgVNL2dbj\" /></p>\r\n\r\n<p dir=\"ltr\">Overwatch sử dụng một hệ thống ph&aacute;t lại tức th&igrave; tự động, được thiết kế để l&agrave;m nổi bật c&aacute;c khoảnh khắc quan trọng của tr&ograve; chơi. Sau khi kết th&uacute;c tr&ograve; chơi, m&aacute;y chủ sẽ chọn một đoạn highlight của trận đấu c&oacute; ảnh hưởng lớn đến tiến tr&igrave;nh của tr&ograve; chơi, chẳng hạn như sự hạ gục nhanh ch&oacute;ng hoặc hồi m&aacute;u cho đồng đội một c&aacute;ch hiệu quả, v&agrave; sau đ&oacute; ph&aacute;t s&oacute;ng cho tất cả người chơi. Đ&acirc;y được gọi l&agrave; &quot;Nổi bật nhất trận đấu&quot; (&quot;Play of the Game&quot; trong trận đấu thường hoặc &quot;Play of the Match&quot; trong trận đấu xếp hạng, thường được viết tắt l&agrave; &quot;PotG&quot; hoặc &quot;PotM&quot;). Sau đ&oacute;, m&agrave;n h&igrave;nh kết quả được hiển thị, l&agrave;m nổi bật l&ecirc;n đến bốn người chơi từ cả hai đội cho th&agrave;nh t&iacute;ch của họ trong trận đấu (như số m&aacute;u được phục hồi, đ&atilde; hồi phục hoặc đ&atilde; chặn s&aacute;t thương, hoặc thời gian d&agrave;nh cho mục ti&ecirc;u) v&agrave; tất cả c&aacute;c người chơi được trao t&ugrave;y chọn khen thưởng một trong số những người chơi nổi bật đ&oacute;.</p>\r\n\r\n<p dir=\"ltr\"><img src=\"https://lh3.googleusercontent.com/737vCs7pU33RKfNA-9vody-pi-MpK9sRHUjJk8bKkTTRnzuRbznmgh7ZYtPc7Dw6dvs1puqmR6U24hRuZ0Zi2IWr4N1XLJxMKsStVCZcfta8oJXqnTOuo87zOGhlLyU56-Wb5Owh\" /></p>\r\n\r\n<p dir=\"ltr\">Người chơi đạt được điểm kinh nghiệm sau trận đấu về mức metagame dựa tr&ecirc;n một số yếu tố như họ thắng hay thua, họ đ&atilde; sử dụng sức mạnh của nh&acirc;n vật một c&aacute;ch hiệu quả như thế n&agrave;o, được nhận huy chương v&agrave;ng, bạc, hoặc đồng. Ban đầu, điểm kinh nghiệm chỉ được nhận khi t&igrave;m trận đấu chứ kh&ocirc;ng phải đấu t&ugrave;y chọn, nhưng từ khi cập nhật kiểu đấu t&ugrave;y chọn, được ph&aacute;t h&agrave;nh v&agrave;o th&aacute;ng 2 năm 2017, đ&atilde; cho ph&eacute;p trải nghiệm trải nghiệm cho c&aacute;c trận đấu t&ugrave;y chọn theo c&aacute;ch ri&ecirc;ng của m&igrave;nh v&agrave; nhận được điểm kinh nghiệm. Khi l&ecirc;n cấp độ, người chơi c&oacute; thể nhận được một hộp may mắn, mỗi hộp chứa bốn vật phẩm ngẫu nhi&ecirc;n cho c&aacute;c người chơi, bao gồm tư thế chiến thắng, b&igrave;nh xịt, trang phục, cảm x&uacute;c v&agrave; d&ograve;ng giọng n&oacute;i. Những thứ như vậy được đưa ra dựa tr&ecirc;n mức độ hiếm c&oacute; của họ, với những phẩm chất &quot;Th&ocirc;ng thường&quot;, &quot;Sử thi&quot; v&agrave; &quot;Huyền thoại&quot;. Họ cũng c&oacute; thể kiếm được đồng tiền trong tr&ograve; chơi được gọi l&agrave; &quot;xu&quot;, c&oacute; thể được sử dụng để mua c&aacute;c vật phẩm với chi ph&iacute; của họ dựa tr&ecirc;n sự hiếm c&oacute; của vật phẩm n&agrave;y. C&aacute;c vật phẩm kh&aacute;c chỉ c&oacute; thể được nhận bằng c&aacute;ch ho&agrave;n th&agrave;nh c&aacute;c th&agrave;nh tựu trong tr&ograve; chơi. C&aacute;c vật phẩm tr&ugrave;ng lặp được thưởng bằng tiền tệ trong tr&ograve; chơi. Người chơi cũng c&oacute; thể lựa chọn để mua hộp may mắn với tiền thực tr&ecirc;n thế giới th&ocirc;ng qua c&aacute;c giao dịch vi m&ocirc;.</p>\r\n\r\n<p dir=\"ltr\"><strong>Q&amp;A:</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>Q: Đ&acirc;y l&agrave; t&agrave;i khoản OverWatch (Acc OverWatch)?</strong></p>\r\n\r\n<p dir=\"ltr\">A: Đ&acirc;y l&agrave; sản phẩm CDKey k&iacute;ch hoạt bản quyền game OverWatch.</p>\r\n\r\n<p dir=\"ltr\"><strong>Q: L&agrave;m thế n&agrave;o để c&oacute; t&agrave;i khoản OverWatch (Acc OverWatch)?</strong></p>\r\n\r\n<p dir=\"ltr\">A: T&agrave;i khoản OverWatch ch&iacute;nh l&agrave; t&agrave;i khoản Battle.net. Bạn c&oacute; thể tạo t&agrave;i khoản Battle.net dễ v&agrave; miễn ph&iacute; tại&nbsp;<a href=\"https://us.battle.net/account/creation/en/\"><u>Đ&Acirc;Y</u></a><br />\r\n<strong>Q: Sau khi c&oacute; t&agrave;i khoản l&agrave;m thế n&agrave;o để chơi game?</strong></p>\r\n\r\n<p dir=\"ltr\">A: Sau khi bạn đ&atilde; tạo được t&agrave;i khoản theo hướng dẫn b&ecirc;n tr&ecirc;n, bạn chỉ cần mua sản phẩm OverWatch n&agrave;y. Sau đ&oacute;, bạn sẽ nhận game theo hướng dẫn sau:&nbsp;<a href=\"https://divineshop.vn/huong-dan-nhan-game-steam-moi\"><u>https://divineshop.vn/huong-dan-nhap-code-battle-net</u></a>. T&agrave;i khoản của bạn sẽ được k&iacute;ch hoạt bản quyền game OverWatch v&agrave; tiến h&agrave;nh c&agrave;i đặt b&igrave;nh thường sau đ&oacute; bắt đầu trải nghiệm game.</p>\r\n\r\n<p dir=\"ltr\"><strong>Q: Sau khi mua sản phẩm game OverWatch ở m&aacute;y n&agrave;y th&igrave; sang m&aacute;y kh&aacute;c c&oacute; chơi được kh&ocirc;ng?</strong></p>\r\n\r\n<p dir=\"ltr\">A: C&oacute;. Khi mua sản phẩm game l&agrave; bạn mua cho t&agrave;i khoản n&ecirc;n khi sang m&aacute;y kh&aacute;c bạn chỉ cần đăng nhập t&agrave;i khoản v&agrave; c&agrave;i đặt game l&agrave; c&oacute; thể chơi được như b&igrave;nh thường.</p>\r\n\r\n<p><strong>Cấu h&igrave;nh y&ecirc;u cầu</strong></p>\r\n\r\n<p><strong>Cấu h&igrave;nh tối thiểu</strong><br />\r\nHệ Điều H&agrave;nh: Windows&reg; Vista/7/ 8/10 64-bit (Bản cập nhật mới nhất)<br />\r\nVi Xử L&yacute;: Intel&reg; Core&trade; i3 or AMD Phenom&trade; X3 865<br />\r\nCard Đồ Họa: NVIDIA&reg; GeForce&reg; GTX 460, ATI Radeon&trade; HD 4850 ho Intel&reg; HD Graphics 4400. 768 MB VRAM (Ram Card Đồ Họa)<br />\r\nBộ nhớ: 4 GB Ram hệ thống<br />\r\nỔ Cứng: 7200 RPM với dung lượng trống 5 GB<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;-<br />\r\n<strong>Cấu h&igrave;nh đề nghị</strong><br />\r\nHệ Điều H&agrave;nh: Windows&reg; Vista/7/ 8/10 64-bit (Bản cập nhật mới nhất)<br />\r\nVi Xử L&yacute;: Intel&reg; Core&trade; i5 or AMD Phenom&trade; II X3, 2.8 GHz<br />\r\nCard Đồ họa: NVIDIA&reg; GeForce&reg; GTX 660 or ATI Radeon&trade; HD 7950, 2 GB VRAM(Ram Card Đồ Họa)<br />\r\nRam: 6 GB Ram<br />\r\nỔ Cứng: 7200 RPM với dung lượng trống 5 GB</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all:unset\">&nbsp;</div>', 1, '2020-05-26 07:36:26', '2020-05-26 07:37:40'),
(24, 'Diablo 3', 16, 'diablo-3', 'diablo 3-457x213.png', 800000.00, 480000.00, '<p>Chi tiết sản phẩm</p>\r\n\r\n<p><strong>Diablo III</strong>&nbsp;l&agrave; tựa game nhập vai h&agrave;nh động hack and slash phong c&aacute;ch Dungeon&amp;Dragon được ra mắt lần đầu ti&ecirc;n v&agrave;o ng&agrave;y 15/5/2012 d&agrave;nh ri&ecirc;ng cho PC v&agrave; chỉ c&oacute; thể chơi dưới chế độ Online.</p>\r\n\r\n<p>Tựa game thu về được kh&aacute; nhiều th&agrave;nh c&ocirc;ng v&agrave; &quot;gạch đ&aacute;&quot; nhất định để rồi ra mắt phi&ecirc;n bản c&oacute; th&ecirc;m chế độ Offline tr&ecirc;n PS3, Xbox360 v&agrave;o năm 2013 v&agrave; tr&ecirc;n PS4,&nbsp;<strong>Xbox One</strong>&nbsp;v&agrave;o năm 2014. Đặc biệt với phi&ecirc;n bản PS4 người chơi c&ograve;n c&oacute; thể chơi&nbsp;<strong>Diablo III</strong>&nbsp;bằng&nbsp;<strong>PSvita&nbsp;</strong>th&ocirc;ng qua t&iacute;nh năng Remote Play, đ&aacute;ng tiếc rằng trải nghiệm n&agrave;y kh&ocirc;ng được ho&agrave;n hảo v&igrave; t&iacute;nh ổn định k&eacute;m v&agrave; hạn chế phần cứng của Psvita.</p>\r\n\r\n<p><img src=\"https://lh3.googleusercontent.com/kAjHfqPLdGO5QpizM0uDxgrCaTHPjUeQhx_jDacZUN2bIJF5vPZ7V3Tl4nrSrdBB9ls-nVzgclhfF3c2ASlhkgAn91hzCyoXceGWO3CkWxHpQlw09_okPGurEcrScZlWKNcSp8Sl\" style=\"height:339px; width:602px\" /></p>\r\n\r\n<p>Với lối chơi nhập vai h&agrave;nh động, trải nghiệm trong&nbsp;<strong>Diablo III: Eternal Collection</strong>&nbsp;chủ yếu l&agrave; đi động đ&aacute;nh qu&aacute;i v&agrave; thu thập chiến lợi phẩm. Tr&ograve; chơi c&oacute; nhịp độ chơi từ nhanh đến rất nhanh t&ugrave;y v&agrave;o độ kh&oacute; m&agrave; bạn thiết lập. Phần lớn thời gian trải nghiệm đều l&agrave; những trận đ&aacute;nh qu&aacute;i, thu thập vật phẩm mới với mục ti&ecirc;u thăng cấp. Đ&acirc;y ch&iacute;nh l&agrave; c&aacute;i hay của tr&ograve; chơi khi mang đến một cảm gi&aacute;c trải nghiệm vừa h&agrave;o hứng vừa hết sức thỏa m&atilde;n khi nh&acirc;n vật c&agrave;ng l&uacute;c c&agrave;ng mạnh hơn. Ngay khi bạn l&ecirc;n cấp độ tối đa th&igrave; game cũng c&oacute; th&ecirc;m một hệ thống cấp độ Paragon mới, gi&uacute;p nh&acirc;n vật thăng cấp li&ecirc;n tục gần như v&ocirc; tận.</p>\r\n\r\n<p><img src=\"https://lh4.googleusercontent.com/fhxR4F3ami0kf2DGdC2hBK40O-h_gcK_C4wPDKRnWT0XKWL5Y9qBXMSV7M3Q5M-IdfJjWRCqeLbGZ-SRZUaygPQ0apy1PvA8zXQ3GUIKnBDsVX2zNFg2O4zgiTq9kIwhJGnazNyT\" style=\"height:338px; width:600px\" /></p>\r\n\r\n<p>Nguồn :&nbsp;<a href=\"https://trainghiemso.vn/\">https://trainghiemso.vn</a></p>\r\n\r\n<p>Cấu h&igrave;nh y&ecirc;u cầu</p>\r\n\r\n<p><strong>Minimum Requirements :</strong></p>\r\n\r\n<p>Operating System: Windows&reg; XP/Windows Vista/Windows 7/Windows 8 (latest service packs) with DX 9.0c</p>\r\n\r\n<p>Processor: Intel&reg; Pentium&reg; D or AMD Athlon&trade; 64 X2</p>\r\n\r\n<p>Video: NVIDIA&reg; GeForce&reg; 7800GT or ATI Radeon&trade; X1950 Pro</p>\r\n\r\n<p>Memory: 2 GB RAM</p>\r\n\r\n<p>Storage: &nbsp; &nbsp;<br />\r\n25 GB available HD space<br />\r\nInternet: &nbsp; &nbsp;<br />\r\nBroadband Internet connection<br />\r\nMedia: &nbsp;<br />\r\nDVD-ROM drive (required for retail disc versions only)<br />\r\nResolution: &nbsp; &nbsp;&nbsp;<br />\r\n1024X768 minimum display resolution</p>\r\n\r\n<p><strong>Recommended Specifications :</strong></p>\r\n\r\n<p>Operating System: Windows&reg; 7 / Windows&reg; 8 / Windows&reg; 10 64-bit (latest service pack)</p>\r\n\r\n<p>Processor: Intel&reg; Core&trade; 2 Duo 2.4 GHz or AMD Athlon&trade; 64 X2 5600+ 2.8GHz</p>\r\n\r\n<p>Video: NVIDIA&reg; GeForce&reg; GTX&trade; 260 or ATI Radeon&trade; HD 4870 or better</p>\r\n\r\n<p>Memory: 4 GB RAM</p>\r\n\r\n<p>Storage: &nbsp;&nbsp;<br />\r\n25 GB available HD space<br />\r\nInternet: &nbsp; &nbsp;<br />\r\nBroadband Internet connection<br />\r\nMedia: &nbsp;<br />\r\nDVD-ROM drive (required for retail disc versions only)<br />\r\nResolution: &nbsp; &nbsp;&nbsp;<br />\r\n1024X768 minimum display resolution</p>\r\n\r\n<p>&nbsp;</p>', 1, '2020-05-26 07:39:16', '2020-05-26 07:39:16'),
(25, 'Diablo 3: Reaper of Souls (DLC)', 16, 'diablo-3-reaper-of-souls-dlc', 'Reaper of Souls-457x213.png', 400000.00, 380000.00, '<p>Cấu h&igrave;nh y&ecirc;u cầu</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Minimum Requirements :</p>\r\n\r\n<p>Operating System: Windows&reg; XP/Windows Vista/Windows 7/Windows 8 (latest service packs) with DX 9.0c</p>\r\n\r\n<p>Processor: Intel&reg; Pentium&reg; D or AMD Athlon&trade; 64 X2</p>\r\n\r\n<p>Video: NVIDIA&reg; GeForce&reg; 7800GT or ATI Radeon&trade; X1950 Pro</p>\r\n\r\n<p>Memory: 2 GB RAM</p>\r\n\r\n<p>Storage: &nbsp; &nbsp;&nbsp;<br />\r\n25 GB available HD space<br />\r\nInternet: &nbsp; &nbsp;<br />\r\nBroadband Internet connection<br />\r\nMedia: &nbsp;<br />\r\nDVD-ROM drive (required for retail disc versions only)<br />\r\nResolution: &nbsp; &nbsp;&nbsp;<br />\r\n1024X768 minimum display resolution</p>\r\n\r\n<p>Recommended Specifications :</p>\r\n\r\n<p>Operating System: Windows&reg; 7 / Windows&reg; 8 / Windows&reg; 10 64-bit (latest service pack)</p>\r\n\r\n<p>Processor: Intel&reg; Core&trade; 2 Duo 2.4 GHz or AMD Athlon&trade; 64 X2 5600+ 2.8GHz</p>\r\n\r\n<p>Video: NVIDIA&reg; GeForce&reg; GTX&trade; 260 or ATI Radeon&trade; HD 4870 or better</p>\r\n\r\n<p>Memory: 4 GB RAM</p>\r\n\r\n<p>Storage: &nbsp; &nbsp;&nbsp;<br />\r\n25 GB available HD space<br />\r\nInternet: &nbsp; &nbsp;<br />\r\nBroadband Internet connection<br />\r\nMedia: &nbsp;<br />\r\nDVD-ROM drive (required for retail disc versions only)<br />\r\nResolution: &nbsp; &nbsp;&nbsp;<br />\r\n1024X768 minimum display resolution</p>', 1, '2020-05-26 07:41:27', '2020-05-26 07:41:27'),
(26, 'Tom Clancy\'s The Division™ - Last Stand', 17, 'tom-clancys-the-division™-last-stand', 'header (5).jpg', 127000.00, NULL, '<p><strong>Chi tiết sản phẩm</strong></p>\r\n\r\n<p>Tom Clancy&#39;s The Division&trade; - Last Stand</p>\r\n\r\n<p><strong>Cấu h&igrave;nh y&ecirc;u cầu</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Minimum:</strong>\r\n\r\n	<ul>\r\n		<li><strong>OS:</strong>&nbsp;Windows&reg; 7, Windows 8.1, Windows 10 (64-bit versions only)</li>\r\n		<li><strong>Processor:</strong>&nbsp;Intel Core i5-2400 | AMD FX-6100, or better</li>\r\n		<li><strong>Memory:</strong>&nbsp;6 GB RAM</li>\r\n		<li><strong>Graphics:</strong>&nbsp;NVIDIA GeForce GTX 560 with 2 GB VRAM (current equivalent NVIDIA GeForce GTX 760) | AMD Radeon HD 7770 with 2 GB VRAM, or better - See supported List*</li>\r\n		<li><strong>DirectX:</strong>&nbsp;Version 11</li>\r\n		<li><strong>Network:</strong>&nbsp;Broadband Internet connection</li>\r\n		<li><strong>Storage:</strong>&nbsp;40 GB available space</li>\r\n		<li><strong>Additional Notes:</strong>&nbsp;Laptop models of these desktop cards may work as long as they are on-par in terms of performance with at least the minimum configuration. For an up-to-date list of supported hardware, please visit the FAQ for this game on our website:&nbsp;<a href=\"https://steamcommunity.com/linkfilter/?url=http://support.ubi.com.*Supported\" rel=\"noopener\" target=\"_blank\">http://support.ubi.com.*Supported</a>&nbsp;NVIDIA cards at time of release: GeForce GTX500 series: GeForce GTX560 (2 GB VRAM) or better &bull; GeForce GTX600 series: GeForce GTX660 or better &bull; GeForce GTX700 series: GeForce GTX760 or better &bull; GeForce GTX900 Titan series: GeForce GTX960 or better &bull; Supported AMD cards at time of release: Radeon HD7000 series: Radeon HD7770 (2 GB VRAM) or better &bull; Radeon 200 series: Radeon R7 270 or better &bull; Radeon 300/Fury X series: Radeon R7 370 or better.</li>\r\n	</ul>\r\n	</li>\r\n</ul>', 1, '2020-05-26 07:47:38', '2020-05-30 03:19:52'),
(27, 'Tom Clancy\'s Ghost Recon Future Soldier - Arctic Strike DLC', 17, 'tom-clancys-ghost-recon-future-soldier-arctic-strike-dlc', 'header (3).jpg', 1250000.00, NULL, '<p><strong>Chi tiết sản phẩm</strong></p>\r\n\r\n<p>The fight continues with Tom Clancy&rsquo;s Ghost Recon Future Soldier&trade; Arctic Strike Map Pack, as the battle takes you from the streets of Moscow to the far reaches of the Arctic. This all-new downloadable content pack extends your Ghost Recon Future Soldier experience with new multiplayer maps, a new multiplayer mode, a new Guerrilla Mode co-op map, and six additional weapons to give you the supreme edge over your enemies.</p>\r\n\r\n<h2>Key Features:</h2>\r\n\r\n<ul>\r\n	<li>Three adversarial multiplayer maps.\r\n	<ul>\r\n		<li>Riot: Ghosts and Bodark struggle for control of a desolate wasteland.</li>\r\n		<li>Skyline: This skyscraper&rsquo;s rooftop is a two-level CQB nightmare.</li>\r\n		<li>Evicted: Old-school Soviet architecture becomes tomorrow&rsquo;s battlefield when combat spills into a sleepy residential neighborhood.</li>\r\n	</ul>\r\n	</li>\r\n	<li>Brand New &ldquo;Stockade&rdquo; multiplayer mode.<br />\r\n	In this mode, every time you get killed you are sent to the Stockade. Each defeated enemy will enable your team to free one of their squad members, or you can complete an objective to free all squad members from the Stockade at once. Game ends when all opposing team members are jailed in the Stockade.</li>\r\n	<li>&ldquo;Arctic Base&rdquo; Guerilla Co-op Map</li>\r\n	<li>Six exclusive weapons:\r\n	<ul>\r\n		<li>Ghost Weapons: F2000 Assault Rifle, Mk17 PDW Defense Rifle, BT MP9 Sub Machine Gun.</li>\r\n		<li>Bodark Weapons: CZS805 Assault Rifle, OCP-11 Defense Rifle, Type 05 JS Sub Machine Gun.</li>\r\n	</ul>\r\n	</li>\r\n	<li>New achievements and a +10 level cap increase.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Cấu h&igrave;nh y&ecirc;u cầu</strong></p>\r\n\r\n<p><br />\r\n<strong>Minimum:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>OS:</strong>&nbsp;Windows Vista&reg; (with Service Pack 2)/ Windows 7&reg; (with Service pack 1), both 32 bit &amp; 64 bit versions.</li>\r\n	<li><strong>Processor:</strong>&nbsp;Intel Pentium D 3.0 Ghz or AMD Athlon64 X2 4400+ 2.2Ghz</li>\r\n	<li><strong>Memory:</strong>&nbsp;2GB Windows Vista or Windows 7</li>\r\n	<li><strong>Graphics:</strong>&nbsp;512 MB DirectX&ndash;compliant, Shader 4.0&ndash;enabled video card based on nVidia GeForce 8600 GTS/AMD Radeon HD 4650</li>\r\n	<li><strong>DirectX&reg;:</strong>&nbsp;DirectX 11</li>\r\n	<li><strong>Hard Drive:</strong>&nbsp;25 GB</li>\r\n	<li><strong>Sound:</strong>&nbsp;DirectX 11 &ndash; compliant sound card</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Recommneded:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>OS:</strong>&nbsp;Windows Vista&reg; (with Service Pack 2)/ Windows 7&reg; (with Service pack 1), both 32 bit &amp; 64 bit versions.</li>\r\n	<li><strong>Processor:</strong>&nbsp;Intel Core2 Quad Q9450/ AMD Phenom II X4 940 or higher</li>\r\n	<li><strong>Memory:</strong>&nbsp;3 GB Windows Vista&reg; &amp; 7&reg;</li>\r\n	<li><strong>Graphics:</strong>&nbsp;1024 MB DirectX&ndash;compliant, Shader 4.0&ndash;enabled video card based on nVidia GeForce GTX 460 or AMD/ATi HD 5850 or better.</li>\r\n	<li><strong>DirectX&reg;:</strong>&nbsp;DirectX 11</li>\r\n	<li><strong>Hard Drive:</strong>&nbsp;25 GB</li>\r\n	<li><strong>Sound:</strong>&nbsp;DirectX 11 &ndash; compliant sound card</li>\r\n</ul>', 1, '2020-05-26 07:49:55', '2020-05-30 03:17:12');
INSERT INTO `product` (`id`, `name`, `cat_id`, `slug`, `image`, `price`, `price_sale`, `content`, `status`, `created_at`, `updated_at`) VALUES
(28, 'FOR HONOR - YEAR 3 PASS (UPLAY)', 17, 'for-honor-year-3-pass-uplay', 'header (2).jpg', 780000.00, NULL, '<p><strong>Chi tiết sản phẩm</strong></p>\r\n\r\n<p>The Year of the Harbinger is upon us! Enhance your For Honor experience with the Year 3 Pass.<br />\r\n<br />\r\nGet VIP early access to 4 new Heroes, plus exclusive bonus content. The For Honor Year 3 Pass includes:<br />\r\n<br />\r\n- One week early access to 4 new Heroes coming in 2019, one from each faction<br />\r\n- An Elite Outfit for all 4 Heroes<br />\r\n- One exclusive Effect<br />\r\n- 30 days Champion Status<br />\r\n- 5 Scavenger Crates</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh y&ecirc;u cầu</p>\r\n\r\n<p><br />\r\n<strong>Minimum:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>OS:</strong>&nbsp;Windows 7, Windows 8.1, Windows 10 (64-bit versions only)</li>\r\n	<li><strong>Processor:</strong>&nbsp;Intel Core i3-550 | AMD Phenom II X4 955 or equivalent</li>\r\n	<li><strong>Memory:</strong>&nbsp;4 GB RAM</li>\r\n	<li><strong>Graphics:</strong>&nbsp;NVIDIA GeForce GTX660/GTX750ti/GTX950/GTX1050 with 2 GB VRAM or more | AMD Radeon HD6970/HD7870/R9 270/R9 370/RX460 with 2 GB VRAM or more</li>\r\n	<li><strong>Network:</strong>&nbsp;Broadband Internet connection</li>\r\n	<li><strong>Storage:</strong>&nbsp;40 GB available space</li>\r\n	<li><strong>Sound Card:</strong>&nbsp;DirectX-Compatible using the latest drivers</li>\r\n	<li><strong>Additional Notes:</strong>&nbsp;Mouse and Keyboard supported. Game contains EasyAntiCheat&nbsp;<a href=\"https://steamcommunity.com/linkfilter/?url=http://(https://www.easyanticheat.net/)\" rel=\"noopener\" target=\"_blank\">(https://www.easyanticheat.net/)</a>&nbsp;anti-cheat technology and Denuvo&nbsp;<a href=\"https://steamcommunity.com/linkfilter/?url=http://(https://www.denuvo.com/)\" rel=\"noopener\" target=\"_blank\">(https://www.denuvo.com/)</a>&nbsp;anti-tamper technology.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Recommended:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>OS:</strong>&nbsp;Windows 7, Windows 8.1, Windows 10 (64-bit versions only)</li>\r\n	<li><strong>Processor:</strong>&nbsp;Intel Core i5-2500K | AMD FX-6350 or equivalent</li>\r\n	<li><strong>Memory:</strong>&nbsp;8 GB RAM</li>\r\n	<li><strong>Graphics:</strong>&nbsp;NVIDIA GeForce GTX770/GTX970/GTX1060 with 3 GB VRAM or more | AMD Radeon R9 280X/R9 380/RX470 with 3 GB VRAM or more</li>\r\n	<li><strong>Network:</strong>&nbsp;Broadband Internet connection</li>\r\n	<li><strong>Storage:</strong>&nbsp;40 GB available space</li>\r\n	<li><strong>Sound Card:</strong>&nbsp;DirectX-Compatible using the latest drivers</li>\r\n	<li><strong>Additional Notes:</strong>&nbsp;Mouse and Keyboard supported. Game contains EasyAntiCheat&nbsp;<a href=\"https://steamcommunity.com/linkfilter/?url=http://(https://www.easyanticheat.net/)\" rel=\"noopener\" target=\"_blank\">(https://www.easyanticheat.net/)</a>&nbsp;anti-cheat technology and Denuvo&nbsp;<a href=\"https://steamcommunity.com/linkfilter/?url=http://(https://www.denuvo.com/)\" rel=\"noopener\" target=\"_blank\">(https://www.denuvo.com/)</a>&nbsp;anti-tamper technology.</li>\r\n</ul>', 1, '2020-05-26 07:51:56', '2020-05-30 03:18:29'),
(29, 'MINECRAFT DUNGEONS - WINDOWS 10', 18, 'minecraft-dungeons-windows-10', 'minecraft-produktbild-460x215-457x213.png', 500000.00, NULL, '<p>Chi tiết sản phẩm</p>\r\n\r\n<p>Đang cập nhật ...</p>', 1, '2020-05-26 07:54:52', '2020-05-30 03:23:48'),
(30, 'MICROSOFT OFFICE PRO PLUS 2019 (RETAIL KEY)', 18, 'microsoft-office-pro-plus-2019-retail-key', 'huong-dan-cai-dat-va-kich-hoat-microsoft-365-offi-thumb.jpg', 350000.00, NULL, '<p>Trong trường hợp sản phẩm hết h&agrave;ng, bạn vui l&ograve;ng tham khảo sản phẩm steam wallet hoặc li&ecirc;n hệ fanpage để được tư vấn th&ecirc;m.</p>\r\n\r\n<p><strong>Office 2019 mang đến rất nhiều cải tiến so với phi&ecirc;n bản trước đ&oacute;, chi tiết như sau:</strong></p>\r\n\r\n<ol style=\"margin-left:80px\">\r\n	<li>Th&ecirc;m t&iacute;nh năng vẽ tự do bằng b&uacute;t ch&igrave;.</li>\r\n	<li>Th&ecirc;m một số dạng biểu đồ mới trong Word v&agrave; Excel.</li>\r\n	<li>N&acirc;ng cấp t&iacute;nh năng đ&aacute;m m&acirc;y.</li>\r\n	<li>Th&ecirc;m t&iacute;nh năng đưa m&ocirc; h&igrave;nh nh&acirc;n vật 3D v&agrave;o PowerPoint.</li>\r\n	<li>Hỗ trợ giao diện ban đ&ecirc;m Black Theme, hỗ trợ t&iacute;nh năng điều khiển bằng giọng n&oacute;i (Word).</li>\r\n</ol>\r\n\r\n<p><strong>Office 2019 Pro Plus bao gồm: Word, Excel, PowerPoint, Outlook, Publisher v&agrave; Access</strong></p>\r\n\r\n<p>Sau khi thanh to&aacute;n vui l&ograve;ng check mail hoặc Kho key c&aacute; nh&acirc;n để nhận sản phẩm.</p>', 1, '2020-05-26 07:58:34', '2020-05-30 03:33:04'),
(31, 'MICROSOFT WINDOWS 10 PROFESSIONAL (RETAIL KEY)', 18, 'microsoft-windows-10-professional-retail-key', 'win 10-457x213.png', 300000.00, NULL, '<p><strong>Chi tiết sản phẩm</strong></p>\r\n\r\n<p><strong>Hướng dẫn k&iacute;ch hoạt key&nbsp;</strong><strong>OEM</strong><strong>&nbsp;bản quyền cho Windows 10&nbsp;</strong></p>\r\n\r\n<p>Lưu ý:&nbsp; - Trước khi add code thì máy bạn phải cài Win 10 Pro và chưa Crack&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- Chỉ sử dụng tr&ecirc;n m&ocirc;̣t máy v&agrave; một t&agrave;i khoản Microsoft. Các l&acirc;̀n cài win sau tự đ&ocirc;̣ng active theo main của máy v&agrave; t&agrave;i khoản n&agrave;y.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Bước 1:</strong></p>\r\n\r\n<p>Nhấp v&agrave;o biểu tượng Windows ở g&oacute;c tr&aacute;i tr&ecirc;n thanh Task bar để mở Start Menu.&nbsp;Tại đ&acirc;y c&aacute;c bạn chọn v&agrave;o Settings c&oacute; biểu tượng h&igrave;nh b&aacute;nh răng để mở phần t&ugrave;y chọn chung tr&ecirc;n thiết bị.</p>\r\n\r\n<p><img src=\"https://hgeqic7azi.vcdn.com.vn/image/catalog/Bai-viet/win10/Image%201215.png\" /></p>\r\n\r\n<p><strong>Bước 2:&nbsp;</strong></p>\r\n\r\n<p>Tại đ&acirc;y c&aacute;c bạn chọn Update &amp; Security &gt; v&agrave; chọn v&agrave;o mục Activation. Ở chỗ n&agrave;y ch&iacute;nh l&agrave; nơi bạn c&oacute; thể nhập key Win 10. Bạn nhấp v&agrave;o &ldquo;Change product key&rdquo; v&agrave;o nhập key Win 10 v&agrave;o l&agrave; xong. L&uacute;c n&agrave;y Win 10 sẽ được k&iacute;ch hoạt tr&ecirc;n m&aacute;y t&iacute;nh của bạn.</p>\r\n\r\n<p><img src=\"https://hgeqic7azi.vcdn.com.vn/image/catalog/Bai-viet/win10/Image%201216.png\" /></p>\r\n\r\n<p><img src=\"https://hgeqic7azi.vcdn.com.vn/image/catalog/Bai-viet/win10/Image%201217.png\" /></p>\r\n\r\n<p><img src=\"https://hgeqic7azi.vcdn.com.vn/image/catalog/Bai-viet/win10/Image%201218.png\" /></p>', 1, '2020-05-26 07:59:56', '2020-05-30 03:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_sold`
--

CREATE TABLE `product_sold` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` text COLLATE utf8_unicode_ci NOT NULL,
  `total` double(10,2) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_sold`
--

INSERT INTO `product_sold` (`id`, `user_id`, `product`, `quantity`, `total`, `code`, `created_at`, `updated_at`) VALUES
(90, 10, '[\"FOR HONOR\\u2122 SEASON PASS\",\"DARK SOULS\\u2122 II: Scholar of the First Sin\"]', '[1,1]', 1525000.00, '[[{\"code\":\"BAJSHGSHGJ\"}],[{\"code\":\"AAAAA12312C\"}]]', '2020-05-29 07:37:21', '2020-05-29 07:37:21'),
(93, 10, '[\"DARK SOULS\\u2122 II: Scholar of the First Sin\",\"FOR HONOR\\u2122 SEASON PASS\"]', '[\"3\",\"2\"]', 3850000.00, '[[{\"code\":\"DSHAKHJK3\"},{\"code\":\"JJKJKHJKDHK\"},{\"code\":\"JHSAJHDKAS\"}],[{\"code\":\"JJKJKHJKDHK\"},{\"code\":\"JHSAJHDKAS\"}]]', '2020-05-29 08:14:32', '2020-05-29 08:14:32'),
(94, 10, '[\"DARK SOULS\\u2122 II: Scholar of the First Sin\",\"FOR HONOR\\u2122 SEASON PASS\"]', '[1,1]', 1525000.00, '[[{\"code\":\"JHSAJHDKAS\"}],[{\"code\":\"JHSAJHDKAS\"}]]', '2020-05-29 08:55:45', '2020-05-29 08:55:45'),
(95, 10, '[\"DARK SOULS\\u2122 II: Scholar of the First Sin\",\"FOR HONOR\\u2122 SEASON PASS\"]', '[1,1]', 1525000.00, '[[{\"code\":\"JHSAJHDKAS\"}],[{\"code\":\"JHSAJHDKAS\"}]]', '2020-05-29 08:56:02', '2020-05-29 08:56:02'),
(96, 10, '[\"DARK SOULS\\u2122 II: Scholar of the First Sin\",\"FOR HONOR\\u2122 SEASON PASS\"]', '[1,1]', 1525000.00, '[[{\"code\":\"JHSAJHDKAS\"}],[{\"code\":\"JHSAJHDKAS\"}]]', '2020-05-29 08:58:25', '2020-05-29 08:58:25'),
(97, 10, '[\"DARK SOULS\\u2122 II: Scholar of the First Sin\",\"FOR HONOR\\u2122 SEASON PASS\"]', '[\"2\",1]', 2325000.00, '[[{\"code\":\"HDJKSADJKA\"},{\"code\":\"QEUWYIWQY\"}],[{\"code\":\"HDJKSADJKA\"}]]', '2020-05-29 21:37:40', '2020-05-29 21:37:40'),
(98, 10, '[\"DARK SOULS\\u2122 II: Scholar of the First Sin\",\"FOR HONOR\\u2122 SEASON PASS\"]', '[\"2\",1]', 2325000.00, '[[{\"code\":\"HDJKSADJKA\"},{\"code\":\"QEUWYIWQY\"}],[{\"code\":\"HDJKSADJKA\"}]]', '2020-05-29 21:38:32', '2020-05-29 21:38:32'),
(99, 10, '[\"DARK SOULS\\u2122 II: Scholar of the First Sin\",\"FOR HONOR\\u2122 SEASON PASS\"]', '[\"2\",1]', 2325000.00, '[[{\"code\":\"QEUWYIWQY\"},{\"code\":\"23KSJKDHKD\"}],[{\"code\":\"QEUWYIWQY\"}]]', '2020-05-29 21:40:34', '2020-05-29 21:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(10) NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `user` int(10) NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `condition` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `transaction_code`, `amount`, `user`, `desc`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'RAYICIMLMZ', 200000.00, 6, 'Nạp tiền vào tài khoản BKAPSHOP', 'Thanh toán qua vnpay', '2020-05-30 03:00:17', '2020-05-30 03:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `money`, `full_name`, `email`, `phone`, `address`, `password`, `remember_token`, `group`, `created_at`, `updated_at`) VALUES
(6, 'hieu', 89302001.00, 'Hiếu Hoàng', 'hieu@gmail.com', '0336907979', '54 Triều Khúc - Thanh Xuân - Hà Nội', '$2y$10$4RCDpM1/fSR1ARZXpvoNHu1.E8MwKVAXxwEFeZVF7AHPMezLR65im', '0otPCflRdCOY9W5T3yPtxGfr0Id3wupaSOCTZbG3DwlMVpiJ7QspUFCmuKXM', 'admin', '2018-01-25 09:48:19', '2020-05-29 17:00:00'),
(7, '1234', 0.00, NULL, '1234@gmail.com', NULL, NULL, '$2y$10$sSmh9sVS3BaxOVrSKdaXhu6aAVjH08JSMAJM.zS6k4aJF8PNy0mki', NULL, 'customer', '2018-01-25 09:49:17', '2018-01-25 09:49:17'),
(9, 'bkap', 0.00, NULL, 'bkap@gmail.com', NULL, NULL, '$2y$10$kokcphpg151OXYteFF1V2eB.kLrmdDC71XDtHarTm66KbEzxuh50y', 'isxhze1ZVNRygUgFbsAO6FkvOPntFQjbEWTJYuWW8VgOMqRHYjSK8YcuChMm', 'admin', '2018-01-26 01:20:45', '2018-01-26 01:20:45'),
(10, 'nguyenkhai', 34807223.00, NULL, 'nguyenkhai321ls@gmail.com', NULL, NULL, '$2y$10$J3KEYJAa/O4FY0mgjD.sBOent4P2nOBPEccQPr7/ukPDUSEl8J3Tq', 'P5RNiURfQQLgEcrEXbVx84XGUC1ucHmCHnHyBqvTQnWXbv7RxXdJ6x9dF4ld', 'customer', '2020-05-27 17:00:00', '2020-05-29 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sold`
--
ALTER TABLE `product_sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=564;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_sold`
--
ALTER TABLE `product_sold`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
