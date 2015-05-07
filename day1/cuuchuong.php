<html>
<head>
<title>Giai thua cua mot so nguyen duong!</title>
</head>
<body>

<?php
	echo "<table>";
		echo "<tr>";
			for ($i=2; $i <=10 ; $i++) { 
				echo "<td>";
					for ($j=1; $j<=10 ; $j++) { 
						echo "$i X $j =".$i*$j."<br>";
					}
				echo "</td>";
			}
		echo "</tr>";
	echo "</table>";
?>

</body>
</html>