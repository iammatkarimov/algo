<?php
// a, b, s butun sonlari berilgan.
// Jumlani rostlikka tekshiring a, b, c tomonli uchburchak teng yonli bo’ladi".
$a = readline();
$b = readline();
$c = readline();

if (($a==$b || $a==$c || $b==$c) && ($a+$b>$c && $a+$c>$b && $b+$c>$a) && !($a==$b && $b==$c)){
    echo "teng yonli uchburchak";
}
else{
    echo "false";
}