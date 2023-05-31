<?php
// n butun soni va sonlar o’qida 2 ta A, B nuqta berilgan. (A, B haqiqiy son). [A, B] kesmani
// teng n ta kesmaga bo’ling. [A, B] kesmada ajratilgan barcha nuqtalarni chiqaring.
$n = readline();
$a = readline();
$b = readline();
$ab = abs($b - $a);
$l = $ab / $n;
for ($i = 1; $i < $n; $i++) {
    $a += $l;
    echo $a . "\n";
}