<?php
//Qayiqning tezligi V km/soat daryo oqimining tezligi
//U km/ soat, (V>U) Qayiqning daryo oqimi bo'yicha harakatlanish vaqti T1,
//oqimga qarshi T2 Qayiqni yurgan S yo'lini aniqlovchi programma tuzilsin.

$v = 30;
$u = 20;
$t1 = 40;
$t2 = 30;

$s1 = ($v+$u)*$t1;
$s2 = ($v-$u)*$t2;
$s = $s1+$s2;

echo $s;