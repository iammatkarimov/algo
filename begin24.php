<?php
//A, V va S sonlari berilgan. A ni qiymati S ga, S ni qiymati V ga va V ni qiymati A ga almashtirilsin.
// A, V va S ning yangi qiymatilari ekranga chiqarilsin.
$a =10;
$b =20;
$c =30;

$d = $a;
$a = $c;
$c = $b;
$b=$d;

echo $a." ";
echo $b." ";
echo $c." ";
