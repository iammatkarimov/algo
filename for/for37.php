<?php
//N butun soni berilgan. Quyidagi yig’indini chiqaruvchi programma tuzilsin. 11 + 22 + ... +NN
$n = readline();
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $p = 1;
    for ($j = 1; $j <= $i; $j++) {
        $p *= $i;
    }
    $sum += $p;
}
echo $sum;