-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2020 pada 18.35
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkantin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alergimenu`
--

CREATE TABLE `alergimenu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempatmakan` varchar(100) DEFAULT NULL,
  `alergicard` varchar(100) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alergimenu`
--

INSERT INTO `alergimenu` (`id`, `menu`, `nama`, `tempatmakan`, `alergicard`, `status`) VALUES
(0, 'mhank', 'as', 'asd', 'apel.jfif', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jlhmhs`
--

CREATE TABLE `jlhmhs` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `kb` varchar(100) NOT NULL,
  `kl` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jlhmhs`
--

INSERT INTO `jlhmhs` (`id`, `tanggal`, `waktu`, `kb`, `kl`) VALUES
(1, '2020-06-23', 'pagi', '22', '21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantin_baru`
--

CREATE TABLE `kantin_baru` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `isi_menu` varchar(100) NOT NULL,
  `Info_gizi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kantin_baru`
--

INSERT INTO `kantin_baru` (`id`, `role`, `nama_menu`, `isi_menu`, `Info_gizi`, `tanggal`) VALUES
(1, 'pagi', 'sarapan', 'daging babi', 'vitamin', '2020-06-21'),
(2, 'pagi', 'abc', 'abc', 'abc', '2020-06-22'),
(3, 'pagi', 'abc', 'abc', 'abc', '2020-06-22'),
(4, 'pagi', 'Nasi', 'Bayam asin', 'Varian vitamin A,B,C', '2020-06-22'),
(5, 'siang', 'Nasi', 'Tahu telor', 'Mineral', '2020-06-22'),
(6, 'malam', 'Nasi', 'Tahu tempe', 'Mineral', '2020-06-22'),
(7, 'pagi', 'Nasi', 'tempe', 'Vitamin B', '2020-06-21'),
(8, 'siang', 'Nasi', 'telor sambal', 'Vitamin B,D E', '2020-06-21'),
(9, 'malam', 'Mie', 'tempe,bakwan,daging', 'Vitamin B,protein', '2020-06-21'),
(10, 'pagi', 'Nasi', 'Ikan teri', 'Protein, omega a, vitamin c', '2020-06-23'),
(11, '', '', '', '', '0000-00-00'),
(12, 'pagi', 'Mie', 'Daging', 'Karbohidrat, Protein', '2020-06-23'),
(13, 'pagi', 'Makan siang', 'Ikan teri', 'Karbohidrat,Protein', '2020-06-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantin_lama`
--

CREATE TABLE `kantin_lama` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `isi_menu` varchar(100) NOT NULL,
  `Info_gizi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kantin_lama`
--

INSERT INTO `kantin_lama` (`id`, `role`, `nama_menu`, `isi_menu`, `Info_gizi`, `tanggal`) VALUES
(0, 'pagi', 'sarapan', 'daging babi', 'vitamin', '2020-06-21'),
(0, 'pagi', 'abc', 'abc', 'abc', '2020-06-22'),
(0, 'pagi', 'abc', 'abc', 'abc', '2020-06-22'),
(0, 'pagi', 'Nasi', 'Bayam asin', 'Varian vitamin A,B,C', '2020-06-22'),
(0, 'siang', 'Nasi', 'Tahu telor', 'Mineral', '2020-06-22'),
(0, 'malam', 'Nasi', 'Tahu tempe', 'Mineral', '2020-06-22'),
(0, 'pagi', 'Nasi', 'tempe', 'Vitamin B', '2020-06-21'),
(0, 'siang', 'Nasi', 'telor sambal', 'Vitamin B,D E', '2020-06-21'),
(0, 'malam', 'Mie', 'tempe,bakwan,daging', 'Vitamin B,protein', '2020-06-21'),
(0, 'pagi', 'Sagu', 'Ikan teri', 'Karbohidrat,Protein', '2020-06-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `IdMahasiswa` int(11) NOT NULL,
  `nama` varchar(69) NOT NULL,
  `password` varchar(69) NOT NULL,
  `role` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`IdMahasiswa`, `nama`, `password`, `role`) VALUES
(2, 'wahyu', '6969', '0'),
(3, 'permana', '9696', 'mahasiswa'),
(4, 'dosen', 'dosen', 'dosen'),
(5, 'chef', 'chef', 'chef'),
(6, 'staf', 'staf', 'staf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` varchar(1500) DEFAULT NULL,
  `pengirim` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `tanggal`, `judul`, `isi`, `pengirim`) VALUES
(10, '2020-06-11', 'tidak boleh masuk kekantin saat di pel', 'beberapa hari terakir banyak manhdjgj berfungsi untuk menambahkan pengguna baru. Formulir HTML digunakan untuk menerima masukan data pengguna. Setelah data pengguna diserahkan, MySQL INSERT Query digunakan untuk memasukkan data pengguna ke dalam database', 'chef'),
(13, '2020-06-23', 'Peniadaan susu', 'Hari ini susu tidak ada karena jadwalnya akan dipindahkan', 'Chef'),
(18, '2020-06-23', 'Mahasiswa dipercepat pulang ke asrama', 'Mahasiswa diperbolehkan pulang ke asrama pukul 3 sore', 'Keasramaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff_gudang`
--

CREATE TABLE `staff_gudang` (
  `IdStaff` int(11) NOT NULL,
  `nama` varchar(69) NOT NULL,
  `password` varchar(69) NOT NULL,
  `role` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff_gudang`
--

INSERT INTO `staff_gudang` (`IdStaff`, `nama`, `password`, `role`) VALUES
(1, 'Staff', 'Staff', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `asrama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `username`, `password`, `asrama`, `prodi`, `role`) VALUES
(1, 11418029, 'Permana', 'Permana', '123', 'Nazareth', 'D4', 'mahasiswa'),
(3, 123, 'chef', 'chef', 'chef', 'chef', 'chef', 'chef'),
(5, 123, 'keasramaan', 'keasramaan', 'keasramaan', 'keasramaan', 'keasramaan', 'keasramaan'),
(7, 123, 'keasramaan', 'keasramaan', 'keasramaan', 'keasramaan', 'keasramaan', 'keasramaan'),
(9, 123, 'staff', 'staff', 'staff', 'staff', 'staff', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jlhmhs`
--
ALTER TABLE `jlhmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kantin_baru`
--
ALTER TABLE `kantin_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`IdMahasiswa`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff_gudang`
--
ALTER TABLE `staff_gudang`
  ADD PRIMARY KEY (`IdStaff`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jlhmhs`
--
ALTER TABLE `jlhmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kantin_baru`
--
ALTER TABLE `kantin_baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `IdMahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `staff_gudang`
--
ALTER TABLE `staff_gudang`
  MODIFY `IdStaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
