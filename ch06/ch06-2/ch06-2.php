<?php
header("Content-Type:text/html; charset=utf-8");
echo "input:".$_POST['input'];
//將post到的值印出
?>
<html>
<body>
<form action="ch06-2.php" method="post">
<!--在forem標籤設定要用get或者post傳遞資料
這邊是使用psot-->
	input: <input type="text" name="input" />
	<input type="submit" value="submit"/>
</form>
</body>
</html> 