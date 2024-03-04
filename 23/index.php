<?php error_reporting(-1);
/*
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

for ($i = 1; $i < 10; $i += 2) {
    echo $nums[$i] . '</br>';
}

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == false) {
        echo $i . '<br/>';
    }
};

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == true) {
        echo $i . '<br/>';
    }
};

for ($i = 0; $i < 10; $i++) {
    if ($nums[$i] % 2) {
        continue;
    }
    echo $i . '<br/>';
};
*/

$goods = [
    [
        "title" => 'Nokia',
        "price" => 121,
        "quantity" =>  11,
    ],
    [
        "title" => 'Sony',
        "price" => 120,
        "quantity" =>  12,
    ],
    [
        "title" => 'LG',
        "price" => 119,
        "quantity" =>  15,
    ],
];

echo '<pre>' . print_r($goods, 1) . '</pre>';

//for ($i = 0; $i < 3; $i++) {
////    if ($goods[$i]['price'] < 120) {
////        $goods[$i]['price'] += 15;
////    }
//    $goods[$i]['price'] = ($goods[$i]['price'] < 120) ? $goods[$i]['price'] += 15 : $goods[$i]['price'];
//
//}
foreach ($goods as &$good) {
    if ($good['price'] < 120) {
        $good['price'] += 15;
    }
};
echo '<pre>' . print_r($goods, 1) . '</pre>';





























