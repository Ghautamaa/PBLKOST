-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2024 pada 12.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbreviewkost`
--

CREATE TABLE `tbreviewkost` (
  `id_review` int(11) NOT NULL,
  `id_kost` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbreviewkost`
--

INSERT INTO `tbreviewkost` (`id_review`, `id_kost`, `id_user`, `rating`, `comment`, `created_at`) VALUES
(1, 14, 79, 3, 'wkwkwkw', '2024-01-16 09:50:21'),
(2, 14, 79, 1, 'ataaa', '2024-01-16 09:51:30'),
(3, 14, 79, 5, 'bejir', '2024-01-16 09:51:42'),
(4, 1, 79, 5, 'keren', '2024-01-16 10:30:46'),
(5, 1, 79, 1, 'Jelek amat', '2024-01-16 10:30:55'),
(6, 1, 79, 2, 'aowkwkw kepencet bang', '2024-01-16 10:31:07'),
(7, 1, 79, 1, 'aaa', '2024-01-16 10:31:12'),
(8, 1, 79, 5, '5555555555555', '2024-01-16 10:31:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbreviewkost`
--
ALTER TABLE `tbreviewkost`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `fk_tbreviewkost_tbkost` (`id_kost`),
  ADD KEY `fk_tbreviewkost_tbuser` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbreviewkost`
--
ALTER TABLE `tbreviewkost`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbreviewkost`
--
ALTER TABLE `tbreviewkost`
  ADD CONSTRAINT `fk_tbreviewkost_tbkost` FOREIGN KEY (`id_kost`) REFERENCES `tbkost` (`id_kost`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tbreviewkost_tbuser` FOREIGN KEY (`id_user`) REFERENCES `tbuser` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
