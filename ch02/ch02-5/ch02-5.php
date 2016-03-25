<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$num1=rand(1,10);
$num2=rand(1,10);
echo "num1=".$num1.",num2=".$num2."<br>";
//宣告兩個變數其值為隨機1~10

$result=($num1==$num2?"num1等於num2<br>":"num1不等於num2");
//宣告一個變數result來儲存三元運算後的值
echo $result;
//使用三元運算式(條件?程式1:程式2)
//如果num1=num2成立的話會將冒號左邊的值儲存至result
//如果不成立則會將冒號右邊的值儲存至result



?>
