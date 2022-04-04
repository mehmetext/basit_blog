<?php

if ($_POST) {

    if (!(!p("kategori_isim"))) {

        $sorgu = $db->prepare(
            "INSERT INTO kategoriler SET
            kategori_isim = ?,
            kategori_link = ?
            "
        );

        $sorgu = $sorgu->execute(array(
            p("kategori_isim", true),
            sef(p("kategori_isim", true)),
        ));

        if ($sorgu) {
            alert("success", "Kategori başarıyla eklendi, yönlendiriliyorsunuz...");
            go(URL . "/yonetim/kategoriler", 1);
        } else {
            alert("danger", "Kategori eklenirken bir sorun oluştu!");
        }
    } else {
        alert("danger", "Gerekli alanları doldurmalısınız!");
    }
}

require "kategori-detay.php";
