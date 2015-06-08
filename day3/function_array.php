<?php 
	//array_keys(array);
	$a = array(
		"name" => "Nguyen Van A",
		"Email" => "trungna@gmail.com",
		"phone" => "123455",
		);

	$b = array_keys($a);
	$c = array_values($a);
	
	echo "<pre>";
	print_r($a);
	print_r($b);
	print_r($c);

	echo implode("|", $a); //in ra value

	echo $string = implode("|", $a);

	$d = explode("|", $string);
	print_r($d);
	// is_array() //true or false
	// 
	$e = "";
	if (is_array($e)) {
		echo "ok";
	} else {
		echo "Not Ok";
	}

// array_key_exists(value, array()) // True | False

	$color = array("red","blue","white","black");
	echo "<br/>";
	print_r($color);
	$i = 0;
	if (array_key_exists($i, $color)) {
		echo "yes";
	}else {
		echo "no";
	}
	
?>