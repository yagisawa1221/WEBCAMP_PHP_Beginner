<?php

echo "普通に比較\n";
$f = 0.3;
var_dump($f === 0.3);

// 
echo "\n";
echo "0.1+0.2と0.3を比較\n";
$f = 0.1 + 0.2;
var_dump($f === 0.3);

// 
echo "\n";
echo "0.1+0.2と0.3をprintfで表示\n";
printf("0.1+0.2: %f \n", $f);
printf("    0.3: %f \n", 0.3);

// 
echo "\n";
echo "0.1+0.2と0.3を高精度のprintfで表示\n";
printf("0.1+0.2: %.32f \n",$f);
printf("    0.3: %.32f \n",0.3);

// 
echo "\n";
echo "0.1+0.2と0.3の現実的な比較\n";
define('FLOAT_PRECISION',0.000001);
var_dump( abs($f - 0.3) < FLOAT_PRECISION);