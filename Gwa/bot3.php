<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.183.10:8279';
$cok = "_ga_HF8YJ4L2V3=GS1.1.1675647036.4.0.1675647043.0.0.0; cf_clearance=lGEDO6WvrpMv9x67d28eDJh.NuGw1nyp6nleJXCmaaw-1675829556-0-150; csrf_cookie_name=407c65805f4e9ee180aeffa900d12432; gc2023=eca2a2bc014a309f209848f33490c1bc284278b2; _gid=GA1.2.1746412387.1675829562; _gat_gtag_UA_186136571_1=1; __cf_bm=.j.Yd2lCRFIxxC6jzmOwxyOuiRDbe5MIe34gHIZ.lHk-1675829563-0-Aay7YsIwMQJLJXBTC9nY9cG30HTsExCRUsn8/cPuJ1sJ4df7+GCdmpsyG2OT7QGYC0R7yAq8XdVa6jQ+MRh71QO96Jwea9xEqn8PBHSP93rXugEUKq3r7v+HQYa2RGVXlaufOnaVBxA2Pj/PnOb5VbM=; _ga=GA1.1.69779428.1675497550; _ga_VNH8H2P83Z=GS1.1.1675829561.6.1.1675829589.32.0.0";
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
