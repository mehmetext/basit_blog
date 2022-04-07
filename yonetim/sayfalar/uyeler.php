<?php

$kullanicilar = $db->prepare(
    "SELECT * FROM kullanicilar
    ORDER BY kullanici_kad"
);
$kullanicilar->execute();
$kullanicilar = $kullanicilar->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="card">
    <div class="card-title">
        <h4>Üyeler</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kullanıcı Adı</th>
                        <th>E-Posta</th>
                        <th>Ad & Soyad</th>
                        <th>Yetki</th>
                        <th>Kayıt Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($kullanicilar as $kullanici) {
                    ?>
                        <tr>
                            <td><a href="<?= URL . "/profil/" . $kullanici["kullanici_link"] ?>"><?= $kullanici["kullanici_kad"] ?></a></td>
                            <td><?= $kullanici["kullanici_mail"] ?></td>
                            <td><?= $kullanici["kullanici_adsoyad"] ?></td>
                            <td><?= yetkiGetir($kullanici["kullanici_yetki"]) ?></td>
                            <td><?= tarih("j F Y - H:i", $kullanici["kullanici_kayit_tarih"]) ?></td>
                            <td class="h3">
                                <a href="<?= URL . "/yonetim/uye-duzenle/" . $kullanici["kullanici_link"] ?>">
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