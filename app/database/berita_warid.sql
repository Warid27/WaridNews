-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 06:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_warid`
--

-- --------------------------------------------------------

--
-- Table structure for table `isi_berita`
--

CREATE TABLE `isi_berita` (
  `id` int(10) NOT NULL,
  `pembuat` varchar(30) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(2500) NOT NULL,
  `tanggal_input` date NOT NULL,
  `berita_foto` varchar(50) NOT NULL,
  `approval` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `isi_berita`
--

INSERT INTO `isi_berita` (`id`, `pembuat`, `judul`, `deskripsi`, `tanggal_input`, `berita_foto`, `approval`) VALUES
(25, 'admin', 'Pemkot Magelang konsisten perkuat pakta integritas untuk cegah KKN', '<p>Magelang (ANTARA) - Pemerintah Kota Magelang secara konsisten dan serius memperkuat pakta integritas pimpinan dan jajaran organisasi perangkat daerah (OPD) untuk menegakkan aturan dan mencegah tindak pidana korupsi, kolusi, dan nepotisme (KKN).<br />\r\n<br />\r\n&quot;Pakta integritas ini perlu terus kita kuatkan dari waktu ke waktu, sebagai bentuk konsistensi dan keseriusan kita dalam upaya menegakkan dan pencegahan korupsi, kolusi, dan nepotisme,&quot; kata Inspektur Kota Magelang Larsita dalam rilis Bagian Prokompim Pemkot Magelang diterima di Magelang, Selasa.<br />\r\n<br />\r\nWali Kota Magelang Muchamad Nur Aziz beserta seluruh kepala OPD Pemerintah Kota Magelang menandatangani pakta integritas dan komitmen bersama antikorupsi di Pendopo Pengabdian Rumah Jabatan Wali Kota Magelang, Senin (27/5). Sekretaris Daerah Kota Magelang Hamzah Kholifi dan Inspektur Kota Magelang Larsita turut membubuhkan tanda tangan pada pakta integritas tersebut.&nbsp;<br />\r\n<br />\r\nHadir pada acara itu, antara lain pejabat Forum Komunikasi Pimpinan Daerah (Forkopimda) Kota Magelang, rektor, dan ketua berbagai organisasi di daerah setempat.<br />\r\n<br />\r\nPenandatanganan tersebut juga tindak lanjut hasil Survei Penilaian Integritas (SPI) Tahun 2023, di mana Kota Magelang berada di angka 80,70 atau naik dibandingkan dengan pada 2022 yang 80.<br />\r\n<br />\r\nPihaknya ingin seluruh pimpinan dan jajaran OPD selain mengelola Pemerintahan Kota Magelang secara bersih, juga menerapkan nilai-nilai integritas di lingkungan kerja masing-masing.<br />\r\n<br />\r\n&quot;Tugas kami memastikan itu di semua OPD,&quot; ujarnya.&nbsp;<br />\r\n<br />\r\nSebanyak sembilan nilai-nilai integritas yang harus ditegakkan, yakni jujur, peduli, berani, sederhana, disiplin, adil, kerja keras, tanggung jawab, dan mandiri.<br />\r\n<br />\r\nWali Kota Magelang Muchamad Nur Aziz menegaskan pakta integritas salah satu bentuk komitmen pemkot untuk menegakkan dan taat kepada hukum atau perundang-undangan demi mewujudkan kesejahteraan masyarakat.<br />\r\n<br />\r\n&quot;Kita harus taat pada hukum atau perundang-undangan. Karena kalau tidak taat hukum, kesejahteraan itu tidak mungkin tercapai. Walaupun tantangan berat, tapi selama ada yang kita pegang yakni undang-undang (persoalan) itu selesai,&quot; ujarnya.<br />\r\n<br />\r\nIa meminta seluruh jajaran saling mendorong dan mengingatkan agar tidak melakukan pelanggaran hukum.&nbsp;<br />\r\n<br />\r\nDia juga menyatakan keinginan agar jajarannya tidak segan mengingatkan dirinya jik', '2024-05-28', '66557bf8a2084.jpg', 'APPROVE'),
(26, 'admin', 'Nadiem Makarim Batalkan Kenaikan UKT, Ini Alasannya', '<p><strong>WaridNews</strong>, <strong>Jakarta,&nbsp;</strong>Usai bersamuh dengan Presiden Joko Widodo di Istana Kepresidenan Jakarta, Menteri Pendidikan, Kebudayaan, Riset dan Teknologi,&nbsp;<a href=\"https://www.tempo.co/tag/nadiem\">Nadiem&nbsp;</a>Anwar Makarim, menyatakan membatalkan kenaikan uang kuliah tunggal atau UKT untuk tahun ajaran 2024-2025 di perguruan tinggi negeri, termasuk yang berbadan hukum atau PTNBH.</p>\r\n\r\n<p>Nadiem mengklaim, alasan pembatalan&nbsp;<a href=\"https://www.tempo.co/tag/ukt\">UKT&nbsp;</a>di perguruan tinggi ini, ialah setelah mendengar aspirasi mahasiswa, keluarga dan masyarakat. Sehingga, pada pekan lalu, Kementerian Pendidikan dan Kebudayaan melalukan koordinasi kembali dengan para Rektor guna membahas rencana pembatalan kenaikan UKT ini.&nbsp;</p>\r\n\r\n<p>&quot;Alhamdulillah, semua lancar. Dan baru saja saya bertemu Presiden, beliau menyetujui pembatalan ini,&quot; kata Nadiem dalam keterangannya, Senin, 27 Mei 2024.</p>\r\n\r\n<p>Dalam pertemuan itu, Nadiem mengajukan sejumlah opsi. Salah satunya, ialah upaya pendekatan untuk bisa mengatasi kesulitan yang dihadapi mahasiswa.</p>\r\n\r\n<p>Kendati begitu, Nadiem tak menjawab lugas ihwal apakah akan mencabut Peraturan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Nomor 2 Tahun 2024 tentang Standar Satuan Biaya Operasional Pendidikan Tinggi atau SSBOPT, yang menjadi dasar peningkatan APBN bagi PTN dan PTNBH.</p>\r\n\r\n<p>SSBOPT inilah yang jadi sebab dan pertimbangan perguruan tinggi dalam menentukan besaran biaya UKT. Alasannya, penyesuaian SSBOPT dilakukan untuk mempertimbangkan meningkatnya kebutuhan teknologi untuk pembelajaran.</p>\r\n\r\n<p>Klaim tak pernah dimuktahirkannya SSBOPT inilah yang mendorong Kemendikbudristek berupaya menaikan biaya UKT. Dalihnya, untuk mendorong perguruan tinggi agar dapat memberikan pembelajaran yang relevan kepada mahasiswa.&nbsp; &quot;Terkait implementasi Permendikbudristek, Dirjen Diktiristek akan mengumumkan detil teknisnya,&quot; ujar Nadiem.</p>\r\n', '2024-05-28', '66557e211dc28.jpg', 'APPROVE'),
(27, 'admin', 'Aksi Menginap Mahasiswa UGM di Gedung Rektorat Universitas Gadjah Mada, Protes Iuran Pembangunan Institusi', '<p><strong>WaridNews</strong>,&nbsp;<strong>Jakarta</strong>&nbsp;-&nbsp;Menjelang sore hari, mahasiswa Universitas Gadjah Mada (<a href=\"https://www.tempo.co/tag/ugm\">UGM</a>) mendirikan tenda di depan Gedung Balairung UGM, pada Senin, 27 Mei 2024. Hingga pukul 19.40 WIB, terlihat tiga tenda berjajar dan puluhan mahasiswa berkumpul. Mereka mengisi waktu dengan berdiskusi dan bernyanyi.</p>\r\n\r\n<p>Arga Lutfi, Menteri Aksi dan Propaganda BEM KM UGM menyebutkan bahwa aksi dilakukan untuk menanggapi hadirnya Iuran Pengembangan Institusi atau IPI di UGM.&nbsp;</p>\r\n\r\n<p>&ldquo;Kami menolak IPI atau uang pangkal diterapkan di UGM. IPI sendiri merupakan cara cepat untuk universitas mendapatkan uang bagi biaya operasional. Tapi, cepat bukan berarti tepat,&rdquo; kata Arga kepada Tempo, pada Senin, 27 Mei 2024.&nbsp;</p>\r\n\r\n<p>Sementara itu, Wakil Rektor Bidang Pendidikan dan Pengajaran, Wening Udasmoro, sedang dalam perjalanan. Ketika dikonfirmasi apakah Wening akan menemui mahasiswa, Andi menjawab, &ldquo;Kurang tahu kalau itu.&rdquo;</p>\r\n\r\n<p>&ldquo;Saya ke sini cuma untuk menemui anak-anak saya. Terkait pertanyaan substantif, saya tidak berkewenangan untuk menjawab,&rdquo; ujar Andi kepada&nbsp;<em>Tempo</em>. UGM sendiri mempublikasikan Uang Kuliah Tunggal (UKT) dan IPI bagi mahasiswa baru jalur mandiri pada Senin, 20 Mei 2024, pukul 03.29 WIB di laman resminya.&nbsp;</p>\r\n\r\n<p>Lebih lanjut, Agra mengungkapkan bahwa sebelumnya UGM tidak pernah menerapkan uang pangkal. Pada 2022, UGM hanya menarik sumbangan sukarela bagi mahasiswa jalur mandiri. Kemudian, pada 2023, UGM baru menerapkan kebijakan uang pangkal bagi mahasiswa jalur mandiri yang mendapat UKT golongan tertinggi.&nbsp;</p>\r\n\r\n<p>Namun, pada tahun ini, UGM menarik uang pangkal kepada seluruh mahasiswa jalur mandiri, kecuali yang mendapat&nbsp;<a href=\"https://www.tempo.co/tag/ukt\">UKT&nbsp;</a>golongan nol rupiah. Menurut Arga, hingga saat ini, belum ada tanggapan dari pihak rektorat terkait aksi mahasiswa ini.&nbsp;</p>\r\n\r\n<p>Dari pantauan&nbsp;<em>Tempo.co</em>, hingga pukul 19.30 WIB, belum ada pihak rektorat yang menemui mahasiswa secara resmi. Namun, sebelumnya, pada pukul 18.00 WIB terlihat Andi Sandi Antonius, Sekretaris Universitas, sempat menemui beberapa mahasiswa. Ketika ditanyai terkait tanggapan pihak rektorat terhadap aksi ini, ia enggan menjawab.&nbsp;</p>\r\n\r\n<p>Menurut Andi, saat ini Ova Emilia, Rektor UGM sedang dalam perjalanan dari Qatar menuju Indonesia. Kemudian, Arie Sujito, Wak', '2024-05-28', '66557ed3bf1ec.jpg', 'APPROVE'),
(28, 'admin', 'Projo Dorong Jokowi Jadi Ketum Parpol untuk Kawal Pemerintahan Prabowo-Gibran', '<p><strong>WaridNews</strong>, <strong>Jakarta.&nbsp;</strong>Kelompok relawan&nbsp;<a href=\"https://www.tempo.co/tag/projo\" target=\"_blank\">Projo</a>&nbsp;terus mendorong Presiden Joko Widodo atau&nbsp;<a href=\"https://www.tempo.co/tag/jokowi\" target=\"_blank\">Jokowi&nbsp;</a>untuk menjadi ketua umum partai politik. Tujuannya untuk mengawal pemerintahan selanjutnya yang akan dipimpin oleh Presiden terpilih Prabowo Subianto.</p>\r\n\r\n<p>Bendahara Umum Projo, Panel Barus, menilai Jokowi masih dicintai rakyat. Panel juga mengatakan Jokowi masih bisa berkontribusi untuk bangsa setelah purna tugas pada 20 Oktober 2024, dengan usia 63 tahun,</p>\r\n\r\n<p>Projo menilai Jokowi dapat melakukan banyak hal jika menjadi ketum parpol. Salah satunya mengawal pemerintahan&nbsp;<a href=\"https://www.tempo.co/tag/prabowo-gibran\" target=\"_blank\">Prabowo-Gibran</a>. Gibran Rakabuming Raka merupakan putra sulung Jokowi.</p>\r\n\r\n<p>&ldquo;Ini sebagai bentuk tanggung jawab lanjutan dari Jokowi untuk ikut bersama memastikan tercapainya Indonesia emas 2045,&rdquo; kata Panel dihubungi pada Selasa, 28 Mei 2024.</p>\r\n\r\n<p>Panel mengatakan Projo sudah menyampaikan gagasan agar Jokowi menjadi ketum parpol langsung kepada Presiden dan terjadi perbincangan serius. Namun, Projo menyerahkan langkah konkret Jokowi ke depan pada Jokowi sendiri.</p>\r\n\r\n<p>&ldquo;Presiden Jokowi masih ngomong, &lsquo;mau pulang kampung&rsquo; setelah masa jabatan berakhir - masa pulang kampung,&rdquo; kata Panel yang mengaku kaget mendengar respons Jokowi soal gagasan jadi ketum Parpol.</p>\r\n\r\n<p>Spekulasi mengenai langkah politik Jokowi setelah tak menjabat presiden muncul, mulai dari memimpin Koalisi Besar, menjadi penasihat Prabowo, hingga anggota Dewan Pertimbangan Agung. Status kepartaian Jokowi juga menjadi tanda tanya. Partai Demokrasi Indonesia Perjuangan tidak mengakuinya sebagai kader usai persaingan Pilpres 2024, karena dianggap cenderung mendukung Prabowo-Gibran&nbsp;</p>\r\n\r\n<p>Ketua Umum Projo Budi Arie Setiadi mengatakan aspirasi Jokowi gabung parpol hingga menjabat ketua umum partai diperbolehkan. Namun dia memberikan sinyal, Jokowi masih menghitung-hitung peluangnya.&nbsp;</p>\r\n\r\n<p>&ldquo;Pak Jokowi, soal jadi apa, biar takdir menentukan caranya sendiri,&rdquo; kata Budi Arie, yang juga Menteri Komunikasi dan Informatika, di Istana Kepresidenan Jakarta, pada Rabu, 22 Mei 2024.</p>\r\n\r\n<p>Sementara, menanggapi simpang siur masa depannya, Jokowi menegaskan saat ini masih fokus bekerja. Jokowi menegask', '2024-05-28', '66557f2bf0de4.jpg', 'APPROVE'),
(29, 'admin', 'Lok Sabha 2024: Relawan partai Modi menargetkan 100.000 orang per hari', '<p><strong>WaridNews, India.&nbsp;</strong>Ankur Rana mengetik dengan sangat cepat di ponselnya, mengirim pesan ke ratusan grup WhatsApp yang dia kelola.</p>\r\n\r\n<p>&quot;Saya memiliki 400-450 grup WhatsApp yang masing-masing memiliki sekitar 200-300 anggota. Selain itu, saya memiliki sekitar 5.000 kontak langsung. Dengan cara ini, saya secara pribadi menjangkau 10-15,000 orang setiap hari,&quot; koordinator media sosial untuk Partai Bharatiya Janata (BJP) di daerah pemilihan parlemen Meerut di Uttar Pradesh barat ini menjelaskan menjelang pemungutan suara bulan lalu.</p>\r\n\r\n<p>Ia merupakan bagian dari sebuah tim khusus yang dibentuk untuk memastikan bahwa BJP menyampaikan pesannya kepada jutaan pemilih - kelompok-kelompok yang kemudian direplikasi di lusinan daerah pemilihan di Uttar Pradesh saja.</p>\r\n\r\n<p>Skala operasi ini sangat menarik perhatian, tetapi kemudian BJP telah mengidentifikasi WhatsApp - bersama dengan aplikasi perpesanan dan media sosial lainnya - sebagai rute utama untuk mencapai target ambisius mereka yaitu 370 kursi dalam pemilihan Lok Sabha tahun ini.</p>\r\n\r\n<p>Dan hal ini bukan tanpa alasan: India merupakan pasar terbesar WhatsApp secara global dengan lebih dari setengah miliar pengguna yang menghabiskan waktu beberapa jam sehari untuk menggunakan platform perpesanan ini.</p>\r\n\r\n<p>Mereka meneruskan segala sesuatu mulai dari &quot;selamat pagi&quot; hingga meme - dan yang terpenting, komentar politik dalam berbagai bahasa.</p>\r\n\r\n<p>Dan relawan seperti Ankur adalah roda penggerak utama dari mesin pemilu, mencoba untuk memastikan bahwa pesan BJP adalah bagian dari semua itu.</p>\r\n\r\n<p>Translated with DeepL.com (free version)</p>\r\n', '2024-05-28', '66558034a5f19.jpg', 'APPROVE'),
(30, 'admin', 'Chronology of the Garut Vina Case and the Fate of the Perpetrator Now, Different Issues with Vina Cirebon!', '<p><strong>WaridNews, Indonesia.&nbsp;</strong>The Garut Vina case is back in the news as much as the Cirebon Vina case. If the Cirebon Vina case is related to murder, the Garut Vina case is related to perverted videos. Here we summarise the chronology of the Garut Vina case and the fate of the perpetrator now.<br />\r\nThe chronology of the Garut Vina case began in 2019. Residents were shocked by the appearance of a perverted gangbang sex video entitled &quot;Vina Garut&quot;. The Garut Vina case was discussed again after the main perpetrator VA was released from prison. The following is a summary of the chronology of the Garut Vina case and the fate of the perpetrator now.<br />\r\nChronology of the Garut Vina case<br />\r\nFirst becoming a public conversation on Thursday, 13 August 2019, Garut residents were shocked by a perverted video on social media Twitter (now platform X).<br />\r\nIn the video, a woman with the initials VA performed a perverted scene with four men. The action shocked Garut residents until the police intervened to investigate.<br />\r\nA total of four perpetrators were secured, including VA, WA, AK, and AD. VA works as a dangdut singer. AK, who was secured, turned out to be VA&#39;s ex-husband. Then WL was arrested at a cafe in Tarogong Kidul. Then AD was secured at his home in the Bandung Regency area.<br />\r\nBased on the confession of the perpetrators, the video was made at a hotel in Cipanas Garut in 2018. The police also cross-checked the location in the Cipanas tourist attraction area, Tarogong Kaler District, Garut Regency.</p>\r\n', '2024-05-28', '6655831b37284.jpg', 'APPROVE'),
(31, 'admin', 'Manchester United win the 2023-2024 FA Cup, Erik ten Hag gives thumbs up to his team', '<p>WaridNews, LONDON - Manchester United coach Erik Ten Hag praised his foster children who performed well against Manchester City in the 2023-2024 FA Cup final. He admitted the Red Devils played very well in the match.</p>\r\n\r\n<p>Man United won narrowly 2-1 over Man City at Wembley Stadium, London, England, Saturday 25 May 2024 night WIB. They were two goals ahead through Alejandro Garnacho (30&#39;) and Kobbie Mainoo (39&#39;) before being reduced by Jeremy Doku&#39;s goal in the 87th minute.<br />\r\nObviously this is a very sweet result for Man United because they successfully won the FA Cup title this season. Ten Hag is very proud of the performance displayed by his foster children. According to him, Bruno Fernandes cs deserves appreciation.</p>\r\n\r\n<p>&quot;All praise for the team. We played very well according to our identity. Very strong. You&#39;ve seen how we can play when we have players available. Some are not even fit but the performance is very good,&quot; said ten Hag, quoted from BBC, Sunday (26/5/2024).<br />\r\nFurthermore, ten Hag alluded to the depth of the squad which has indeed been a problem for Man United this season. The Dutch coach is very confident that if he is not haunted by a hurricane of injuries, surely the Red Devils can get good results and compete.</p>\r\n\r\n<p>&quot;I told you this (media) all year, when the players are fit, we can play good football. A very good performance against the best team in the world,&quot; said ten Hag.</p>\r\n', '2024-05-28', '6655835e7e209.png', 'APPROVE'),
(32, 'AWE123', '4 Metode Kreatif Maksimalkan Potensi Limbah Makanan', '<p>Teknik pengolahan makanan hasil samping memainkan peran penting dalam menangani isu global terkait ketahanan pangan dan pengelolaan sumber daya. Tidak hanya sebagai upaya untuk mengurangi limbah, tetapi juga sebagai cara untuk menciptakan produk bernilai tambah. Dengan menerapkan teknik-teknik ini, kita tidak hanya menyelesaikan masalah limbah, tetapi juga membuka peluang baru dalam industri pangan.</p>\r\n\r\n<p>Mengutip dari buku &quot;Kupas Tuntas Soal PPPK Guru Prakarya dan Kewirausahaan SMP&quot; karya Taufik Hidayat (2021), teknik pengolahan yang sering digunakan pada hasil samping seperti serealia, kacang-kacangan, dan umbi menjadi produk pangan. Namun, kesadaran masyarakat akan potensi limbah makanan perlu ditingkatkan untuk mengadopsi praktik pengolahan yang berkelanjutan agar limbah dapat dimanfaatkan secara positif.</p>\r\n\r\n<p>Berikut adalah beberapa teknik pengolahan makanan hasil samping yang penting untuk diketahui:</p>\r\n\r\n<h3><strong>1. Daur Ulang dan Kompos</strong></h3>\r\n\r\n<p>Salah satu teknik utama adalah daur ulang dan pembuatan kompos dari limbah organik. Dengan memisahkan limbah organik dari limbah non-organik, dapat dihasilkan pupuk organik yang kaya akan nutrisi. Ini mendukung praktik pertanian berkelanjutan dan mengurangi ketergantungan pada pupuk kimia.</p>\r\n\r\n<h3><strong>2. Fermentasi</strong></h3>\r\n\r\n<p>Proses fermentasi digunakan untuk mengubah limbah makanan menjadi produk bernilai tambah. Misalnya, sisa-sisa buah dapat diubah menjadi cuka, sedangkan limbah sayuran dapat difermentasi menjadi kimchi atau sauerkraut. Fermentasi tidak hanya meningkatkan daya simpan, tetapi juga menambah nilai gizi dan rasa pada produk.</p>\r\n\r\n<h3><strong>3. Pemanfaatan Energi</strong></h3>\r\n\r\n<p>Beberapa limbah makanan dapat diolah untuk menghasilkan energi. Proses anaerobik, seperti biodigestion, dapat menghasilkan biogas dari limbah organik. Biogas ini dapat digunakan sebagai sumber energi untuk memasak atau menghasilkan listrik, mengurangi ketergantungan pada sumber energi fosil.</p>\r\n\r\n<h3><strong>4. Dehidrasi</strong></h3>\r\n\r\n<p>Limbah makanan, terutama buah-buahan yang tidak terpakai, dapat diolah menjadi bubuk atau serbuk dengan menggunakan teknik dehidrasi. Proses ini membantu meningkatkan daya simpan dan mempertahankan kandungan nutrisi, membuat produk lebih tahan lama dan praktis untuk disimpan.</p>\r\n\r\n<p>Dengan menerapkan teknik pengolahan makanan hasil samping ini, limbah makanan dapat diubah menjadi sumber daya yang berharga. Ini tidak ', '2024-05-29', '66572c4f2952f.png', 'APPROVE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `verified` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`, `foto`, `verified`) VALUES
(40, 'superadmin', 'superadmin', 'superadmin', 'superadmin', 'default', 'verified'),
(42, 'walawe123', 'walawe', 'walawe123', 'admin', 'default', 'verified'),
(43, 'operator', 'operator', 'operator', 'operator', 'default', 'none'),
(45, 'ipan', 'ipan', 'ipan', 'operator', '6655544e18f87.jpg', 'none'),
(47, 'admin', 'admin', 'admin', 'admin', 'default', 'verified'),
(48, 'AWE123', 'admin', 'Mohamad Sinatrya Al Warid', 'admin', '66572884bd17c.jpeg', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isi_berita`
--
ALTER TABLE `isi_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isi_berita`
--
ALTER TABLE `isi_berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
