<?php 


//Fibonaci
//
	// $n =11000;
	// $s1=1;
	// $s2=1;
	// for ($i = 0; $i <= $n  ; $i++) { 
	// 	echo "$s1"."<br>";
	// 	$s2= $s2+$s1;
	// 	$s1= $s2-$s1;
	// }
	$st3 = 10;
	fibonaci(1,1);
	function fibonaci ($st1,$st2) {
		$st3 = $st1 + $st2;
		if ($st1==$st2) {
			echo "$st1"."<br>";
			echo "$st2"."<br>";
		}
		if ( $st3 < 11000) {
			echo "$st3"."<br";
			fibonaci( $st2, $st3);
		}
	}
?>
