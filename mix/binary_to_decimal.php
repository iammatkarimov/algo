<?php
$n=100001;
$i = 0;
$sum = 0;
//echo bindec($n);

while ($n!=0){
    $dig = $n%10;
    $sum +=$dig*2**$i;
    $i++;
    $n=floor($n/10);
}
echo $sum;