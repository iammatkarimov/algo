<?php
//Ikki xonali son berilgan.
// Oldin uning o’nliklar xonasidagi raqamni, so'ng birlar xonasidagi raqamni chiqaruvchi programma tuzilsin.

//Ikki xonali son berilgan. Uning raqamlari yig'indisini aniqlovchi programma tuzilsin.

//Ikki xonali son berilgan.
// Uning raqamlari o’mini almashtirishdan hosil bo'lgan sonni aniqlovchi programma tuzilsin.
$a = readline();

$onlik = intval($a/10);
$birlik = $a%10;
$yigindi = $onlik+$birlik;

echo $onlik." ".$birlik." yigindisi =  ".$yigindi." almashgani = ".$birlik.$onlik;