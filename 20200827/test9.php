<h2>
	樂透號碼
</h2>
<hr>
<?php

	$count =0;

	while ($count<6) {
		$x=rand(1,49);
		if(in_array($x, $lottery))
			continue;
			$lottery[$count]=$x;
			$count+=1;


	}

	sort($lottery);
	foreach ($lottery as $no) {
		echo $no.",";
	}

	echo "<br>特別號:";

	$x=rand(1,49);

	while ((in_array($x, $lottery))==true) {
		$x=rand(1,49);
	}

	echo $x;
?>

<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/QK8mJJJvaes" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
