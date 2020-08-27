<h2>利息計算</h2>
<hr>
<form method="POST" action="test11.php">
本金:<input type="text" size=10 name="money" value="10000">元<br>
利率:<input type="text" size=10 name="rate"  value="2.4">%<br>
期數:<input type="text" size=10 name="years" value="10">年<br>

<input type="submit" name="計算">




</form>

<?php
	$money=$_POST["money"];
	$rate=$_POST["rate"];
	$years=$_POST["years"];

	echo "<table border=1 width=200> ";
	
	echo "<tr bgcolor=#ca09ca ><td>本金</td><td>".$money."元</td></tr>"."<tr><td>利率</td><td>".$rate ."%</td></tr>"."<tr><td>期數</td><td>".$years."年</td></tr>";
	$amount=0;

	$s_amount=$money*(1+$rate/100*$years);
	$c_amount=$money*(1+$rate/100)**$years;
	echo "<tr><td>單利</td><td>".(int)$s_amount."元</td></tr>"."<tr><td>複利</td><td>".(int)$c_amount."元</td></tr>";

?>
