<?php
//Umumiy markazga bo'lgan ikkita aylana radiusi berilgan.
// R1, R2, (R1> R2) ularnig yuzalari  S1 va S2, ularning ayirmasi  aniqlansin
$r1 = 200;
$r2 = 10;
if ($r1>$r2){
    $s1 = M_PI*$r1*$r1;
    $s2 = M_PI*$r2*$r2;
    $delta_s = $s1-$s2;
    echo $s1." ";
    echo $s2." ";
    echo $delta_s." ";
}
else{
    echo "R1 > R2 shart bajarilmadi";
}