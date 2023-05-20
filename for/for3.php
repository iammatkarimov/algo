<?php
//a va b butun sonlari berilgan (a < b). a va b sonlari orasidagi barcha butun sonlarni (a va b dan tashqari)
// kamayish tartibida chiqaruvchi va chiqarilgan sonlar sonini chiqaruvchi progma tuzilsin.
$a = readline();
$b = readline();
$cnt = 0;
if ($a<$b){
    for ($i = $b-1; $i>$a; $i--){
        $cnt++;
        echo $i." ";
    }
    echo "Soni = ".$cnt;
}else{
    echo "a<b bo'lishi kerak";
}

