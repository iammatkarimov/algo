<?php

$n = 9;
$sum = 0;
for ($i=100; $i<=200; $i++){
    if ($i%$n==0){
       echo $i;
       $sum+=$i;
    }
}
echo $sum;