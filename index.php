<?php

require "sistem/ayar.php";

?>

<?php require SAYFA_PATH . "/components/header.php" ?>

<?php

switch (g("do")) {
    case "profil-duzenle":
        require SAYFA_PATH . "/profil-duzenle.php";
        break;

    case "etiket":
        require SAYFA_PATH . "/etiket.php";
        break;

    case "kategori":
        require SAYFA_PATH . "/kategori.php";
        break;

    case "hakkimizda":
        require SAYFA_PATH . "/hakkimizda.php";
        break;

    case "icerik":
        require SAYFA_PATH . "/icerik.php";
        break;

    case "cikis":
        if (!$kullanici) {
            go(URL);
        } else {
            require SAYFA_PATH . "/cikis.php";
        }
        break;

    case "giris":
        if ($kullanici) {
            go(URL);
        } else {
            require SAYFA_PATH . "/giris.php";
        }
        break;

    case "iletisim":
        require SAYFA_PATH . "/iletisim.php";
        break;

    default:
        if (g("do")) {
            echo "<p>BÖYLE BİR SAYFA BULUNAMADI!</p>";
        } else {
            require SAYFA_PATH . "/ana_sayfa.php";
        }
        break;
}

?>

<?php require SAYFA_PATH . "/components/footer.php" ?>