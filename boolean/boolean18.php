<?php
//Jumlani rostlikka tekshiring:
//Berilgan uchta butun sonlarning hech bo’lmaganda 2 tasi bir birigateng”.
$a = readline();
$b = readline();
$c = readline();
if (($a==$b && $a!=$c)||($a==$c && $b!=$c)||($b==$c && $a!=$b)){
    echo "hech bo'lmaganda 2 tasi bir biriga teng";
}
else{
    echo "false";
}