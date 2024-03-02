<?php error_reporting(-1);

//
//$i = 1;
//while ($i < 10) {
//    if($i % 2) {
//        $i++;
//        continue;
//    }
//    echo "{$i}<br>";
//    $i++;
//}


//var_dump(4 % 2);

//for ($i = 1; $i <= 20; ++$i) {
//    if($i % 2 != 0) {
//        continue;
//    }
//    echo "{$i}<br />";
//}

//for ($i = 1; $i <= 20; ++$i) {
//    if(!($i % 2)) {
//        continue;
//    }
//    echo "{$i}<br />";
//}

//echo '<table border = "1" width="100%">';
//for ($tr = 1; $tr < 10; ) {
//    echo "<tr>";
//    for ($td = 1; $td < 10; $td++) {
//        if ($td == 5) {
//            continue;
//        }
//        echo "<td>$td</td>";
//    }
//    echo "<tr>";
//    $tr++;
//}
//echo '</table>';

$i = 1;
while (true) {
    echo "$i<br />";
    if ($i == 20) {
        echo "Number is found";
        break;
    }
    $i++;
}























