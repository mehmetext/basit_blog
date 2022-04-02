<div class="my-5">
    <?php

    require POST_PATH . "/giris_post.php";

    ?>
    <form method="POST">
        <div class="form-floating">
            <input class="form-control" id="kullanici_kad" name="kullanici_kad" type=" text" placeholder="Kullanıcı Adı" />
            <label for="email">Kullanıcı Adı</label>
        </div>
        <div class="form-floating mb-4">
            <input class="form-control" id="kullanici_sifre" name="kullanici_sifre" type="password" placeholder="Şifre" />
            <label for="kullanici_sifre">Şifre</label>
        </div>
        <input type="submit" class="btn btn-block btn-primary col-12" value="Giriş Yap">
    </form>
</div>