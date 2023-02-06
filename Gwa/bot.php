<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.21:6100';
$cok = "_gid=GA1.2.1732249465.1675499479; gc2023=3a0cb4a76714acb32a281b0e7182f3080f2f432f; csrf_cookie_name=86c6a5ff14ac10ca8443462b5120f035; _gat_gtag_UA_186136571_1=1; __cf_bm=9dMyVAakBNbv0cb_ftCkWI76QC_UNOXwGcCCz4358hw-1675646770-0-AdXC5nPZy1rcidS+r+jd4Kh+U1SD27wQLBvB7abqv/6bhMwwq5fq7TS//Rp2G5o/CVQRWHMglm7WM4jeIHG6fETI+9qLIltZJ+EyFifAGK+//DTQkh1UcKZdYOSOqCDZ2k+qptYBg9PFOwDpkNW8r3Q=; _ga_HF8YJ4L2V3=GS1.1.1675646769.4.0.1675646777.0.0.0; cf_clearance=k1zyKsuZpVsTDvRlFDXPgnD_hbT2d41yzACyoLN9y4g-1675646786-0-150; _ga=GA1.1.724447788.1675499477; _ga_VNH8H2P83Z=GS1.1.1675646770.7.1.1675646814.16.0.0";
$us = " Mozilla/5.0 (Linux; Android 8.1.0; vivo 1908) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36";

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
