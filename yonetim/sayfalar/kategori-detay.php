<div class="card">
    <div class="card-title">
        <h4><?= g("id") ? "Kategori Düzenle" : "Yeni Kategori Ekle" ?></h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST">
                <div class="form-group">
                    <label for="kategori_isim">Kategori Adı</label>
                    <input name="kategori_isim" id="kategori_isim" type=" text" class="form-control" placeholder="Kategori Adı" value="<?= g("id") ? $kategori["kategori_isim"] : p("kategori_isim") ?>">
                </div>
                <button type="submit" class="btn btn-primary"><?= g("id") ? "Güncelle" : "Ekle" ?></button>

            </form>
        </div>
    </div>
</div>