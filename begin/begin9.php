<?php
//Ikkita manfiy bo’lmagan  son   a  va  b berilgan.
//  Ularning o’rta geometrigi  aniqlansin . √ab
$a = 10;
$b = 5;
if ($a>0 && $b>0){
    $c = sqrt($a*$b);
    echo $c;
}
else{
    echo "a va b son manfiy bo'lmasligi kerak";
}