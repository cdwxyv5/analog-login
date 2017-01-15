<?php
require_once('snoopy.php');
    $url='http://221.233.24.27:8080/verifycode.aspx';
    $snoopy=new Snoopy;
    $snoopy->get($url);
    $captcha_cookie=$snoopy->res_cookie;
    $captcha_content=$snoopy->results;
    //ob_clean();
    echo $captcha_content;
    $fp=fopen('cookie.txt','w');
    fwrite($fp, $captcha_cookie);
    fclose($fp);
?>
