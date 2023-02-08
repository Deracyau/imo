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
        //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 1000);
        //curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        //curl_setopt($ch, CURLOPT_DNS_LOCAL_IP4, '1.1.1.1');
        //curl_setopt($ch, CURLOPT_NOSIGNAL, true);
        //curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, 120);
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
$user='Mozilla/5.0 (Linux; Android 11; SM-N975F) AppleWebKit/537.36 (KHTML, like Gecko) Brave Chrome/89.0.4389.188 Mobile Safari/537.366';
$cookie='ci_session=ce32d4c54c275279f01efb9b8333aa401ee37b5f;csrf_cookie_name=4a184df71969364a04568efe646fb38e;dom3ic8zudi28v8lr6fgphwffqoz0j6c=317f104a-95c5-4b68-816a-4bbb7830e960%3A1%3A1';
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
      echo " \033[1;97mPlease Wait \033[1;91m".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}

a:
$host="faucet.pk";
$url="https://faucet.pk/faucet";
$rev=get($url,$host);

$g = mt_rand(1,3);
$x1 = $g;
$bot1 = explode('\"' ,explode('rel=\"', $rev)[$x1])[0];
p:
$g = mt_rand(1,3);$x2 = $g;if($x2 == "$x1"){goto p;}else{$bot2 = explode('\"' ,explode('rel=\"', $rev)[$x2])[0];}
v:
$g = mt_rand(1,3);$x3 = $g;if($x3 == "$x1"){goto v;}if($x3 == "$x2"){goto v;}
$bot3 = explode('\"' ,explode('rel=\"', $rev)[$x3])[0];


$tim = explode('- 1;' ,explode('let wait =', $rev)[1])[0];
$csf = explode('">' ,explode('<input type="hidden" name="csrf_token_name" id="token" value="', $rev)[1])[0];
$tok = explode('">' ,explode('<input type="hidden" name="token" value="', $rev)[1])[0];
$lef = explode('<' ,explode('<h4 class="lh-1 mb-1">', $rev)[4])[0];
$red = explode('<' ,explode('<h4 class="lh-1 mb-1">', $rev)[1])[0];

if($red == "READY"){
}else{
for ($x=$tim;$x>0;$x--){
echo "\r                  \r";
echo "\r  \033[0;37mwait \033[0;37m[\033[0;33m".$x."\033[0;37m] \r";
sleep(1);
}
goto a;
}
$host="faucet.pk";
$login = "https://faucet.pk/faucet/verify";
$data = "antibotlinks=+$bot1+$bot2+$bot3&csrf_token_name=$csf&token=$tok&captcha=recaptchav2&g-recaptcha-response=";
$cc = post($login,$data,$host);
$da = explode('<' ,explode('<div class="alert text-center alert-danger"><i class="fas fa-exclamation-circle"></i> ', $cc)[1])[0];
$suc = explode("'," ,explode("text: '", $cc)[1])[0];
if($lef == "1/100"){
exit;
}
if($suc == ""){
//echo($da);
goto a;
}else{
echo" \033[1;97m[$lef] \033[1;92m$suc \n";
goto a;
}





