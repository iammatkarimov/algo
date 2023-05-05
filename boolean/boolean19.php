<?php
//Jumlani rostlikka tekshiring:
// “Berilgan uchta butun sonlarning hech bo'lmaganda bir jufti o’zaro qarama-qarshi"
$a = readline();
$b = readline();
$c = readline();
if ($a==-$b||$b==-$c||$a==-$c){
    echo "true";
}
else{
    echo "false";
}