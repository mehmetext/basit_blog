<?php

$kws = $ayar["site_keyw"];

switch (g("do")) {
    case "profil-duzenle":
        $siteHeading = "Profil Düzenle";
        $siteSubheading = "Profilinizi düzenleyebileceğiniz sayfa.";
        $tdk = '<title>Profil Düzenle - ' . $ayar["site_isim"] . '</title>';

        break;

    case "etiket":
        if (g("etiket")) {
            $siteHeading = g("etiket");
            $siteSubheading = g("etiket") . " ile ilgili içerikler.";
            $tdk = '<title>' . g("etiket") . ' - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="' . g("etiket") . ' ile ilgili içerikler." />
                <meta name="keywords" content="' . $kws . ',' . g("etiket") . '">';

            $icerikler = $db->prepare(
                "SELECT * FROM icerikler
                    JOIN kullanicilar ON icerikler.icerik_paylasan = kullanicilar.kullanici_id
                    JOIN kategoriler ON kategoriler.kategori_id = icerikler.icerik_kategori
                    WHERE icerik_etiket like CONCAT('%',?,'%') AND icerik_liste = 1
                    ORDER BY icerik_tarih DESC"
            );
            $icerikler->execute(array(g("etiket")));
            $icerikler = $icerikler->fetchAll(PDO::FETCH_ASSOC);
        } else {
            go(URL);
        }

        break;
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
                <meta name="keywords" content="' . $kws . ',' . $kategori["kategori_isim"] . '">';

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
                <meta name="keywords" content="' . $kws . ',hakkında">';
        break;

    case "iletisim":
        $siteHeading = 'İletişim';
        $siteSubheading = "Bize her yerden kolayca ulaşabilirsiniz!";
        $mastheadBg = INC . "/assets/img/contact-bg.jpg";
        $tdk = '<title>İletişim - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="' . $ayar["site_isim"] . ' ile iletişime geç." />
                <meta name="keywords" content="' . $kws . ',iletişim">';
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

        if ($icerik) {
            $etiketler = explode(",", $icerik["icerik_etiket"]);
            for ($i = 0; $i < count($etiketler); $i++) {
                $etiketler[$i] = ss(trim($etiketler[$i]));
            }

            $siteHeading = $icerik["icerik_baslik"];
            $siteSubheading = $icerik["icerik_altbaslik"];
            $tdk = '<title>' . $icerik["icerik_baslik"] . ' - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="' . $icerik["icerik_altbaslik"] . ' ile iletişime geç." />
                <meta name="keywords" content="' . $kws . ',' . $icerik["icerik_etiket"] . '">';
            $mastheadBg = URL . $icerik["icerik_resim"];
        } else {
            go(URL);
        }


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
                <meta name="description" content="' . $ayar["site_isim"] . ' sitesine giriş yap." />';
        break;

    default:
        if (g("do")) {
            $siteHeading = 'Sayfa Bulunamadı';
            $siteSubheading = "Böyle bir sayfa sitemizde bulunamadı!";
            $tdk = '<title>Sayfa Bulunamadı - ' . $ayar["site_isim"] . '</title>';
        } else {
            $sayfa = g("s") ? g("s") : 1;

            $anaSayfaIcerikKayitSayisi = $db->prepare("SELECT COUNT(*) sayi FROM icerikler WHERE icerik_liste = 1");
            $anaSayfaIcerikKayitSayisi->execute();
            $anaSayfaIcerikKayitSayisi = $anaSayfaIcerikKayitSayisi->fetch();

            if ($anaSayfaIcerikKayitSayisi["sayi"] != 0) {

                $limit = 3;
                $sSayisi = ceil($anaSayfaIcerikKayitSayisi["sayi"] / $limit);
                $baslangic = $sayfa * $limit - $limit;

                $icerikler = $db->prepare(
                    "SELECT * FROM icerikler
                    JOIN kullanicilar ON icerikler.icerik_paylasan = kullanicilar.kullanici_id
                    JOIN kategoriler ON kategoriler.kategori_id = icerikler.icerik_kategori
                    WHERE icerik_liste = 1
                    ORDER BY icerik_tarih DESC
                    LIMIT $baslangic, $limit"
                );

                $icerikler->execute();
                $icerikler = $icerikler->fetchAll(PDO::FETCH_ASSOC);
            }

            $siteHeading = "Ana Sayfa";
            $siteSubheading = "{$ayar["site_isim"]} sitesine hoş geldin!";
            $tdk = '<title>Ana Sayfa - ' . $ayar["site_isim"] . '</title>
                <meta name="description" content="' . $ayar["site_desc"] . '" />
                <meta name="keywords" content="' . $kws . '">';
        }
        break;
}


function alert($class, $icerik)
{
    require SAYFA_PATH . "/components/alert.php";
}

function kategoriler()
{
    global $db;
    $kategoriler = $db->prepare("SELECT * FROM kategoriler");
    $kategoriler->execute();
    $kategoriler = $kategoriler->fetchAll(PDO::FETCH_ASSOC);
    return $kategoriler;
}

function sayfalama()
{
    global $anaSayfaIcerikKayitSayisi;

    $sayfa = g("s") ? g("s") : 1;

    $limit = 3;
    $sSayisi = ceil($anaSayfaIcerikKayitSayisi["sayi"] / $limit);

    if ($anaSayfaIcerikKayitSayisi > $limit) {
        $oncekiSayfa = $sayfa > 1 ? $sayfa - 1 : 1;
        $oncekiLink = URL . "/s/" . $oncekiSayfa;
        $sonrakiSayfa = $sayfa < $sSayisi ? $sayfa + 1 : $sayfa;
        $sonrakiLink =  URL . "/s/" . $sonrakiSayfa;

        echo '
        <!-- Pager-->
        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-primary text-uppercase" href="' . $oncekiLink . '">← Yeni Konular</a>
            <a class="btn btn-primary text-uppercase" href="' . $sonrakiLink . '">Eski Konular →</a>
        </div>';
    }
}
