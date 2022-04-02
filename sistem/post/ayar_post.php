<?php

if ($_POST) {
    if (!p("site_url") || !p("site_isim") || !p("site_desc") || !p("site_keyw")) {
        alert("danger", "Gerekli alanları doldurmalısınız.");
    } else {
        $sorgu = $db->prepare(
            "UPDATE ayar SET
            site_url = ?,
            site_isim = ?,
            site_desc = ?,
            site_keyw = ?,
            site_twitter = ?,
            site_facebook = ?,
            site_github = ?
            WHERE id = 1
            "
        );
        $sorgu = $sorgu->execute(array(
            p("site_url"),
            p("site_isim"),
            ss(p("site_desc")),
            p("site_keyw"),
            p("site_twitter"),
            p("site_facebook"),
            p("site_github")
        ));

        if ($sorgu) {
            alert("success", "Ayarlar başarıyla güncellendi, yönlendiriliyorsunuz...");
            go(URL . "/yonetim/ayarlar", 1);
        } else {
            alert("danger", "Ayarlar güncellenirken bir sorun oluştu...");
        }
    }
}
