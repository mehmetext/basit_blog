<?php

$sayfalar = $db->prepare(
    "SELECT * FROM sabit_sayfalar
    ORDER BY ss_isim"
);
$sayfalar->execute();
$sayfalar = $sayfalar->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="card">
    <div class="card-title">
        <h4>Sayfalar</h4>
        <a href="<?= URL ?>/yonetim/sabit-sayfa-ekle" class="float-right">Yeni Sabit Sayfa Ekle</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sayfa İsmi</th>
                        <th>Eklenme Tarihi</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($sayfalar as $sayfa) {
                    ?>
                        <tr>
                            <td><a href="<?= URL . "/" . $sayfa["ss_link"] ?>" target="_blank"><?= $sayfa["ss_isim"] ?></a></td>
                            <td><?= tarih("j F Y - H:i", $sayfa["ss_tarih"]) ?></td>
                            <td class="h3">
                                <a href="<?= URL . "/yonetim/sabit-sayfa-duzenle?id=" . $sayfa["ss_id"] ?>">
                                    <i class="ti-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>