<div class="card">
    <div class="card-title">
        <h4><?= g("id") ? "Sabit Sayfa Düzenle" : "Yeni Sabit Sayfa Ekle" ?></h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST">
                <div class="form-group">
                    <label for="ss_isim">Sayfa İsmi</label>
                    <input name="ss_isim" id="ss_isim" type=" text" class="form-control" placeholder="Sayfa İsmi" value="<?= g("id") ? $sayfa["ss_isim"] : p("ss_isim") ?>">
                </div>
                <div class="form-group">
                    <label for="ss_altbaslik">Sayfa Alt Başlığı</label>
                    <input name="ss_altbaslik" id="ss_altbaslik" type=" text" class="form-control" placeholder="Sayfa Alt Başlığı" value="<?= g("id") ? $sayfa["ss_altbaslik"] : p("ss_altbaslik") ?>">
                </div>
                <div class="form-group">
                    <label for="ss_icerik">Sayfa İçeriği</label>
                    <textarea name="ss_icerik" id="ss_icerik" data-ckeditor class="form-control" rows="5" placeholder="Sayfa İçeriği"><?= g("id") ? $sayfa["ss_icerik"] : p("ss_icerik") ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?= g("id") ? "Güncelle" : "Ekle" ?></button>

            </form>
        </div>
    </div>
</div>