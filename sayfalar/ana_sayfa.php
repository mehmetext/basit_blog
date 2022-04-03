<?php

if ($anaSayfaIcerikKayitSayisi > 0) {
    foreach ($icerikler as $icerik) {
        require "components/liste_konu.php";
    }

    sayfalama();
?>
    
<?php
} else {
    alert("warning", "Sitemizde henüz hiçbir içerik yayınlanmamış...");
}

?>