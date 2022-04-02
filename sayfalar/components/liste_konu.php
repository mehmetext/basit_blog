<!-- Post preview-->
<div class="post-preview">
    <a href="<?= URL . "/" . $icerik["icerik_link"] ?>.html">
        <h2 class="post-title"><?= $icerik["icerik_baslik"] ?></h2>
        <h3 class="post-subtitle"><?= $icerik["icerik_altbaslik"] ?></h3>
    </a>
    <p class="post-meta">
        <?= tarih("j F Y - H:i", $icerik["icerik_tarih"]) ?> tarihinde <a href="profil/<?= $icerik["kullanici_link"] ?>"><?= $icerik["kullanici_kad"] ?></a> tarafından paylaşıldı.
    </p>
    <a href="kategori/<?= $icerik["kategori_link"] ?>">
        <span class="badge rounded-pill bg-primary"><?= $icerik["kategori_isim"] ?></span>
    </a>
</div>
<!-- Divider-->
<hr class="my-4" />

<!-- date_format(date_create($icerik["icerik_tarih"]), "d/m/Y - H:i") -->