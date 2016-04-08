<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$array1=array();
//宣告一個名為array1的陣列

$array1[0]="apple";
$array1[1]="bear";
//在array1的第0個位置放入字串apple，第1個位置放入字串bear
//陣列在沒有指定位置開始放入值的時候都是從零開始

$array2=array("car","desktop");
//宣告一個名為array2的陣列，在第0個位置放入字串car，第1個位置放入字串desktop

//要將陣列裡面的值印出來分成幾種方法
//使用迴圈將裡面的值印出來，或者使用print_r(陣列)可將陣列裡面所有的東西印出來

for($i=0;$i<2;$i++)
{
	echo "array1[$i]=$array1[$i]<br>";
}
print_r($array1);
echo "<br><br><br>";
//使用for迴圈，由於array1裡面只放兩個值所以讓迴圈執行兩次即可將陣列裡面的值印出
//print_r()的用法就是在括號內放入陣列的變數名稱即可

foreach($array2 as $str)
{
	echo "array2[]=$str<br>";
}
print_r($array2);
//使用foreach印出陣列內容，詳細的使用方法請參照ch03-3

?>
