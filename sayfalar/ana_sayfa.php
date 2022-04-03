<?php

if ($anaSayfaIcerikKayitSayisi > 0) {
    foreach ($icerikler as $icerik) {
        require "components/liste_konu.php";
    }

    sayfalama();
?>

    <h2>Etiketler</h2>
    <div class="mb-4">
        <a href="#!">
            <span class="badge rounded-pill bg-dark">Etiket...</span>
        </a>
    </div>

<?php
} else {
    alert("warning", "Sitemizde henüz hiçbir içerik yayınlanmamış...");
}

?>