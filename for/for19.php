<?php
//n butun soni berilgan (n > 0). Birdan n gacha bo’lgan sonlar ko’paytmasini chiqaruvchi programma tuzilsin. n! = 1 * 2 * ... n
// Birdan n gacha bo’lgan sonlar ko’paytmasi n faktorial deyiladi.
$n = readline();
$factorial = 1;
if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    echo $factorial;
} else {
    echo 'n>0 bulishi kerak';
}