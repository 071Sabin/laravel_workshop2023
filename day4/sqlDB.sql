-- --------------------------------------------------------
-- Host:                         wshop.cpcm5mpbdjt1.ap-south-1.rds.amazonaws.com
-- Server version:               8.0.30 - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for video_site
CREATE DATABASE IF NOT EXISTS `video_site` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `video_site`;

-- Dumping structure for table video_site.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table video_site.admins: ~0 rows (approximately)

-- Dumping structure for table video_site.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table video_site.categories: ~0 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Funny', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Education', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Craft', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 'aaaaaaas', '2023-01-12 15:27:14', '2023-01-12 15:27:14'),
	(5, 'Craft123', '2023-01-12 15:29:13', '2023-01-12 15:29:13'),
	(6, 'dfgdfsgdsfgdsfgfd', '2023-01-12 15:50:09', '2023-01-12 15:50:09'),
	(7, 'cat', '2023-01-12 16:05:57', '2023-01-12 16:05:57'),
	(8, 'vishnu', '2023-01-12 16:06:03', '2023-01-12 16:06:03'),
	(9, 'lokesh', '2023-01-12 16:07:52', '2023-01-12 16:07:52'),
	(10, 'Vlogs', '2023-01-12 16:09:14', '2023-01-12 16:09:14'),
	(11, 'PASAM LOKESH', '2023-01-12 16:09:45', '2023-01-12 16:09:45'),
	(12, 'Ashok', '2023-01-12 16:11:28', '2023-01-12 16:11:28'),
	(13, 'Chanakya', '2023-01-12 16:12:21', '2023-01-12 16:12:21'),
	(14, 'ujwal', '2023-01-12 16:13:12', '2023-01-12 16:13:12'),
	(15, 'Neelesh', '2023-01-12 16:13:35', '2023-01-12 16:13:35'),
	(16, 'sabin', '2023-01-12 16:13:50', '2023-01-12 16:13:50'),
	(17, 'shubham', '2023-01-12 16:15:30', '2023-01-12 16:15:30'),
	(18, 'dc evfr', '2023-01-12 16:16:10', '2023-01-12 16:16:10'),
	(19, 'sabin123', '2023-01-12 10:52:28', '2023-01-12 10:52:28');

-- Dumping structure for table video_site.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table video_site.contacts: ~0 rows (approximately)
INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'abc', 'pqr@asfd.com', '8888888888', 'hi', 'hello asdfasd fasdfsaf asdf asdf sadf', '2023-01-12 15:03:37', '2023-01-12 15:03:37'),
	(2, 'Ashok Poudel', 'abc@xyz', '8009892588', 'Hii', 'TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest', '2023-01-12 15:08:19', '2023-01-12 15:08:19'),
	(3, 'Abhi', 'abs@afg.com', '2563458955', 'asdfghjk', 'qqqqqqqqqqqqqqqqqqqwertyuiopasdfghjklzxcvbnm', '2023-01-12 15:09:40', '2023-01-12 15:09:40'),
	(5, 'Aakash', 'aakushah@gmail.com', '9823276542', 'Namaste everyone', 'Namaste everyoneNamaste everyoneNamaste everyoneNamaste everyoneNamaste everyoneNamaste everyoneNamaste everyoneNamaste everyone', '2023-01-12 15:27:55', '2023-01-12 15:27:55'),
	(6, 'gowri', 'gow@gmail.com', '1234567890', 'hiii', 'abcdefghijklmnopqrstuvwxyz1234567', '2023-01-12 15:43:04', '2023-01-12 15:43:04'),
	(7, 'manan', 'modi12@gmail.com', '9999999999', 'abcd', 'djchgbgkhrig\r\nkvjdhbidhgjhgbc sekugif', '2023-01-12 15:45:23', '2023-01-12 15:45:23');

-- Dumping structure for table video_site.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table video_site.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `profile_pic`, `created_at`, `updated_at`) VALUES
	(1, 'Raj', '9898990000', 'raj@raj.com', '123', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 'Romit', '9898990000', 'Romit@abc.com', '123', NULL, '2023-01-12 12:22:33', '2023-01-12 12:22:33'),
	(5, 'Sunil', '9898990000', 'Romit@abc', '123', NULL, '2023-01-12 12:26:41', '2023-01-12 12:26:41'),
	(6, 'Neelesh', '9059974498', 'nallurineelesh05@gmail.com', 'Neelesh@2002', NULL, '2023-01-12 14:15:50', '2023-01-12 14:15:50'),
	(7, 'Neelesh', '9059974498', 'nallurineelesh05@gmail.com', 'Neelesh@2002', NULL, '2023-01-12 14:15:55', '2023-01-12 14:15:55'),
	(8, 'Neelesh', '9059974498', 'nallurineelesh05@gmail.com', 'Neelesh@2002', NULL, '2023-01-12 14:16:14', '2023-01-12 14:16:14'),
	(9, 'Neelesh', '9059974498', 'nallurineelesh05@gmail.com', 'Neelesh2002', NULL, '2023-01-12 14:20:37', '2023-01-12 14:20:37'),
	(10, 'Neelesh', '9059974498', 'nallurineelesh05@gmail.com', 'Neelesh2002', NULL, '2023-01-12 14:20:56', '2023-01-12 14:20:56'),
	(11, 'Neelesh', '9059974498', 'nallurineelesh05@gmail.com', 'Neelesh2002', NULL, '2023-01-12 14:24:57', '2023-01-12 14:24:57'),
	(12, 'Neelesh', '9059974498', 'nallurineelesh05@gmail.com', 'Neelesh2002', NULL, '2023-01-12 14:26:22', '2023-01-12 14:26:22'),
	(13, 'Chanakya', '7382026283', 'jallepallichanakya3410@gmail.com', 'Chanu058', NULL, '2023-01-12 14:28:11', '2023-01-12 14:28:11'),
	(14, 'Chanakya', '7382026283', 'jallepallichanakya3410@gmail.com', 'Chanu058', NULL, '2023-01-12 14:28:18', '2023-01-12 14:28:18'),
	(15, 'Chanakya', '7382026283', 'jallepallichanakya3410@gmail.com', 'Chanu058', NULL, '2023-01-12 14:28:20', '2023-01-12 14:28:20'),
	(16, 'Lokesh', '9618625679', 'lokeshpasam29@gmail.com', 'Lok291301', NULL, '2023-01-12 14:47:23', '2023-01-12 14:47:23'),
	(17, 'Lokesh', '9618625679', 'lokeshpasam29@gmail.com', 'Lok291301', NULL, '2023-01-12 14:47:35', '2023-01-12 14:47:35'),
	(18, 'ABC', '2222222222', 'pqr@abc.com', 'aaaaaa', 'profile_pics/yIU78Y5TpicKA2Aw3VYgPzOXreG4nXaLhYqxn0F3.jpg', '2023-01-12 14:59:08', '2023-01-12 14:59:08'),
	(19, 'Heyyy', '2222222222', 'pqr@abc.com', '$2y$10$JnlfrDfqgV6L4cVlFSlGzOCKOanwAdferS8vn1eBqRxraziyoLBze', 'profile_pics/OzSbDQqBKB4Fu8WSw8sGrwv67qLpxXsKnXBVh35y.jpg', '2023-01-12 15:00:27', '2023-01-12 15:00:27'),
	(20, 'Ashok Poudel', '8009892588', 'ashokpoudel34@gmail.com', '$2y$10$qZbJjhiCHOfbqkSLR6lY7uW5cSn9ldsZQ7nRvCCi1unvCqrSzGggW', 'profile_pics/gkRm0RpMgTLWPMfIANxoGLZycaHGyJFZBCKZjw8E.jpg', '2023-01-12 15:03:17', '2023-01-12 15:03:17'),
	(21, 'Abhi', '2563458955', 'abs@afg.com', '$2y$10$QIXbiv30oW0iQRRcP7hmEufSRS9aDc8qOiM.zv8IsifVuV/ee9OL2', 'profile_pics/J9zDRDOYKwdNLrcxiQFkwscxlEVASdhaLDJ7LXT6.jpg', '2023-01-12 15:05:30', '2023-01-12 15:05:30'),
	(22, 'gghgd', '9876789778', 'jaylathiya8@gmail.com', '$2y$10$Z75c38O0a4H5vch4F98Jb.ItUPtila.V71XsWRTHhmWSMOjZXQiry', 'profile_pics/amEbBPMezDwsJ6gPCz1RGT9o6CvfkkQTEQ7tT4FJ.jpg', '2023-01-12 15:14:51', '2023-01-12 15:14:51'),
	(23, 'aakash', '9844107544', 'aakushah2@gmail.com', '$2y$10$dMWyv/tfV2FmPRYRXi76L.55LI4k4dDqGfpzDPFvsnxv8lY5DcJ2K', 'profile_pics/RE3y0NogbrPxx78feUilHLZzl7LErWuPYtEQsm34.jpg', '2023-01-12 15:12:12', '2023-01-12 15:12:12'),
	(24, 'gowri', '1234567890', 'gow@gmail.com', '$2y$10$pdlyEvodxF2.72cymP0ywuEwALPmEjBKNstkSFk7JvX3ovG7AQtra', 'profiles/Ytwu7EnqXJ4bPKHfq70yvSdR1K77tdfzk6Pg9nTA.jpg', '2023-01-12 15:11:20', '2023-01-12 15:11:20'),
	(25, 'abc', '1234567890', 'abc@abc.com', '$2y$10$dKsQcLv.1ADUYtuy4hv3/e1a3PibvUhS6jaOP.FXNq8q35zZM0Z2u', 'prifile_pictures/Bs9esp2DkGifvmyb0C2ZKBvOGEjiu0z1njxGr3cp.jpg', '2023-01-12 15:12:10', '2023-01-12 15:12:10'),
	(28, 'sabin', '1111111111', 'sabin@gmail.com', '$2y$10$caHMKgtvComd1Qe7oEQ2xun36LZFu7FkugqQwUOzqHE053F3e1Oky', 'profile_pics/aDKqOAZfTTrCY4QwYK1pmLj9yO8MCtyBQJFXLGLz.jpg', '2023-01-12 10:07:13', '2023-01-12 10:07:13'),
	(30, 'Chandan Moulick', '8333802472', 'cmoulick888@gmail.com', '$2y$10$BC3e/FYvjPpnbVoFGqEkn.i0ctA7wzY9burQC9Jy5mGyzkCBZGz16', 'profile_pics/t8OrThHwNwOMf9v74nGDYZUUhZ9R0pUsPNLdCr14.jpg', '2023-01-12 16:23:39', '2023-01-12 16:23:39');

-- Dumping structure for table video_site.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `video_file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table video_site.videos: ~0 rows (approximately)
INSERT INTO `videos` (`id`, `category_id`, `user_id`, `title`, `description`, `thumb`, `video_file`, `created_at`, `updated_at`) VALUES
	(1, 3, 5, 'SOme Video', 'abc', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 1, 5, 'SOme other video', 'pqr', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 1, 1, 'Heyyyy test', 'hello asdfasdf sadfsad fsdafasdf df', 'thumbs/g5Ypyj5fXmBg6iYBeqS1YbuPFeMFYeg805U537LJ.jpg', 'videos/OvOX6Mx1lvTOOurJx7QlZE31SqI61OxG5Lj1a3Km.mp4', '2023-01-12 15:16:33', '2023-01-12 15:16:33'),
	(4, 6, 1, 'dfadsfadffdsf', 'asdfasdfsadfasd fadsfg asdf asfsd', 'thumbs/5H8R91tUdZVIl9xjTnB534HPAZYO40vmWtUaxmR6.jpg', 'videos/AmeO2afcHMBBbn0hbaEW0C7toHd5sB0IrLl6CboU.mp4', '2023-01-12 15:53:43', '2023-01-12 15:53:43');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
