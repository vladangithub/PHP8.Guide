<?php error_reporting(-1);

//test();
//
//function test()
//{
//    echo '<p>Hello</p>';
//};
//
//test();
//
//test();

//function hello($name = 'Bobbb')
//{
//    echo "<p>Hello, {$name}</p>";
//};
//
////$name = 'Bobbb';
////hello('Bobbb');
//hello('Jackk');


//function sum($w, $q = 1, $e = 2,)
//{
//    echo ($q + $w) * $e;
//};
//
//sum(1, 2);

//$q = 5;
//
//function test($q)
//{
//    global $q;
//    $q += 10;
//    var_dump($q);
//};
//
//var_dump($q);
//test($q);
//var_dump($q);

function test(&$num)
{
    $num +=10;
}

$num = 20;
test($num);
var_dump($num);


































