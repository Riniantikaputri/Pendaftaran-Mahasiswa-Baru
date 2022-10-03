-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2021 pada 15.32
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_mahasiswa_baru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(11) NOT NULL,
  `kewarganegaraan` char(3) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `no_telp` char(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_pos` char(5) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `nilai_raport` float NOT NULL,
  `prog1` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `paket` varchar(30) NOT NULL,
  `dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama`, `email`, `tempat_lahir`, `tanggal_lahir`, `jk`, `kewarganegaraan`, `agama`, `no_telp`, `alamat`, `kode_pos`, `provinsi`, `kabupaten`, `kecamatan`, `pendidikan`, `sekolah`, `nilai_raport`, `prog1`, `status`, `paket`, `dosen`) VALUES
(23, 'Rini Antika', 'riniantika020699@gmail.com', 'Sampang', '1999-06-02', 'Perempuan', 'WNI', 'Islam', '085235770695', 'P. Mandangin Samoang', '20166', 'sampang', 'sampang', 'sampang', 'SMA-IPA', 'MAN Sampang', 95, 'S1 - Sistem Informasi', 'Diterima', 'S1-SI Paket Kelas B', 'Suprapman, S.Kom,. M.Kom'),
(24, 'Fajar Andaru', 'fajarandaru@gmail.com', 'Sidoarjo', '2000-01-04', 'Laki-laki', 'WNI', 'Islam', '0987665432211', 'Sidoarjo', '3456', 'Sidoarjo', 'Sidoarjo', 'Sidoarjo', 'SMA-IPA', 'SMA 1 Sidoarjo', 95, 'S1 - Sistem Informasi', 'Diterima', 'S1-SI Paket Kelas A', 'Suprapman, S.Kom,. M.Kom'),
(25, 'Celin', 'ddd@gmail.com', 'Kanada', '2021-01-06', 'Perempuan', 'WNA', 'Katolik', '085235770695', 'Kanada', '55673', 'Kanada', 'Kanada', 'Kanada', 'SMK-IPA', 'SMA Kanada', 60, 'S1 - Teknik Informatika', 'Ditolak', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(27, 'www', 'ddde@gmail.com', 'www', '2021-01-12', 'Laki-laki', 'WNI', 'Kristen', '085235770695', 'www', '33', 'dd', 'dd', 'dd', 'SMK-IPA', 'dd', 33, 'S1 - Sistem Informasi', 'Ditolak', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(31, 'rrrrrr', 'rrrrrrr@gmail.com', 'rrrrrrr', '2021-01-01', 'Perempuan', 'WNI', 'Islam', '085235770695', 'rrrrrrrr', '55673', 'rrrrrrrr', 'rrrrrrrr', 'rrrrrrr', 'SMA-IPA', 'rrrrrrr', 90, 'S1 - Teknik Informatika', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(32, 'rrrrrr', 'uuu@gmail.com', 'rrrrrrr', '2021-01-01', 'Perempuan', 'WNI', 'Islam', '085235770695', 'rrrrrrrr', '55673', 'rrrrrrrr', 'rrrrrrrr', 'rrrrrrr', 'SMA-IPA', 'rrrrrrr', 90, 'S1 - Sistem Informasi', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(33, 'Syaffii', 'syaffi@gmail.com', 'Jakarta', '2021-01-15', 'Laki-laki', 'WNI', 'Islam', '09877898754', 'Jakarta', '7654', 'Jakarta', 'Jakarta', 'Jakarta', 'SMA-IPA', 'SMAN 3 Jakarta ', 80, 'S1 - Teknik Informatika', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(34, 'Zainul Fata ', 'zainpatahtulanghaha@gmail.com', 'Sampang', '1998-08-10', 'Laki-laki', 'WNI', 'Islam', '087654987547', 'Sampang Banjir', '20166', 'sampang', 'sampang', 'sampang', 'SMA-IPA', 'SMA 1Sampang', 85, 'S1 - Teknik Informatika', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(35, 'aku', 'aku@gmail.com', 'mojokerto', '2021-01-05', 'Perempuan', 'WNI', 'Islam', '09877898754', 'esjbjvyhcgfschvszkjb', '55673', 'mojokerto', 'mojokerto', 'mojokerto', 'SMA-IPA', 'smk 1 mojokerto', 90, 'S1 - Sistem Informasi', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(36, 'kamu', 'kamu@gmail.com', 'jogja', '2021-01-26', 'Laki-laki', 'WNI', 'Islam', '09877898754', 'jogja', '3456', 'jogja', 'jogja', 'jogja', 'SMK-IPA', 'SMA 1jogja', 95, 'S1 - Teknik Informatika', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(37, 'dia', 'dia@gmail.com', 'surga', '2021-01-19', 'Perempuan', 'WNI', 'Islam', '085235770695', 'surga', '60166', 'surga', 'surga', 'surga', 'SMA-IPA', 'SMA surga', 95, 'S1 - Sistem Informasi', 'Diterima', 'S1-SI Paket Kelas B', 'Tidak Diketahui'),
(38, 'sudarwati', 'sudarwati@gmail.com', 'Surabaya', '2021-01-19', 'Perempuan', 'WNI', 'Islam', '085235770695', 'Surabaya', '3456', 'Surabaya', 'Surabaya', 'Surabaya', 'SMA-IPS', 'SMA 1 Surabaya', 90, 'S1 - Teknik Informatika', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(39, 'Ahmad', 'ahmad@gmail.com', 'Lamongan', '2021-01-11', 'Laki-laki', 'WNI', 'Islam', '085235770695', 'Lamongan', '55673', 'Lamongan', 'Lamongan', 'Lamongan', 'SMK-IPA', 'MAN Lamongan', 95, 'S1 - Teknik Informatika', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(40, 'Bruno', 'bruno@gmail.com', 'Surabaya', '2021-01-15', 'Laki-laki', 'WNI', 'Kristen', '0987665432211', 'Surabaya', '20166', 'Surabaya', 'Surabaya', 'Surabaya', 'SMA-IPA', 'SMA 4 Surabaya', 95, 'S1 - Teknik Informatika', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(41, 'Ica', 'ica@gmail.com', 'Nganjuk', '2021-01-18', 'Perempuan', 'WNI', 'Islam', '086578864552', 'Nganjuk', '55673', 'Nganjuk', 'Nganjuk', 'Nganjuk', 'SMK-IPS', 'SMK 1 Nganjuk', 90, 'S1 - Teknik Informatika', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(42, 'Fatoni Irhamni', 'fatoniirhamni@gmail.com', 'Sampang', '2021-01-13', 'Laki-laki', 'WNI', 'Islam', '085235770695', 'Sampang', '60166', 'Jawa Timur', 'Sampang', 'Sampang', 'SMA-IPA', 'SMA Khadija Surabaya', 95, 'S1 - Sistem Informasi', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui'),
(43, 'a', 'a@gmail.com', 'Sampang', '2020-12-31', 'Laki-laki', 'WNI', 'Islam', '085235770695', 'a', '60166', 'Jawa Timur', 'Sampang', 'Sampang', 'SMA-IPA', 'MAN SAMPANG', 95, 'S1 - Sistem Informasi', 'Diterima', 'Belum Melakukan Daftar Ulang', 'Tidak Diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_tlp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_addres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_tlp`, `admin_email`, `admin_addres`) VALUES
(1, 'Rini Antika', 'admin', '21232f297a57a5a743894a0e4a801fc3', '086765876765', 'riniantika0206@gmail.com', 'Sampang'),
(2, 'Sinta', 'admin1', '81dc9bdb52d04dc20036dbd8313ed055', '09876543333', 'sinta@gmail.com', 'Surabaya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
