<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

function factorial($num)
{
	echo $num."!<br>";
	$sum=1;
	for($i=$num;$i>1;$i--)
	{
		echo "$i*";
		$sum=$sum*$i;
	}
	echo "1=".$sum;
	echo "<br><br>";
}
//自訂一個名為factorial的函式
//此函式可以計算階乘

$num=5;
factorial($num);
//可以計算$num!為多少

factorial(3);
//計算3!為多少

for($i=6;$i<11;$i++)
{
	factorial($i);
}
//計算6!~10!


?>
