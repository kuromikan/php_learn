<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
$_SESSION["time"]=date('Y-m-d h:i:s');
echo $_SESSION["time"]

?>
