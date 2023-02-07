<?php
error_reporting(0);
system('clear');

a:
$proxy = 'http://hdnbjrjb:yi3ukcv8u68m@188.74.210.21:6100';
$us = "Mozilla/5.0 (Linux; Android 8.1.0; vivo 1908) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36";
$cok = "Cookie_id=0gy6e1tx47d2rd4feu95s; _ga=GA1.1.1590554672.1675765020; cf_clearance=orTVyiwtY1VS9H5lgK895fVoMVlGn_GQTZwN6sjOOlU-1675787573-0-160; PHPSESSID=0c2d959196ed6bdf08254fb253d43765; _ga_1H915N6YP6=GS1.1.1675787607.3.1.1675787626.0.0.0";
$ua=array(
"Host: www.biowallet.store", 
"content-type: application/x-www-form-urlencoded", 
"referer: https://www.biowallet.store/withdraw_xrp?sc=Dl45770218AQ833259958OI6646", 
"x-requested-with: XMLHttpRequest",
"cookie: ".$cok."",
"user-agent: ".$us."",
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.biowallet.store/dashboard');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
$rex = curl_exec($ch);
$ball = explode("'" ,explode("<a href='withdraw_xrp?sc=", $rex)[1])[0];
//echo($ball);
b:
$log = "https://www.biowallet.store/includes/withdraw_xrp_func.php";
$data = "vericode=$ball&memotag=5162606&dogeaddress=rhi77L73jGvGN3zQf3AEbYnjWYZu7CSTe8&theamount=0.0005";
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
$res = curl_exec($ch);
//echo($res);
$suc = explode(", please wait while we reload this page" ,explode("<div class='container-fluid p-2 text-white text-center' style='background-color: green;'>", $res)[1])[0];
if($suc == "Your withdrawal request is created"){
echo "[>] $suc \n";

}else{
goto b;
}


for ($x=60;$x>0;$x--){
echo "\r   \r";
echo "\r  \033[0;37mwait \033[0;37m[\033[0;33m".$x."\033[0;37m] \r";
sleep(1);
}
goto a;
