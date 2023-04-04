<?php
//
class 親クラス
{
    //
    public function 親メソッド()
    {
        echo "親クラス内 親メソッド \n";
    }
    //
    public function メソッド()
    {
        echo "親クラス内 メソッド \n";
    }
}
//
class 子クラス extends 親クラス
{
    //
    public function 子メソッド()
    {
        echo "子クラス内 子メソッド \n";
    }
    //
    public function メソッド()
    {
        echo "子クラス内 メソッド \n";
    }
}

//
$obj = new 子クラス();
$obj ->親メソッド(); //自分にないメソッドでも、親が持っていたらおやのメソッドをそのまま使える
$obj ->子メソッド();
$obj ->メソッド(); //親でも自分でも定義されているメソッドは、自分優先


