<?php
header("Content-Type:text/html; charset=utf-8");
?>
<html>
<head>
<script>
function showRand() {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","ch07-1-data.php",true);
		//跟ch07-1-data.php要值
        xmlhttp.send();
}
</script>
</head>
<body>
<p><b>random</b></p>
<form> 
<input type="button" value="Click" onClick="showRand();" >
<!--點擊按鈕後執行showRand函式-->
</form>
<p><span id="txtHint"></span></p>

</body>
</html> 