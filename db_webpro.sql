-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2020 pada 14.24
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
  `password` varchar(100) NOT NULL,
  `semua_spesialisasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id_akun`, `nama_lengkap`, `tanggal_lahir`, `level`, `email`, `password`, `semua_spesialisasi`) VALUES
(1, 'Admin', '1995-04-12', 'Admin', 'admin@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(2, 'Dr Premium', '1990-03-01', 'Dokter', 'dokter@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Spesialis Rumah Tangga'),
(3, 'Dr Burhan Butar-Butar, Sp.GK', '1983-05-28', 'Dokter', 'mata@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Spesialis Gizi'),
(4, 'Aa Munjul', '2002-07-10', 'Member', 'aa@munjul.com', '5f4dcc3b5aa765d61d8327deb882cf99', '');

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
  `url` text NOT NULL,
  `id_akun` int(20) NOT NULL,
  `verif` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `isi_blog`, `gambar`, `rilis_blog`, `url`, `id_akun`, `verif`) VALUES
(1, 'Lawan Bad Mood, Ini 3 Makanan yang Bikin Bahagia', 'Tak terasa sudah sebulan lebih sebagian besar dari kita menjalani work from home dan social distancing serta karantina mandiri untuk mencegah penyebaran virus corona atau Covid-19. Perasaan sedih, bosan, cemas hingga stress tentunya sudah kita rasakan selama harus berada di rumah aja. Meski begitu kita jangan sampai lupa untuk bahagia, sebab perasaan bahagia dapat memperkuat sistem kekebalan tubuh kita untuk menangkal virus.<br/>\r\n\r\nCara termudah adalah dengan mengonsumsi makanan yang enak bergizi yang bisa membangkitkan perasaan bahagia. Seperti pepatah, \"Jika perutmu bahagia, maka kamu akan lebih bahagia\". Berikut ini 7 makanan yang tidak hanya menyehatkan tubuh kamu, tapi juga membuat kamu merasa lebih bahagia, santai dan mengusir rasa depresi atau cemas selama harus di rumah aja.  <br/><br/>\r\n\r\n1. Pisang<br/><br/>\r\n\r\nSelain buah alpukat yang kaya akan antioksidan dan asam folat, ternyata buah pisang juga kaya akan antioksidan, vitamin, dan probiotik. Buah ini membantu proses pencernaan, membantu kinerja usus yang secara langsung mempengaruhi mood kita. Selain itu, pisang mengandung tryptophan, sejenis protein yang diubah tubuh menjadi serotonin yang dikenal untuk membuat rileks, memperbaiki mood.\r\n<br/><br/>\r\n2. Mangga<br/><br/>\r\n\r\nSeperti halnya pisang, buah mangga juga kaya akan antioksidan, vitamin, dan mineral. Warna, wangi dan rasa mangga juga sangat lekat dengan hal-hal yang membuat bahagia. Buah ini juga memiliki kandungan serat yang bisa membantu melancarkan proses pencernaan.<br/><br/>\r\n\r\n3. Keju<br/><br/>\r\n\r\nSebagian dari kita mungkin hanya berpikir coklat saja yang mampu memberikan kebahagiaan, ternyata keju juga merupakan salah satu bahan makanan yang ampuh bikin kamu bahagia karena memiliki kadar triptofan yang tinggi! Keju sekarang bisa banyak kamu temukan di berbagai makanan dan camilan kekinian. Untuk camilan lain, kamu juga bisa memilih kacang almond memiliki kandungan omega-3 yang dapat memproduksi zat dopamine yang bisa mengatasi rasa grogi dan nervous.', 'ragam_buah_con.jpg', 'Hari Tuesday, Jam 19:09', '75cab3f120dc0237697ec37b070c3096', 2, 1),
(2, 'Cara Menjaga Kesehatan Mental Tengah Pandemi Corona COVID-19', 'Di tengah pandemi virus Corona Covid-19 yang masih marak, masyarakat diimbau mengurung diri di rumah. Ini dilakukan untuk menekan penyebaran virus yang pertama kali munculdi Wuhan, China itu.\r\n\r\nHanya saja, hal ini ternyata malah bisa meningkatkan kecemasan kita dan mencederai kesehatan mental.\r\n\r\nNamun, menurut Psikolog Intan Erlita, M.Psi, kecemasaan sebenarnya seuatu yang alami atau normal yang dirasakan seseorang. Dengan penanganan yang tepat, kecemasan justu menjadi penanda bagi tubuh untuk melakukan hal yang disarankan, seperti dalam keadaan pandemi virus corona covid-19.\r\n\r\n\"Kecemasan merupakan alarm tubuh untuk kita lebih mawas diri seperti ada wabah virus corona. Kita lebih sadar akan kesehatan tubuh, minum vitamin, makan-makanan sehat, dan rajin cuci tangan. Jadi kita tahu harus melakukan apa,\" ujar Erlita.\r\n\r\nKecemasaan tetap dibutuhkan agar tidak cuek dengan keadaan, namun jangan sampai berlebihan. Sebab kita nantinya malah sulit membedakan mana benar atau salah jika cemas berlebih.\r\n\r\n\"Jadi kalau berlebih malah jadi stres hingga depresi. Malah nantinya ada masalah psikologis. Cemas boleh untuk alarm diri namun tidak berlebih,\" tambahnya.\r\n\r\nIa pun membagikan beberapa tips agar kita tetap menjaga kesehatan mental dan tidak kebingungan dalam menerima informasi seperti mengenai virus corona covid-19.\r\n\r\nHindari Berita Negatif', 'gambarr.jpg', 'Hari Wednesday, Jam 01:00', 'cara-menjaga-kesehatan-mental-tengah-pandemi-corona-covid-19', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsul`
--

CREATE TABLE `konsul` (
  `idk` int(11) NOT NULL,
  `id_dokter` int(5) NOT NULL,
  `id_konsul` int(5) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `created` datetime NOT NULL,
  `dokter_respone` int(2) NOT NULL,
  `user_respone` int(2) NOT NULL,
  `url_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_konsul`
--

CREATE TABLE `pesan_konsul` (
  `id_pesan` int(11) NOT NULL,
  `url_hash` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `ida` int(5) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indeks untuk tabel `konsul`
--
ALTER TABLE `konsul`
  ADD PRIMARY KEY (`idk`);

--
-- Indeks untuk tabel `pesan_konsul`
--
ALTER TABLE `pesan_konsul`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konsul`
--
ALTER TABLE `konsul`
  MODIFY `idk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_konsul`
--
ALTER TABLE `pesan_konsul`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
