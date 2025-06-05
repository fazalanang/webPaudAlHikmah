-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2025 pada 09.16
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paud_al_hikmah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `listdaftarsiswabaru`
--

CREATE TABLE `listdaftarsiswabaru` (
  `nama_lengkap` varchar(25) NOT NULL,
  `nama_panggilan` varchar(10) NOT NULL,
  `ttl` varchar(15) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `anakKe` int(25) NOT NULL,
  `jumlahSaudaraKandung` int(25) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `tinggiBadan` varchar(20) NOT NULL,
  `beratBadan` varchar(20) NOT NULL,
  `namaAyah` varchar(25) NOT NULL,
  `ttlAyah` varchar(25) NOT NULL,
  `pekerjaanAyah` varchar(25) NOT NULL,
  `pendidikanAyah` varchar(200) NOT NULL,
  `penghasilanAyah` int(255) NOT NULL,
  `noTlpAyah` varchar(300) NOT NULL,
  `namaIbu` varchar(25) NOT NULL,
  `ttlIbu` varchar(25) NOT NULL,
  `pekerjaanIbu` varchar(25) NOT NULL,
  `pendidikanIbu` varchar(200) NOT NULL,
  `penghasilanIbu` varchar(300) NOT NULL,
  `noTlpIbu` varchar(300) NOT NULL,
  `jarakRumahSekolah` varchar(100) NOT NULL,
  `kendaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginsiswa`
--

CREATE TABLE `loginsiswa` (
  `emailLogin` varchar(50) NOT NULL,
  `passwordLogin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `loginsiswa`
--

INSERT INTO `loginsiswa` (`emailLogin`, `passwordLogin`) VALUES
('orangtuasiswa1@gmail.com', 'ortu12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `loginsiswa`
--
ALTER TABLE `loginsiswa`
  ADD PRIMARY KEY (`emailLogin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
