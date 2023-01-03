-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 05:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int(10) NOT NULL,
  `nama_alumni` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `idberita` int(10) NOT NULL,
  `judul` varchar(70) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `tag` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_jabatan`
--

CREATE TABLE `tb_detail_jabatan` (
  `id_detail_jabatan` int(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `id_tas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_eskul`
--

CREATE TABLE `tb_eskul` (
  `id_eskul` int(10) NOT NULL,
  `nama_eskul` varchar(25) NOT NULL,
  `logo_eskul` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(5) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `tmt` varchar(5) NOT NULL,
  `status` enum('Aktif','Tidak Aktif','','') NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `idjurusan` int(10) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `idkelas` int(10) NOT NULL,
  `namakelas` varchar(30) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `idjurusan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `idkomentar` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `surel` varchar(30) NOT NULL,
  `komentar` varchar(30) NOT NULL,
  `idberita` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `idmapel` int(10) NOT NULL,
  `idkelas` int(10) NOT NULL,
  `idguru` int(10) NOT NULL,
  `nama_mapel` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_misi`
--

CREATE TABLE `tb_misi` (
  `id_misi` int(11) NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(10) NOT NULL,
  `ket_prestasi` text NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `id_eskul` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `NPSN` varchar(15) NOT NULL,
  `NSS` varchar(15) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL,
  `akreditasi` varchar(3) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `nomor_fax` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `jenjang` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `lintang` varchar(25) NOT NULL,
  `bujur` varchar(25) NOT NULL,
  `ketinggian` int(25) NOT NULL,
  `waktu_belajar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_saranaprasarana`
--

CREATE TABLE `tb_saranaprasarana` (
  `id_sarana` int(10) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `foto` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahunajar`
--

CREATE TABLE `tb_tahunajar` (
  `id_tahunajar` int(10) NOT NULL,
  `tahun_ajar` varchar(20) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tas`
--

CREATE TABLE `tb_tas` (
  `idtas` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lahir` int(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `nama_perguruan` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tahun_masuk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_visi`
--

CREATE TABLE `tb_visi` (
  `id_visi` int(10) NOT NULL,
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_alumni`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `tb_detail_jabatan`
--
ALTER TABLE `tb_detail_jabatan`
  ADD PRIMARY KEY (`id_detail_jabatan`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_tas` (`id_tas`);

--
-- Indexes for table `tb_eskul`
--
ALTER TABLE `tb_eskul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`idjurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`idkelas`),
  ADD KEY `idjurusan` (`idjurusan`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`idkomentar`),
  ADD KEY `idberita` (`idberita`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`idmapel`),
  ADD KEY `idkelas` (`idkelas`),
  ADD KEY `idguru` (`idguru`);

--
-- Indexes for table `tb_misi`
--
ALTER TABLE `tb_misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `id_eskul` (`id_eskul`);

--
-- Indexes for table `tb_saranaprasarana`
--
ALTER TABLE `tb_saranaprasarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_tahunajar`
--
ALTER TABLE `tb_tahunajar`
  ADD PRIMARY KEY (`id_tahunajar`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_tas`
--
ALTER TABLE `tb_tas`
  ADD PRIMARY KEY (`idtas`);

--
-- Indexes for table `tb_visi`
--
ALTER TABLE `tb_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `idberita` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_eskul`
--
ALTER TABLE `tb_eskul`
  MODIFY `id_eskul` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `idjurusan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `idkelas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `idkomentar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `idmapel` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_saranaprasarana`
--
ALTER TABLE `tb_saranaprasarana`
  MODIFY `id_sarana` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tahunajar`
--
ALTER TABLE `tb_tahunajar`
  MODIFY `id_tahunajar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tas`
--
ALTER TABLE `tb_tas`
  MODIFY `idtas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_visi`
--
ALTER TABLE `tb_visi`
  MODIFY `id_visi` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD CONSTRAINT `tb_alumni_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_alumni_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`idkelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_jabatan`
--
ALTER TABLE `tb_detail_jabatan`
  ADD CONSTRAINT `tb_detail_jabatan_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tb_guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_jabatan_ibfk_2` FOREIGN KEY (`id_tas`) REFERENCES `tb_tas` (`idtas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_jabatan_ibfk_3` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`idjurusan`) REFERENCES `tb_jurusan` (`idjurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`idberita`) REFERENCES `tb_berita` (`idberita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD CONSTRAINT `tb_mapel_ibfk_1` FOREIGN KEY (`idkelas`) REFERENCES `tb_kelas` (`idkelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mapel_ibfk_2` FOREIGN KEY (`idguru`) REFERENCES `tb_guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD CONSTRAINT `tb_prestasi_ibfk_1` FOREIGN KEY (`id_eskul`) REFERENCES `tb_eskul` (`id_eskul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tahunajar`
--
ALTER TABLE `tb_tahunajar`
  ADD CONSTRAINT `tb_tahunajar_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tahunajar_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`idkelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
