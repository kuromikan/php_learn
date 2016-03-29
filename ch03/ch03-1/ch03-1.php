<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$sum=0;
//宣告一個變數名稱sum其值為0

for($i=1;$i<=10;$i++)
{
	echo $sum."+".$i."=";
	$sum=$sum+$i;
	echo "$sum<br>";
}
//使用for迴圈，設定變數i的起始值為1
//當i小於等於10時重複執行大括號內的程式
//每執行一次i就會+1
//此範例會印出從1加到10的過程與結果
?>
