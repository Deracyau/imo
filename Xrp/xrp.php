<?php
error_reporting(0);
system('clear');


$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.183.10:8279';
$us = "Mozilla/5.0 (Linux; Android 13; Redmi Note 10 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36";
$cok = "Cookie_id=7yd4gutes0fd9164r25xe; _ga=GA1.1.1160739377.1675758947; PHPSESSID=5191636106890c7f2ca1d066173e50ba; _ga_1H915N6YP6=GS1.1.1675834067.3.1.1675834080.0.0.0";
$ua=array(
"Host: www.biowallet.store", 
"content-type: application/x-www-form-urlencoded", 
"referer: https://www.biowallet.store/withdraw_xrp?sc=Dl45770218AQ833259958OI6646", 
"x-requested-with: XMLHttpRequest",
"cookie: ".$cok."",
"user-agent: ".$us."",
);
$log = "https://www.biowallet.store/includes/login_inc.php";
$data = "username=Indopred88&password=Nung1234";
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
curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); 
$res = curl_exec($ch);
$logg = explode("<" ,explode("<div class='alert alert-success'>", $res)[1])[0];
echo" \033[1;90m$logg \n";
a:
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.biowallet.store/dashboard');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); 
$rex = curl_exec($ch);
$ball = explode("'" ,explode("<a href='withdraw_xrp?sc=", $rex)[1])[0];
//echo($ball);
b:
$log = "https://www.biowallet.store/includes/withdraw_xrp_func.php";
$data = "vericode=$ball&memotag=5162606&dogeaddress=rhi77L73jGvGN3zQf3AEbYnjWYZu7CSTe8&theamount=0.000027";
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
curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); 
$res = curl_exec($ch);
//echo($res);
$suc = explode(", please wait while we reload this page" ,explode("<div class='container-fluid p-2 text-white text-center' style='background-color: green;'>", $res)[1])[0];
if($suc == "Your withdrawal request is created"){
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i]", $timestamp);
echo "\033[1;37m$wak \033[1;32m$suc \n";

}else{
goto b;
}


for ($x=60;$x>0;$x--){
echo "\r   \r";
echo "\r  \033[0;37mwait \033[0;37m[\033[0;33m".$x."\033[0;37m] \r";
sleep(1);
}
goto a;
