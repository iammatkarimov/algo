<?php
//Uchta A, V, S butun sonlar berilgan. Jumlani rostlikka tekshiring:
// “A, V, S sonlarning har biri musbat"
/*
$a = 1;
$b = 2;
$c = 3;
if ($a>0 && $b>0 && $c>0){
    echo "hammasi musbat";
}
else{
    echo "hammasi musbat emas";
}
*/

//Uchta A, V, S butun sonlar berilgan. Jumlani  rostlikka tekshiring:
//“A, V, S sonlarning hech bo’lmaganda bittasi musbat”.


$a = readline();
$b = readline();
$c = readline();
if ($a>0 && $b>0 && $c>0){
    echo "hammasi musbat";
}
elseif (($a>0&&$b<0&&$c<0) || ($a<0&&$b>0&&$c<0) || ($a<0&&$b<0&&$c>0) || ($a>0&&$b>0&&$c<0)||($a>0&&$c>0&&$b<0)||
    ($b>0&&$c>0&&$a<0)){
    echo "hech bo'lmaganda bittasi musbat";
}
else{
    echo "musbat emas";
}