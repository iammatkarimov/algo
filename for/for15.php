<?php
//n butun soni va a haqiqiy soni berilgan (n > 0).
// a ning n - darajasini aniqlovchi programma tuzilsin. an=a*a*a...a;
$a = readline();
$n = readline();

if ($n>0){
    for ($i = 1; $i <=$n; $i++){
        $daraja =  $a**$i;
    }
    echo $daraja;
}else{
    echo "n musbat bo'lsin";
}