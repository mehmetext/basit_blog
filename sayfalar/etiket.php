<?php

if ($icerikler) {
    foreach ($icerikler as $icerik) {
        require "components/liste_konu.php";
    }
} else {
    alert("warning", g("etiket") . " ile ilgili içerik bulunamadı.");
}
