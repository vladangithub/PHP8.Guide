<?php error_reporting(-1);

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

//$i = 0;
//while ($i < 10) {
//    echo $nums[$i] . '</br>';
//    $i++;
//}

//for ($i = 0; $i < 10; $i++) {
//    echo $nums[$i] . '</br>';
//};

//foreach ($nums as $item) {
//    echo $item . '</br>';
//};

//foreach ($nums as $key => $value) {
//    echo  "Key: $key, Value: $value <br> ";
//}


$goods = [
    [
        "title" => 'Nokia',
        "price" => 101,
        "quantity" =>  11,
    ],
    [
        "title" => 'Sony',
        "price" => 102,
        "quantity" =>  12,
    ],
    [
        "title" => 'LG',
        "price" => 103,
        "quantity" =>  15,
    ],
];

echo '<pre>' . print_r($goods, 1) . '</pre>';

/*for ($i = 0; $i < 3; $i++) {
    echo "Наименование: {$goods[$i]['title']} </br> ";
    echo "Цена товара: {$goods[$i]['price']} </br> ";
    echo "Количество: {$goods[$i]['quantity']} </br> ";
    echo '<hr>';
}

foreach ($goods as $good) {
    echo "Наименование: {$good['title']} </br> ";
    echo "Цена товара: {$good['price']} </br> ";
    echo "Количество: {$good['quantity']} </br> ";
    echo '<hr>';
}*/

/*for ($i = 0; $i < 3; $i++) {
//    $goods[$i]['total'] = $goods[$i]['price'] * $goods[$i]['quantity'];
    $goods[$i]['price'] *= 2;
};*/

foreach ($goods as &$good) {
    $good['price'] *= 2;
};

echo '<pre>' . print_r($goods, 1) . '</pre>';




















