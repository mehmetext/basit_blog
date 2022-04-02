<?php


if (!$kategori) {
    alert("warning", "Böyle bir kategori bulunamadı!");
} else {
    if ($icerikler) {
        foreach ($icerikler as $icerik) {
            require "components/liste_konu.php";
        }
    }
}
