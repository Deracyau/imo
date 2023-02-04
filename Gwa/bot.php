<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://pujcvpjv:wzjxit7uyig0@144.168.217.88:8780';
$cok = "gc2023=1c31a4b6b5553eeaa53e8c142116487f5e4c9681; _gid=GA1.2.791762934.1675422083; _ga_HF8YJ4L2V3=GS1.1.1675477521.2.1.1675477698.0.0.0; cf_clearance=h5rLbzAgjZShGGFY.D.EZL7G_FSp9sqfVhzxWpIj8Ag-1675494473-0-150; csrf_cookie_name=cc3ab1c7c25ae0c05cb76f2b2c13ef65; __cf_bm=B3tB3tZtA0p8mYRGeDlPGbZqBN5ilgQ7HkpRfqd.N3Q-1675496895-0-AXD+UxfwWUMXTzPhT6uasszRoUtUH9ks0bM/0qHoL2KbyVSH4SvNiFSHcxa1wimXavBa1WixEBrhV2FOmPwWnTctO0ga/Bxx6cYPZyJpFcB0kgXQujDPjNWpNphkMw0214DizdJNJuAKDL/UZ+Gqcz4=; _gat_gtag_UA_186136571_1=1; _ga=GA1.1.1364264705.1675422083; _ga_VNH8H2P83Z=GS1.1.1675496901.5.1.1675496956.5.0.0";
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
