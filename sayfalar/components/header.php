<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="" />
    <?= $tdk ?? "" ?>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= INC ?>/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= URL ?>"><?= $ayar["site_isim"] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menü
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-3 py-3 py-lg-4 <?php echo (!g("do") ? "bg-dark bg-opacity-25" : null) ?>" href="<?= URL ?>">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link px-3 py-3 py-lg-4 <?php echo (g("do") == "hakkimizda" ? "bg-dark bg-opacity-25" : null) ?>" href="<?= URL ?>/hakkimizda">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link px-3 py-3 py-lg-4 <?php echo (g("do") == "iletisim" ? "bg-dark bg-opacity-25" : null) ?>" href="<?= URL ?>/iletisim">İletişim</a></li>
                    <?php if (!$kullanici) { ?>
                        <li class="nav-item"><a class="nav-link ms-lg-2 my-3 btn btn-primary text-light" href="<?= URL ?>/giris">Giriş Yap</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link ms-lg-2 my-3 btn btn-primary text-light" href="<?= URL ?>/profil-duzenle"><?= $kullanici["kullanici_adsoyad"] ?></a></li>
                        <?php if ($kullanici["kullanici_yetki"] == 2) { ?>
                            <li class="nav-item">
                                <a class="nav-link ms-lg-2 my-3 btn btn-success text-light" href="<?= URL ?>/yonetim/">Yönetim Paneli</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item"><a class="nav-link ms-lg-2 my-3 btn btn-danger text-light" href="<?= URL ?>/cikis">Çıkış Yap</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('<?= $mastheadBg ?? INC . "/assets/img/home-bg.jpg" ?>')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="<?= g("do") == "icerik" ? "post-heading" : "site-heading"; ?>">
                        <h1><?= $siteHeading ?></h1>
                        <?php if (isset($siteSubheading)) { ?>
                            <span class="subheading"><?= $siteSubheading ?></span>
                        <?php } ?>
                        <?php if (g("do") == "icerik") { ?>
                            <span class="meta mb-2">
                                <?= tarih("j F Y - H:i", $icerik["icerik_tarih"]) ?> tarihinde <a href="profil/<?= $icerik["kullanici_link"] ?>"><?= $icerik["kullanici_kad"] ?></a> tarafından paylaşıldı.
                            </span>

                            <a href="<?= URL ?>/kategori/<?= $icerik["kategori_link"] ?>">
                                <span class="badge rounded-pill bg-primary"><?= $icerik["kategori_isim"] ?></span>
                            </a>
                            <?php
                            foreach ($etiketler as $etiket) {
                            ?>
                                <a href="etiket/<?= $etiket ?>">
                                    <span class="badge rounded-pill bg-dark"><?= $etiket ?></span>
                                </a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">