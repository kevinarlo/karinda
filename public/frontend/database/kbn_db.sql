-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Agu 2020 pada 07.24
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbn_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `alamat`, `email`, `telepon`, `username`, `password`) VALUES
(1, 'anggoro tri putranto', 'Taman Galaxy Indah, Jl.Pulo Sirih Timur 4Blok CB/28', 'putrantotrianggoro@gmail.com', '081584818373', 'anggoro', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogger`
--

CREATE TABLE `blogger` (
  `id` int(100) NOT NULL,
  `namaf` blob NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blogger`
--

INSERT INTO `blogger` (`id`, `namaf`, `judul`, `tanggal`, `isi`) VALUES
(1, 0x6d69652d696e7374616e2e6a7067, 'Bahaya Mie Instan Bagi Kesehatan', '2020-07-13', '<html>\r\n	<head>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			Setiap<span style=\"color: rgb(51, 51, 51);\"> orang sudah pasti kenal dengan makanan cepat saji bernama mie instan Kecuali mudah diperoleh, variasi makanan yang satu ini juga mempunyai rasa yang sedap.Hanya saja, dibalik sifat praktis dan rasanya yang sangat sedap, mie instan juga mempunyai sejumlah resiko.</span></p>\r\n		<p font-size:=\"\" open=\"\" style=\"border: 0px; margin: 0px 0px 1.5em; padding: 0px; color: rgb(51, 51, 51); font-family: \">\r\n			Menurut sejumlah hasil penelitian, Terlalu kerap mengonsumsi mie instan dapat meningkatkan resiko timbulnya penyakit kanker, ginjal dan usus buntu. Pada beberapa kasus orang yang mengkonsumsi mie instan berlebihan juga dapat menyebabkan kegemukan atau obesitas.</p>\r\n		<p font-size:=\"\" open=\"\" style=\"border: 0px; margin: 0px 0px 1.5em; padding: 0px; color: rgb(51, 51, 51); font-family: \">\r\n			Sekiranya Anda umumnya mengonsumsi mie instan tiap-tiap hari, mulailah untuk menguranginya dengan tenggang waktu 2hingga 3 hari dan lakukan sampai Anda terbebas dari mie instan sama sekali. Menurut penelitian rupanya didalam mie instan terdapat kandungan lilin yang sangat membahayakan bagi kesehatan manusia.</p>\r\n	</body>\r\n</html>\r\n'),
(5, 0x6869707765652d616e616b2d73642d373530783432322e6a7067, 'PENDIDIKAN SANGAT BERPENGARUH TERHADAP PENINGKATAN KUALITAS HIDUP SUKU ANAK DALAM', '2020-07-31', '<html>\r\n	<head>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			<span style=\"color: rgb(51, 51, 51);\">Sebuah tulisan sangat penting bagi setiap makhluk hidup di dunia salah satunya yaitu kita sebagai manusia. Karena manusia sebagai makhluk hidup yang memiliki nalar dan pikiran untuk meningkatkan kesejahteraan manusia itu sendiri. Tulisan dapat mensupport kehidupan seseorang maupun kategori orang.</span></p>\r\n		<p font-size:=\"\" open=\"\" style=\"border: 0px; margin: 0px 0px 1.5em; padding: 0px; color: rgb(51, 51, 51); font-family: \">\r\n			Di dalam sebuah pemikiran secara universal suatu pendidikan dan pengajaran terhadap setiap manusia sangat penting tidak terkecuali bagi suku anak dalam. Suku anak dalam sangatlah membutuhkan pengajaran yang cocok untuk dapat meningkatkan kesejahteraannya dalam menjalani kehidupan.</p>\r\n	</body>\r\n</html>\r\n'),
(6, 0x626c6f67332e6a7067, 'Diklaim Bisa Atasi Kecanduan Merokok, Benarkah Rokok Teh Hijau Efektif?', '2020-07-31', '<html>\r\n	<head>\r\n	</head>\r\n	<body>\r\n		<h2 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 400; line-height: 1.5; font-size: 18px; font-family: opensans-semibold, å®‹ä½“, SimSun, åŽæ–‡ç»†é»‘, STXihei, sans-serif; color: rgb(54, 69, 79); letter-spacing: 0.5px; background-color: rgb(255, 255, 255);\">\r\n			<span style=\"box-sizing: border-box; outline: none; font-family: opensans-bold, å®‹ä½“, SimSun, åŽæ–‡ç»†é»‘, STXihei, sans-serif;\">Benarkah rokok teh hijau bantu berhenti merokok?</span></h2>\r\n		<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255);\">\r\n			Belum ada penelitian tentang manfaat kesehatan dari rokok teh hijau. Hanya saja, memang ada kemungkinan substansi bermanfaat dari teh hijau bisa terserap lebih cepat oleh aliran darah lewat paru-paru. Meski demikian, mengonsumsi teh hijau dengan cara dihisap seperti merokok bukan hal yang sehat.</p>\r\n		<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255);\">\r\n			Beberapa klaim yang dirasakan orang yang merokok teh hijau di antaranya:</p>\r\n		<ul style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; padding-inline-start: 20px; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255);\">\r\n			<li style=\"box-sizing: border-box; outline: none;\">\r\n				<h3 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.5; font-size: 16px; font-family: opensans-semibold, å®‹ä½“, SimSun, åŽæ–‡ç»†é»‘, STXihei, sans-serif;\">\r\n					<span style=\"box-sizing: border-box; outline: none; font-weight: 400; font-family: opensans-bold, å®‹ä½“, SimSun, åŽæ–‡ç»†é»‘, STXihei, sans-serif;\">Mengurangi rasa cemas berlebih</span></h3>\r\n			</li>\r\n		</ul>\r\n		<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255); padding-left: 30px;\">\r\n			Di dalam teh hijau, ada substansi L-theanine yang merupakan jenis asam amino. Memang terbukti, L-theanine punya efek menurunkan rasa cemas seseorang berkat interaksinya dengan reseptor neurotransmitter. Namun menurut penelitian ilmiah, efek ini bisa diperoleh dengan mengonsumsi ekstrak atau minum teh hijau.</p>\r\n		<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255); padding-left: 30px;\">\r\n			Menariknya, ada juga yang mengklaim bahwa rokok teh hijau memberikan efek &ldquo;high&rdquo; (halusinasi) seperti mengonsumsi&nbsp;<a href=\"https://sehatq.com/artikel/lebih-banyak-mana-efek-buruk-ganja-atau-manfaat-ganja-untuk-kesehatan\" rel=\"noopener\" style=\"box-sizing: border-box; outline: none; color: rgb(84, 171, 173); text-decoration-line: none; background-color: transparent;\" target=\"_blank\">ganja</a>. Namun tetap saja, belum ada studi ilmiah yang mendukung klaim ini.</p>\r\n		<ul style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; padding-inline-start: 20px; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255);\">\r\n			<li style=\"box-sizing: border-box; outline: none;\">\r\n				<h3 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.5; font-size: 16px; font-family: opensans-semibold, å®‹ä½“, SimSun, åŽæ–‡ç»†é»‘, STXihei, sans-serif;\">\r\n					<span style=\"box-sizing: border-box; outline: none; font-weight: 400; font-family: opensans-bold, å®‹ä½“, SimSun, åŽæ–‡ç»†é»‘, STXihei, sans-serif;\">Bantu berhenti merokok</span></h3>\r\n			</li>\r\n		</ul>\r\n		<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255); padding-left: 30px;\">\r\n			Banyak orang yang memilih rokok teh hijau sebagai pengganti rokok biasa. Klaimnya, rokok teh hijau lebih sehat dan bisa menghilangkan kecanduan terhadap substansi adiktif dalam rokok yaitu nikotin. Namun tetap saja, belum ada studi yang membuktikan bahwa rokok teh hijau lebih sehat dan ampuh membantu seseorang berhenti merokok.</p>\r\n		<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255); padding-left: 30px;\">\r\n			Bahkan, rokok teh hijau dinilai bukan langkah berhenti merokok yang aman dan bisa diandalkan. Justru, menghirup asap apapun ke dalam paru-paru bisa menimbulkan kerusakan pada jaringan paru-paru.</p>\r\n		<ul style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; padding-inline-start: 20px; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255);\">\r\n			<li style=\"box-sizing: border-box; outline: none;\">\r\n				<h3 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.5; font-size: 16px; font-family: opensans-semibold, å®‹ä½“, SimSun, åŽæ–‡ç»†é»‘, STXihei, sans-serif;\">\r\n					<span style=\"box-sizing: border-box; outline: none; font-weight: 400; font-family: opensans-bold, å®‹ä½“, SimSun, åŽæ–‡ç»†é»‘, STXihei, sans-serif;\">Lebih berenergi</span></h3>\r\n			</li>\r\n		</ul>\r\n		<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255); padding-left: 30px;\">\r\n			Ada juga yang mengklaim bahwa rokok teh hijau membuat tubuh lebih berenergi, berkat kandungan kafein di dalamnya. Meski demikian, hal ini berisiko membuat seseorang mengalami overdosis kafein.</p>\r\n		<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: rgb(54, 69, 79); font-family: opensans, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.5px; background-color: rgb(255, 255, 255); padding-left: 30px;\">\r\n			Apalagi ketika dikonsumsi dengan cara dihisap, komponen kafein lebih cepat terserap tubuh ketimbang dikonsumsi biasa. Gejala overdosis kafein sama seperti&nbsp;<a href=\"https://sehatq.com/artikel/pecinta-kafein-sudah-tahu-bahaya-minum-kopi-berlebihan\" rel=\"noopener\" style=\"box-sizing: border-box; outline: none; color: rgb(84, 171, 173); text-decoration-line: none; background-color: transparent;\" target=\"_blank\">bahaya minum kopi</a>, bisa menyebabkan mual, sakit kepala, dan juga gelisah.</p>\r\n	</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi`
--

CREATE TABLE `deskripsi` (
  `id` int(50) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `LT` varchar(100) NOT NULL,
  `LB` varchar(100) NOT NULL,
  `Lantai` varchar(100) NOT NULL,
  `Kamar` varchar(100) NOT NULL,
  `id_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `deskripsi`
--

INSERT INTO `deskripsi` (`id`, `Type`, `LT`, `LB`, `Lantai`, `Kamar`, `id_kategori`) VALUES
(1, '30/60', '30m2', '60m2', '1 Lantai', '2 KT + 1 KM\r\n', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `estimasi_angsuran`
--

CREATE TABLE `estimasi_angsuran` (
  `id` int(100) NOT NULL,
  `10th` varchar(100) NOT NULL,
  `15th` varchar(100) NOT NULL,
  `20th` varchar(100) NOT NULL,
  `suku_bunga` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `estimasi_angsuran`
--

INSERT INTO `estimasi_angsuran` (`id`, `10th`, `15th`, `20th`, `suku_bunga`, `keterangan`, `id_kategori`) VALUES
(1, '1.511.400', '1.126.880', '940.500', '5%', 'flat', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_pesan` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_telepon` bigint(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_temporary`
--

CREATE TABLE `order_temporary` (
  `id_produk` int(100) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `kamar_tidur` int(100) NOT NULL,
  `kamar_mandi` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `unit_ready` int(100) NOT NULL,
  `unit_sold` int(100) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` varchar(800) NOT NULL,
  `rincian_biaya` varchar(800) NOT NULL,
  `estimasi_angsuran` varchar(800) NOT NULL,
  `harga_jual_sudah` text NOT NULL,
  `harga_jual_belum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(7) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `kamar_tidur` int(10) NOT NULL,
  `kamar_mandi` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `unit_ready` int(100) NOT NULL,
  `unit_sold` int(100) NOT NULL,
  `id_kelompok` varchar(20) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `tipe`, `harga`, `kamar_tidur`, `kamar_mandi`, `alamat`, `gambar`, `unit_ready`, `unit_sold`, `id_kelompok`, `id_kategori`) VALUES
('PR001', 'Bumi Sukasari Indah', '30/60', '150.000.000', 2, 1, 'Jl. Sukasari, Kec. Purwasari, Kabupaten Karawang, Jawa Barat 41373', 'KBN1.jpg', 345, 890, 'Ready', 1),
('PR002', 'Perum Permana Adimix', '30/60', '150.000.000', 2, 1, 'Jl. Permana Adimix, Desa Kalangsari, Kec. Rengasdengklok, Kab. Karawang', 'Adimix1.jpg', 500, 800, 'Ready', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian_biaya`
--

CREATE TABLE `rincian_biaya` (
  `id` int(100) NOT NULL,
  `harga_jual` varchar(100) NOT NULL,
  `booking_fee` varchar(100) NOT NULL,
  `uang_muka` varchar(100) NOT NULL,
  `flapod_kpr` varchar(100) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rincian_biaya`
--

INSERT INTO `rincian_biaya` (`id`, `harga_jual`, `booking_fee`, `uang_muka`, `flapod_kpr`, `id_kategori`) VALUES
(1, '150.000.000', '1.000.000', '0', '142.500.000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimasi_angsuran`
--
ALTER TABLE `estimasi_angsuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rincian_biaya`
--
ALTER TABLE `rincian_biaya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `estimasi_angsuran`
--
ALTER TABLE `estimasi_angsuran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_pesan` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rincian_biaya`
--
ALTER TABLE `rincian_biaya`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
