<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$arr1=array();
//宣告一個名為arr1的陣列

$arr1[0]="apple";
$arr1[1]="bear";
//在arr1的第0個位置放入字串apple，第1個位置放入字串bear
//陣列在沒有指定位置開始放入值的時候都是從零開始

$arr2=array("car","desktop");
//宣告一個名為arr2的陣列，在第0個位置放入字串car，第1個位置放入字串desktop

//要將陣列裡面的值印出來分成幾種方法
//使用迴圈將裡面的值印出來，或者使用print_r(陣列)可將陣列裡面所有的東西印出來

for($i=0;$i<2;$i++)
{
	echo "arr1[$i]=$arr1[$i]<br>";
}
print_r($arr1);
echo "<br><br><br>";
//使用for迴圈，由於arr1裡面只放兩個值所以讓迴圈執行兩次即可將陣列裡面的值印出
//print_r()的用法就是在括號內放入陣列的變數名稱即可

foreach($arr2 as $str)
{
	echo "arr2[]=$str<br>";
}
print_r($arr2);
//使用foreach印出陣列內容，詳細的使用方法請參照ch03-3

?>
