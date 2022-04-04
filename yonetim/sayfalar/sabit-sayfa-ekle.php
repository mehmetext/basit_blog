<?php

if ($_POST) {

    if (!(!p("ss_isim"))) {

        $sorgu = $db->prepare(
            "INSERT INTO sabit_sayfalar SET
            ss_isim = ?,
            ss_link = ?,
            ss_altbaslik = ?,
            ss_icerik = ?
            "
        );

        $sorgu = $sorgu->execute(array(
            p("ss_isim", true),
            sef(p("ss_isim", true)),
            p("ss_altbaslik", true),
            p("ss_icerik")
        ));

        if ($sorgu) {
            alert("success", "Sabit sayfa başarıyla eklendi, yönlendiriliyorsunuz...");
            go(URL . "/yonetim/sabit-sayfalar", 1);
        } else {
            alert("danger", "Sabit sayfa eklenirken bir sorun oluştu!");
        }
    } else {
        alert("danger", "Gerekli alanları doldurmalısınız!");
    }
}

require "sabit-sayfa-detay.php";
