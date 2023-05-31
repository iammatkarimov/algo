<?php
// n butun soni va sonlar o’qida 2 ta A, B nuqta berilgan. (A, B haqiqiy son). [A, B] kesmani teng n ta kesmaga bo’ling.
// [A, B] kesmada ajratilgan barcha nuqtalar uchun F(X) = 1 - sin(X) funksiya qiymatini hisoblang.

$n = readline();
$a = readline();
$b = readline();
if ($a<$b){
    $qadam = ($b-$a)/$n;
    for ($i=0; $i<$n-1; $i++){
        $a+=$qadam;
        $fx=1-sin($a);
        echo "x = ".$a." f(x) = ".$fx."\n";
    }
} else {
    echo 'A soni B dan kichik bolsin';
}