<?php error_reporting(-1);

$bool = true;
$bool2 = false;

//var_dump($bool, $bool2);
//echo $bool2;
//var_dump((boolean)0, (bool)'', (bool)123, (bool)'Hello');

//integer

$int1 = 0;
$int2 = 1;

//var_dump($int1,$int2);
//var_dump(PHP_INT_MAX);
//var_dump(9223372036854775809);

var_dump("10");#числовая строка
var_dump("10Hello");// префиксная числовая строка
var_dump((integer)"10Hello");//
var_dump((int)"Hello10");//нечисловая строка
var_dump((int)"Hello?!");
var_dump((int)"Hello10");//нечисловая строка
var_dump((int)"Hello?!");