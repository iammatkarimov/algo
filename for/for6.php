<?php
//Bir kg konfetning narxi berilgan (haqiqiy son). 1.2, 1.4, ...,
// 2 kg konfetni narxini chiqaruvchi programma tuzilsin.
$k = readline();
for ($i = 10; $i <=20; $i++) {
    echo $i/10 . " kg narxi = " . (($i * $k)/10).", "."\n";
}
