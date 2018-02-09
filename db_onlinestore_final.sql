-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30. Desember 2016 jam 03:33
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_onlinestore_final`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `idanggota` int(11) NOT NULL AUTO_INCREMENT,
  `emailanggota` varchar(50) NOT NULL,
  `passwordanggota` varchar(20) NOT NULL,
  `namaanggota` varchar(50) NOT NULL,
  `jkanggota` char(1) NOT NULL,
  `tgllahiranggota` date NOT NULL DEFAULT '0000-00-00',
  `alamatanggota` text NOT NULL,
  `nohpanggota` varchar(15) NOT NULL,
  `tgldaftar` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idanggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`idanggota`, `emailanggota`, `passwordanggota`, `namaanggota`, `jkanggota`, `tgllahiranggota`, `alamatanggota`, `nohpanggota`, `tgldaftar`) VALUES
(1, 'memberif@gmail.com', 'memberif', 'Mahasiswa IF', 'L', '1993-10-15', 'Jl. Raya Lubuk Begalung Sumater Barat', '081234567890', '2016-12-29 18:37:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `idbrand` int(11) NOT NULL AUTO_INCREMENT,
  `idkat` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `namabrand` varchar(30) NOT NULL,
  `logobrand` text NOT NULL,
  PRIMARY KEY (`idbrand`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`idbrand`, `idkat`, `idadmin`, `namabrand`, `logobrand`) VALUES
(1, 1, 1, 'ACER', 'acer.jpg'),
(2, 1, 1, 'ALCATEL', 'alcatel.jpg'),
(3, 1, 1, 'APPLE', 'apple.jpg'),
(4, 1, 1, 'ASUS', 'asus.jpg'),
(5, 1, 1, 'BLACKBERRY', 'bb.jpg'),
(6, 1, 1, 'LENOVO', 'lenovo.jpg'),
(7, 1, 1, 'LG', 'lg.jpg'),
(8, 1, 1, 'OPPO', 'oppo.jpg'),
(9, 1, 1, 'SAMSUNG', 'samsung.jpg'),
(10, 1, 1, 'XIAOMI', 'Xiaomi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `idcart` int(11) NOT NULL AUTO_INCREMENT,
  `idproduk` int(11) NOT NULL,
  `idanggota` int(11) NOT NULL,
  `idpenjual` int(11) NOT NULL,
  `jumlahbeli` int(11) NOT NULL,
  `tglcart` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idcart`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `cart`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `jasakirim`
--

CREATE TABLE IF NOT EXISTS `jasakirim` (
  `idjasa` int(11) NOT NULL AUTO_INCREMENT,
  `idadmin` int(11) NOT NULL,
  `namajasa` varchar(30) NOT NULL,
  `logojasa` text NOT NULL,
  `detailjasa` text NOT NULL,
  `tarif` double NOT NULL,
  PRIMARY KEY (`idjasa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `jasakirim`
--

INSERT INTO `jasakirim` (`idjasa`, `idadmin`, `namajasa`, `logojasa`, `detailjasa`, `tarif`) VALUES
(1, 1, 'JNE', 'jne.jpg', 'Perusahaan yang berdiri sejak 1990 ini menawarkan 4 jenis layanan pengiriman barang, antara lain OKE (Ongkos Kirim Ekonomis), REG (Reguler), YES (Yakin Esok Sampai), dan SS (Super Speed)', 13000),
(2, 1, 'POS INDONESIA', 'pos.jpg', 'Kini untuk jasa pengiriman barang, PT Pos Indonesia menawarkan beberapa jenis layanan, diantaranya adalah Surat Kilat Khusus dan Express Next Day', 11000),
(3, 1, 'TIKI', 'tiki.jpg', 'Perusahaan jasa pengiriman barang ini menawarkan 5 jenis layanan pengiriman barang, antara lain ECO (Economi Service), REG (Reguler Service), ONS (Over Night Service), HDS (Holiday Delivery Service), dan SDS (Same Day Service)', 12500),
(4, 1, 'PANDU LOGISTIC', 'pandu.jpg', 'Perusahaan ini menawarkan 2 jenis layanan jasa pengiriman, yakni Overnight Service dan Same Day Service', 15000),
(5, 1, 'RPX HOLDING', 'rpx.jpg', 'Perusahaan yang memiliki kantor pusat di bilangan Jakarta Selatan ini menawarkan 5 jenis layanan jasa pengiriman, antara lain SameDay Package, MidDay Package, Next Day Package, Regular Package, dan Retail Package', 12000),
(6, 1, 'ESL EXPRESS', 'esl.jpg', 'ESL Express menawarkan berbagai jenis layanan jasa pengiriman. Salah satunya adalah DARAT dengan jenis kiriman RPX â€“ Paket (0,01-99,00 kg)', 14500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoritambahan`
--

CREATE TABLE IF NOT EXISTS `kategoritambahan` (
  `idkategori` int(11) NOT NULL AUTO_INCREMENT,
  `idkat` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `namakategori` varchar(50) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kategoritambahan`
--

INSERT INTO `kategoritambahan` (`idkategori`, `idkat`, `idadmin`, `namakategori`) VALUES
(1, 1, 1, 'TV'),
(2, 1, 1, 'Kulkas'),
(3, 2, 1, 'Kompor Gas'),
(4, 1, 1, 'Smartphone');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriutama`
--

CREATE TABLE IF NOT EXISTS `kategoriutama` (
  `idkat` int(11) NOT NULL AUTO_INCREMENT,
  `idadmin` int(11) NOT NULL,
  `namakat` varchar(40) NOT NULL,
  PRIMARY KEY (`idkat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `kategoriutama`
--

INSERT INTO `kategoriutama` (`idkat`, `idadmin`, `namakat`) VALUES
(1, 1, 'Elektronik'),
(2, 1, 'Peralatan Rumah Tangga'),
(3, 1, 'Pakaian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `idorder` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `idpenjual` int(11) NOT NULL,
  `idjasa` int(11) NOT NULL,
  `jumlahbeli` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `statusorder` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderdetail`
--

INSERT INTO `orderdetail` (`idorder`, `idproduk`, `idpenjual`, `idjasa`, `jumlahbeli`, `subtotal`, `statusorder`) VALUES
(1, 4, 5, 2, 1, 3457090, ''),
(3, 4, 5, 3, 1, 3457090, 'Lunas'),
(3, 1, 1, 3, 1, 4998000, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `idorder` int(11) NOT NULL AUTO_INCREMENT,
  `idanggota` int(11) NOT NULL,
  `alamatkirim` text NOT NULL,
  `total` double NOT NULL,
  `tglorder` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`idorder`, `idanggota`, `alamatkirim`, `total`, `tglorder`) VALUES
(1, 1, 'Jl. Raya Lubuk Begalung Sumater Barat', 3468090, '2016-12-30 00:17:41'),
(3, 1, 'Kampus UPI YPTK Padang', 8478840, '2016-12-30 00:59:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `idbayar` int(11) NOT NULL AUTO_INCREMENT,
  `idorder` int(11) NOT NULL,
  `namabankpengirim` varchar(50) NOT NULL,
  `namapengirim` varchar(50) NOT NULL,
  `jumlahtransfer` double NOT NULL,
  `tgltransfer` date NOT NULL DEFAULT '0000-00-00',
  `namabankpenerima` varchar(50) NOT NULL,
  `bukti` text NOT NULL,
  PRIMARY KEY (`idbayar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`idbayar`, `idorder`, `namabankpengirim`, `namapengirim`, `jumlahtransfer`, `tgltransfer`, `namabankpenerima`, `bukti`) VALUES
(1, 3, 'Bank Syariah Bukopin', 'Eka Praja W M', 8478840, '2016-12-30', 'Bank Central Asia', 'MyBookDepan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE IF NOT EXISTS `penjual` (
  `idpenjual` int(11) NOT NULL AUTO_INCREMENT,
  `emailpenjual` varchar(50) NOT NULL,
  `passwordpenjual` varchar(20) NOT NULL,
  `namapenjual` varchar(30) NOT NULL,
  `nohppenjual` varchar(15) NOT NULL,
  `namatoko` varchar(30) NOT NULL,
  `detailpenjual` text NOT NULL,
  PRIMARY KEY (`idpenjual`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`idpenjual`, `emailpenjual`, `passwordpenjual`, `namapenjual`, `nohppenjual`, `namatoko`, `detailpenjual`) VALUES
(1, 'storeif3@gmail.com', 'storeif3', 'Eka Praja W M', '085213873216', 'epwm Online Store', 'Toko khusus jualan Handphone'),
(3, 'storeif2@gmail.com', 'storeif2', 'Eka Praja W M', '085213873216', 'Eka P Online Store', 'Toko khusus jualan pakaian'),
(4, 'storeif6@gmail.com', 'storeif6', 'Eka Praja', '085213873216', 'IF6 Online Store', 'Toko Sepatu'),
(5, 'storeif1@gmail.com', 'storeif1', 'Eka', '085213873216', 'IF1 OLShop', 'Jualan Ikan Cupang'),
(6, 'storeif4@gmail.com', 'storeif4', 'EPWM', '085213873216', 'IF4 Store', 'Jualan CangCiMen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `idkat` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idpenjual` int(11) NOT NULL,
  `idbrand` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `hargaproduk` double NOT NULL,
  `stok` int(11) NOT NULL,
  `spesifikasi` text NOT NULL,
  `detailproduk` text NOT NULL,
  `diskon` int(11) NOT NULL,
  `berat` float NOT NULL,
  `isikotak` varchar(100) NOT NULL,
  `foto1` text NOT NULL,
  `foto2` text NOT NULL,
  `foto3` text NOT NULL,
  `tglpost` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idproduk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `idkat`, `idkategori`, `idpenjual`, `idbrand`, `namaproduk`, `hargaproduk`, `stok`, `spesifikasi`, `detailproduk`, `diskon`, `berat`, `isikotak`, `foto1`, `foto2`, `foto3`, `tglpost`) VALUES
(1, 1, 4, 1, 3, 'Apple iPhone 6 - 16 GB - Emas', 4998000, 9, 'asd', 'asd', 0, 0.9, 'asd', 'apple-iphone-6-16-gb-emas-5666-387528-1-gallery.jpg', '', '', '0000-00-00 00:00:00'),
(2, 1, 4, 3, 4, 'Asus Zenfone Max ZC550KL - 32GB - Hitam', 2029000, 14, 'Layar 5,5" dengan corning Gorilla Glass 4<br />\r\nSistem operasi Android v.5.0.2 Lollipop (dapat di upgrade ke v.6.0.1 Marshmallow)<br />\r\nRAM 2GB, ROM 32GB<br />\r\nKonektivitas 4G LTE<br />\r\nKamera 13MP dan 5MP', 'Energi 5000 mAh<br />\r\nDesain ramping Asus ZenFone Max membawa baterai lithium-polymer yang dibuat khusus dengan kapasitas tidak main-main, mencapai 5000 mAh. Dengan kapasitas daya seperti ini, smartphone Anda dapat bertahan hingga 37 jam untuk penggunaan telepon, 32 jam untuk menjelajahi internet seharian, atau 22 jam untuk menonton film favorit Anda dari layar sebesar 5.5 incinya. Tidak hanya itu, Asus ZenFone Max dapat pula berfungsi sebagai power bank Anda. Cukup hubungkan perangkat lainnya dengan USB OTG, dan Asus ZenFone Max pun akan mengisi baterai gadget Anda.<br />\r\n<br />\r\nPixelMaster<br />\r\nAsus ZenFone Max dibekali dengan kamera PixelMaster 2.0 dengan segala keunggulannya; resolusi 13 MP pada kamera belakang dan 5 MP untuk kamera depan, apertur f/2.0. Laser autofokus terbarunya mampu mengurangi gambar buram dan menyempurnakan stabilisasi gambar, sementara model Low Light-nya pun memiliki teknologi pixel-merging untuk mengambil foto yang 400% lebih terang di malam hari atau ruang minim cahaya tanpa bantuan lampu kilat.<br />\r\n<br />\r\nDesain Cantik yang Mewah<br />\r\nZenFone Max dikelilingi dengan bingkai berefek metal yang lembut saat disentuh, sehingga tetap menarik saat berada di genggaman atau saku Anda. Dilengkapi cover belakang yang mewah dengan kesan material kulit, ZenFone Max terlihat lebih indah. Bukan cuma mewah, bagian ini juga membuat ZenFone lebih nyaman digenggam.<br />\r\n<br />\r\nDapur Pacu Optimal<br />\r\nTidak hanya kapasitas baterai yang tak tertandingi, ZenFone Max ini juga memiliki dapur pacu yang mampu memberikan kinerja maksimal. Berbekal prosesor Octa-core 64-bit Qualcomm MSM8916, GPU Adreno 306 / 405, RAM sebesar 2 GB, serta sistem operasi Android v5.0 Lollipop, smartphone besutan Asus ini mampu menjalankan berbagai aplikasi dengan lancar tanpa lagging. Foto dan data-data lainnya dapat Anda simpan dalam memori internal yang berkapasitas 16 GB.<br />\r\n<br />\r\nLayar IPS 5.5" HD<br />\r\nSemua fitur unggul dari ZenFone Max ini bisa Anda operasikan dengan nyaman dan mudah berkat layarnya yang berukuran 5.5 inci. Layar dengan panel IPS ini mampu menampilkan visual HD dalam resolusi 1280 x 720. Lapisan Corning Gorilla Glass 4 akan memberikan perlindungan penuh pada layar Anda, menawarkan 2 kali lipat ketahanan terhadap benturan, dengan ketahanan yang meningkat sebanyak 2.5 kali.', 0, 1.1, '1 x Asus Zenfone Max ZC550KL - 32GB - Hitam<br />\r\n1 x Charger<br />\r\n1 x Buku Panduan<br />\r\n1 x Ka', 'asus-zenfone-max-zc550kl-32gb-hitam-1057-1287498-d1cec82_002.jpg', 'asus-zenfone-max-zc550kl-32gb-hitam-1062-1287498-d762e34759d.jpg', '', '0000-00-00 00:00:00'),
(3, 1, 4, 4, 9, 'Samsung Galaxy J5 2016 - 16GB - Emas ', 2699000, 6, 'Layar 5.2" Super AMOLED<br />\r\nSistem Operasi Android<br />\r\nDual Kamera 13MP + 5 MP<br />\r\n2 GB RAM + 16 GB ROM<br />\r\nQuad-core 1.2 GHzâ€‹', 'Kombinasi antara performa optimal disertai dengan desain elegan nan premium. Keduanya bisa didapatkan dari Samsung Galaxy J5 satu ini. Meluncurkan smartphone dengan platform Android, Samsung menghadirkan ponsel cerdas dengan kualitas dapur pacu mengagumkan untuk beragam kebutuhan Anda setiap hari: RAM mumpuni sebesar 2 GB yang ditandem dengan prosesor Quad-Core 1,2 GHz. Dilengkapi pula dengan desain yang ergonomis, Samsung Galaxy J5 bisa jadi pilihan untuk melengkapi segala kegiatan Anda.<br />\r\n<br />\r\nOptimalisasi Dapur Pacu<br />\r\nSamsung Galaxy J5 hadir dengan kemampuan dapur pacu luar biasa. Untuk menunjang kebutuhan Anda, ponsel cerdas besutan Samsung ini dibekali dengan prosesor QuadCore 1,2 GHz. Rasakan kemulusan operasi saat membuka berbagai macam aplikasi tanpa hambatan. Didukung pula dengan RAM sebesar 2 GB, membuka beragam aplikasi dalam waktu bersamaan juga tetap lancar tanpa lagging. Anda bisa melakukan multitasking menjelajah internet sembari mengakses email dan mendengarkan lagu dengan mulus tanpa hambatan.<br />\r\n<br />\r\nKapasitas Besar<br />\r\nRatusan foto, video, aplikasi, hingga banyaknya unduhan bukan masalah dengan ponsel yang satu ini. Ponsel cerdas Samsung ini kapasitas memori internal 16 GB yang dibenamkan di dalamnya memastikan penyimpanan beragam data yang besar dan mudah. Dilengkapi pula dengan slot microSD hingga 128 GB, Anda bisa perbesar kapasitas simpan dengan mudah. Ambil semua foto, rekam semua video dan unduh semua data tanpa ragu!<br />\r\n<br />\r\nLayar Luas nan Jernih<br />\r\nHadir dengan layar jernih sebesar 5.2", Samsung Galaxy J5 memberikan keleluasaan bagi jemari Anda untuk bergerak bebas di atas layar. Jutaan warna yang nyata siap menemani Anda menjelajah berbagai konten dengan nyaman. Dibekali pula dengan layar  Super AMOLED dengan resolusi HD 720 x 1280p, Samsung memastikan Anda akan menikmati kualitas gambar yang jernih dan tajam dalam mengkases berbagai konten visual yang akan memanjakan mata Anda.<br />\r\n<br />\r\nTahan Seharian!<br />\r\nSamsung Galaxy J5 dibekali dengan baterai berkapasitas sebesar 3100 mAh. Kapasitasnya yang besar membuatnya mampu bertahan seharian tanpa masalah. Cukup dengan satu kali pengisian selama 2 jam, akses dunia dalam genggaman selama sehari penuh tanpa pengisian ulang. Dilengkapi pula dengan moda pengatur kecerahan, Anda bisa mengatur ketahanan baterai sesuai dengan kebutuhan Anda sehari-hari.<br />\r\n<br />\r\nKamera Impresif<br />\r\nRekam setiap jejak kehidupan yang begitu menyenangkan bersama orang-orang terdekat Anda! Melengkapi kebutuhan Anda untuk setiap kesempatan, Samsung hadir dengan kualitas kamera yang begitu impresif. Kamera belakang dengan resolusi 13 megapiksel dengan sensor CMOS membuat hasil jepretan yang lebih tajam sekalipun dalam kondisi minim cahaya berkat fitur lampu kilat LED. Selain itu, pengaturan kamera yang mudah dalam satu sentuhan juga memastikan Anda dapat menangkap beragam foto terbaik dengan mudah. Sementara bagi penggemar selfie dan pengguna video call, Samsung Galaxy J5 juga hadir dengan kamera depan sebesar 5 megapiksel untuk hasil gambar yang tetap jernih dan tajam. Dan bagi Anda yang ingin merekam momen lebih utuh, rekam video berkualits HD 1080p/30 fps dengan Samsung Galaxy J5.<br />\r\n<br />\r\nOS Teranyar<br />\r\nHadir dengan OS Android, Samsung Galaxy J5 dioptimalisasikan untuk memberi pengalaman terbaik saat menggunakan Android. Nikmati jutaan aplikasi lifestyle, games, hingga bisnis dan hiburan dengan satu sentuhan di Google PlayStore. Dengan ponsel Samsung, lengkapi segala kebutuhan Anda dengan dunia dalam genggaman.<br />\r\n<br />\r\nDesain Ergonomis<br />\r\nTipis nan kokoh. Samsung Galaxy J5 menawarkan perpaduan desain premium dalam balutan bodi yang kokoh. Menggunakan material yang dipilih khusus serta presisi kelas satu, Samsung mempersembahkan ponsel yang tangguh sekaligus tetap terasa nyaman dalam genggaman. Ukurannya sebesar 5.2" memastikan ia tetap terasa tipis dan pas di tangan. Hadir dengan pilihan warna yang elegan, Samsung Galaxy J5 bukan hanya sekedar alat komunikasi, namun cerminan ekspresi diri Anda!', 10, 1, '1 x Samsung Galaxy J5 2016 - 16GB<br />\r\n1 x Charger<br />\r\n1 x Panduan Penggunaan<br />\r\n1 x Kartu ', 'samsung-galaxy-j5-2016-16gb-emas-3636-4945968-4ebaf8b5e7_002.jpg', 'samsung-galaxy-j5-2016-16gb-emas-3637-4945968-aff328f0fa4870.jpg', 'samsung-galaxy-j5-2016-16gb-emas-3644-4945968-7660c583da6888.jpg', '2016-11-22 12:33:09'),
(4, 1, 4, 5, 8, 'Oppo F1s Selfie Expert 4G - 32GB - Gold - Free Power Bank 3000Mah & Memory V-Gen 16GB', 3799000, 5, 'Kamera Depan 16 Megapixel<br />\r\nKamera Belakang 13 Megapixel<br />\r\nChipset Mediatek MT6750<br />\r\nRAM 3GB<br />\r\nInternal Storage 32GB<br />\r\nSlot SD Card<br />\r\nHarga Terbaik', '16 MP Kamera Depan<br />\r\nLebih Cerah, Lebih Detail<br />\r\n<br />\r\nOppo F1s Selfie Expert dilengkapi dengan kamera selfie dengan 1/3.1-inch sensor dan apeture/bukaan lensa F/2.0, memungkin menghasilkan foto dengan cahaya yang lebih cerah serta memberikan detil untuk hasil foto. Jadi kamu bisa mendapatkan hasil maksimal sekalipun dengan kondisi cahaya yang minim.<br />\r\n<br />\r\n <br />\r\nBeautify 4.0<br />\r\n<br />\r\nFitur Beautify 4.0 memberikan hasil yang sempurna bagi penggunanya dengan memanfaatkan jutaan filter untuk memberikan hasil senatural mungkin.<br />\r\n<br />\r\nSensor Fingerprint <br />\r\n<br />\r\nMembuka ponsel dengan pemindai sidik jari, cukup dengan 0.22 detik. Semakin sering digunakan, maka akan semakin sensitif dan memudahkan pengenalan sidik jari anda.', 9, 1, '1x Oppo F1s<br />\r\n1x Kabel data<br />\r\n1x Charger<br />\r\n1x Earphone<br />\r\nKartu garansi<br />\r\nGr', 'oppo-f1s-selfie-expert-4g-32gb-gold-free-power-bank-3000_004.jpg', 'oppo-f1s-selfie-expert-4g-32gb-gold-free-power-bank-3000mah-.jpg', '', '2016-11-24 15:29:17'),
(5, 1, 4, 6, 10, 'Xiaomi Mi4 4G - 16GB - Putih', 1650000, 6, '1 Tahun Garansi Distributor<br />\r\nSize 5.0 inches<br />\r\nSupport 4G all GSM Operator<br />\r\nInternal 16 GB, 2GB RAM, Memory Card slot No<br />\r\nCamera Primary 13 MP, Secondary 8 MP', 'Xiaomi MI4 Smartphone menggunakan Qualcomm Snapdragon 801 2.5GHz Quad -core , RAM 2G + 16G ROM dengan layar 5.0inch 1920x1080 , MIUI V5 OS , menjanjikan cukup kecepatan operasi cepat cukup menakjubkan dan mengesankan . kamera depan 8.0MP untuk kenyamanan diri menangkap , kamera 13.0MP kembali bagi Anda untuk merekam setiap momen tunggal jelas ; semua tersedia untuk membuat ponsel ini pilihan yang paling berharga Xiaomi MI4 ', 13, 0.85, '1 x Mi 4i - 16GB - Putih<br />\r\n1 x Baterai<br />\r\n1 x Charger<br />\r\n1 x Kabel Data<br />\r\n1 x Kart', 'xiaomi-mi4-4g-16gb-putih-2624-6138548-e3306f8b2fcebfe41c_002.jpg', 'xiaomi-mi4-4g-16gb-putih-2624-6138548-7cf9a720dd2d67db8da833.jpg', '', '2016-11-25 10:25:48');
