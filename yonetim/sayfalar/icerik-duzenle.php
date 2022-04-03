<?php

if (g("id")) {

    $icerik = $db->prepare(
        "SELECT * FROM icerikler WHERE icerik_id = ?"
    );
    $icerik->execute(array(g("id")));
    $icerik = $icerik->fetch(PDO::FETCH_ASSOC);

    if ($_POST) {

        if (!(!p("icerik_baslik") || !p("icerik_yazi") || !p("icerik_kategori"))) {

            $dosyaArray = dosyaYukle("icerik_resim", array("image/gif", "image/png", "image/jpeg"), "/upload/img", "icerik", false);

            if ($dosyaArray[0]) {
                $sorgu = $db->prepare(
                    "UPDATE icerikler SET
                    icerik_resim = ?,
                    icerik_baslik = ?,
                    icerik_link = ?,
                    icerik_altbaslik = ?,
                    icerik_yazi = ?,
                    icerik_etiket = ?,
                    icerik_kategori = ?
                    WHERE icerik_id = ?"
                );

                $sorgu = $sorgu->execute(array(
                    $dosyaArray[1] != "" ? $dosyaArray[1] : $icerik["icerik_resim"],
                    p("icerik_baslik", true),
                    sef(p("icerik_baslik", true)),
                    p("icerik_altbaslik", true),
                    p("icerik_yazi", true),
                    p("icerik_etiket", true),
                    p("icerik_kategori", true),
                    g("id"),
                ));

                if ($sorgu) {
                    alert("success", "İçerik başarıyla güncellendi, yönlendiriliyorsunuz...");
                    go(URL . "/yonetim/icerikler", 1);
                }
            } else {
                alert("danger", $dosyaArray[1]);
            }
        } else {
            alert("danger", "Gerekli alanları doldurmalısınız!");
        }
    }
    if (!$icerik) {
        go(URL . "/yonetim/icerikler");
    }

    require "icerik-detay.php";
} else {
    go(URL . "/yonetim/icerikler");
}
