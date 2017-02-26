-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2017 at 04:30 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `cat`, `created_at`, `updated_at`) VALUES
(16, 'friendly', 1, '2016-10-25 19:10:24', '2016-10-25 19:10:24'),
(17, 'Funny', 1, '2016-10-25 19:10:46', '2016-10-25 19:10:46'),
(18, 'Loving', 1, '2016-10-25 19:11:05', '2016-10-25 19:11:05'),
(19, 'Peaceful', 1, '2016-10-25 19:11:21', '2016-10-25 19:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(14, 'Howdy everyone', 1, '2016-09-15 01:13:45', '2016-09-15 01:13:45'),
(15, 'Howdy everyone', 1, '2016-09-15 01:24:38', '2016-09-15 01:24:38'),
(16, 'Howdy everyone', 1, '2016-09-15 01:36:12', '2016-09-15 01:36:12'),
(17, 'Howdy everyone', 1, '2016-09-15 01:41:23', '2016-09-15 01:41:23'),
(18, 'Howdy everyone', 1, '2016-09-15 01:44:49', '2016-09-15 01:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taric_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_12_134624_creat_products_table', 2),
('2016_09_14_085157_create_chat_messages_table', 3),
('2016_10_11_112419_creat_adult_name_table', 4),
('2016_10_11_113126_creat_baby_name_table', 4),
('2016_10_11_153150_creat_people_table', 5),
('2016_10_13_142357_creat_names_table', 6),
('2016_10_13_164405_create_characters_table', 7),
('2016_12_08_035053_create_items_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat` int(11) NOT NULL,
  `meaning` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `name`, `gender`, `cat`, `meaning`, `created_at`, `updated_at`) VALUES
(9, 'Adam ', 'male', 2, 'Man of earth.     \r\nCelebrity that shares this name:  \r\n Adam Levine (singer).', '2016-10-18 14:59:24', '2016-11-07 12:33:50'),
(10, 'Aiden', 'male', 2, 'Born of fire.', '2016-10-18 15:14:22', '2016-10-18 15:14:22'),
(11, 'Alastair', 'male', 2, 'The defender of men.', '2016-10-19 23:26:59', '2016-10-19 23:26:59'),
(12, 'Alexander', 'male', 2, 'The great protector.  \r\nCelebrity that shares this name: Alexander Graham Bell (inventor).  ', '2016-10-19 23:28:50', '2016-11-07 12:33:58'),
(13, 'Andrew ', 'male', 2, 'Manly, valiant one.  ', '2016-10-19 23:29:12', '2016-10-19 23:29:12'),
(14, 'Austin ', 'male', 2, 'Regard with great respect.', '2016-10-19 23:32:50', '2016-10-19 23:32:50'),
(15, 'Baron', 'male', 2, 'The nobleman. ', '2016-10-19 23:34:14', '2016-11-07 12:33:27'),
(18, 'Barrett ', 'male', 2, 'Bear-like one.', '2016-10-19 23:35:05', '2016-10-19 23:35:05'),
(19, 'Braden ', 'male', 2, 'From the Broad Valley.', '2016-10-19 23:35:27', '2016-11-07 12:34:33'),
(20, 'Ben ', 'male', 2, ' The mountain peak.    \r\n Celebrity that shares this name: Ben Affleck (actor). ', '2016-10-19 23:36:24', '2016-11-07 12:38:44'),
(21, 'Brian ', 'male', 2, 'The noble and strong one. ', '2016-10-19 23:37:33', '2016-10-21 02:29:10'),
(22, 'Byron', 'male', 2, 'Bear–like one.', '2016-10-20 19:34:44', '2016-10-20 19:34:44'),
(23, 'Carson', 'male', 2, 'Son of the marsh-dwellers.', '2016-10-20 19:35:07', '2016-10-20 19:35:07'),
(24, 'Casey ', 'male', 2, 'The brave one.', '2016-10-20 19:35:34', '2016-11-07 12:38:28'),
(25, 'Channing ', 'male', 2, 'The young wolf.    \r\nCelebrity that shares this name: Channing Tatum (actor). ', '2016-10-20 19:36:11', '2016-10-21 02:29:54'),
(26, 'Charles ', 'male', 2, 'The manly one.', '2016-10-20 19:36:41', '2016-10-20 19:36:41'),
(27, 'Connor ', 'male', 2, 'The much wanted one.', '2016-10-20 19:37:10', '2016-10-20 19:37:10'),
(28, 'Conrad ', 'male', 2, 'The experienced advisor.', '2016-10-20 19:37:36', '2016-10-20 19:37:36'),
(29, 'Craig ', 'male', 2, 'The rocky hill.', '2016-10-20 19:37:59', '2016-10-20 19:37:59'),
(30, 'Daniel ', 'male', 2, 'The ruler of the world.   \r\nCelebrity that shares this name: Daniel Radcliffe (actor).   ', '2016-10-20 19:39:27', '2016-10-21 02:30:15'),
(31, 'Dirk ', 'male', 2, 'The ruler of people.', '2016-10-20 19:39:42', '2016-10-20 19:39:42'),
(32, 'Dominic ', 'male', 2, 'Belonging to the heavens.', '2016-10-20 19:40:37', '2016-10-20 19:40:37'),
(33, 'Edmond ', 'male', 2, 'Guardian of the riches.', '2016-10-20 19:41:01', '2016-10-20 19:41:01'),
(34, 'Edward ', 'male', 2, 'The happy protector.  \r\nCelebrity that shares this name:  Edward Norton (actor). ', '2016-10-20 19:41:21', '2016-10-21 02:30:38'),
(35, 'Eldon ', 'male', 2, 'The respected one.', '2016-10-20 19:41:38', '2016-10-20 19:41:38'),
(36, 'Ethan ', 'male', 2, 'The firm and strong one.', '2016-10-20 19:42:01', '2016-10-20 19:42:01'),
(37, 'Evan ', 'male', 2, ' The young warrior .', '2016-10-20 19:42:36', '2016-10-20 19:42:36'),
(38, 'Everett ', 'male', 2, 'The wild boar.', '2016-10-20 19:42:57', '2016-10-20 19:42:57'),
(39, 'Felix ', 'male', 2, 'The prosperous one. ', '2016-10-20 19:43:24', '2016-10-20 19:43:24'),
(40, 'Frederick ', 'male', 2, 'The peaceful ruler. ', '2016-10-20 19:43:43', '2016-10-20 19:43:43'),
(41, 'Gabriel ', 'male', 2, ' A man of the heavens. ', '2016-10-20 19:44:09', '2016-10-20 19:44:09'),
(42, 'Garret ', 'male', 2, ' Strength of the spear. ', '2016-10-20 19:44:33', '2016-10-20 19:44:33'),
(43, 'Grayson ', 'male', 2, 'Son of the wise one.', '2016-10-20 19:44:56', '2016-10-20 19:44:56'),
(44, 'Jacob ', 'male', 2, 'The conqueror.', '2016-10-20 19:45:16', '2016-10-20 19:45:16'),
(45, 'John ', 'male', 2, 'The merciful one.       \r\nCelebrity that shares this name:  John F. Kennedy (Entrepreneur).', '2016-10-20 19:45:37', '2016-10-21 02:31:50'),
(46, 'Kenneth ', 'male', 2, 'Born of fire.   Celebrity that shares this name: Kenneth Cole (Fashion Designer)  ', '2016-10-20 19:46:03', '2016-10-20 19:46:03'),
(47, 'Konrad ', 'male', 2, ' The bold speaker.', '2016-10-20 19:46:34', '2016-10-20 19:46:34'),
(48, 'Landon ', 'male', 2, 'The owner.', '2016-10-20 19:47:21', '2016-10-20 19:47:21'),
(49, 'Loren ', 'male', 2, ' The honorable one. ', '2016-10-20 19:47:39', '2016-10-20 19:47:39'),
(50, 'Logan ', 'male', 2, 'Of the forest.', '2016-10-20 19:48:14', '2016-10-20 19:48:14'),
(51, 'Lewis ', 'male', 2, ' The warrior.', '2016-10-20 19:48:44', '2016-10-20 19:48:44'),
(52, 'Magnus ', 'male', 2, ' The great one.', '2016-10-20 19:49:12', '2016-10-20 19:49:12'),
(53, 'Marcus ', 'male', 2, 'The hammer. ', '2016-10-20 19:49:40', '2016-10-20 19:49:40'),
(54, 'Michael ', 'male', 2, 'Heaven like.       \r\nCelebrity that shares this name:  Michael Phelps (athlete).', '2016-10-20 19:50:29', '2016-10-21 02:32:37'),
(55, 'Nicholas', 'male', 2, 'Victory of the people.', '2016-10-20 19:50:54', '2016-10-20 19:50:54'),
(56, 'Patrick', 'male', 2, ' The nobleman.      \r\nCelebrity that shares this name:  Patrick Dempsey (actor). ', '2016-10-20 19:51:19', '2016-10-21 02:33:07'),
(57, 'Peter ', 'male', 2, ' Of rock or stone. ', '2016-10-20 19:51:40', '2016-10-20 19:51:40'),
(58, 'Peyton ', 'male', 2, 'The royal one.    \r\nCelebrity that shares this name: Peyton Manning (athlete).   ', '2016-10-20 19:52:09', '2016-10-21 02:33:34'),
(59, 'Stephen ', 'male', 2, 'The crowned one. ', '2016-10-20 19:52:30', '2016-10-20 19:52:30'),
(60, 'Tristan ', 'male', 2, ' Voice of the people.', '2016-10-20 19:52:48', '2016-10-20 19:52:48'),
(61, 'Vance ', 'male', 2, 'Dweller of the marshland.', '2016-10-20 19:53:27', '2016-10-20 19:53:27'),
(62, 'Victor ', 'male', 2, 'The conqueror.', '2016-10-20 19:53:47', '2016-10-20 19:53:47'),
(63, 'Vincent ', 'male', 2, 'The victorious one.', '2016-10-20 19:54:06', '2016-10-20 19:54:06'),
(64, 'William ', 'male', 2, 'The protector.    \r\nCelebrity that shares this name: Prince William of England. ', '2016-10-20 19:57:16', '2016-10-21 02:34:05'),
(65, 'Winston ', 'male', 2, 'The joyful stone.  \r\nCelebrity that shares this name: Winston Churchill (World leader).  ', '2016-10-20 19:58:05', '2016-10-21 02:34:39'),
(66, 'Alexandra ', 'female', 2, 'Defender of mankind.', '2016-10-20 19:59:46', '2016-10-20 19:59:46'),
(67, 'Alexandria ', 'female', 2, 'Defender of mankind. ', '2016-10-20 20:00:11', '2016-10-21 02:35:28'),
(68, 'Anastasia ', 'female', 2, 'One who shall rise again.', '2016-10-20 20:00:45', '2016-10-20 20:00:45'),
(69, 'Andrea ', 'female', 2, 'The courageous one.', '2016-10-20 20:01:17', '2016-10-20 20:01:17'),
(70, 'Audrey ', 'female', 2, 'The strong one.     \r\nCelebrity that shares this name: Audrey Hepburn (actress) .', '2016-10-20 20:01:53', '2016-10-21 02:36:06'),
(71, 'Blair ', 'female', 2, 'Dweller of the plain. ', '2016-10-20 20:02:16', '2016-10-21 02:36:49'),
(72, 'Briana', 'female', 2, 'The noble one. ', '2016-10-20 20:03:00', '2016-10-20 20:03:00'),
(73, 'Caitlin ', 'female', 2, 'The Celtic form of Catherine', '2016-10-20 20:04:46', '2016-10-20 20:04:46'),
(74, 'Carmen ', 'female', 2, 'Of the song.      Celebrity that shares this name: Carmen Electra (actress)', '2016-10-20 20:05:40', '2016-10-20 20:05:40'),
(75, 'Carmen ', 'female', 2, 'Of the song.      \r\nCelebrity that shares this name: Carmen Electra (actress).', '2016-10-20 20:05:45', '2016-10-21 02:36:35'),
(76, 'Catherine ', 'female', 2, 'The pure one.      \r\nCelebrity that shares this name: Catherine the Great. ', '2016-10-20 20:06:13', '2016-10-21 02:38:08'),
(77, 'Clarissa ', 'female', 2, 'The clear one. ', '2016-10-20 20:06:48', '2016-10-20 20:06:48'),
(78, 'Courtney ', 'female', 2, 'Of the palace. ', '2016-10-20 20:07:41', '2016-10-20 20:07:41'),
(79, 'Elizabeth', 'female', 2, 'His perfection.  \r\nCelebrity that shares this name: Queen Elizabeth of England.', '2016-10-20 20:08:09', '2016-10-21 02:38:39'),
(80, 'Erika ', 'female', 2, 'The powerful one.', '2016-10-20 20:08:33', '2016-10-21 02:37:01'),
(81, 'Gabrielle ', 'female', 2, 'The heroine.     \r\nCelebrity that shares this name:  Gabrielle Reece (pro athlete). ', '2016-10-20 20:09:20', '2016-10-21 02:39:35'),
(83, 'Grace', 'female', 2, 'Blessing from above. \r\nCelebrity that shares this name: Grace Kelly (Actress).', '2016-10-21 02:41:36', '2016-10-21 02:41:36'),
(84, 'Hayley', 'female', 2, 'Of the hay meadow.', '2016-10-21 02:42:44', '2016-10-21 02:42:44'),
(85, 'Joan', 'female', 2, 'The gracious gift.      \r\nCelebrity that shares this name: Joan of Arc.', '2016-10-21 02:43:31', '2016-10-21 02:43:31'),
(86, 'Karla', 'female', 2, 'She that is strong. ', '2016-10-21 02:44:11', '2016-10-21 02:44:11'),
(87, 'Katarina', 'female', 2, 'The pure one.', '2016-10-21 02:44:50', '2016-10-21 02:44:50'),
(88, 'Katherine', 'female', 2, 'The pure one.     \r\nCelebrity that shares this name: Katherine Heigl (actress).', '2016-10-21 02:45:30', '2016-10-21 02:45:30'),
(89, 'Kate', 'female', 2, 'The pure one.     \r\nCelebrity that shares this name: Kate Middleton (Royalty).', '2016-10-21 02:46:21', '2016-10-21 02:46:21'),
(90, 'Katelyn', 'female', 2, 'Of pure beauty.', '2016-10-21 02:47:21', '2016-10-21 02:47:21'),
(91, 'Lauren', 'female', 2, 'The honorable one.     \r\nCelebrity that shares this name: Lauren Bacall (Actress).', '2016-10-21 02:48:05', '2016-10-21 02:48:05'),
(92, 'Laurel', 'female', 2, 'Of the trees. ', '2016-10-21 02:48:49', '2016-10-21 02:48:49'),
(93, 'Madeline', 'female', 2, 'The high tower.', '2016-10-21 02:49:21', '2016-10-21 02:49:21'),
(94, 'Maureen', 'female', 2, 'The great one.', '2016-10-21 02:50:22', '2016-10-21 02:50:22'),
(95, 'Maxine', 'female', 2, 'The great one.', '2016-10-21 02:51:04', '2016-10-21 02:51:04'),
(96, 'Megan ', 'female', 2, 'The pearl.      \r\nCelebrity that shares this name: Megan Fox (Actress).', '2016-10-21 02:52:00', '2016-10-21 02:52:00'),
(97, 'Miranda ', 'female', 2, 'The admirable one.      \r\nCelebrity that shares this name: Miranda Kerr (model).', '2016-10-21 02:52:40', '2016-10-21 02:52:40'),
(98, 'Nicola', 'female', 2, 'Victory of the people.  ', '2016-10-21 02:53:08', '2016-10-21 02:53:08'),
(99, 'Nicole', 'female', 2, 'Victory of the people.     \r\nCelebrity that shares this name: Nicole Kidman (actress).', '2016-10-21 02:53:45', '2016-10-21 02:53:45'),
(100, 'Nicolette ', 'female', 2, 'Victory of the people. ', '2016-10-21 02:54:19', '2016-10-21 02:54:19'),
(101, 'Nina ', 'female', 2, 'The mighty one.', '2016-10-21 02:54:45', '2016-10-21 02:54:45'),
(102, 'Nora', 'female', 2, 'The honorable one.', '2016-10-21 02:55:21', '2016-10-21 02:55:21'),
(103, 'Noreen', 'female', 2, 'The honorable one.', '2016-10-21 02:56:55', '2016-10-21 02:56:55'),
(104, 'Rebecca', 'female', 2, 'The faithful one.    \r\nCelebrity that shares this name: Rebecca Romijn (actress).', '2016-10-21 02:57:37', '2016-10-21 02:57:37'),
(105, 'Scarlett', 'female', 2, 'The red one.     \r\nCelebrity that shares this name:  Scarlett Johansson  (actress). ', '2016-10-21 02:58:21', '2016-10-21 02:58:21'),
(106, 'Simone', 'female', 2, 'The listener.     ', '2016-10-21 02:58:46', '2016-10-21 02:58:46'),
(107, 'Tara', 'female', 2, 'The tower.', '2016-10-21 02:59:50', '2016-10-21 02:59:50'),
(108, 'Victoria', 'female', 2, 'The victorious one.     \r\nCelebrity that shares this name: Victoria Beckham (singer/Fashion Designer). ', '2016-10-21 03:00:37', '2016-10-21 04:07:22'),
(109, 'Vivian', 'female', 2, 'Of life.', '2016-10-21 03:01:10', '2016-10-21 03:01:10'),
(110, 'Abigail', 'female', 1, 'Source of joy. ', '2016-10-21 03:02:27', '2016-10-21 03:02:27'),
(111, 'Adelaide', 'female', 1, 'Of good cheer. ', '2016-10-21 03:03:37', '2016-10-21 03:03:37'),
(112, 'Adrienne', 'female', 1, 'Of richness. ', '2016-10-21 03:04:23', '2016-10-21 03:04:23'),
(113, 'Adel ', 'female', 1, 'The serene one.      \r\nCelebrity that shares this name: Adel (Singer).', '2016-10-21 03:06:00', '2016-10-21 03:06:00'),
(114, 'Agnes', 'female', 1, 'The gentle one.     ', '2016-10-21 03:30:04', '2016-10-21 03:30:04'),
(115, 'Aileen', 'female', 1, 'Of the Light. ', '2016-10-21 03:30:42', '2016-10-21 03:30:42'),
(116, 'Aimee', 'female', 1, 'The beloved one.', '2016-10-21 03:31:08', '2016-10-21 03:31:08'),
(117, 'Amanda', 'female', 1, 'The lovable one.  \r\nCelebrity that shares this name: Amanda Seyfried (Actress).', '2016-10-21 03:31:47', '2016-10-21 03:31:47'),
(118, 'Anabelle', 'female', 1, 'Of joy. ', '2016-10-21 03:32:11', '2016-10-21 03:32:11'),
(119, 'Anthea', 'female', 1, 'Flower-like. ', '2016-10-21 03:32:45', '2016-10-21 03:32:45'),
(120, 'Ariana', 'female', 1, 'The shiny one.  \r\nCelebrity that shares this name: Ariana Grande (singer).', '2016-10-21 03:33:21', '2016-10-21 03:33:21'),
(121, 'Beatrice', 'female', 1, 'She who blesses.   ', '2016-10-21 03:33:52', '2016-10-21 03:33:52'),
(122, 'Bella', 'female', 1, 'The beautiful one.  \r\nCelebrity that shares this name: Bella Thorne (actress).', '2016-10-21 03:34:26', '2016-10-21 03:34:26'),
(123, 'Belle', 'female', 1, 'The beautiful one.  ', '2016-10-21 03:34:45', '2016-10-21 03:34:45'),
(124, 'Blythe', 'female', 1, 'The free spirit. ', '2016-10-21 03:35:33', '2016-10-21 03:35:33'),
(125, 'Bonnie ', 'female', 1, 'The lovely one.', '2016-10-21 03:36:00', '2016-10-21 03:36:00'),
(126, 'Camille', 'female', 1, 'The pure one. ', '2016-10-21 03:36:49', '2016-10-21 03:36:49'),
(127, 'Caroline', 'female', 1, 'Song of joy. ', '2016-10-21 03:37:12', '2016-10-21 03:37:12'),
(128, 'Chloe ', 'female', 1, 'The blooming one. ', '2016-10-21 03:37:59', '2016-10-21 03:37:59'),
(129, 'Ella', 'female', 1, 'Of the light. ', '2016-10-21 03:38:25', '2016-10-21 03:38:25'),
(130, 'Ellen', 'female', 1, 'Of the Light.      \r\nCelebrity that shares this name: Ellen Pompeo (actress).', '2016-10-21 03:38:52', '2016-10-21 03:38:52'),
(131, 'Faith', 'female', 1, 'Of faith and devotion.    \r\nCelebrity that shares this name: Faith Hill (singer).', '2016-10-21 03:39:20', '2016-10-21 03:39:20'),
(132, 'Frances', 'female', 1, 'Of the free.  ', '2016-10-21 03:40:09', '2016-10-21 03:40:09'),
(133, 'Georgia', 'female', 1, 'The earthly one.', '2016-10-21 03:40:37', '2016-10-21 03:40:37'),
(134, 'Helena ', 'female', 1, 'Of the light.    \r\nCelebrity that shares this name:  Helena Christensen (model).', '2016-10-21 03:41:19', '2016-10-21 03:41:19'),
(135, 'Hope', 'female', 1, 'The optimistic one.', '2016-10-21 03:41:42', '2016-10-21 03:41:42'),
(136, 'Idelle', 'female', 1, 'The happy one.', '2016-10-21 03:42:13', '2016-10-21 03:42:13'),
(137, 'Jillian', 'female', 1, 'The innocent one.', '2016-10-21 03:42:38', '2016-10-21 03:42:38'),
(138, 'Joy', 'female', 1, 'Of delight. ', '2016-10-21 03:43:05', '2016-10-21 03:43:05'),
(139, 'Juliana ', 'female', 1, 'The youthful one.', '2016-10-21 03:43:39', '2016-10-21 03:43:39'),
(140, 'Kara', 'female', 1, 'The sweet song. ', '2016-10-21 03:50:38', '2016-10-21 03:50:38'),
(141, 'Kyla', 'female', 1, 'The lovely one.', '2016-10-21 03:51:10', '2016-10-21 03:51:10'),
(142, 'Larissa', 'female', 1, 'The cheerful one.', '2016-10-21 03:51:33', '2016-10-21 03:51:33'),
(143, 'Luna', 'female', 1, 'Of the light.', '2016-10-21 03:52:02', '2016-10-21 03:52:02'),
(144, 'Mabel ', 'female', 1, 'The beautiful one.', '2016-10-21 03:52:33', '2016-10-21 03:52:33'),
(145, 'Melinda', 'female', 1, 'The grateful one.', '2016-10-21 03:53:06', '2016-10-21 03:53:06'),
(146, 'Melody', 'female', 1, 'Of the song.', '2016-10-21 03:53:26', '2016-10-21 03:53:26'),
(147, 'Molly', 'female', 1, 'Star of the sea.     \r\nCelebrity that shares this name: Molly Sims (model).', '2016-10-21 03:53:56', '2016-10-21 03:53:56'),
(148, 'Nadia', 'female', 1, 'One of hope.   ', '2016-10-21 03:54:27', '2016-10-21 03:54:27'),
(149, 'Nadine', 'female', 1, 'One of hope.   ', '2016-10-21 03:54:45', '2016-10-21 03:54:45'),
(150, 'Olivia', 'female', 1, 'Symbol of peace.    \r\nCelebrity that shares this name: Olivia Wilde (actress).', '2016-10-21 03:55:18', '2016-10-21 03:55:18'),
(151, 'Pamela', 'female', 1, 'Sweet as honey. ', '2016-10-21 03:55:46', '2016-10-21 03:55:46'),
(152, 'Paula', 'female', 1, 'The small one. \r\nCelebrity that shares this name: Paula Abdul (dancer/choreographer).', '2016-10-21 03:57:32', '2016-10-21 03:57:32'),
(153, 'Rachel ', 'female', 1, 'The innocent lamb.', '2016-10-21 03:58:08', '2016-10-21 03:58:08'),
(154, 'Rita', 'female', 1, 'The pearl.    \r\nCelebrity that shares this name: Rita Hayworth (actress). ', '2016-10-21 03:58:39', '2016-10-21 03:58:39'),
(155, 'Rose', 'female', 1, 'Of the flower. ', '2016-10-21 03:59:04', '2016-10-21 03:59:04'),
(156, 'Sadie ', 'female', 1, 'The princess. ', '2016-10-21 03:59:34', '2016-10-21 03:59:34'),
(157, 'Sarah ', 'female', 1, 'True princess.     \r\nCelebrity that shares this name: Sarah Brightman (singer).', '2016-10-21 04:00:15', '2016-10-21 04:00:15'),
(158, 'Tina', 'female', 1, 'The little one.', '2016-10-21 04:00:39', '2016-10-21 04:00:39'),
(159, 'Trina ', 'female', 1, 'The pure one.', '2016-10-21 04:01:03', '2016-10-21 04:01:03'),
(160, 'Violet', 'female', 1, 'The flower. ', '2016-10-21 04:02:09', '2016-10-21 04:02:09'),
(161, 'Willow', 'female', 1, 'Symbol of healing.', '2016-10-21 04:03:11', '2016-10-21 04:03:11'),
(162, 'Yolanda', 'female', 1, 'The violet flower. ', '2016-10-21 04:03:43', '2016-10-21 04:03:43'),
(163, 'Zoe', 'female', 1, 'Of life. ', '2016-10-21 04:04:09', '2016-10-21 04:04:09'),
(164, 'Aaron', 'male', 1, 'From the high mountain.   \r\nCelebrity that shares this name: Aaron Paul (actor). ', '2016-10-21 04:08:11', '2016-10-21 04:08:11'),
(165, 'Bradley', 'male', 1, 'From the broad meadow.  \r\nCelebrity that shares this name: Bradley Cooper (actor).  ', '2016-10-21 04:08:52', '2016-10-21 04:08:52'),
(166, 'Caleb', 'male', 1, 'The faithful one. ', '2016-10-21 04:10:07', '2016-10-21 04:10:07'),
(167, 'Curtis', 'male', 1, 'The courteous one.  ', '2016-10-21 04:10:41', '2016-10-21 04:10:41'),
(168, 'David', 'male', 1, 'The beloved one.     \r\nCelebrity that shares this name: David Beckham (pro athlete).  ', '2016-10-21 04:11:24', '2016-11-07 12:33:21'),
(169, 'Declan', 'male', 1, 'Full of goodness.   ', '2016-10-21 04:11:53', '2016-10-21 04:11:53'),
(170, 'Dillon', 'male', 1, 'Faithful like a lion. ', '2016-10-21 04:12:12', '2016-10-21 04:12:12'),
(171, 'Francis', 'male', 1, 'The free one.', '2016-10-21 04:12:33', '2016-10-21 04:12:33'),
(172, 'fraser', 'male', 1, 'The sweet berry.', '2016-10-21 04:12:55', '2016-10-21 04:12:55'),
(173, 'Frederick', 'male', 1, 'The peaceful ruler. ', '2016-10-21 04:13:40', '2016-10-21 04:13:40'),
(174, 'Gregory', 'male', 1, 'The vigilant watcher.  ', '2016-10-21 04:14:07', '2016-10-21 04:14:07'),
(175, 'Jeffrey', 'male', 1, 'The peace bringer.', '2016-10-21 04:14:39', '2016-10-21 04:14:39'),
(176, 'Jace', 'male', 1, 'The healer.', '2016-10-21 04:14:58', '2016-10-21 04:14:58'),
(177, 'Jacob', 'male', 1, 'Held by the heal. ', '2016-10-21 04:15:24', '2016-10-21 04:15:24'),
(178, 'Kent', 'male', 1, 'The bright one.', '2016-10-21 04:15:40', '2016-10-21 04:15:40'),
(179, 'Oliver', 'male', 1, 'Of the olive tree. ', '2016-10-21 04:16:03', '2016-10-21 04:16:03'),
(180, 'Adel', 'female', 3, 'The noble one.     \r\nCelebrity that shares this name: Adel (singer). ', '2016-10-21 04:24:22', '2016-10-21 04:24:22'),
(181, 'Alice', 'female', 3, 'The noble one.     ', '2016-10-21 04:24:44', '2016-10-21 04:24:44'),
(182, 'Alison', 'female', 3, 'The noble one.     \r\nCelebrity that shares this name: Alison Krauss (Singer).', '2016-10-21 04:25:22', '2016-10-21 04:25:22'),
(183, 'Alina', 'female', 3, 'The proud one.   ', '2016-10-21 04:26:12', '2016-10-21 04:26:12'),
(184, 'Amber', 'female', 3, 'The jewel.      \r\nCelebrity that shares this name: Amber Valletta (actress/model). ', '2016-10-21 04:26:57', '2016-10-21 04:26:57'),
(185, 'Angela ', 'female', 3, 'The angelic one.   \r\nCelebrity that shares this name: Angela Merkel (world leader).', '2016-10-21 04:27:32', '2016-10-21 04:27:32'),
(186, 'Angelica', 'female', 3, 'Of the angels. ', '2016-10-21 04:28:04', '2016-10-21 04:28:04'),
(187, 'Anne', 'female', 3, 'Of grace.      \r\nCelebrity that shares this name: Anne Hathaway (actress).', '2016-10-21 04:28:48', '2016-10-21 04:28:48'),
(188, 'Annette', 'female', 3, 'The gracious one.       \r\nCelebrity that shares this name: Annette Bening (actress).', '2016-10-21 04:29:26', '2016-10-21 04:29:26'),
(189, 'Brooke', 'female', 3, 'Of the stream.       \r\nCelebrity that shares this name: Brooke Shields (actress). ', '2016-10-21 04:30:02', '2016-10-21 04:30:02'),
(190, 'Claire', 'female', 3, 'The bright one.       \r\nCelebrity that shares this name: Claire Danes (actress).', '2016-10-21 04:30:42', '2016-10-21 04:30:42'),
(191, 'Cynthia', 'female', 3, 'The moon goddess.   \r\nCelebrity that shares this name: Cynthia Rowley (fashion designer). ', '2016-10-21 04:31:21', '2016-10-21 04:31:21'),
(192, 'Dawn', 'female', 3, 'Breaking of the day. ', '2016-10-21 04:33:03', '2016-10-21 04:33:03'),
(193, 'Elanor', 'female', 3, 'Shining light.      \r\nCelebrity that shares this name: Elanor Roosevelt (former first lady of the United States).', '2016-10-21 04:33:49', '2016-10-21 04:33:49'),
(194, 'Elizabeth', 'female', 3, 'His perfection.   \r\nCelebrity that shares this name: Queen Elizabeth of England.', '2016-10-21 04:34:29', '2016-10-21 04:35:35'),
(195, 'Emily', 'female', 3, 'Ambitious one.       \r\nCelebrity that shares this name: Emily Dickinson (Poet).\r\n', '2016-10-21 04:36:11', '2016-10-21 04:36:11'),
(196, 'Emma', 'female', 3, 'Whole one.        \r\nCelebrity that shares this name: Emma Watson (Actress.)', '2016-10-21 04:36:53', '2016-10-21 04:36:53'),
(197, 'Estelle', 'female', 3, 'The star.         \r\nCelebrity that shares this name: Estelle (Model).', '2016-10-21 04:37:28', '2016-10-21 04:37:28'),
(198, 'Eva', 'female', 3, 'The life giver.      \r\nCelebrity that shares this name: Eva Herzigova (model).', '2016-10-21 04:37:58', '2016-10-21 04:37:58'),
(199, 'Evelyn', 'female', 3, 'The life giver. ', '2016-10-21 04:38:32', '2016-10-21 04:38:32'),
(200, 'Gillian', 'female', 3, 'The youthful one.    \r\nCelebrity that shares this name: Gillian Anderson (actress).', '2016-10-21 04:39:12', '2016-10-21 04:39:12'),
(201, 'Hannah', 'female', 3, 'Blessed from above. ', '2016-10-21 04:39:44', '2016-10-21 04:39:44'),
(202, 'Justine', 'female', 3, 'The righteous one. ', '2016-10-21 04:40:08', '2016-10-21 04:40:08'),
(203, 'Keira', 'female', 3, 'Dark haired one.    \r\nCelebrity that shares this name: Keira Knightley (actress).', '2016-10-21 04:40:59', '2016-10-21 04:40:59'),
(204, 'Lucia', 'female', 3, 'Of the light. ', '2016-10-21 04:41:56', '2016-10-21 04:41:56'),
(205, 'Lucille', 'female', 3, 'Of the light. \r\nCelebrity that shares this name:  Lucille Ball (Actress).', '2016-10-21 04:42:37', '2016-10-21 04:42:37'),
(206, 'Margaret', 'female', 3, 'The pearl.    \r\nCelebrity that shares this name: Margaret Thatcher (World Leader). ', '2016-10-21 04:43:18', '2016-10-21 04:43:18'),
(207, 'Marissa', 'female', 3, 'Born of the sea. ', '2016-10-21 04:43:46', '2016-10-21 04:43:46'),
(208, 'Mary', 'female', 3, 'Star of the sea.       \r\nCelebrity that shares this name: Mary Queen of Scots.', '2016-10-21 04:44:23', '2016-10-21 04:44:23'),
(209, 'Maris', 'female', 3, 'Born of the sea. ', '2016-10-21 04:45:12', '2016-10-21 04:45:12'),
(210, 'Michelle', 'female', 3, 'Heaven like.         \r\nCelebrity that shares this name: Michelle Obama (First lady of the United States).', '2016-10-21 04:45:58', '2016-10-21 04:45:58'),
(211, 'Natalie', 'female', 3, 'Born at Christmas.     \r\nCelebrity that shares this name: Natalie Portman (actress). ', '2016-10-21 04:46:44', '2016-10-21 04:46:44'),
(212, 'Page', 'female', 3, 'The youthful one. ', '2016-10-21 04:47:11', '2016-10-21 04:47:11'),
(213, 'Patricia', 'female', 3, 'The noble one.   \r\nCelebrity that shares this name: Patricia Arquette (Actress).', '2016-10-21 04:47:48', '2016-10-21 04:47:48'),
(214, 'Robin', 'female', 3, 'Brilliant one.   \r\nCelebrity that shares this name: Robin Wright (actress).', '2016-10-21 04:48:19', '2016-10-21 04:48:19'),
(215, 'Ruth', 'female', 3, 'Friend to all. ', '2016-10-21 04:48:41', '2016-10-21 04:48:41'),
(216, 'Sandra', 'female', 3, 'Helper of mankind.     \r\nCelebrity that shares this name: Sandra Bullock (Actress).', '2016-10-21 04:49:11', '2016-10-21 04:49:11'),
(217, 'Selene', 'female', 3, 'Of the moon.  ', '2016-10-21 04:50:02', '2016-10-21 04:50:02'),
(218, 'Tess', 'female', 3, 'The harvester. ', '2016-10-21 04:50:35', '2016-10-21 04:50:35'),
(219, 'Thea', 'female', 3, 'The divine one. ', '2016-10-21 04:51:04', '2016-10-21 04:51:04'),
(220, 'Tiffany', 'female', 3, 'Appearance of god. ', '2016-10-21 04:51:36', '2016-10-21 04:51:36'),
(221, 'Veronica', 'female', 3, 'Of truth and purity.    \r\nCelebrity that shares this name: Veronica Lake (actress).', '2016-10-21 04:52:11', '2016-10-21 04:52:11'),
(222, 'Adam', 'male', 3, 'Man of earth.    \r\nCelebrity that shares this name: Adam Levine (singer). ', '2016-10-21 04:54:49', '2016-10-21 04:54:49'),
(223, 'Addison', 'male', 3, 'Son of Adam.', '2016-10-21 04:55:20', '2016-10-21 04:55:20'),
(224, 'Adrian', 'male', 3, 'Of the Adriatic, dark.', '2016-10-21 04:56:33', '2016-10-21 04:56:33'),
(225, 'Anthony', 'male', 3, 'The priceless one.    \r\nCelebrity that shares this name: Anthony Hopkins (actor). ', '2016-10-21 04:57:10', '2016-10-21 04:57:10'),
(226, 'Austin', 'male', 3, 'Regard with great respect.', '2016-10-21 04:57:37', '2016-10-21 04:57:37'),
(227, 'Benjamin', 'male', 3, 'Son of my right hand.', '2016-10-21 04:58:22', '2016-10-21 04:58:22'),
(228, 'Benton', 'male', 3, 'The moor dweller.', '2016-10-21 04:58:53', '2016-10-21 04:58:53'),
(229, 'Blaine', 'male', 3, 'Lean as a willow.\r\n', '2016-10-21 05:00:19', '2016-10-21 05:01:05'),
(230, 'Blake', 'male', 3, 'Fair complexioned.      \r\nCelebrity that shares this name:  Blake Shelton (singer).', '2016-10-21 05:01:37', '2016-10-21 05:01:37'),
(231, 'Brendan', 'male', 3, 'The traveler.  \r\nCelebrity that shares this name: Brendan Fraser (actor).', '2016-10-21 05:02:31', '2016-10-21 05:02:31'),
(232, 'Christian', 'male', 3, 'The noble follower.  \r\nCelebrity that shares this name: Christian Bale (actor).', '2016-10-21 05:03:09', '2016-10-21 05:03:09'),
(233, 'Christopher', 'male', 3, 'Nobel bearer.     \r\nCelebrity that shares this name: Christopher Columbus (explorer).  ', '2016-10-21 05:03:43', '2016-10-21 05:03:43'),
(234, 'Darian', 'male', 3, 'The wealthy king.', '2016-10-21 05:04:13', '2016-10-21 05:04:13'),
(235, 'Elliott', 'male', 3, 'Close to the heavens. ', '2016-10-21 05:04:46', '2016-10-21 05:04:46'),
(236, 'Emmett', 'male', 3, 'The hard working one.', '2016-10-21 05:05:30', '2016-10-21 05:05:30'),
(237, 'Frederick', 'male', 3, 'The peaceful ruler. ', '2016-10-21 05:06:27', '2016-10-21 05:06:27'),
(238, 'Gavin', 'male', 3, 'The white hawk.', '2016-10-21 05:06:51', '2016-10-21 05:06:51'),
(239, 'Gregory', 'male', 3, 'The watchful one.', '2016-10-21 05:07:25', '2016-10-21 05:07:25'),
(240, 'Harrison', 'male', 3, 'Son of Harold. \r\nCelebrity connection: Harrison Ford (actor).', '2016-10-21 05:07:59', '2016-10-21 05:07:59'),
(241, 'James', 'male', 3, 'One who takes over.   \r\nCelebrity who shares this name: James Cameron (Director).', '2016-10-21 05:08:42', '2016-10-21 05:08:42'),
(242, 'Jonathan', 'male', 3, 'The gift.  ', '2016-10-21 05:09:11', '2016-10-21 05:09:11'),
(243, 'Keaton', 'male', 3, 'Where the hawks go.', '2016-10-21 05:09:45', '2016-10-21 05:09:45'),
(244, 'Kenneth', 'male', 3, 'Born of fire.   \r\nCelebrity that shares this name: Kenneth Cole (fashion designer). ', '2016-10-21 05:10:14', '2016-10-21 05:10:14'),
(245, 'Mathew', 'male', 3, 'Gift from above.\r\nCelebrity that shares this name: Mathew McConaughey (actor). ', '2016-10-21 05:10:56', '2016-11-07 12:42:12'),
(246, 'Nathan', 'male', 3, 'The giving one.', '2016-10-21 05:11:25', '2016-10-21 05:11:25'),
(247, 'Owen', 'male', 3, 'Well-born.    \r\nCelebrity that shares this name: Owen Wilson (actor). ', '2016-10-21 05:11:55', '2016-10-21 05:11:55'),
(248, 'Quentin', 'male', 3, 'The fifth.  \r\nCelebrity that shares this name:  Quentin Tarantino (director).', '2016-10-21 05:12:32', '2016-10-21 05:12:32'),
(249, 'Quinn', 'male', 3, 'The wise one.', '2016-10-21 05:13:03', '2016-10-21 05:13:03'),
(250, 'Raymond', 'male', 3, 'The wise guardian. ', '2016-10-21 05:13:35', '2016-10-21 05:13:35'),
(251, 'Russell', 'male', 3, 'The red one.     \r\nCelebrity that shares this name: Russell Crowe (actor).  ', '2016-10-21 05:14:22', '2016-10-21 05:14:22'),
(252, 'Ryan', 'male', 3, 'The little king.     \r\nCelebrity that shares this name: Ryan Gosling (actor). ', '2016-10-21 05:14:54', '2016-10-21 05:14:54'),
(253, 'Samuel', 'male', 3, 'He who hears all.', '2016-10-21 05:15:38', '2016-10-21 05:15:38'),
(254, 'Sebastian', 'male', 3, 'The majestic one.', '2016-10-21 05:16:06', '2016-10-21 05:16:06'),
(255, 'Simon', 'male', 3, 'The visionary.     \r\nCelebrity that shares this name: Simon Cowell (entrepreneur).  ', '2016-10-21 05:16:40', '2016-10-21 05:16:40'),
(256, 'Spencer', 'male', 3, 'He who gives out goods.  ', '2016-10-21 05:17:05', '2016-10-21 05:17:05'),
(257, 'Stuart', 'male', 3, 'Guardian of the house.', '2016-10-21 05:17:45', '2016-10-21 05:17:45'),
(258, 'Thomas', 'male', 3, 'The dependable one.    \r\nCelebrity that shares this name: Thomas Jefferson (U.S. president).   ', '2016-10-21 05:18:22', '2016-10-21 05:18:22'),
(259, 'Timothy', 'male', 3, 'He who honors him.  ', '2016-10-21 05:18:51', '2016-10-21 05:18:51'),
(260, 'Dean', 'male', 2, 'The leader or head person.  \r\nCelebrity that shares this name: Dean Cain (Actor). ', '2016-11-07 12:21:59', '2016-11-07 12:38:39'),
(261, 'Franklin ', 'male', 1, 'The free man.   ', '2016-11-07 12:26:02', '2016-11-07 12:39:13'),
(262, 'Roger', 'male', 2, 'The renowned spearman.  \r\nCelebrity that shares this name: Roger Federer (pro athlete).', '2016-11-07 12:30:33', '2016-11-07 12:39:40'),
(263, 'Liam', 'male', 2, 'The determined guardian. \r\nCelebrity that shares this name: Liam Neeson (actor).', '2016-11-07 12:38:17', '2016-11-07 12:39:51'),
(264, 'Travis', 'male', 3, 'He who crosses the crossroads.\r\n\r\n', '2016-11-07 12:47:46', '2016-11-07 12:47:46'),
(265, 'Taylor', 'male', 1, 'The tailor. \r\nCelebrity that shares this name: Taylor Lautner (actor)', '2016-11-07 12:51:36', '2016-11-07 12:51:36'),
(266, 'Kevin ', 'male', 2, 'Handsome by birth.\r\nCelebrity that shares this name: Kevin Costner (actor).', '2016-11-07 12:54:26', '2016-11-07 12:54:26'),
(267, 'Brad', 'male', 1, 'The broad meadow.\r\nCelebrity that shares this name: Brad Pitt (actor).', '2016-11-07 12:56:20', '2016-11-07 12:56:20'),
(268, 'Max', 'male', 2, 'The greatest one. \r\n', '2016-11-07 12:59:04', '2016-11-07 12:59:04'),
(269, 'Maximilian', 'male', 2, 'The greatest one. \r\n', '2016-11-07 13:01:16', '2016-11-07 13:01:16'),
(270, 'Sterling', 'male', 2, 'Of the highest quality.\r\n', '2016-11-07 13:02:36', '2016-11-07 13:02:36'),
(271, 'Sam ', 'male', 3, 'He who hears all.', '2016-11-07 13:06:12', '2016-11-07 13:06:12'),
(272, 'Heidi ', 'female', 2, 'The honorable one.\r\nCelebrity that shares this name: Heidi Klum (model/TV personality). ', '2016-11-07 13:08:50', '2016-11-07 13:08:50'),
(273, 'Marie', 'female', 1, 'The wished for child.\r\nCelebrity that shares this name: Marie Antoinette (Royalty). ', '2016-11-07 13:42:59', '2016-11-07 13:42:59'),
(274, 'Elodie', 'female', 2, 'Foreign riches. ', '2016-11-07 13:46:44', '2016-11-07 13:46:44'),
(275, 'Bernadette ', 'female', 2, 'Brave as a bear.\r\n', '2016-11-07 13:48:33', '2016-11-07 13:48:33'),
(276, 'Cindy ', 'female', 1, 'Of the moon. \r\nCelebrity that shares this name: Cindy Crawford (model).', '2016-11-07 13:51:37', '2016-11-07 13:51:37'),
(277, 'Marnie', 'female', 1, 'Of the sea. \r\n', '2016-11-07 13:53:11', '2016-11-07 13:53:11'),
(278, 'Harlow', 'female', 2, 'Of the army hill. ', '2016-11-07 13:54:45', '2016-11-07 13:54:45'),
(279, 'Harper', 'female', 3, 'The harp player. ', '2016-11-07 13:56:51', '2016-11-07 13:56:51'),
(280, 'Avery', 'female', 3, 'Of the magical counsel. \r\n\r\n', '2016-11-07 13:58:29', '2016-11-07 13:58:29'),
(281, 'Deanna ', 'female', 3, 'The divine one. ', '2016-11-07 14:01:15', '2016-11-07 14:01:15'),
(282, 'Kylie', 'female', 1, 'The beautiful spirit.\r\nCelebrity that shares this name: Kylie Minogue (singer). ', '2016-11-07 14:02:58', '2016-11-07 14:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carear` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Not Given',
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `age_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'years',
  `age_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'adult',
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'male',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `carear`, `age`, `age_unit`, `age_group`, `gender`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Mischelle Edvinson', 'dancing teacher', '22', 'years', 'adult', 'female', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in ...               ', '2016-10-12 03:44:04', '2016-10-12 03:44:04'),
(9, 'Maggie Gyllenhaal', 'dancing teacher', '21', 'years', 'adult', 'male', 'In Pellentesque Faucibus Vestibulum. Nulla Lorem ipsum dolor sit amet, consectetur ...        ', '2016-10-12 03:45:23', '2016-10-12 03:45:23'),
(10, 'Garcelle Beauvais', 'singing teacher', '25', 'years', 'adult', 'female', 'In Condimentum Facilisis Porta. Sed Nec Diam Eu Lorem ipsum dolor ...', '2016-10-12 03:46:30', '2016-10-12 03:46:30'),
(11, 'Peter Jacobson ', 'footbal teacher', '23', 'years', 'adult', 'male', 'Lorem Ipsum Dolor Sit Amet, Ctetur Adipiscing Lorem ipsum dolor sit ... ', '2016-10-12 03:47:38', '2016-10-12 03:47:38'),
(12, 'Stéphane Dargis ', 'dancing teacher', '22', 'years', 'adult', 'female', 'Nulla At Nulla Justo, Eget Lorem ipsum dolor sit amet, consectetur ...                                ', '2016-10-12 03:48:32', '2016-10-12 03:48:32'),
(13, 'Maxime Laferriere ', 'singing teacher', '21', 'years', 'adult', 'female', 'Etiam At Risus Et Lorem ipsum dolor sit amet, consectetur adipiscing ...          ', '2016-10-12 03:49:21', '2016-10-12 03:49:21'),
(14, 'Rachelle Lefevre', 'swimming teacher', '23', 'years', 'adult', 'female', ' Vivamus Hendrerit Arcu Sed Erat Molestie Lorem ipsum dolor sit amet, ...                               ', '2016-10-12 03:50:20', '2016-10-12 03:50:20'),
(15, 'Rebecca Hall ', 'dancing teacher', '21', 'years', 'adult', 'male', 'Suspendisse Dictum Feugiat Nisl Ut Dapibus Lorem ipsum dolor sit amet, ...                                ', '2016-10-12 03:50:57', '2016-10-12 03:50:57'),
(16, 'Gwyneth Paltrow', 'swimming teacher', '23', 'years', 'adult', 'female', 'Sed Auctor Neque Eu Tellus Lorem ipsum dolor sit amet, consectetur ... ', '2016-10-12 03:51:56', '2016-10-12 03:51:56'),
(18, 'James Lea', 'Not Given', '0', 'years', 'adult', 'male', 'I am James Lea', '2016-10-13 04:32:45', '2016-10-13 04:32:45'),
(19, 'Bang', 'Not Given', '0', 'years', 'baby', 'female', 'I am Big Bang', '2016-10-13 05:36:25', '2016-10-13 05:36:25'),
(20, 'Jim Yea', 'Not Given', '0', 'years', 'baby', 'male', 'Hi, I am a big man.', '2016-10-13 05:40:36', '2016-10-13 05:40:36'),
(21, 'Peace Lover', 'Not Given', '0', 'years', 'baby', 'male', 'I love smile...', '2016-10-13 05:41:15', '2016-10-13 05:41:15'),
(22, 'Cute Cube', 'Not Given', '0', 'years', 'baby', 'female', 'I am a cute girl', '2016-10-13 05:42:05', '2016-10-13 05:42:05'),
(23, 'Small Flower', 'Not Given', '0', 'years', 'baby', 'female', 'I love flower, and it is my name', '2016-10-13 05:42:46', '2016-10-13 05:42:46'),
(25, 'Test Name', 'Not Given', '0', 'years', 'adult', 'female', 'I have no idea...', '2016-10-18 22:12:58', '2016-10-18 22:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `username`, `created_at`, `updated_at`) VALUES
(8, '8th like', 31.21, 'admin', '2016-09-12 18:25:13', '2016-09-12 18:25:13'),
(28, 'new tester', 14.21, 'admin', '2016-09-13 04:46:25', '2016-09-13 04:46:25'),
(29, 'test file name', 23.45, 'admin', '2016-10-11 00:04:35', '2016-10-11 00:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'abc@123.com', '$2y$10$5bK4oYgMxFNZiXYuIUa/Vu61OnF6kNYxMAeXtn1Sj27ME/RbsGYCG', 'common customer', '9DeP9nZ2UEdKWdJ0oxwbJIKP843PDDR1L7eHxEQj1U193UImQJp5trMiqjQh', '2016-09-12 04:17:43', '2016-10-12 07:07:53'),
(2, 'user_a', 'abc@126.com', '$2y$10$DeqvOzbm2ocvBXlMlFlrLe0/.p66qN7gQh5L0XQlyx2MyjuPu3LhS', 'common customer', 'EpASHN7opsO0vc7ePX2fkXl3Nd01SVLpvX7qmBVWBOv8IdMWiYM08bvW8OUC', '2016-09-12 19:46:25', '2016-09-12 20:05:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
