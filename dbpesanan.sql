-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2024 pada 21.07
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpesanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
--

CREATE TABLE `datauser` (
  `id` int(20) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datauser`
--

INSERT INTO `datauser` (`id`, `nama`, `password`, `role`) VALUES
(1, 'thafah@gmail.com', '1234', 'admin'),
(2, 'obi@gmail.com', '12345', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `banyaknya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `email`, `telepon`, `tgl`, `banyaknya`) VALUES
(15, 'cahya', 'cahya@gmail.com', '08782534083', '2024-08-16', 'Paket Kebakar'),
(16, 'mama', 'mama@gmail.com', '0813543454', '2024-08-24', 'Paket Gosong'),
(17, 'obi', 'obi@gmail.com', '087825343811', '2024-08-23', 'Paket Gosong'),
(18, 'thafah', 'thafah16@gmail.com', '081394541691', '2024-08-24', 'Paket Panas'),
(19, 'obi', 'obi@gmail.com', '087825343811', '2024-08-17', 'Paket Gosong'),
(20, 'papa', 'papa@gmail.com', '08139876544', '2024-09-07', 'Paket Kebakar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datauser`
--
ALTER TABLE `datauser`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
