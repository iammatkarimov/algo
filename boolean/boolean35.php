<?php
// Shaxmat doskasining ikkita turli (x1, y1), (x2, y2) koordinalari berilgan (1-8 oraliqda yotuvchi butun sonlar).
// Jumlani rostlikka tekshiring: "Berilgan maydonlar bir xil rangda".
$x = readline();
$y = readline();

$x1 = readline();
$y1 = readline();
if (($x+$y)%2==($x1+$y1)%2){
    echo "Berilgan maydonlar bir xil rangda";
}
else{
    echo "false";
}
