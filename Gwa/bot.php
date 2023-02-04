<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.21:6100';
$cok = "gc2023=f9b349ab92319399e996019d2415c95093a2a856; _gid=GA1.2.1732249465.1675499479; cf_clearance=HC4UQ45IQxbQ0RPazo5AO0EUdcHxcxIIThtM.kyNFKA-1675499715-0-150; csrf_cookie_name=d9ac1c5964a2bd84af3e63858d61c9f4; __cf_bm=n60ntCGKLpIIvCNOgykG8EOtoiuQV551BzIPu6s6i_U-1675499719-0-AbdtnYIkhlaWSKF0R/PJbLCHnvOhFVRA+ebDo+t8TAi1Zpmsdu8Wyj7TqYmYyTuOIN6QUTuM9DudnT+2JRDoow4pqwHXMZ81zPrQMfHD++fUrs8inJaDaQj2WMyXP2ps7hrhgACFXOHFqqGSzuTycgc=; _gat_gtag_UA_186136571_1=1; _ga=GA1.1.724447788.1675499477; _ga_VNH8H2P83Z=GS1.1.1675499476.1.1.1675499750.50.0.0";
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
