<button type=button><a href="index.php">home</a></button>
<button type=button><a href="test10.php?height=1.74&weight=80">BMI1</a></button>
<button type=button><a href="test10.php?height=1.65&weight=45">BMI2</a></button>
<button type=button><a href="test10.php?height=1.92&weight=90">BMI3</a></button>
<hr>
<?php
	$height = $_GET["height"];
	$weight = $_GET["weight"];
	
	if ($height!=NULL and $weight!=NULL){
		echo "身高：". $height. "公尺<br>";
		echo "體重：". $weight. "公斤<br>"; 
		$bmi= $weight / $height ** 2;
		echo "BMI：" . $bmi . "<br>";
		if ($bmi>24) {
			echo "體重有些太重囉！<br>";
		} else if ($bmi>=18.5) {
			echo "體重很標準耶！<br>";
		} else {
			echo "體重有些太輕了<br>！";
		}
	}
	else{
		echo "你沒有在網址中指定height和weight<br>";
		echo "使用例:https://hophd.wordpress.com/2020/08/26/%e9%80%8f%e9%81%8e%e7%b6%b2%e5%9d%80%e5%88%97%e5%8f%96%e5%be%97php%e6%aa%94%e6%a1%88%e7%9a%84%e8%bc%b8%e5%85%a5/";
	}
?>

