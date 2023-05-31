<?php
//A va B butun soni berilgan (A < B). A va B sonlari orasidagi barcha butun sonlarni chiqaruvchi programma tuzilsin.
// Bunda A soni 1 marta, (A + 1) soni 2 marta chiqariladi va hakazo.
$a = readline('A=');
$b = readline('B=');
$sanoq = 0;
if ($a < $b) {
    for ($i = $a; $i <= $b; $i++) {
        $sanoq += 1;
        for ($j = 1; $j <= $sanoq; $j++) {
            echo $i." ";
        }
    }
} else {
    echo 'A<B shart qanoatlantiradigan son kiriting!';
}