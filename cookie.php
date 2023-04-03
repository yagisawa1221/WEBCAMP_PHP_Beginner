<?php
//
ob_start();

//
function h(string $s) : string
{
    return htmlspecialchars($s , ENT_QUOTES);
}

// まずCookieから数値を読み込んでる
$counter = intval($_COOKIE['counter'] ??1);

//
echo "あなたがこのサイトを訪れたのは" , h(strval($counter)),"回目ですね";

// Cookieに設定する値を作成する
$next_counter = strval($counter +1);

//Cookieに値を設定する
setcookie('counter,' $next_counter);

ob_end_flush();
