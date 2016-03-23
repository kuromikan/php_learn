<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$num1=rand(1,10);
$num2=rand(1,10);
echo "num1=".$num1.",num2=".$num2."<br>";
//宣告兩個變數其值為隨機1~10

if($num1>$num2)
{
	echo "num1大於num2<br>";
}
else if($num1<$num2)
{
	echo "num1小於num2<br>";
}
else
{
	echo "num1等於num2";
}
//使用if(條件1){程式1}、else if(條件2){程式2}、else{程式3}
//當達成條件1時會執行程式1後跳出
//如果條件1不成立會看接下來的條件2，成立時執行程式2
//如果條件1跟條件2都沒辦法達成則執行else底下的程式3

?>
