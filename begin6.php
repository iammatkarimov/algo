<?php

$a = isset($_POST['a']) ? $_POST['a'] : '';
$b = isset($_POST['b']) ? $_POST['b'] : '';
$c = isset($_POST['c']) ? $_POST['c'] : '';
$v = $a*$b*$c;
$s= 2*($a*$b+$b*$c+$a*$c);


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
        <input type="text" name="b">
        <input type="text" name="c">
        <button type="submit">OK</button>
    </label>
</form>
<h3>
    <?= $v ?>
</h3>
<h3>
    <?=$s?>
</h3>
</body>
</html>