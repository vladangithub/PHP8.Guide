<?php error_reporting(-1);


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

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

$car = [
    'brand' => 'Toyota',
    'model' => 'Camry',
    'year' => 2021,
    'speed' => 220,
    'wheels' => 4,
];

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];


// * count - Подсчитывает количество элементов массива или чего-либо в объекте

//echo count($goods, 1);

// * array_count_values — Подсчитывает количество всех значений массива
//debug(array_count_values($nums));


// * array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс

//var_dump(array_key_exists('year', $car));

// * in_array — Проверяет, присутствует ли в массиве значение

//var_dump(in_array(2023, $car));

// * array_search — Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи

//var_dump(array_search(7, $nums));

// * array_keys — Возвращает все или некоторое подмножество ключей массива

//debug(array_change_key_case($car));

// * array_values — Выбирает все значения массива
//
//debug(array_values($car));

// * array_unique — Убирает повторяющиеся значения из массива
//
//debug(array_unique($nums));


function odd($var)
{
    return $var % 2;
};


function even($var)
{
    return !($var % 2);
};

//debug(array_filter($nums, "odd"));

//debug(array_filter($nums, "even"));

debug(array_filter($nums, function ($var) {
    return ($var % 2);
}));










































