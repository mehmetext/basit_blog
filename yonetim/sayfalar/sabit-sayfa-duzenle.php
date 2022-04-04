<?php

if (g("id")) {

    $sayfa = $db->prepare(
        "SELECT * FROM sabit_sayfalar WHERE ss_id = ?"
    );
    $sayfa->execute(array(g("id")));
    $sayfa = $sayfa->fetch(PDO::FETCH_ASSOC);

    if ($_POST) {
        if (!(!p("ss_isim"))) {

            $sorgu = $db->prepare(
                "UPDATE sabit_sayfalar SET
            ss_isim = ?,
            ss_link = ?,
            ss_altbaslik = ?,
            ss_icerik = ?
            WHERE ss_id = ?
            "
            );

            $sorgu = $sorgu->execute(array(
                p("ss_isim", true),
                sef(p("ss_isim", true)),
                p("ss_altbaslik", true),
                p("ss_icerik"),
                g("id"),
            ));

            if ($sorgu) {
                alert("success", "Sabit sayfa başarıyla güncellendi, yönlendiriliyorsunuz...");
                go(URL . "/yonetim/sabit-sayfalar", 1);
            } else {
                alert("danger", "Sabit sayfa güncellenirken bir sorun oluştu!");
            }
        } else {
            alert("danger", "Gerekli alanları doldurmalısınız!");
        }
    }
} else {
    go(URL . "/yonetim/sabit-sayfalar");
}

require "sabit-sayfa-detay.php";
