<?php
//n butun soni va x haqiqiy soni berilgan (n > 0). Quyidagi yig’indini hisoblovchi programma tuzilsin. (Olingan natija taxminan sin(x) ga yaqinlashadi)
//x- x3 / (3!) + x5 / (5!) -... +(-1)n x2n+1 /((2*n+1)!)
$n = intval(readline());
$x = floatval(readline());
$factorial = 1;
$sum = 0;
$a = 1;
if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
        if ($i % 2 == 1) {
            $surat = $a * $x ** $i;
            $sum += $surat / $factorial;
            $a *= -1;
        }
        echo $sum."\n";
    }
} else {
    echo "n>0 bo'lishi kerak";
}