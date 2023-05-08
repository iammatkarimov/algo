<?php
//Shaxmat doskasining ikkita turli (x1, y1), (x2, y2) koordinalari berilgan (1-8 oraliqda yotuvchi butun sonlar). Jumlani rostlikka tekshiring:
// Fil bir yurishda bir maydondan ikkinchisiga o’ta oladi".
$x1 =readline();//1
$y1 =readline();//7
$x2 =readline();//5
$y2 =readline();//3
if (abs($x1-$x2) && abs($y1-$y2)){
    echo "Fil bir yurishda bir maydondan ikkinchisiga o’ta oladi";
}
else{
    echo "false";
}