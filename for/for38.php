<?php
//N butun soni berilgan. Quyidagi yig'indini chiqaruvchi programma tuzilsin. 1N + 2N-I + ...+NI

$n = readline();
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $p = 1;
    for ($j = $n; $j >= $i; $j--) {
        $p *= $i;
    }
    $sum += $p;
}
echo $sum;