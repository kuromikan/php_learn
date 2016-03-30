<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$cnt=1;
//宣告變數cnt為1
$sum=0;
//宣告變數sum為0

while($cnt<=10)
{
	echo $sum."+".$cnt."=";
	$sum=$sum+$cnt;
	echo "$sum<br>";
	$cnt++;
}
//使用while迴圈
//當cnt小於等於10時重複執行大括號內的程式
//每執行一次cnt就會+1
//此範例會印出從1加到10的過程與結果
?>
