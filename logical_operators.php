<?php

//
echo "論理演算しの確認\n";
var_dump( true && false);
var_dump( true || false);

//
$age = 20;
$point = 499;

//
echo "\n";
echo "「かつ」の場合\n";
var_dump( ($age>= 20)&&($point>=500));

echo "\n";
echo "「または」の場合\n";
var_dump( ($age >= 20)||($point >=500));
