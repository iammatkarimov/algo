<?php
//X haqiqiy soni berilgan. Quyidagi funksiya hisoblansin. f( x ) =-x  ,agar   x≤0 ;, x^(2   ),   agar  0<x<2 ;4,   agar  x≥2 ;
$x = readline();

if ($x<=0){
    $res = -$x;
}
elseif($x>0 && $x<2){
    $res = $x*$x;
}
else {
    $res=4;
}
echo $res;