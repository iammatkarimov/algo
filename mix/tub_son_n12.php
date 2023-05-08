<?php
$n = readline();
$count = 0;
for ($i = 2; $i<=sqrt($n); $i++){
    if ($n%$i==0){
        $count++;
    }
}
if ($count==0){
    echo "tub";
}
else{
    echo "tub emas";
}