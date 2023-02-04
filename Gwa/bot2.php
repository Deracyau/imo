<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.207:6286';
$cok = "gc2023=7c89a3bf4d32bb1de21caab1022f4005c5761e76; _gid=GA1.2.795122180.1675496605; _ga_HF8YJ4L2V3=GS1.1.1675517889.2.0.1675517901.0.0.0; csrf_cookie_name=d7702951d2d471921518f53ece67072b; _gat_gtag_UA_186136571_1=1; __cf_bm=IRnUIohhSk8xjyRWI0pSTfUuAGiqq7icJal6vpGCLvU-1675530724-0-ARW73ESevEJcWHgVpXRCImXv4okWVQD1vS8PVVh0bC9oB8wVqvFY7fcZz2chWQiloZ7W8BAxMgDqRFeZEq/p/0OT+Ngl/F3O1JNSwMfbCRO0xfhCX+JkM7MPmHj14fj0ZviBotMV39D6QZPlPmh79Ug=; cf_clearance=KXbo1Crk9TCJhvz0.zCD4mO1DMLh90Aolda_Iidr1C4-1675530739-0-150; _ga=GA1.1.1157438538.1675496604; _ga_VNH8H2P83Z=GS1.1.1675530723.5.1.1675530756.27.0.0";
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
