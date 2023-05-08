<?php
//Shaxmat doskasining ikkita turli (x1, y1), (x2, y2) koordinalari berilgan (1-8 oraliqda yotuvchi butun sonlar). Jumlani rostlikka tekshiring:
// “Farzin bir yurishda bir maydondan ikkinchisiga o’ta oladi"
$x1 =readline();//3
$y1 =readline();//1
$x2 =readline();//6
$y2 =readline();//4

if ((abs($x1-$x2) && abs($y1-$y2)) || ($x1==$x2 || $y1==$y2)){
    echo "Farzin bir yurishda bir maydondan ikkinchisiga o’ta oladi";
}
else{
    echo "false";
}