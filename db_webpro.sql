-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 11.49
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id_akun` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `level` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id_akun`, `nama_lengkap`, `tanggal_lahir`, `level`, `email`, `password`) VALUES
(1, 'Cornelius Alfredo', '2020-04-16', 'Admin', 'admin@email.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Aldy', '2020-12-22', 'Member', 'aldy@email.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'aldy', '2020-04-08', 'Member', 'akscakn@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi_blog` text NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `rilis_blog` varchar(225) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `isi_blog`, `gambar`, `rilis_blog`, `url`) VALUES
(1, '4 Cara Sederhana Mencegah Virus Corona Covid-19, Wajib Dilakukan', 'Peningkatan kasus virus corona Covid-19 masih berlangsung di berbagai penjuru dunia. Hingga awal April ini belum ditemukan vaksin yang tepat untuk menangkalnya.\r\n\r\nMeskipun begitu, para peneliti di seluruh dunia tetap terus mengupayakan serangkaian uji tes vaksin untuk menekan laju penyebaran virus corona COVID-19.\r\n\r\nMaka dari itu, menerapkan tindakan pencegahan dengan semaksimal mungkin adalah salah satu hal yang wajib dilakukan. Berikut merupakan 10 cara sederhana yang dapat Anda lakukan di rumah. Artikel ini disadur dari Merdeka.com.\r\n\r\n1. Cuci Tangan\r\n\r\nTindakan pertama yang dapat dilakukan untuk menangkal virus corona adalah dengan rajin mencuci tangan. Sebab, tangan adalah salah satu anggota tubuh yang menjadi sumber penyakit.\r\n\r\nCuci tangan dengan durasi minimal 20 detik untuk membunuh virus corona menggunakan sabun dan air bersih yang mengalir. Setelah itu, keringkan tangan menggunakan kain yang bersih atau tisu.\r\n\r\nTindakan pencegahan yang satu ini dianggap lebih efektif untuk membunuh kuman, bakteri, termasuk virus corona. Cuci tangan merupakan langkah yang disarankan oleh banyak pihak, termasuk Organisasi Kesehatan Dunia.\r\n\r\n2. Hindari Sentuh Wajah\r\n\r\nTelah diketahui bahwa tangan dapat menjadi sumber penyakit sebab sering terjadi kontak dengan benda maupun orang lain. Sementara itu, virus corona disinyalir dapat masuk tubuh manusia melalui segitiga wajah yakni mata, hidung, dan mulut.\r\n\r\nMaka dari itu, hindari untuk menyentuh wajah menggunakan tangan. Apabila terpaksa harus menyentuh wajah, maka pastikan untuk mencuci tangan terlebih dahulu dengan sabun.\r\n\r\n3. Etika Bersin dan Batuk\r\n\r\nTerapkan etika bersin dan batuk dengan benar menggunakan siku tangan bagian dalam atau tisu bersih. Sebab, cairan yang diproduksi pada saat batuk dan bersin tersebut dapat menjadi media penularan virus corona.\r\n\r\nApabila Anda menggunakan tisu, maka segera buang ke tempat sampah dan cuci tangan menggunakan sabun hingga bersih dan kering kembali.\r\n\r\n4. Memakai Masker\r\n\r\nVirus corona tidak menyebar melalui udara. Namun, penggunaan masker dapat meminimalisir penularan virus corona. Sebab, virus corona dapat menyebar melalui droplets dan dapat masuk ke dalam tubuh melalui selaput lender seperti mata, mulut, dan hidung.\r\n\r\nMasker juga dapat digunakan ketika seseorang dalam kondisi yang kurang sehat. Hindari untuk menggunakan satu masker secara berulang-ulang. Sebab, masker dapat mengandung berbagai jenis kuman, bakteri, dan virus setelah dipakai.', 'http://www.dokterweb.com/wp-content/uploads/2016/12/project-blog-by-dokterweb.jpg', 'Sekarang', ''),
(2, 'Masker biar sehat blok!', 'Peningkatan kasus virus corona Covid-19 masih berlangsung di berbagai penjuru dunia. Hingga awal April ini belum ditemukan vaksin yang tepat untuk menangkalnya.\r\n\r\nMeskipun begitu, para peneliti di seluruh dunia tetap terus mengupayakan serangkaian uji tes vaksin untuk menekan laju penyebaran virus corona COVID-19.\r\n\r\nMaka dari itu, menerapkan tindakan pencegahan dengan semaksimal mungkin adalah salah satu hal yang wajib dilakukan. Berikut merupakan 10 cara sederhana yang dapat Anda lakukan di rumah. Artikel ini disadur dari Merdeka.com.\r\n\r\n1. Cuci Tangan\r\n\r\nTindakan pertama yang dapat dilakukan untuk menangkal virus corona adalah dengan rajin mencuci tangan. Sebab, tangan adalah salah satu anggota tubuh yang menjadi sumber penyakit.\r\n\r\nCuci tangan dengan durasi minimal 20 detik untuk membunuh virus corona menggunakan sabun dan air bersih yang mengalir. Setelah itu, keringkan tangan menggunakan kain yang bersih atau tisu.\r\n\r\nTindakan pencegahan yang satu ini dianggap lebih efektif untuk membunuh kuman, bakteri, termasuk virus corona. Cuci tangan merupakan langkah yang disarankan oleh banyak pihak, termasuk Organisasi Kesehatan Dunia.\r\n\r\n2. Hindari Sentuh Wajah\r\n\r\nTelah diketahui bahwa tangan dapat menjadi sumber penyakit sebab sering terjadi kontak dengan benda maupun orang lain. Sementara itu, virus corona disinyalir dapat masuk tubuh manusia melalui segitiga wajah yakni mata, hidung, dan mulut.\r\n\r\nMaka dari itu, hindari untuk menyentuh wajah menggunakan tangan. Apabila terpaksa harus menyentuh wajah, maka pastikan untuk mencuci tangan terlebih dahulu dengan sabun.\r\n\r\n3. Etika Bersin dan Batuk\r\n\r\nTerapkan etika bersin dan batuk dengan benar menggunakan siku tangan bagian dalam atau tisu bersih. Sebab, cairan yang diproduksi pada saat batuk dan bersin tersebut dapat menjadi media penularan virus corona.\r\n\r\nApabila Anda menggunakan tisu, maka segera buang ke tempat sampah dan cuci tangan menggunakan sabun hingga bersih dan kering kembali.\r\n\r\n4. Memakai Masker\r\n\r\nVirus corona tidak menyebar melalui udara. Namun, penggunaan masker dapat meminimalisir penularan virus corona. Sebab, virus corona dapat menyebar melalui droplets dan dapat masuk ke dalam tubuh melalui selaput lender seperti mata, mulut, dan hidung.\r\n\r\nMasker juga dapat digunakan ketika seseorang dalam kondisi yang kurang sehat. Hindari untuk menggunakan satu masker secara berulang-ulang. Sebab, masker dapat mengandung berbagai jenis kuman, bakteri, dan virus setelah dipakai.', 'https://cdn1-production-images-kly.akamaized.net/GOL-jAcIAMmHJULwh6S1JB8Go4k=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2790521/original/073924800_1556430263-iStock-533567012.jpg', 'Sekarang', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
