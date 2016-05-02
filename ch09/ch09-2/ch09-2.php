<?php
header("Content-Type:text/html; charset=utf-8");
$link = mysql_connect('localhost', 'root', '1234');
//建立一個mysql連線名稱為link
//mysql_connect('主機位址', '帳號', '密碼');
//其主機位址、帳號、密碼都可以自行修改
echo "loaclhost,root,1234<br>";
if (!$link) {
    die('無法連線' . mysql_error());
}
echo '連線成功';
echo "<br>";
mysql_query("SET NAMES 'utf8'");
//對資料庫連線使用utf8編碼
mysql_select_db("sample_db");
//選擇sample_db資料庫，如有其他資料庫可自行修改
$sql = "SELECT * FROM `score`";
//將sql語法儲存至變數$sql
$result = mysql_query($sql) or die('MySQL query error');
//使用mysql_query送出sql語法並將結果儲存至$result變數
while($row = mysql_fetch_array($result))
{
	print_r($row);
	echo "<br>";
	//印出結果值
}

mysql_close($link);
//關閉連線
?>
