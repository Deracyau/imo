<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.183.10:8279';
$cok = "_gid=GA1.2.1728440281.1675497550; gc2023=086cdd9eb53fd8d64eb018d594de10233081039a; csrf_cookie_name=cd6aed659053adb649bbdb6fe96b237a; _gat_gtag_UA_186136571_1=1; __cf_bm=YBXNUAYQro2uESoRMhy5OlPpYJiWzZMm.nm8TKvHKDw-1675647038-0-Ac0h/5Z5sypW9xAFUPOSmysX0OgC4vyNxKonfFGVNDnlLk3Q6j3V2faDu2O9xQV7LZ75DnOnEowHRssGDg4+I1HOZkQzh2qL7icNdhPz1lYcJi+syQFNjsBL3kUNgBujodeMbQNb/omgdSDzOLKPQhY=; _ga_HF8YJ4L2V3=GS1.1.1675647036.4.0.1675647043.0.0.0; cf_clearance=iBTYBS8MMA00WQQcx3XvZ9VqxmA6A6CxgMMlpXcUnJk-1675647050-0-150; _ga=GA1.1.69779428.1675497550; _ga_VNH8H2P83Z=GS1.1.1675647038.5.1.1675647071.27.0.0";
$us = " Mozilla/5.0 (Linux; Android 13; Redmi Note 10 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36";

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
