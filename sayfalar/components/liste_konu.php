<?php

$etiketler = explode(",", $icerik["icerik_etiket"]);
for ($i = 0; $i < count($etiketler); $i++) {
    $etiketler[$i] = ss(trim($etiketler[$i]));
}

?>


<!-- Post preview-->
<div class="post-preview">
    <a href="<?= URL . "/" . $icerik["icerik_link"] ?>.html">
        <h2 class="post-title"><?= $icerik["icerik_baslik"] ?></h2>
        <h3 class="post-subtitle"><?= $icerik["icerik_altbaslik"] ?></h3>
    </a>
    <p class="post-meta">
        <?= tarih("j F Y - H:i", $icerik["icerik_tarih"]) ?> tarihinde <a href="profil/<?= $icerik["kullanici_link"] ?>"><?= $icerik["kullanici_kad"] ?></a> tarafından paylaşıldı.
    </p>
    <a href="<?= URL ?>/kategori/<?= $icerik["kategori_link"] ?>">
        <span class="badge rounded-pill bg-primary"><?= $icerik["kategori_isim"] ?></span>
    </a>
    <?php
    foreach ($etiketler as $etiket) {
    ?>
        <a href="<?= URL ?>/etiket/<?= $etiket ?>">
            <span class="badge rounded-pill bg-dark"><?= $etiket ?></span>
        </a>
    <?php } ?>

</div>
<!-- Divider-->
<hr class="my-4" />