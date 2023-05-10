<?php
//A va B haqiqiy sonlari beringan. Shu sonlarni shunday o’zgartirish kerakki, A son kichik B son katta bo'lsin.
// A va B ning qiymati ekranga chiqarilsin.
$a = readline();
$b = readline();
if ($a < $b) {
    $c = $a;
    $a = $b;
    $b = $c;
} elseif ($a == $b) {
    echo 'Ular teng ';
}
echo 'a=' . $a.",". 'b=' . $b;