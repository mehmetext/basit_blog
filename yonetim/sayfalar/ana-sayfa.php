<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                </div>
                <div class="stat-content dib">
                    <div class="stat-text">İçerik Sayısı</div>
                    <div class="stat-digit">
                        <?php

                        $sayi = $db->prepare("SELECT COUNT(*) sayi FROM icerikler");
                        $sayi->execute();
                        $sayi = $sayi->fetch(PDO::FETCH_ASSOC);

                        echo $sayi["sayi"];

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                </div>
                <div class="stat-content dib">
                    <div class="stat-text">Kullanıcı Sayısı</div>
                    <div class="stat-digit">
                        <?php

                        $sayi = $db->prepare("SELECT COUNT(*) sayi FROM kullanicilar");
                        $sayi->execute();
                        $sayi = $sayi->fetch(PDO::FETCH_ASSOC);

                        echo $sayi["sayi"];

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>