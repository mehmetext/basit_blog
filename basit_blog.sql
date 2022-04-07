-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Nis 2022, 15:18:57
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
(1, 'http://localhost/basit_blog', 'Memedim Blog', 'Basit Blog projesidir. Burası da deneme açıklamamızdır. Umarım bu projeyle PHP\'yi daha iyi öğreneceğim :)', 'basit, blog, deneme, keywords, php, proje', '', '', 'https://www.github.com/mehmetext', 5);

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
(8, '/upload/img/icerik_MvBJM0.jpg', 'Yeni içerik', 'yeni-icerik', 'Yeni içerik ekleme denemelerimiz...', '<h2>Deneme</h2>', 'yeni, içerik, ekleme, deneme', 1, 1, '2022-04-03 05:46:54', 1);

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
(2, 'Bilim', 'bilim', '2022-04-01 21:45:42'),
(3, 'Yeni', 'yeni', '2022-04-04 00:22:40'),
(4, 'Deneme ', 'deneme', '2022-04-04 00:22:54');

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
(1, 'mehmet', 'mehmet', '1234', 'mehmet@gmail.com', 'Mehmet Konukçu', 2, '2022-04-01 12:40:24'),
(3, 'deneme', 'deneme', '123', 'deneme@gmail.com', 'Deneme Kullanıcı', 1, '2022-04-07 13:02:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sabit_sayfalar`
--

CREATE TABLE `sabit_sayfalar` (
  `ss_id` int(11) NOT NULL,
  `ss_isim` varchar(50) NOT NULL,
  `ss_link` varchar(50) NOT NULL,
  `ss_altbaslik` varchar(100) NOT NULL,
  `ss_resim` text NOT NULL,
  `ss_icerik` text NOT NULL,
  `ss_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sabit_sayfalar`
--

INSERT INTO `sabit_sayfalar` (`ss_id`, `ss_isim`, `ss_link`, `ss_altbaslik`, `ss_resim`, `ss_icerik`, `ss_tarih`) VALUES
(1, 'Hakkımızda', 'hakkimizda', 'Hakkımızda neler öğrenmek istiyorsan bulabilirsin!', 'http://localhost/basit_blog/inc/assets/img/about-bg.jpg', '<h2>Hakkımızda</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare augue ut tincidunt condimentum. Donec massa diam, imperdiet id orci in, consequat egestas diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum vulputate nulla at laoreet. In feugiat ultrices tortor sit amet vulputate. Nunc laoreet ex et neque pretium bibendum. Quisque scelerisque metus sit amet ullamcorper vehicula. Praesent tellus ante, posuere non dignissim et, dapibus sed arcu.</p><h2>Vizyonumuz</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare augue ut tincidunt condimentum. Donec massa diam, imperdiet id orci in, consequat egestas diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum vulputate nulla at laoreet. In feugiat ultrices tortor sit amet vulputate. Nunc laoreet ex et neque pretium bibendum. Quisque scelerisque metus sit amet ullamcorper vehicula. Praesent tellus ante, posuere non dignissim et, dapibus sed arcu.</p><h2>Misyonumuz</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare augue ut tincidunt condimentum. Donec massa diam, imperdiet id orci in, consequat egestas diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum vulputate nulla at laoreet. In feugiat ultrices tortor sit amet vulputate. Nunc laoreet ex et neque pretium bibendum. Quisque scelerisque metus sit amet ullamcorper vehicula. Praesent tellus ante, posuere non dignissim et, dapibus sed arcu.</p>', '2022-04-04 00:47:07'),
(2, 'Biz Kimiz?', 'biz-kimiz', 'Biz kimiz? Kimlerdeniz? Ne yaparız? Nasıl Yaparız?', '', '<h2>Biz kimiz?</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis turpis magna, vel laoreet est posuere vitae. Praesent volutpat lobortis justo, id vulputate erat scelerisque aliquam. Cras ut turpis justo. Suspendisse tempor sit amet neque vitae pharetra. Nam condimentum orci id rhoncus varius. Vivamus id ex eget massa viverra pretium. Phasellus maximus sagittis lobortis. Donec scelerisque ac odio a ultricies. Integer ex purus, lobortis id nulla sit amet, dictum molestie orci. Praesent ultrices finibus nunc et facilisis. Vestibulum mollis urna lorem, vel aliquam lacus congue sit amet. Integer ultricies mollis metus vel sodales.</p><h2>Kimlerdeniz?</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis turpis magna, vel laoreet est posuere vitae. Praesent volutpat lobortis justo, id vulputate erat scelerisque aliquam. Cras ut turpis justo. Suspendisse tempor sit amet neque vitae pharetra. Nam condimentum orci id rhoncus varius. Vivamus id ex eget massa viverra pretium. Phasellus maximus sagittis lobortis. Donec scelerisque ac odio a ultricies. Integer ex purus, lobortis id nulla sit amet, dictum molestie orci. Praesent ultrices finibus nunc et facilisis. Vestibulum mollis urna lorem, vel aliquam lacus congue sit amet. Integer ultricies mollis metus vel sodales.</p><h2>Ne yaparız?</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis turpis magna, vel laoreet est posuere vitae. Praesent volutpat lobortis justo, id vulputate erat scelerisque aliquam. Cras ut turpis justo. Suspendisse tempor sit amet neque vitae pharetra. Nam condimentum orci id rhoncus varius. Vivamus id ex eget massa viverra pretium. Phasellus maximus sagittis lobortis. Donec scelerisque ac odio a ultricies. Integer ex purus, lobortis id nulla sit amet, dictum molestie orci. Praesent ultrices finibus nunc et facilisis. Vestibulum mollis urna lorem, vel aliquam lacus congue sit amet. Integer ultricies mollis metus vel sodales.</p><h2>Nasıl Yaparız?</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis turpis magna, vel laoreet est posuere vitae. Praesent volutpat lobortis justo, id vulputate erat scelerisque aliquam. Cras ut turpis justo. Suspendisse tempor sit amet neque vitae pharetra. Nam condimentum orci id rhoncus varius. Vivamus id ex eget massa viverra pretium. Phasellus maximus sagittis lobortis. Donec scelerisque ac odio a ultricies. Integer ex purus, lobortis id nulla sit amet, dictum molestie orci. Praesent ultrices finibus nunc et facilisis. Vestibulum mollis urna lorem, vel aliquam lacus congue sit amet. Integer ultricies mollis metus vel sodales.</p>', '2022-04-04 01:16:20');

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
-- Tablo için indeksler `sabit_sayfalar`
--
ALTER TABLE `sabit_sayfalar`
  ADD PRIMARY KEY (`ss_id`);

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
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sabit_sayfalar`
--
ALTER TABLE `sabit_sayfalar`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
