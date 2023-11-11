-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Nov 2023 pada 03.48
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `username`, `password`) VALUES
(1, 'coki', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `judul` text NOT NULL,
  `penulis` text NOT NULL,
  `tahun_terbit` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `tahun_terbit`) VALUES
(10, 'konspirasi alam semesta', 'fiersa besari', 2014),
(11, 'sherlock holmes', 'sir arthur conan doyle', 1890);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `ID_Peminjaman` int NOT NULL,
  `ID_Buku` int NOT NULL,
  `Tanggal_Peminjaman` date NOT NULL,
  `Tanggal_Pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`ID_Peminjaman`, `ID_Buku`, `Tanggal_Peminjaman`, `Tanggal_Pengembalian`) VALUES
(1011, 1, '2023-10-16', '2023-10-24'),
(1015, 2, '2023-10-17', '2023-10-19'),
(1019, 5, '2023-10-28', '2023-10-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(11, ' Firaun Keturunan Jawa: Kebesaran Budaya dalam Genggaman Modernitas', 'Kota Candi, 7 November 2023 - Sebuah kisah menarik muncul dari tanah Jawa, Indonesia, di mana seorang pemimpin bernama Arjuna Prabu mengguncang dunia dengan menjadi Firaun, menggabungkan kearifan lokal dengan teknologi modern. Dalam kepemimpinannya, Firaun Arjuna Prabu membangun negara yang maju, memelihara budaya Jawa, dan membawa kekayaan sejarah leluhurnya ke panggung global. Kesuksesannya mengilhami dunia tentang pentingnya memelihara warisan budaya sambil bersikap progresif dalam menghadapi masa depan.', 'uploads/owi.jpeg', '2023-11-07 08:02:56'),
(12, ' Presiden Amerika Serikat Joe Biden Menyukai Pecel Lele Pak Mansyur', 'Washington D.C., 7 November 2023 - Presiden Amerika Serikat Joe Biden membuat kejutan di dunia kuliner dengan mengungkapkan kesukaannya terhadap hidangan khas Indonesia, pecel lele dari warung Pak Mansyur. Dalam kunjungan diplomatiknya ke Indonesia beberapa waktu lalu, Presiden Biden mencicipi pecel lele yang terkenal itu dan menyatakan ketertarikannya pada cita rasa autentik dan rempah-rempah yang khas.', 'uploads/biden.jpg', '2023-11-07 08:03:29'),
(13, 'Anies Baswedan Mengaku Mampu Meratakan Israel dengan Pasukan Zetsu Putih', 'Jakarta, 7 November 2023 - Dalam sebuah wawancara eksklusif, Gubernur DKI Jakarta, Anies Baswedan, mengungkapkan keyakinannya bahwa pasukan Zetsu Putih yang dipimpinnya memiliki potensi untuk meratakan dunia. Dalam pernyataannya, Anies Baswedan menekankan pentingnya perdamaian global dan kerjasama antarbangsa untuk mencapai kemajuan bersama. Meskipun singkat, pernyataan tersebut menimbulkan diskusi luas di kalangan masyarakat dan memicu perdebatan tentang peran pasukan Zetsu Putih dalam geopolitik dunia.', 'uploads/anies.jpg', '2023-11-07 08:21:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `username`
--

CREATE TABLE `username` (
  `id` int NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `username`
--

INSERT INTO `username` (`id`, `username`, `password`) VALUES
(1, 'zaki', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`ID_Peminjaman`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `ID_Peminjaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `username`
--
ALTER TABLE `username`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
