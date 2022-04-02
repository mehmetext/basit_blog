<div class="card">
    <div class="card-title">
        <h4><?= g("id") ? "İçerik Düzenle" : "Yeni İçerik Ekle" ?></h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="icerik_resim">İçerik Resmi</label>
                    <input name="icerik_resim" id="icerik_resim" type="file" class="form-control" placeholder="İçerik Resmi">
                    <?php if (g("id")) { ?>
                        <div class="m-3 rounded text-center">
                            <img src="<?= URL . $icerik["icerik_resim"] ?>" class="img-fluid" alt="İçerik Resmi">
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="icerik_baslik">İçerik Başlığı</label>
                    <input name="icerik_baslik" id="icerik_baslik" type=" text" class="form-control" placeholder="İçerik Başlığı" value="<?= g("id") ? $icerik["icerik_baslik"] : p("icerik_baslik") ?>">
                </div>
                <div class="form-group">
                    <label for="icerik_altbaslik">İçerik Alt Başlığı</label>
                    <input name="icerik_altbaslik" id="icerik_altbaslik" type=" text" class="form-control" placeholder="İçerik Alt Başlığı" value="<?= g("id") ? $icerik["icerik_altbaslik"] : p("icerik_altbaslik") ?>">
                </div>
                <div class="form-group">
                    <label for="icerik_yazi">İçerik</label>
                    <textarea name="icerik_yazi" id="icerik_yazi" class="form-control" rows="5" placeholder="İçerik"><?= g("id") ? $icerik["icerik_yazi"] : p("icerik_yazi") ?></textarea>
                </div>
                <div class="form-group">
                    <label for="icerik_etiket">İçerik Etiketleri</label>
                    <input name="icerik_etiket" id="icerik_etiket" type=" text" class="form-control" placeholder="İçerik Etiketleri" value="<?= g("id") ? $icerik["icerik_etiket"] : p("icerik_etiket") ?>">
                </div>
                <div class="form-group">
                    <label for="icerik_kategori">İçerik Kategorisi</label>
                    <select name="icerik_kategori" class="form-control" id="icerik_kategori">
                        <?php
                        $kategoriler = kategoriler();
                        foreach ($kategoriler as $kategori) {
                        ?>
                            <option value="<?= $kategori["kategori_id"] ?>"><?= $kategori["kategori_isim"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"><?= g("id") ? "Güncelle" : "Ekle" ?></button>

            </form>
        </div>
    </div>
</div>