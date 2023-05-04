<?php

//Aylananing diametri  d  berilgan . Uning uzunligi  aniqlansin . L = π d ; π = 3,15

$d = isset($_POST['d']) ? $_POST['d'] : '';
$l = M_PI*$d;
echo $l;






?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="">
        <input type="text" name="d">
        <button type="submit">OK</button>
    </label>
</form>
<h3>
    <?=$l?>
</h3>
</body>
</html>