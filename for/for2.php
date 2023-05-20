<?php
//a va b butun sonlari berilgan (a < b). a va b sonlari orasidagi barcha butun sonlarni
// (a va b ni ham) chiqaruvchi va chiqarilgan sonlar sonini chiqaruvchi programma tuzilsin. (a va b xam chiqarilsin).

$a = readline();
$b = readline();
$cnt = 1;
for ($i=$a; $i<$b; $i++){
    $cnt++;
    echo $i." ";
}
echo $i."\n"."Soni = ".$cnt;