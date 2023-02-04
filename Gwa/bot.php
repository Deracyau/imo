<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.21:6100';
$cok = "gc2023=f9b349ab92319399e996019d2415c95093a2a856; _gid=GA1.2.1732249465.1675499479; _ga_HF8YJ4L2V3=GS1.1.1675517837.2.1.1675517852.0.0.0; csrf_cookie_name=7015b94866e5d0c83af04128a2777df7; cf_clearance=bx2DP3gFBH5WvxPSpdBy9U8d1X8F6cKpkKPYvTuBXqc-1675530597-0-150; __cf_bm=E1Rrs3opUqy6use_rOiq0PwFFPAj5stWcDDZI2PdI9o-1675530603-0-ARxn88MTncNIfjkUYw1KAHK56Pu2L9HJAodm/zBwdgtox9eOW1E8zdxK+I9oNifOWezZro6dtwAzPhgEL0LWlOxVlBq1r5Jmh9s5+y2Y8bB/CQIAy70DE0/xThpehmCXXXP7uWit8dXHOw+oMBSbg0w=; _ga=GA1.1.724447788.1675499477; _ga_VNH8H2P83Z=GS1.1.1675530561.4.1.1675530621.60.0.0";
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
