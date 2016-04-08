<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$array1=array(
array("A班","50"),
array("B班","52"),
array("C班","51")
);
//宣告一個名為array1的陣列裡面放入班級名稱及人數

for($i=0;$i<3;$i++)
{
	echo $array1[$i][0]."有".$array1[$i][1]."人<br>";
}
echo "<br>";
//用for迴圈去印出陣列的狀況
//在雙引號或單引號內最多只能用到一維陣列
//如果使用echo "$array1[0][0]"; 則會出現錯誤
//所以上方改成 echo $array1然後連接想要的字串


print_r($array1);
//使用print_r()去印出整個陣列的狀況




?>
