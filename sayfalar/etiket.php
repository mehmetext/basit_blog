<?php

if ($etiketIcerikSayisi) {
    foreach ($icerikler as $icerik) {
        require "components/liste_konu.php";
    }
    sayfalama("etiket");
} else {
    alert("warning", g("etiket") . " ile ilgili içerik bulunamadı.");
}
