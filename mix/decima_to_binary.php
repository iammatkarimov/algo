<?php
$bin = 0;
$dec = 8;
$i =1;
while ($dec>0){
    $a = $dec%2;
    $dec = floor($dec/2);
    $bin +=$a*$i;
    $i = $i*10;
}
echo $bin;