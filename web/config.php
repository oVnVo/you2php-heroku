<?php
$gl=(isset($_COOKIE['gl']) && $_COOKIE['gl'])?$_COOKIE['gl']:'HK';
define('ROOT_PART', Root_part());
define('APIKEY', 'AIzaSyBqBDz6-Byy5XQ4msY0UOocNPGTfFB_M1E');//这里改成您的api key
define('GJ_CODE', $gl);
define('SITE_NAME', 'Y');//网站名字
define('TITLENAME', 'Y');//网站名字
define('EN2DEKEY', 'A&KU$FR#%E&');//一个随机字符串，加解密KEY
define('EMAIL', '123@123.com');//邮箱
?>
