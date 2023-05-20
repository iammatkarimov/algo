<?php
//n butun soni va x haqiqiy soni berilgan (n > 0). Quyidagi yig’indini hisoblovchi programma tuzilsin. (Olingan natija taxminan ex ga yaqinlashadi)
//1 +x + x2/(2!) + x3/(3!)+ ... +xn/( n!)
$n = readline();
$x = readline();
$factorial=1;
$sum=1;
$surat = 1;
if ($n>0) {
    for ($i=1; $i<=$n; $i++) {
        $factorial*=$i;
        $surat*=$x;
        $sum+=$surat/$factorial;
    }
    echo 'Yigindi: '.$sum;
} else {
    echo 'n>0 bolishi kerak';
}