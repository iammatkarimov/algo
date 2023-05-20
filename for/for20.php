<?php
//n butun soni berilgan (n > 0). Bir sikldan foydalangan holda quyidagi yig’indini hisoblovchi programma tuzilsin. 1! + 2! + 3! + ... +n!
$n = readline();
$factorial = 1;
$sum = 0;
if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
        $sum += $factorial;
    }
    echo $sum;
} else {
    echo 'n>0 bolishi kerak';
}