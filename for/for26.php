<?php
//n butun soni va x haqiqiy soni berilgan (n > 0, |x| < 1).
// Quyidagi yig’indini hisoblovchi programma tuzilsin. x- x3/3 + xs/5 -... +(-1)n x2n+1 /(2n + 1)
$n = intval(readline());
$x = floatval(readline());
$sum = 0;
$a = 1;
if ($n > 0 && abs($x)<1) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 1) {
            $surat = $a * $x ** $i;
            $sum += $surat / $i;
            $a *= -1;
        }
    }
    echo $sum."\n";
} else {
    echo "n>0 bo'lishi kerak";
}