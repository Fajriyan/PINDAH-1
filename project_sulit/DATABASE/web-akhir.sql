-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2020 pada 06.26
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acc`
--

CREATE TABLE `acc` (
  `npm` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `Tgl` varchar(30) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `NIK` varchar(15) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`NIK`, `nama_dosen`) VALUES
('18935780235', 'priagung adib'),
('3501732801', 'fajriyan nur'),
('786028915', 'rosiful aqli'),
('8376281608', 'siti zulaikhah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_seminar`
--

CREATE TABLE `jadwal_seminar` (
  `npm` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_ujian`
--

CREATE TABLE `jadwal_ujian` (
  `judul_skripsi` varchar(100) NOT NULL,
  `Nama_mahasiswa` varchar(100) NOT NULL,
  `NPM` varchar(15) NOT NULL,
  `penguji_1` varchar(100) NOT NULL,
  `penguji_2` varchar(100) NOT NULL,
  `penguji_3` varchar(100) NOT NULL,
  `Tgl_ujian` varchar(100) NOT NULL,
  `Jam` varchar(10) NOT NULL,
  `Tempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_ujian`
--

INSERT INTO `jadwal_ujian` (`judul_skripsi`, `Nama_mahasiswa`, `NPM`, `penguji_1`, `penguji_2`, `penguji_3`, `Tgl_ujian`, `Jam`, `Tempat`) VALUES
('pelatihan gerak tubuh pada lansia dengan memanfaatkan aplikasi gerak tubuh', 'yogi khoirul anwar', '180403010034', 'priagung adib', 'fajriyan nur', 'ahmad toyib', '02 juli 2020', '13.00', 'ruang abdul rajab'),
('pengolahan minyak kepala sawit dengan memanfaatkan mesin tepat guna', 'alhimni gilang bilfahmi', '180403010044', 'yogi khoirul anwar', 'fajriyan nur', 'priagung adib', '25 juli 2020', '13.00', 'lab jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_pendaftar`
--

CREATE TABLE `list_pendaftar` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `judul_skripsi` varchar(100) NOT NULL,
  `draf` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_pendaftar`
--

INSERT INTO `list_pendaftar` (`nim`, `nama`, `email`, `hp`, `judul_skripsi`, `draf`, `status`, `time`) VALUES
('001', 'ADMIN UTAMA', 'admin@gmail.com', '085743545345', 'ADMIN DAFTAR', 'rvt_17.txt||001', '', 1578198677),
('180403010037', 'Akmal', 'akmal@gmail.com', '087987927397', 'MEKANISME PENGGERAK SEBUAH MESIN', 'MASIH CONTOH', 'DI TOLAK', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_proposaldisetujui`
--

CREATE TABLE `list_proposaldisetujui` (
  `NPM` varchar(15) NOT NULL,
  `Nama_mahasiswa` varchar(100) NOT NULL,
  `judul_skripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_proposaldisetujui`
--

INSERT INTO `list_proposaldisetujui` (`NPM`, `Nama_mahasiswa`, `judul_skripsi`) VALUES
('180403010034', 'yogi khoirul anwar', 'pelatihan gerak tubuh pada lansia dengan memanfaatkan aplikasi gerak tubuh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nomor` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nomor`, `nama`, `username`, `password`, `level`) VALUES
('001', 'ADMIN UTAMA', 'admin', 'admin', '2'),
('180403010038', 'Fajriyan Nur', 'fajriyan', 'fajriyan', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `list_pendaftar`
--
ALTER TABLE `list_pendaftar`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nomor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
