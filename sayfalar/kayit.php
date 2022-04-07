<div class="my-5">
    <?php

    require POST_PATH . "/kayit_post.php";

    ?>
    <form method="POST">
        <div class="form-floating">
            <input class="form-control" id="kullanici_kad" name="kullanici_kad" type="text" placeholder="Kullanıcı Adı" value="<?= p("kullanici_kad") ?>" />
            <label for="kullanici_kad">Kullanıcı Adı</label>
        </div>
        <div class="form-floating">
            <input class="form-control" id="kullanici_mail" name="kullanici_mail" type="text" placeholder="Kullanıcı E-Postası" value="<?= p("kullanici_mail") ?>" />
            <label for="kullanici_mail">Kullanıcı E-Postası</label>
        </div>
        <div class="form-floating">
            <input class="form-control" id="kullanici_adsoyad" name="kullanici_adsoyad" type="text" placeholder="Ad & Soyad" value="<?= p("kullanici_adsoyad") ?>" />
            <label for="kullanici_adsoyad">Ad & Soyad</label>
        </div>
        <div class="form-floating">
            <input class="form-control" id="kullanici_sifre" name="kullanici_sifre" type="password" placeholder="Şifre" />
            <label for="kullanici_sifre">Şifre</label>
        </div>
        <div class="form-floating">
            <input class="form-control" id="kullanici_sifretekrar" name="kullanici_sifretekrar" type="password" placeholder="Şifre" />
            <label for="kullanici_sifretekrar">Şifre Tekrar</label>
        </div>
        <input type="submit" class="btn btn-block btn-primary mt-3 col-12" value="Kayıt Ol">
    </form>
</div>