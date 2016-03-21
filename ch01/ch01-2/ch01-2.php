<?php
header("Content-Type:text/html; charset=utf-8");
//宣告這個網頁編碼是utf-8

$integer1=123;
$integer2=456;
echo "integer1=".$integer1.",integer2=".$integer2."<br>";
$addition=$integer1+$integer2;
$multiplication=$integer1*$integer2;
echo "integer1+integer2=".$addition."<br>";
echo "integer1*integer2=".$multiplication."<br>";
//宣告兩個整數變數其值分別為123及456
//宣告一個變數addition將integer1+integer2的結果儲存
//宣告一個變數multiplication將integer1*integer2的結果儲存

$float1=1.5;
$float2=2.5;
echo "float1=".$float1.",float2=".$float2."<br>";
$subtraction=$float1-$float2;
$division=$float1/$float2;
echo "float1-float2=".$subtraction."<br>";
echo "float1/float2=".$division."<br>";
//宣告兩個浮點數變數其值分別為1.5及2.5
//宣告一個變數subtraction將float1-float2的結果儲存
//宣告一個變數division將float1/float2的結果儲存

$string1="apple ";
$string2="juice";
echo "string1=".$string1.",string2=".$string2."<br>";
$product=$string1.$string2;
echo "product:".$product."<br>";
//宣告兩個字串變數一個為apple 一個是juice
//在php中字串的連接是使用.
//宣告一個變數product將string1連結string2的結果儲存


?>
