<?php
//$n = 2345678;
//$n2 = 0;
//while ($n!=0){
//    $n2 = $n%10+$n2*10;
//    $n = (int)($n/10);
//}
//echo $n2;
$n =123456789;
$sum = 0;
if ($n){
    for ($i=$n; $i>0; $i =intval($i/10)){
        $sum+=$i%10;
    }
}
echo $sum;