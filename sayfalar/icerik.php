<?= $icerik["icerik_yazi"] ?>
<?php if ($sonrakiIcerik) { ?>
    <div class="d-flex justify-content-start my-4">
        <a class="btn btn-primary text-uppercase" href="<?= URL . "/" . $sonrakiIcerik["icerik_link"] . ".html" ?>">← <?= $sonrakiIcerik["icerik_baslik"] ?></a>
    </div>
<?php }
if ($oncekiIcerik) { ?>
    <div class="d-flex justify-content-end my-4">
        <a class="btn btn-primary text-uppercase" href="<?= URL . "/" . $oncekiIcerik["icerik_link"] . ".html" ?>"><?= $oncekiIcerik["icerik_baslik"] ?> →</a>
    </div>
<?php } ?>