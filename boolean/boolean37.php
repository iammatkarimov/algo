<?php
//Shaxmat doskasining ikkita turli (x1, y1), (x2, y2) koordinalari berilgan (1-8 oraliqda yotuvchi butun sonlar). Jumlani rostlikka tekshiring:
// Shoh bir yurishda bir maydondan ikkinchisiga o’ta oladi."
$x1 = readline();
$y1 = readline();
$x2 = readline();
$y2 = readline();

if ((($x2 == $x1 + 1) && ($y2 == $y1 - 1)) || (($x2 == $x1) && ($y2 == $y1 - 1))
    || (($x2 == $x1) && ($y2 == $y1 + 1))
    || (($x2 == $x1 - 1) && ($y2 == $y1 - 1))
    || (($x2 == $x1 - 1) && ($y2 == $y1))
    || (($x2 == $x1 - 1) && ($y2 == $y1 + 1))
    || (($x2 == $x1 + 1) && ($y2 == $y1 + 1))
    || (($x2 == $x1 + 1) && ($y2 == $y1))) {
    echo "Shoh bir yurishda bir maydondan ikkinchisiga o’ta oladi";
} else {
    echo "false";
}