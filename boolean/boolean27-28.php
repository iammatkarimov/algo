<?php
//x, y sonlar berilgan. Jumlani rostlikka tekshiring:
// !!Koordinatalri (x,y) bo'lgan nuqta koordinata choragining
// ikkinchisida yoki uchunchisida yotadi".

//x, u sonlar berilgan. Jumlani rostlikka tekshiring:
// !!Koordinatalri (x,y) bo'lgan nuqta koordinata choragining
// birinchi yoki uchunchisida yotadi".
$x = readline();
$y = readline();
if (($x<0 && $y>0) || ($x<0 && $y<0)){
    echo "II yoki III chorakda yotadi";
}
elseif(($x>0&&$y>0)||($x<0&&$y<0)){
    echo "I yoki III chorakda yotadi";
}
else{
    echo "Boshqa chorakda";
}