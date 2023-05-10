<?php
//A va B butun sonlari berilgan. Agar o'zgaruvchilar o'zaro teng bo'lmasa, A va B bu sonlarning kattasini o'zlashtirsin.
// Agar teng bo'lsa, 0 ni o'zlashtirsin. A va B ning qiymati ekranga chiqarilsin.

$a = readline();
$b = readline();
if ($a == $b) {
    $a = $b = 0;
} else {
    if ($a>$b){
        $b=$a;
    }
    else{
        $a=$b;
    }
}
echo 'a = '. $a.",". 'b = ' . $b;