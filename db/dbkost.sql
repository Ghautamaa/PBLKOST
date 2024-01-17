-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2024 pada 18.28
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
-- Struktur dari tabel `id_token`
--

CREATE TABLE `id_token` (
  `id` int(11) NOT NULL,
  `alamat_email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `gambar` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbkost`
--

INSERT INTO `tbkost` (`id_kost`, `namaKost`, `alamatKost`, `hargaKost`, `kodepos`, `deskripsi`, `gambar`, `id_user`) VALUES
(18, 'tama', 'se', '700000', '123', '123', 'facebook_1670691992212_70073901057067067034.jpg', 81),
(19, 'renra kost ', 'gunung agung', '700000', '123', '123123123', 'facebook_1670691992212_70073901057067067035.jpg', 81),
(20, 'juven', 'se', '700000', '123123123', '123123123123', 'facebook_1670691992212_70073901057067067036.jpg', 81),
(21, 'agus kost', 'buleleng', '700000', '123', '123', 'FjnKU7LXwAEC17Y.jpg', 81),
(22, 'yoga', '123', 'se12', '123', '123', 'FjmcwdgaMAIcVSG.jpg', 81),
(23, 'tamak', 'jimbaran', '1000000', 'qweqwe', '123', 'FjYLIsHUUAAHSi-.jpg', 81);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `nama_user`, `nomor_whatsapp`, `image`, `alamat_email`, `password`, `level`, `is_active`, `date_created`) VALUES
(76, 'Juventus', '0812345678', 'default.jpg', 'arakianjuven@gmail.com', '$2y$10$zbgjVV34qiAd5uvsWrI.be7WiW3lhUsoxe8UrSJSe5GdK1Hp6AB7e', 3, 1, '2024-01-02'),
(78, 'agus', '12212', 'default.jpg', 'arakianj@gmail.com', '$2y$10$V5IOzDbtQ.NbcQPMsaIQ7.QvsJ1gGdf0ThsMF4DU.hgyRjjMPUA1G', 3, 1, '2024-01-03'),
(79, 'yogats', '081', 'default.jpg', 'ikm.yogats@gmail.com', '$2y$10$77fJTcAGWaRwmKEiUEPX/uzckEHbCH4hcwmQkqCWMrefbqZQ0Hbdm', 3, 1, '2024-01-16'),
(80, 'adadaddada', '081', 'default.jpg', 'gamingicocoa@gmail.com', '$2y$10$qOinFTju19021/cxAkvNzOWzWQszlS1UXCDN/s71BkHHil38DRwVm', 2, 1, '2024-01-16'),
(81, 'Tama', '0895327714616', 'default.jpg', 'senjaghautama2004@gmail.com', '$2y$10$V3Z0lonWbmCp9xaYlIMO/uz45d2BfUkqLgA3PgeBjX/.xCwbwbkRu', 3, 1, '2024-01-17'),
(82, 'aura', '0895327714616', 'default.jpg', 'auranathania32@gmail.com', '$2y$10$5gtgHyGAU2agT3Mjl.ksnOlyBh84xPklMtjcarCN.gV.aoAK/UwIq', 2, 1, '2024-01-17');

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
  ADD PRIMARY KEY (`id_kost`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbreviewkost`
--
ALTER TABLE `tbreviewkost`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `fk_tbreviewkost_tbkost` (`id_kost`),
  ADD KEY `fk_tbreviewkost_tbuser` (`id_user`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbkost`
--
ALTER TABLE `tbkost`
  MODIFY `id_kost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbreviewkost`
--
ALTER TABLE `tbreviewkost`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbkost`
--
ALTER TABLE `tbkost`
  ADD CONSTRAINT `tbkost_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbuser` (`id_user`);

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
