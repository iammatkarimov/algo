<?php
//A, B, C butun sonlar berilgan. Tomonlari A va B bo'lgan to'g'ri to'rtburchakka
// tomoni C bo'lgan kvadrat eng ko'p joylashtirilsin. To'g'ri to'rtburchakka eng
// ko'p joylashgan kvadratlar soni va joylashmay qolgan qismi yuzasini aniqlovchi
// programma tuzilsin.

$a = readline();
$b = readline();
$c = readline();

$aa = intval($a/$c);
$bb = intval($b/$c);
$kv_soni = $bb*$aa;

$yuza = $a*$b - ($kv_soni*$c*$c);


echo "kvadrat soni = ".$kv_soni.","."Yuza = ".$yuza;


