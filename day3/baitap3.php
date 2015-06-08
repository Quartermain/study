<?php 
$a = array("test@gmail.com",12,80);
echo "<pre>";
$a[] = 5;
$a[] = 10;
$a[] = 15;
$a[] = 20;
$a['name'] = "nguyen van A";
$a[30]= 25;
print_r($a);

echo $a[0];

unset($a['name']);
print_r($a)

// $b = array();

// for ($i=0; $i <= 20; $i++) { 
// 	$b[] = $i;
// }

// print_r($b);

?>