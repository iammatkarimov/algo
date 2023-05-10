<?php
//OX va OY koordinata o'qlarida yotmaydigan nuqta berilgan.
// Nuqta joylashgan koordinata choragi aniqlansin.
$x = readline();
$y = readline();
if ($x>0 && $y>0){
    echo "1-chorak";
}
elseif ($x<0 && $y>0){
    echo "2-chorak";
}
elseif($x<0 && $y<0){
    echo "3-chorak";
}
elseif ($x>0 && $y<0){
    echo "4-chorak";
}
else{
    echo "x va y koordinata o'qlarida yotadi";
}