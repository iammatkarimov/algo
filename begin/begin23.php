<?php
//A, V va S sonlari berilgan. A ni qiymati V ga, V ni qiymati S ga va S ni qiymati A ga almashtirilsin.
// A, V va S ning yangi qiymatilari ekranga chiqarilsin.
$a = 1;
$b = 2;
$c = 3;

$d = $a;
$a = $b;
$b = $c;
$c = $d;

echo $a." ";
echo $b." ";
echo $c." ";
