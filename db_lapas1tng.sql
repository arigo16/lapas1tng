-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 13 Jan 2019 pada 05.27
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lapas1tng`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` varchar(5) NOT NULL,
  `judul_artikel` varchar(225) NOT NULL,
  `id_kategori_artikel` varchar(3) NOT NULL,
  `artikel` text NOT NULL,
  `username` varchar(8) NOT NULL,
  `tgl_terbit` datetime NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `id_kategori_artikel`, `artikel`, `username`, `tgl_terbit`, `views`) VALUES
('A0001', '"SELAMAT HARI IBU" LAPAS PEMUDA TANGERANG MEMPERINGATI DENGAN UPACARA PENGIBARAN BENDARA', 'K04', '<p><img alt="" src="http://www.lapaspemudatangerang.org/images/foto/upacara/hari-ibu.jpeg" style="height:853px; width:1280px" /></p>\r\n\r\n<p><strong>Tangerang</strong>, bertepat pada hari sabtu tanggal 22 Desember 2018 pagi hari pukul 08.00 WIB diadakan upacara Pengebaran bendera merah putih di Lembaga Pemasyarakatan Pemuda Kelas IIA Tangerang,untuk memperingati hari ibu yang ke 90 tahun 2018. dengan tema &ldquo;Bersama meningkatkan peran perempuan dan laki-laki dalam membangun ketahanan keluarga untuk kesejahteraan bangsa&rdquo;. Khusus untuk petugasnya diambil oleh Petugas pemasyarakatan kaum perempuan yang selalu siap siaga baik dalam tugas maupun dalam keluarga. Upacara diikuti oleh seluruh petugas lembaga pemasyarakatan pemuda kelas IIA Tangerang, Dalam upacara ini dibacakan pembukaan Undang-Undang Dasar 1945 dan Sejarah singkat hari Ibu.<br />\r\nInspektur Upacara diambil alih langsung oleh Kalapas Pemuda Kelas IIA Tangerang ( Jumadi) beliau membacakan amanat menteri Pemberdayaan Perempuan dan Perlindungan Anak Republik Indonesia &ldquo; dalam peringatan hari ibu ini diharapkan mendorong semua pemangku kepentingan untuk memberikan perhatian, pengakuan akan pentingnya eksistensi perempuan dalam berbagai sektor pembangunan serta diharapkan juga memberikan keyakinan kesempatan mampu meningkatkan kualitas hidupnya serta mengembangkan segala potensi dan kemampuan yang dimilikinya. selamat hari Ibu ke 90, jayalah terus perempuan Lapas Pemuda Kelas IIA Tangerang (humas lapasda)</p>\r\n', 'arigo', '2018-12-24 10:23:12', 0),
('A0002', 'PERINGATAN BELA NEGARA PADA LAPAS PEMUDA TANGERANG', 'K04', '<p><img alt="" src="http://www.lapaspemudatangerang.org/images/bela-negara.jpeg" style="height:853px; width:1280px" /></p>\r\n\r\n<p><strong>Tangerang </strong>&ndash; Hari ini (19/12), Lembaga Pemasyarakatan (Lapas) Kelas IIA Pemuda Tangerang menggelar upacara dalam rangka Hari Bela Negara Tahun 2018. Bertindak sebagai Pembina Upacara adalah Kepala Lapas Kelas IIA Pemuda Tangerang, Jumadi; sedangkan yang menjadi Inspektur Upacara adalah Kasubsi Bimaswat, Gilang Riflianto. Upacara terpantau berjalan dengan khidmat dan lancar.<br />\r\nDalam amanatnya, Kalapas Jumadi mengatakan bahwa Hari Bela Negara tahun ini mengambil tema Bela Negara Untuk Kemakmuran Rakyat, yang harus ditanamkan dalam jiwa dan raga segenang Bangsa Indonesia sejak dini, antara lain melalui kewajiban mengikuti Pendidikan Pancasila dan kewarganeraan, serta aksi nasional bela negara di berbagai bidang.<br />\r\n&quot;Diperlukan cara-cara inovativ serta adaptive dengan perkembangan zaman agar anak-anak muda kita mendapatkan ruang untuk mengkespresikan kecintaanya pada tanah air, merekalah masa depan Bangsa,&quot; ujar Jumadi.<br />\r\nUpacara dalam merayakan hari Bela Negara tahun 2018 diikuti oleh seluruh Petugas Pemasyarakatan di Lapas Pemuda Tangerang dengan dinyanyikan lagu Mars Bela Negara serta Pembacaan Ikrar Bela Negara.. (Humas Lapasda Tgr)</p>\r\n', 'arigo', '2018-12-24 10:23:41', 0),
('A0003', 'LAPAS PEMUDA TANGERANG TERBAIK KE-3 SE-BANTEN DALAM PENYERAPAN ANGGARAN 2018', 'K04', '<p><img alt="" src="http://www.lapaspemudatangerang.org/images/TA2.jpeg" style="height:960px; width:1280px" /></p>\r\n\r\n<p><strong>Tangerang </strong>- Hari ini (17/12), Lembaga Pemasyarakatan Pemuda Kelas IIA Tangerang menerima penghargaan sebagai Satuan Kerja (Satker) terbaik ketiga kinerja pelaksanaan anggaran T.A. 2018. Penghargaan ini diraih dengan nilai 98,65 dalam kategori satker KP/KD dengan pagu di atas Rp 10 Miliar.</p>\r\n\r\n<p>Hadir untuk menerima penghargaan tersebut adalah Kepala Lapas Pemuda Kelas IIA Tangerang, Jumadi. Beliau pun menyampaikan rasa syukurnya atas penghargaan tersebut.</p>\r\n\r\n<p>&quot;Alhamdulillah puji syukur atas kuasa-Nya sehingga Lapas Pemuda bisa meraih penghargaan sebagai satker terbaik ketiga dengan nilai 98,65. Kami berharap tahun yang akan datang bisa lebih baik lagi,&quot; ujar Jumadi.</p>\r\n\r\n<p>Penghargaan ini sendiri diberikan di sela-sela acara Penyerahan Daftar Isian Pelaksanaan Anggaran (DIPA) T.A. 2019 dan Rapat Evaluasi Kinerja Pembangunan Banten T.A. 2018 yang bertempat di Pendopo Gubernur Banten. (Humas Lapasda Tgr</p>\r\n\r\n<p><img alt="" src="http://www.lapaspemudatangerang.org/images/TA3.jpeg" style="height:992px; width:1280px" /></p>\r\n', 'arigo', '2018-12-24 10:24:58', 0),
('A0004', 'DIREKTUR JENDERAL PEMASYARAKATAN RESMIKAN BARBERSHOP JAPE STYLE DI LAPAS PEMUDA TANGERANG', 'K04', '<p><img alt="" src="http://www.lapaspemudatangerang.org/images/20181110_Persemian-JAPE-Style_1.JPG" style="height:534px; width:800px" /></p>\r\n\r\n<p><strong>Tangerang </strong>- Bertepatan dengan acara &quot;The Gathering of Heroes&quot;, Lembaga Pemasyarakatan (Lapas) Kelas IIA Pemuda Tangerang meresmikan Barbershop JAPE Style. Peresmian ini dilakukan secara langsung oleh Direktur Jenderal Pemasyarakatan, Sri Puguh Budi Utami yang ditemani oleh Kepala Lapas Kelas IIA Pemuda Tangerang, Jumadi.</p>\r\n\r\n<p>Dalam sambutannya, Sri Puguh Budi Utami menyampaikan harapannya agar Barbershop JAPE Style bisa menjadi wadah bagi para Warga Binaan supaya lebih mandiri setelah bebas nanti.</p>\r\n\r\n<p>&quot;Semoga Barbershop JAPE Style bisa menaungi para Warga Binaan yang ingin mandiri dan membuka usaha sendiri. Mereka bisa belajar bagaimana cara memangkas rambut yang baik serta melayani pelanggan dengan sopan dan ramah,&quot; ujar Sri Puguh Budi Utami.</p>\r\n\r\n<p>Di kesempatan yang sama, Kalapas Jumadi turut menjelaskan tentang apa itu Barbershop JAPE Style, serta menyelipkan harapannya kepada para Warga Binaan.</p>\r\n\r\n<p>&quot;Kata JAPE itu merupakan singkatan dari Penjara Pemuda, kedepannya akan menjadi brand dari kami. Semoga bisa mendidik para Warga Binaan supaya memiliki keahlian yang bisa diaplikasikan setelah bebas nanti. (Humas Lapasda Tgr)</p>\r\n', 'arigo', '2018-12-24 10:24:24', 0),
('A0005', 'AKREDITASI PAKET B DI LAPAS PEMUDA TANGERANG', 'K03', '<p><img alt="" src="http://www.lapaspemudatangerang.org/images/akrediatasib.jpeg" style="height:780px; width:1040px" /></p>\r\n\r\n<p>Pada hari sabtu tanggal 24 November 2018,telah di laksanakan program akreditasi paket B di PKBM Tunas Madani Di Lapas Pemuda Tangerang. Ada sesuatu hal yang berbeda pada proses akreditasi hari ini, karena di laksanakan di Lapas. Biasanya anggota team akreditasi yang merasa was-was kedatangan Tim akreditasi dari Dinas pendidikan provinsi Banten.&nbsp; Tapi kali ini, Team akreditasi dinas pe ndidikan Banten yg merasa was-was pada proses pelaksanaan akreditasi di lapas, Ujar Pak Eddy selaku tim Dinas pendidikan provinsi Banten.&nbsp; Pada proses akreditasi ini berjalan dengan lancar dari proses penilaian perangkat pembelajaran, sarana dan prasarana dan lain sebagainya. Kami dari 11 tim anggota PKBM telah menyiapkan segala sesuatunya dengan baik dari segi perangkat pembelajaran, sarana dan prasana, kurikulum dan segala sesuatu yang menunjang proses penilaian akreditas. Kegiatan proses penilaian akreditasi ini berlangsung hingga malam hari dan Tim akreditasi Dinas pendidikan Banten mengaku senang Pkbm tunas madani di lapas pemuda sudah mulai banyak perubahan dan inovasi dalam pembelajaran dan sarana dan prasana yang menunjang dalam proses kegiatan pembelajaran di kelas maupun di luar kelas.</p>\r\n', 'arigo', '2018-12-24 10:21:00', 1),
('A0006', 'UTS PERDANA DI KAMPUS KEHIDUPAN LAPAS PEMUDA TANGERANG', 'K04', '<p><img alt="" src="http://www.lapaspemudatangerang.org/images/WhatsApp-Image-2018-11-23-at-16.33.19.jpeg" style="height:1280px; width:1280px" /></p>\r\n\r\n<p>kegiatan Ujian tengah semester (UTS) perdana pada tanggal 23 November 2018 di awali Mata kuliah pertama Pengantar Ilmu Hukum terlihat Mahasiswa sangat antusias dalam mengikuti kegiatan Uts dimana mahasiswa kampus kehidupan merasakan animo adrenaline ujian kembali ketika mereka menjalani masa hukuman dan menjadi suatu pengalaman yang baru. Pengawas ujian Ibu Hj. Annie Myranica, Sh, Mh selaku Dekan Fakultas Hukum dan Ibu Ida Farida,SH,MH. Jumlah &#39;mahasiswa hadir 33 lengkap di kampus kehidupan Lapas Pemuda Tangerang dalam keadaan aman dan kondusif.<br />\r\nUts mata kuliah kedua Pengantar Hukum Indonesia terlihat mahasiswa kampus kehidupan sudah mulai ber-adaptasi dengan suasana ujian. Pengawas ujian oleh Ibu Ida Farida, SH,MH. Jumlah Mahasiswa hadir 33 lengkap di kampus kehidupan Lapas Pemuda Tangerang dalam keadaan aman dan kondusif.&nbsp;<br />\r\nPada tahap UTS terakhir Mata Kuliah Dasar-Dasar Manajemen terlihat mahasiswa kampus kehidupan mulai sumringah karena akan berakhirnya ujian pada hari ini. Pada ujian dasar-dasar manajemen di awasi oleh dosen pengampu Ibu Fitri,SH,MH dan Ibu Ida Farida, SH, MH. Jumlah Mahasiswa 33 Hadir lengkap dalam keadaan aman dan kondusif</p>\r\n', 'arigo', '2018-12-24 10:22:39', 4),
('A0007', 'LAPAS KELAS IIA PEMUDA TANGERANG IKUT MERIAHKAN NAPI CRAFT 2018', 'K04', '<p><img alt="" src="http://www.lapaspemudatangerang.org/images/20181101-NAPI-Craft-2018.jpg" style="height:450px; width:800px" /></p>\r\n\r\n<p><strong>Tangerang </strong>- Untuk ketujuh kalinya, Direktorat Jenderal Pemasyarakatan menggelar NAPI Craft, sebuah ajang untuk memamerkan hasil kreasi dan kerajinan tangan para narapidana dari seluruh Lapas/Rutan di Indonesia. Gelaran NAPI Craft 2018 yang bertemakan &#39;HOPE&#39; ini diselenggarakan bekerja sama dengan Yayasan Second Chance Foundation, dan dibuka secara resmi oleh Direktur Jenderal Pemasyarakatan, Sri Puguh Budi Utami, Rabu 31 Oktober 2018.</p>\r\n\r\n<p>Lembaga Pemasyarakatan (Lapas) Kelas IIA Pemuda Tangerang turut berpartisipasi dalam acara akbar tersebut, dengan menampilkan berbagai hasil kerajinan tangan seperti lukisan, lampu kerang, serta patung koran. Kepala Lapas Kelas IIA Pemuda Tangerang, Jumadi mengatakan bahwa dirinya amat terkesan dengan hasil karya para narapidana seraya berharap agar kesemuanya dapat diaplikasikan ketika mereka bebas kelak.</p>\r\n\r\n<p>&quot;Saya sangat terkesan dengan karya-karya yang dipamerkan pada ajang NAPI Craft 2018 ini. Saya berharap kreatifitas dan inovasi dalam membuat kerajinan tangan, serta keterampilan kemandirian yang telah diasah di dalam Lapas Pemuda dapat diaplikasikan dalam kehidupannya setelah bebas kelak,&quot; kata Jumadi.</p>\r\n\r\n<p>Selain menampilkan hasil karya dan kerajinan tangan, Lapas Kelas IIA Pemuda Tangerang juga menampilkan kesenian berupa musik band. Band narapidana bernama Lapasda Band tersebut menampilkan beberapa lagu dalam acara NAPI Craft 2018.</p>\r\n\r\n<p>NAPI Craft 2018 akan berlangsung dari 31 Oktober hingga 7 November 2018 mendatang. Bagi yang ingin hadir dan melihat langsung hasil karya dan kerajinan tangan narapidana bisa hadir langsung ke Museum Seni Rupa dan Keramik yang berada di kawasan Kota Tua, Jakarta. (Humas Lapasda Tgr)</p>\r\n', 'arigo', '2018-12-24 10:51:26', 3),
('A0008', 'CONTOH PENGUMUMAN YANG BENAR', 'K05', '<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<p><span style="font-size:22px"><strong><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif">Untuk membuat sebuah Pengumuman buat pada Input Artikel dan kategorinya Pilih &quot;Pengumuman&quot;. Pastikan data kategorinya sudah ada &quot;Pengumuman&quot;</span></strong></span></p>\r\n', 'arigo', '2018-12-24 11:48:10', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(3) NOT NULL,
  `barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `barang`) VALUES
('B01', 'Handphone'),
('B02', 'Rantang'),
('B03', 'Pakaian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_bawaan`
--

CREATE TABLE IF NOT EXISTS `barang_bawaan` (
`no` int(11) NOT NULL,
  `id_barang_bawaan` varchar(15) NOT NULL,
  `id_barang` varchar(3) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id_file` varchar(5) NOT NULL,
  `judul_file` varchar(500) NOT NULL,
  `id_tipe_file` varchar(3) NOT NULL,
  `link_file` varchar(500) NOT NULL,
  `username` varchar(8) NOT NULL,
  `tgl_terbit` datetime NOT NULL,
  `download_hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id_file`, `judul_file`, `id_tipe_file`, `link_file`, `username`, `tgl_terbit`, `download_hit`) VALUES
('F0001', 'PERATURAN PEMERINTAH TENTANG DISIPLIN PEGAWAI', 'T01', 'assets/file/PERATURAN PEMERINTAH TENTANG DISIPLIN PEGAWAI.pdf', 'arigo', '2018-12-24 11:08:42', 2),
('F0002', 'FORMULIR KUNJUNGAN', 'T02', 'assets/file/FORMULIR KUNJUNGAN.pdf', 'arigo', '2018-12-24 11:14:11', 0),
('F0003', 'FORMULIR LHKPN MODEL KPK A', 'T02', 'assets/file/FORMULIR LHKPN MODEL KPK A.xls', 'arigo', '2018-12-24 11:19:20', 1),
('F0004', 'FORMULIR LHKPN MODEL KPK B', 'T02', 'assets/file/FORMULIR LHKPN MODEL KPK B.xls', 'arigo', '2018-12-24 11:19:32', 0),
('F0005', 'SURAT EDARAN NOMOR PAS 24 PK OI 04 01 TAHUN 2013', 'T01', 'assets/file/SURAT EDARAN NOMOR PAS24PKOI 0401 TAHUN 2013.pdf', 'arigo', '2018-12-24 11:19:56', 0),
('F0006', 'SURAT EDARAN NOMOR PAS 30 PK 01 04 01 TAHUN 2013 TENTANG TINDAK LANJUT HASIL PENGGELEDAHAN BARANG TERLARANG DI LAPAS, RUTAN DAN CABANG RUTAN', 'T01', 'assets/file/SURAT EDARAN NOMOR PAS 30 PK 01 04 01 TAHUN 2013 TENTANG TINDAK LANJUT HASIL PENGGELEDAHAN BARANG TERLARANG DI LAPAS, RUTAN DAN CABANG RUTAN.pdf', 'arigo', '2018-12-24 11:20:32', 1),
('F0007', 'PROSES PEMBUATAN SURAT RAWAT JALAN NAPI DILUAR LAPAS', 'T03', 'assets/file/PROSES PEMBUATAN SURAT RAWAT JALAN NAPI DILUAR LAPAS.pdf', 'arigo', '2018-12-24 11:20:57', 1),
('F0008', 'PROSES PENGELUARAN NARAPIDANA UNTUK KEGIATAN KERJA', 'T03', 'assets/file/PROSES PENGELUARAN NARAPIDANA UNTUK KEGIATAN KERJA.pdf', 'arigo', '2018-12-24 11:21:10', 1),
('F0009', 'PROSES PEREKRUTAN TENAGA KERJA NARAPIDANA', 'T03', 'assets/file/PROSES PEREKRUTAN TENAGA KERJA NARAPIDANA.pdf', 'arigo', '2018-12-24 11:21:22', 0),
('F0010', 'PETUNJUK PENGISIAN LAPORAN HARTA KEKAYAAN PENYELENGGARA NEGARA MODEL KPK A', 'T04', 'assets/file/PETUNJUK PENGISIAN LAPORAN HARTA KEKAYAAN PENYELENGGARA NEGARA MODEL KPK A.pdf', 'arigo', '2018-12-24 11:21:39', 0),
('F0011', 'PETUNJUK PENGISIAN LAPORAN HARTA KEKAYAAN PENYELENGGARA NEGARA MODEL KPK B', 'T04', 'assets/file/PETUNJUK PENGISIAN LAPORAN HARTA KEKAYAAN PENYELENGGARA NEGARA MODEL KPK B.pdf', 'arigo', '2018-12-24 11:21:48', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE IF NOT EXISTS `kasus` (
  `id_kasus` varchar(3) NOT NULL,
  `kasus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id_kasus`, `kasus`) VALUES
('C02', 'Teroris'),
('C03', 'Pembunuhan'),
('C04', 'Perampokan'),
('C05', 'Perkosaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_artikel`
--

CREATE TABLE IF NOT EXISTS `kategori_artikel` (
  `id_kategori_artikel` varchar(3) NOT NULL,
  `kategori_artikel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_kategori_artikel`, `kategori_artikel`) VALUES
('K04', 'Berita'),
('K02', 'Hiburan'),
('K03', 'Informasi'),
('K05', 'Pengumuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan_online`
--

CREATE TABLE IF NOT EXISTS `kunjungan_online` (
  `id_kunjungan_online` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_kunjungan` datetime NOT NULL,
  `id_napi` varchar(5) NOT NULL,
  `hubungan` varchar(15) NOT NULL,
  `pengikut_laki` int(11) DEFAULT '0',
  `pengikut_perempuan` int(11) DEFAULT '0',
  `pengikut_anak` int(11) DEFAULT '0',
  `id_barang_bawaan` varchar(15) NOT NULL,
  `foto_pengunjung` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `napi`
--

CREATE TABLE IF NOT EXISTS `napi` (
  `id_napi` varchar(5) NOT NULL,
  `nama_napi` varchar(50) NOT NULL,
  `id_kasus` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `napi`
--

INSERT INTO `napi` (`id_napi`, `nama_napi`, `id_kasus`) VALUES
('N0001', 'Joko', 'C02'),
('N0002', 'Desta', 'C04'),
('N0003', 'Sora', 'C05'),
('N0004', 'Setiawan', 'C04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persetujuan_kunjungan_online`
--

CREATE TABLE IF NOT EXISTS `persetujuan_kunjungan_online` (
`id_persetujuan_kunjungan_online` int(11) NOT NULL,
  `id_kunjungan_online` varchar(15) NOT NULL,
  `tgl_persetujuan` datetime NOT NULL,
  `username` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_file`
--

CREATE TABLE IF NOT EXISTS `tipe_file` (
  `id_tipe_file` varchar(3) NOT NULL,
  `tipe_file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tipe_file`
--

INSERT INTO `tipe_file` (`id_tipe_file`, `tipe_file`) VALUES
('T01', 'Regulasi'),
('T02', 'Formulir Kunjungan'),
('T03', 'Standar Operasi'),
('T04', 'Lain-Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(8) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `otorisasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `fullname`, `otorisasi`) VALUES
('arigo', '827ccb0eea8a706c4c34a16891f84e7b', 'Arigo', 'Administrator'),
('budi', '827ccb0eea8a706c4c34a16891f84e7b', 'Dwi Budi Kurniawan', 'Pelayanan Kunjungan'),
('nasrul', '827ccb0eea8a706c4c34a16891f84e7b', 'Nasrul Hidayah', 'Humas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id_artikel`), ADD KEY `id_kategori_artikel` (`id_kategori_artikel`), ADD KEY `username` (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_bawaan`
--
ALTER TABLE `barang_bawaan`
 ADD PRIMARY KEY (`no`), ADD KEY `id_barang_bawaan` (`id_barang_bawaan`), ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`id_file`), ADD KEY `id_tipe_file_2` (`id_tipe_file`), ADD KEY `username` (`username`);

--
-- Indexes for table `kasus`
--
ALTER TABLE `kasus`
 ADD PRIMARY KEY (`id_kasus`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
 ADD PRIMARY KEY (`id_kategori_artikel`), ADD UNIQUE KEY `kategori_artikel` (`kategori_artikel`);

--
-- Indexes for table `kunjungan_online`
--
ALTER TABLE `kunjungan_online`
 ADD PRIMARY KEY (`id_kunjungan_online`), ADD KEY `id_penitipan_barang` (`id_barang_bawaan`), ADD KEY `nama_napi` (`id_napi`), ADD KEY `id_napi` (`id_napi`), ADD KEY `id_barang_bawaan` (`id_barang_bawaan`);

--
-- Indexes for table `napi`
--
ALTER TABLE `napi`
 ADD PRIMARY KEY (`id_napi`), ADD UNIQUE KEY `nama_napi` (`nama_napi`), ADD KEY `id_kasus` (`id_kasus`);

--
-- Indexes for table `persetujuan_kunjungan_online`
--
ALTER TABLE `persetujuan_kunjungan_online`
 ADD PRIMARY KEY (`id_persetujuan_kunjungan_online`), ADD KEY `username` (`username`), ADD KEY `id_kunjungan_online` (`id_kunjungan_online`), ADD KEY `username_2` (`username`);

--
-- Indexes for table `tipe_file`
--
ALTER TABLE `tipe_file`
 ADD PRIMARY KEY (`id_tipe_file`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_bawaan`
--
ALTER TABLE `barang_bawaan`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `persetujuan_kunjungan_online`
--
ALTER TABLE `persetujuan_kunjungan_online`
MODIFY `id_persetujuan_kunjungan_online` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori_artikel`) REFERENCES `kategori_artikel` (`id_kategori_artikel`) ON UPDATE CASCADE,
ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barang_bawaan`
--
ALTER TABLE `barang_bawaan`
ADD CONSTRAINT `barang_bawaan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON UPDATE CASCADE,
ADD CONSTRAINT `barang_bawaan_ibfk_2` FOREIGN KEY (`id_barang_bawaan`) REFERENCES `kunjungan_online` (`id_barang_bawaan`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `file`
--
ALTER TABLE `file`
ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_tipe_file`) REFERENCES `tipe_file` (`id_tipe_file`) ON UPDATE CASCADE,
ADD CONSTRAINT `file_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kunjungan_online`
--
ALTER TABLE `kunjungan_online`
ADD CONSTRAINT `kunjungan_online_ibfk_3` FOREIGN KEY (`id_napi`) REFERENCES `napi` (`id_napi`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `napi`
--
ALTER TABLE `napi`
ADD CONSTRAINT `napi_ibfk_1` FOREIGN KEY (`id_kasus`) REFERENCES `kasus` (`id_kasus`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `persetujuan_kunjungan_online`
--
ALTER TABLE `persetujuan_kunjungan_online`
ADD CONSTRAINT `persetujuan_kunjungan_online_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE,
ADD CONSTRAINT `persetujuan_kunjungan_online_ibfk_2` FOREIGN KEY (`id_kunjungan_online`) REFERENCES `kunjungan_online` (`id_kunjungan_online`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
