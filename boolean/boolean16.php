<?php
//Musbat butun son berilgan. Jumlani rostlikka tekshiring: “Berilgan son ikki xonali juft son”.

$a = readline();
$butun = floor($a/10);
if ($a%2==0 && $butun>=1 && $butun<=9){
    echo "Berilgan son ikki xonali juft son";
}
else{
    echo "false";
}
