<?php

function dbBaslangicLimitGetir($sayfa, $limit, $kayitSayisi)
{
    $sSayisi = ceil($kayitSayisi / $limit);
    $baslangic = $sayfa * $limit - $limit;
    return array(
        $baslangic,
        $limit
    );
}

function p($par, $st = false)
{
    if (isset($_POST[$par])) {
        if ($st) {
            return htmlspecialchars(addslashes($_POST[$par]));
        } else {
            return addslashes($_POST[$par]);
        }
    } else {
        return false;
    }
}

function g($par, $st = false)
{
    if (isset($_GET[$par])) {
        if ($st) {
            return htmlspecialchars(addslashes($_GET[$par]));
        } else {
            return addslashes($_GET[$par]);
        }
    } else {
        return false;
    }
}

function session($str)
{
    return $_SESSION[$str] ?? false;
}

function setSession($key, $val)
{
    $_SESSION[$key] = $val;
}

function ss($str)
{
    return stripslashes($str);
}

function go($url, $time = null)
{
    if ($time) {
        header("Refresh: $time, url=$url");
    } else {
        header("Location: $url");
    }
}

function sef($text)
{
    $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
    $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
    $text = strtolower(str_replace($find, $replace, $text));
    $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    $text = str_replace(' ', '-', $text);

    return $text;
}

function tarih($format, $datetime = 'now')
{
    $z = date("$format", strtotime($datetime));
    $gun_dizi = array(
        'Monday'    => 'Pazartesi',
        'Tuesday'   => 'Salı',
        'Wednesday' => 'Çarşamba',
        'Thursday'  => 'Perşembe',
        'Friday'    => 'Cuma',
        'Saturday'  => 'Cumartesi',
        'Sunday'    => 'Pazar',
        'January'   => 'Ocak',
        'February'  => 'Şubat',
        'March'     => 'Mart',
        'April'     => 'Nisan',
        'May'       => 'Mayıs',
        'June'      => 'Haziran',
        'July'      => 'Temmuz',
        'August'    => 'Ağustos',
        'September' => 'Eylül',
        'October'   => 'Ekim',
        'November'  => 'Kasım',
        'December'  => 'Aralık',
        'Mon'       => 'Pts',
        'Tue'       => 'Sal',
        'Wed'       => 'Çar',
        'Thu'       => 'Per',
        'Fri'       => 'Cum',
        'Sat'       => 'Cts',
        'Sun'       => 'Paz',
        'Jan'       => 'Oca',
        'Feb'       => 'Şub',
        'Mar'       => 'Mar',
        'Apr'       => 'Nis',
        'Jun'       => 'Haz',
        'Jul'       => 'Tem',
        'Aug'       => 'Ağu',
        'Sep'       => 'Eyl',
        'Oct'       => 'Eki',
        'Nov'       => 'Kas',
        'Dec'       => 'Ara',
    );
    foreach ($gun_dizi as $en => $tr) {
        $z = str_replace($en, $tr, $z);
    }
    if (strpos($z, 'Mayıs') !== false && strpos($format, 'F') === false) $z = str_replace('Mayıs', 'May', $z);
    return $z;
}

function generateRandomString($length = 6)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function dosyaYukle($formAdi, $uygunTipler, $kaydedilecekYol, $onEk, $zorunlu = true)
{
    $bilgi = "";

    if ($_FILES && $_FILES[$formAdi]["name"]) {
        $uygunTipler = $uygunTipler;
        $dosya = $_FILES[$formAdi];
        $tempName = $dosya["tmp_name"];
        $extension = pathinfo($dosya["name"], PATHINFO_EXTENSION);

        $newPath =  $kaydedilecekYol . ($onEk ? '/' . $onEk . '_' : null) . generateRandomString() . '.' . $extension;

        if (!in_array($dosya["type"], $uygunTipler)) {
            $bilgi = "Lütfen geçerli bir dosya seçiniz!";
            return array(0, $bilgi);
        } else {
            if (!is_uploaded_file($tempName)) {
                $bilgi = "Dosya taşınırken bir sorun oluştu!";
                return array(0, $bilgi);
            } else {
                move_uploaded_file($tempName, PATH . $newPath);
                $bilgi = "Dosya başarıyla yüklendi!";
                return array(1, $newPath);
            }
        }
    } else {
        if ($zorunlu) {
            $bilgi = "Dosya seçmelisiniz!";
            return array(0, $bilgi);
        } else {
            return array(1, "");
        }
    }
}

function alert($class, $icerik)
{
    require SAYFA_PATH . "/components/alert.php";
}
