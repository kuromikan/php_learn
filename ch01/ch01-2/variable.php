<?php
header("Content-Type:text/html; charset=utf-8");
//宣告這個網頁編碼是utf-8

$integer1=123;
$integer2=456;
$addition=$integer1+$integer2;
$multiplication=$integer1*$integer2;
echo "integer1+integer2=".$addition."<br>";
echo "integer1*integer2=".$multiplication."<br>";
//宣告兩個整數變數其值分別為123及456
//宣告一個變數addition將integer1+integer2的結果儲存
//宣告一個變數multiplication將integer1*integer2的結果儲存

$float1=1.5;
$float2=2.5;
$subtraction=$float1-$float2;
$division=$float1/$float2;
echo "float1-float2=".$subtraction."<br>";
echo "float1/float2=".$division."<br>";
//宣告兩個浮點數變數其值分別為1.5及2.5
//宣告一個變數subtraction將float1-float2的結果儲存
//宣告一個變數division將float1/float2的結果儲存

$string1="apple ";
$string2="juice";
$product=$string1.$string2;
echo "product:".$product."<br>";
//宣告兩個字串變數一個為apple 一個是juice
//在php中字串的連接是使用.
//宣告一個變數product將string1連結string2的結果儲存
//----------------------------------------------------------------------
//以下開始不同型態的變數合併
//----------------------------------------------------------------------
echo "<br><br>以下開始不同型態的變數合併<br><br>";
echo "integer1+float1=".($integer1+$float1)."<br>";
//整數+浮點數由於其中一個是浮點數運算後的值也是浮點數
echo "integer1+string1=".($integer1+$string1)."<br>";
//整數+字串因為字串內的值不是整數或浮點數所以無法相加，只會顯示integer1
echo "integer1.string1=".($integer1.$string1)."<br>";
//整數.字串由於.是字串間在使用所以這樣操作的結果就是把integer1當成字串來看
//將兩者相連接
$string3="3";
echo "integer1+string3=".($integer1+$string3)."<br>";
//整數+字串因為字串內的值可被轉為數字所以可以直接相加
echo "integer1.string3=".($integer1.$string3)."<br>";
//整數.字串雖然string3的值是3可是由於用.相連結的關係所以不會得到相加的結果

//----------------------------------------------------------------------
//以下開始型態變化
//----------------------------------------------------------------------
echo "<br><br>以下開始型態變化<br><br>";

$string4="3a";
//宣告一個變數string4其值為3a是一個字串
echo "string4=".$string4."<br>";
$intstring4=(int)$string4;
//宣告一個變數intstring4將string4轉成整數後儲存
echo "(int)string4=".$intstring4."<br>";
$floatvalstring4=floatval($string4);
//宣告一個變數floatvalstring4將string4轉成浮點數後儲存
echo "floatval(string4)=".$floatvalstring4."<br>";

$float3=4.56;
//宣告一個變數float3其值為4.56是一個浮點數
echo "float3=".$float3."<br>";
$intfloat3=(int)$float3;
//宣告一個變數intfloat3將float3轉成整數後儲存
echo "(int)float3=".$intfloat3."<br>";
$stringfloat3=(string)$float3;
//宣告一個變數stringfloat3將float3轉成字串後儲存
echo "(string)$float3=".$stringfloat3."<br>";


?>
