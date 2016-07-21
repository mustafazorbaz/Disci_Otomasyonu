-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 May 2015, 01:41:46
-- Sunucu sürümü: 5.5.32
-- PHP Sürümü: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `db`
--
CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `db`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE IF NOT EXISTS `duyurular` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tarih` date NOT NULL,
  `baslik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`id`, `tarih`, `baslik`, `resim`, `icerik`) VALUES
(1, '2015-05-20', '40 Yaş Üstü Hastalara %30  İndirim', 'duyurular/dis1.png', 'Tüm tedavi  işlemlerimde  Ağustos ayına özel %30 indirim.Ktü ağız ve  diş  sağlıgı  kliniği olarak  Dr. Celal  ATALAR ''ın hizmetiyle 40  Yaş üstü hastalara  %30  indirim  yatık.Tüm 40 yaş  üstü  hastalarımızı  poliklinige  davet  etmekteyiz.'),
(2, '2015-02-03', 'Klinik Muayene Başlama ve Bitiş Saatleri ', 'duyurular/dis5.png', 'Haftanın 6 günü  saat 08:00  ve  18:00 saatleri arasında  kliniğimiz aktiftir.Sadece  pazar günü kliniğimiz kapalidir.\r\nSağlıklı Günler...'),
(4, '2015-05-09', 'Hastalarımızın Dikkatine! ', 'duyurular/dis4.png', 'Randevulu hastalar randevusu olmayan hastalara  göre  önceliklidir...'),
(6, '2015-05-04', 'Kandiliniz Kutlu Olsunu', 'duyurular/dis6.png', 'Tüm hastalarımızın  kandilini  kutlarız.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footeryazi`
--

CREATE TABLE IF NOT EXISTS `footeryazi` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `yazi` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `footeryazi`
--

INSERT INTO `footeryazi` (`id`, `yazi`) VALUES
(1, 'Kliniğimiz 2013 yılında ağız diş sağlığında uzman doktorumuzla Tranbzon Of''ta hizmet vermeye başlamıştır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `icerik` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `icerik`) VALUES
(1, 'Modern Klinik; 2010 yılında kurulmuştur. Kliniğimiz de Diş Hekimliği''nin tüm tedavi hizmetleri verilmektedir. Ağız ve diş sağlığı tedavileri, tüm uzmanlık dallarında, uluslararası standartlara uygunluğu onaylanmış yöntemlerle, her kesimine sunulmaktadır...\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hastalar`
--

CREATE TABLE IF NOT EXISTS `hastalar` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `tc` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `k_tarih` date NOT NULL,
  `d_tarih` date NOT NULL,
  `d_yeri` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=17 ;

--
-- Tablo döküm verisi `hastalar`
--

INSERT INTO `hastalar` (`id`, `tc`, `ad`, `soyad`, `email`, `adres`, `telefon`, `k_tarih`, `d_tarih`, `d_yeri`, `il`) VALUES
(1, '15258688445', 'Kenan', 'Uyanık', 'uyanik@kenan', 'şişli Öğretmenler £vi ist.  cadde:7 sokak 42  apt.Hanımlar Öğretmen Evi', '05985454564', '2015-05-20', '1969-04-10', 'Korkuteli', 'İstanbul'),
(2, '12879864548', 'Nergis Su', 'Nergis', 'sulunergis@hotmail.com', 'Polatlı ANK', '05482225588', '2011-01-20', '1995-10-05', '1984-05-20', 'Ankara'),
(3, '19899779879', 'Aslı', 'Salın', 'salin.asli@hotmail.com', 'Korkuteli', '02426435599', '2014-05-20', '1990-05-12', '1994-05-20', 'Antalya'),
(4, '16546556456', 'Hakan', 'Burçak', 'burcak@gmail.com', 'Bucak  ılımlı  cad.  sok:3', '05418996544', '2013-05-20', '1996-05-14', '1992-05-20', 'Burdur'),
(5, '15654468878', 'Mehmet', 'Yalçın', 'mehmet@gmail.com', 'aşagı pazar köyü', '05456468877', '2015-02-05', '1990-01-20', '1969-05-05', 'Antalya'),
(6, '64565456546', 'Bekir', 'Ertem', 'ertenbekir@gmail.com', 'Akyar köyü Korkuteli', '02425589999', '2012-05-20', '1992-01-06', '0000-00-00', 'Antalya'),
(7, '15656454655', 'Hasan', 'Atmaz', 'atmazyadaatar@gmail.com', 'atmazlar mah. sok.4', '05884466555', '2014-05-20', '1990-05-20', '0000-00-00', 'Antalya'),
(8, '15777867677', 'yusuf', 'inan', 'inan@gmail.com', 'kara yayla köyü', '02581593212', '2015-04-15', '0000-00-00', '1979-12-31', 'Antalya'),
(9, '17287679999', 'Cem', 'beken', 'beken@gmail.com', 'kata mah.  ', '02425557575', '2015-02-26', '1973-01-04', 'gata', 'Antalya'),
(10, '35435345354', 'Sefa', 'durmaz', 'durmaz@hotmail.com', 'nigde  ıhlamur sok:44', '05456533504', '2014-05-20', '2015-05-08', 'bor', 'Niğde'),
(11, '78575788885', 'Hakan', 'Altay', 'altay@tank.com', 'gata  sok.40  ANK', '03439389589', '2015-05-20', '1985-05-20', 'polatlı', 'Antalya'),
(12, '54564656464', 'Ali', 'Topal', 'topal@gmail.com', 'ortaklar cad. 9', '02423449894', '2012-05-20', '1969-05-20', 'Muratpaşa', 'Antalya'),
(13, '86545465564', 'Nimet', 'Dilsiz', 'dilsilnimet@windowslive.com', 'Alaattin mah. Korkuteli', '05865565656', '2013-05-20', '1995-05-20', 'Antalya', 'Antalya'),
(14, '38424728498', 'Mehmet', 'Ekinci', 'ekinci@gmail.com', 'aşagı mah.', '05454555454', '2011-05-20', '1980-05-20', 'Isparta ', 'Antalya'),
(15, '38298490803', 'Orhan', 'Pamuk', 'pamuk@gmail.com', 'Seyhan  cad:dadlıca sok:10', '06758434545', '2014-03-20', '2000-09-15', 'Kastamonu', 'Antalya');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesapcari`
--

CREATE TABLE IF NOT EXISTS `hesapcari` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tc` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `islem` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `alacakli` int(10) NOT NULL,
  `borclu` int(10) NOT NULL,
  `bakiye` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=42 ;

--
-- Tablo döküm verisi `hesapcari`
--

INSERT INTO `hesapcari` (`id`, `tc`, `ad`, `soyad`, `tarih`, `islem`, `aciklama`, `alacakli`, `borclu`, `bakiye`) VALUES
(1, '12345678900', 'Mustafa', 'ZORBAZ', '2015-05-08', 'İmplantoloji(Yapay Diş)', 'ön bölgeden iki aer', 0, 200, 200),
(23, '55236644427', 'rterte', 'ZORBAZ', '2015-05-05', 'Lamine Porselen', 'aa', 1000, 50, 1000),
(25, '55236644427', 'Ahmet', 'ZORBAZ', '2015-05-07', 'İmplantoloji(Yapay Diş)', '2 diş', 500, 20, 500),
(37, '23981980190', 'Bekir', 'Yalçın', '2015-05-17', 'İmplantoloji(Yapay Diş)', 'Çeneye  diş  çekme.Programcının  500 alacagı  var', 1500, 2000, 500),
(38, '16546556456', 'Hakan', 'Burçak', '2015-05-08', 'Lamine Porselen', '5  adet  porselen diş', 500, 0, 500),
(39, '54564656464', 'Ali', 'Topal', '2015-05-11', 'Diş Çekimi', '2  ön diş  çekimi', 150, 50, 100),
(40, '15258688445', 'Kenann', 'Uyanık', '2015-05-12', 'İmplantoloji(Yapay Diş)', '1  tane  arka  diş  kanal  tedavisi  oldu', 500, 100, 400),
(41, '16546556456', 'Hakan', 'Burçak', '2015-05-21', 'İmplantoloji(Yapay Diş)', '2  diş  çekildi', 300, 400, -100);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `icerik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `icerik`) VALUES
(1, 'Tel:05412663776 <br/>\r\nFax:0123456789 <br/>\r\nE-mail:ktu@klinik.com<br/>\r\nAdres :<br/>\r\nÇamlı Cd. Of Teknoloji Apt. K:1 D:3-4<br/>\r\nOf Kyk Yurt Yanı -Of-Trabzon\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `islemler`
--

CREATE TABLE IF NOT EXISTS `islemler` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `islem` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `islemler`
--

INSERT INTO `islemler` (`id`, `islem`) VALUES
(1, 'İmplantoloji(Yapay Diş)'),
(2, 'Lamine Porselen'),
(3, 'Zirkonyum'),
(4, 'Bleaching(Diş Beyazlatma)'),
(5, 'Estetik Diş'),
(6, 'Çene Eklemi Tedavileri'),
(7, 'Endodonti (Kanal Tedavisi)'),
(8, 'Periodontoloji (Dişeti Hastalıkları)'),
(9, 'Ortodontik tedaviler(Tel tedavisi)'),
(10, 'Diş Çekimi'),
(11, 'Diş doludurma');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `baslik`, `icerik`, `resim`) VALUES
(1, 'İmplantoloji', 'Günümüzde kaybedilen dişlerin fonksiyon ve estetiğinin tekrar yeniden hastaya kazandırılmasın için yapılan yapay diş kökleridir.', 'KatagorilerResimler/kat1.png'),
(2, 'Lamine Porselen', 'Dişin sadece ön yüzeyinde açılan pencerelere, seramik yaprakların yapıştırılmasıdır.', 'KatagorilerResimler/kat2.png'),
(3, 'Zirkonyum', 'Diş kapalama uygulamalarında dayanıklı ve estetik olarak son derece mükemmel ve sağlam zirkonyum kullanılmasıdır.', 'KatagorilerResimler/kat3.png'),
(4, 'Bleaching', 'Dişlerin yapısında (mine ve dentin tabakasında) oluşan renklenmeleri giderme işlemidir.', 'KatagorilerResimler/kat4.png'),
(5, '20 Yaş Dişleri', 'Çenenin her iki tarafının en sonundaki üçüncü büyük azı dişleridir ve genelde 16-20 yaş arası çıkar.', 'KatagorilerResimler/kat5.png'),
(6, 'Pedodonti', '0-13 yaş grubu çocukların süt ve daimi dişlerinin sağlıklı olarak korunması amaçlı işlemlerdir.', 'KatagorilerResimler/kat6.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayanyazi`
--

CREATE TABLE IF NOT EXISTS `kayanyazi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icerik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kayanyazi`
--

INSERT INTO `kayanyazi` (`id`, `icerik`) VALUES
(1, 'KTÜ Diş Kliniği');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `klinik`
--

CREATE TABLE IF NOT EXISTS `klinik` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `resim1` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `resim2` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `resim3` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `resim4` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `klinik`
--

INSERT INTO `klinik` (`id`, `resim1`, `resim2`, `resim3`, `resim4`) VALUES
(1, 'klink_icerik/01.jpg', 'klink_icerik/02.jpg', 'klink_icerik/03.jpg', 'klink_icerik/04.jpg'),
(2, 'klink_icerik/05.jpg', 'klink_icerik/06.jpg', 'klink_icerik/07.jpg', 'klink_icerik/08.jpg'),
(3, 'klink_icerik/10.jpg', 'klink_icerik/11.jpg', 'klink_icerik/12.jpg', 'klink_icerik/13.jpg'),
(4, 'klink_icerik/13.jpg', 'klink_icerik/14.jpg', 'klink_icerik/15.jpg', 'klink_icerik/16.jpg'),
(5, 'klink_icerik/17.jpg', 'klink_icerik/18.jpg', 'klink_icerik/19.jpg', 'klink_icerik/20.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oturum`
--

CREATE TABLE IF NOT EXISTS `oturum` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `oturum`
--

INSERT INTO `oturum` (`id`, `user`, `password`) VALUES
(4, 'mustafa', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE IF NOT EXISTS `randevular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `saat` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`id`, `tc`, `ad`, `soyad`, `tel`, `tarih`, `saat`, `eposta`) VALUES
(2, '34242432432', 'Ufuk', 'Akkoç', '05654454446', '2015-05-22', '09:00:00', 'akkoc@gmail.com'),
(3, '55464544464', 'Hasan', 'Simav', '05438983898', '2015-05-22', '15:00:00', 'hasan@gmail.com'),
(4, '58212213131', 'Gizem', 'Elmas', '05954656465', '2015-05-22', '10:00:00', 'gizem@elmas.com'),
(5, '34111414143', 'Rıdvan', 'Öz', '05458846546', '2015-05-22', '11:00:00', 'rido@gmail.com'),
(6, '54646445646', 'Ali', 'Rıza', '05486258446', '2015-05-22', '13:00:00', 'ali@riza.com'),
(7, '51515331321', 'Özlem', 'Duran', '08655546464', '2015-05-22', '14:00:00', 'ozlem@gmail.com'),
(8, '45483543513', 'Dursun', 'Kıvrak', '05364562285', '2015-05-22', '16:00:00', 'kivrak@gmail.com'),
(9, '11223373437', 'Zeynep', 'Ulusan', '05866565655', '2015-05-21', '08:00:00', 'zeyno@gmail.com'),
(10, '83084091908', 'Gül', 'Nur', '05057418526', '2015-05-21', '09:00:00', 'nurgul@gmail.com'),
(13, '48490890824', 'Alper', 'Aydın', '05545646546', '2015-05-22', '17:00:00', 'alper@hotmail.com'),
(14, '32890429080', 'Şeref', 'Sen', '01234834839', '2015-05-23', '08:00:00', 'sen@seref.com'),
(15, '23331321500', 'Sahin', 'Sarı', '12345847389', '2015-05-31', '17:00:00', 'sahinsari@gmail.com'),
(16, '15962357861', 'Mehmet', 'Tancı', '05489625511', '2014-11-19', '08:00:00', 'tanci@gmail.com'),
(18, '34111414143', 'Rıdvan', 'Öz', '05458846546', '2015-10-29', '15:00:00', 'rido@gmail.com'),
(19, '45483543513', 'Dursun', 'Kıvrak', '05364562285', '2015-05-20', '16:00:00', 'kivrak@gmail.com'),
(20, '85229638520', 'Sadiye', 'Erdemit', '054882151135', '2015-05-20', '09:00:00', 'erdemit@gmail.com'),
(21, '45483543513', 'Dursun', 'Kıvrak', '05364562285', '2014-12-16', '16:00:00', 'kivrak@gmail.com'),
(22, '45646546445', 'Furkan', 'Artkan', '04293029090', '2015-08-07', '08:00:00', 'artkan@gmail.com'),
(23, '34111414143', 'Rıdvan', 'Öz', '05465456465', '2015-05-21', '10:00:00', 'rido@gmail.com'),
(24, '56466664654', 'Leman', 'Yufkacı', '05486258858', '2015-05-22', '08:00:00', 'yufkacileman@gmail.com'),
(25, '32409890820', 'Deniz', 'Batmaz', '05488784121', '2015-05-31', '16:00:00', 'batmaz@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `saatler`
--

CREATE TABLE IF NOT EXISTS `saatler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saat` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `saatler`
--

INSERT INTO `saatler` (`id`, `saat`) VALUES
(1, '08:00:00'),
(2, '09:00:00'),
(3, '10:00:00'),
(4, '11:00:00'),
(5, '13:00:00'),
(6, '14:00:00'),
(7, '15:00:00'),
(8, '16:00:00'),
(9, '17:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sikcasorulansorular`
--

CREATE TABLE IF NOT EXISTS `sikcasorulansorular` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `sikcasorulansorular`
--

INSERT INTO `sikcasorulansorular` (`id`, `baslik`, `icerik`) VALUES
(1, 'Dişeti hassasiyeti nedir?', 'Tüketiciler tarafından genellikle "diş sızısı", "diş ağrısı" ya da "hassas dişler" olarak tarif edilen diş hassasiyeti, en çok sıcak ya da soğuk yiyecek ve içecekleri tüketirken meydana gelir. Ayrıca, tatlı ya da ekşi yiyecek ve içecekleri tüketirken ya da dişlerinizi fırçaladıktan sonra ağzınızı soğuk suyla çalkalarken de rahatsızlık hissedebilirsiniz. Birçok yetişkin, sadece zaman zaman diş hassasiyetinden şikayetçi olur. Bazı yetişkinler ise, kronik ağrılar çekmektedir. Diş hassasiyeti, farklı bir diş probleminin de göstergesi olabilir. Diş hassasiyeti konusunda lütfen diş hekiminize danışınız.'),
(2, 'Diş kırılması ve diş yaralanmasında acil yapılması gerekenler nelerdir?', 'Tedaviye yardımcı olabilir düşüncesi ile ‘mümkünse’ kırılan diş parçası bulunarak koruma altına alınmalıdır. 30 dakika içersinde diş hekimine gidilmelidir. Bu arada bölgede kanama meydana gelmişse temiz bir gazlı bez ile basınç uygulanmalıdır. Basınç uygulamasına rağmen kanama 15 dakika içersinde durmazsa en yakın sağlık kuruluşuna başvurulmalıdır.\r\n\r\nDiş kırılmaları, dişlerin yerinden oynaması ya da çıkması, ağız dokularında yaralanmalar ve beyin sarsıntısı sıklıkla  da basketbol, futbol vs. gibi kontakta sporları yaparken oluşan çarpma ve düşmeler ile trafik kazaları sonucunda oluşmaktadır. Özellikle kontakt spor yapan çocuklarda oluşan ağız yaralanmalarını ve diş kırıklarını önlemek için uygulanacak en uygun yöntem ağız koruyucusu (mounth guard) kullanmaları sağlamaktır.\r\n\r\nDiş darbe nedeni ile kendi yuvasında yer değiştirir ise hafif bir parmak basıncı ile diş eski pozisyonuna getirilmeye çalışılmalıdır. Dişi kendi yuvasına yerleştirirken kesinlikle zorlanmamalıdır.'),
(3, 'Kötü ağız kokusu tedavi edilebilir mi?', 'Kötü ağız kokusunun çeşitli nedenlerden kaynaklanabilir. Diş çürükleri, kötü ağız bakımı, diş eti hastalıkları, ağız içindeki çeşitli iltihabi olaylar, üst solunum yolu enfeksiyonları, mide rahatsızlıkları kötü ağız kokusuna yol açabilir. Kötü ağız kokusunun en sık nedeni dişlerin çevresindeki gıda birikintilerinin iyi temizlenmemesidir. Ne kadar iyi fırçalanmasa da, dişlerin birbirine bakan yüzeyleri iyi temizlenemez Bu nedenle diş ipi kullanımı da diş fırçalamak kadar önemsenmeli ve özenle uygulanmalıdır. Kötü ağız kokusu şikayeti olan hastalarda etken olabilecek tüm iltihabi oluşumlar ortadan kaldırılmalıdır. Hastanın çürük dişleri tedavi edilmeli, diş eti tedavileri yapılmalı ve hastanın ağız-diş sağlığının korunması için eğitim verilmeli, periodik kontrollerle bu eğitimin uygulanma derecesi izlenmelidir. Ağızda olması muhtemel kötü ağız kokusu etkenleri ortadan kaldırıldıktan sonra da şikayet devam ediyorsa, bir iç hastalıkları uzmanı ile iletişim kurularak, hastanın olası sistemik hastalıkları saptanmalıdır.'),
(7, 'Diş beyazlatma zararlı mıdır?', 'Diş doktoru gözetiminde yapılan diş beyazlatma işlemi sağlığa zararlı değildir. İşlemin ilk günlerinde bazı kişilerde soğuğa karşı hassasiyet diş ve diş etlerinde küçük hassasiyetler görülebilir. Bunlar işlem tamamen bittikten birkaç gün sonra ortadan kalkar.'),
(8, 'Diş apsesi nedir ve belirtileri nelerdir?', 'Bazı dişler, diş çürümesini ciddi bir sağlık sorunu olarak görmezler. Ancak, zamanında ve doğru şekilde müdahale edilmediğinde, daha çok sorun çıkartan bir hastalığa yol açabilir. Çürüme bakterinin, özünü enfekte etmesine izin verir. Enfeksiyon köke ve çevre kemiğe yayılır. Bu abse olarak bilinir. Eğer kök ölürse, ağrı yok olacak, ancak yavaş yavaş da bitişik kemiğe zarar verecektir.\r\n\r\nEnfeksiyonun bir bölümü olarak oluşan irin, çene boyunca bir kanalı aşındırabilir ve diş eti üzerinde bir şişme ya da içi irinle dolu bir deri lezyonuna yol açabilir. Diş apsesinin belirtileri; dişte sürekli ya da zonklama şeklinde ağrı; Sıcak ya da soğuk yiyecek ve içeceklere karşı hassasiyet; çiğnerken ağrı; boyunda şişmiş lenf düğümleri ateş ve genel kırıklık.'),
(9, '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tedaviler`
--

CREATE TABLE IF NOT EXISTS `tedaviler` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `tedaviler`
--

INSERT INTO `tedaviler` (`id`, `baslik`, `icerik`, `url`) VALUES
(1, 'İmplantoloji', 'İmplant dişi basit bir şekilde tanımlamak gerekirse, implant eksik dişlerin yerine onların işlevlerini yerine getirmesi için yapılan ve çene kemiğine yerleştirilen yapay diş köküdür. İmplantlar estetik görüntü olarak sıkıntı yaratmazlar. İmplantın yapı maddesi çoğunlukla titanyumdur. Çok ileri teknoloji ile üretimleri yapılan implantlar vida şeklindedirler. İmplantlar şu isimlerle de anılırlar; implantat, implante, çakma diş, vida diş, vidalı diş.', 'tedaviler_icerik/s1.jpg'),
(2, 'Estetik Diş Hekimliği', 'Güzel ve yakışıklı olarak toplumda beğeni kazanan her birey aynı zamanda estetik bir gülümsemeye sahiptir. Diş estetiği değerlendirilirken bir çok parametre göz önünde bulundurularak dişlerin boyu, şekli, konumu ve rengi değerlendirilir. Estetik diş hekimliği uygulamaları, basit kompozit ve porselen dolgulardan başlayarak, Lamina Porselen (Laminate Veneer) ve geniş kapsamlı tam seramik restorasyonlara (Empress, Zirkonyum)kadar uzanır. Bazı vakalarda dental estetik uygulamalar ve tıbbi estetik uygulamalar (botoks, yüz germe, dudak dolgusu vb.) birbirlerini tamamlayıcı olarak kullanılır ve maksimum estetik elde edilir.', 'tedaviler_icerik/s2.jpg'),
(3, 'Pedodonti', 'Pedodonti Nedir?\r\n\r\nPedodonti (Çocuk Dişhekimliği); bebeklerin, çocukların ve gençlerin, süt ve daimi dişleri ile birlikte çiğneme sisteminin sağlığını korumayı ve oluşan hastalıkları tedavi etmeyi amaçlar.\r\nÇocukların ağız ve diş sağlığının devamlılığının sağlanması 6 aylık aralıklarla yapılan düzenli diş hekimi kontrolü ile sağlanabilir. Bu kontroller sırasında ağız ve diş sağlığını tehdit eden her türlü sorun tespit edilebilir. Burada önemli olan bu sorunların erken teşhisi ve tedavisidir. Çocuk hastada erken teşhis çocuğun fiziksel ve duygusal gelişimini olumlu yönde etkileyecektir.', 'tedaviler_icerik/s3.jpg'),
(4, 'Ağız, Diş ve Çene Cerrahisi', 'Ağız,Diş ve Çene Cerrahisi; dişlerin normal ve cerrahi çekimleri,gömülü diş operasyonları, diş abseleri, implant cerrahi uygulamaları, çene kemiğinin yetersizlikleri için kemik rekonstrüksiyonları, çene kist ve tümörleri, ortognatik cerrahiler, çene eklem problemleri ,çene kırıklarının cerrahi tedavileri ile ilgilenen ana bilim dalıdır.\r\n\r\nAğız,Diş ve Çene Cerrahisi Uzmanı olmak için 5 yıllık diş hekimliği eğitimi sonrasında 4-5 yıllık uzmanlık eğitimi gereklidir. Bu alanda teorik eğitimin yanısıra cerrahi ameliyatlara katılınıp eğitim sürecince KBB, Anestezi ve Plastik Cerrahi, Acil Tıp Hekimliği anabilim dallarında rotasyonları da tamamlanmaktadır.Hazırlanan doktora tezi ile de uzmanlığa hak kazanılmaktadır.', 'tedaviler_icerik/s6.jpg'),
(5, 'Çene Eklemi Tedavileri', 'Çene eklemi, alt çene, kafatası kemiği ve bu ikisinin arasındaki diskten meydana gelir. Çene açma ve kapama esnasında disk alt çene ile birlikte öne-arkaya hareket eder. Bazı durumlarda diski yerinde tutan bağların gevşemesi sonucu bu disk öne doğru yer değiştirebilir. Bunun sonucunda ağız açma ve kapama esnasında eklemden (klik şeklinde) ses gelir. Bazen bu sese şiddetli ağrı eşlik edebilir. Bu aşamada tedavi edilmediği takdirde diskte deformasyon gelişir ve ses azalmaya başlar ancak ileride ağız açıklığında kısıtlanma ve/veya ağız açamama (çenelerin kilitlenmesi) durumu ortaya çıkabilir. Günümüzde çene eklemi tedavisi için, mevcut rahatsızlığa göre çeneyi farklı şekilde konumlandıran apareyler kullanılır. Aparey tedavisinden sonuç alınamadığı takdirde semptomları hafifletmek adına eklem içi sıvı enjeksiyonu yapılabilir.\r\n\r\nGünümüzde çene eklemi tedavisi için, mevcut rahatsızlığa göre çeneyi farklı şekilde konumlandıran apareyler kullanılır. Aparey tedavisinden sonuç alınamadığı takdirde semptomları hafifletmek adına eklem içi sıvı enjeksiyonu yapılabilir.\r\n\r\nÇiğneme Kasları Rahatsızlıkları:\r\n\r\nAğzın kısıtlı açılması ve/veya açarken ağrı olması gibi durumlar her zaman eklem kaynaklı olmaz. Bu durum bazen çiğneme kaslarından kaynaklanabilir. Önemli olan doğru teşhis ile sıkıntının kaynağının tedavi edilmesidir.\r\nÇiğneme kaslarının tedavisi de yine özel apareyler kullanılarak yapılır. Yapılan apareyin sert (rijit) olması ve maksimum diş teması bulunması tercih edilir.', 'tedaviler_icerik/s4.jpg'),
(6, 'Endodonti (Kanal Tedavisi)', 'Dişlerde oluşan çatlaklar ve kırıklar, dişte meydana gelen çürükler, yanlış tedavi süreçleri, yanlış restorasyonlar sonucu dişte bulunan sinirler ve damarların canlılığını yitirmesi sonucu dişin kanallarında bulunan enfekte sinirlerin temizlenmesi, dezenfekte edilmesi ve kanal dolgu maddeleri ile doldurulmasına kanal tedavisi denir.', 'tedaviler_icerik/s5.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dogumtarih` date NOT NULL,
  `eposta` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=16 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `tc`, `ad`, `soyad`, `tel`, `adres`, `dogumtarih`, `eposta`, `sifre`) VALUES
(9, '15312131313', 'Ahmet', 'Sarı', '05489633214', 'akyar  mah.   korkuteli', '2012-11-14', 'sari@gmail.com', '123'),
(10, '23131313131', 'a', 'b', '11123456780', 'ee', '2014-10-02', 'e@h.com', '123'),
(15, '11111111111', 'Mustafa', 'ZORBAZ', '05412663776', 'Korkuteli', '2015-05-21', 'mustafa.yazilimmuhendisi@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
