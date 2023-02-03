<?php
error_reporting(0);
//system('clear');

function timer($t){
     $timr=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
//  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo " Please Wait ".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}


function http_get($url){

  $header = array(
	 "Host: gwaher.com", 
     "Referer: https://gwaher.com/",
	 "cookie: _gid=GA1.2.1036907073.1675414554;_ga_HF8YJ4L2V3=GS1.1.1675420541.2.0.1675420548.0.0.0;gc2023=e86c645bb01862a7b5ade1d27299138d7a2516a9;_gat_gtag_UA_186136571_1=1;csrf_cookie_name=1fae193ab339d7580f44b5f05fc42f69;_ga=GA1.2.1632257109.1675414554;_ga_VNH8H2P83Z=GS1.1.1675420541.2.1.1675420865.27.0.0;prefetchAd_4264720=true;prefetchAd_4254767=true",
	 "user-agent: Mozilla/5.0 (Linux; Android 10; BRAVE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36",
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}



// curl post

function http_post($url,$data){

  $header = array(
	 "Host: gwaher.com", 
     
     "Referer: https://gwaher.com/",
	 "cookie: _gid=GA1.2.1036907073.1675414554;_ga_HF8YJ4L2V3=GS1.1.1675420541.2.0.1675420548.0.0.0;gc2023=e86c645bb01862a7b5ade1d27299138d7a2516a9;_gat_gtag_UA_186136571_1=1;csrf_cookie_name=1fae193ab339d7580f44b5f05fc42f69;_ga=GA1.2.1632257109.1675414554;_ga_VNH8H2P83Z=GS1.1.1675420541.2.1.1675420865.27.0.0;prefetchAd_4264720=true;prefetchAd_4254767=true",
	 "user-agent: Mozilla/5.0 (Linux; Android 10; BRAVE) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36",
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}

a:
$rex = "https://gwaher.com/auto";
$rex = http_get($rex);
$ball = explode('<' ,explode('<button type="button" class="button-33 btn-sm">&#128176;', $rex)[1])[0];
 
$tok = explode('">' ,explode('<input type="hidden" name="token" value="', $rex)[1])[0];

$tim = explode(',' ,explode('let timer =', $rex)[1])[0];
$gg = $tim;



for ($x=$gg;$x>0;$x--){
echo "\r   \r";
echo "\r  Wait ".$x." \r";
sleep(1);
}



echo "[>] Balance =$ball \n";




$logiin = "https://gwaher.com/auto/verify";
$dataa = "token=".$tok."";
$rexi = http_post($logiin,$dataa);


goto a;



