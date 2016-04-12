<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$array1=array(
array(array("一年A班","49"),array("一年B班","52"),array("一年C班","55"),array("一年D班","51")),
array(array("二年A班","50"),array("二年B班","55"),array("二年C班","48"),array("二年D班","52")),
array(array("三年A班","53"),array("三年B班","47"),array("三年C班","51"),array("三年D班","50"))
);
//宣告一個名為array1的陣列裡面放入班級名稱及人數
//由於三維陣列比較複雜所以要稍微注意一下[][][]分別控制甚麼
//以這個陣列來說第1個[]控制年級，第2個[]控制班級，第3個[]則是控制要顯是班級名稱還是人數

for($i=0;$i<3;$i++)
{
	for($j=0;$j<4;$j++)
	{
		echo $array1[$i][$j][0]."有".$array1[$i][$j][1]."人<br>";
	}
	echo "<br>";
}
echo "<br>";
//在這邊用到2個迴圈將陣列的內容印出
//由於有3個年級所以我們讓外圍的迴圈執行三次
//再來是有4個班級所以讓迴圈執行4次，這樣就可以把所有的迴圈內容給印出來

echo "<table border='1'>";
for($x=0;$x<count($array1);$x++)
{
	echo "<tr>";
	for($y=0;$y<count($array1[$x]);$y++)
	{
		echo "<td>";
		for($z=0;$z<count($array1[$x][$y]);$z++)
		{
			echo "[$x][$y][$z]=".$array1[$x][$y][$z]."<br>";
		}
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
//在這邊用稍為複雜的方式印出陣列裡面位置跟值
//這種迴圈寫法也可以用來顯示不同的陣列長度
//count()在括號裡面放陣列會幫你算出這個陣列長度
//如果是一維陣列那就是算一維陣列的長度
//如果是二維以上就是算最外圍除非你還有指定他外層的值

echo "<br>";
print_r($array1);
//使用print_r()去印出整個陣列的狀況




?>
