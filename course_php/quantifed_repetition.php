<?php
$pattern ='/\w+/';
$st = 'file07_2015.xls, doc04_2018.doc, document09_2020.pwt';

preg_match_all($pattern, $st, $matches);
$pat ='/ru(nn)ing/';
$str ='iam running';
preg_match_all($pat, $str, $m);

//anchor
$an = '/\A\w{3,4\Z/';
$stt ='man';
preg_match_all($an, $stt, $m1);


$streplace ='i to have go';
$newstr =preg_replace("/(to) (have)/","$2 $1" , $streplace);

var_dump($newstr);

?>