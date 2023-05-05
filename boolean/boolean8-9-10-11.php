<?php
//Ikkita butun A va V sonlari berilgan. Jumlani rostlikka tekshiring: “A va V sonlari toq sonlar".
/*
$a =3;
$b = 4;
if ($a%2!=0 && $b%2!=0){
    echo "A va B sonlari toq sonlar";
}
else{
    echo "A va B sonlari toq emas";
}
*/
//Ikkita butun A va V sonlari berilgan. Jumlani rostlikka tekshiring:
// “A va V sonlarning hech bo’lmaganda bittasi toq son".
/*
$a =3;
$b = 4;
if ($a%2!=0 && $b%2!=0){
    echo "A va B sonlari toq son";
}
elseif ($a%2!=0 || $b%2!=0){
    echo "A va B sonlari faqat bittasi toq son";
}
else{
    echo "A va B sonlari toq emas";
}
*/

//Ikkita butun A va V sonlari berilgan. Jumlani rostlikka tekshiring:
//“A va V sonlarining har ikkalasi ham yoki toq son yoki juft son".

$a =4;
$b = 4;
if ($a%2!=0 && $b%2!=0){
    echo "A va B sonlari ikkalasi toq son";
}
elseif ($a%2!=0 || $b%2!=0){
    echo "A va B sonlari faqat bittasi toq son";
}
else{
    echo "A va B sonlari ikkalasi juft son";
}
