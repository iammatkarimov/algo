<?php
//Sonlar o'qida A, V, S nuqtalar berilgan. S nuqta A va V nuqtalar orasida joylashgan.
// AC va BC kesmalar uzunligining ko'paytmasini toping.
$a = 10;
$b = 20;
$c = 30;

$ac = abs($a-$c);
$bc = abs($b-$c);
$sum = $ac+$bc;
echo $ac." ";
echo $bc." ";
echo $bc*$ac." ";