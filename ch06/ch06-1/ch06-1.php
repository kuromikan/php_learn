<?php
header("Content-Type:text/html; charset=utf-8");
echo "input:".$_GET['input'];
//將get到的值印出
?>
<html>
<body>
<form action="ch06-1.php" method="get">
<!--在forem標籤設定要用get或者post傳遞資料
這邊是使用get-->
	input: <input type="text" name="input" />
	<input type="submit" value="submit"/>
</form>
</body>
</html> 