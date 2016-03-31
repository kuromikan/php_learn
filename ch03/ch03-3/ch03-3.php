<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$array1=array(1,2,3,4,5);
//宣告一陣列裡面的值分別是1,2,3,4,5
$array2=array("apple","bee","car","elephant","fish");
//宣告一陣列裡面的值分別是apple,bee,car,elephant,fish
//陣列的相關知識及用法會在ch04中提到

foreach($array1 as $num)
{
	echo "num=$num<br>";
}
//使用foreach
//由於陣列array1裡面分別有1,2,3,4,5共5個值
//所以迴圈會執行5次
//每次執行會依照順序將array1裡面的值分別提出來

echo "<br><br>";
foreach($array2 as $str)
{
	echo "str=$str<br>";
}
//使用foreach
//由於陣列array2裡面分別有apple,bee,car,elephant,fish共5個值
//所以迴圈會執行5次
//每次執行會依照順序將array2裡面的值分別提出來
?>
