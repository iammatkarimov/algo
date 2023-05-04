<?php
//A1 ,B1 ,C1   ,A2  , B2 , C2  koeffisentlari berilgan,
//chiziqli tenglamalar sistemasi yechimlarini aniqlaydigan programma tuzilsin.
// {(A_1∙x + B_1∙x= C_1@ A_2 〖∙x+B〗_(2 )∙x= C_2 )
// x = ( C1B2 – C2B1)/D,   y= (A1C2-A2C1 ) /D,  D= (A1B2 –A2B1)
$a1 = 1;
$b1 = 2;
$c1 = 4;
$a2 = 5;
$b2 = 3;
$c2 = 7;
$d = ($a1*$b2-$a2*$b1);
$x = ($c1*$b2-$c2*$b1)/$d;
$y = ($a1*$c2-$a2*$c1)/$d;

echo "x = ".$x." ";
echo "y = ".$y." ";
echo "d = ".$d." ";
