<?php
//n butun soni berilgan (n > 1).
// Fibonachchi ketma - ketlikning dastlabki n ta hadini chiqaruvchi programma tuzilsin.
// F1 = 1; F2 = 1; FK = FK-2 + FK-1; K = 3, 4, ...
$n = readline();
$f0 = $f1 = 1;
if ($n > 1) {
    echo $f0 . '  ';
    echo $f1 . '  ';
    for ($i = 2; $i < $n; $i++) {
        $f = $f0 + $f1;
        echo $f . '  ';
        $f0 = $f1;
        $f1 = $f;
    }
} else {
    echo 'n>1 shartni qanoatlantiradigan son kiriting!';
}