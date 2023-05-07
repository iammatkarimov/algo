<?php
//Uch xonali son berilgan. Jumlani rostlikka tekshiring:
// “Ushbu sonni chapdan o’qiganda ham, o’ngdan o'qiganda ham bir xil".
$num = readline();
$a = floor($num/100);
$b = floor($num/10)%10;
$c = $num%10;
if ($a==$c){
    echo "Ushbu sonni chapdan o’qiganda ham, o’ngdan o'qiganda ham bir xil";
}
else{
    echo "false";
}