<?php

setlocale(LC_ALL, 'tr-TR.utf8');
date_default_timezone_set('Europe/Istanbul');

session_start();
ob_start();

require_once "fonksiyon.php";
require_once "baglan.php";


//bu PATH genelde require ederken kullanılır
define("PATH", dirname(__DIR__, 1));
define("POST_PATH", PATH . "/sistem/post");
define("SAYFA_PATH", PATH . "/sayfalar");
define("YONETIM_SAYFA_PATH", PATH . "/yonetim/sayfalar");

//bu URL genelde link css falan filan yerlerde kullanılır
define("URL", $ayar["site_url"]);

define("INC", URL . "/inc");

require SAYFA_PATH . "/components/tema_fonksiyonlar.php";
