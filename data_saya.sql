-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2022 pada 09.58
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_saya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dropoff_member`
--

CREATE TABLE `data_dropoff_member` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `alamat` int(11) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dropoff_member2`
--

CREATE TABLE `data_dropoff_member2` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `jenis sampah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dropoff_member2`
--

INSERT INTO `data_dropoff_member2` (`id`, `nama`, `alamat`, `total`, `no_hp`, `layanan`, `jenis sampah`) VALUES
(1, 'dimas', 'bekasi timur', '40kg', '081573957392', 'drop off', 'plastik dan besi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pickup_member`
--

CREATE TABLE `data_pickup_member` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `informasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pickup_member`
--

INSERT INTO `data_pickup_member` (`id`, `nama`, `alamat`, `total`, `no_hp`, `layanan`, `informasi`) VALUES
(1, 'agus', 'tangerang selatan', '10 kg', '081457208403', 'pick up', 'plastik dan logam'),
(2, 'ilham', 'deopk timur', '20kg', '081457839201', 'pick up', 'besi'),
(3, 'citra', 'depok', '10kg', '081457839201', 'pick up', 'plastik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengepul`
--

CREATE TABLE `pengepul` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengepul`
--

INSERT INTO `pengepul` (`id`, `username`, `email`, `password`) VALUES
(2, 'admin', 'fakhira@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(10, 'Syafiqsyauqi', 'g0task69@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'pau', 'pau@gmail.com', '76d80224611fc919a5d54f0ff9fba446');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dropoff_member2`
--
ALTER TABLE `data_dropoff_member2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pickup_member`
--
ALTER TABLE `data_pickup_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengepul`
--
ALTER TABLE `pengepul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_dropoff_member2`
--
ALTER TABLE `data_dropoff_member2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_pickup_member`
--
ALTER TABLE `data_pickup_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengepul`
--
ALTER TABLE `pengepul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
