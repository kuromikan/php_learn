<?php
header("Content-Type:text/html; charset=utf-8");
//告知網頁使用utf 8編碼

$num1=rand(1,4);
echo "num1=".$num1."<br>";
//宣告一個變數其值為隨機1~4

switch ($num1) {
    case 1:
        echo "程式1<br>";
        break;
    case 2:
        echo "程式2<br>";
        break;
    case 3:
        echo "程式3<br>";
        break;
	default:
		echo "default<br>";
}
//使用switch並給他一個參數值
//如果參數值等於case後面的值，會執行下方的程式區段值到break
//參數值沒有在case裡面則會執行default的部分
//參數不只可以是數字也可是是字串，範例如下方

$str="default";
echo "<br>string=".$str."<br>";
//宣告一個變數名稱str其值為apple
switch ($str) {
    case "apple":
        echo "str is apple<br>";
        break;
    case "bee":
        echo "str is bar<br>";
        break;
    case "car":
        echo "str is cake<br>";
        break;
	default:
		echo "default<br>";
}

?>
