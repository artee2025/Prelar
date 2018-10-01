<?php
$p = array('ru' => 'https://site.com/ru', 'uk' => 'https://site.com/ru', 'en' => 'https://site.com/en');
$l = 'https://site.com/en';
$hal = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
$min = 10000;
foreach ($p as $k => $v) {
    $t = strpos($hal, $k);
    if ((!is_bool($t)) & ($t < $min)) {
        $min = $t;
        $l = $v;}
}
header('Location: ' . $l);
die();
