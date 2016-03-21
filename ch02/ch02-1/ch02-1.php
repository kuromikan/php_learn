<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$num1=10;
$num2=5;
echo "num1=".$num1.",num2=".$num2."<br>";
//宣告兩個變數一個值為10另外一個為5，值的部分可以隨意調整

echo "<br>使用if(條件)<br>";
echo "if(當num1>num2時)<br>";
if($num1>$num2)
	echo "num1>num2<br>";
//使用if(條件)
//當條件成立的時候執行下方一行的程式
//目前num1=10,num2=5，所以當num1>num2的時候會印出num1>num2

echo "<br>使用if(條件){ }<br>";
echo "if(當num1>num2時)<br>";
if($num1>$num2)
{
	echo "num1>num2";
	echo "<br>";
}
//使用if(條件){程式區塊}
//如果當你要執行的程式超過一行時，則用大括號將要執行的程式區塊包起來

echo "<br>if(當num2>num1時)<br>";
if($num2>$num1)
{
	echo "num2>num1";
	echo "<br>";
}
//當條件不成立時就不會執行大括號內的程式

?>
