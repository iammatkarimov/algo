<?php
//Musbat butun son berilgan. Jumlani rostlikka tekshiring: “Berilgan son uch xonali toq"
$a = readline();
$butun = floor($a/100);
if ($a%2!=0 && $butun>=1 && $butun<=9){
    echo "Berilgan son uch xonali toq son";
}
else{
    echo "false";
}
