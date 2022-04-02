<?php

require POST_PATH . "/profil-duzenle-post.php";

?>

<div class="my-5">
    <form method="post">
        <div class="form-floating">
            <input class="form-control" id="kullanici_kad" name="kullanici_kad" type=" text" placeholder="Kullanıcı Adı" value="<?= $kullanici["kullanici_kad"] ?>" />
            <label for="kullanici_kad">Kullanıcı Adı</label>
        </div>
        <div class="form-floating">
            <input class="form-control" id="kullanici_adsoyad" name="kullanici_adsoyad" type=" text" placeholder="Kullanıcı Adı" value="<?= $kullanici["kullanici_adsoyad"] ?>" />
            <label for="kullanici_adsoyad">Ad Soyad</label>
        </div>
        <input type="submit" class="btn btn-block btn-primary mt-3 col-12" value="Bilgilerimi Güncelle">
    </form>
</div>