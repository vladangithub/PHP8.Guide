<?php error_reporting(-1);?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam autem consequuntur cum debitis dolor labore
    magni molestias officiis porro, possimus provident, reprehenderit rerum saepe sed, sint tempora? Facilis,
    necessitatibus.</p>

<?php

$nums = [1, 2, 3, 4, 5,];

foreach ($nums as $num) :
    echo "<h3>Begin conclusion a number!</h3>";
    echo "<p>$num</p>";
    echo "<h3>Finish conclusion a number!</h3>";

endforeach;

?>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi consequuntur, dicta, dolorum ea,

    <?php foreach ($nums as $num): ?>

    <?= "<p>$num</p>"; ?>

    <?php endforeach; ?>

    esse eum incidunt ipsa magni nam necessitatibus nulla officia perferendis ratione sapiente sequi soluta ullam!</p>


</body>
</html>


