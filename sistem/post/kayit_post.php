<?php

if ($_POST) {
    if (!(!p("kullanici_kad") || !p("kullanici_mail") || !p("kullanici_adsoyad") || !p("kullanici_sifre") || !p("kullanici_sifretekrar"))) {

        if (p("kullanici_sifre") == p("kullanici_sifretekrar")) {

            $kullaniciVarMi = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_kad = ? OR kullanici_mail = ?");
            $kullaniciVarMi->execute(array(
                p("kullanici_kad", true),
                p("kullanici_mail", true)
            ));
            $kullaniciVarMi = $kullaniciVarMi->fetch(PDO::FETCH_ASSOC);

            if (!$kullaniciVarMi) {
                $sorgu = $db->prepare(
                    "INSERT INTO kullanicilar SET
                kullanici_kad = ?,
                kullanici_link = ?,
                kullanici_sifre = ?,
                kullanici_mail = ?,
                kullanici_adsoyad = ?,
                kullanici_yetki = 1"
                );

                $sorgu = $sorgu->execute(array(
                    p("kullanici_kad", true),
                    sef(p("kullanici_kad", true)),
                    p("kullanici_sifre", true),
                    p("kullanici_mail", true),
                    p("kullanici_adsoyad", true)
                ));

                if ($sorgu) {
                    setSession("kullanici_id", $db->lastInsertId());
                    alert("success", "Başarıyla giriş yapıldı, yönlendiriliyorsunuz...");
                    go(URL, 1);
                } else {
                    alert("warning", "Kayıt olunurken bir hata oluştu.");
                }
            } else {
                alert("danger", "Bu bilgilere ait bir kullanıcı zaten var.");
            }
        } else {
            alert("danger", "Girilen şifreler eşleşmiyor.");
        }
    } else {
        alert("danger", "Gerekli alanları doldurmalısınız.");
    }
}
