-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2023 pada 08.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempat_makan_mindo_enak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(4, 'Cemilan'),
(5, 'Pencuci Mulut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `kode_makanan` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `id_me_sak` int(11) NOT NULL,
  `nama_makanan` varchar(200) NOT NULL,
  `harga` decimal(11,0) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `kode_makanan`, `foto`, `id_me_sak`, `nama_makanan`, `harga`, `id_kategori`) VALUES
(36, 'MK-001', '../images/e52116a2-fd93-4d0e-ad0d-480c600fa9e9.jpg', 5, 'Sate Bulayak', 20000, 1),
(37, 'MK-002', '../images/54512524-130736838060661-7348169627997363809-n-5225e6e6d37cec118c244c118039602c_600x400.jpg', 1, 'Bebek Goreng Sinjay', 30000, 1),
(42, 'MK-005', '../images/soto-ayam-ambengan-foto-resep-utama.jpg', 2, 'Soto Ayam Ambengan', 25000, 1),
(43, 'MK-003', '../images/Nasi_Gudeg.jpg', 2, 'Gudeg', 10000, 1),
(44, 'MK-004', '../images/9261fcca-e673-445f-a332-34d4a05ecd3b.jpg', 6, 'Ayam Betutu', 50000, 1),
(45, 'MN-001', '../images/0ad9fed6605d25e8b7220829f2560e19.jpg', 8, 'Oreo Frappuccino', 10000, 2),
(46, 'MN-002', '../images/peach-daiquiri-6-1140x1710.jpg', 7, 'Summer Fruit Daiquiris', 20000, 2),
(47, 'MN-003', '../images/OIP.jpeg', 8, 'Cheese Tea', 5000, 2),
(48, 'MN-004', '../images/OIP (1).jpeg', 7, 'King Mango Thai', 5000, 2),
(49, 'MN-005', '../images/OIP (2).jpeg', 8, 'Coffee Milk Boba', 10000, 2),
(50, 'SN-001', '../images/Mi-Lidi-Mih-Iteung.jpg', 1, 'Mi Lidi Mih Iteung', 5000, 4),
(51, 'SN-002', '../images/Lays-Nori-Seaweed-Flavor.jpg', 1, 'Lay’s Nori Seaweed Flavor', 9000, 4),
(52, 'SN-003', '../images/Cheetos-Puffs-BBQ-Steak-Flavor.jpg', 1, 'Cheetos Puffs BBQ Steak Flavor', 7000, 4),
(53, 'SN-004', '../images/Pringles-Sour-Cream-Onion.jpg', 1, 'Pringles Sour Cream & Onion', 12000, 4),
(54, 'SN-005', '../images/Ei-Salted-Egg-Crispy-Chicken-Skin.jpg', 1, 'Ei Salted Egg Crispy Chicken Skin', 15000, 4),
(55, 'DS-001', '../images/dessert-1-b097a980e47ac6d95572df6190bb5054.jpg', 4, 'Dadar gulung', 2000, 5),
(56, 'DS-002', '../images/dessert-2-34df869acc1e7b738d9dc82c5a202873.jpg', 4, 'American Pie', 20000, 5),
(57, 'DS-003', '../images/dessert-3-b8acce718631363563dc6417863ce64e.jpg', 4, 'Baklava', 25000, 5),
(58, 'DS-004', '../images/dessert-4-00307212db9444ae639cb2de34febde8.jpg', 4, 'Gelato', 5000, 5),
(59, 'DS-005', '../images/dessert-5-be022d93d255fce5f7c91dd167dc4278.jpg', 1, 'Picarones', 12000, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `me_sak`
--

CREATE TABLE `me_sak` (
  `id_me_sak` int(11) NOT NULL,
  `me_sak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `me_sak`
--

INSERT INTO `me_sak` (`id_me_sak`, `me_sak`) VALUES
(1, 'Digoreng'),
(2, 'Direbus'),
(3, 'Dipanggang'),
(4, 'Dikukus'),
(5, 'Dibakar'),
(6, 'Diasap'),
(7, 'Diblender'),
(8, 'Diseduh');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_me_sak` (`id_me_sak`);

--
-- Indeks untuk tabel `me_sak`
--
ALTER TABLE `me_sak`
  ADD PRIMARY KEY (`id_me_sak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `me_sak`
--
ALTER TABLE `me_sak`
  MODIFY `id_me_sak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `makanan_ibfk_2` FOREIGN KEY (`id_me_sak`) REFERENCES `me_sak` (`id_me_sak`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
