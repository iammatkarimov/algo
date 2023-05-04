<?php
//Kubning yon tomoni a berilgan. Uning hajmim V=a 3   va to’la sirti   S= 6 a aniqlansin.
$a = isset($_POST['a']) ? $_POST['a'] : '';
$v = pow($a,3);
$s = 6*$a;
echo $v;
echo $s;






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
        <input type="text" name="a">
        <button type="submit">OK</button>
    </label>
</form>
<h3>
    <?=$v?>
</h3>
<h3>
    <?=$s?>
</h3>
</body>
</html>