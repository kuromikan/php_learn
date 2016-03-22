<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$num1=10;
$num2=10;
echo "num1=".$num1.",num2=".$num2."<br>";
//宣告兩個變數一個值為10另外一個為10，值的部分可以隨意調整

echo "<br>使用if(條件){}else{}<br>";
echo "if(當num1=num2時){條件成立時執行程式}else{條件不成立時執行程式}<br>";
if($num1==$num2)
{
	echo "num1等於num2<br>";
}
else
{
	echo "num1不等於num2<br>";
}
//使用if(條件){程式}else{程式}
//當條件成立的時候執行下方大括號內的程式，否則執行else下方大括號內的程式
//目前num1=10,num2=10，因if(num==num2)成立，所以執行if(條件式)下方大括號的程式
//印出num1等於num2
echo "<br>--------------------------------------------------------------------------------------------<br>";
$num1=10;
$num2=5;
echo "<br>num1=".$num1.",num2=".$num2."<br>";
//將num1設定為10、num2設定為5，值的部分可以隨意調整

echo "<br>使用if(條件){}else{}<br>";
echo "if(當num1=num2時){條件成立時執行程式}else{條件不成立時執行程式}<br>";
if($num1==$num2)
{
	echo "num1等於num2<br>";
}
else
{
	echo "num1不等於num2<br>";
}
//使用if(條件){程式}else{程式}
//當條件成立的時候執行下方大括號內的程式，否則執行else下方大括號內的程式
//目前num1=10,num2=5，因if(num1==num2)無法成立，所以執行else下方大括號內的程式
//印出num1不等於num2
?>
