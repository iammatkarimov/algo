<?php
//Uch xonali son berilgan. Jumlani rostlikka tekshiring:
// “Ushbu sonning raqamlari ketama- ket o’suvchi bo'lib joylashgan yoki kamayuvchi ketma-ketlikka ega".
$num = readline();
$a = floor($num/100);
$b = floor($num/10)%10;
$c = $num%10;
if ($a<$b && $b<$c){
    echo "Ushbu sonning raqamlari ketama- ket o’suvchi bo’lib joylashgan";
}
elseif ($a>$b && $b>$c){
    echo "Ushbu sonning raqamlari ketama- ket kamayuvchi bo’lib joylashgan";
}
else{
    echo "false";
}