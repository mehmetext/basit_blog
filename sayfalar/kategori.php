<?php


if (!$kategori) {
    alert("warning", "Böyle bir kategori bulunamadı!");
} else {
    if ($kategoriIcerikSayisi) {
        foreach ($icerikler as $icerik) {
            require "components/liste_konu.php";
        }
        sayfalama("kategori");
    } else {
        alert("warning", "Bu kategoride henüz hiçbir içerik yayınlanmamış...");
    }
}
