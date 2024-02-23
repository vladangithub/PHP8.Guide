<?php

$title = 'lesson 4+';
//$winnie_the_pooh = "Hello I'm Winnie. \"Quoted string\"";

error_reporting(-1);

$fruit = 'orange';
$winnie_the_pooh = "Hello I am Winnie. I have 2 {$fruit}s";
$winnie_the_pooh_one_quotes = 'Hello I am Winnie. I have 1 $fruit';

$var = 'Test 1';
$Var = 'Test 2';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<?php $title = 'Less Var' ?>
<h1> <?php echo $title ?> </h1>
<p> <?= $winnie_the_pooh?> </p>
<p> <?= $winnie_the_pooh_one_quotes?> </p>

<?php

var_dump($var);
var_dump($Var);
var_dump('$');
var_dump('Hello', 'Привет');


?>


</body>
</html>