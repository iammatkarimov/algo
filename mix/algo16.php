<?php
$x = 9.79;
$y = 6.74;
$c1 = ($x+$y)/($y**2+abs(($y**2+2)/($x+($x**3)/5)))+exp($y+2);
$res = round($c1,2);
echo $res;