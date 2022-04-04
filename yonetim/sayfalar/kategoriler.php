<?php

$kategoriler = $db->prepare(
    "SELECT * FROM kategoriler
    ORDER BY kategori_isim"
);
$kategoriler->execute();
$kategoriler = $kategoriler->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="card">
    <div class="card-title">
        <h4>Kategoriler</h4>
        <a href="<?= URL ?>/yonetim/kategori-ekle" class="float-right">Yeni Kategori Ekle</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kategori İsmi</th>
                        <th>Eklenme Tarihi</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($kategoriler as $kategori) {
                    ?>
                        <tr>
                            <td><a href="<?= URL . "/kategori/" . $kategori["kategori_link"] ?>"><?= $kategori["kategori_isim"] ?></a></td>
                            <td><?= tarih("j F Y - H:i", $kategori["kategori_tarih"]) ?></td>
                            <td class="h3">
                                <a href="<?= URL . "/yonetim/kategori-duzenle?id=" . $kategori["kategori_id"] ?>">
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