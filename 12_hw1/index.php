<?php error_reporting(-1);

// 1
$hour = 60 * 60;
$day = $hour * 24;
$week = $day * 7;
echo "<p>In hour had {$hour} second </p>" . PHP_EOL . "<p>In day had {$day} second </p>" . PHP_EOL . "<p>In week had {$week} second </p>";

// 2

$q = 60;

var_dump($q *= 60);
var_dump($q *= 24);
var_dump($q *= 7);