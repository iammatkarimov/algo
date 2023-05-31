<?php
//N va K butun sonlari berilgan. Quyidagi yig’indini chiqaruvchi programma tuzilsin. 1K + 2K+ +NK
$n = readline();
$k = readline();
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $p = 1;
    for ($j = 1; $j <= $k; $j++) {
        $p *= $i;
    }
    $sum += $p;
}
echo $sum;