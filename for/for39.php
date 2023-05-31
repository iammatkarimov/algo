<?php
//A va B butun soni berilgan (A < B). A va B sonlari orasidagi barcha butun sonlarni chiqaruvchi programma tuzilsin.
// Bunda har bir son o’zining qiymaticha chiqarilsin. Ya’ni 3 soni 3 marta chiqariladi.
$a = readline();
$b = readline();
if ($a < $b) {
    for ($i = $a; $i <= $b; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i." ";
        }
    }
} else {
    echo 'A<B shart qanoatlantiradigan son kiriting!';
}