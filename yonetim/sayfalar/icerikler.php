<?php
if (g("islem") == "durum"  && is_numeric(g("id"))) {
    $sorgu = $db->prepare(
        "UPDATE icerikler SET icerik_liste = !icerik_liste WHERE icerik_id = ?"
    );
    $sorgu = $sorgu->execute(array(g("id")));
    if ($sorgu) {
        alert("success", "İçerik durumu başarıyla değiştirildi, yönlendiriliyorsunuz...");
        go(URL . "/yonetim/icerikler", 1);
    } else {
        alert("danger", "İçerik durumu değiştirilirken bir sorun oluştu...");
    }
}

$icerikler = $db->prepare(
    "SELECT * FROM icerikler
    JOIN kullanicilar ON icerikler.icerik_paylasan = kullanicilar.kullanici_id
    JOIN kategoriler ON kategoriler.kategori_id = icerikler.icerik_kategori
    ORDER BY icerik_tarih DESC"
);
$icerikler->execute();
$icerikler = $icerikler->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="card">
    <div class="card-title">
        <h4>İçerikler</h4>
        <a href="<?= URL ?>/yonetim/icerik-ekle" class="float-right">Yeni İçerik Ekle</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>İçerik Başlığı</th>
                        <th>İçerik Alt Başlığı</th>
                        <th>Kullanıcı</th>
                        <th>Kategori</th>
                        <th>Tarih</th>
                        <th>Görünürlük</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($icerikler as $icerik) {
                    ?>
                        <tr>
                            <th scope="row"><?= $icerik["icerik_id"] ?></th>
                            <td><?= $icerik["icerik_baslik"] ?></td>
                            <td><?= $icerik["icerik_altbaslik"] ?></td>
                            <td><a href="<?= URL . "/yonetim/uye-duzenle/" . $icerik["kullanici_link"] ?>"><?= $icerik["kullanici_kad"] ?></a></td>
                            <td><a href="<?= URL . "/yonetim/kategori-duzenle/" . $icerik["kategori_link"] ?>"><?= $icerik["kategori_isim"] ?></a></td>
                            <td><?= tarih("j F Y - H:i", $icerik["icerik_tarih"]) ?></td>
                            <td><?= ($icerik["icerik_liste"] ? '<span class="badge badge-success">Açık</span>' : '<span class="badge badge-danger">Gizli</span>') ?></td>
                            <td class="h3">
                                <a href="<?= URL . "/yonetim/icerik-duzenle?id=" . $icerik["icerik_id"] ?>">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="<?= "?islem=durum&id=" . $icerik["icerik_id"] ?>" onclick="return confirm('İçeriğin durumunu değiştirmek istediğine emin misin?')" class="<?= ($icerik["icerik_liste"] ? 'color-danger' : 'color-success') ?>">
                                    <i class=" ti-eye"></i>
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