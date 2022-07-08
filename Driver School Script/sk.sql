-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2021, 15:27:14
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `kullaniciad` varchar(20) NOT NULL,
  `sifre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`kullaniciad`, `sifre`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ehliyet`
--

CREATE TABLE `ehliyet` (
  `ehliyet_id` int(11) NOT NULL,
  `ehliyet_tip` varchar(10) NOT NULL,
  `kurs_ücret` decimal(10,0) NOT NULL,
  `sinav_harci` decimal(10,0) NOT NULL,
  `diger_harc` decimal(10,0) NOT NULL,
  `toplam` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ehliyet`
--

INSERT INTO `ehliyet` (`ehliyet_id`, `ehliyet_tip`, `kurs_ücret`, `sinav_harci`, `diger_harc`, `toplam`) VALUES
(1, 'A Sınıfı', '2910', '290', '740', '3940'),
(2, 'B Sınıfı', '2908', '280', '1484', '4672'),
(3, 'A1 Sınıfı', '2009', '280', '739', '3028'),
(4, 'A2 Sınıfı', '2380', '280', '739', '3399'),
(5, 'B Otomatik', '1432', '160', '1484', '3076');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adres_no` varchar(50) NOT NULL,
  `tel_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adres_no`, `tel_no`, `email`) VALUES
(1, '295/24 Sokak No:12 Turgutlu/Manisa', '232 457 54 32', 'sürücükursum@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `personel_id` int(11) NOT NULL,
  `personel_tc` varchar(20) NOT NULL,
  `personel_ad` varchar(20) NOT NULL,
  `personel_soyad` varchar(20) NOT NULL,
  `personel_telefon` varchar(20) NOT NULL,
  `personel_is` varchar(20) NOT NULL,
  `personel_ücret` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`personel_id`, `personel_tc`, `personel_ad`, `personel_soyad`, `personel_telefon`, `personel_is`, `personel_ücret`) VALUES
(1, '58384014358', 'Berkay', 'Kutlu', '05964214571', 'Temizlik Elemanı', '4400'),
(2, '49217015961', 'Simay', 'Al', '05324941424', 'Eğitmen', '5000'),
(3, '58974514232', 'Furkan', 'Sağlam', '05324764913', 'Eğitmen', '5000'),
(4, '52943410496', 'Gülçin', 'Ay', '05394261494', 'Online Destek', '4400');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `tc_kimlik` varchar(20) NOT NULL,
  `ad` varchar(25) DEFAULT NULL,
  `soyad` varchar(50) DEFAULT NULL,
  `telefon` varchar(20) NOT NULL,
  `ehliyet_tipi` varchar(20) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `tc_kimlik`, `ad`, `soyad`, `telefon`, `ehliyet_tipi`, `email`) VALUES
(2, '58974514232', 'Sinem', 'Demir', '05384491836', 'B Sınıfı', 'sinemdemir35@gmail.com'),
(3, '55936527881', 'Buse', 'Karaman', '05554966218', 'B Otomatik', 'busekaraman@hotmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ehliyet`
--
ALTER TABLE `ehliyet`
  ADD PRIMARY KEY (`ehliyet_id`),
  ADD UNIQUE KEY `ehliyet_id` (`ehliyet_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`personel_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ehliyet`
--
ALTER TABLE `ehliyet`
  MODIFY `ehliyet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `personel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
