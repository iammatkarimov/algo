<?php
$x = 0.22;
$y = 6.17;
$f = (2*tan($x+(M_PI/6)))/(1/3+cos($y+$x**2))+log($x**2+2);
echo round($f,2);