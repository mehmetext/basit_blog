<?php

if ($_POST) {
    if (!(!p("kullanici_kad") || !p("kullanici_sifre"))) {
        $kullaniciSorgu = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_kad = ? AND kullanici_sifre = ?");
        $kullaniciSorgu->execute(array(
            p("kullanici_kad"),
            p("kullanici_sifre")
        ));
        $kullaniciSorgu = $kullaniciSorgu->fetch(PDO::FETCH_ASSOC);
        if ($kullaniciSorgu) {
            setSession("kullanici_id", $kullaniciSorgu["kullanici_id"]);
            alert("success", "Başarıyla giriş yapıldı, yönlendiriliyorsunuz...");
            go(URL, 1);
        } else {
            alert("warning", "Bu bilgilere ait kullanıcı bulunamadı.");
        }
    } else {
        alert("danger", "Gerekli alanları doldurmalısınız.");
    }
}
