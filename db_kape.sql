-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 06:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(250) NOT NULL,
  `deskripsi_artikel` text NOT NULL,
  `sumber_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `deskripsi_artikel`, `sumber_artikel`) VALUES
(1, 'Kambing syawal', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'https://getbootstrap.com/docs/4.0/content/typography/');

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
(25, 4, 'G45'),
(26, 5, 'G02'),
(27, 5, 'G25'),
(28, 5, 'G27'),
(29, 5, 'G29'),
(30, 5, 'G31'),
(31, 5, 'G36'),
(32, 5, 'G46'),
(33, 5, 'G49'),
(34, 6, 'G01'),
(35, 6, 'G05'),
(36, 6, 'G10'),
(37, 7, 'G03'),
(38, 7, 'G07'),
(39, 7, 'G04'),
(40, 7, 'G01'),
(41, 7, 'G05'),
(42, 7, 'G10'),
(43, 8, 'G22'),
(44, 8, 'G18'),
(45, 8, 'G10'),
(46, 9, 'G03'),
(47, 9, 'G12'),
(48, 9, 'G15'),
(49, 9, 'G22'),
(50, 10, 'G01'),
(51, 10, 'G17'),
(52, 10, 'G18'),
(53, 11, 'G07'),
(54, 11, 'G09'),
(55, 11, 'G12'),
(56, 11, 'G14'),
(57, 11, 'G04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` varchar(4) NOT NULL,
  `gejala` text NOT NULL,
  `bagian` enum('Kepala','Badan','Kaki','Pencernaan','Pernafasan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`, `bagian`) VALUES
('G01', 'Kambing kesulitan berdiri/ Kambing ambruk/ Kambing selalu berbaring', 'Kaki'),
('G02', 'Kambing sering buang air kecil', 'Pencernaan'),
('G03', 'Kambing menggertakkan gigi', 'Kepala'),
('G04', 'Kambing terlihat kurus', 'Badan'),
('G05', 'Perut kambing buncit', 'Pencernaan'),
('G06', 'Warna feses kambing tidak normal', 'Pencernaan'),
('G07', 'Terdapat bintik kemerahan disekitar mulut Kambing', 'Kepala'),
('G08', 'Terdapat benjolan dan luka berupa kerompeng hitam disekitaran mulut Kambing', 'Kepala'),
('G09', 'Cairan mata kambing keluar seperti nanah', 'Kepala'),
('G10', 'Kambing mengalami batuk-batuk', 'Pernafasan'),
('G11', 'Kambing mengalami diare', 'Pencernaan'),
('G12', 'Kotoran mata kambing banyak dan berlebihan/berair', 'Kepala'),
('G13', 'Bulu kambing mengalami kerontokan', 'Badan'),
('G14', 'Kornea mata kambing berubah menjadi keruh atau menjadi menutupi lapisan bagian putih', 'Kepala'),
('G15', 'Terdapat busa disekitaran mulut kambing', 'Kepala'),
('G16', 'Adanya suara abnormal pada kambing', 'Pernafasan'),
('G17', 'Timbul benjolan pada bagian kaki kambing', 'Kaki'),
('G18', 'Bagian kaki kambing bernanah', 'Kaki'),
('G19', 'Kambing sering menggaruk-garuk badan', 'Badan'),
('G20', 'Terkadang punggung kambing membungkuk', 'Badan'),
('G21', 'Timbul kerak pada badan Kambing', 'Badan'),
('G22', 'Kambing Gelisah', 'Kepala'),
('G23', 'Bulu kambing terlihat kusam saat dilihat dan terasa kasar saat disentuh', ''),
('G24', 'Kambing mengalami gangguan pernafasan/memiliki nafas yang pendek', ''),
('G25', 'Air susu kambing mengalami keenceran/pecah/kadang bercampur dengan darah', ''),
('G26', 'Kambing mengalami dehidrasi', ''),
('G27', 'Kambing mengalami peningkatan defikasi(BAB)', ''),
('G28', 'Kambing mengalami sembelit(susah buang air besar/frekuensi bab kambing menjadi lebih sedikit dari biasanya)', ''),
('G29', 'Terjadi pembengkakan pada area rahang kambing', ''),
('G30', 'Terjadi pembengkakan pada celah kuku kambing', ''),
('G31', 'Perut kambing dibagian kiri membesar dan kalau dipukul terdengan seperti suara gendang', ''),
('G32', 'Terjadi Pembengkakan pada ambing kambing', ''),
('G33', 'Area ambing terlihat memerah dan jika dipegang terasa panas', ''),
('G34', 'Penurunan produksi susu', ''),
('G35', 'Kambing mengalami lemas/lesu/lemah', ''),
('G36', 'Kambing mengalami pucat pada bagian konjungtiva', ''),
('G37', 'Terganggunya pertumbuhan pada kambing', ''),
('G38', 'Pengelupasan kulit kuku pada kaki kambing', ''),
('G39', 'Nafsu makan kambing berkurang/ kambing tidak mau makan', ''),
('G40', 'Adanya kerompeng pada bagian kulit kambing terluar yang terlihat mengalami penebalan dan kerutan', ''),
('G41', 'Melepuhnya bagian mukosa(lapisan rongga pada bagian mulut) kambing', ''),
('G42', 'Kotoran kambing lebih cair dari pada biasanya', ''),
('G43', 'Kambing mengalami kenaikan suhu tubuh (Demam)', ''),
('G44', 'kambing menjadi sensitif terhadap sinar matahari', ''),
('G45', 'Kornea mata kambing mengalami perubahan warna menjadi merah pekat', ''),
('G46', 'Posisi ambing tidak simetris', ''),
('G47', 'Saat dipegang puting ambing terasa mengeras', ''),
('G48', 'Kaki kambing terlihat pincang', ''),
('G49', 'Kambing mengalami sesak nafas (Dyspnoe)', ''),
('G50', 'Pernafasan dengan frekuensi yang tidak normal dari pernafasan perut', ''),
('G51', 'Keluar lendir pada bagian hidung kambing', '');

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
(4, 'P01', 'aku', 'sukaraja', 'petani', '2023-05-29', 0.99),
(11, 'P08', 'b;jl;k', 'jhojjoi', 'j;oo', '2023-06-03', 0.99);

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
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

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
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_basis_pengetahuan`
--
ALTER TABLE `tb_basis_pengetahuan`
  MODIFY `id_basis_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  MODIFY `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
