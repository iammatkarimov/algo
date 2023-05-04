<?php
//Temperatura   TF  Farengeytda berilgan. Temperatura qiymatini  TC
//gradus selsiyga o'tkazuvchi programma tuzilsin.  Tc = (TF - 32 ) * 5/9

$tf = 50;

$tgradus = 50;

$far = (9*$tgradus/5)+32;
$tc = ($tf-32)*5/9;
echo $tc." ";
echo $far." ";
