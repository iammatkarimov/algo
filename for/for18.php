<?php
//n butun soni va a haqiqiy soni berilgan (n > 0).
// Bir sikldan foydalanib quyidagi a ning 1 dan n gacha bo’lgan barcha darajalarini chiqaruvchi va yig'indini hisoblovchi programma tuzilsin.
// 1 - a + a2-a3 + ... (-1)n an Shart operatoridan foydalanilmasin.
$a = readline();
$n = readline();
$sum = 0;
if ($n>0){
    for ($i=1; $i<=$n; $i++){
        echo $i.' - darajasi = '.$a**$i."\n";
        $sum+=$a**$i*(-1)**($i+1);
        echo $sum."\n";
    }
    echo 'yigindi = '.$sum;
}else{
    echo 'n>0 bulsin';
}