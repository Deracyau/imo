<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.207:6286';
$cok = "_gid=GA1.2.795122180.1675496605; _ga_HF8YJ4L2V3=GS1.1.1675517889.2.0.1675517901.0.0.0; cf_clearance=341IguosEE9JGNzPZQSBDkAqXozGQZUJtoBdX0omKnQ-1675600196-0-150; csrf_cookie_name=29e4196ccc03e3eeaf078df1b0b1c302; gc2023=5d19b62f033db9df86769b3e0b3d83c97f2dd284; _gat_gtag_UA_186136571_1=1; __cf_bm=jrdTd9BsNW3QR8KpXj.BiMrS5OA6X8a7EVe3rs_yPaU-1675600205-0-AfJUYVv+H7eHxwKyigcyj3Z60IT0stDnCc0sVl320Eq2KP39C4dHFDa4Kn0qRhK3eNlB9bg3qr8ynsBCDZKhWLIL6j/ZI7ULHXtbyB+S7KlTpjHdCnF6Q2JNP54OTKVKm8UYdryTkqvzg38R9ggiJ00=; _ga=GA1.1.1157438538.1675496604; _ga_VNH8H2P83Z=GS1.1.1675600200.6.1.1675600219.41.0.0";
$us = " Mozilla/5.0 (Linux; Android 11; V2043) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36";

$ua=array(
"Host: gwaher.com", 
"Referer: https://gwaher.com/",
"cookie: ".$cok."",
"user-agent: ".$us."",
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://gwaher.com/auto');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
$rex = curl_exec($ch);
$ball = explode('<' ,explode('<button type="button" class="button-33 btn-sm">&#128176;', $rex)[1])[0];
$tok = explode('">' ,explode('<input type="hidden" name="token" value="', $rex)[1])[0];
$tim = explode(',' ,explode('let timer =', $rex)[1])[0];
$gg = $tim;
if($ball == ""){exit;}
echo "\033[0;37m$wak \033[0;32mBalance\033[0;92m$ball \n";

for ($x=$gg;$x>0;$x--){
echo "\r   \r";
echo "\r  \033[0;37mwait \033[0;37m[\033[0;33m".$x."\033[0;37m] \r";
sleep(1);
}


$log = "https://gwaher.com/auto/verify";
$data = "token=".$tok."";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $log);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
$result = curl_exec($ch);
goto a;
