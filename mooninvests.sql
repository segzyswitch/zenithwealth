-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2025 at 09:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mooninvests`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_users`
--

CREATE TABLE `auth_users` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alt_password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_users`
--

INSERT INTO `auth_users` (`id`, `admin_id`, `nickname`, `username`, `password`, `alt_password`, `status`, `createdat`) VALUES
(1, 'SUPERADMIN', 'ADMIN', 'superadmin', '$2y$10$5Y5z3nqADH2m87dGYKHGTuxT3RPsY.4MD6OR430fuceJwA1LEJZBW', 'Primestar1$', 1, '2024-07-17 01:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_wallets`
--

CREATE TABLE `crypto_wallets` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `wallet_address` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  `qrcode` text DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crypto_wallets`
--

INSERT INTO `crypto_wallets` (`id`, `name`, `wallet_address`, `icon`, `qrcode`, `status`, `created_at`) VALUES
(1, 'Bitcoin', '1H9JiCUXAbsZB1W4BiEj9cV8ZQ71P9idBS', '1/large/bitcoin9ad4.png', 'https://cratobyte.com/api/public/uploads/asset_W5RC8Z95BUjpeg', 1, '2024-07-20 02:05:54'),
(2, 'Etheruem ', '0x80079b0839f4e4253e2bca7b1f8751064eeb252c', '453/large/ethereum-classic-logoc6f1.png', '', 1, '2024-07-20 02:06:32'),
(3, 'Solana', 'AydQSiUTrhzLEVG8FH6mHT7ao4TN7B6NtK5uvhbPAuXG', '4128/large/solanab377.png', '', 1, '2024-07-20 02:06:32'),
(4, 'USDT', '0x80079b0839f4e4253e2bca7b1f8751064eeb252c', 'wallet_NKJLUXB2C4.png', '', 0, '2024-10-12 10:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `duration` int(11) NOT NULL,
  `min_limit` int(11) NOT NULL,
  `max_limit` int(11) NOT NULL,
  `recomend` int(11) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `interest`, `duration`, `min_limit`, `max_limit`, `recomend`, `description`, `created_at`) VALUES
(1, 'Starter', '1.5', 35, 50, 1000, 1, 'Our Starter Plan offers an excellent opportunity for beginners to dive into the world of investment with confidence. With a 15-day duration and a 2% daily interest rate, it provides a quick turnaround on your funds. With an investment range from $100 to $1,000, it&#39;s ideal for those looking to start small and scale up gradually. Tailored for newcomers, it offers a low-risk introduction to the market while ensuring a secure investment environment. Experience the satisfaction of seeing returns within a short 15-day timeframe.', '2024-08-16 09:02:00'),
(2, 'Growth', '3.50', 25, 2000, 5000, 0, 'Our Growth Plan is designed for experienced investors looking for accelerated earnings over a medium-term horizon. With a 45-day duration and a 3.5% daily interest rate, it offers ample opportunities for significant growth. Tailored for larger investments ranging from $2,000 to $5,000, it\'s ideal for those seeking to optimize returns. Experience accelerated earnings and medium-term growth with this plan.', '2024-08-16 09:02:00'),
(3, 'Advanced', '4.50', 25, 5000, 20000, 1, 'Our Advanced Plan is tailored for seasoned investors seeking high returns over a longer-term investment horizon. With a 60-day duration and a 4.5% daily interest rate, it offers substantial capital growth opportunities. Designed for larger investments ranging from $6,000 to $20,000, it caters to experts in the field looking for significant returns. Ideal for those committed to a longer-term investment strategy, it ensures stability and growth potential over time. Experience substantial capital growth and high returns with this plan.', '2024-08-16 09:04:43'),
(4, 'Balanced', '3.00', 30, 1000, 3000, 0, 'Our Balanced Plan is designed for conservative investors seeking stable growth over a moderate-risk investment horizon. With a 30-day duration and a 3% daily interest rate, it offers steady growth potential. Tailored for investments ranging from $1,000 to $3,000, it\'s ideal for those looking for stability and moderate returns. Experience stable growth with this plan, suited for conservative investors.', '2024-08-16 09:04:43'),
(7, 'Regular', '2.5', 25, 100, 5000, 1, 'Our Regular Plan offers an excellent opportunity for regulars. With a 25-day duration and a 2.5% daily interest rate, it provides a quick turnaround on your funds. With an investment range from $50 to $5,000, it&#39;s ideal for those looking to start small and scale up gradually. Tailored for newcomers, it offers a low-risk introduction to the market while ensuring a secure investment environment. Experience the satisfaction of seeing returns within a short 15-day time-frame.', '2024-08-22 23:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `profit` int(11) NOT NULL,
  `returns` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'running',
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `user_id`, `plan_id`, `plan_name`, `amount`, `period`, `interest`, `profit`, `returns`, `status`, `start_date`, `end_date`) VALUES
(1, 2, 5, 'Flexi', 200, 20, '5', 100, 300, 'completed', '2024-08-18 10:18:18', '2024-09-07 10:18:18'),
(2, 2, 2, 'Growth', 2000, 45, '70', 3150, 5150, 'completed', '2024-08-19 19:09:21', '2024-10-03 19:09:21'),
(3, 2, 1, 'Starter', 100, 100, '0.2', 20, 120, 'completed', '2024-08-21 01:13:59', '2024-11-29 01:13:59'),
(11, 3, 4, 'Balanced', 1200, 30, '36', 1080, 2280, 'completed', '2024-08-21 16:56:57', '2024-09-20 16:56:57'),
(12, 3, 13, 'Premium Plus', 10000, 1, '1000', 1000, 11000, 'completed', '2024-08-23 10:37:46', '2024-08-24 10:37:46'),
(13, 2, 3, 'Advanced', 5000, 25, '225', 5625, 10625, 'completed', '2024-09-09 16:29:09', '2024-10-04 16:29:09'),
(14, 10, 13, 'Premium Plus', 1000, 1, '100', 100, 1100, 'completed', '2024-09-11 17:05:00', '2024-09-11 17:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `invoice` varchar(15) NOT NULL,
  `amount` int(11) NOT NULL,
  `initial_bal` int(11) NOT NULL,
  `source` varchar(50) NOT NULL,
  `send_to` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `proof` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `type`, `invoice`, `amount`, `initial_bal`, `source`, `send_to`, `details`, `proof`, `status`, `createdat`) VALUES
(13, 3, 'deposit', 'U74PKA3HSE0Y', 4000, 40800, 'Bitcoin Wallet', 'Wallet balance', 'Deposit of $4,000.00 from Bitcoin Wallet', 'deposit_m73021ynuf.png', 'success', '2024-08-22 17:10:12'),
(14, 3, 'deposit', 'UAFDC71KR320', 4000, 40800, 'Etheruem & USDT Wallet', 'Wallet balance', 'Deposit of $4,000.00 from Etheruem & USDT Wallet', 'deposit_0n4b3ryu2m.png', 'failed', '2024-08-22 17:10:32'),
(15, 3, 'deposit', 'LHFC43YKDA13', 4000, 40800, 'Solana Wallet', 'Wallet balance', 'Deposit of $4,000.00 from Solana Wallet', 'deposit_k2t47l4nw3.png', 'success', '2024-08-22 17:10:41'),
(16, 3, 'trade', 'GN14U0CM2WB2', 10000, 256800, 'Wallet balance', 'trade', 'Invested $10,000.00 to Premium Plus plan', '-', 'success', '2024-08-23 09:37:46'),
(17, 2, 'deposit', 'GL29C1B4T6A7', 3000, 42000, 'Bitcoin Wallet', 'Wallet balance', 'Deposit of $3,000.00 from Bitcoin Wallet', 'deposit_fk9p1v6gay.png', 'pending', '2024-08-26 15:53:12'),
(18, 2, 'trade', 'SG18NRTCFBHW', 5000, 42000, 'Wallet balance', 'trade', 'Invested $5,000.00 to Advanced plan', '-', 'success', '2024-09-09 15:29:09'),
(19, 2, 'withdrawal', '20PVH6GW17LC', 1000, 37000, 'Wallet balance', '8juC8UKc4Usab5sWxwQVR78U98vx1M8dKBc2YD9iodYs', 'Cash out $1,000.00 to external wallet', '', 'pending', '2024-09-11 00:39:25'),
(20, 2, 'withdrawal', 'B6W8DL3UGTHC', 1500, 36000, 'Wallet balance', '8juC8UKc4Usab5sWxwQVR78U98vx1M8dKBc2YD9iodYs', 'Cash out $1,500.00 to external wallet', '', 'pending', '2024-09-11 00:44:43'),
(21, 2, 'deposit', 'L3HAU0TNDM1G', 500, 34500, 'Bitcoin Wallet', 'Wallet balance', 'Deposit of $500.00 from Bitcoin Wallet', 'deposit_mk3wgh67dl.png', 'pending', '2024-09-11 01:10:23'),
(22, 2, 'deposit', 'SPYU21LRC131', 500, 34500, 'Solana Wallet', 'Wallet balance', 'Deposit of $500.00 from Solana Wallet', 'deposit_1u1tg6nk83.png', 'pending', '2024-09-11 01:16:51'),
(23, 10, 'deposit', '6HD56E0GL7FY', 8500, 0, 'Bitcoin Wallet', 'Wallet balance', 'Deposit of $8,500.00 from Bitcoin Wallet', 'deposit_ahcymvs6l0.jpg', 'success', '2024-09-11 16:04:15'),
(24, 10, 'trade', 'BTYV51AUDC82', 1000, 8500, 'Wallet balance', 'trade', 'Invested $1,000.00 to Premium Plus plan', '-', 'success', '2024-09-11 16:05:58'),
(28, 2, 'return', '3HSWV6G0L1K7', 300, 35400, 'Flexi Plan', 'Wallet balance', 'Flexi trade returns of $300.00', '-', 'success', '2024-09-11 16:50:33'),
(29, 3, 'return', '3BPW6DGNH9TR', 11000, 37000, 'Premium Plus Plan', 'Wallet balance', 'Premium Plus trade returns of $11,000.00', '-', 'success', '2024-09-11 16:50:33'),
(30, 10, 'return', 'VC7UD9H2WG03', 1100, 10800, 'Premium Plus Plan', 'Wallet balance', 'Premium Plus trade returns of $1,100.00', '-', 'success', '2024-09-11 16:50:33'),
(31, 21, 'deposit', '3LFSR9DP9WA8', 600, 0, 'Bitcoin Wallet', 'Wallet balance', 'Deposit of $600.00 from Bitcoin Wallet', 'deposit_c7gw930tbf.png', 'success', '2024-10-19 07:55:03'),
(32, 16, 'deposit', 'H0D7L2UWVA1C', 300, 0, 'Bitcoin Wallet', 'Wallet balance', 'Deposit of $300.00 from Bitcoin Wallet', 'deposit_fh1vr1sugt.PNG', 'success', '2024-10-23 12:33:21'),
(33, 2, 'return', 'APDN2ECV1Y1R', 5150, 0, 'Growth Plan', 'Wallet balance', 'Growth trade returns of $5,150.00', '-', 'success', '2025-04-09 13:00:13'),
(34, 2, 'return', 'A1741F8UEVP4', 120, 0, 'Starter Plan', 'Wallet balance', 'Starter trade returns of $120.00', '-', 'success', '2025-04-09 13:00:14'),
(35, 3, 'return', '8HVUF17DA2RT', 2280, 0, 'Balanced Plan', 'Wallet balance', 'Balanced trade returns of $2,280.00', '-', 'success', '2025-04-09 13:00:15'),
(36, 2, 'return', 'LDSK15G1FT84', 10625, 0, 'Advanced Plan', 'Wallet balance', 'Advanced trade returns of $10,625.00', '-', 'success', '2025-04-09 13:00:15'),
(40, 17, 'deposit', '77KR7L9PACB1', 43290, 0, 'Bitcoin', 'Wallet balance', 'Deposit with Bitcoin', 'PROOF_g5u7wsfnmc.png', 'pending', '2025-09-14 06:11:59'),
(42, 17, 'deposit', '7GR2PYF4E117', 5000, 0, 'USDT', 'Wallet balance', 'Deposit with USDT', 'PROOF_p4g8uvyahc.jpg', 'pending', '2025-09-14 06:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uuid` varchar(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `alt_password` varchar(255) NOT NULL,
  `wallet_bal` int(11) NOT NULL DEFAULT 0,
  `trading_bal` int(11) NOT NULL DEFAULT 0,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `kyc` int(11) NOT NULL DEFAULT 0,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `referral` varchar(50) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `fname`, `lname`, `email`, `phone`, `password`, `alt_password`, `wallet_bal`, `trading_bal`, `address`, `city`, `state`, `country`, `zip`, `kyc`, `status`, `referral`, `createdat`) VALUES
(17, 'r69y-n7tm-h1c3-gf2k', 'Semen', 'Olhak', 'solkhak@mail.ru', '89515829811', '$2y$10$4CstZfsH8lvhBnSYBMwEWuc5D2zJiaWWnLjQjBBusxw5FtpJwO66e', 'uDBM9181', 0, 0, '', '', '', '', '', 0, 'confirmed', '', '2024-10-14 23:49:24'),
(18, 'dgas-46cl-huty-wr8f', 'Lor', 'Rim', 'reknudaydo@tozya.com', '89983145656', '$2y$10$C5XxPZbm5WbeZ1KLp4HMJeV8tI7RLmu4wcEKhbh7N1s6tEhT0KbMS', 'qwerty1', 0, 0, '', '', '', '', '', 0, 'confirmed', '', '2024-10-15 00:00:19'),
(19, '7n1y-u7dc-f6wl-pt9g', 'Kami', 'Alam', 'Kamialam70@gmail.com', '3232389872', '$2y$10$Gi6ktLcZx.Df7RXEqN4K/eactHnHYTe89/ick4.D4sWg/mYUtm4oy', '2Brothers_70', 0, 0, '', '', '', '', '', 0, 'confirmed', '', '2024-10-16 18:13:17'),
(21, 'd26h-fwe6-1urs-bp3n', 'Cutie ', 'Me', 'cutiemeflower0720@gmail.com', '+12058588583', '$2y$10$DarGNahu4oFXFFgwOgEjs.VBK1M0OlhoGWuMGwMZcyn4tEIpqfex6', 'Iyaniwura1$', 600, 0, '', '', '', '', '', 0, 'confirmed', '', '2024-10-19 07:51:00'),
(23, 'u5rp-ghsb-2fw2-dc07', 'Abiola', 'Emmanuel', 'morganlund00@gmail.com', '08085421721', '$2y$10$VZzmReR5dBWvYx9.lYkEMO3O474NuUWXjTxcd7qbxmJs.WusOZgu.', 'Emmanuel', 0, 0, '', '', '', '', '', 0, 'pending', '', '2024-10-30 06:01:05'),
(24, '27mt-urwn-800h-e15l', 'Hayaz', 'Brent', 'cutieflowers007@gmail.com', '0813545248484', '$2y$10$IMnMQbLe7IPxGXfpZG4Mde8f1Ikwfm1Ukux6n4TSLz20aGzXyYJfS', 'Greatness247!', 0, 0, '', '', '', '', '', 0, 'pending', '', '2024-10-30 06:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `feed` text NOT NULL,
  `user_ip` varchar(50) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_activity`
--

INSERT INTO `user_activity` (`id`, `user_id`, `type`, `feed`, `user_ip`, `createdat`) VALUES
(1, 2, 'login', 'New login session.', '127.0.0.1', '2024-08-18 09:16:25'),
(2, 2, 'login', 'New login session.', '127.0.0.1', '2024-08-19 18:08:35'),
(3, 3, 'login', 'New login session.', '127.0.0.1', '2024-08-21 14:45:43'),
(4, 2, 'login', 'New login session.', '127.0.0.1', '2024-08-25 23:00:41'),
(5, 2, 'login', 'New login session.', '127.0.0.1', '2024-09-09 13:52:21'),
(6, 2, 'login', 'New login session.', '::1', '2024-09-10 17:59:39'),
(7, 10, 'login', 'New login session.', '::1', '2024-09-11 16:03:39'),
(8, 2, 'login', 'New login session.', '102.88.71.248', '2024-10-01 15:14:36'),
(9, 13, 'login', 'New login session.', '102.88.71.248', '2024-10-01 16:58:28'),
(10, 15, 'login', 'New login session.', '85.172.6.206', '2024-10-11 04:22:18'),
(11, 16, 'login', 'New login session.', '102.89.43.67', '2024-10-12 10:35:03'),
(12, 15, 'login', 'New login session.', '85.172.6.206', '2024-10-14 04:01:17'),
(13, 15, 'login', 'New login session.', '85.172.6.206', '2024-10-14 08:10:14'),
(14, 17, 'login', 'New login session.', '185.212.0.222', '2024-10-14 23:50:53'),
(15, 17, 'login', 'New login session.', '185.212.0.222', '2024-10-15 00:01:52'),
(16, 19, 'login', 'New login session.', '105.119.1.163', '2024-10-16 18:14:59'),
(17, 20, 'login', 'New login session.', '102.88.69.233', '2024-10-18 05:17:16'),
(18, 21, 'login', 'New login session.', '102.89.82.177', '2024-10-19 07:51:48'),
(19, 21, 'login', 'New login session.', '102.89.68.202', '2024-10-21 05:43:11'),
(20, 16, 'login', 'New login session.', '102.88.82.136', '2024-10-23 12:21:33'),
(21, 21, 'login', 'New login session.', '102.89.83.55', '2024-12-23 14:15:59'),
(22, 20, 'login', 'New login session.', '102.89.83.38', '2025-04-20 05:42:56'),
(23, 16, 'login', 'New login session.', '102.89.44.94', '2025-05-08 04:09:21'),
(24, 16, 'login', 'New login session.', '102.88.111.16', '2025-05-12 06:18:56'),
(25, 17, 'login', 'New login session.', '127.0.0.1', '2025-09-13 11:20:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_users`
--
ALTER TABLE `auth_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_wallets`
--
ALTER TABLE `crypto_wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_users`
--
ALTER TABLE `auth_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crypto_wallets`
--
ALTER TABLE `crypto_wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
