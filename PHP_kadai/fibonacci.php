<?php
$n = 0;
$m = 1;
echo "{$n}\n";
echo "{$m}\n";

for($i=0; $i<=10000; $n=$m, $m=$i){
    $i = $m + $n;
    echo "{$i}\n";
}

