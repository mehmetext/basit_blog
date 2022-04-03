-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Nis 2022, 10:33:12
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `basit_blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `id` int(11) NOT NULL,
  `site_url` varchar(50) NOT NULL,
  `site_isim` varchar(50) NOT NULL,
  `site_desc` varchar(150) NOT NULL,
  `site_keyw` text NOT NULL,
  `site_twitter` text NOT NULL,
  `site_facebook` text NOT NULL,
  `site_github` text NOT NULL,
  `sayfalama_limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`id`, `site_url`, `site_isim`, `site_desc`, `site_keyw`, `site_twitter`, `site_facebook`, `site_github`, `sayfalama_limit`) VALUES
(1, 'http://localhost/basit_blog', 'Memedim Blog', 'Basit Blog projesidir. Burası da deneme açıklamamızdır. Umarım bu projeyle PHP\'yi daha iyi öğreneceğim :)', 'basit, blog, deneme, keywords, php, proje', '', '', 'https://www.github.com/mehmetext', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikler`
--

CREATE TABLE `icerikler` (
  `icerik_id` int(11) NOT NULL,
  `icerik_resim` text NOT NULL,
  `icerik_baslik` varchar(100) NOT NULL,
  `icerik_link` varchar(100) NOT NULL,
  `icerik_altbaslik` varchar(100) NOT NULL,
  `icerik_yazi` text NOT NULL,
  `icerik_etiket` text NOT NULL,
  `icerik_paylasan` int(11) NOT NULL,
  `icerik_kategori` int(11) NOT NULL,
  `icerik_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `icerik_liste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `icerikler`
--

INSERT INTO `icerikler` (`icerik_id`, `icerik_resim`, `icerik_baslik`, `icerik_link`, `icerik_altbaslik`, `icerik_yazi`, `icerik_etiket`, `icerik_paylasan`, `icerik_kategori`, `icerik_tarih`, `icerik_liste`) VALUES
(2, '/upload/img/icerik_ffKZBL.jpg', 'Memedim Blog açıldı maan :D', 'memedim-blog-acildi-maan-d', 'Memedim Blog açıldı, hadi gel!', '<p>Memedim Blog açıldı, bu da blog hayatının <strong>ilk yazısıdır</strong>...</p>', 'memedim, blog, hayat, ilk, deneme', 1, 1, '2022-04-01 20:27:31', 1),
(4, '/upload/img/icerik_hrfdlf.png', 'Karekod Nedir?', 'karekod-nedir', 'Karekod hakkında açıklama hebele hübele', 'Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele Karekod hakkında açıklama hebele hübele ', 'Karekod, hakkında, açıklama, deneme', 1, 1, '2022-04-02 12:18:10', 1),
(7, '/upload/img/icerik_qQTGQ1.png', 'qweqe', 'qweqe', 'qweqwe', '<ul><li>deneme</li><li>bu da deneme</li></ul><ol><li>bu bir</li><li>bu da iki olsun</li></ol><p>denemeasd</p><p><i><strong>asdfasdf</strong></i></p><h2>sdafsad</h2><blockquote><p>fasdas</p></blockquote><p><strong>sadf</strong></p><h2>sadfqwe</h2><h3>saqwew</h3>', 'memedim, deneme', 1, 1, '2022-04-02 13:34:10', 1),
(8, '/upload/img/icerik_Vub471.jpg', 'Yeni içerik', 'yeni-icerik', 'Yeni içerik ekleme denemelerimiz...', '<h2>Deneme</h2>', 'yeni, içerik, ekleme, deneme', 1, 1, '2022-04-03 05:46:54', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_isim` varchar(50) NOT NULL,
  `kategori_link` varchar(50) NOT NULL,
  `kategori_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_isim`, `kategori_link`, `kategori_tarih`) VALUES
(1, 'Genel', 'genel', '2022-04-01 21:23:02'),
(2, 'Bilim', 'bilim', '2022-04-01 21:45:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_kad` varchar(50) NOT NULL,
  `kullanici_link` varchar(50) NOT NULL,
  `kullanici_sifre` varchar(50) NOT NULL,
  `kullanici_mail` varchar(50) NOT NULL,
  `kullanici_adsoyad` varchar(100) NOT NULL,
  `kullanici_yetki` int(11) NOT NULL,
  `kullanici_kayit_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_kad`, `kullanici_link`, `kullanici_sifre`, `kullanici_mail`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_kayit_tarih`) VALUES
(1, 'mehmet', 'mehmet', '1234', 'mehmet@gmail.com', 'Mehmet Konukçu', 2, '2022-04-01 12:40:24');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `icerikler`
--
ALTER TABLE `icerikler`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `icerikler`
--
ALTER TABLE `icerikler`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
