<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=basit_blog", "root", "");
} catch (PDOException $e) {
    print $e->getMessage();
}


$ayar = $db->prepare("SELECT * FROM ayar WHERE id = 1");
$ayar->execute();
$ayar = $ayar->fetch(PDO::FETCH_ASSOC);

if (!$ayar) die();

$kullanici = false;
if (session("kullanici_id")) {
    $kullanici = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_id = ?");
    $kullanici->execute(array(session("kullanici_id")));
    $kullanici = $kullanici->fetch(PDO::FETCH_ASSOC);
}
