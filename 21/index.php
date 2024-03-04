<?php error_reporting(-1);

$arr1 = array();
//$arr2 = [];

//var_dump($arr1, $arr2);

$arr1 = [
    1 => 'Ivanov',
    3 => 'Petrov',
    ];

//var_dump($arr1);

$arr1[5] = 'Siderov';
$arr1[] = 'Bobbb';
$arr1[] = 10;
$arr1[] = 7.8;

echo '<pre>' . print_r($arr1, 1) . '</pre>';

echo $arr1[6];

$goods = [
   [
       "title" => 'Nokia',
       "price" => 100,
       "quantity" =>  10,
   ],
   [
       "title" => 'Sony',
       "price" => 150,
       "quantity" =>  1000,
   ],
];

//echo '<pre>' . print_r($goods, 1) . '</pre>';
//echo $goods[1]['price'];
//echo $goods[0]['price'];

//$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

for ($i = 1; $i < 11; $i++) {
    $nums[] = $i;
}
echo '<pre>' . print_r($nums, 1) . '</pre>';














































