<?php
$x=2;
$y=1;

$z=log(abs(($x+$y)**2+sqrt(abs($y)+2)-($x-($x*$y)/($x**2/2)-5)))+(cos($x+$y)**2)/($x+$y)**(1/3);

echo round($z,2);