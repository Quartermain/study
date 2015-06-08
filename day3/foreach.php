<?php 
	$a = array();
	$a ["name"] = "aaaaa";
	for ($i=1; $i <=10; $i++) { 
		$a[] = $i;
	}

	foreach ($a as $key => $value) {
		echo $value."<br/>";
	}
	// Mang 2 chieu
	// 
	$sinhvien = array();
	$sinhvien = array(
		"0" => array(
			"name" => "Trung",
			"email" => "trung@gmail.com"),
	
		"1" => array(
			"name" => "nguyen van A",
			"email" => "trung2@gmail.com"),
		
	
		"2" => array(
			"name" => "nguyen van B",
			"email" => "trung@gmail.com" ),
		
	
		"3" => array(
			"name" => "nguyen van C",
			"email" => "trung3@gmail.com" )
		);
	echo "<pre>";
	print_r($sinhvien);
	foreach ($sinhvien as $key => $value) {
		echo $value["name"]."<br/>";
	}
?>