<?php
//A, V, S koeffisentlari berilgan, Ax2+Bx+C = 0 kvadrat tenglamaning
//diskriminanti noldan katta bo'lsa uning yechimlarini aniqlaydigan programma tuzilsin.
//(A≠0 )    x1,2 =( -B ± √D)/2a  , D = B 2 – 4 A C

$a = 1;
$b = 4;
$c = 4;

$d = sqrt(pow($b,2)-4*$a*$c);
if ($d>0){
    $x1 =(-$b+$d)/2*$a;
    $x2 =(-$b-$d)/2*$a;
    echo $x1." ";
    echo $x2." ";
}
elseif ($d==0){
    $x = -$b/2*$a;
    echo $x;
}
else{
    echo "bo'sh to'plam";
}