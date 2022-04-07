<div class="card mb-4">
    <h4 class="card-header">Üye İsmi</h4>
    <div class="card-body"><?= $profilKullanici["kullanici_adsoyad"] ?></div>
</div>
<div class="card mb-4">
    <h4 class="card-header">üye Yetkisi</h4>
    <div class="card-body"><?= yetkiGetir($profilKullanici["kullanici_yetki"]) ?></div>
</div>
<div class="card mb-4">
    <h4 class="card-header">Paylaştığı İçerik Sayısı</h4>
    <div class="card-body"><?= $icerikSayisi ?></div>
</div>