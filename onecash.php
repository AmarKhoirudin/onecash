<?php


$ua = array("User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; vivo 1802 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/75.0.3770.101 Mobile Safari/537.36");
$login = "http://onecashspin.tk/control/wp-includes/three/login.php";

$data = "mobile=089611328096&password=amarkh090601&log_user=";



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURlOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPY_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPY_COOKIEFILE, "cookie.txt");
$result = curl_exec(sch);
echo $result;


