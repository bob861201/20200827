
<?php
	
	echo "<table border=1 width=200> ";
	for($i=1; $i<=3; $i++) {

			if ($i%2) {
				echo "<tr bgcolor=#FFD0FF>";
			}else{
				echo "<tr bgcolor=#FF00DD>";
			}
		
		for ($j=1; $j<=9 ; $j++) { 
			echo "<td>". $i**$j ."</td>";
		}
		
		echo "</tr>";



	//echo "<table border=1 width=200> ";
	//for($i=1; $i<=9; $i++) {
		//if ($i%2) {
				//echo "<tr bgcolor=#FFD0FF>";
			//}else{
				//echo "<tr bgcolor=#FF00DD>";
			//}
		
		//echo "<td>$i</td>"."<td>".$i**2 ."</td>"."<td>".$i**3 ."</td>";
		//echo "</tr>";

	}
?>