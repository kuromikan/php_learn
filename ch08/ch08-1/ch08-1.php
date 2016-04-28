<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
unset($_SESSION["time"]);
echo "session_start<br>";
echo "session設定前<br>";
echo $_SESSION["time"]."<br>";
echo "session設定後<br>";
$_SESSION["time"]=date('Y-m-d h:i:s');
echo $_SESSION["time"]."<br>";

?>
