<?php
//X haqiqiy soni berilgan. Quyidagi funksiya hisoblansin. f (x) = {2 sinx   agar   x>0 , x-6    agar  x ≤0)
$x=readline();
if ($x>0){
   $res =  2*sin($x);
}
elseif ($x<=0){
   $res = $x-6;
}
echo $res;