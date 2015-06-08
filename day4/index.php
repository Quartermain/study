<?php
$connect = mysql_connect("localhost","root","") or die("server die");
mysql_select_db("phpbasic",$connect);
$sql = "SELECT * FROM student";
$query =mysql_query($sql);
echo mysql_num_rows($query);
$data = array();
while ($row = mysql_fetch_assoc($query)) {
	$data[]=$row;
}
echo "<table border='1' width='500'>";
foreach ($data as $key => $value) {
	echo "<tr>";
	echo "<td>".$value['fullname']."</td>";
	echo "<td>".$value['email']."</td>";
	echo "<td>".$value['address']."</td>";
	echo "<td>".$value['phone']."</td>";
	echo "<td><a href='delete.php?id=".$value['id']."'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";