<?php
//Uchta son berilgan. Shu sonlarni kichigini aniqlovchi programma tuzilsin.

echo "a = ";
$a = readline();
echo "b = ";
$b = readline();
echo "c = ";
$c = readline();
$min = $a;
$min = ($a<$b)?$a:$b;
$min = ($min<$c)?$min:$c;
echo "minimum = ".$min;