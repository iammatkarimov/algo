<?php
//Bir kg konfetning narxi berilgan (haqiqiy son). 0.1, 0.2, ..., 0.9,
// 1 kg konfetni narxini chiqaruvchi programma tuzilsin.
$k = readline();
for ($i =0.1; $i < 1; $i+=0.1) {
    echo $i . " kg narxi = " . $i * $k.", "."\n";
}
