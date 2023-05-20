<?php
//a va b butun sonlari berilgan (a < b).
// a dan b gacha bo’lgan barcha butun sonlar yig’indisini chiqaruvchi programma tuzilsin.
$a = readline();
$b = readline();
$cnt = 0;
for ($i = $a; $i<=$b; $i++){
    $cnt+=$i;
}
echo $cnt;