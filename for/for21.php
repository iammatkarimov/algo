<?php
//n butun soni berilgan (n > 0). Bir sikldan foydalangan holda quyidagi yig’indini hisoblovchi programma tuzilsin. (Olingan natija taxminan e = exp(1) ga yaqinlashadi)
//1 + 1/(1!) +1/(2!) +1/(3!) + ... +1/(n!)
$n = readline();
$factorial = 1;
$sum = 1;
if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
        $sum += 1 / $factorial;
    }
    echo $sum;
} else {
    echo 'n>0 bolishi kerak';
}