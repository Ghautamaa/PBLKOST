-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2024 pada 13.45
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

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
-- Struktur dari tabel `id_token`
--

CREATE TABLE `id_token` (
  `id` int(11) NOT NULL,
  `alamat_email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role_id`
--

INSERT INTO `role_id` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'penyewa'),
(3, 'pemilik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkost`
--

CREATE TABLE `tbkost` (
  `id_kost` int(11) NOT NULL,
  `namaKost` varchar(50) NOT NULL,
  `alamatKost` varchar(50) NOT NULL,
  `hargaKost` varchar(100) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbkost`
--

INSERT INTO `tbkost` (`id_kost`, `namaKost`, `alamatKost`, `hargaKost`, `kodepos`, `deskripsi`, `gambar`) VALUES
(1, 'apa', 'dimana', '100000', '12345', 'apa aja ada', ''),
(2, 'adad', 'ddada', '11111111', '12344', 'adsada', ''),
(12, '12', '12', '12', '12', '12', 'Screenshot_(262)3.png'),
(13, 'Aramugam', 'Jimbaran', '750000', '123456', 'Tidak ada fasilitas', 'Screenshot_(249).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `nomor_whatsapp` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `alamat_email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `nama_user`, `nomor_whatsapp`, `image`, `alamat_email`, `password`, `level`, `is_active`, `date_created`) VALUES
(75, 'aura', '0895327714616', 'default.jpg', 'auranathania32@gmail.com', '$2y$10$JhAt4ZQIJTYa1/Vql9FUZeLGVtVA188IAAPnVn79q/JC27wjBWmSa', 3, 1, '2023-12-29'),
(76, 'Juventus', '0812345678', 'default.jpg', 'arakianjuven@gmail.com', '$2y$10$zbgjVV34qiAd5uvsWrI.be7WiW3lhUsoxe8UrSJSe5GdK1Hp6AB7e', 3, 1, '2024-01-02'),
(78, 'agus', '12212', 'default.jpg', 'arakianj@gmail.com', '$2y$10$V5IOzDbtQ.NbcQPMsaIQ7.QvsJ1gGdf0ThsMF4DU.hgyRjjMPUA1G', 3, 1, '2024-01-03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `id_token`
--
ALTER TABLE `id_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbkost`
--
ALTER TABLE `tbkost`
  ADD PRIMARY KEY (`id_kost`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `id_token`
--
ALTER TABLE `id_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbkost`
--
ALTER TABLE `tbkost`
  MODIFY `id_kost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
