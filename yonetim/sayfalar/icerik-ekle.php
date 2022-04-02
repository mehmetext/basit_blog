<?php

if ($_POST) {

    if (!(!p("icerik_baslik") || !p("icerik_yazi") || !p("icerik_kategori"))) {

        $dosyaArray = dosyaYukle("icerik_resim", array("image/gif", "image/png", "image/jpeg"), "/upload/img", "icerik");

        if ($dosyaArray[0]) {
            $sorgu = $db->prepare(
                "INSERT INTO icerikler SET
            icerik_resim = ?,
            icerik_baslik = ?,
            icerik_link = ?,
            icerik_altbaslik = ?,
            icerik_yazi = ?,
            icerik_etiket = ?,
            icerik_paylasan = ?,
            icerik_kategori = ?,
            icerik_liste = 1"
            );
            $sorgu = $sorgu->execute(array(
                $dosyaArray[1],
                p("icerik_baslik"),
                sef(p("icerik_baslik")),
                p("icerik_altbaslik"),
                p("icerik_yazi"),
                p("icerik_etiket"),
                $kullanici["kullanici_id"],
                p("icerik_kategori")
            ));
            if ($sorgu) {
                alert("success", "İçerik başarıyla eklendi, yönlendiriliyorsunuz...");
                go(URL . "/yonetim/icerikler", 1);
            } else {
                alert("danger", "İçerik eklenirken bir sorun oluştu!");
            }
        } else {
            alert("danger", $dosyaArray[1]);
        }
    } else {
        alert("danger", "Gerekli alanları doldurmalısınız!");
    }
}

require "icerik-detay.php";
