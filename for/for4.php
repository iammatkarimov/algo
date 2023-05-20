<?php
//Bir kg konfetning narxi berilgan (haqiqiy son). 1, 2, ...,
// 10 kg konfetni narxini chiqaruvchi programma tuzilsin.
$k = readline();
for ($i = 1; $i < 11; $i++) {
    echo $i . " kg narxi = " . $i * $k.", "."\n";
}
