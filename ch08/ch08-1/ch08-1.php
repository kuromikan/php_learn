<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
//啟動session
unset($_SESSION["time"]);
//將session的time內容清除
echo "session_start<br>";
echo "session設定前<br>";
echo $_SESSION["time"]."<br>";
echo "session設定後<br>";
$_SESSION["time"]=date('Y-m-d h:i:s');
//設定session的time為現在時間
echo $_SESSION["time"]."<br>";

?>
