-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2021 pada 22.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Nama_barang` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `kualitas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama_barang`, `img`, `kualitas`, `keterangan`, `harga`) VALUES
(1, 'Beras', 'beras.jpg', 'GRADE A', 'Harga berikut merupakan harga Perkilo', '17000'),
(2, 'cabai Kering', 'cabai.jpg', 'GRADE B+', 'Harga berikut merupakan Harga per 1 ons', '10000'),
(3, 'Garam Cap Kapal', 'garam.jpg', 'GRADE C', 'Harga berikut merupakan Harga per satu bungkus', '1500'),
(4, 'Gula Merah', 'gula merah.jpg', 'GRADE B+', 'Harga berikut merupakan Harga per satu kilo', '19000'),
(5, 'Minyak Goreng Bimoli', 'minyak.jpg', 'GRADE B+', 'Harga berikut merupakan Harga perbotol satu Liter', '49000'),
(6, 'Gula Pasir', 'gula.jpg', 'GRADE A', 'Harga berikut merupakan Harga per satu kilo', '13500'),
(7, 'Mentega Blueband', 'mentega.jpg', 'GRADE B+', 'Harga berikut merupakan Harga per satu bungkus (400gram)', '10000'),
(8, 'Mie Indomie Jumbo', 'mie.jpg', 'pokoknya Mie ini Mie ter enak sedunia', 'Harga berikut merupakan Harga per satu dus', '130000'),
(9, 'Telur Ayam Negri Renkoles', 'telur.jpg', 'GRADE A+', 'Harga berikut merupakan Harga per satu kilo', '36000'),
(10, 'Terigu Segitiga Biru', 'terigu.jpg', 'GRADE A', 'Harga berikut merupakan Harga per Satu kilo', '15000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
