<?php
error_reporting(0);
//system('clear');
a:
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);

$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.207:6286';
$cok = "_ga_HF8YJ4L2V3=GS1.1.1675646919.4.1.1675646931.0.0.0; gc2023=710b50e7702de5b9e7268b7e4d1e00717ca9b26b; _gid=GA1.2.1979898476.1675829735; _gat_gtag_UA_186136571_1=1; __cf_bm=KPtfL__4ONBocbnk.N8Rlf6AD5WtB_DknxqPlsqOUAw-1675829738-0-AdrhAtNuflc7w3EWJxY7y4vSBpW8D/vnhfD74U40HKHArFPDCHoZUkq/3Ee2bXqGYtehybtiVfTr1bBN/WoKtdoZEyk5bQJKumCp0oiHaJXGC90x0O/eMgAXXqAvwgogbvxXmZ9jLYpYZnOyaP+ZW5I=; csrf_cookie_name=a1807ebab6ce5791bf88750b46b5a929; cf_clearance=ys_kon9sgOENeXzQe0Pt1qloSMc87yZxNWOR7Rf9Jl4-1675829762-0-150; bitmedia_fid=eyJmaWQiOiJiMzI5ZWRmODRlYTlkOWJlODQyYzIxZjhmYWVmNzA5OSIsImZpZG5vdWEiOiI1ODhjNDc1YWMzNmFhNzY0MmFmZGVhNjcwMGM1OTdkNCJ9; _ga=GA1.1.1157438538.1675496604; _ga_VNH8H2P83Z=GS1.1.1675829731.9.1.1675829776.15.0.0";
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
