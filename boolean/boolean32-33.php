<?php
//a, b, s butun sonlar berilgan.
// Jumlani rostlikka tekshiring: “a, b, c tomonli uchburchak to’g’ri burchakli".
$a = readline();
$b = readline();
$c = readline();
if (($a*$a+$b*$b==$c*$c || $a*$a+$c*$c==$b*$b || $b*$b+$c*$c==$a*$a) && ($a+$b>$c && $a+$c>$b && $b+$c>$a)){
    echo "To'g'ri burchakli uchburchak";
}
else{
    echo "false";
}