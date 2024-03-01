<?php error_reporting(-1);
//
//$i = 1;
//while ($i <= 10) {
//    echo "$i<br/>";
//    $i++;
//}

//for ($i = 1; $i <= 21; $i++) {
//    echo "$i<br/>";
//}

//for ($i = 20; $i >= 1; --$i) {
//    echo "$i<br/>";
//}

//$year = 1900;
//
//echo "<select>";
//while ($year <= 2021) {
//    echo "<option value= '{$year}'>{$year}</option>";
//    $year++;
//}
//echo "</select>";

//echo "<select>";
//for ($year = 1980; $year <= 2024; $year++) {
//    echo "<option value= '{$year}'>{$year}</option>";
//}
//echo "<select>";

echo '<table border = "1" width="100%">';
for ($tr = 1; $tr < 10; ) {
    echo "<tr>";
    for ($td = 1; $td < 10; $td++) {
        echo "<td> $td * $tr =" . $td * $tr . "</td>";
    }
    echo "<tr>";
    $tr++;
}
echo '</table>';

















