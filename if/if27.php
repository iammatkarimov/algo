<?php
//X haqiqiy soni berilgan. Quyidagi funksiya hisoblansin
//f ( x ) = (0 ,agar   x≤0; 1,agar  x ∈[0,1)[2,3); 1 agar x ∈[1,2)[3,4))
$x = readline();

if ($x<0){
    $res = 0;
}
elseif(floor($x)%2==0){
    $res = 1;
}
else{
    $res=-1;
}
echo $res;