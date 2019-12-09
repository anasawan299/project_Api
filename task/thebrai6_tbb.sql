-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 12:26 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thebrai6_tbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliates`
--

CREATE TABLE `affiliates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affiliates`
--

INSERT INTO `affiliates` (`id`, `name`, `description`, `img`, `link`, `isActive`) VALUES
(1, 'affiliates01', 'affiliates01 Description ', '', '', 1),
(2, 'affiliates02', 'affiliates02 Description ', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bets`
--

CREATE TABLE `bets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `user_id` int(11) NOT NULL,
  `stake` int(11) NOT NULL,
  `quote` double NOT NULL,
  `odds_win` double NOT NULL,
  `status_id` int(11) NOT NULL,
  `isLike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bets`
--

INSERT INTO `bets` (`id`, `name`, `user_id`, `stake`, `quote`, `odds_win`, `status_id`, `isLike`) VALUES
(1, 'bets01', 1, 1, 12, 1, 1, 100),
(2, 'bets02', 2, 2, 14, 2, 1, 1100);

-- --------------------------------------------------------

--
-- Table structure for table `champion`
--

CREATE TABLE `champion` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `sign` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nation_id` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `champion`
--

INSERT INTO `champion` (`id`, `name`, `sign`, `nation_id`, `isActive`) VALUES
(1, 'anas', 'anas', 2, 1),
(12, 'anas', 'anas', 2, 1),
(13, 'anas', 'anas', 2, 1),
(14, 'anas', 'anas', 2, 1),
(15, 'test', 'test', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) NOT NULL,
  `game` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `datetime` datetime NOT NULL,
  `sport_id` int(11) NOT NULL,
  `champion_id` int(11) NOT NULL,
  `v1` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `v2` int(11) NOT NULL,
  `v1ht` int(11) NOT NULL,
  `xht` int(11) NOT NULL,
  `v2ht` int(11) NOT NULL,
  `o05` int(11) NOT NULL,
  `u05` int(11) NOT NULL,
  `o15` int(11) NOT NULL,
  `u15` int(11) NOT NULL,
  `o25` int(11) NOT NULL,
  `u25` int(11) NOT NULL,
  `o05ht` int(11) NOT NULL,
  `u05ht` int(11) NOT NULL,
  `o15ht` int(11) NOT NULL,
  `u15ht` int(11) NOT NULL,
  `gg` int(11) NOT NULL,
  `ng` int(11) NOT NULL,
  `v1x` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `v12` int(11) NOT NULL,
  `result` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `game`, `datetime`, `sport_id`, `champion_id`, `v1`, `x`, `v2`, `v1ht`, `xht`, `v2ht`, `o05`, `u05`, `o15`, `u15`, `o25`, `u25`, `o05ht`, `u05ht`, `o15ht`, `u15ht`, `gg`, `ng`, `v1x`, `x2`, `v12`, `result`) VALUES
(1, 'game', '2019-12-03 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'result'),
(2, 'game', '2019-12-03 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'result'),
(3, 'test', '2019-12-03 00:00:00', 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2'),
(4, 'test', '2019-12-03 00:00:00', 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 'result'),
(5, 'test', '2019-12-03 00:00:00', 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 'result12345'),
(6, 'test', '2019-12-03 00:00:00', 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 'result12345');

-- --------------------------------------------------------

--
-- Table structure for table `matches_bet`
--

CREATE TABLE `matches_bet` (
  `id` int(11) NOT NULL,
  `bet_id` int(11) NOT NULL,
  `quote` double NOT NULL,
  `status_id` int(11) NOT NULL,
  `prediction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches_bet`
--

INSERT INTO `matches_bet` (`id`, `bet_id`, `quote`, `status_id`, `prediction`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 0, 2),
(3, 1, 1, 1, 1),
(4, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nations`
--

CREATE TABLE `nations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nations`
--

INSERT INTO `nations` (`id`, `name`, `sign`, `isActive`) VALUES
(1, 'nations01', '1', 0),
(2, 'nations02', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `predictions`
--

CREATE TABLE `predictions` (
  `id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `1x2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `1x2ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ou05` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ou15` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ou25` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ou05ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ou15ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ggng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `double_change` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `predictions`
--

INSERT INTO `predictions` (`id`, `match_id`, `user_id`, `1x2`, `1x2ht`, `ou05`, `ou15`, `ou25`, `ou05ht`, `ou15ht`, `ggng`, `double_change`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'pak', '1x2ht', 'ou05', 'ou15', 'ou25', 'ou05ht', 'test', 'testadd', '2', 1, '2019-12-02 10:44:50', '2019-12-09 09:37:12'),
(2, 1, 1, 'test', '1x2ht', 'ou05', 'ou15', 'ou25', 'ou05ht', 'test', 'ggng', '2', 1, '2019-12-02 10:44:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `sign`, `isActive`) VALUES
(1, 'anas', 'anas', 2),
(2, 'anas', 'TEST', 2),
(13, '', '', 0),
(14, '', '', 0),
(15, '', '', 0),
(16, '', '', 0),
(17, '', '', 0),
(18, 'anas', 'anas', 1),
(19, 'anas', 'anas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Active'),
(2, 'InActive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT 1,
  `isAdmin` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `birthday`, `img`, `isActive`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'user01', 'user01', 'user01', 'user01@gmail.com', 'user', '2019-12-03', 'dumy.jpg', 1, 1, '2019-12-02 10:22:03', '2019-12-03 14:32:52'),
(2, 'user02', 'user02', 'user02', 'user02@gmail.com', 'user', '2019-12-03', 'dummy.jpg', 1, 0, '2019-12-02 10:22:03', '2019-12-03 14:33:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `champion`
--
ALTER TABLE `champion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches_bet`
--
ALTER TABLE `matches_bet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nations`
--
ALTER TABLE `nations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `predictions`
--
ALTER TABLE `predictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `affiliates`
--
ALTER TABLE `affiliates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bets`
--
ALTER TABLE `bets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `champion`
--
ALTER TABLE `champion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matches_bet`
--
ALTER TABLE `matches_bet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nations`
--
ALTER TABLE `nations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `predictions`
--
ALTER TABLE `predictions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
