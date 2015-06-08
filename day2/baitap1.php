<html>
<head>
<title>Giai thua cua mot so nguyen duong!</title>
</head>
<body>

<?php
// $a = array("trung", "Marry", "John");
// $a[]="test";
// array_push($a, "blue", "yellow");
// unset($a[2]);
// echo "<pre>";
// var_dump($a);
// echo "</pre>";
// exit;
$b = array("name" => "trung", "job" => "dev", "age" =>"24");
var_dump($b);
echo "<br>";
echo "<br>";
$a = array(
	"0" => array("name" => "Trung", "job" => "dev", "age" => "24", ), 
	"1" => array("name" => "Test", "job" => "UI", "age" => "25", ), );
var_dump($a[0]["name"]);
?>


<?php 
	echo "<br>";
?>

<table>
	<tr>
		<td>Name</td>
		<td>Job</td>
		<td>Age</td>
	</tr>
	<?php foreach ($a as $key => $value) { ?>
		<?php if (1) { ?>
			<tr>
				<td><?php echo $value["name"]; ?></td>
				<td><?php echo $value["job"]; ?></td>
				<td><?php echo $value["age"]; ?></td>
			</tr>
		<?php } ?>

	<?php } ?>
</table>

</body>
</html>