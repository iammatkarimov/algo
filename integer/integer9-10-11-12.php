<?php
//Uch xonali son berilgan. Uning yuzlar xonasidagi raqamini aniqlovchi programma tuzilsin.
//Uch xonali son berilgan. Oldin uni birliklar xonasidagi raqamni so'ng o'nliklar xonasidagi raqamni chiqaruvchi programma tuzilsin.
//Uch xonali son berilgan. Uning raqamlar yig'indisini aniqlovchi programma tuzilsin.
//Uch xonali son berilgan. Uning raqamlarini teskari tartibda yozishdan hosil bo'lgan sonni aniqlovchi program tuzilsin.

$son = readline();
$yuzlar = intval($son/100);
$onlar =intval(($son%100)/10);
$birlar = $son%10;
$sum = $birlar+$onlar+$yuzlar;
echo "birlar = ".$birlar." o'nlar = ".$onlar." yuzlar = ".$yuzlar." yig'indi = ".$sum." teskarisi = ".$birlar.$onlar.$yuzlar;