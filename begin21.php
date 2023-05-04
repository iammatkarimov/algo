<?php
//Uchburchakning uchtatomoni uchlari koordinatlari berilgan ikki nuqta orasidagi masofani topish Begin20 da berilgan.
// Uchburchakning   yuzasini va  perimatrini toping.
$a1 = -10;
$a2 = 2;

$b1 = 3;
$b2 = 5;

$c1 = 7;
$c2 = 10;

$a = sqrt(pow($a1-$b1,2)+pow($a2-$b2,2));
$b = sqrt(pow($b1-$c1,2)+pow($b2-$c2,2));
$c = sqrt(pow($a1-$c1,2)+pow($a2-$c2,2));

$p = $a+$b+$c;
$p2 = $p/2;
$s = sqrt($p2*($p2-$a)*($p2-$b)*($p2-$c));

echo $p." ";
echo $s." ";