<?php
//. n butun soni berilgan (n > 2). Quyidagi ketma - ketlikning dastlabki n ta hadini chiqaruvchi programma tuzilsin.
// Ai = 1; A2 = 2; A3 = 3; AK = AK1 + AK2 - 2*AK3; K = 4, 5,... ichma - ich ochilgan sikllar
$n = readline();
$a = 1;
$b = 2;
$c = 3;
echo $a."\n";
echo $b."\n";
if ($n > 2) {
    echo $c."\n";
    for ($i = 0; $i < $n-3; $i++) {
        $d = $c + $b - 2*$a;
        $a = $b;
        $b = $c;
        $c = $d;
        echo $d."\n";
    }
} else {
    echo "n>2 shartni qanoatlantirmaydi\n";
}