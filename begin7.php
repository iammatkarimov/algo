<?php
//Doiraning radiusi   R   berilgan.
// Uning uzunligi L va  yuzasi  S   aniqlansin.  L= 2πR;S= πR2;

$r = 10;
$l = 2*M_PI*$r;
$s = M_PI*pow($r,2);
echo $l." ".$s;