-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 11:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kape`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_basis_pengetahuan`
--

CREATE TABLE `tb_basis_pengetahuan` (
  `id_basis_pengetahuan` int(11) NOT NULL,
  `id_penyakit` varchar(4) NOT NULL,
  `id_gejala` varchar(4) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_basis_pengetahuan`
--

INSERT INTO `tb_basis_pengetahuan` (`id_basis_pengetahuan`, `id_penyakit`, `id_gejala`, `mb`, `md`) VALUES
(1, 'P01', 'G01', 0.85, 0),
(2, 'P01', 'G02', 0.7, 0.01),
(3, 'P01', 'G03', 0.75, 0.01),
(4, 'P08', 'G09', 0.9, 0.01),
(5, 'P08', 'G12', 1, 0),
(6, 'P08', 'G14', 0.95, 0),
(7, 'P01', 'G15', 0.7, 0),
(8, 'P01', 'G20', 0.8, 0),
(9, 'P01', 'G22', 0.7, 0.01),
(10, 'P01', 'G24', 0.75, 0),
(11, 'P01', 'K31', 1, 0),
(12, 'P01', 'G35', 0.7, 0),
(13, 'P01', 'G39', 0.7, 0.01),
(14, 'P08', 'G44', 0.85, 0.02),
(15, 'P08', 'G45', 0.95, 0),
(16, 'P01', 'G31', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosis`
--

CREATE TABLE `tb_diagnosis` (
  `id_diagnosis` int(11) NOT NULL,
  `id_hasil` int(11) NOT NULL,
  `id_gejala` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosis`
--

INSERT INTO `tb_diagnosis` (`id_diagnosis`, `id_hasil`, `id_gejala`) VALUES
(1, 1, 'G01'),
(2, 1, 'G02'),
(3, 1, 'G03'),
(4, 1, 'G15'),
(5, 1, 'G20'),
(6, 1, 'G22'),
(7, 1, 'G24'),
(8, 1, 'G31'),
(9, 1, 'G35'),
(10, 1, 'G39'),
(11, 2, 'G09'),
(12, 2, 'G12'),
(13, 2, 'G14'),
(14, 2, 'G44'),
(15, 2, 'G45'),
(16, 3, 'G31'),
(17, 3, 'G35'),
(18, 3, 'G39'),
(19, 3, 'G44'),
(20, 3, 'G45'),
(21, 4, 'G31'),
(22, 4, 'G35'),
(23, 4, 'G39'),
(24, 4, 'G44'),
(25, 4, 'G45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` varchar(4) NOT NULL,
  `gejala` text NOT NULL,
  `bagian` enum('Daun','Batang','Akar','Buah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`, `bagian`) VALUES
('G01', 'Kambing kesulitan berdiri/ Kambing ambruk/ Kambing selalu berbaring', 'Akar'),
('G02', 'Kambing sering buang air kecil', 'Akar'),
('G03', 'Kambing menggertakkan gigi', 'Akar'),
('G04', 'Kambing terlihat kurus', 'Akar'),
('G05', 'Perut kambing buncit', 'Akar'),
('G06', 'Warna feses kambing tidak normal', 'Akar'),
('G07', 'Terdapat bintik kemerahan disekitar mulut Kambing', 'Akar'),
('G08', 'Terdapat benjolan dan luka berupa kerompeng hitam disekitaran mulut Kambing', 'Akar'),
('G09', 'Cairan mata kambing keluar seperti nanah', 'Akar'),
('G10', 'Kambing mengalami batuk-batuk', 'Akar'),
('G11', 'Kambing mengalami diare', 'Akar'),
('G12', 'Kotoran mata kambing banyak dan berlebihan/berair', 'Akar'),
('G13', 'Bulu kambing mengalami kerontokan', 'Akar'),
('G14', 'Kornea mata kambing berubah menjadi keruh atau menjadi menutupi lapisan bagian putih', 'Akar'),
('G15', 'Terdapat busa disekitaran mulut kambing', 'Akar'),
('G16', 'Adanya suara abnormal pada kambing', 'Akar'),
('G17', 'Timbul benjolan pada bagian kaki kambing', 'Akar'),
('G18', 'Bagian kaki kambing bernanah', 'Akar'),
('G19', 'Kambing sering menggaruk-garuk badan', 'Akar'),
('G20', 'Terkadang punggung kambing membungkuk', 'Akar'),
('G21', 'Timbul kerak pada badan Kambing', 'Akar'),
('G22', 'Kambing Gelisah', 'Akar'),
('G23', 'Bulu kambing terlihat kusam saat dilihat dan terasa kasar saat disentuh', 'Akar'),
('G24', 'Kambing mengalami gangguan pernafasan/memiliki nafas yang pendek', 'Akar'),
('G25', 'Air susu kambing mengalami keenceran/pecah/kadang bercampur dengan darah', 'Akar'),
('G26', 'Kambing mengalami dehidrasi', 'Akar'),
('G27', 'Kambing mengalami peningkatan defikasi(BAB)', 'Akar'),
('G28', 'Kambing mengalami sembelit(susah buang air besar/frekuensi bab kambing menjadi lebih sedikit dari biasanya)', 'Akar'),
('G29', 'Terjadi pembengkakan pada area rahang kambing', 'Akar'),
('G30', 'Terjadi pembengkakan pada celah kuku kambing', 'Akar'),
('G31', 'Perut kambing dibagian kiri membesar dan kalau dipukul terdengan seperti suara gendang', 'Akar'),
('G32', 'Terjadi Pembengkakan pada ambing kambing', 'Akar'),
('G33', 'Area ambing terlihat memerah dan jika dipegang terasa panas', 'Akar'),
('G34', 'Penurunan produksi susu', 'Akar'),
('G35', 'Kambing mengalami lemas/lesu/lemah', 'Akar'),
('G36', 'Kambing mengalami pucat pada bagian konjungtiva', 'Akar'),
('G37', 'Terganggunya pertumbuhan pada kambing', 'Akar'),
('G38', 'Pengelupasan kulit kuku pada kaki kambing', 'Akar'),
('G39', 'Nafsu makan kambing berkurang/ kambing tidak mau makan', 'Akar'),
('G40', 'Adanya kerompeng pada bagian kulit kambing terluar yang terlihat mengalami penebalan dan kerutan', 'Akar'),
('G41', 'Melepuhnya bagian mukosa(lapisan rongga pada bagian mulut) kambing', 'Akar'),
('G42', 'Kotoran kambing lebih cair dari pada biasanya', 'Akar'),
('G43', 'Kambing mengalami kenaikan suhu tubuh (Demam)', 'Akar'),
('G44', 'kambing menjadi sensitif terhadap sinar matahari', 'Akar'),
('G45', 'Kornea mata kambing mengalami perubahan warna menjadi merah pekat', 'Akar'),
('G46', 'Posisi ambing tidak simetris', 'Akar'),
('G47', 'Saat dipegang puting ambing terasa mengeras', 'Akar'),
('G48', 'Kaki kambing terlihat pincang', 'Akar'),
('G49', 'Kambing mengalami sesak nafas (Dyspnoe)', 'Akar'),
('G50', 'Pernafasan dengan frekuensi yang tidak normal dari pernafasan perut', 'Akar'),
('G51', 'Keluar lendir pada bagian hidung kambing', 'Akar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_penyakit` varchar(4) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `alamat_user` text NOT NULL,
  `pekerjaan_user` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_penyakit`, `nm_user`, `alamat_user`, `pekerjaan_user`, `tanggal`, `cf`) VALUES
(1, 'P01', 'nama', 'bengkulu', 'peternak', '2023-05-29', 0.960591),
(2, 'P08', 'nama', 'manna', 'peternak', '2023-05-29', 0.9702),
(3, 'P08', 'aku', 'sukaraja', 'petani', '2023-05-29', 0.9725),
(4, 'P01', 'aku', 'sukaraja', 'petani', '2023-05-29', 0.99);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penanganan`
--

CREATE TABLE `tb_penanganan` (
  `id_penanganan` int(11) NOT NULL,
  `id_penyakit` varchar(4) NOT NULL,
  `id_solusi` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penanganan`
--

INSERT INTO `tb_penanganan` (`id_penanganan`, `id_penyakit`, `id_solusi`) VALUES
(1, 'P01', 'S01'),
(2, 'P01', 'S04'),
(3, 'P01', 'S06'),
(4, 'P01', 'S08'),
(5, 'P08', 'S11'),
(6, 'P08', 'S17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penanganan_khusus`
--

CREATE TABLE `tb_penanganan_khusus` (
  `id_penanganan_khusus` int(11) NOT NULL,
  `id_gejala` varchar(4) NOT NULL,
  `solusi_khusus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penanganan_khusus`
--

INSERT INTO `tb_penanganan_khusus` (`id_penanganan_khusus`, `id_gejala`, `solusi_khusus`) VALUES
(1, 'G01', 'Membersihkan sumber infeksi pada tanaman kelapa sawit dan jika pembusukan sudah terlalu parah Potong batang-batang yang terinfeski, lalu dikumpulkan dan dibakar.'),
(2, 'G09', 'Jika bagian atas batang sudah patah seutuhnya maka pohon harus dibongkar.'),
(3, 'G16', 'Bersihkan sumber infeksi pada tanaman kelapa sawit dan jika penyakit tergolong parah. Obat yang umum dipakai adalah Antimucin WBR( fenilmer-kuri asetat), Actidione dan \r\nDifolatan.'),
(4, 'G25', 'Bersihkan sumber infeksi pada tanaman kelapa sawit dengan cara daun-daun yang terinfeksi dipotong dan dibakar. Jika penyakit sering timbul, pembibitan perlu disemptrot dengan fungisida (Thiabendazole).'),
(5, 'G28', 'Daun-daun yang terinfeksi dipotong dan dibakar. Pengairan yang cukup terkhususnya pada musim kemarau dapat mencegah terjadinya gangguan penyakit BLAS.'),
(6, 'G31', 'Sebelum diobati, janur dipotong sedalam mungkin (sedekat mungkin dengan \r\ntitik tumbuh). Bagian yang terbuka disemprot dengan fungisida sampai basah. Daun-daun sakit yang lebih tua tidak perlu dipotong,karena perkembangan \r\njamur akan berhenti jika janur membuka.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` varchar(4) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `penyebab` text NOT NULL,
  `daur_penyakit` text NOT NULL,
  `faktor` text NOT NULL,
  `gambar_penyakit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nm_penyakit`, `penyebab`, `daur_penyakit`, `faktor`, `gambar_penyakit`) VALUES
('P01', 'KEMBUNG (Bloating)', 'Perut kebanyakan gas yang tidak bisa keluar', 'Penyakit Kembung atau bloat paling sering terjadi di peternakan kambing. Masalah ini disebabkan oleh adanya gas pada rumen dari proses fermentasi tidak dapat dikeluarkan. Apabila tidak diatasi dengan cepat bisa menyebabkan kematian, karena terdapat tekanan gas pada organ dalam seperti jantung dan paru-paru', '', 'img_1685339069.jpg'),
('P02', 'CACINGAN', 'telur cacing', 'Ada beberapa jenis cacing yang menyerang kambing contohnya seperti haemonchus cocortus, Trichuris sp dan Oestophagostomum sp. Penyakit ini biasanya terbawa dari pakan yang mengandung larva atau telur cacing. Makhluk ini hidup sebagai parasit yang menggerogoti dari dalam, semua nutrisi akan diserap oleh cacing-cacing tersebut', '', 'img_1685339307.jpg'),
('P03', 'SCABIES (Kudis/Kurap)', 'Penyakit ini disebabkan oleh ektoparasit atau tungau Sarcoptes scabei, Psoroptes communis varovis dan Chorioptes ovis', 'Penyakit ini disebabkan oleh ektoparasit atau tungau Sarcoptes scabei, Psoroptes communis varovis dan Chorioptes ovis', '', 'img_1685339788.jpg'),
('P04', 'DIARE (Mencret)', 'bakteri', 'Penyakit Diare biasanya terjadi karena terjadi gangguan pada sistem pencernaan yang disebabkan oleh bakteri, kondisi pakan dan lingkungan yang jelek, serta perubahan cuaca', '', 'img_1685339876.jpg'),
('P05', 'ORF (Sariawan/Dakangan)', 'virus', 'Penyakit Orf dikenal juga dengan sariawan, dakangan atau Ecthyma Contagiosa. Penyakit ini disebabkan oleh virus Parapoxvyrus yang bersifat zoonosis(dapat menular ke manusia)', '', 'img_1685339945.jpg'),
('P06', 'MASTITIS AKUT', 'Bakteri', 'Penyakit Mastitis disebabkan oleh infeksi bakteri Staphylococcus Aureus. Penyakit ini menyerang payudara/susu kambing betina setelah melahirkan', '', 'img_1685340009.jpg'),
('P07', 'KUKU BUSUK', 'kelembaban\r\n', 'Penyakit Kuku Busuk dikarenakan kaki kambing terlalu sering terendam di alas yang lembab dan basah. Apabila terdapat luka pada kuku maka akan terjadi infeksi', '', 'img_1685340104.jpg'),
('P08', 'PINK EYE (Belekan)', 'Bakteri', 'Penyakit Pink Eye/belekan disebabkan adanya infeksi bakteri Chlamydia psittaci ovis and Mycoplasma conjunctivae. Umumnya terjadi pada kandang yang sirkulasi udaranya tidak lancar dan minim pencahayaan.', '', 'img_1685340147.jpg'),
('P09', 'PNEUMONIA (Radang Peru-paru)', 'Kandang', 'Pneumonia disebabkan oleh kondisi kandang yang lembab, dingin dan kotor.  Biasanya hal ini bisa terjadi pada kondisi kandang yang kurang terjaga kebersihannya', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id_solusi` varchar(4) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`id_solusi`, `solusi`) VALUES
('S01', 'Membawa kambing ketempat yang hangat dibawah sinar matahari dalam posisi berdiri dengan posisi kaki depan yang lebih tinggi'),
('S04', 'kambing diberikan minum air hangat 1 gelas dn 10 tetes minyak angin atau air hangat yang diberi garam, minyak nabati sebanyak 100-200 ml dengan cara diminumkan secara paksa ke mulut kambing'),
('S06', 'Olesi bagian Perut sebelah kiri kambing dengan minyak angin/balsem sambil diurut dan ditekan agar gas didalam perut dapat keluar'),
('S08', 'bagian anus kambing ditusuk dengan tangkai daun pepaya yang ujung tangkainya sudah dioleh dengan minyak goreng agar tidak melukai dinding anus, dan kedua sisi perut kambing dijepit sehingga gas akan keluar melalui tangkat daun pepaya'),
('S11', 'berikan obat yang terbuat dari campuran teh basi, daun sirih, garam, dan air jeruk nipis'),
('S17', 'cuci mata kambing dengan menggunakan air hangat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_basis_pengetahuan`
--
ALTER TABLE `tb_basis_pengetahuan`
  ADD PRIMARY KEY (`id_basis_pengetahuan`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_gejala` (`id_gejala`) USING BTREE;

--
-- Indexes for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  ADD PRIMARY KEY (`id_diagnosis`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_penanganan`
--
ALTER TABLE `tb_penanganan`
  ADD PRIMARY KEY (`id_penanganan`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_solusi` (`id_solusi`);

--
-- Indexes for table `tb_penanganan_khusus`
--
ALTER TABLE `tb_penanganan_khusus`
  ADD PRIMARY KEY (`id_penanganan_khusus`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_basis_pengetahuan`
--
ALTER TABLE `tb_basis_pengetahuan`
  MODIFY `id_basis_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  MODIFY `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_penanganan`
--
ALTER TABLE `tb_penanganan`
  MODIFY `id_penanganan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_penanganan_khusus`
--
ALTER TABLE `tb_penanganan_khusus`
  MODIFY `id_penanganan_khusus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
