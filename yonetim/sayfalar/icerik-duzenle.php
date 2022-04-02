<?php

if (g("id")) {

    $icerik = $db->prepare(
        "SELECT * FROM icerikler WHERE icerik_id = ?"
    );
    $icerik->execute(array(g("id")));
    $icerik = $icerik->fetch(PDO::FETCH_ASSOC);

    if ($_POST) {
        if (!p("icerik_resim") || !p("icerik_baslik") || !p("icerik_yazi") || !p("icerik_kategori")) {
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
                $icerik["icerik_resim"],
                p("icerik_baslik"),
                sef(p("icerik_baslik")),
                p("icerik_altbaslik"),
                p("icerik_yazi"),
                p("icerik_etiket"),
                p("icerik_kategori"),
                g("id"),
            ));
            if ($sorgu) {
                alert("success", "İçerik başarıyla güncellendi, yönlendiriliyorsunuz...");
                go(URL . "/yonetim/icerikler", 1);
            }
        }
    }



    if (!$icerik) {
        go(URL . "/yonetim/icerikler");
    }

    require "icerik-detay.php";
} else {
    go(URL . "/yonetim/icerikler");
}
