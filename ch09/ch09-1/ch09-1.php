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
mysql_close($link);
?>
