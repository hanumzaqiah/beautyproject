-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.infinityfree.com
-- Waktu pembuatan: 22 Apr 2026 pada 01.41
-- Versi server: 11.4.10-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_41723544_beautyproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `price`, `quantity`, `created_at`) VALUES
(44, 'SOAP BEAUTY PROJECT', 65000, 1, '2026-04-22 05:40:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `apartment` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `total` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `company`, `country`, `address`, `apartment`, `city`, `province`, `postcode`, `phone`, `email`, `notes`, `total`, `created_at`) VALUES
(1, 'kurul', 'selly', 'dvdg', 'Indonesia', 'jl.nailun', 'rusunawa', 'cianjur', 'Jawa Barat', 'bhfjfkr', '657890678', 'sknjf@gmail.com', 'rftghifevef', 0, '2025-06-04 18:02:54'),
(2, 'rull', 'sel', '', 'Indonesia', 'jdjkejf', 'rusun', 'malang', 'Jawa Timur', '848492', '08774927813874', 'dnfjref@jndfw.com', '', 250000, '2025-06-06 13:29:58'),
(3, 'hanum', 'shely', '', 'Indonesia', 'malang', '22', 'malang', 'Jawa Timur', '22334', '098', 'shely@gmail.com', '1w', 155000, '2025-06-10 11:01:01'),
(4, 'hanum', 'za', 'h', 'Indonesia', 'jl', 'aa', 'aa', 'Sulawesi Tenggara', '11', '087', 'shely@gmail.coms', 'ss', 445000, '2025-09-26 06:07:51'),
(5, 'HANA', 'NO', 'UMM', 'Indonesia', 'JL. NAIUN', '', 'MALANG', 'Jawa Timur', '2222222222', '085808224116', 'hanum@webmail.umm.ac.id', '', 45000, '2026-04-20 18:04:22'),
(6, 'Hanum', 'Zaqiah', 'UMM', 'Indonesia', 'Jl.Tlogomas', '', 'Malang', 'Jawa Timur', '111111111', '0987654', 'rijal.vincent89@gmail.com', '', 260000, '2026-04-22 05:11:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `subtotal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `nama_produk`, `qty`, `harga`, `subtotal`) VALUES
(8, 5, NULL, 'BEAUTY PROJECT FACE MIST', 1, 45000, 45000),
(9, 6, NULL, 'SOAP BEAUTY PROJECT', 4, 65000, 260000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'kurul', '', '', '$2y$10$y8PuohlJ2B5HXOvdgkrG/eSCU3kQY9.65g02JRfN6Xm2OV2M3B1xq', '2025-09-26 06:37:07'),
(2, 'hanum', '', '', '$2y$10$bi4bffE3PlpbzwsQugVHF.L01iBUS7gyXn2DHHb/M1gcf.WDTlSgC', '2025-09-26 07:28:18'),
(3, 'jecy', '', '', '$2y$10$ebDEZdjb0AJPG5ZjYmkZJ.KNDDQJmHlw4FXSeOeyihwXV7z1DiMwm', '2025-09-26 07:29:48'),
(4, 'sary', 'hanumpermata@webmail.umm.ac.id', '098755', '$2y$10$i.b674uZ15heYfkseVWYaOxqkUgx0YC0wqljfuQD2ql5BQeJ7vAxu', '2025-12-01 05:29:36'),
(5, 'sari', 'hanumpermata28@webmail.umm.ac.id', '0987654321', '$2y$10$epw29Rsw9afkSNmmjvWFu.my1X75xyJx1LFLn6dQ80p6iaOgxiHNO', '2025-12-01 05:30:30'),
(6, 'testuser', 'hanumpermata2812@gmail.com', '0987', '$2y$10$Gw0uiD48qX.Ze.tXGZVDEepK8e1OcuZQwz9Fo0kehGJ5Jr6n97L2K', '2025-12-01 05:44:05'),
(7, 'testing', 'hanumpermata@gmail.com', '09876', '$2y$10$LQNOj7EADiLuFcQ.hkb7MeO/I40tB/6FzR.ggqhWd0RNtuay4NHLG', '2025-12-01 05:48:15'),
(8, 'userbaru', 'hanum@gmail.com', '098765555', '$2y$10$.Hkn6vAL6OQ.u5nd/RAza.x6EaFKyXcbkXeugirsfFcful87vgJ0G', '2025-12-03 03:39:11'),
(9, 'say', 'hanumpermata28@webmail.umm.ac.id', '122456', '$2y$10$OPCI4a/1pgoNiSqvDybNleqLvW9pmkox5BIXyss6n5cquPuAE/WRC', '2025-12-03 03:39:34'),
(10, 'admin', 'admin@gmail.com', '098222', '$2y$10$04WDvG1h2EIT9XGn9Vkf1O4t2mdhNZ3/Ii00bxk3RkwHeYKZ7XTWi', '2026-04-20 06:10:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
