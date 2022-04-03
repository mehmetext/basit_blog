<?php require POST_PATH . "/ayar_post.php"; ?>

<div class="card">
    <div class="card-title">
        <h4>Ayarlar</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST">
                <div class="form-group">
                    <label for="site_url">Site URL</label>
                    <input name="site_url" id="site_url" type=" text" class="form-control" placeholder="Site URL" value="<?= $ayar["site_url"] ?>">
                </div>
                <div class="form-group">
                    <label for="site_isim">Site İsmi</label>
                    <input name="site_isim" id="site_isim" type="text" class="form-control" placeholder="Site URL" value="<?= $ayar["site_isim"] ?>">
                </div>
                <div class="form-group">
                    <label for="site_desc">Site Açıklaması</label>
                    <textarea name="site_desc" id="site_desc" class="form-control" rows="5" placeholder="Site Açıklaması"><?= $ayar["site_desc"] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="site_keyw">Site Keywords</label>
                    <input name="site_keyw" id="site_keyw" type="text" class="form-control" placeholder="Site URL" value="<?= $ayar["site_keyw"] ?>">
                </div>
                <div class="form-group">
                    <label for="site_twitter">Twitter URL</label>
                    <input name="site_twitter" id="site_twitter" type="text" class="form-control" placeholder="Site URL" value="<?= $ayar["site_twitter"] ?>">
                </div>
                <div class="form-group">
                    <label for="site_facebook">Facebook URL</label>
                    <input name="site_facebook" id="site_facebook" type="text" class="form-control" placeholder="Site URL" value="<?= $ayar["site_facebook"] ?>">
                </div>
                <div class="form-group">
                    <label for="site_github">Github URL</label>
                    <input name="site_github" id="site_github" type="text" class="form-control" placeholder="Site URL" value="<?= $ayar["site_github"] ?>">
                </div>
                <div class="form-group">
                    <label for="sayfalama_limit">Bir Seferde Gösterilecek İçerik Sayısı</label>
                    <input name="sayfalama_limit" id="sayfalama_limit" type="text" class="form-control" placeholder="Bir Seferde Gösterilecek İçerik Sayısı" value="<?= $ayar["sayfalama_limit"] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>
</div>