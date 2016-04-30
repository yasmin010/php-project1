<?php
 //$path = dirname(realpath(__FILE__)) .DIRECTORY_SEPARATOR .'session';
//session_save_path($path);
//session_start();
//$_SESSION['msg'] = 'WELCOME TO MY SESSION';
//$_SESSION['msg2'] = 'welcome 2';
//session_write_close();  to end sessions 
//$_SESSION['msg3'] = 'welcome 3';

//var_dump($_SESSION);
$key ='wycrypt0k3y02016';
mcrypt_encrypt(MYCRYPT_BLOWFISH, $key,'welcome to my cryptography sesstion', MCRYPT_MODE_ECB);



