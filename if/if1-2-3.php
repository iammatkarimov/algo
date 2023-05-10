<?php
//if1. Butun son berilgan. Agar, berilgan son musbat bo'lsa, 1 ga oshirilsin,
// aks holda o'zgartirilmasin. Hosil bo'lgan sonni ekranga chiqaruvchi programma tuzilsin.
//if2. Butun son berilgan. Agar, berilgan son musbat bo'lsa, 1 ga oshiring,
// aks holda 2 ga kamaytiring. Hosil bo'lgan sonni ekranga chiqaruvchi programma tuzilsin.
//if3. Butun son berilgan. Agar, berilgan son musbat bo'lsa, 1 ga oshiring,
// agar manfiy bo'lsa 2 ga kamaytiring. Agar 0 ga teng bo'lsa, 10 ni o'zlashtirsin.
// Hosil bo'lgan sonni ekranga chiqaruvchi programma tuzilsin.

$son = readline();
if ($son>0){
    $son++;
    echo "son = ".$son;
}
elseif($son<0){
    $son-=-2;
    echo "son = ".$son;
}
else{
    $son=10;
    echo "son = ".$son;
}