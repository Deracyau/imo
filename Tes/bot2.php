<?php
//system('clear');
error_reporting(0);

system('rm cookie.txt');
$ta = rand(111,999);
$us = "Mozilla/5.0 (Linux; Android 6.0.1; SM-N".$ta."V Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2".$ta.".98 Mobile Safari/537.36";
$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.207:6286';
$user = "Sempak88";
$tag = "5162606";
$ua=array(
"Host: www.biowallet.store", 
"content-type: application/x-www-form-urlencoded", 
"referer: https://www.biowallet.store/withdraw_xrp?sc=Dl45770218AQ833259958OI6646", 
"x-requested-with: XMLHttpRequest",
"user-agent: ".$us.""
);

$log = "https://www.biowallet.store/includes/login_inc.php";
$data = "username=$user&password=Nung1234";
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
$ak = explode("<" ,explode("<font color='white' style='font-size: 20px;'>", $rex)[1])[0];
echo "\033[1;37m[>] \033[1;32mUsername : $ak \n";
$ball = explode("'" ,explode("<a href='withdraw_xrp?sc=", $rex)[1])[0];
//echo($ball);
b:
$log = "https://www.biowallet.store/includes/withdraw_xrp_func.php";
$data = "vericode=$ball&memotag=$tag&dogeaddress=rhi77L73jGvGN3zQf3AEbYnjWYZu7CSTe8&theamount=0.0005";
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
$suc = explode(", please wait while we reload this page" ,explode("<div class='container-fluid p-2 text-white text-center' style='background-color: green;'>", $res)[1])[0];
if($suc == "Your withdrawal request is created"){
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i:s]", $timestamp);
echo "\033[1;37m[>] \033[1;32m$suc \n";
echo "\033[1;90m=======================================\n";
}else{
goto b;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.biowallet.store/log_out');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); 
$ref = curl_exec($ch);
for ($x=60;$x>0;$x--){
echo "\r   \r";
echo "\r  \033[0;37mwait \033[0;37m[\033[0;33m".$x."\033[0;37m] \r";
sleep(1);
}
$bett = next($wal);


goto a;
