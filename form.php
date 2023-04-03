<?php
error_reporting(-1);
int_set('display_errors' , 'on');

// 
function h(string $s) : string
{
    return htmlspecialchars($s ,ENT_QUOTES);
}

// 
function h(string $s) : string
{
    return htmlspecialchars($s , ENT_QUOTES);
}

// データの取得
$input = $_GET['input_text'] ?? ""; // 今回追記分

// 
echo "あなたが入力したのは" , h($input) , "ですね";

