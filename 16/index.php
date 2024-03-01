<?php error_reporting(-1);

//$i = 1;
//while ($i <= 5) {
//    echo "$i<br/>";
//    $i++;
//}

//$i = 10;
//while (--$i) {
//    echo "$i<br/>";
//}

//$i = 5;
//while ($i--) {
//    echo "$i<br/>";
//}


//$i = 5;
//while ($i--):
//    echo "$i<br/>";
//endwhile;

//echo 'Таблица умножения' . PHP_EOL;
//
//$i = 0;
//define('MAX_NUMBER', 10);
//
//while ($i < MAX_NUMBER) {
//    $i ++;
//    $j = 0;
//    while ($j < MAX_NUMBER) {
//        $j ++;
//        echo sprintf('%5d', $i * $j);
//    }
//    echo PHP_EOL;
//}


//echo 'Таблица умножения' . PHP_EOL;
//
//$i = 0;
//define('MAX_NUMBER', 10);
//
//while ($i < MAX_NUMBER) {
//    $i ++;
//    $j = 0;
//    while ($j < MAX_NUMBER) {
//        $j ++;
//        echo sprintf('%3d ', $i * $j);
//    }
//    echo PHP_EOL;
//}

# 1.1 Homework
//$year = 1900;
//
//echo "<select>";
//while ($year <= 2021) {
//    echo "<option value= '{$year}'>{$year}</option>";
//    $year++;
//}
//echo "</select>";

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













