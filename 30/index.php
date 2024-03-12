<?php error_reporting(-1);

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];

echo count($nums);

function user_count($arr)
{
    $cnt = 0;
    foreach ($arr as $item) {
        $cnt++;
    }
    return $cnt;
}

echo user_count($nums);




































