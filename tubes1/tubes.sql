-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 02:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `kategori`, `judul`, `gambar`, `isi`) VALUES
(16, 'Proyek', 'Pemerintah Mengumumkan Proyek Pembangunan Jalur Kereta Cepat Modern', '6480feb3bf78d.png', 'Kota Sizelton, 5 Juni 2023 - Warga Kota  Sizelton akan segera menyaksikan kemajuan besar dalam sistem transportasi mereka dengan pengumuman proyek pembangunan jalur kereta cepat modern yang akan segera dilaksanakan. Proyek ini diharapkan akan mengubah wajah kota ini dan memberikan solusi transportasi yang efisien dan ramah lingkungan. Pemerintah Kota  Sizelton telah mengumumkan rencana ambisius untuk membangun jalur kereta cepat yang akan menghubungkan kota dengan kota-kota terdekat. Proyek ini bertujuan untuk mempercepat perjalanan antarkota, mengurangi kemacetan, dan memberikan alternatif transportasi yang nyaman bagi penduduk. Jalur kereta cepat ini akan dilengkapi dengan fasilitas modern, termasuk stasiun-stasiun yang dilengkapi dengan teknologi mutakhir, sistem pembayaran elektronik, dan konektivitas internet. Diharapkan proyek ini akan membantu mengurangi waktu perjalanan antarkota menjadi setengah dari waktu yang biasanya diperlukan. Walikota XYZ, Amanda Smith, menyampaikan kegembiraannya atas proyek ini, &quot;Proyek pembangunan jalur kereta cepat merupakan langkah penting dalam meningkatkan konektivitas kota ini dengan kota-kota lainnya. Kami percaya bahwa transportasi yang efisien akan memberikan dampak positif dalam mengurangi kemacetan dan emisi karbon, serta meningkatkan mobilitas penduduk. Kami berkomitmen untuk membangun masa depan yang berkelanjutan dan nyaman bagi warga kota.&quot; Proyek ini juga diharapkan akan memberikan manfaat ekonomi yang signifikan, termasuk pembukaan lapangan kerja baru dalam sektor konstruksi dan operasional. Selain itu, proyek ini akan memberikan dorongan bagi sektor pariwisata dan perdagangan di kota ini, karena aksesibilitas yang lebih baik antarkota. Pemerintah Kota XYZ akan bekerja sama dengan pihak swasta dan berbagai pemangku kepentingan untuk menyelesaikan proyek ini dalam waktu yang ditentukan. Pemerintah juga berencana untuk melibatkan masyarakat dalam proses pengambilan keputusan dan menyediakan informasi yang transparan sepanjang jalannya proyek.'),
(17, 'Kesehatan', 'Kota X Mendorong Kesadaran Kesehatan dan Meningkatkan Kualitas Hidup Penduduk', '6481512a3b0c1.png', 'Sizelton, 8 Juni 2023 - Pemerintah sizelton telah meluncurkan serangkaian inisiatif baru untuk mendorong kesadaran kesehatan dan meningkatkan kualitas hidup penduduk. Dalam upaya untuk menciptakan masyarakat yang sehat dan berkelanjutan, langkah-langkah tersebut bertujuan untuk mengajak penduduk untuk hidup gaya hidup sehat dan mengurangi risiko penyakit yang dapat dicegah. Salah satu inisiatif utama adalah kampanye kesehatan &quot;Sehat dan Bahagia Bersama &quot;. Kampanye ini menyoroti pentingnya aktivitas fisik, pola makan seimbang, dan perawatan diri yang baik. Pemerintah setempat telah bekerja sama dengan rumah sakit, lembaga kesehatan masyarakat, dan para ahli kesehatan untuk menyediakan sumber daya dan panduan yang mudah diakses bagi warga. Sebagai bagian dari kampanye, Pusat Kesehatan Masyarakat kota Sizelton menyelenggarakan program pelatihan olahraga gratis dan kelas kebugaran untuk semua kelompok usia. Program ini mencakup aktivitas seperti senam, yoga, bersepeda, dan berjalan kaki. Para peserta juga mendapatkan panduan gizi yang tepat dari ahli diet dan nutrisi yang berpengalaman.'),
(18, 'Kuliner', 'Mengungkap Kelezatan Kuliner Kota Sizelton Makanan Tradisional dan Internasional yang Wajib Dicoba', '6481590349604.jpg', 'Untuk pengalaman kuliner laut yang memukau, &quot;Restoran Seafood Lautan Biru&quot; adalah tempat yang wajib dikunjungi. Restoran ini menawarkan berbagai hidangan laut segar, mulai dari kepiting saus padang, udang goreng mentega, hingga ikan bakar. Hidangan-hidangan ini disajikan dengan cita rasa yang lezat dan bahan-bahan yang segar, memberikan pengalaman makan yang tak terlupakan.  Kota ABC juga menyajikan pilihan kuliner internasional yang memanjakan lidah. &quot;Restoran Italia Pasta Bella&quot; menawarkan berbagai hidangan pasta autentik Italia, seperti spaghetti carbonara, lasagna, dan fettuccine alfredo. Dengan saus yang kaya dan bahan-bahan berkualitas, hidangan-hidangan ini memikat pecinta masakan Italia.  Selain itu, Kota ABC juga memiliki banyak kedai kopi yang menawarkan kualitas kopi terbaik. &quot;Kedai Kopi Aroma Nikmat&quot; adalah tempat yang populer di kalangan pecinta kopi. Dari espresso yang kaya dan aromatik hingga cappuccino yang lembut, kedai kopi ini menyajikan berbagai minuman kopi yang memuaskan selera.  Kota ABC telah menjadi surga kuliner yang menarik pengunjung dari berbagai tempat. Keberagaman kuliner yang ditawarkan mencerminkan kekayaan budaya dan cita rasa yang unik. Dengan hidangan tradisional yang autentik hingga kuliner internasional yang lezat, Kota ABC adalah destinasi kuliner yang tak boleh dilewatkan bagi pecinta makanan'),
(19, 'Program Kerja', 'Kota Sizelton Mewujudkan Visi dan Misi Melalui Program Kerja Inovatif', '64815bccc05a2.jpg', 'Kota Sizelton, 5 Juni 2023 - Kota Sizelton terus berkomitmen untuk mengembangkan dan memajukan kualitas hidup warganya melalui program kerja yang inovatif. Dalam upaya mewujudkan visi dan misi yang telah ditetapkan, pemerintah kota telah meluncurkan serangkaian program yang bertujuan untuk meningkatkan infrastruktur, pendidikan, kesehatan, dan kelestarian lingkungan.  Salah satu program unggulan yang sedang dilaksanakan adalah &quot;Program Smart City Sizelton&quot;. Program ini bertujuan untuk memanfaatkan teknologi informasi dan komunikasi guna meningkatkan efisiensi pelayanan publik, transportasi, pengelolaan limbah, serta pengawasan keamanan. Dengan penerapan teknologi canggih, Kota sizelton berusaha menciptakan lingkungan yang nyaman, terkoneksi, dan berkelanjutan bagi warganya.  Selain itu, pemerintah kota juga fokus pada pengembangan infrastruktur yang mendukung pertumbuhan ekonomi dan kesejahteraan masyarakat. Melalui &quot;Program Pembangunan Infrastruktur ABC Maju&quot;, kota ini telah melakukan pembangunan jalan raya yang lebih luas, perbaikan sistem transportasi umum, serta pengembangan pusat-pusat perdagangan dan bisnis. Tujuannya adalah menciptakan iklim investasi yang kondusif dan meningkatkan mobilitas masyarakat.  Dalam bidang pendidikan, Kota ABC telah meluncurkan &quot;Program Pendidikan Unggulan ABC Cerdas&quot;. Program ini berfokus pada peningkatan kualitas pendidikan di semua tingkatan, termasuk peningkatan sarana dan prasarana sekolah, pelatihan guru, serta pengembangan kurikulum yang relevan. Dengan adanya program ini, pemerintah kota berharap dapat menciptakan generasi yang cerdas, kreatif, dan siap menghadapi tantangan masa depan.  Kesehatan masyarakat juga menjadi prioritas utama dalam &quot;Program Kesehatan ABC Sehat&quot;. Pemerintah kota telah meningkatkan aksesibilitas pelayanan kesehatan, meningkatkan kualitas fasilitas kesehatan, serta meluncurkan kampanye kesehatan untuk meningkatkan kesadaran masyarakat tentang gaya hidup sehat dan pencegahan penyakit. Program ini diharapkan dapat meningkatkan kualitas hidup dan kesejahteraan masyarakat Kota ABC.  Selain itu, kelestarian lingkungan juga menjadi perhatian serius dalam &quot;Program Lingkungan ABC Hijau&quot;. Pemerintah kota telah meluncurkan kampanye penghijauan, pengelolaan limbah yang ramah lingkungan, dan pengurangan emisi gas rumah kaca. Dengan adanya program ini, Kota ABC berupaya untuk menjaga keindahan alam, kualitas udara, dan ekosistem yang seimbang.  Kota ABC telah menunjukkan komitmen yang kuat dalam mewujudkan visi dan misi melalui berbagai program kerja inovatif. Dengan program-program'),
(21, 'Pendidikan', 'Transforming Education in Sizelton City', '6485c93dd52ef.jpg', 'Sizelton City, June 11, 2023 - In an effort to enhance the quality of education and provide equal opportunities for all students, the city of Sizelton has implemented groundbreaking initiatives to transform its education system. These initiatives aim to revolutionize the way students learn, ensuring a brighter future for the youth of Sizelton.  One of the key highlights of this educational transformation is the introduction of personalized learning programs. Sizelton City has recognized the importance of tailoring education to meet the unique needs and abilities of each student. Through the use of advanced technologies and innovative teaching methods, students now have the opportunity to learn at their own pace and explore subjects of their interest.  To support this personalized learning approach, Sizelton City has equipped its schools with state-of-the-art facilities and resources. Interactive smart classrooms, equipped with the latest educational technologies, provide an engaging learning environment for students. Additionally, the city has invested heavily in digital learning resources, making educational materials accessible to all students regardless of their socioeconomic background.  Furthermore, Sizelton City has placed a strong emphasis on teacher development and training. Recognizing the crucial role of educators in shaping the future generation, the city has established comprehensive professional development programs for teachers. These programs aim to enhance teaching skills, incorporate modern pedagogical approaches, and encourage continuous learning among educators.  In addition to academic excellence, Sizelton City has also prioritized the holistic development of students. The city has introduced a well-rounded curriculum that emphasizes the importance of extracurricular activities, sports, and arts. Students are encouraged to explore their talents and interests beyond traditional academics, fostering creativity, teamwork, and leadership skills.  The educational reforms in Sizelton City have garnered widespread praise and recognition. Education experts and parents alike have commended the city&#039;s commitment to providing quality education that prepares students for the challenges of the future. Graduates from Sizelton&#039;s schools are well-prepared for higher education and future careers, with a strong foundation in critical thinking, problem-solving, and adaptability.  Mayor John Anderson expressed his enthusiasm for the transformative changes, stating, &quot;Education is the cornerstone of a thriving society. We are dedicated to providing our students with the best educational opportunities possible, equipping them with the skills and knowledge they need to succeed in an ever-changing world.&quot;  With its innovative approaches to personalized learning, investment in modern infrastructure, and emphasis on holistic development, Sizelton City has become a trailblazer in education. The city&#039;s commitment to transforming education has set an inspiring example for other communities, highlighting the potential for positive change within the education sector.  As the educational landscape continues to evolve, Sizelton City remains at the forefront, ensuring that its students are well-equipped to shape a prosperous future for themselves and the community as a whole.');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `level`) VALUES
(3, 'yuma', 'yum', '$2y$10$ov5Sjx7KJYQcsnRDcAkW6OSYq7FNs5mgja85J9onAPkSSv7usk99W', 'yuma@gmail.com', 1),
(4, 'iki', 'iki', '$2y$10$tQgRIWGDYM.BSDGSi4NeKuEhCGsR3165ginzsRct5sy11qFaO7kNe', 'iki@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
