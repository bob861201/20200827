<?php
	$names= array("A","B","C","D");
	$height = array(1.74,1.56,1.75,1.86);
	$weight = array(67,48,92,75);
	
	for ($i=0; $i < 4; $i++) { 
		echo "名字：". $names[$i].  "<br>";
		echo "身高：". $height[$i]. "公尺<br>";
		echo "體重：". $weight[$i]. "公斤<br>"; 
		$bmi= $weight[$i] / $height[$i] ** 2;
		echo "BMI：" . $bmi . "<br>";
		if ($bmi>24) {
			echo "體重有些太重囉！<br>";
		} else if ($bmi>=18.5) {
			echo "體重很標準耶！<br>";
		} else {
			echo "體重有些太輕了<br>！";
		}
	}
?>

