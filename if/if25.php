<?php
//X haqiqiy soni berilgan. Quyidagi funksiya hisoblansin. f ( x ) 2 x ,agar x< -2  yoki  x> 2;-3x, aks  xolda
$x = readline();

if ($x<-2 || $x>2){
    $res = 2*$x;
}
else{
    $res = 3*$x;
}
echo $res;