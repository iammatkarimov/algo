<?php
//n butun soni va x haqiqiy soni berilgan (n > 0, |x| < 1).
// Quyidagi yig’indini hisoblovchi programma tuzilsin. x- x2/2 + x3/3 -... +(-1)n_ 1 xn/n
$n = intval(readline());
$x = floatval(readline());
$sum = 0;
$a = 1;
if ($n > 0 && abs($x) < 1) {
    for ($i = 1; $i <= $n; $i++) {
        $surat = $a * $x ** $i;
        $sum += $surat / $i;
        $a *= -1;
    }
    echo $sum . "\n";
} else {
    echo "n>0 bo'lishi kerak";
}