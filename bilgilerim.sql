-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ağu 2022, 20:51:42
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgilerim`
--

CREATE TABLE `bilgilerim` (
  `bilgilerim_id` int(11) NOT NULL,
  `bilgilerim_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bilgilerim_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bilgilerim_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bilgilerim_yas` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bilgilerim_zaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bilgilerim`
--

INSERT INTO `bilgilerim` (`bilgilerim_id`, `bilgilerim_ad`, `bilgilerim_soyad`, `bilgilerim_mail`, `bilgilerim_yas`, `bilgilerim_zaman`) VALUES
(21, 'ismail baran ', 'karasu', 'ismailbaran04@gmail.com', '25', '2022-08-24 18:35:32'),
(22, 'Murat', 'Dogusoylu', 'ismailbaran04@gmail.com', '25', '2022-08-24 18:46:23');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilgilerim`
--
ALTER TABLE `bilgilerim`
  ADD PRIMARY KEY (`bilgilerim_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilgilerim`
--
ALTER TABLE `bilgilerim`
  MODIFY `bilgilerim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
