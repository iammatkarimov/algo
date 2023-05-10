<?php
//A va B (A > B) musbat sonlari berilgan.
// A kesmada, B kesmani necha marta joylashtirish mumkinligini aniqlovchi programma tuzilsin.
//A kesmada B kesmaningjoylashmagan qismini aniqlovchi programma tuzilsin.
$a = readline();
$b = readline();
$c = intval($a/$b);
$c2 =$a%$b;
echo $c." ".$c2;