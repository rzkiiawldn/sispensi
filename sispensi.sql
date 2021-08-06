-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2021 pada 15.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `campaign`
--

CREATE TABLE `campaign` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_campaign` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_campaign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_campaign` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `keluhan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk_baru`
--

CREATE TABLE `kk_baru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_warga` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `pengantar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_pindah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_kematian`
--

CREATE TABLE `sk_kematian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_warga` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_tempat_tinggal`
--

CREATE TABLE `sk_tempat_tinggal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_warga` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `pengantar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_penjamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_akte_lahir`
--

CREATE TABLE `sp_akte_lahir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_warga` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `pengantar` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `password`) VALUES
(2, 'adminkelurahanmeruyaselatan', 'admin@gmail.com', '$2y$10$D57ydtRTqjoJco0IisE9MeLBdTM3k2Rd8aKimg7wCQc1dCyc0thD2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nik` char(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_tlp` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `no_tlp`, `email`, `alamat`, `jenis_kelamin`, `password`) VALUES
(1, '1234', 'Muhammad Rizki', 'Tangerang', '2021-12-31', '085781575597', 'rzkiiawldn23@gmail.com', 'Tangerang, Kota Tangerang, Banten, Indonesia', 'laki-laki', '$2y$10$2OfSKNTgkHXjx5kxVAhFf.zjAwjAHjzotOKGkBqu6O/z37eOBCyHK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `kk_baru`
--
ALTER TABLE `kk_baru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `sk_kematian`
--
ALTER TABLE `sk_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `sk_tempat_tinggal`
--
ALTER TABLE `sk_tempat_tinggal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `sp_akte_lahir`
--
ALTER TABLE `sp_akte_lahir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kk_baru`
--
ALTER TABLE `kk_baru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sk_kematian`
--
ALTER TABLE `sk_kematian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sk_tempat_tinggal`
--
ALTER TABLE `sk_tempat_tinggal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sp_akte_lahir`
--
ALTER TABLE `sp_akte_lahir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id`);

--
-- Ketidakleluasaan untuk tabel `kk_baru`
--
ALTER TABLE `kk_baru`
  ADD CONSTRAINT `kk_baru_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id`);

--
-- Ketidakleluasaan untuk tabel `sk_kematian`
--
ALTER TABLE `sk_kematian`
  ADD CONSTRAINT `sk_kematian_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id`);

--
-- Ketidakleluasaan untuk tabel `sk_tempat_tinggal`
--
ALTER TABLE `sk_tempat_tinggal`
  ADD CONSTRAINT `sk_tempat_tinggal_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id`);

--
-- Ketidakleluasaan untuk tabel `sp_akte_lahir`
--
ALTER TABLE `sp_akte_lahir`
  ADD CONSTRAINT `sp_akte_lahir_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
