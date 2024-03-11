<?php
error_reporting(-1);

/* 1. Напишите функцию get_count($arr), принимающую параметром массив, которая будет возвращать кол-во элементов, полученного массива. Примеры массивов для теста функции:
$arr = [1,2,3,4,5,6,7,8,9,10,];
$goods = [
        [
            'title' => 'Nokia',
            'price' => '100',
            'qty' => '10',
        ],
        [
            'title' => 'Sony',
            'price' => '120',
            'qty' => '7',
        ],
        [
            'title' => 'LG',
            'price' => '105',
            'qty' => '15',
        ],
    ];
*/

//$arr = [1,2,3,4,5,6,7,8,9,10,];
//
//function get_count(array $arr):int
//{
//    $cnt = 0;
//    foreach ($arr as $item) {
//        $cnt+=1;
//    }
//    return $cnt;
//}
//
////echo get_count([1,2,3,4,5,6,7,8,9,10,]);
//
//$goods = [
//    [
//        'title' => 'Nokia',
//        'price' => '100',
//        'qty' => '10',
//    ],
//    [
//        'title' => 'Sony',
//        'price' => '120',
//        'qty' => '7',
//    ],
//    [
//        'title' => 'LG',
//        'price' => '105',
//        'qty' => '15',
//    ],
//];
//
//echo get_count($goods);

// 2. Напишите функцию, принимающую 2 параметра, которая выведет таблицу умножения по полученным множителям


echo '<table border = "1" width="100%">';
$tr = 1;
while ($tr < 10) {
    echo "<tr>";
    $td = 1;
    while ($td < 10) {
        echo "<td> $td * $tr =" . $td * $tr . "</td>";
        $td++;
    }
    echo "<tr>";
    $tr++;
}
echo '</table>';

















































