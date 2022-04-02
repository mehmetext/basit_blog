<?php

require "../sistem/ayar.php";

if (!($kullanici && $kullanici["kullanici_yetki"] == 2)) {
    go(URL);
}

?>

<?php require YONETIM_SAYFA_PATH . "/components/header.php" ?>

<?php

if (g("do")) {
    if (file_exists(YONETIM_SAYFA_PATH . "/" . g("do") . ".php")) {
        require YONETIM_SAYFA_PATH . "/" . g("do") . ".php";
    } else {
        go(URL . "/yonetim/");
    }
} else {
    require YONETIM_SAYFA_PATH . "/ana-sayfa.php";
}

?>

<?php require YONETIM_SAYFA_PATH . "/components/footer.php" ?>