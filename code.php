<?php
$p=array('ru'=>'https://site.com/ru', 'uk'=>'https://site.com/ru', 'en1'=>'https://site.com/en');
$hal = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
$l = 'en'; $min = 10000;
foreach($p as $k => $v){
	$t = strpos($hal, $k);
	if ((!is_bool($t))&($t<$min)) {$min = $t; $l = $v;}}
header($l);
