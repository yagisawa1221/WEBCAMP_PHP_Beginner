<?php

// 計算（加算）
$a = 1 + 2;

// 出力
echo $a;
echo "\n";

// 出力：一行で書く書き方 その１（カンマでつなげる）
echo $a , "\n";

// 出力：一行で書く書き方 その２（ダブルクォートの中で変数を展開する）
echo "{$a} \n";

/*計算する元のほうの値も変数にする*/

// 数値を代入
$i = 11;
$j = 22;

// 変数を使って計算（加算）
$k = $i + $j;

// 出力
echo "{$k} \n";
