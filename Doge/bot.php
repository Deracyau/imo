<?php
system('clear');
//system('rm cookie.txt');
error_reporting(0);
function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 1000);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_DNS_LOCAL_IP4, '1.1.1.1');
        curl_setopt($ch, CURLOPT_NOSIGNAL, true);
        curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, 120);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
        //curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
        //curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); 
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }


function get($url,$host){
  return curl($url,'',head($host))[1];
}

function post($url,$data,$host){
  return curl($url,$data,head($host))[1];
}

function head($host){
//$e=rand(000,999);
$user='Mozilla/5.0 (Linux; Android 11; SM-N975F) AppleWebKit/537.36 (KHTML, like Gecko) Brave Chrome/89.0.4389.188 Mobile Safari/537.36';
$cookie='_ga=GA1.1.1388193134.1675323364;_gcl_au=1.1.216091150.1675323365;dom3ic8zudi28v8lr6fgphwffqoz0j6c=3e870603-5341-438f-b15a-68ab6c3b799e%3A2%3A1;ci_session=206fa4f07c2c989affbda3f950a1887287510d67;prefetchAd_5692480=true;csrf_cookie_name=4a428148d5bbe43bcbde703a6f2abdd8;_ga_LBF8D9YY31=GS1.1.1675669426.4.1.1675669502.0.0.0;_data_cpc=154-1-1675673102';
  $h[]="Host: $host";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: $user";
  $h[]="cookie: $cookie";
  return $h;
}

function timer($t){
     $timr=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
//  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo " \033[0;97mWait \033[0;93m".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}

a:
$host="payfaucetbr.xyz";
$url="https://payfaucetbr.xyz/auto/currency/doge";
$rev=get($url,$host);
$csf = explode('">' ,explode('aria-valuemax="', $rev)[1])[0];
$toki = explode('">' ,explode('<input type="hidden" name="token" value="', $rev)[1])[0];
$tem = explode(',' ,explode('let timer =', $rev)[1])[0];


timer($tem);
//sleep(1);
$host="payfaucetbr.xyz";
$login = "https://payfaucetbr.xyz/auto/verify/doge";
$data = "token=$toki";
$cc = post($login,$data,$host);
$suc = explode("'" ,explode("html: '", $cc)[1])[0];
if($suc == ""){
goto a;
}else{
echo"\033[1;36m[>] \033[1;97m[\033[1;92m$suc\033[1;97m] \n";

goto a;
}





