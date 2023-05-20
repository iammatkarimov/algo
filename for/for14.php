<?php
//n butun soni berilgan (n > 0). Shu sonning kvadratini quyidagi formula asosida hisoblovchi programma tuzilsin.
// n2= 1 +3 + 5 + ... + (2*n -1) har bir qo’shiluvchidan keyin natijani ekranga chiqarib boring.
// Natijda ekranda 1 dan n gacha bo’lgan sonlar kvadrati chiqariladi.
$n = readline();
$sum = 0;
$p = 0;
for ($i = 1; $i < 2*$n; $i+=2) {
    $sum += $i;
    $p += 1;
    echo $p.' sonining kvadrati = '.$sum."\n";
}