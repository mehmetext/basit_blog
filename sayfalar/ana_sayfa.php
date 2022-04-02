<?php

if ($icerikler) {
    foreach ($icerikler as $icerik) {
        require "components/liste_konu.php";
    }
}


?>
<!-- Pager-->
<div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Eski Konular →</a></div>