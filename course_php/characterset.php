<?php
$pattern ='/fl[oa]t/';
$str ='my flat rent is somehow high . the word flot doesnt exist';

	preg_match_all($pattern, $str ,$found);
	$pattern1 ='/[a-z]n/';
	$st ='man ,men , mon, min ,myn';

	preg_match_all($pattern1, $st, $match);

	$patr ='/e[^oeuia]t/';
	$s ='eat , eit, eot , eut, ebt';
	preg_match_all($patr, $s, $match1);

var_dump($match1);

?>