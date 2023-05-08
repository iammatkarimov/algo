<?php
//Shaxmat doskasining ikkita turli (x1, y1), (x2, y2) koordinalari berilgan (1-8 oraliqda yotuvchi butun sonlar). Jumlani rostlikka tekshiring:
// Ot bir yurishda bir maydondan ikkinchisiga o’ta oladi"
$x1 =readline();//1 4 8 1
$y1 =readline();//1 3 6 8
$x2 =readline();//2 2 6 3
$y2 =readline();//3 4 5 7
if (abs($x1-$x2)==1 && abs($y1-$y2)==2){
    echo "Ot bir yurishda bir maydondan ikkinchisiga o’ta oladi";
}
else{
    echo "false";
}