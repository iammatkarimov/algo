<?php
$n = readline();
$cnt = 2;
for ($i=1; $i<=$n; $i++){
    if ($n%$i==0){
        $cnt--;
    }
}
if ($cnt==0){
    echo "tub";
}
else{
    echo "tub emas";
}
