<?php
/***
Date		:	2020-09-27 Sunday 18:37:21
Ipaddress		:	103.19.99.51
City		:	GiaLai
Country		:	VN
Region		:	Gialai
Organization		:	Australian Academic and Research Network
User-Agent		:	Mozilla/5.0 (Linux; Android 10; SamSung Galaxy S20 Ultra) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.81 Mobile Safari/537.36
***/
error_reporting(0);
session_start();
//color
$res="\033[0m";
$red="\033[1;31m";
$red ="\e[1;31m";
$gre = "\e[1;32m";
$green="\033[1;32m";
$cya="\033[1;106m";
$yellow="\033[1;33m";
$yel ="\e[1;33m";
$blue="\033[1;34m";
$white= "\033[1;37m";
$whi ="\e[1;37m";
$purple="\033[1;35m";
$cyan="\033[1;36m";
$banner="\r
\e[1;37m|================[LIÊN HỆ HỖ TRỢ]================|
|\e[1;32mFaceBook :                  Nguyễn Trường Thành \e[1;37m|
|                                                |
|\e[1;32mZalo :                           0374222721     \e[1;37m|
\e[1;37m|================================================|
\033[1;35m
           Trời Xanh Mây Trắng Nắng Vàng
      Không Liên Quan Lắm Nhưng Mà Đang Cay   
\n";  
//config
echo "\n"
echo $yellow."NHẬP API KEY: $green";
$apikey=trim(fgets(STDIN));
if ($apikey == "Thanh Rose")
{
sleep(1);
echo $green."KEY ACTIVE";
sleep(2);
} 
else{
sleep(1);
echo $red."";
exit("️BẠN ĐÃ NHẬP SAI KEY VUI LÒNG LIÊN HỆ QUA ADMIN ĐỂ MUA KEY NHA 😂😂\n");}
sleep(2);
@system('clear');
banner();
  echo $gre."     CHECK COOKIE FACEBOOK TRƯỚC KHI VÀO TOOL\n\n";
  echo $whi."Nhập Cookie: $gre";
$cookie = trim(fgets(STDIN));
$source = facebook("https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed", $cookie);
$token=explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $source)[1])[0];
$user=api("https://graph.facebook.com/me?access_token=".$token);
@banner();
if ($user['id']==true){
  $check_api=api("https://graph.facebook.com/1930832833720684/likes?fields=total_count&access_token=".token);
  echo $whi."-------------------[THÀNH CÔNG]-------------------";
  echo $whi."● ID: ".$gre.$user['id']."\n";
  echo $whi."● Tên Tài Khoản: ".$gre.$user['name']."\n";
  echo $whi."● Trạng Thái:$gre Cookie Hoạt Động\n";
  echo $whi."--------------------[LOAD TOOL]-------------------";
    }
 else {
  echo $whi."--------------------[THẤT BẠI]--------------------";
  echo $whi."● ID:$red None\n";
  echo $whi."● Tên Tài Khoản:$red None\n";
  echo $whi."● Trạng Thái:$red Cookie Die\n";
  echo $whi."--------------------[OUT TOOL]--------------------";
  echo "\n\n";
  {exit($red."VUI LÒNG LẤY LẠI COOKIE MỚI RỒI QUAY LẠI TOOLS\n");}
}
function facebook($url, $cookie) {
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "Accept-Charset: ISO-9-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "Accept-Language: en-us,en;q=0.5";
  $ch = @curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Linux; Android 10; SM-J600G)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.81 Mobile Safari/537.36',
    CURLOPT_ENCODING => '',
    CURLOPT_COOKIE => $cookie,
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_SSL_VERIFYHOST => FALSE,
    CURLOPT_SSL_VERIFYPEER => FALSE,
    CURLOPT_TIMEOUT => 60,
    CURLOPT_CONNECTTIMEOUT => 60,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_HTTPHEADER => array(
    'Expect:'
    )
  ));
$page = curl_exec($ch);
  curl_close($ch);
  return $page;
}
function api($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  $source = json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $source;
}
function banner() {
}
date_default_timezone_set("Asia/Ho_Chi_Minh");
echo "\n\n";
echo $red."Thông Báo:$cyan 02/10/2020$green Bảo Trì Chức Năng Like Fanpage Và Comment Post...\n";
sleep(5);
{
@system('clear');
echo $banner;
$listnv = [];
echo $white."Tài Khoản : $green";
$_SESSION["username"]=trim(fgets(STDIN));
echo $white."Mật Khẩu : $green";
$_SESSION['password']=trim(fgets(STDIN));
echo $white."Cookie FaceBook: $green";
$cookie=trim(fgets(STDIN));
echo"$res";
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
$login =array('username' => $_SESSION['username'],'password' => $_SESSION['password'],'submit' => ' Đăng Nhập');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$source=curl_exec($ch);
curl_close($ch);
if ($source != 1 && $source != ''){
@system('clear');
        echo $banner;
	echo $green."                ĐĂNG NHẬP THÀNH CÔNG \n";
	$user = $_SESSION["username"];
	echo $white."● NHIỆM VỤ FOLLOW (H/L): $green";
	 $follow=trim(fgets(STDIN));
if ($follow == "H"){
		array_push($listnv,'sub');
		echo $red."● DELAY FOLLOW: $green";
		$_SESSION['delaysub']=trim(fgets(STDIN));
	}
	echo $white."● NHIỆM VỤ LIKE FANPAGE (H/L):$red ERROR\n";
	$fanpage=trim(fgets());
if ($fanpage == "H"){
		array_push($listnv,'page');
		echo $red."● DELAY LIKE FANPAGE: $green";	
		$_SESSION['delaypage']=trim(fgets(STDIN));
	}
	echo $white."● NHIỆM VỤ COMMENT POST (H/L):$red ERROR\n";
   $cmt=trim(fgets());
if ($cmt == "H"){
		array_push($listnv,'cmt');
		echo $red."● DELAY COMMENT POST: $green";
		$_SESSION['delaycmt']=trim(fgets(STDIN));
	}
	echo $white."● NHIỆM VỤ LIKE POST (H/L: $green";
	$likepost=trim(fgets(STDIN));
if ($likepost == "H"){
		array_push($listnv,'like');
		echo $red."● DELAY LIKE POST: $green";
		$_SESSION['delaylike']=trim(fgets(STDIN));
	}
	echo $white."● NHIỆM VỤ CẢM XÚC (H/L): $green";
	$camxuc=trim(fgets(STDIN));
if ($camxuc == "H"){
		array_push($listnv,'cx');
		echo $red."● DELAY CẢM XÚC: $green";
		$_SESSION['delaycx']=trim(fgets(STDIN));
	}
	if (count($listnv) == 0){exit($red."Vui Lòng Chọn Ít Nhất 1 Chế Độ Nhiệm Vụ..!");}
	echo $white."Delay Chống Block : $green";
	$_SESSION['j']=trim(fgets(STDIN));
 echo $white."Số Vòng Chạy : $green";
	$_SESSION['i']=trim(fgets(STDIN));
}else{
	exit($red."Đăng Nhập Thất Bại, Kiểm Tra Lại Tài Khoản Mật Khẩu..!");
}
#get_token
@system('clear');
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
	$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}else{
	exit($red."Cookie Die Vui Lòng Lấy Lại Cookie Mới..!");
}
$h = datnick($user,$idfb);
$xu =
file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user);
echo $cya."\e[1;31m● Bản Quyền Tools Thuộc Về | Nguyễn Trường Thành ●\033[0m\n\n";
echo $white."──────────────[THÔNG TIN TÀI KHOÀN]───────────────\n";
echo $white."● TÀI KHOẢN TRAODOISUB: ".$green.$user."\n";
echo $white."● CẤU HÌNH TRAODOISUB: ".$green.$idfb."\n";
echo $white."● XU ĐANG CÓ: ".$green.$xu." XU\n";
echo $white."──────────────[THÔNG TIN NHIỆM VỤ]────────────────\n";
echo $white."● DELAY FOLLOW: ".$green.$_SESSION['delaysub']." GIÂY\n";
echo $white."● DELAY LIKE FANPAGE: ".$red.$_SESSION['delaypage']." ERROR\n";
echo $white."● DELAY LIKE POST: ".$green.$_SESSION['delaylike']." GIÂY\n";
echo $white."● DELAY CẢM XÚC: ".$green.$_SESSION['delaycx']." GIÂY\n";
echo $white."● DELAY COMMENT: ".$red.$_SESSION['delaycmt']." ERROR\n";
echo $white."● SỐ VÒNG CHẠY: ".$green.$_SESSION['i']." VÒNG\n";
echo $white."● DELAY CHỐNG BLOCK: ".$green.$_SESSION['j']." GIÂY\n";
echo $white."──────────────────────────────────────────────────\n";
if ($h == '1'){
		$i=1;
		while ($i <= $_SESSION['i']){
			$rand = $listnv[array_rand($listnv,1)];
			if ($rand == 'like'){
				$list = getnv('like',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết Nhiệm Vụ!\n"; $i++; continue;}
				foreach ($list  as $id) {
					$g = like($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."● Đã Bị Block Tính Năng\n");
					}
					$s = nhantien('like',$id);
					if ($s == 2){$stt = $stt + 1;$xu = $xu + 200;
echo $white."[$stt]\e[1;31m|";
echo $cyan.date("H:i");
echo "\e[1;31m|\e[1;32mLIKE\e[1;31m|\e[1;37m".$id."\e[1;31m|\e[1;32m+200\e[1;31m|".$white.$xu;}
else{$stt = $stt +1;
echo $red."[$stt]\e[1;31m|";
echo $cyan.date("H:i");
echo $red."\e[1;31m|LIKE\e[1;31m|\e[1;37m".$id."\e[1;31m|\e[1;31mNONE\e[1;31m|".$white.$xu;}
echo "\n";
					sleep($_SESSION['delaylike']);
				}
			}else if($rand == 'sub'){
				$list = getnv('follow',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết Nhiệm Vụ\n"; $i++; continue;}
				foreach ($list  as $id) {
					$g = follow($access_token,$id,$cookie);
				if ($g->{'error'}->{'code'} == 368){
						exit($red."● Đã Bị Block Tính Năng\n");
					}
					$s = nhantien('sub',$id);
          if ($s == 2){$stt = $stt + 1;$xu = $xu + 600;
echo $white."[$stt]\e[1;31m|";
echo $cyan.date("H:i");
echo "\e[1;31m|\e[1;32mFOLLOW\e[1;31m|\e[1;37m".$id."\e[1;31m|\e[1;32m+600\e[1;31m|".$white.$xu;}
else{$stt = $stt + 1;
echo $red."[$stt]\e[1;31m|";
echo $cyan.date("H:i");
echo $red."\e[1;31m|FOLLOW\e[1;31m|\e[1;37m".$id."\e[1;31m|\e[1;31mNONE\e[1;31m|".$white.$xu;}
echo "\n";
					sleep($_SESSION['delaysub']);
				}
			}else if($rand == 'page'){
				$list = getnv('likepage',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết Nhiệm Vụ!\n"; $i++; continue;}
   echo "\n";
echo $white."SỐ NHIỆM VỤ LIKE FANPAGE ĐÃ TÌM THẤY: ".$green.$check."\n";
				foreach ($list  as $id) {
					page($id,$cookie);
					$s = nhantien('page',$id);
					if ($s == 2){$stt = $stt + 1;$xu = $xu + 600;
 echo $white."[$stt]\e[0;31m|";
echo $cyan.date("H:i");
echo "\e[0;31m|\e[0;32mPAGE\e[0;31m|\e[0;37m".$id."\e[0;31m|\e[0;32m+600\e[0;31m|".$white.$xu;}
else{$stt = $stt + 1;
echo $red."[$stt]\e[0;31m|";
echo $cyan.date("H:i");
echo $red."\e[0;31m|PAGE\e[0;31m|\e[0;37m".$id."\e[0;31m|\e[0;31mNONE\e[0;31m|".$white.$xu;}
echo "\n";
					sleep($_SESSION['delaypage']);
				}
			}else if($rand == 'cx'){
				$list = getnv('camxuc',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\n"; $i++; continue;}
				foreach ($list  as $id => $key) {
					$id = $key->{'id'};
					$type = $key->{'type'};
					camxuc($id,$type,$cookie);
					$s = nhantiencx($type,$id);
					if ($s == 2){$stt = $stt +1;$xu = $xu + 400;
 echo $white."[$stt]\e[1;31m|";
echo $cyan.date("H:i");
echo "\e[1;31m|\e[1;32m$type\e[1;31m|\e[1;37m".$id."\e[1;31m|\e[1;32m+400\e[1;31m|".$white.$xu;}
else{$stt = $stt + 1;
echo $red."[$stt]\e[1;31m|";
echo $cyan.date("H:i");
echo $red."\e[1;31m|$type\e[1;31m|\e[1;37m".$id."\e[1;31m|\e[1;31mNONE\e[1;31m|".$white.$xu;}
					echo "\n";
					sleep($_SESSION['delaycx']);
				}
			}
			else{
				$list = getnv('cmt',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết Nhiệm Vụ\n"; $i++; continue;}
				foreach ($list  as $id => $key) {
					$uid = $key->{'id'};
					$msg = $key->{'nd'};
					$g = cmt($access_token,$uid,$cookie,$msg);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."● Đã Bị Block Tính Năng\n");
					}
					$s = nhantien('cmt',$uid);
					if ($s == 2){$stt = $stt + 1;$xu = $xu + 600;
echo $white."[$stt]\e[1;31m|";
echo $cyan.date("H:i");
echo "\e[1;31m|\e[1;32mCMT\e[1;31m|\e[1;37m".$uid."\e[1;31m|\e[1;32m+600\e[1;31m|".$white.$xu;}
else{$stt = $stt + 1;
echo $red."[$stt]\e[1;31m|";
echo $cyan.date("H:i");
echo $red."\e[1;31m|CMT\e[1;31m|\e[1;37m".$uid."\e[1;31m|\e[1;31mNONE\e[1;31m|".$white.$xu;}
echo "\n";
					sleep($_SESSION['delaycmt']);
				}
			}
	$delay=$_SESSION['j'];
for ($i=0; $i < $delay+1; $i++){
  sleep(1);
}
		}
}else{exit($red."Cấu hình thất bại, vui lòng thêm id: $id vào cấu hình");}
}else{exit($red."Cookie die!!");}
}
function follow($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function like($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function cmt($access_token,$id,$cookie,$msg){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function page($id,$cookie){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if (explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0]){
		$get = explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0];
		$link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$id.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
	}	
	curl_close($ch);

}
function camxuc($id,$type,$cookie){
	$ch = curl_init();
	if(strpos($id,'_')){
		$uid = explode('_',$id, 2);
		$id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
	}else{
		$id2 = $id;
	}
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else{
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);	

	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);
}
function getnv($loai,$user){
	$list = file_get_contents('https://traodoisub.com/scr/api_job.php?chucnang='.$loai.'&user='.$user);
	return json_decode($list);
}
function datnick($user,$id){
	$xxx = file_get_contents('https://traodoisub.com/scr/api_dat.php?user='.$user.'&idfb='.$id);
	return $xxx;
}
function nhantien($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantien'.$loai.'.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}
function nhantiencx($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantiencx.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id, 'loaicx' => $loai);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}

?>
