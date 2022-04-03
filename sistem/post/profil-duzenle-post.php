<?php

if ($_POST) {
    if (p("kullanici_adsoyad")) {
        $sorgu = $db->prepare(
            "UPDATE kullanicilar SET
            kullanici_kad = ?,
            kullanici_link = ?,
            kullanici_adsoyad = ?
            WHERE kullanici_id = ?"
        );
        $sorgu = $sorgu->execute(array(
            ss(trim(p("kullanici_kad", true))),
            sef(ss(trim(p("kullanici_kad", true)))),
            ss(trim(p("kullanici_adsoyad", true))),
            $kullanici["kullanici_id"],
        ));
        if ($sorgu) {
            alert("success", "Bilgileriniz başarıyla güncellendi, yönlendiriliyorsunuz...");
            go(URL, 1);
        } else {
            alert("danger", "Bilgileriniz güncellenirken sorun oluştu!");
        }
    } else {
        alert("warning", "Gerekli alanlar doldurulmalıdır.");
    }
}
