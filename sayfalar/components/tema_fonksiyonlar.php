<?php

switch (g("do")) {
    case "kategori":

        if (g("link")) {
            $kategori = $db->prepare("SELECT * FROM kategoriler WHERE kategori_link = ?");
            $kategori->execute(array(g("link")));
            $kategori = $kategori->fetch(PDO::FETCH_ASSOC);

            if ($kategori) {
                $siteHeading = "{$kategori["kategori_isim"]}";
                $siteSubheading = "{$kategori["kategori_isim"]} kategorisine ait içerikler.";
                $tdk = '<title>' . $kategori["kategori_isim"] . ' - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="' . $kategori["kategori_isim"] . ' kategorisine ait içerikler." />
                <meta name="keywords" content="' . $kategori["kategori_isim"] . '">';

                $icerikler = $db->prepare(
                    "SELECT * FROM icerikler
                    JOIN kullanicilar ON icerikler.icerik_paylasan = kullanicilar.kullanici_id
                    JOIN kategoriler ON kategoriler.kategori_id = icerikler.icerik_kategori
                    WHERE icerik_kategori = ? AND icerik_liste = 1
                    ORDER BY icerik_tarih DESC"
                );
                $icerikler->execute(array($kategori["kategori_id"]));
                $icerikler = $icerikler->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $siteHeading = "Kategori Yok";
                $tdk = '<title>Kategori Yok - ' . $ayar["site_isim"] . '</title>';
            }
        } else {
            go(URL);
        }

        break;

    case "hakkimizda":
        $siteHeading = "Hakkımızda";
        $siteSubheading = "Hakkımızda neler öğrenmek istiyorsan bulabilirsin!";
        $mastheadBg = INC . "/assets/img/about-bg.jpg";
        $tdk = '<title>Hakkımızda - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="' . $ayar["site_isim"] . ' hakkında sayfası." />
                <meta name="keywords" content="hakkında">';
        break;

    case "iletisim":
        $siteHeading = 'İletişim';
        $siteSubheading = "Bize her yerden kolayca ulaşabilirsiniz!";
        $mastheadBg = INC . "/assets/img/contact-bg.jpg";
        $tdk = '<title>İletişim - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="' . $ayar["site_isim"] . ' ile iletişime geç." />
                <meta name="keywords" content="iletişim">';
        break;

    case "icerik":
        $icerik = $db->prepare(
            "SELECT * FROM icerikler
            JOIN kullanicilar ON icerikler.icerik_paylasan = kullanicilar.kullanici_id
            JOIN kategoriler ON kategoriler.kategori_id = icerikler.icerik_kategori
            WHERE icerik_link = ? AND icerik_liste = 1"
        );
        $icerik->execute(array(g("link")));
        $icerik = $icerik->fetch();

        $siteHeading = $icerik["icerik_baslik"];
        $siteSubheading = $icerik["icerik_altbaslik"];
        $tdk = '<title>' . $icerik["icerik_baslik"] . ' - ' . $ayar["site_isim"] . '</title>';
        $mastheadBg = $icerik["icerik_resim"];
        break;

    case "cikis":
        $siteHeading = 'Çıkış';
        $siteSubheading = "Çıkış yapmamalıydın...";
        $tdk = '<title>Çıkış - ' . $ayar["site_isim"] . '</title>';
        break;

    case "giris":
        $siteHeading = 'Giriş Yap';
        $siteSubheading = $ayar["site_isim"] . ' sitemize hemen giriş yap!';
        $tdk = '<title>Giriş Yap - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="' . $ayar["site_isim"] . ' sitesine giriş yap." />
                <meta name="keywords" content="giris">';
        break;

    default:
        if (g("do")) {
            $siteHeading = 'Sayfa Bulunamadı';
            $siteSubheading = "Böyle bir sayfa sitemizde bulunamadı!";
            $tdk = '<title>Sayfa Bulunamadı - ' . $ayar["site_isim"] . '</title>';
        } else {
            $icerikler = $db->prepare(
                "SELECT * FROM icerikler
                JOIN kullanicilar ON icerikler.icerik_paylasan = kullanicilar.kullanici_id
                JOIN kategoriler ON kategoriler.kategori_id = icerikler.icerik_kategori
                WHERE icerik_liste = 1
                ORDER BY icerik_tarih DESC"
            );
            $icerikler->execute();
            $icerikler = $icerikler->fetchAll(PDO::FETCH_ASSOC);

            $siteHeading = "Ana Sayfa";
            $siteSubheading = "{$ayar["site_isim"]} sitesine hoş geldin!";
            $tdk = '<title>Ana Sayfa - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="{BLOG_ACIKLAMA}" />
                <meta name="keywords" content="{BLOG_KEYW}">';
        }
        break;
}


function alert($class, $icerik)
{
    require SAYFA_PATH . "/components/alert.php";
}
