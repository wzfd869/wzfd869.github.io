* $obj = new class_guest_info;

* $obj->GetLang();//获取访客语言：简体中文、繁體中文、English

* $obj->GetBrowser();//获取访客浏览器：MSIE、Firefox、Chrome、Safari、Opera、Other

* $obj->GetOS();//获取访客操作系统：Windows、MAC、Linux、Unix、BSD、Other

*$obj->GetIP();//获取访客IP地址

*/

class class_guest_info{

function GetLang() {

$Lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);

//使用substr()截取字符串，从 0 位开始，截取4个字符

if (preg_match('/zh-c/i',$Lang)) {

//preg_match()正则表达式匹配函数

$Lang = '简体中文';

}

elseif (preg_match('/zh/i',$Lang)) {

$Lang = '繁體中文';

}

else {

$Lang = 'English';

}

return $Lang;

}

function GetBrowser() {

$Browser = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/MSIE/i',$Browser)) {

$Browser = 'MSIE';

}

elseif (preg_match('/Firefox/i',$Browser)) {

$Browser = 'Firefox';

}

elseif (preg_match('/Chrome/i',$Browser)) {

$Browser = 'Chrome';

}

elseif (preg_match('/Safari/i',$Browser)) {

$Browser = 'Safari';

}

elseif (preg_match('/Opera/i',$Browser)) {

$Browser = 'Opera';

}

else {

$Browser = 'Other}

elseif (preg_match('/linux/i',$OS)) {

$OS = 'Linux';

}

elseif (preg_match('/unix/i',$OS)) {

$OS = 'Unix';

}

elseif (preg_match('/bsd/i',$OS)) {

$OS = 'BSD';

}

else {

$OS = 'Other';

}

return $OS;

}

function GetIP() {

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

//如果变量是非空或非零的值，则 empty()返回 FALSE。

$IP = explode(',',$_SERVER['HTTP_CLIENT_IP']);

}

elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

$IP = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);

}

elseif (!empty($_SERVER['REMOTE_ADDR'])) {

$IP = explode(',',$_SERVER['REMOTE_ADDR']);

}

else {

$IP[0] = 'None';

}

return $IP[0];

}

}

?>

