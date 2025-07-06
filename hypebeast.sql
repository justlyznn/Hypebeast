-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2025 at 02:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hypebeast`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-07-05-130333', 'App\\Database\\Migrations\\User', 'default', 'App', 1751797299, 1),
(2, '2025-07-05-130407', 'App\\Database\\Migrations\\Product', 'default', 'App', 1751797299, 1),
(3, '2025-07-05-130419', 'App\\Database\\Migrations\\Transaction', 'default', 'App', 1751797299, 1),
(4, '2025-07-05-130428', 'App\\Database\\Migrations\\TransactionDetail', 'default', 'App', 1751797387, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category`, `image`, `description`, `created_at`, `updated_at`) VALUES
(23, 'Off White Hoodie white', 150000.00, '', 'pakaian1.png', 'Premium white hoodie from Off White, suitable for casual and streetwear style.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(24, 'Stone Island Seersucker Cargo Pants Olive', 150000.00, '', 'celana3.png', 'Stone Island olive cargo pants with seersucker fabric, stylish and comfortable.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(25, 'Air Jordan I Retro High Off - White Chicago', 3000000.00, '', 'sepatu1.png', 'Legendary Air Jordan 1 Retro High in Chicago colorway. A must-have for collectors.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(26, 'Stone Island Jacket', 150000.00, '', 'pakaian3.png', 'Stone Island lightweight jacket with modern silhouette and functional pockets.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(27, 'Jordan Jumpman Air Fleece Hoodie Red', 150000.00, '', 'pakaian2.png', 'Cozy fleece hoodie with Jumpman Air logo in bold red, perfect for chilly days.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(28, 'Jordan Shorts Essentials', 150000.00, '', 'celana2.png', 'Essential training shorts from Jordan, designed for performance and comfort.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(29, 'Adidas Yeezy 350 V2', 1000000.00, '', 'sepatu3.png', 'Yeezy 350 V2 with Boost technology and sleek silhouette for ultimate comfort.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(30, 'Off - White Long Sleeve', 150000.00, '', 'pakaian4.png', 'Long sleeve Off - White tee with iconic print and relaxed fit.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(31, 'Stussy Black T - Shirt', 150000.00, '', 'pakaian5.png', 'Classic black T-shirt from Stussy with clean logo design on the front.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(32, 'Nike Swoosh Fleece Pants', 150000.00, '', 'celana1.png', 'Nike fleece pants with Swoosh branding, great for lounging or light workouts.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(33, 'Nike GT Cut 2 University Red', 1000000.00, '', 'sepatu5.png', 'Basketball shoes with responsive cushioning and stylish university red color.', '2025-07-06 11:44:33', '2025-07-06 11:44:33'),
(34, 'Off White Hoodie white', 150000.00, '', 'pakaian1.png', 'Another drop of the popular Off White white hoodie, updated fit and fabric.', '2025-07-06 11:44:33', '2025-07-06 11:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `total_harga` double NOT NULL,
  `alamat` text NOT NULL,
  `ongkir` double DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `transaction_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `jumlah` int(5) NOT NULL,
  `diskon` double DEFAULT NULL,
  `subtotal_harga` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(11, 'jatmiko.halim', 'galak.narpati@gmail.co.id', '$2y$10$twNBe2.4JtbZ2PO5mHkmUuUsz0T9pWP8jQeqInId08u9uUfwnc8Wu', 'user', '2025-07-06 10:36:19', NULL),
(12, 'friyanti', 'budiman.dinda@permadi.tv', '$2y$10$bKCh7LaP7XqYIBFaDank9eq6LL.9ezfWccnI4vgtnjX0LgPHpc0FK', 'admin', '2025-07-06 10:36:19', NULL),
(13, 'candrakanta77', 'jpuspita@yahoo.com', '$2y$10$Q7HDk9busTY1PsZl31bLYOObDHYG3BQFf.Dz2MRQ4Pk9V3q6Ml6lm', 'admin', '2025-07-06 10:36:19', NULL),
(14, 'xmarpaung', 'bahuraksa.lestari@maheswara.mil.id', '$2y$10$DxyKMsaOqHfO..NMGwj5/u296oqaJjPTT1QvsrXGzyZsO9zGrywKi', 'admin', '2025-07-06 10:36:19', NULL),
(15, 'tandriani', 'fujiati.danang@hastuti.tv', '$2y$10$rHf1NmIquZP7/KT2Ls6T/.JIK.yHFftNZjFD.X5gEI2YAaegYQewi', 'user', '2025-07-06 10:36:19', NULL),
(16, 'putra.pia', 'martani.nashiruddin@yahoo.com', '$2y$10$y4htdfREngmNWgdW3rMjY.znphIb.8XYIhavhRsh/0AMbWW9jNnme', 'admin', '2025-07-06 10:36:20', NULL),
(17, 'astuti.simon', 'bpuspasari@adriansyah.sch.id', '$2y$10$c.lWsg7mUkVCRwAm3jWj3uCw3TVHS8MR7H.tGcQKNSOGeP5U/E9Ju', 'admin', '2025-07-06 10:36:20', NULL),
(18, 'zwijayanti', 'elisa61@yahoo.com', '$2y$10$4tcu1io0XQZQ1At5sii0GemaeFqkjTEw0XeJYFnvWLlmdy2MZWcsq', 'user', '2025-07-06 10:36:20', NULL),
(19, 'fsamosir', 'dprakasa@gmail.com', '$2y$10$W4SWsBQKFfdAdF87oznyiOcz1VaMnqxwHff3tmIFl3P.FQio0TPHO', 'admin', '2025-07-06 10:36:20', NULL),
(20, 'cahyono.uyainah', 'rahmi76@yahoo.com', '$2y$10$2RaymP3Zxf/sWVJ3q.0POOVRMP/riO5VW76jPLJvps8WtuT.lu/g.', 'admin', '2025-07-06 10:36:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
