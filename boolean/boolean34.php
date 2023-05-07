<?php
//Shaxmat doskasining x, y koordinatalari berilgan (1-8 oraliqda yotuvchi butun sonlar).
// Doskaning chap pastki maydoni (1,1) qoraligini hisobga olib, jumlani rostlikka tekshiring:
// "Berilgan (x, y) maydon oq"
$x = readline();
$y = readline();
if (($x+$y)%2==1){
    echo "maydon oq";
}
else{
    echo "maydon qora";
}