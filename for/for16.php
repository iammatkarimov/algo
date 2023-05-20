<?php
//n butun soni va a haqiqiy soni berilgan (n > 0).
// Bir sikldan foydalanib a ning 1 dan n gacha bo’lgan barcha darajalarini chiqaruvchi programma tuzilsin.
$a = readline();
$n = readline();

if ($n>0){
    for ($i = 1; $i <=$n; $i++){
        echo $a**$i."\n";
    }
}else{
    echo "n musbat bo'lsin";
}