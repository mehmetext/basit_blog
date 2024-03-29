<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yönetim Paneli - <?= $ayar["site_isim"] ?></title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="<?= URL ?>/yonetim/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?= URL ?>/yonetim/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?= URL ?>/yonetim/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?= URL ?>/yonetim/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?= URL ?>/yonetim/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= URL ?>/yonetim/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= URL ?>/yonetim/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="<?= URL ?>/yonetim/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?= URL ?>/yonetim/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>/yonetim/assets/css/lib/helper.css" rel="stylesheet">
    <link href="<?= URL ?>/yonetim/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="<?= URL . '/yonetim/' ?>">
                            <span><?= $ayar["site_isim"] ?></span>
                        </a></div>
                    <li class="label">İçerik</li>
                    <li><a href="<?= URL . '/yonetim/icerik-ekle' ?>"><i class="ti-plus"></i> İçerik Ekle</a></li>
                    <li><a href="<?= URL . '/yonetim/icerikler' ?>"><i class="ti-view-list-alt"></i> İçerikler</a></li>

                    <li class="label">Kategori</li>
                    <li><a href="<?= URL . '/yonetim/kategori-ekle' ?>"><i class="ti-plus"></i> Kategori Ekle</a></li>
                    <li><a href="<?= URL . '/yonetim/kategoriler' ?>"><i class="ti-view-list-alt"></i> Kategoriler</a></li>

                    <li class="label">Sabit Sayfa</li>
                    <li><a href="<?= URL . '/yonetim/sabit-sayfa-ekle' ?>"><i class="ti-plus"></i> Sabit Sayfa Ekle</a></li>
                    <li><a href="<?= URL . '/yonetim/sabit-sayfalar' ?>"><i class="ti-view-list-alt"></i> Sabit Sayfalar</a></li>

                    <li class="label">Üye</li>
                    <li><a href="<?= URL . '/yonetim/uyeler' ?>"><i class="ti-user"></i> Üyeler</a></li>

                    <li class="label">Yönetim</li>
                    <li><a href="<?= URL . '/yonetim/ayarlar' ?>"><i class="ti-settings"></i> Site Ayarları</a></li>
                    <li><a href="<?= URL ?>" target="_blank"><i class="ti-crown"></i> Blog'u Aç</a></li>
                    <li><a href="<?= URL ?>/cikis" onclick="return confirm('Çıkış yapmak istediğine emin misin?')"><i class="ti-close"></i> Çıkış Yap</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar"><?= $kullanici["kullanici_kad"] ?>
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left"><?= $kullanici["kullanici_adsoyad"] ?></span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="<?= URL . "/profil-duzenle" ?>">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= URL ?>/cikis" onclick="return confirm('Çıkış yapmak istediğine emin misin?')">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid pt-3">