<?php
// 
$base_string = "Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo "元の文字列\n";
var_dump($base_string);

// 
$exploded_array = explode(";",$base_string);
echo "\n explodeした配列\n";
var_dump($exploded_array);

// 
$imploded_string = implode(",", $exploded_array);
echo "\n implodeでつなげた文字列\n";
var_dump($imploded_string);
