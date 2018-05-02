-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- �retim Zaman�: 02 May 2016, 19:42:56
-- Sunucu s�r�m�: 5.7.11-log
-- PHP S�r�m�: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritaban�: `webtek`
--

-- --------------------------------------------------------

--
-- Tablo i�in tablo yap�s� `etkinlikler`
--

CREATE TABLE IF NOT EXISTS `etkinlikler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` date NOT NULL,
  `baslik` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo d�k�m verisi `etkinlikler`
--

INSERT INTO `etkinlikler` (`id`, `tarih`, `baslik`, `icerik`) VALUES
(1, '2016-05-03', '�lk Etkinlik', '�lk i�eri�imize ho�geldiniz. D�zenleyece�imiz b�t�n etkinlikleri buradan g�rebileceksiniz. Sitemizi takip etmeye devam edin. \r\n');

-- --------------------------------------------------------

--
-- Tablo i�in tablo yap�s� `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `parola` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo d�k�m verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `mail`, `parola`) VALUES
(1, 'heski@sakarya.edu.tr', 'eski'),
(2, 'ntasnasi@sakarya.edu.tr', 'tasbasi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
