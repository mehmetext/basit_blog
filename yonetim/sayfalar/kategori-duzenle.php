<?php

if (g("id")) {

    $kategori = $db->prepare(
        "SELECT * FROM kategoriler WHERE kategori_id = ?"
    );
    $kategori->execute(array(g("id")));
    $kategori = $kategori->fetch(PDO::FETCH_ASSOC);

    if ($_POST) {
        if (!(!p("kategori_isim"))) {

            $sorgu = $db->prepare(
                "UPDATE kategoriler SET
            kategori_isim = ?,
            kategori_link = ?
            WHERE kategori_id = ?
            "
            );

            $sorgu = $sorgu->execute(array(
                p("kategori_isim", true),
                sef(p("kategori_isim", true)),
                g("id"),
            ));

            if ($sorgu) {
                alert("success", "Kategori başarıyla güncellendi, yönlendiriliyorsunuz...");
                go(URL . "/yonetim/kategoriler", 1);
            } else {
                alert("danger", "Kategori güncellenirken bir sorun oluştu!");
            }
        } else {
            alert("danger", "Gerekli alanları doldurmalısınız!");
        }
    }
} else {
    go(URL . "/yonetim/kategoriler");
}

require "kategori-detay.php";
