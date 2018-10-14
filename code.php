<?php
$p = array('en' => 'http://artee.io/en', 'ru' => 'http://artee.io/ru'); // list of site versions
$l = 'http://artee.io/?deflang'; // default site version when there are no suitable versions for the user's preferred language
$hal = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
$min = 10000;
// search for the most preferred language for which there is a version of the site
foreach ($p as $k => $v) {
    $t = strpos($hal, $k);
    if ((!is_bool($t)) & ($t < $min)) {
        $min = $t;
        $l = $v;}
}

header('Location: ' . $l); // redirect
die();