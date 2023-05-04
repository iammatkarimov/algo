<?php
$f1 = 0;
$f2 = 1;
print $f1."<br/>";
print $f2."<br/>";
$n=20;
for ($i=0; $i<=$n; $i++){
    $val = $f1;
    $f1=$f2;
    $f2= $val+$f2;

    if ($f2>=$n){
        break;
    }
    else{
        print $f2."<br/>";
    }
}