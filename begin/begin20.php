<?php
//Tekislikdagi berilgan ikki nuqta (x1 y1), (x 2, y2 ), (x3  , y3 )
//orasidagi masofa topilsin.

$x1 = 3;
$y1 = 4;
$x2 = 10;
$y2 = 6;

$m = sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));
echo $m;
