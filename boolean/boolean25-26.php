<?php
//x, y sonlar berilgan. Jumlani rostlikka tekshiring:
// “Koordinatalari (x,y) bo’lgan nuqta, koordinata choragining ikkinchisida yotadi".
$x = readline();
$y = readline();
if ($x<0 && $y>0){
    echo "II chorakda yotadi";
}
elseif ($x>0 && $y<0){
    echo "IV chorakda yotadi";
}
else{
    echo "Boshqa chorakda";
}