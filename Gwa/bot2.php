<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.207:6286';
$cok = "_gid=GA1.2.795122180.1675496605; gc2023=5d19b62f033db9df86769b3e0b3d83c97f2dd284; csrf_cookie_name=3b708466452ce88b9ba949897ce3ab74; _gat_gtag_UA_186136571_1=1; __cf_bm=qKBwOs1nGTIceLnNisHV1jupt3ci.pYzqj24E5jcF1c-1675646924-0-AU07w2fuuh6eIia2Ik4aSNYrCr1ZvrjdjsQ7lc5pD7aPauPFuRYwdXjRbE1cr5OvUCngTPHGCnoD05pgcH5egurDt/HwvQzQTqQnXkjmw8YvO14UOe/XTGqpJl22uL0ph05/80mcCqCMTwak3/mwBBk=; _ga_HF8YJ4L2V3=GS1.1.1675646919.4.1.1675646931.0.0.0; cf_clearance=U09qT5J55Pjsh8I4NPVaUv4Z195JvBQpN7sZVN99T3U-1675646937-0-150; _ga=GA1.1.1157438538.1675496604; _ga_VNH8H2P83Z=GS1.1.1675646919.8.1.1675646946.33.0.0";
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
