<?php
//n butun soni va a haqiqiy soni berilgan (n > 0).
// Bir sikldan foydalanib quyidagi a ning 1 dan n gacha bo’lgan barcha darajalarini chiqaruvchi va yig'indini hisoblovchi programma tuzilsin. 1 + a + a2 + a3 + ... an
$a = readline();
$n = readline();
$summa = 0;
if ($n>0){
    for ($i = 1; $i <=$n; $i++){
        $summa+= $a**$i;
    }
    echo $summa;
}else{
    echo "n musbat bo'lsin";
}