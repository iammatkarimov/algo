<?php
//a va b butun sonlari berilgan (a < b).
// a dan b gacha bo’lgan barcha butun sonlar kvadratlarining yig’indisini chiqaruvchi programma tuzilsin.
$a = readline();
$b = readline();
$cnt = 0;
if ($a<$b){
    for ($i = $a; $i<=$b; $i++){
        $cnt+=$i*$i;
    }
    echo $cnt;
}else{
    echo "a<b bo'lsin";
}