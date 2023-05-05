<?php
//Uch xonali son berilgan. Jumlani rostlikka tekshiring:
// “Ushbu sonning barcha raqamlari xar hil ‘’
$num = readline();
$a = floor($num/100);
$b = floor($num/10)%10;
$c = $num%10;

echo $a." ";
echo $b." ";
echo $c." ";
if ($a!=$b && $a!=$c && $b!=$c){
    echo "barcha raqamlari har xil";
}
else{
    echo "false";
}